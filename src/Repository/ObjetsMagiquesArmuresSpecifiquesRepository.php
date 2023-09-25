<?php

namespace App\Repository;

use App\Entity\Dnd35Objetsmagiquesarmuresspecifiques;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Objetsmagiquesarmuresspecifiques>
 *
 * @method Dnd35Objetsmagiquesarmuresspecifiques|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Objetsmagiquesarmuresspecifiques|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Objetsmagiquesarmuresspecifiques[]    findAll()
 * @method Dnd35Objetsmagiquesarmuresspecifiques[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjetsMagiquesArmuresSpecifiquesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Objetsmagiquesarmuresspecifiques::class);
    }

    public function add(Dnd35Objetsmagiquesarmuresspecifiques $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Objetsmagiquesarmuresspecifiques $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Objetsmagiquesarmuresspecifiques[] Returns an array of Dnd35Objetsmagiquesarmuresspecifiques objects
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

//    public function findOneBySomeField($value): ?Dnd35Objetsmagiquesarmuresspecifiques
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
