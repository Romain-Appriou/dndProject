<?php

namespace App\Repository;

use App\Entity\Dnd35Competencesynergie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Competencesynergie>
 *
 * @method Dnd35Competencesynergie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Competencesynergie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Competencesynergie[]    findAll()
 * @method Dnd35Competencesynergie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompetencesSynergieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Competencesynergie::class);
    }

    public function add(Dnd35Competencesynergie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Competencesynergie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Competencesynergie[] Returns an array of Dnd35Competencesynergie objects
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

//    public function findOneBySomeField($value): ?Dnd35Competencesynergie
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
