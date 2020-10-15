@extends('layouts.common')
@include('layouts.header')
@include('layouts.footer')
@include('layouts.submenu')
@section('title', '追加画面')

@section('content')
<div class="container">
    <div class="wrapper">

        <div class="card border-0 shadow-sm">
            <div class="card-header">{{ __('新規作成') }}</div>
            <div class="card-body">
                <form action="{{ route('potato.store')}}" method="POST">
                    @csrf
                    <p>名前：<input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}"></p>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <!-- サクサクさのプルダウンメニュー -->
                    <div class="row">
                        <div class="form-group">
                            <label for="custom-select-1">サクサクさ</label>
                            <select id="custom-select-1" class="custom-select" name="crispy">
                                <option value="{{old('crispy')}}">※{{old('crispy')}}</option>
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
                                <option value="{{old('hot')}}">※{{old('hot')}}</option>
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
                                <option value="{{old('garlic')}}">※{{old('garlic')}}</option>
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
                                <option value="{{old('salt')}}">※{{old('salt')}}</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>

                    <p>説明：</p><textarea type="text" name="description" value="{{old('description')}}"></textarea>
                    <div class="row">
                        <input class="btn btn-primary" type="submit" value="登録">
                    </div>
                </form>
            </div>
        </div>
        <p><a class="btn btn-primary" href="{{ route('potato.index')}}">一覧画面</a></p>
    </div>
</div>
@endsection