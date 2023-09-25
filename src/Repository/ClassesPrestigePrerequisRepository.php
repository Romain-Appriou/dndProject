<?php

namespace App\Repository;

use App\Entity\Dnd35Classesprestigeprerequis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Classesprestigeprerequis>
 *
 * @method Dnd35Classesprestigeprerequis|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Classesprestigeprerequis|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Classesprestigeprerequis[]    findAll()
 * @method Dnd35Classesprestigeprerequis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassesPrestigePrerequisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Classesprestigeprerequis::class);
    }

    public function add(Dnd35Classesprestigeprerequis $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Classesprestigeprerequis $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Classesprestigeprerequis[] Returns an array of Dnd35Classesprestigeprerequis objects
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

//    public function findOneBySomeField($value): ?Dnd35Classesprestigeprerequis
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
