<?php
namespace Market\Controller;

trait ListingsTableTrait
{
	private $listingsTable;

	public function setListingTable($listingsTable)
	{
		$this->listingsTable = $listingsTable; 
	}

	public function getListingsById($id)
	{
		return $this->select(['listings_id' => $id])->current();
	}
}