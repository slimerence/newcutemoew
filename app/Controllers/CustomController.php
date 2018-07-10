<?php
/**
 * Created by PhpStorm.
 * User: Claude
 * Date: 2018/7/9
 * Time: 21:08
 */

namespace Smartbro\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function about(){
        return view(_get_frontend_theme_path('pages.aboutpage'),$this->dataForView);
    }
    public function reset(Request $request,$token){
        return view(_get_frontend_theme_path('customers.reset'),$this->dataForView)->with(
            ['token' => $token, 'email' => $request->email]);
    }
}