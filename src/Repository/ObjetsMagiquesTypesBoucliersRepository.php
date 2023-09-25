<?php

namespace App\Repository;

use App\Entity\Dnd35Objetsmagiquestypesboucliers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Objetsmagiquestypesboucliers>
 *
 * @method Dnd35Objetsmagiquestypesboucliers|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Objetsmagiquestypesboucliers|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Objetsmagiquestypesboucliers[]    findAll()
 * @method Dnd35Objetsmagiquestypesboucliers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjetsMagiquesTypesBoucliersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Objetsmagiquestypesboucliers::class);
    }

    public function add(Dnd35Objetsmagiquestypesboucliers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Objetsmagiquestypesboucliers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Objetsmagiquestypesboucliers[] Returns an array of Dnd35Objetsmagiquestypesboucliers objects
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

//    public function findOneBySomeField($value): ?Dnd35Objetsmagiquestypesboucliers
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
