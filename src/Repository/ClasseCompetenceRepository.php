<?php

namespace App\Repository;

use App\Entity\Dnd35Classecompetence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Classecompetence>
 *
 * @method Dnd35Classecompetence|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Classecompetence|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Classecompetence[]    findAll()
 * @method Dnd35Classecompetence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClasseCompetenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Classecompetence::class);
    }

    public function add(Dnd35Classecompetence $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Classecompetence $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Classecompetence[] Returns an array of Dnd35Classecompetence objects
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

//    public function findOneBySomeField($value): ?Dnd35Classecompetence
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
