@extends('layouts.master')
@section('header')
    <a href="{{ url('/') }}">Back to overview</a>
    <h2>
        {{ $cat->name }}
    </h2>
    <a href="{{ url('cats/breeds'.$cat->id.'/edit')}}">
        <span class="glyphicon glyphicon-edit"></span>
        Edit
    </a>
    <a href="{{ url('cats/breeds'.$cat->id.'/delete')}}">
        <span class="glyphicon glyphicon-trash"></span>
        Delete
    </a>
    
@stop

@section('content')
    <div>
        <label for="cat_name">Name: </label>
        <span name="cat_name">
            {{ $cat->name}}
        </span>
    </div>
    <div>
        <label for="cat_birth">Birth Date: </label>
        <span name="cat_birth">
            {{ $cat->date_of_birth}}
        </span>
    </div>
    <div>
         @if($cat->breed)
            <label for="cat_breed">Breed: </label>
            <span name="cat_breed">
                {{ $cat->breed->name }}
            </span>
        @endif
    </div>
@stop
