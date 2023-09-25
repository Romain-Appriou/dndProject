<?php

namespace App\Repository;

use App\Entity\Dnd35Classesprestigeleveling;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Classesprestigeleveling>
 *
 * @method Dnd35Classesprestigeleveling|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Classesprestigeleveling|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Classesprestigeleveling[]    findAll()
 * @method Dnd35Classesprestigeleveling[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassesPrestigeLevelingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Classesprestigeleveling::class);
    }

    public function add(Dnd35Classesprestigeleveling $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Classesprestigeleveling $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Classesprestigeleveling[] Returns an array of Dnd35Classesprestigeleveling objects
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

//    public function findOneBySomeField($value): ?Dnd35Classesprestigeleveling
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
