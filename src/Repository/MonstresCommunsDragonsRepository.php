<?php

namespace App\Repository;

use App\Entity\Dnd35Monstrescommundragons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Monstrescommundragons>
 *
 * @method Dnd35Monstrescommundragons|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Monstrescommundragons|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Monstrescommundragons[]    findAll()
 * @method Dnd35Monstrescommundragons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MonstresCommunsDragonsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Monstrescommundragons::class);
    }

    public function add(Dnd35Monstrescommundragons $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Monstrescommundragons $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Monstrescommundragons[] Returns an array of Dnd35Monstrescommundragons objects
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

//    public function findOneBySomeField($value): ?Dnd35Monstrescommundragons
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
