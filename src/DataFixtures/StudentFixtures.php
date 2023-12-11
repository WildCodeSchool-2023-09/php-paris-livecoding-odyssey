<?php

namespace App\DataFixtures;

use App\Entity\Student;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory as Faker;

class StudentFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $student = new Student();
            $student->setFirstname($faker->firstName());
            $student->setLastname($faker->lastName());
            $student->setBirthdate(DateTimeImmutable::createFromMutable($faker->dateTimeBetween('-30 years', '-25 years')));
            $student->setEmail($faker->email());
            $student->setPhone($faker->phoneNumber());
            $student->setPicture($faker->imageUrl());

            $manager->persist($student);
        }

        $manager->flush();
    }
}
