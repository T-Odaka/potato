@extends('layouts.common')
@include('layouts.header')
@include('layouts.footer')
@include('layouts.submenu')
@section('title', '編集画面')

@section('content')
<div class="container">
    <div class="wrapper">

        <div class="row">
            @if ($message = Session::get('success'))
            <p>{{ $message }}</p>
            @endif
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-header"> 編集</div>
            <div class="card-body">
                <form action="{{ route('potato.update',$potato->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <p>名前:<input type="text" name="name" value="{{ $potato->name }}"></p>
                    </div>

                    <!-- サクサクさのプルダウンメニュー -->
                    <div class="row">
                        <div class="form-group">
                            <label for="custom-select-1">サクサクさ</label>
                            <select id="custom-select-1" class="custom-select" name="crispy">
                                <option value="{{ $parameter->crispy}}">※{{ $parameter->crispy}}</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>

                    <!-- 辛さのプルダウンメニュー -->
                    <div class="row">
                        <div class="form-group">
                            <label for="custom-select-1">辛さ</label>
                            <select id="custom-select-1" class="custom-select" name="hot">
                                <option value="{{ $parameter->hot}}">※{{ $parameter->hot}}</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>

                    <!-- ニンニク度のプルダウンメニュー -->
                    <div class="row">
                        <div class="form-group">
                            <label for="custom-select-1">ニンニク度</label>
                            <select id="custom-select-1" class="custom-select" name="garlic">
                                <option value="{{ $parameter->garlic}}">※{{ $parameter->garlic}}</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>

                    <!-- 塩分みのプルダウンメニュー -->
                    <div class="row">
                        <div class="form-group">
                            <label for="custom-select-1">塩分み</label>
                            <select id="custom-select-1" class="custom-select" name="salt">
                                <option value="{{ $parameter->salt}}">※{{ $parameter->salt}}</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <p>説明:</p><textarea class="col-sm-10" type="text" name="description" value="{{ $description->description }}">{{ $description->description }}</textarea>
                    </div>
                    <input class="btn btn-primary" type="submit" value="保存">
                </form>
            </div>
        </div>
        <div class="row">
            <p><a class="btn btn-primary" href="{{ route('potato.index')}}">一覧画面</a></p>
        </div>
    </div>
</div>
@endsection