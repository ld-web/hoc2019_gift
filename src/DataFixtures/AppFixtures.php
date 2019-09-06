<?php

namespace App\DataFixtures;

use App\Entity\Gift;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            // Je crée un objet
            $gift = new Gift();
            // J'affecte ses attributs
            $gift->setTitle($faker->sentence(5, true))
                ->setDescription($faker->paragraph(5, true));

            // J'indique à mon gestionnaire d'entités que je veux insérer cet objet en BDD
            $manager->persist($gift);
        }

        // Je valide les modifications effectuées (insertions, modifications sur des enregistrements, etc...) dans la BDD
        $manager->flush();
    }
}
