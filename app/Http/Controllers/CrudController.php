<?php 

namespace App\Http\Controllers;

class CrudController extends BaseController{


	public function index(){

		\Log::info("Req=CrudController@index called");

		$this->setPageTitle('Cruds Index', 'List of All Data');

		return view('cruds.index');
	}

}