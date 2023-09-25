<?php

namespace App\Repository;

use App\Entity\Dnd35Modificateurtaille;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Modificateurtaille>
 *
 * @method Dnd35Modificateurtaille|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Modificateurtaille|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Modificateurtaille[]    findAll()
 * @method Dnd35Modificateurtaille[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModificateursTailleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Modificateurtaille::class);
    }

    public function add(Dnd35Modificateurtaille $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Modificateurtaille $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Modificateurtaille[] Returns an array of Dnd35Modificateurtaille objects
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

//    public function findOneBySomeField($value): ?Dnd35Modificateurtaille
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
