<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use Session;
@session_start();

class HomeController extends Controller
{
        public function __construct()
	{
		//$this->middleware('guest');
	}
        
        public function index()
	{
		return view('welcome');
	}
        
        public function test()
	{
            return view('home');
	}
        
}
