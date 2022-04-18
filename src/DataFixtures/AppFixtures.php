<?php

namespace App\DataFixtures;

use App\Command\AddAdminCommand;
use App\Entity\Admin;
use App\Entity\User;
use App\Repository\Backend\UserRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('user@gmail.com');
        $userpassword = $this->hasher->hashPassword($user, '12345678');
        $user->setPassword($userpassword);
        $manager->persist($user);
        $manager->flush();

        $expert = new Admin();
        $expert->setEmail('admin@gmail.com');
        $expertpassword = $this->hasher->hashPassword($expert, '12345678');
        $expert->setPassword($expertpassword);
        $expert->setRoles((array)'ROLE_EXPERT');
        $manager->persist($expert);
        $manager->flush();


        $manager->flush();
    }
}
