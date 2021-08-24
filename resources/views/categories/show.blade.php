@extends('layouts.app')

@section('content')
@foreach ($products as $product )
    <div class="container-fluid">
        @if ($product->category_id === $category->id)
            <div class="card">
                <div class="card-header">{{ $product->name }}</div>
                <div class="card-body">{{ $product->info }}</div>
            </div>
        @endif
    </div>
@endforeach
@endsection