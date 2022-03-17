<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Class ReviewsController
 * @package App\Http\Controllers
 */
class ReviewsController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $reviews = Review::select(['id', 'url', 'title', 'text', 'created_at'])
            ->orderBy('created_at', 'desc')
            ->simplePaginate(10);

        return view('reviews.main', [
            'reviews' => $reviews
        ]);
    }
}
