<?php

namespace App\Repository;

use App\Entity\Dnd35Objetsmagiquesparcheminsnombresorts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Objetsmagiquesparcheminsnombresorts>
 *
 * @method Dnd35Objetsmagiquesparcheminsnombresorts|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Objetsmagiquesparcheminsnombresorts|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Objetsmagiquesparcheminsnombresorts[]    findAll()
 * @method Dnd35Objetsmagiquesparcheminsnombresorts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjetsMagiquesParcheminsNombreSortsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Objetsmagiquesparcheminsnombresorts::class);
    }

    public function add(Dnd35Objetsmagiquesparcheminsnombresorts $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Objetsmagiquesparcheminsnombresorts $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Objetsmagiquesparcheminsnombresorts[] Returns an array of Dnd35Objetsmagiquesparcheminsnombresorts objects
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

//    public function findOneBySomeField($value): ?Dnd35Objetsmagiquesparcheminsnombresorts
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
