<?php


namespace App\Controllers;


class Config extends BaseController
{
	public function index(){

		$headmenu = view('navbar/headmenu');
		$content = view('config/config');
		return view('layout',['content'=>$content,'headmenu'=>$headmenu]);
	}
}