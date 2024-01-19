@extends('layouts.app')
@section('content')
    <h1>{{ $technology->name }}</h1>
    <ul>
    @foreach($technology->projects as $project)

        <li>{{ $project->name }}</li>
    @endforeach
    </ul>
@endsection
