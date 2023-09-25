<?php

namespace App\Repository;

use App\Entity\Dnd35Monstresexperience;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Monstresexperience>
 *
 * @method Dnd35Monstresexperience|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Monstresexperience|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Monstresexperience[]    findAll()
 * @method Dnd35Monstresexperience[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MonstresExperienceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Monstresexperience::class);
    }

    public function add(Dnd35Monstresexperience $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Monstresexperience $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Monstresexperience[] Returns an array of Dnd35Monstresexperience objects
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

//    public function findOneBySomeField($value): ?Dnd35Monstresexperience
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
