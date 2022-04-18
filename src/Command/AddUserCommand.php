<?php

namespace App\Command;

use App\Entity\User;
use App\Repository\Backend\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Stopwatch\Stopwatch;

#[AsCommand(
    name: 'app:add-user',
    description: 'Create User',
)]
class AddUserCommand extends Command
{
    protected static $defaultName = 'app:add-user';
    protected static $defaultDescription = 'Create User';
    /**
     * @var EntityManagerInterface
     */
    public $entityManager;
    /**
     * @var UserPasswordHasherInterface
     */
    public $passwordHasher;
    /**
     * @var UserRepository
     */
    public $userRepository;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher, UserRepository $userRepository)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
        $this->passwordHasher = $passwordHasher;
        $this->userRepository = $userRepository;
    }
    protected function configure(): void
    {
        $this
            ->addOption('email', 'em',InputArgument::REQUIRED, 'Email')
            ->addOption('password', 'p',InputArgument::REQUIRED, 'Password')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $stopwatch = new Stopwatch();
        $stopwatch->start('add-user-command');
        $email = $input->getOption('email');
        $password = $input->getOption('password');
        $io->title('Add User Command Wizard');
        $io->text([
            'Please enter some information'
        ]);
        if (!$email){
            $email = $io->ask('Email');
        }
        if (!$password){
            $password = $io->askHidden('Password (your type will be hidden)');
        }
        try {
            $user = $this->createUser($email,$password);
        } catch (RuntimeException $exception)
        {
            $io->comment($exception->getMessage());
            return Command::FAILURE;
        }


        $successMessage = sprintf('%s was successfully created',
            'User',
            $email
        );
        $io->success($successMessage);
        $event = $stopwatch->stop('add-user-command');
        $stopwatchMessage = sprintf('New User\'s id: %s / Elapsed time: %.2f ms / Consumed memory: %.2f MB',
            $user->getId(), $event->getDuration(), $event->getMemory()
        );
        $io->comment($stopwatchMessage);

        return Command::SUCCESS;
    }

    /**
     * @param string $email
     * @param string $password
     * @param bool $isAdmin
     * @return User
     */

    private function createUser(string $email, string $password): User
    {
        $existingUser = $this->userRepository->findOneBy(['email' => $email]);
        if ($existingUser)
        {
            throw new RuntimeException('User already exist');
        }

        $user = new User();
        $user->setEmail($email);
        $user->setRoles(array('ROLE_USER'));
        $user->setPassword(
            $this->passwordHasher->hashPassword(
                $user,
                $password
            )
        );
        $user->setIsVerified(1);
        $this->entityManager->persist($user);
        $this->entityManager->flush();
        return $user;
    }
}
