@extends('layouts.master')
@section('header')
    <a href="{{ url('/') }}">Back to overview</a>
    <h2>
        {{ $cat->name }}
    </h2>
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
        <label for="cat_breed">Breed: </label>
        <span name="cat_breed">
            {{ $cat->breed->name }}
        </span>
    </div>
@stop
