<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        <li>
          <a role="button" href="/potato"><i class="material-icons float-right">build</i>
            <p>test</p>
          </a>
        </li>
        <li>
          <a role="button" href="/contact"><i class="material-icons float-right">edit</i>
            <p>test</p>
          </a>
        </li>
      </ui>
    </div>
</header>
@endsection