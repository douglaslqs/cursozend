<?php

namespace Market\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class PostControllerFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
		$sm = $serviceLocator->getServiceLocator();
		$categories = $sm->get('categories');		

		$postController = new \Market\Controller\PostController();
		$postController->setCategories($categories);
		$postController->setPostForm($sm->get('market-post-form'));
		$postController->setListingTable($sm->get('listings-table'));
		return $postController;
	}
}