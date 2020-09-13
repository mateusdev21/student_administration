<?php
namespace App\Controllers;

class Auth extends BaseController
{
	public function __construct()
	{
		helper('form');
	}

	public function register(){
		return view('register');
	}

	public function login(){
		return view('login');
    }
    
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new StudentModel();
		
        $data = [
            'first_name' => $this->request->getVar('txtFname'),
            'last_name'  => $this->request->getVar('txtLname'),
            'address'  => $this->request->getVar('txtAddress'),
            'email'  => $this->request->getVar('txtEmail'),
            'mobile'  => $this->request->getVar('txtMobile'),
            ];
        $save = $model->insert($data);
		return redirect()->to( base_url('login') );
    }

	public function logout()
	{
  
	}
}

?>