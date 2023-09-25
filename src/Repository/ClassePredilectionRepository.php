<?php

namespace App\Repository;

use App\Entity\Dnd35Classepredilection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Classepredilection>
 *
 * @method Dnd35Classepredilection|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Classepredilection|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Classepredilection[]    findAll()
 * @method Dnd35Classepredilection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassePredilectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Classepredilection::class);
    }

    public function add(Dnd35Classepredilection $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Classepredilection $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Classepredilection[] Returns an array of Dnd35Classepredilection objects
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

//    public function findOneBySomeField($value): ?Dnd35Classepredilection
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
