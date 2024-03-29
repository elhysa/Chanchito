<?php

namespace Chanchito\ChanchitoBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * AsistenciaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AsistenciaRepository extends EntityRepository
{
    public function findAsistenciaToday()
    {
        $today =  new \DateTime('now');
        $today->setTime(0, 0, 0);
        
        $em = $this->getEntityManager();

        $query = $em->createQueryBuilder()
            ->select('p')
            ->from('ChanchitoBundle:Asistencia', 'p')
            ->where('p.fechaAsistencia = :now')
            ->orderBy('p.fechaAsistencia', 'ASC')
            ->setParameter('now', $today , \Doctrine\DBAL\Types\Type::DATETIME)
            ->getQuery();

        return $query->getResult();
    }

        public function findAsistenciaTodayByUser($user_id)
    {
        $today =  new \DateTime('now');
        $today->setTime(0, 0, 0);

        $em = $this->getEntityManager();

        $query = $em->createQueryBuilder()
            ->select('p')
            ->from('ChanchitoBundle:Asistencia', 'p')
            ->where('p.fechaAsistencia = :now')
            ->andWhere('p.usuarios = :user_id')
            ->orderBy('p.fechaAsistencia', 'ASC')
            ->setParameter('now', $today , \Doctrine\DBAL\Types\Type::DATETIME)
            ->setParameter('user_id', $user_id , \Doctrine\DBAL\Types\Type::INTEGER)
            ->getQuery();

        return $query->getResult();
    }

    public function findAsistenciaByUser($user_id)
    {
        $em = $this->getEntityManager();

        $query = $em->createQueryBuilder()
            ->select('p')
            ->from('ChanchitoBundle:Asistencia', 'p')
            ->where('p.usuarios = :user_id')
            ->orderBy('p.fechaAsistencia', 'DESC')
            ->setParameter('user_id', $user_id , \Doctrine\DBAL\Types\Type::INTEGER)
            ->getQuery();

        return $query->getResult();
    }
    
    public function findAsistenciaOrderByFechaAsistencia()
    {

        $em = $this->getEntityManager();

        $query = $em->createQueryBuilder()
            ->select('p')
            ->from('ChanchitoBundle:Asistencia', 'p')
            ->orderBy('p.fechaAsistencia', 'DESC')
            ->getQuery();

        return $query->getResult();
    }    
}