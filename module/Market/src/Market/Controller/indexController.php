<?php

namespace Market\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
	use ListingsTableTrait;
	
	public function indexAction()
	{
		$messages = array();
		if ($this->flashmessenger()->hasMessages()) {
			$messages = $this->flashmessenger()->getMessages();
		}

		$itemRecent = $this->listingsTable->getLatestListing();

		return array('messages' => $messages, 'item' => $itemRecent);		
	}

	public function fooAction()
	{
		return new ViewModel();
	}
}