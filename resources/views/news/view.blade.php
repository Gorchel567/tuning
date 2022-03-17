@extends('layout')

@section("content")
    <div class="container">
        <h2 class="text-center">{{$news->title}}</h2>
    </div>
    <div class="container-fluid" id="news-view-img">
        <div class="row">
            <div class="col col-md-6 offset-md-3">
                <img src="{{$news->url}}" alt="" class="w-100">
            </div>
        </div>
    </div>
    <div class="container">
        <p>{{$news->text}}</p>
        <p>{{$news->created_at}}</p>
    </div>
@overwrite
