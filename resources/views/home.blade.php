<x-header/>

<h1>Ez a todo főoldala.</h1>

<table>
    <tr>
        <th>Tennivalóim</th>
    </tr>
    @foreach( $todos as $todo )
    <tr>
        <td>{{ $todo[ 'todoname' ]}}</td>
        <td><a href={{ "delete/".$todo['id'] }}>Törlés</a></td>
        <td><a href={{ "edit/".$todo['id'] }}>Módosítás</a></td>
    </tr>
    @endforeach
</table>


<x-footer/>