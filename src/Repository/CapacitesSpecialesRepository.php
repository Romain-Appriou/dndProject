<?php

namespace App\Repository;

use App\Entity\Dnd35Capacitesspeciales;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Capacitesspeciales>
 *
 * @method Dnd35Capacitesspeciales|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Capacitesspeciales|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Capacitesspeciales[]    findAll()
 * @method Dnd35Capacitesspeciales[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CapacitesSpecialesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Capacitesspeciales::class);
    }

    public function add(Dnd35Capacitesspeciales $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Capacitesspeciales $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Capacitesspeciales[] Returns an array of Dnd35Capacitesspeciales objects
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

//    public function findOneBySomeField($value): ?Dnd35Capacitesspeciales
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
