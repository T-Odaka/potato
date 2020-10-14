@extends('layouts.common')
@include('layouts.header')
@include('layouts.submenu')
@include('layouts.footer')

@section('title', 'ポテトチップのススメ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', 'インデックスページの説明文です')
@section('pageCss')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>

<script>
    // 1回目のアクセス
    if ($.cookie("access") == undefined) {

        $(function() {
            var h = $(window).height();
            $('#wrap').css('display', 'none');
            $('#loader-bg ,#loader').height(h).css('display', 'block');
        });

        $(window).load(function() { //全ての読み込みが完了したら実行
            $('#loader-bg').delay(900).fadeOut(800);
            $('#loader').delay(600).fadeOut(300);
            $('#wrap').css('display', 'block');
        });

        //10秒たったら強制的にロード画面を非表示
        $(function() {
            setTimeout('stopload()', 10000);
        });

        function stopload() {
            $('#wrap').css('display', 'block');
            $('#loader-bg').delay(900).fadeOut(800);
            $('#loader').delay(600).fadeOut(300);
        }
        $.cookie("access", "true");
    } else {
        $("#loading").css("display", "none");
        $("#loading-bg").css("display", "none");
    }
</script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">

@endsection

<div id="loader-bg">
    <div id="loader">
        <img src="img/loading.gif" width="80" height="80" alt="Now Loading..." />
        <p>Now Loading...</p>
    </div>
</div>



@section('content')

<div class="container">
    <div class="wrapper">

        <!-- ソート用ボタン -->
        <div class="dropdown offset-10 col-2">
            <button type="button" id="dropdown1" class="dropdown-toggle btn-flat-dashed-border" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                並び替え
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdown1">
                <a class="dropdown-item" href="/sortHot">名前</a>
                <a class="dropdown-item" href="/sortHot">辛さ</a>
                <a class="dropdown-item" href="/sortCrispy">サクサクさ</a>
                <a class="dropdown-item" href="/sortSalt">塩分み</a>
                <a class="dropdown-item" href="/sortGarlic">ニンニク度</a>
            </div>
        </div>



        <!-- ページネーション -->
        <div class="d-flex justify-content-center col-3 mx-auto">
            {{ $pages->appends(request()->query())->links('vendor.pagination.bootstrap-4') }}
        </div>
        <div id="page_top"><a href="#"></a></div>
    </div>
</div>
@endsection