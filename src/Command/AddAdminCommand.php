<?php

namespace App\Command;

use App\Entity\Admin;
use App\Repository\Backend\AdminRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Stopwatch\Stopwatch;

#[AsCommand(
    name: 'app:add-admin',
    description: 'Create Admin',
)]
class AddAdminCommand extends Command
{
    protected static $defaultName = 'app:add-admin';
    protected static $defaultDescription = 'Create Admin';
    /**
     * @var EntityManagerInterface
     */
    public $entityManager;
    /**
     * @var UserPasswordHasherInterface
     */
    public $passwordHasher;
    /**
     * @var AdminRepository
     */
    public $adminRepository;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher, AdminRepository $adminRepository)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
        $this->passwordHasher = $passwordHasher;
        $this->adminRepository = $adminRepository;
    }
    protected function configure(): void
    {
        $this
            ->addOption('email', 'em',InputArgument::REQUIRED, 'Email')
            ->addOption('password', 'p',InputArgument::REQUIRED, 'Password')
            ->addOption('isAdmin', '',InputArgument::OPTIONAL, 'If set the user is created as an administrator',0)

        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $stopwatch = new Stopwatch();
        $stopwatch->start('add-admin-command');
        $email = $input->getOption('email');
        $password = $input->getOption('password');
        $isAdmin = $input->getOption('isAdmin');
        $io->title('Add Admin Command Wizard');
        $io->text([
            'Please enter some information'
        ]);
        if (!$email){
            $email = $io->ask('Email');
        }
        if (!$password){
            $password = $io->askHidden('Password (your type will be hidden)');
        }
        if (!$isAdmin){
            $question = new Question('Is admin? (1 or 0)',0);
            $isAdmin = $io->askQuestion($question);
        }
        $isAdmin = boolval($isAdmin);
        try {
            $admin = $this->createAdmin($email,$password,$isAdmin);
        } catch (RuntimeException $exception)
        {
            $io->comment($exception->getMessage());
            return Command::FAILURE;
        }


        $successMessage = sprintf('%s was successfully created',
            $isAdmin ? 'Admin': 'Admin',
            $email
        );
        $io->success($successMessage);
        $event = $stopwatch->stop('add-admin-command');
        $stopwatchMessage = sprintf('New Admin\'s id: %s / Elapsed time: %.2f ms / Consumed memory: %.2f MB',
        $admin->getId(), $event->getDuration(), $event->getMemory()
        );
        $io->comment($stopwatchMessage);

        return Command::SUCCESS;
    }

    /**
     * @param string $email
     * @param string $password
     * @param bool $isAdmin
     * @return Admin
     */

    private function createAdmin(string $email, string $password, bool $isAdmin): Admin
    {
        $existingAdmin = $this->adminRepository->findOneBy(['email' => $email]);
        if ($existingAdmin)
        {
            throw new RuntimeException('Admin already exist');
        }

        $admin = new Admin();
        $admin->setEmail($email);
        $admin->setRoles(array($isAdmin ? 'ROLE_ADMIN' : 'ROLE_USER'));
        $admin->setPassword(
            $this->passwordHasher->hashPassword(
                $admin,
                $password
            )
        );
        $this->entityManager->persist($admin);
        $this->entityManager->flush();
        return $admin;
    }
}
