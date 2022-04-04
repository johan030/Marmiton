<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Recette;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class RecetteFixtures extends Fixture
{
    private $faker;
    public function __construct()
    {
        $this->faker = Faker\Factory::create('fr_FR');
    }
   
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i<10; $i++) {
        $recette = new Recette;
        $recette->setTitle($this->faker->title);
        $recette->setCreatedAt(\DateTimeImmutable::createFromMutable($this->faker->dateTimeBetween('-6 months')));
        $recette->setContent($this->faker->text);
        $recette->setUserId($this->faker->numberBetween());
        $recette->setCategorieId($this->faker->numberBetween());

        // on va chercher la reference de la categorie 
      
        $manager->persist($recette);
        }
        $manager->flush();
       
    }
}
