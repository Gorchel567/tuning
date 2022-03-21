@extends('layout')

@section("content")
    <div class="container" id="reviews-article">
        <div class="row">
            @forelse($reviews as $reviewRecord)
{{--                @include('reviews.templates.review-block', ['reviewRecord' => $reviewRecord])--}}
                <div class="col-6 col-md-4 col-lg-3 review-block">
                    <img src="/images/reviews/{{$reviewRecord}}" class="w-100" alt="{{$reviewRecord}}">
                </div>
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
