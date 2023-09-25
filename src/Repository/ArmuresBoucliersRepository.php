<?php

namespace App\Repository;

use App\Entity\Dnd35Armuresboucliers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Armuresboucliers>
 *
 * @method Dnd35Armuresboucliers|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Armuresboucliers|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Armuresboucliers[]    findAll()
 * @method Dnd35Armuresboucliers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArmuresBoucliersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Armuresboucliers::class);
    }

    public function add(Dnd35Armuresboucliers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Armuresboucliers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Armuresboucliers[] Returns an array of Dnd35Armuresboucliers objects
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

//    public function findOneBySomeField($value): ?Dnd35Armuresboucliers
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
