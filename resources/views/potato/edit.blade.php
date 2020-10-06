<h1>編集画面</h1>
<p><a href="{{ route('potato.management')}}">一覧画面</a></p>
 
@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif
 
<form action="{{ route('potato.update',$potato->id)}}" method="POST">
    @csrf
    @method('PUT')
    <p>タイトル：<input type="text" name="title" value="{{ $potato->title }}"></p>
    <p>著者：<input type="text" name="author" value="{{ $potato->author }}"></p>
    <input type="submit" value="編集する">
</form>