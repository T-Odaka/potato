@section('header')
<header class="header">
  <div class="container">
    <div class="row">
      <div class="logo col-4">
        <a href="/"><img src="/img/e0252_1.png" class="img-fluid center-block"></a>
        <h1 class="title">ポテトチップのススメ </h1>
      </div>
      <ui class="menu">
        <li><a role="button" href="/"><i class="material-icons float-right">home</i>
            <p>home</p>
          </a>
        </li>
        <li>
          <a role="button" href="/contact"><i class="material-icons float-right">mail</i>
            <p>mail</p>
          </a>
        </li>
        <!-- ログインしている時のみ管理画面へのリンクを表示 -->
        @if( Auth::check() )
        <li>
          <a role="button" href="{{route('potato.index')}}"><i class="material-icons float-right">build</i>
            <p>manage</p>
          </a>
        </li>
        <li>
          <a role="button" href="{{route('potato.create')}}"><i class="material-icons float-right">add</i>
            <p>add</p>
          </a>
        </li>
      </ui>
      <div class="row">
        {{ Auth::user()->name }}でログイン中
        <div class="row">
          {{-- {{Auth::logout()}} とすると読み込まれた途端ログアウト処理に飛ぶ --}}
          <a class="btn btn-danger" href="/logout">Logout</a>
        </div>
      </div>
      @else
      <a class="btn btn-primary" href="{{route('login')}}">Login</a>
      @endif

    </div>
</header>
@endsection