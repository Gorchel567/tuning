<?php


namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

/**
 * Class QuestionController
 * @package App\Http\Controllers
 */
class QuestionController
{
    public const QUESTIONS_LIMIT = 12;

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $questions = Questions::limit(static::QUESTIONS_LIMIT)
            ->get();

        return view('questions.main', ['questions' => $questions]);
    }
}
