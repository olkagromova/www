<?php

class Controller{
	public $model;
	public $view;
	protested $pageData = array();
	
	public function __connstruct(){
		$this->view = new View();
		$this->model = new Model();
	}
}