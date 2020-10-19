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

        <a role="button" href="/">
          <li>
            <div class="menu-button">
              <i class="material-icons">home</i>
              <p>home</p>
            </div>
          </li>
        </a>
        <a role="button" href="/contact">
          <li>
            <div class="menu-button">
              <i class="material-icons">mail</i>
              <p>mail</p>
            </div>
          </li>
          </a>
        <!-- ログインしている時のみ管理画面へのリンクを表示 -->
        @if( Auth::check() )
        <a role="button" href="{{route('potato.index')}}">
          <li>
            <div class="menu-button">
              <i class="material-icons">build</i>
              <p>manage</p>
            </div>
          </li>
          </a>
          <a role="button" href="{{route('potato.create')}}">
          <li>
            <div class="menu-button">
              <i class="material-icons">add</i>
              <p>add</p>
            </div>
          </li>
          </a>
          {{-- {{Auth::logout()}} とすると読み込まれた途端ログアウト処理に飛ぶ --}}
          <a role="button" href="{{ url('/logout') }}">
            <li>
            <div class="logout-button">
              <i class="material-icons">logout</i>
              <p>logout</p>
            </div>
          </li>
          </a>
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