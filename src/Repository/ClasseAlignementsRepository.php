<?php

namespace App\Repository;

use App\Entity\Dnd35Classesalignements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Classesalignements>
 *
 * @method Dnd35Classesalignements|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Classesalignements|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Classesalignements[]    findAll()
 * @method Dnd35Classesalignements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClasseAlignementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Classesalignements::class);
    }

    public function add(Dnd35Classesalignements $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Classesalignements $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Classesalignements[] Returns an array of Dnd35Classesalignements objects
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

//    public function findOneBySomeField($value): ?Dnd35Classesalignements
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
