<?php
/**
 * Created by PhpStorm.
 * User: Claude
 * Date: 2018/7/9
 * Time: 21:08
 */

namespace Smartbro\Controllers;


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
}