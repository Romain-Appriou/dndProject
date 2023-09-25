<?php

namespace App\Repository;

use App\Entity\Dnd35Classesprestige;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Classesprestige>
 *
 * @method Dnd35Classesprestige|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Classesprestige|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Classesprestige[]    findAll()
 * @method Dnd35Classesprestige[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassesPrestigeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Classesprestige::class);
    }

    public function add(Dnd35Classesprestige $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Classesprestige $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Classesprestige[] Returns an array of Dnd35Classesprestige objects
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

//    public function findOneBySomeField($value): ?Dnd35Classesprestige
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
