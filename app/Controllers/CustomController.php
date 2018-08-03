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
        $this->dataForView['pageTitle'] = 'About';
        $this->dataForView['metaKeywords'] = 'About Us';
        $this->dataForView['metaDescription'] = 'About Us';
        return view(_get_frontend_theme_path('pages.aboutpage'),$this->dataForView);
    }
    public function terms(){
        $this->dataForView['pageTitle'] = 'Terms';
        $this->dataForView['metaKeywords'] = 'Terms and condition';
        $this->dataForView['metaDescription'] = 'Terms and condition';
        return view(_get_frontend_theme_path('pages.404'), $this->dataForView);
    }
    public function reset(Request $request,$token){
        $this->dataForView['pageTitle'] = 'Reset Your Password';
        $this->dataForView['metaKeywords'] = 'Reset Your Password';
        $this->dataForView['metaDescription'] = 'Reset Your Password';
        return view(_get_frontend_theme_path('customers.reset'),$this->dataForView)->with(
            ['token' => $token, 'email' => $request->email]);
    }
}