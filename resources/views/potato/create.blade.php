<h1>新規作成画面</h1>
<p><a href="{{ route('potato.management')}}">一覧画面</a></p>
 
<form action="{{ route('potato.store')}}" method="POST">
    @csrf
    <p>タイトル：<input type="text" name="title" value="{{old('title')}}"></p>
    <p>著者：<input type="text" name="author" value="{{old('author')}}"></p>
    <input type="submit" value="登録する">
</form>