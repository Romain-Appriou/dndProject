<?php

namespace App\Repository;

use App\Entity\Dnd35Objetsmagiquesbatons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Objetsmagiquesbatons>
 *
 * @method Dnd35Objetsmagiquesbatons|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Objetsmagiquesbatons|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Objetsmagiquesbatons[]    findAll()
 * @method Dnd35Objetsmagiquesbatons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjetsMagiquesBatonsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Objetsmagiquesbatons::class);
    }

    public function add(Dnd35Objetsmagiquesbatons $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Objetsmagiquesbatons $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Objetsmagiquesbatons[] Returns an array of Dnd35Objetsmagiquesbatons objects
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

//    public function findOneBySomeField($value): ?Dnd35Objetsmagiquesbatons
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
