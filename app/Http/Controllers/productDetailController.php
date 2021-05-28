<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class productDetailController extends Controller {
public function index(){
//$posts = DB::select('select * from posts');
$posts = DB::select('select * from posts where id=3');



return view('post',['post'=>$posts]);
}
}