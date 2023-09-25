<?php

namespace App\Repository;

use App\Entity\Dnd35Monstresaugmentationfp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Monstresaugmentationfp>
 *
 * @method Dnd35Monstresaugmentationfp|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Monstresaugmentationfp|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Monstresaugmentationfp[]    findAll()
 * @method Dnd35Monstresaugmentationfp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MonstresAugmentationFPRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Monstresaugmentationfp::class);
    }

    public function add(Dnd35Monstresaugmentationfp $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Monstresaugmentationfp $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Monstresaugmentationfp[] Returns an array of Dnd35Monstresaugmentationfp objects
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

//    public function findOneBySomeField($value): ?Dnd35Monstresaugmentationfp
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
