<x-header/>

<form action="/edit" method="post">
    @csrf
    <input type="text" name="id" value="{{$todo['id']}}">
    <input type="text" name="todoname" value="{{$todo['todoname']}}">
    <button type="submit">Módosít</button>
</form>

<x-footer/>