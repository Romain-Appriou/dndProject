<?php

namespace App\Repository;

use App\Entity\Dnd35Objetsmagiquesboucliersproprietesspeciales;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Objetsmagiquesboucliersproprietesspeciales>
 *
 * @method Dnd35Objetsmagiquesboucliersproprietesspeciales|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Objetsmagiquesboucliersproprietesspeciales|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Objetsmagiquesboucliersproprietesspeciales[]    findAll()
 * @method Dnd35Objetsmagiquesboucliersproprietesspeciales[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjetsMagiquesBoucliersProprietsSpecialesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Objetsmagiquesboucliersproprietesspeciales::class);
    }

    public function add(Dnd35Objetsmagiquesboucliersproprietesspeciales $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Objetsmagiquesboucliersproprietesspeciales $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Objetsmagiquesboucliersproprietesspeciales[] Returns an array of Dnd35Objetsmagiquesboucliersproprietesspeciales objects
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

//    public function findOneBySomeField($value): ?Dnd35Objetsmagiquesboucliersproprietesspeciales
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
