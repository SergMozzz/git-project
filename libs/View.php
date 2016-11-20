<?php 
class View{
	protected $data;//отображаемые данные на странице
	public function render($path,$data){
		$this->data=$data;
		require_once 'views/header.php';
		require_once "views/{$path}.php";
		require_once 'views/footer.php';

		//отображает ту или иную страницу
	}
}


 ?>