<?php

namespace App\Repository;

use App\Entity\Dnd35Sortclasse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Sortclasse>
 *
 * @method Dnd35Sortclasse|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Sortclasse|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Sortclasse[]    findAll()
 * @method Dnd35Sortclasse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SortClasseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Sortclasse::class);
    }

    public function add(Dnd35Sortclasse $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Sortclasse $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Sortclasse[] Returns an array of Dnd35Sortclasse objects
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

//    public function findOneBySomeField($value): ?Dnd35Sortclasse
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
