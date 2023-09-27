<?php

namespace App\Repository;

use App\Entity\Dnd35Races;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Races>
 *
 * @method Dnd35Races|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Races|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Races[]    findAll()
 * @method Dnd35Races[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RacesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Races::class);
    }

    public function add(Dnd35Races $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Races $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getClassesPredilection($id) 
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT `classes`.`nom` AS `classepredilection`
        FROM `dnd35_races` 
        INNER JOIN `classes` ON `dnd35_races`.`idClassePredilection` = `classes`.`id` 
        WHERE `dnd35_races`.`id` =' . $id; 

        $stmt = $conn->executeQuery($sql);

        return $stmt->fetchAssociative();
    }

//    /**
//     * @return Dnd35Races[] Returns an array of Dnd35Races objects
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

//    public function findOneBySomeField($value): ?Dnd35Races
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
