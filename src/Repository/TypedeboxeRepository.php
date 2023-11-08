<?php

namespace App\Repository;

use App\Entity\Typedeboxe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Typedeboxe>
 *
 * @method Typedeboxe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Typedeboxe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Typedeboxe[]    findAll()
 * @method Typedeboxe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypedeboxeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Typedeboxe::class);
    }

//    /**
//     * @return Typedeboxe[] Returns an array of Typedeboxe objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Typedeboxe
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
