<?php

namespace App\Repository;

use App\Entity\Dnd35Objetsmagiquesadversairesdesignes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Objetsmagiquesadversairesdesignes>
 *
 * @method Dnd35Objetsmagiquesadversairesdesignes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Objetsmagiquesadversairesdesignes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Objetsmagiquesadversairesdesignes[]    findAll()
 * @method Dnd35Objetsmagiquesadversairesdesignes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjetsMagiquesAdversairesDesignesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Objetsmagiquesadversairesdesignes::class);
    }

    public function add(Dnd35Objetsmagiquesadversairesdesignes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Objetsmagiquesadversairesdesignes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Objetsmagiquesadversairesdesignes[] Returns an array of Dnd35Objetsmagiquesadversairesdesignes objects
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

//    public function findOneBySomeField($value): ?Dnd35Objetsmagiquesadversairesdesignes
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
