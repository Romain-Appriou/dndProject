<?php

namespace App\Repository;

use App\Entity\Dnd35Objetsmagiquesarmesspecifiques;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Objetsmagiquesarmesspecifiques>
 *
 * @method Dnd35Objetsmagiquesarmesspecifiques|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Objetsmagiquesarmesspecifiques|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Objetsmagiquesarmesspecifiques[]    findAll()
 * @method Dnd35Objetsmagiquesarmesspecifiques[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjetsMagiquesArmesSpecifiquesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Objetsmagiquesarmesspecifiques::class);
    }

    public function add(Dnd35Objetsmagiquesarmesspecifiques $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Objetsmagiquesarmesspecifiques $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Objetsmagiquesarmesspecifiques[] Returns an array of Dnd35Objetsmagiquesarmesspecifiques objects
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

//    public function findOneBySomeField($value): ?Dnd35Objetsmagiquesarmesspecifiques
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
