<?php

namespace Market\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
	public function indexAction()
	{
		$messages = array();
		if ($this->flashmessenger()->hasMessages()) {
			$messages = $this->flashmessenger()->getMessages();
		}

		return array('messages' => $messages);		
	}

	public function fooAction()
	{
		return new ViewModel();
	}
}