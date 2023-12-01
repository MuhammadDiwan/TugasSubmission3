@extends('layouts.app')

@section('content')
    <h1>Laptop Details</h1>

    <p><strong>Title:</strong> {{ $laptop->title }}</p>
    <p><strong>Description:</strong> {{ $laptop->description }}</p>

    <a href="{{ route('laptops.index') }}">Back to Laptop List</a>
@endsection
