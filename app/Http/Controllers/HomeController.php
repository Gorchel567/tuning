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
        $params = [];

        if ($request->session()->has('status')) {
            $params['success_modal'] = true;
            $request->session()->forget('status');
        }

        return view('home.main', $params);
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
        session(['response' => 'success']);

        $request->session()->flash('status', 'Task was successful!');

        return redirect('/');
    }
}
