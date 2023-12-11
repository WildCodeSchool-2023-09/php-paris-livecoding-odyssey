<?php

namespace App\Repository;

use App\Entity\Crew;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Crew>
 *
 * @method Crew|null find($id, $lockMode = null, $lockVersion = null)
 * @method Crew|null findOneBy(array $criteria, array $orderBy = null)
 * @method Crew[]    findAll()
 * @method Crew[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CrewRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Crew::class);
    }
}
