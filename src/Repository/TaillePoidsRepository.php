<?php

namespace App\Repository;

use App\Entity\Dnd35Taillepoids;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Taillepoids>
 *
 * @method Dnd35Taillepoids|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Taillepoids|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Taillepoids[]    findAll()
 * @method Dnd35Taillepoids[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TaillePoidsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Taillepoids::class);
    }

    public function add(Dnd35Taillepoids $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Taillepoids $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Taillepoids[] Returns an array of Dnd35Taillepoids objects
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

//    public function findOneBySomeField($value): ?Dnd35Taillepoids
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
