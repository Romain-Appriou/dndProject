<?php

namespace App\Repository;

use App\Entity\Dnd35Objetsmagiquesmerveilleux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Objetsmagiquesmerveilleux>
 *
 * @method Dnd35Objetsmagiquesmerveilleux|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Objetsmagiquesmerveilleux|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Objetsmagiquesmerveilleux[]    findAll()
 * @method Dnd35Objetsmagiquesmerveilleux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjetsMagiquesMerveilleuxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Objetsmagiquesmerveilleux::class);
    }

    public function add(Dnd35Objetsmagiquesmerveilleux $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Objetsmagiquesmerveilleux $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Objetsmagiquesmerveilleux[] Returns an array of Dnd35Objetsmagiquesmerveilleux objects
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

//    public function findOneBySomeField($value): ?Dnd35Objetsmagiquesmerveilleux
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
