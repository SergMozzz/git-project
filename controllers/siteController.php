<?php 

class siteController extends Controller{
	public function index(){
		$this->view->render('site/index','Lorem ipsum dolor sit amet.');
	}
	public function users(){
		$this->view->render('site/index','user');
		
	}


}

 ?>