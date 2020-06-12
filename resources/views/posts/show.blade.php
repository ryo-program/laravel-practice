@extends('layout')

@section('content')
  <div>
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
    </div>
    <a href="{{ route('top') }}">一覧に戻る</a>
  </div>
@endsection