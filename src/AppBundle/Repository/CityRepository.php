<?php
namespace AppBundle\Repository;


use AppBundle\Entity\City;
use AppBundle\Query\CityQuery;
use \Doctrine\ORM\Tools\Pagination\Paginator;

class CityRepository extends BaseRepository
{
    /**
     * @param CityQuery $query
     * @return City[]
     */
    public function findAllCitiesWithCountryAndRegion(CityQuery $query)
    {
        $qb = $this->createQueryBuilderByQuery($query);

        $qb->innerJoin('city.region', 'region');
        $qb->addSelect('region');

        $qb->innerJoin('region.country', 'country');
        $qb->addSelect('country');

        return $qb->getQuery()->getResult();
    }

    /**
     * @param CityQuery $query
     * @return City[]
     */
    public function findCount(CityQuery $query)
    {
        $qb = $this->createQueryBuilderByQuery($query);
        $pagination = new Paginator($qb);

        return $pagination->count();
    }

    /**
     * @param CityQuery $query
     * @return City[]
     */
    public function findOneByQuery(CityQuery $query)
    {
        $qb = $this->createQueryBuilderByQuery($query);

        return $qb->getQuery()->getOneOrNullResult();
    }

    /**
     * @param CityQuery $query
     * @return \Doctrine\ORM\QueryBuilder
     */
    private function createQueryBuilderByQuery(CityQuery $query)
    {
        $qb = $this->createQueryBuilder('city');

        if ($query->getPartOfName()) {
            $qb->andWhere('city.name LIKE :partOfName')
                ->setParameter('partOfName', '%' . $query->getPartOfName() . '%');
        }

        if ($query->getName()) {
            $qb->andWhere('city.name = :name')
                ->setParameter('name', $query->getName());
        }

        if ($query->getRegion()) {
            $qb->andWhere('city.region = :region')
                ->setParameter('region', $query->getRegion());
        }

        if ($query->isPaginated()) {
            $qb->setMaxResults($query->getLimit());
            $qb->setFirstResult($query->getOffset());
        }

        return $qb;
    }
}