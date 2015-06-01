<?php

namespace Market\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ViewControllerFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
		$sm = $serviceLocator->getServiceLocator();
		$categories = $sm->get('categories');		

		$viewController = new \Market\Controller\ViewController();		
		$viewController->setListingTable($sm->get('listings-table'));
		return $viewController;
	}
}