<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\TelegramBot;

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
        $chatId = env('TELEGRAM_CHAT_TOKEN');

        $msg = "Заявка с сайта chipograf.ru\r\n";
        $msg .= "ФИО: ".$request->get('name')."\n\r";
        $msg .= "Телефон: ".$request->get('phone')."\n\r";

        TelegramBot::send($chatId, $msg);

        return redirect('/');
    }
}
