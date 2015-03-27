<?php 
namespace Market\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PostController extends AbstractActionController
{

	public $category;

	public function setCategories($categories)
	{
		$this->categories = $categories;
	}

	public function indexAction()
	{
		$categories = $this->getServiceLocator()->get('categories';)
		return ViewModel(array('categories' => $categories));
	}
}