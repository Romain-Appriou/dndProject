<?php

namespace App\Repository;

use App\Entity\Dnd35Effetdon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Effetdon>
 *
 * @method Dnd35Effetdon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Effetdon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Effetdon[]    findAll()
 * @method Dnd35Effetdon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EffetDonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Effetdon::class);
    }

    public function add(Dnd35Effetdon $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Effetdon $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Effetdon[] Returns an array of Dnd35Effetdon objects
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

//    public function findOneBySomeField($value): ?Dnd35Effetdon
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
