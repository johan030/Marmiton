<?php

namespace App\DataFixtures;

use App\Entity\Ingredients;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class IngredientsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
            for ($i = 0; $i<10; $i++) {
                $ingredient = new Ingredients;
                $ingredient->setName('name'. $i);
    
    
    
                $manager->persist($ingredient);
            }

        $manager->flush();
    }
}
