<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\StudentModel;
use App\Controllers\BaseController;
 
class Users extends Controller
{
 
    public function index()
    {           
        return view('login');
    } 
}