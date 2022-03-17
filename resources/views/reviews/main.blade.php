@extends('layout')

@section("content")
    <div class="container" id="reviews-article">
        <div class="row">
            @forelse($reviews as $reviewRecord)
                @include('reviews.templates.review-block', ['reviewRecord' => $reviewRecord])
            @empty
                <div class="row">
                    <div class="col text-center">
                        <p>Отзывы отсутствуют</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@overwrite
