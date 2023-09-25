<?php

namespace App\Repository;

use App\Entity\Dnd35Modificateurs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Modificateurs>
 *
 * @method Dnd35Modificateurs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Modificateurs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Modificateurs[]    findAll()
 * @method Dnd35Modificateurs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModificateursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Modificateurs::class);
    }

    public function add(Dnd35Modificateurs $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Modificateurs $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Modificateurs[] Returns an array of Dnd35Modificateurs objects
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

//    public function findOneBySomeField($value): ?Dnd35Modificateurs
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
