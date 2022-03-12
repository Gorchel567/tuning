@extends('layout')

@section("content")
    <div class="container">
        <h2 class="text-center">{{$news->title}}</h2>
        <div class="row">
            <div class="col-6 offset-3">
                <img src="{{$news->url}}" alt="" class="w-100">
            </div>
        </div>
        <p>{{$news->text}}</p>
        <p>{{$news->created_at}}</p>
    </div>
@overwrite
