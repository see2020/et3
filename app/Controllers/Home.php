<?php

namespace App\Controllers;



use App\Models\DefaultData_model;

class Home extends BaseController
{
    public function index(){

		print_r($this->request->getGet());
		echo '<hr>';
		$this->lnk();

//		$t = new DefaultData_model();

//        return view('welcome_message');
//        return view('tmp/welcome_message1',['q1'=>'123','q2'=>$t->t()]);
        return view('tmp/welcome_message1',['q1'=>'123']);
    }
    public function tst(){

		$this->lnk();
		echo 'tst() передача парметров в GET http://et/et3/home/tst?q=1&w=2&e=3';
		echo '<hr>_GET<br>';
		print_r($_GET);
		echo '<hr>';
//		print_r($this->request);
		echo '<hr>this->request->getGet()<br>';
		print_r($this->request->getGet());
		echo '<hr>';

    }

    private function lnk(){
		echo '<a href="http://et/et3/">http://et/et3/</a>';
		echo '<hr>';
		echo '<a href="http://et/et3/?q=1&w=2&e=3">http://et/et3/?q=1&w=2&e=3</a>';
		echo '<hr>';
		echo '<a href="http://et/et3/home/tst">http://et/et3/home/tst</a>';
		echo '<hr>';
		echo '<a href="http://et/et3/home/tst?q=1&w=2&e=3">http://et/et3/home/tst?q=1&w=2&e=3</a>';
		echo '<hr>';
	}
}
