<?php
namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller{
    public function index(Request $request){
        return view('index');
    }
}