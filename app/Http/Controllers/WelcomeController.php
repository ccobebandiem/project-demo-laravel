<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class WelcomeController extends Controller
{
	 public function testAction()
	{
		echo "# code...";
		return redirect()->route("hht");
	}
}	