<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class QuestionController
{
    public function index(Request $request)
    {
        return view('questions.main');
    }
}
