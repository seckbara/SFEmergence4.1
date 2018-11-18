<?php

namespace App\Repository;

use App\Entity\DateCertificat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DateCertificat|null find($id, $lockMode = null, $lockVersion = null)
 * @method DateCertificat|null findOneBy(array $criteria, array $orderBy = null)
 * @method DateCertificat[]    findAll()
 * @method DateCertificat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DateCertificatRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DateCertificat::class);
    }

    // /**
    //  * @return DateCertificat[] Returns an array of DateCertificat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DateCertificat
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
