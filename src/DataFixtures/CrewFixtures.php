<?php

namespace App\DataFixtures;

use App\Entity\Crew;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CrewFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $crewPHP = new Crew();
        $crewPHP->setLabel('PHP');
        $crewPHP->setBeganAt(new DateTimeImmutable());
        $crewPHP->setCreatedAt(new DateTimeImmutable());
        
        $manager->persist($crewPHP);

        $crewJS = new Crew();
        $crewJS->setLabel('JS');
        $crewJS->setBeganAt(new DateTimeImmutable());
        $crewJS->setCreatedAt(new DateTimeImmutable());

        $manager->persist($crewJS);

        $manager->flush();
    }
}
