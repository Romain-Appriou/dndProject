<?php

namespace App\Repository;

use App\Entity\Dnd35Classeleveling;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Classeleveling>
 *
 * @method Dnd35Classeleveling|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Classeleveling|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Classeleveling[]    findAll()
 * @method Dnd35Classeleveling[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClasseLevellingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Classeleveling::class);
    }

    public function add(Dnd35Classeleveling $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Classeleveling $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Classeleveling[] Returns an array of Dnd35Classeleveling objects
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

//    public function findOneBySomeField($value): ?Dnd35Classeleveling
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
