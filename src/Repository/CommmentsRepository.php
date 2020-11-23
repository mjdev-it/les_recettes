<?php

namespace App\Repository;

use App\Entity\Commments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Commments|null find($id, $lockMode = null, $lockVersion = null)
 * @method Commments|null findOneBy(array $criteria, array $orderBy = null)
 * @method Commments[]    findAll()
 * @method Commments[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommmentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Commments::class);
    }

    // /**
    //  * @return Commments[] Returns an array of Commments objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Commments
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
