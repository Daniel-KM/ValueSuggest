<?php
namespace ValueSuggest\Service\Controller\Admin;

use ValueSuggest\Controller\Admin\IndexController;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;

class IndexControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $services, $requestedName, array $options = null)
    {
        return new IndexController($services->get('Omeka\DataTypeManager'));
    }
}
