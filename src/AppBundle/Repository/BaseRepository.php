<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class BaseRepository
 * @package AppBundle\Repository
 */
class BaseRepository extends EntityRepository
{
    public function save($entity)
    {
        $manager = $this->getEntityManager();

        $manager->persist($entity);
        $manager->flush();
    }

    public function merge($entity)
    {
        $manager = $this->getEntityManager();

        return $manager->merge($entity);
    }

    public function saveAndRefresh($entity)
    {
        $manager = $this->getEntityManager();

        $this->save($entity);
        $manager->refresh($entity);
    }

    public function delete($entity)
    {
        $manager = $this->getEntityManager();

        $manager->remove($entity);
        $manager->flush();
    }
}