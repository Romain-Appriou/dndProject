<?php

namespace App\Repository;

use App\Entity\Dnd35Objetsmagiquestypesparchemins;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Objetsmagiquestypesparchemins>
 *
 * @method Dnd35Objetsmagiquestypesparchemins|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Objetsmagiquestypesparchemins|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Objetsmagiquestypesparchemins[]    findAll()
 * @method Dnd35Objetsmagiquestypesparchemins[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjetsMagiquesTypesParcheminsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Objetsmagiquestypesparchemins::class);
    }

    public function add(Dnd35Objetsmagiquestypesparchemins $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Objetsmagiquestypesparchemins $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Objetsmagiquestypesparchemins[] Returns an array of Dnd35Objetsmagiquestypesparchemins objects
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

//    public function findOneBySomeField($value): ?Dnd35Objetsmagiquestypesparchemins
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
