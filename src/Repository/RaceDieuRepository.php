<?php

namespace App\Repository;

use App\Entity\Dnd35Racedieu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Racedieu>
 *
 * @method Dnd35Racedieu|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Racedieu|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Racedieu[]    findAll()
 * @method Dnd35Racedieu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RaceDieuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Racedieu::class);
    }

    public function add(Dnd35Racedieu $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Racedieu $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Racedieu[] Returns an array of Dnd35Racedieu objects
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

//    public function findOneBySomeField($value): ?Dnd35Racedieu
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
