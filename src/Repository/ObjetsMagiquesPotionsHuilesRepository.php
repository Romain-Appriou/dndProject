<?php

namespace App\Repository;

use App\Entity\Dnd35Objetsmagiquespotionshuiles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Objetsmagiquespotionshuiles>
 *
 * @method Dnd35Objetsmagiquespotionshuiles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Objetsmagiquespotionshuiles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Objetsmagiquespotionshuiles[]    findAll()
 * @method Dnd35Objetsmagiquespotionshuiles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjetsMagiquesPotionsHuilesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Objetsmagiquespotionshuiles::class);
    }

    public function add(Dnd35Objetsmagiquespotionshuiles $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Objetsmagiquespotionshuiles $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Objetsmagiquespotionshuiles[] Returns an array of Dnd35Objetsmagiquespotionshuiles objects
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

//    public function findOneBySomeField($value): ?Dnd35Objetsmagiquespotionshuiles
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
