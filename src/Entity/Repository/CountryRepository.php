<?php

namespace Repository;

/**
 * CountryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CountryRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAllCountries()
    {
        $qb = $this->createQueryBuilder('c')
            ->select('c')
            ->addOrderBy('c.name','ASC');

        return $qb->getQuery()
            ->getResult();
    }

}