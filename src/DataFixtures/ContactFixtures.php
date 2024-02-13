<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Contact;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ContactFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create("fr_FR");

        for ($i=0; $i < 100 ; $i++){
        $contact = new Contact();
        $contact -> setNom($faker-> lastName())
            -> setPrenom($faker->firstName())
            -> setPhoneNum($faker->phoneNumber())
            -> setJob($faker-> jobTitle())
            -> setCompanyName( $faker->company());
            $manager->persist($contact);
        }

        $manager->flush();
        
    }
}
