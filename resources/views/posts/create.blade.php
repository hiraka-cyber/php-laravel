@extends('layout')

@section('content')
<div class="container mt-4">
  <div class="border p-4">
    <h1 class="h5 mb-4">
    Create a new Post
  </h1>
  <form action="{{route('posts.store')}}" method="post">
    @csrf
    <fieldset class="mb-4">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control{{$errors->has('title') ? 'is-invalid' : '' }}" value="{{old('title')}}">
        @if($errors->has('title'))
        <div class="invalid-feedback">
          {{$errors->first('title')}}
        </div>
        @endif
      </div>
      <div class="form-group">
        <label for="body">Text</label>
        <textarea name="body" id="body" rows="4" class="form-control{{$errors->has('body') ? 'is-invalid' : '' }}">{{old('body')}}</textarea>
        @if($errors->has('body'))
        <div class="invalid-feedback">
          {{$errors->first('body')}}
        </div>
        @endif
      </div>
      <div class="mt-5">
        <a class="btn btn-secondary" href="{route('top')}">Cancel</a>
        <button type="submit" class="btn btn-primary">Post</button>
      </div>
    </fieldset>
  </form>
  </div>
</div>
@endsection
