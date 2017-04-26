@extends('layouts.master')
@section('header')
    @if(isset($breed))
        <a href="{{ url('/') }}">Back to Overview</a>
    @endif
    <h2>
        All @if(isset($breed)){{ $breed->name }}@endif Cats
        <a href="{{ url('cats/create' )}}" class="btn btn-primary">Add a new cat</a>
    </h2>
@stop
@section('content')
    <table class="table table-striped table-bordered">
        <thead>
            @foreach($colnames as $name)
                <th>{{ $name }}</th>
            @endforeach
        </thead>
        <tbody>
        @foreach($cats as $key => $cat)
            <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $cat->name }}</td>
                    <td>{{ $cat->date_of_birth }}</td>
                    <td>{{ $cat->breed->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop