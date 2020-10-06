@extends('layout.common')
@include('layout.header')
@include('layout.footer')
@include('layout.submenu')
@section('title', '管理画面')

@section('content')
<div class="container">
    <div class="row">
        <h1>一覧画面</h1>
    </div>
    <div class="row">
        <p><a href="{{ route('potato.create') }}">新規追加</a></p>
    </div>
    <div class="row">
        @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
        @endif
    </div>
    <div class="card potato-list border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover text-nowrap">
                <tr>
                    <th>名前</th>
                    <th>詳細</th>
                    <th>編集</th>
                    <th>削除</th>
                </tr>
                @foreach ($potatos as $potato)
                <tr>
                    <td>{{ $potato->name }}</td>
                    <th><a href="{{ route('potato.show',$potato->id)}}">詳細</a></th>
                    <th><a href="{{ route('potato.edit',$potato->id)}}">編集</a></th>
                    <th>
                        <form action="{{ route('potato.destroy', $potato->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="削除">
                        </form>
                    </th>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection