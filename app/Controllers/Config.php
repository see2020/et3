<?php


namespace App\Controllers;


use App\Models\Config_model;
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

		// переопределить $mainconfig на данные из сохраненных настроек

		$title = $mainconfig['description'];
		$headmenu = view('navbar/headmenu');
		$content = view('config/config_main',['mainconfig' => $defaultConfig->getMainConfig()]);
		return view('layout',['title'=>$title,'content'=>$content,'headmenu'=>$headmenu]);
	}

	public function save(){
		echo 'Config::save';
		echo '<hr>';
		$cs = new Config_model();
		echo $cs->saveConfig(['qweqwe']);
		echo '<hr>';
		echo '<pre>';
		echo '</pre>';
		$arrReq = $this->request->getGet();
		echo '<hr>';
		echo '<pre>';
		print_r($arrReq);
		echo '</pre>';
		if ( isset($arrReq['MainConfigAccessUsePassword']) ){
			echo 'MainConfigAccessUsePassword = true';
		}
		else{
			echo 'MainConfigAccessUsePassword = false';
		}

		// это должно быть в модели

		$defaultConfig = new DefaultData_model();
		$mainconfig = $defaultConfig->getMainConfig();


		foreach($mainconfig as $keyGroup => $valGroup){ // раздел
			if($keyGroup != 'description') {
				$Group = 'MainConfig' . $keyGroup;
				foreach ($valGroup as $keySetting => $valSetting){ // настройка
					if($keySetting != 'description'){
						$Setting = $Group . $keySetting;
						switch ($valSetting['type']){
							case 'checkbox':
								if (!empty($arrReq[$Setting])){
									echo '<br>' . $Setting . '= true';
								}
								else{
									echo '<br>' . $Setting . '= false';
								}
								break;

							case 'select':
							default:
								//$mainconfig[$keyGroup][$Setting]['editable']
								if(empty($arrReq[$Setting])){
									echo '<br>' . 'Значение по умолчанию ' . $Setting . '=' . $mainconfig[$keyGroup][$keySetting]['value'];
								}
								else{
									echo '<br>' . $Setting . '=' . $arrReq[$Setting];
								}
								break;
						}


					}


				}
			}
		}

	}
}