<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategorieFixtures extends Fixture
{


    public function load(ObjectManager $manager): void
    {

        for ($i = 0; $i < 10; $i++) {
            // $product = new Product();
            $categorie = new Categorie;
            $categorie->setName('Plat');
            $categorie->setIngredients('ingredients' . $i);
            $manager->persist($categorie);

            $categorie = new Categorie;
            $categorie->setIngredients('ingredients' . $i);
            $categorie->setName('Entrée');


            $manager->persist($categorie);

            $categorie = new Categorie;
            $categorie->setIngredients('ingredients' . $i);
            $categorie->setName('Dessert');


            $manager->persist($categorie);
        }


        $manager->flush();
    }
}
