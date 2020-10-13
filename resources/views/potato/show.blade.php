@extends('layouts.common')
@include('layouts.header')
@include('layouts.footer')
@include('layouts.submenu')
@section('title', '詳細画面')

@section('content')
<div class="container">
    <div class="wrapper">

        <div class="card border-0 shadow-sm">
            <div class="card-header"> 編集</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover text-nowrap">
                        <tr>
                            <thead class="thead-light">
                                <th>ID</th>
                                <th>名前</th>
                                <th>説明</th>
                                <th>サクサクさ</th>
                                <th>辛さ</th>
                                <th>ニンニク度</th>
                                <th>塩分み</th>
                                <th>作成日</th>
                                <th>更新日</th>
                            </thead>
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
                    <button class="btn btn-primary" type="button" onclick="history.back()">戻る</button>
                    <a class="btn btn-primary" type="button" href="{{ route('potato.edit',$potato->id)}}">編集</a>
                </div>
            </div>
        </div>
        <div class="row">
            <p><a class="btn btn-primary" href="{{ route('potato.index')}}">一覧画面</a></p>
        </div>
    </div>
</div>
@endsection