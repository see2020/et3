<?php

namespace App\Controllers;



//use App\Models\DefaultData_model;

class Home extends BaseController
{
    public function index(){

		$headmenu = view('navbar/headmenu');
		$content = '123';
		return view('layout',['content'=>$content,'headmenu'=>$headmenu]);
    }
    public function tst(){
		$r = '';
		$r .= print_r($this->request->getGet(),true);
		$r .= '<hr>';
		$r .= $this->lnk();
		$r .= 'tst() передача парметров в GET http://et/et3/home/tst?q=1&w=2&e=3';
		$r .= '<hr>_GET<br>';
		$r .= print_r($_GET,true);
		$r .= '<hr>';
//		$r .= print_r($this->request);
		$r .= '<hr>this->request->getGet()<br>';
		$r .= print_r($this->request->getGet(),true);
		$r .= '<hr>';
//		$t = new DefaultData_model();

		$r .= 'site_url() - '.site_url('/style.css').'<br>';
		$r .= 'index_page() - '.index_page().'<br>';
		$r .= 'base_url() - '.base_url().'<br>';
		$r .= 'current_url() - '.current_url().'<br>';

//        return view('welcome_message');
//        return view('tmp/welcome_message1',['q1'=>'123','q2'=>$t->t()]);
//		return view('tmp/welcome_message1',['q1'=>'123']);

		$headmenu = view('navbar/headmenu');
		$content = '123';
		return view('layout',['content'=>$r,'headmenu'=>$headmenu]);
    }

    private function lnk(){
    	$r = '';
		$r .= '<a href="http://et/et3/">http://et/et3/</a>';
		$r .= '<hr>';
		$r .= '<a href="http://et/et3/?q=1&w=2&e=3">http://et/et3/?q=1&w=2&e=3</a>';
		$r .= '<hr>';
		$r .= '<a href="http://et/et3/home/tst">http://et/et3/home/tst</a>';
		$r .= '<hr>';
		$r .= '<a href="http://et/et3/home/tst?q=1&w=2&e=3">http://et/et3/home/tst?q=1&w=2&e=3</a>';
		$r .= '<hr>';

		$r .= '<a href="http://et/et3/config">http://et/et3/home/tst</a>';
		$r .= '<hr>';
		return $r;
	}
}
