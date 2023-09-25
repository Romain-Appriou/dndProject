<?php

namespace App\Repository;

use App\Entity\Dnd35Objetsmagiquestypesarmures;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Objetsmagiquestypesarmures>
 *
 * @method Dnd35Objetsmagiquestypesarmures|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Objetsmagiquestypesarmures|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Objetsmagiquestypesarmures[]    findAll()
 * @method Dnd35Objetsmagiquestypesarmures[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjetsMagiquesTypesArmuresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Objetsmagiquestypesarmures::class);
    }

    public function add(Dnd35Objetsmagiquestypesarmures $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Objetsmagiquestypesarmures $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Objetsmagiquestypesarmures[] Returns an array of Dnd35Objetsmagiquestypesarmures objects
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

//    public function findOneBySomeField($value): ?Dnd35Objetsmagiquestypesarmures
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
