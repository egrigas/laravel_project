@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit conference</h1>
    <form method="POST" action="{{ route('conferences.update', $conference->id) }}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $conference->name }}">
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $conference->description }}</textarea>
        <label for="date_start">Date start:</label>
        <input type="date" id="date_start" name="date_start">
        <label for="date_end">Date end:</label>
        <input type="date" id="date_end" name="date_end">
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" value="{{ $conference->location }}">
        <button type="submit">Save changes</button>
    </form>
</div>
@endsection
