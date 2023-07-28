@extends('layouts.client')
@section('title')
{{$title}}
@endsection

@section('siderbar')
    @parent
    <h2>Home Siderbar</h2>
@endsection

@section('content')
    <h1>Trang Chủ</h1>
    <button type="button" class="show">Show

    </button>
@endsection
