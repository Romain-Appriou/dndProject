<?php

namespace App\Repository;

use App\Entity\Dnd35Sortclasseprestige;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Sortclasseprestige>
 *
 * @method Dnd35Sortclasseprestige|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Sortclasseprestige|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Sortclasseprestige[]    findAll()
 * @method Dnd35Sortclasseprestige[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SortClassePrestigeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Sortclasseprestige::class);
    }

    public function add(Dnd35Sortclasseprestige $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Sortclasseprestige $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Sortclasseprestige[] Returns an array of Dnd35Sortclasseprestige objects
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

//    public function findOneBySomeField($value): ?Dnd35Sortclasseprestige
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
