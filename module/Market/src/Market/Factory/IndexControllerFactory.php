<?php

namespace Market\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class IndexControllerFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
		$sm = $serviceLocator->getServiceLocator();
		$categories = $sm->get('categories');		

		$indexController = new \Market\Controller\IndexController();
		//$indexController->setCategories($categories);
		//$indexController->setPostForm($sm->get('market-post-form'));
		$indexController->setListingTable($sm->get('listings-table'));
		return $indexController;
	}
}