<?php

namespace App\Repository;

use App\Entity\Dnd35Monstresaugmentationtaille;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Monstresaugmentationtaille>
 *
 * @method Dnd35Monstresaugmentationtaille|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Monstresaugmentationtaille|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Monstresaugmentationtaille[]    findAll()
 * @method Dnd35Monstresaugmentationtaille[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MonstresAugmentationTailleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Monstresaugmentationtaille::class);
    }

    public function add(Dnd35Monstresaugmentationtaille $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Monstresaugmentationtaille $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Monstresaugmentationtaille[] Returns an array of Dnd35Monstresaugmentationtaille objects
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

//    public function findOneBySomeField($value): ?Dnd35Monstresaugmentationtaille
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
