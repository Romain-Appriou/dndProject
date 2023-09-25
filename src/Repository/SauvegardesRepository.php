<?php

namespace App\Repository;

use App\Entity\Dnd35Sauvegardes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Sauvegardes>
 *
 * @method Dnd35Sauvegardes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Sauvegardes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Sauvegardes[]    findAll()
 * @method Dnd35Sauvegardes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SauvegardesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Sauvegardes::class);
    }

    public function add(Dnd35Sauvegardes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Sauvegardes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Sauvegardes[] Returns an array of Dnd35Sauvegardes objects
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

//    public function findOneBySomeField($value): ?Dnd35Sauvegardes
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
