<?php 
//echo $_GET['url'];
//http://liveproject
//http://liveproject/shop
//http://liveproject/shop/sports
class Router{
	public function __construct(){
		$url=isset($_GET['url'])?$_GET['url']:'site';
		$url2=isset($_GET['url'])?$_GET['url']:'use';
		$url=explode('/',$url);//$url[0]='shop', url[1]='sports'
		$url2=explode('/',$url2);
		$file='controllers/'.$url[0].'Controller.php';
		$file2='controllers/'.$url2[0].'Controller.php';

		if(file_exists($file)){
			require_once $file;
			require_once $file2;
			
			$strContr=$url[0].'Controller';
			$strContr2=$url2[0].'Controller';

			$contr=new $strContr();
			$contr2=new $strContr2();

			$actionMethod=isset($url[1])?$url[1]:'index';
			$actionMethod2=isset($url2[1])?$url2[1]:'index';

			$contr->$actionMethod();
			$contr2->$actionMethod2();


		}else {echo 'Страница не найдена';}
	}
}

 ?>