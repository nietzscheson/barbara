<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * HomeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class HomeRepository extends EntityRepository
{

    public function findHome()
    {
        try {
            return $this->getEntityManager()->createQuery(
                'SELECT h FROM AppBundle:Home h'
            )
            ->getSingleResult();

        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }

    }

}