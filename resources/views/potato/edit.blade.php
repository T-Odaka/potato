@extends('layout.common')
@include('layout.header')
@include('layout.footer')
@include('layout.submenu')
@section('title', '編集画面')

@section('content')
<div class="container">
<h1>編集画面</h1>
<p><a href="{{ route('potato.index')}}">一覧画面</a></p>
 
@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif
 
<form action="{{ route('potato.update',$potato->id)}}" method="POST">
    @csrf
    @method('PUT')
    <p>名前：<input type="text" name="name" value="{{ $potato->name }}"></p>
    <p>説明：<input type="text" name="description" value="{{ $description->description }}"></p>
    <p>辛さ：<input type="text" name="hot" value="{{ $parameter->hot }}"></p>
    <input type="submit" value="編集する">
</form>
</div>
@endsection