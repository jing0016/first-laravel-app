
/**
 * Created by PhpStorm.
 * User: jing
 * Date: 2018/7/15
 * Time: 3:37 PM
 */

@extends('layouts.app')

{{--this will add laravel’s default navbar to your page--}}

@section('content')

    //here goes your body content
    <div class="container">
        <h1>Edit the Task</h1>

        <form method="post" action="/task/{{$task->id}}">

            <div class="form-group">
                <textarea name="description" class="form-control">{{$task->description}}</textarea>
            </div>

            <div class="form-group">
                <button type="submit" name="update" class="btn btn-primary">Update task</button>
            </div>
            {{csrf_field()}}
        </form>

    </div>

@endsection