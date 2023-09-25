<?php

namespace App\Repository;

use App\Entity\Dnd35Objetsmagiquesarmuresproprietesspeciales;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Objetsmagiquesarmuresproprietesspeciales>
 *
 * @method Dnd35Objetsmagiquesarmuresproprietesspeciales|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Objetsmagiquesarmuresproprietesspeciales|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Objetsmagiquesarmuresproprietesspeciales[]    findAll()
 * @method Dnd35Objetsmagiquesarmuresproprietesspeciales[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjetsMagiquesArmuresProprietesSpecialesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Objetsmagiquesarmuresproprietesspeciales::class);
    }

    public function add(Dnd35Objetsmagiquesarmuresproprietesspeciales $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Objetsmagiquesarmuresproprietesspeciales $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Objetsmagiquesarmuresproprietesspeciales[] Returns an array of Dnd35Objetsmagiquesarmuresproprietesspeciales objects
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

//    public function findOneBySomeField($value): ?Dnd35Objetsmagiquesarmuresproprietesspeciales
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
