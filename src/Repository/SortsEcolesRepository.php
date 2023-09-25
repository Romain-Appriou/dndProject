<?php

namespace App\Repository;

use App\Entity\Dnd35Sortsecoles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Sortsecoles>
 *
 * @method Dnd35Sortsecoles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Sortsecoles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Sortsecoles[]    findAll()
 * @method Dnd35Sortsecoles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SortsEcolesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Sortsecoles::class);
    }

    public function add(Dnd35Sortsecoles $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Sortsecoles $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Sortsecoles[] Returns an array of Dnd35Sortsecoles objects
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

//    public function findOneBySomeField($value): ?Dnd35Sortsecoles
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
