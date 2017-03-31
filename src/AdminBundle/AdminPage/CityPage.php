<?php

namespace AdminBundle\AdminPage;


use AppBundle\Command\City\AddCityCommand;
use AppBundle\Command\City\AddCityHandler;
use AppBundle\Command\City\ChangeCityCommand;
use AppBundle\Command\City\ChangeCityHandler;
use AppBundle\Command\Exception\CommandException;
use AppBundle\Entity\Region;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Exception\ModelManagerException;
use Sonata\AdminBundle\Form\FormMapper;


class CityPage extends AbstractAdmin
{
    protected $formOptions = [
        'validation_groups' => ['Adding']
    ];

    /**
     * @var ChangeCityHandler
     */
    private $changeCityHandler;

    /**
     * @var AddCityHandler
     */
    private $addCityHandler;

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('name', 'text')
            ->add('region', 'entity', [
                'class'    => Region::class,
                'choice_label' => 'name',
            ])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name')
            ->add('region', null, [], 'entity', [
                'class'    => Region::class,
                'choice_label' => 'name',
            ])
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('name')
            ->add('region.name')
        ;
    }

    public function update($object)
    {
        try {
            $object = $this->changeCityHandler->handle(new ChangeCityCommand($object));
        } catch (CommandException $e) {
            throw new ModelManagerException($e->getMessage());
        }

        return $object;
    }

    public function create($object)
    {
        try {
            $object = $this->addCityHandler->handle(new AddCityCommand($object));
        } catch (CommandException $e) {
            throw new ModelManagerException($e->getMessage());
        }

        return $object;
    }

    /**
     * @return ChangeCityHandler
     */
    public function getChangeCityHandler(): ChangeCityHandler
    {
        return $this->changeCityHandler;
    }

    /**
     * @param ChangeCityHandler $changeCityHandler
     * @return $this
     */
    public function setChangeCityHandler(ChangeCityHandler $changeCityHandler)
    {
        $this->changeCityHandler = $changeCityHandler;
        return $this;
    }

    /**
     * @param AddCityHandler $addCityHandler
     * @return $this
     */
    public function setAddCityHandler(AddCityHandler $addCityHandler)
    {
        $this->addCityHandler = $addCityHandler;
        return $this;
    }


}