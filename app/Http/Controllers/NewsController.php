<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Class NewsController
 * @package App\Http\Controllers
 */
class NewsController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $news = News::select(['id', 'url', 'title', 'text', 'created_at'])
            ->orderBy('created_at', 'desc')
            ->simplePaginate(10);

        return view('news.main', [
            'news' => $news
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function view($id)
    {
        $news = News::where('id', $id)
            ->first();

        if (empty($news)) {
            throw new NotFoundHttpException('News not found');
        }

        return view('news.view', [
            'news' => $news,
            'ogTitle' => $news->title,
            'ogImage' => $news->url,
            'ogDescription' => $news->text,
        ]);
    }
}
