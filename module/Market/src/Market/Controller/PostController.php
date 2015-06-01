<?php 
namespace Market\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PostController extends AbstractActionController
{

	public $category;
	public $postForm;
	use ListingsTableTrait;
	
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
		
		$viewModel = new ViewModel(array('postForm' => $this->postForm, 'data' => $data));
		$viewModel->setTemplate('market/post/index');

		if ($this->getRequest()->isPost()) {
			$this->postForm->setData($data);
			if ($this->postForm->isValid()) {
				$this->listingsTable->addPosting($this->postForm->getValue());
				$this->flashMessenger()->addMessage("Thanks for posting!");
				$this->redirect()->toRoute('home');
			} else {
				$invalidView = new ViewModel();
				$invalidView->setTemplate('market/post/invalid');
				$invalidView->addChild($viewModel, 'main');
				return $invalidView;
			}
		}

		return $viewModel;
	}
}