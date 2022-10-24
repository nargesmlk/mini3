@extends('layouts.master')
@section('title','About us')
@section('main_content')
<h2>About Us</h2>
@component('layouts.components.button')
    @slot('color')
        danger
    @endslot
    ارسال پیام
@endcomponent
@endsection