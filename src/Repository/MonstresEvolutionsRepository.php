<?php

namespace App\Repository;

use App\Entity\Dnd35Monstresevolutions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Monstresevolutions>
 *
 * @method Dnd35Monstresevolutions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Monstresevolutions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Monstresevolutions[]    findAll()
 * @method Dnd35Monstresevolutions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MonstresEvolutionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Monstresevolutions::class);
    }

    public function add(Dnd35Monstresevolutions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Monstresevolutions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Monstresevolutions[] Returns an array of Dnd35Monstresevolutions objects
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

//    public function findOneBySomeField($value): ?Dnd35Monstresevolutions
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
