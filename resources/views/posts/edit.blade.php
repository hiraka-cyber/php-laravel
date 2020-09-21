@extends('layout')

@section('content')
<div class="container mt-4">
  <div class="border p-4">
    <h1 class="h5 mb-4">Edit Post</h1>

    <form action="{{route('posts.update',['post' => $post]) }}" method="post">
      @csrf
      @method('PUT')

      <fieldset class="mb-4">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control{{$errors->has('title') ? 'is-invalid' : '' }}" value="{{old('title') ?: $post->title }}">
          @if($errors->has('title'))
          <div class="invalid-feedback">
            {{$errors->first('title')}}
          </div>
          @endif
        </div>
        <div class="form-group">
          <label for="body">Text</label>
          <textarea name="body" id="body" class="form-control{{$errors->has('body') ? 'is-invalid' : '' }}" rows="8">{{old('body') ?: $post->body }}</textarea>
          @if($errors->has('body'))
          <div class="invalid-feedback">
            {{$errors->first('body')}}
          </div>
          @endif
        </div>
        <div class="mt-5">
          <a class="btn btn-secondary" href="{{route('posts.show',['post' => $post])}}">Cancel</a>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </fieldset>
    </form>
  </div>
</div>
@endsection