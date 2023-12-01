@extends('layouts.app')

@section('content')
    <h1>Edit Laptop</h1>

    <form action="{{ route('laptops.update', $laptop) }}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $laptop->title }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" required>{{ $laptop->description }}</textarea>
        <br>
        <button type="submit">Update Laptop</button>
    </form>
@endsection
