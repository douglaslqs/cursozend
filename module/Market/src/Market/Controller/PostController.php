<?php 
namespace Market\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PostController extends AbstractActionController
{

	public $category;
	public $postForm;

	public function setPostForm($postForm)
	{
		$this->postForm = $postForm;
	}

	public function setCategories($categories)
	{
		$this->categories = $categories;
	}

	public function indexAction()
	{
		$data = $this->params()->fromPost();
		$this->postForm->setData($data);
		$viewModel = new ViewModel(array('postForm' => $this->postForm, 'data' => $data));
		
		return $viewModel;
	}
}