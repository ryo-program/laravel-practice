@extends('layout')

@section('content')
<a href="{{ route('posts.create') }}">投稿を新規作成</a>
  <div class="posts">
    @foreach($posts as $post)
      <div class="post__item">
        <div class="post__item__title">
          <p class="title">{{ $post->title }}</p>
          <p class="small">({{ $post->created_at->format('Y/m/d')}})</p>
        </div>
        <div class="post__item__body">
          <p>
            {!! nl2br(e(Str::limit($post->body, 200)))!!}
          </p>
          <a href="{{ route('posts.show', ['post' => $post]) }}" class="continue">続きを読む</a>
        </div>
        <div class="post__item__footer">
          @if ($post->comments->count())
            <span class="small">コメント： {{ $post->comments->count() }}件</span>
          @endif
        </div>
      </div>
    @endforeach
  </div>
  <div>
    {{ $posts->links() }}
  </div>
@endsection