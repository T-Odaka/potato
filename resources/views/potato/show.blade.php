@extends('layout.common')
@include('layout.header')
@include('layout.footer')
@include('layout.submenu')
@section('title', '管理画面')

@section('content')
<div class="container">
<h1>詳細画面</h1>
<p><a href="{{ route('potato.index')}}">一覧画面</a></p>
 
<table border="1">
    <tr>
        <th>id</th>
        <th>title</th>
        <th>author</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    <tr>
        <td>{{ $potato->id }}</td>
        <td>{{ $potato->name }}</td>
        <td>{{ $potato->hot }}</td>
        <td>{{ $potato->crispy }}</td>
    </tr>
</table>
</div>
@endsection