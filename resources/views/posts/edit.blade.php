@extends('layouts.app')

@section('title', 'Edit a Post')

@section('content')
  <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <p>Header: <input type="text" name="header"
      value="{{ $post->header }}"></p>
    <p>Body: <input type="text" name="body"
      value="{{ $post->body }}"></p>
      <p>User ID:
      <select name="user_id">
          <option value="{{ $post->user_id}}"
            @if ($post->user_id == old('user_id'))
              selected="selected"
            @endif
            >{{ $post->user_id }}</option>
      </select>
      </p>
      <p>Upload an image:
        <input type="file" name="featured_image"
        value="{{ old('image')}}"> </p>
    <input type="submit" value="Submit">
    <a href="{{ route('posts.index') }}"> Return </a>
  </form>
@endsection