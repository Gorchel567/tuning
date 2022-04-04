@extends('layout')

@section("content")
     @include("home.banner")
     @include("home.advantages")
     @include("home.prices")
     @if(isset($success_modal))
         @include("templates.success-modal")
     @endif
@overwrite
