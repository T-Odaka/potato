@section('header')
<header class="header">
  <div class="container">
    <div class="row">
      <div class="logo">
        <a href="/"><img src="/img/e0252_1.png"></a>
        <h1 class="col-4 title">ポテトチップのススメ </h1>
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
        @if( Auth::check() )
        <li>
          <a role="button" href="/potato"><i class="material-icons float-right">build</i>
            <p>manage</p>
          </a>
        </li>
        @endif
        @if( Auth::check() )
        <li>
          <a role="button" href="/potato/create"><i class="material-icons float-right">add</i>
            <p>add</p>
          </a>
        </li>
        @endif
      </ui>
      @if( Auth::check() )
      <div class="row">
        {{ Auth::user()->name }}でログイン中
        <div class="row">
        <a class="btn btn-danger" href="{{Auth::logout()}}">Logout</a>
        </div>
      </div>
      @else
      <a class="btn btn-primary" href="login">Login</a>
      @endif

    </div>
</header>
@endsection