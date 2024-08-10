<?php
// src/Repository/VAdsAvisDepotRepository.php

namespace App\Repository;

use App\Entity\VAdsAvisDepot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class VAdsAvisDepotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VAdsAvisDepot::class);
    }

    // Add custom query methods if needed
}
