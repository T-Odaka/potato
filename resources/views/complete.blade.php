@extends('layout.common')
@include('layout.header')
@include('layout.footer')
@include('layout.submenu')
@section('title', '送信完了')
@section('content')
<div class="container">
<p>お問い合わせありがとうございます。内容を確認次第返信いたします。</p>
<p>5秒後自動でトップページに遷移いたします。</p>
</div>
@endsection
<meta http-equiv="refresh" content=" 5; url=/">