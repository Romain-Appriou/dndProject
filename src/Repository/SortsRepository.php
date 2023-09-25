<?php

namespace App\Repository;

use App\Entity\Dnd35Sorts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Sorts>
 *
 * @method Dnd35Sorts|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Sorts|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Sorts[]    findAll()
 * @method Dnd35Sorts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SortsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Sorts::class);
    }

    public function add(Dnd35Sorts $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Sorts $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Sorts[] Returns an array of Dnd35Sorts objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Dnd35Sorts
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
