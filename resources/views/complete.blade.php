@extends('layouts.common')
@include('layouts.header')
@include('layouts.footer')
@include('layouts.submenu')
@section('title', '送信完了')
@section('content')
<div class="container">
    <div class="wrapper">
        <div class="card border-0 shadow-sm">
            <p>お問い合わせありがとうございます。内容を確認次第返信いたします。</p>
            <p>5秒後自動でトップページに遷移いたします。</p>
        </div>
    </div>
</div>
@endsection
<meta http-equiv="refresh" content=" 5; url=/">