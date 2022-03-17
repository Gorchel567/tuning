<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        return view('home.main');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function send(Request $request)
    {
        $msg = "ФИО: ".$request->get('name')."\n\r";
        $msg .= "Телефон: ".$request->get('phone')."\n\r";

        mail(env('MAIL_TO_ADDRESS'), "Заявка с сайта chipograf.ru", $msg, "Content-Type: text/plain; charset=utf-8\r\nContent-Transfer-Encoding: 8bit");
        return redirect('/');
    }
}
