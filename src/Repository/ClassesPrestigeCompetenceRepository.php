<?php

namespace App\Repository;

use App\Entity\Dnd35Classesprestigecompetence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Classesprestigecompetence>
 *
 * @method Dnd35Classesprestigecompetence|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Classesprestigecompetence|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Classesprestigecompetence[]    findAll()
 * @method Dnd35Classesprestigecompetence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassesPrestigeCompetenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Classesprestigecompetence::class);
    }

    public function add(Dnd35Classesprestigecompetence $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Classesprestigecompetence $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Classesprestigecompetence[] Returns an array of Dnd35Classesprestigecompetence objects
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

//    public function findOneBySomeField($value): ?Dnd35Classesprestigecompetence
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
