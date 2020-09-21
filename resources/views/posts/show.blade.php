@extends('layout')

@section('content')
<div class="container mt-4">
  <div class="border p-4">
    <h1 class="h5 mb-4">{{$post->title}}</h1>
    <p class="mb-5">
      {!! nl2br(e($post->body)) !!}
    </p>
    <div class="mb-4 text-right">
      <a class="btn btn-primary" href="{{route('posts.edit',['post' => $post])}}">Edit</a>
      <form style="display:inline-block;" action="{{route('posts.destroy',['post' => $post]) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Delete</button>
      </form>
    </div>



    <section>
      <form class="mb-4" action="{{route('comments.store')}}" method="post">
        @csrf
        <input type="hidden" name="post_id" value="{{$post->id}}">
        <div class="form-group">
          <label for="body">Text</label>
          <textarea name="body" id="body" class="form-control{{$errors->has('body') ? 'is-invalid' : '' }}" rows="8">{{old('body')}}</textarea>
          @if($errors->has('body'))
          <div class="invalid-feedback">
            {{$errors->first('body')}}
          </div>
          @endif
        </div>
        <div class="mt-4">
          <button type="submit" class="btn btn-primary">To comments</button>
        </div>
      </form>
      <h2 class="h5 mb-4">Comments</h2>

      @forelse($post->comments as $comment)
      <div class="border-top p-4">
        <time class="text-secondary">
          {{ $comment->created_at->format('Y.m.d H:i') }}
        </time>
        <p class="mt-2">
          {!! nl2br(e($comment->body)) !!}
        </p>
      </div>
      @empty
      <p>Nothinig Comments.</p>
      @endforelse
    </section>
  </div>
</div>
@endsection
