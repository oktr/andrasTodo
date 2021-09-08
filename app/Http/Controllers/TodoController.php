<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    function home() {
        
        return view( 'home' );
    }

    function getTodos() {

        $todos = Todos::all();
        //return view( 'home', [ 'todos' => $todos ]);
        return $todos;
    }

    function deleteTodo( $id ) {
        
        $todo = Todos::find( $id );
        $todo->delete();
        
        //return redirect( 'home' );
        return true;
    }
/*
    function showTodo( $id ) {

        $selTodo = Todos::find( $id );

        return view( 'editTodo', [ 'todo' => $selTodo ]);
    }
*/
    function editTodo( Request $req ) {

        $selTodo = Todos::find( $req->id );
        $selTodo->todoname = $req->todoname;
        $selTodo->save();
        
        return redirect( 'home' );
    }
}
