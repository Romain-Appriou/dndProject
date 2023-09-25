<?php

namespace App\Repository;

use App\Entity\Dnd35Objetsmagiquesparcheminsniveausorts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Objetsmagiquesparcheminsniveausorts>
 *
 * @method Dnd35Objetsmagiquesparcheminsniveausorts|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Objetsmagiquesparcheminsniveausorts|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Objetsmagiquesparcheminsniveausorts[]    findAll()
 * @method Dnd35Objetsmagiquesparcheminsniveausorts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjetsMagiquesParcheminsNiveauSortRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Objetsmagiquesparcheminsniveausorts::class);
    }

    public function add(Dnd35Objetsmagiquesparcheminsniveausorts $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Objetsmagiquesparcheminsniveausorts $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Objetsmagiquesparcheminsniveausorts[] Returns an array of Dnd35Objetsmagiquesparcheminsniveausorts objects
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

//    public function findOneBySomeField($value): ?Dnd35Objetsmagiquesparcheminsniveausorts
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
