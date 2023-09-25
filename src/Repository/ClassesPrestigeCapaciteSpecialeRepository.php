<?php

namespace App\Repository;

use App\Entity\Dnd35Classesprestigecapacitespeciale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Classesprestigecapacitespeciale>
 *
 * @method Dnd35Classesprestigecapacitespeciale|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Classesprestigecapacitespeciale|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Classesprestigecapacitespeciale[]    findAll()
 * @method Dnd35Classesprestigecapacitespeciale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassesPrestigeCapaciteSpecialeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Classesprestigecapacitespeciale::class);
    }

    public function add(Dnd35Classesprestigecapacitespeciale $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Classesprestigecapacitespeciale $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Classesprestigecapacitespeciale[] Returns an array of Dnd35Classesprestigecapacitespeciale objects
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

//    public function findOneBySomeField($value): ?Dnd35Classesprestigecapacitespeciale
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
