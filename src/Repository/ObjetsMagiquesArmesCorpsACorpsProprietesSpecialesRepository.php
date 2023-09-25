<?php

namespace App\Repository;

use App\Entity\Dnd35Objetsmagiquesarmescorpsacorpsproprietesspeciales;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Objetsmagiquesarmescorpsacorpsproprietesspeciales>
 *
 * @method Dnd35Objetsmagiquesarmescorpsacorpsproprietesspeciales|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Objetsmagiquesarmescorpsacorpsproprietesspeciales|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Objetsmagiquesarmescorpsacorpsproprietesspeciales[]    findAll()
 * @method Dnd35Objetsmagiquesarmescorpsacorpsproprietesspeciales[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjetsMagiquesArmesCorpsACorpsProprietesSpecialesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Objetsmagiquesarmescorpsacorpsproprietesspeciales::class);
    }

    public function add(Dnd35Objetsmagiquesarmescorpsacorpsproprietesspeciales $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Objetsmagiquesarmescorpsacorpsproprietesspeciales $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Objetsmagiquesarmescorpsacorpsproprietesspeciales[] Returns an array of Dnd35Objetsmagiquesarmescorpsacorpsproprietesspeciales objects
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

//    public function findOneBySomeField($value): ?Dnd35Objetsmagiquesarmescorpsacorpsproprietesspeciales
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
