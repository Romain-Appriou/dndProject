<?php

namespace App\Repository;

use App\Entity\Dnd35Effetcharge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Effetcharge>
 *
 * @method Dnd35Effetcharge|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Effetcharge|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Effetcharge[]    findAll()
 * @method Dnd35Effetcharge[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EffetChargeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Effetcharge::class);
    }

    public function add(Dnd35Effetcharge $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Effetcharge $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Effetcharge[] Returns an array of Dnd35Effetcharge objects
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

//    public function findOneBySomeField($value): ?Dnd35Effetcharge
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
