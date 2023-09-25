<?php

namespace App\Repository;

use App\Entity\Dnd35Classecapacitespeciale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Classecapacitespeciale>
 *
 * @method Dnd35Classecapacitespeciale|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Classecapacitespeciale|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Classecapacitespeciale[]    findAll()
 * @method Dnd35Classecapacitespeciale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassecapacitespecialeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Classecapacitespeciale::class);
    }

    public function add(Dnd35Classecapacitespeciale $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Classecapacitespeciale $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Classecapacitespeciale[] Returns an array of Dnd35Classecapacitespeciale objects
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

//    public function findOneBySomeField($value): ?Dnd35Classecapacitespeciale
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
