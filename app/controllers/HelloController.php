<?php
namespace controllers;
 /**
  * Controller HelloController
  */

 #[Route('main', automated: true)]
class HelloController extends \controllers\ControllerBase{

	public function index(){
         $this->loadDefaultView();
         $a = 'Titre';
         $page="5";
         $this->loadDefaultView(compact(var_name: 'a', _var_name: 'page'));
	}

    #[Route('test/{p}',name: 'test')]
	public function Test($p){
		echo $p;
	}

    public function autre($p){

    }

}
