<?php

namespace App\Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
   	public function view() {
   		return view('blog::view');
   	}
}
