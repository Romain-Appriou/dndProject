<?php

namespace App\Repository;

use App\Entity\Dnd35Racecompetence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Racecompetence>
 *
 * @method Dnd35Racecompetence|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Racecompetence|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Racecompetence[]    findAll()
 * @method Dnd35Racecompetence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RaceCompetenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Racecompetence::class);
    }

    public function add(Dnd35Racecompetence $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Racecompetence $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Racecompetence[] Returns an array of Dnd35Racecompetence objects
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

//    public function findOneBySomeField($value): ?Dnd35Racecompetence
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
