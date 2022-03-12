@extends('layout')

@section("content")
    <div class="container" id="news-page">
        @forelse($news as $newsRecord)
            @include('news.templates.news-block', ['newsRecord' => $newsRecord])
        @empty
            <div class="row">
                <div class="col text-center">
                    <p>Статьи отсутствуют</p>
                </div>
            </div>
        @endforelse
    </div>
@overwrite
