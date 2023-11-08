<?php

namespace App\DataFixtures;

use App\Entity\Boxeur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $boxeur = new Boxeur();
        $boxeur->setNom('dupont')
              ->setPrenom('lucien')
              ->setDatedenaissance('19/03/1981')
              ->setCategorieage('senior')
              ->setEmail('lucienluludupont@gmail.com')
              ->setTelephone('0610041848')
              ->setAdresse('maiol  roeger salengro')
              ->setCodepostal('80090')
              ->setVille('Amiens')
              ->setLicencecreele('04/09/2023')
              ->setTypedelicence('deleguee de reunion')          
              
              ;
        $manager->persist($boxeur);
    }
}
