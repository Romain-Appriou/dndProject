<?php

namespace App\Repository;

use App\Entity\Dnd35Objetsmagiquesarmesdistanceproprietesspeciales;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Objetsmagiquesarmesdistanceproprietesspeciales>
 *
 * @method Dnd35Objetsmagiquesarmesdistanceproprietesspeciales|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Objetsmagiquesarmesdistanceproprietesspeciales|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Objetsmagiquesarmesdistanceproprietesspeciales[]    findAll()
 * @method Dnd35Objetsmagiquesarmesdistanceproprietesspeciales[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjetsMagiquesArmesDistanceProprietesSpecialesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Objetsmagiquesarmesdistanceproprietesspeciales::class);
    }

    public function add(Dnd35Objetsmagiquesarmesdistanceproprietesspeciales $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Objetsmagiquesarmesdistanceproprietesspeciales $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Objetsmagiquesarmesdistanceproprietesspeciales[] Returns an array of Dnd35Objetsmagiquesarmesdistanceproprietesspeciales objects
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

//    public function findOneBySomeField($value): ?Dnd35Objetsmagiquesarmesdistanceproprietesspeciales
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
