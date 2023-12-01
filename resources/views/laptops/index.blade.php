@extends('layouts.app')

@section('content')
    <h1>Laptop List</h1>

    <a href="{{ route('laptops.create') }}">Add New Laptop</a>

    <ul>
        @foreach ($laptops as $laptop)
            <li>
                {{ $laptop->title }} - {{ $laptop->description }}
                <a href="{{ route('laptops.edit', $laptop) }}">Edit</a>
                <form action="{{ route('laptops.destroy', $laptop) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
