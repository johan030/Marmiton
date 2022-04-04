<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\User;


use Doctrine\Persistence\ObjectManager;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $userPasswordHasher;
    private $faker;

    public function __construct(UserPasswordHasherInterface $userPasswordHasher) {
        $this->userPasswordHasher = $userPasswordHasher;
        $this->faker = Faker\Factory::create('fr_FR');
    }
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i<10; $i++) {
            // $product = new Product();
            $user = new User;
            $user->setEmail($this->faker->email);
            $user->setFirstname($this->faker->firstname);
            $user->setLastname($this->faker->lastname);
            $user->setUsername($this->faker->username);
            $user->setRoles(['ROLE_USER']);
            $user->setPassword(
                $this->userPasswordHasher->hashPassword(
                    $user,
                    'test'));
             $user->setIsVerified($this->faker->boolean(90));;
       
            $manager->persist($user);
        }
        $manager->flush();
    }
}