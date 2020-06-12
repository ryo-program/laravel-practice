@extends('layout')

@section('content')
  <div class="posts">
    <a href="{{ route('posts.create') }}">投稿を新規作成</a>
    @foreach($posts as $post)
      <div class="post-item">
        <div class="post-item__title">
          {{ $post->title }}
        </div>
        <div class="post-item__body">
          <p>
            {!! nl2br(e(Str::limit($post->body, 200)))!!}
          </p>
          <a href="{{ route('posts.show', ['post' => $post]) }}">続きを読む</a>
        </div>
        <div class="post-item__footer">
          @if ($post->comments->count())
            <span>コメント： {{ $post->comments->count() }}件</span>
          @endif
          <span>投稿日時： {{ $post->created_at->format('Y/m/d')}}</span>
        </div>
      </div>
    @endforeach
  </div>
@endsection