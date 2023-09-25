<?php

namespace App\Repository;

use App\Entity\Dnd35Monstresaugmentationdegats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Monstresaugmentationdegats>
 *
 * @method Dnd35Monstresaugmentationdegats|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Monstresaugmentationdegats|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Monstresaugmentationdegats[]    findAll()
 * @method Dnd35Monstresaugmentationdegats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MonstresAugmentationDegatsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Monstresaugmentationdegats::class);
    }

    public function add(Dnd35Monstresaugmentationdegats $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Monstresaugmentationdegats $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Monstresaugmentationdegats[] Returns an array of Dnd35Monstresaugmentationdegats objects
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

//    public function findOneBySomeField($value): ?Dnd35Monstresaugmentationdegats
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
