@extends('layout')

@section('content')
  <div>
    <a href="{{ route('posts.edit', ['post' => $post]) }}">編集する</a>
    <form action="{{ route('posts.destroy', ['post' => $post]) }}" method="POST">
      @csrf
      @method('DELETE')
      <button>削除</button>
    </form>
    <h1>{{ $post->title }}</h1>
    <p>{!! nl2br(e($post->body)) !!}</p>
    <div>
      <h2>コメント</h2>
      @forelse($post->comments as $comment)
        <div>
          <time>
            {{ $comment->created_at->format('Y/m/d') }}
          </time>
          <p>{!! nl2br(e($comment->body)) !!}</p>
        </div>
      @empty
        <p>コメントはありません。</p>
      @endforelse

      <form action="{{route('comments.store')}}" method="post">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <div>
          <label for="body">本文</label>
          <textarea name="body" id="body" rows="4">{{old('body')}}</textarea>
          @if ($errors->has('body'))
            <div>
              {{$errors->first('body')}}
            </div>
          @endif
        </div>
        <div>
          <button type="submit">コメントする</button>
        </div>
      </form>
    </div>
    <a href="{{ route('top') }}">一覧に戻る</a>
  </div>
@endsection