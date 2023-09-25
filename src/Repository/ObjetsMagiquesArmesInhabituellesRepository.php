<?php

namespace App\Repository;

use App\Entity\Dnd35Objetsmagiquesarmesinhabituelles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dnd35Objetsmagiquesarmesinhabituelles>
 *
 * @method Dnd35Objetsmagiquesarmesinhabituelles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dnd35Objetsmagiquesarmesinhabituelles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dnd35Objetsmagiquesarmesinhabituelles[]    findAll()
 * @method Dnd35Objetsmagiquesarmesinhabituelles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjetsMagiquesArmesInhabituellesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dnd35Objetsmagiquesarmesinhabituelles::class);
    }

    public function add(Dnd35Objetsmagiquesarmesinhabituelles $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dnd35Objetsmagiquesarmesinhabituelles $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Dnd35Objetsmagiquesarmesinhabituelles[] Returns an array of Dnd35Objetsmagiquesarmesinhabituelles objects
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

//    public function findOneBySomeField($value): ?Dnd35Objetsmagiquesarmesinhabituelles
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
