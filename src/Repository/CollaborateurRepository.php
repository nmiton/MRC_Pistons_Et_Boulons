<?php

namespace App\Repository;

use App\Entity\Collaborateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Collaborateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Collaborateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Collaborateur[]    findAll()
 * @method Collaborateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CollaborateurRepository extends ServiceEntityRepository
{

    /**
     * Fonction qui est le constructeur de la classe CollaborateurRepository
     * 
     * Cette fonction permet de contruire l'objet CollaborateurRepository en reprenant les fonctions de sa classe parent qui est ServiceEntityRepository
     * 
     * @param ManagerRegistry $registry 
     * 
     * @return void
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Collaborateur::class);
    }

    // /**
    //  * @return Collaborateur[] Returns an array of Collaborateur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    // SELECT DISTINCT Collaborateur.nom  FROM Collaborateur WHERE isAdmin != 1 ORDER BY Collaborateur.id ASC
    /*
    public function findByAllCollaborateur()
    {
        return $this->createQueryBuilder('c')
            ->select('c.nom')
            ->andWhere('c.isAdmin != 1')
            ->orderBy('c.nom', 'ASC')
            ->distinct('p.nom')
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Collaborateur
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
