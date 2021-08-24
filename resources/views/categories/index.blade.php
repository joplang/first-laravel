@extends('layouts.app')

@section('content')
    @foreach ($categories as $category)
        <div class="container">
            <a href="/categories/{{ $category->id }}">
                <div class="card">{{ $category->name }}</div>
            </a>
        </div>
    @endforeach

@endsection