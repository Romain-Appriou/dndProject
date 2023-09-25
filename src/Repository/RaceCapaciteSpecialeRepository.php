<?php

namespace App\Repository;

use App\Entity\Dnd35Racecapacitespeciale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Racecapacitespeciale>
 *
 * @method Dnd35Racecapacitespeciale|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Racecapacitespeciale|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Racecapacitespeciale[]    findAll()
 * @method Dnd35Racecapacitespeciale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RaceCapaciteSpecialeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Racecapacitespeciale::class);
    }

    public function add(Dnd35Racecapacitespeciale $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Racecapacitespeciale $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Racecapacitespeciale[] Returns an array of Dnd35Racecapacitespeciale objects
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

//    public function findOneBySomeField($value): ?Dnd35Racecapacitespeciale
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
