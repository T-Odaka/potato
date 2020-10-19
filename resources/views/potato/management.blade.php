@extends('layouts.common')
@include('layouts.header')
@include('layouts.footer')
@include('layouts.submenu')
@section('title', '管理画面')

@section('content')
<div class="container">
    <div class="wrapper">

        <div class="row">
            @if ($message = Session::get('success'))
            <p class="notice">{{ $message }}</p>
            @endif
        </div>
        <div class="card border-0 shadow-sm">
            <div class="card-header"> 一覧画面</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover text-nowrap">
                        <tr>
                            <thead class="thead-light">
                                <th>名前</th>
                                <th>詳細</th>
                                <th>編集</th>
                                <th>削除</th>
                            </thead>
                        </tr>
                        @foreach ($potatos as $potato)
                        <tr>
                            <td>{{ $potato->name }}</td>
                            <th><a class="btn btn-primary" href="{{ route('potato.show',$potato->id)}}">詳細</a></th>
                            <th><a class="btn btn-primary" href="{{ route('potato.edit',$potato->id)}}">編集</a></th>
                            <th>
                                <form action="{{ route('potato.destroy', $potato->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="削除">
                                </form>
                            </th>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection