<?php 

namespace App\Http\Controllers;

class BaseController extends Controller{

	
	/**
	* @param $title
	* @param $subTitle
	*/
	public function setPageTitle($title, $subTitle){
		view()->share(['pageTitle' => $title, 'subTitle' => $subTitle]);
	}
}
