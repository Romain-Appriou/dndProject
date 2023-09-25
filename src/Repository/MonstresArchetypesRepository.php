<?php

namespace App\Repository;

use App\Entity\Dnd35Monstresarchetypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Monstresarchetypes>
 *
 * @method Dnd35Monstresarchetypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Monstresarchetypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Monstresarchetypes[]    findAll()
 * @method Dnd35Monstresarchetypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MonstresArchetypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Monstresarchetypes::class);
    }

    public function add(Dnd35Monstresarchetypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Monstresarchetypes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Monstresarchetypes[] Returns an array of Dnd35Monstresarchetypes objects
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

//    public function findOneBySomeField($value): ?Dnd35Monstresarchetypes
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
