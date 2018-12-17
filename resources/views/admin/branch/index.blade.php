@extends('admin.layout.layout')
@section('title')
    {{$title}}
@endsection

@section('content-header')
    {{$content_header}}
@endsection

@section('content')
sdfsdf
@include('admin.layout.content_menu', $content_menus)

@endsection