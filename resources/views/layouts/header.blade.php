@section('header')
<header class="header">
  <div class="container">
    <div class="row">
      <div class="logo col-md-4 col-sm-12">
        <a href="/"><img src="/img/hukidashi.png" class="img-fluid center-block">
          <h1 class="title">ポテトチップのススメ </h1>
        </a>
      </div>

      @if( Auth::check() )
      <div class="name-tag">
        {{ Auth::user()->name }}でログイン中
      </div>
      @endif
      <ui class="menu">
        <li>
          <a role="button" href="/">
            <div class="menu-button">
              <i class="material-icons">home</i>
              <p>home</p>
            </div>
          </a>
        </li>
        <li>
          <a role="button" href="/contact">
            <div class="menu-button">
              <i class="material-icons">mail</i>
              <p>mail</p>
            </div>
          </a>
        </li>
        <!-- ログインしている時のみ管理画面へのリンクを表示 -->
        @if( Auth::check() )
        <li>
          <a role="button" href="{{route('potato.index')}}">
            <div class="menu-button">
              <i class="material-icons">build</i>
              <p>manage</p>
            </div>
          </a>
        </li>
        <li>
          <a role="button" href="{{route('potato.create')}}">
            <div class="menu-button">
              <i class="material-icons">add</i>
              <p>add</p>
            </div>
          </a>
        </li>
        <li>
          {{-- {{Auth::logout()}} とすると読み込まれた途端ログアウト処理に飛ぶ --}}
          <a role="button" href="{{ url('/logout') }}">
            <div class="logout-button">
              <i class="material-icons">logout</i>
              <p>logout</p>
            </div>
          </a>
        </li>
      </ui>
    </div>
    <!-- ログインしていない場合、ログインボタンを配置 -->
    @else
    <li>
      <a role="button" href="{{route('login')}}">
        <div class="menu-button">
          <i class="material-icons">login</i>
          <p>login</p>
        </div>
      </a>
    </li>
    @endif

  </div>
</header>
@endsection