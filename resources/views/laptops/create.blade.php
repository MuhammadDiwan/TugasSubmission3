@extends('layouts.app')

@section('content')
    <h1>Create New Laptop</h1>

    <form action="{{ route('laptops.store') }}" method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" required></textarea>
        <br>
        <button type="submit">Create Laptop</button>
    </form>
@endsection
