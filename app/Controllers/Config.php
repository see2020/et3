<?php


namespace App\Controllers;


use App\Models\DefaultData_model;

class Config extends BaseController
{
	public function index(){

		$headmenu = view('navbar/headmenu');
		$content = view('config/config');
		return view('layout',['content'=>$content,'headmenu'=>$headmenu]);
	}

	public function main(){
		$defaultConfig = new DefaultData_model();
		$mainconfig = $defaultConfig->getMainConfig();

		$title = $mainconfig['description'];
		$headmenu = view('navbar/headmenu');
		$content = view('config/config_main',['mainconfig' => $defaultConfig->getMainConfig()]);
		return view('layout',['title'=>$title,'content'=>$content,'headmenu'=>$headmenu]);
	}
}