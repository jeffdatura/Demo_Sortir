<?php
namespace App\Repository;

use App\Entity\Sortie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Sortie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sortie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sortie[]    findAll()
 * @method Sortie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SortieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sortie::class);
    }

    public function listeSortie(): array
    {
        $qb=$this->createQueryBuilder('s');
        $qb
            ->andWhere('s.nom')
            ->andWhere('s.date_heure_debut')
            ->andWhere('s.date_limite_inscription')
            ->andWhere('s.nb_inscription_max')
            ->andWhere('s.campus')
            ->andWhere('s.etat');
        return $this->findAll();
    }
}
