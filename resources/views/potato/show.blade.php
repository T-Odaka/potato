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
        <th>名前</th>
        <th>説明</th>
        <th>サクサクさ</th>
        <th>辛さ</th>
        <th>ニンニク度</th>
        <th>塩分み</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    <tr>
        <td>{{ $potato->id }}</td>
        <td>{{ $potato->name }}</td>
        <td>{{ $description->description }}</td>
        <td>{{ $parameter->crispy }}</td>
        <td>{{ $parameter->hot }}</td>
        <td>{{ $parameter->garlic }}</td>
        <td>{{ $parameter->salt }}</td>
        <td>{{ $potato->created_at}}</td>
        <td>{{ $potato->updated_at}}</td>
    </tr>
</table>
</div>
@endsection