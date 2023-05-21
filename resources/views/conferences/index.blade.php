@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-danger">Conferences</h1>
    <a href="{{ route('conferences.create') }}" class="btn btn-primary mb-3">Add new conference</a>
    <div class="card-deck">
        @foreach ($conferences as $conference)
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">{{ $conference->name }}</h5>
                <p class="card-text">{{ $conference->description }}</p>
                <p class="card-text"><strong>Date:</strong> {{ $conference->date_start }} - {{ $conference->date_end }}</p>
                <p class="card-text"><strong>Location:</strong> {{ $conference->location }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('conferences.edit', $conference->id) }}" class="btn btn-secondary">Edit</a>
                <form method="POST" action="{{ route('conferences.destroy', $conference->id) }}" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

