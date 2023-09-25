<?php

namespace App\Repository;

use App\Entity\Dnd35Langueraceclasse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Langueraceclasse>
 *
 * @method Dnd35Langueraceclasse|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Langueraceclasse|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Langueraceclasse[]    findAll()
 * @method Dnd35Langueraceclasse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LangueRaceClasseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Langueraceclasse::class);
    }

    public function add(Dnd35Langueraceclasse $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Langueraceclasse $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Langueraceclasse[] Returns an array of Dnd35Langueraceclasse objects
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

//    public function findOneBySomeField($value): ?Dnd35Langueraceclasse
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
