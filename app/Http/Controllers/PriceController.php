<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class PriceController
 * @package App\Http\Controllers
 */
class PriceController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        return view('prices.main');
    }
}
