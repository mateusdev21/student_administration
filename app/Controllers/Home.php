<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function test()
	{
		echo "Hello Now You Accessing The test() method in Home Controller";
	}
	public function name($name ='')
	{
		echo "Hello My Name Is : $name";
	}

	//--------------------------------------------------------------------

}

