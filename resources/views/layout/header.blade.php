@section('header')
<header class="header">
  <div class="container">
    <div class="row">
      <div class="logo col-4">
        <a href="/"><img src="/img/e0252_1.png" class="img-fluid center-block">
          <h1 class="title">ポテトチップのススメ </h1>
        </a>
      </div>
      <ui class="menu">
        <li>
          <a role="button" href="/">
            <i class="material-icons">home</i>
            <p>home</p>
          </a>
        </li>
        <li>
          <a role="button" href="/contact">
            <i class="material-icons">mail</i>
            <p>mail</p>
          </a>
        </li>
        <!-- ログインしている時のみ管理画面へのリンクを表示 -->
        @if( Auth::check() )
        <li>
          <a role="button" href="{{route('potato.index')}}">
            <i class="material-icons">build</i>
            <p>manage</p>
          </a>
        </li>
        <li>
          <a role="button" href="{{route('potato.create')}}">
            <i class="material-icons">add</i>
            <p>add</p>
          </a>
        </li>
        <li>
          {{-- {{Auth::logout()}} とすると読み込まれた途端ログアウト処理に飛ぶ --}}
          <a role="button" href="/logout">
            <i class="material-icons">logout</i>
            <p>logout</p>
          </a>
        </li>
        <li>
          {{ Auth::user()->name }}でログイン中
        </li>
      </ui>
    </div>
    <!-- ログインしていない場合、ログインボタンを配置 -->
    @else
    <li>
      <a role="button" href="{{route('login')}}">
        <i class="material-icons">login</i>
        <p>login</p>
      </a>
    </li>
    @endif

  </div>
</header>
@endsection