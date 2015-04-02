<?php

namespace Market\Form;

use Zend\Form\Form;
use Zend\Form\Element\Select;
use Zend\Form\Element\Text;
use Zend\Form\Element\Submit;

class PostForm extends Form
{

	private $categories;

	public function getCategories()
	{
		return $this->categories;
	}

	public function setCategories($categories)
	{
		$this->categories = $categories;
	}

	public function buildForm()
	{
		$this->setAttribute('method', 'post');


		$category = new Select('category');
		$category->setLabel("Category")
				 ->setValueOptions(
				 	array_combine($this->categories, $this->categories)
				 );
		$title = new Text('title');
		$title->setLabel('Title')
			  ->setAttributes(
			  		array('size' => 40, 'maxLength' => 128)
			  	);
		$submit = new Submit('submit');
		$submit->setAttribute('value', 'POST');

		$this->add($category)
			 ->add($title)
			 ->add($submit);

	}
}