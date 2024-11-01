<!-- resources/views/posts/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Post</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success mt-3">Save</button>
        </form>
    </div>
@endsection
