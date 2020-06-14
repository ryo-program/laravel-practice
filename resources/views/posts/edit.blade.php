@extends('layout')

@section('content')
  <div>
    <div>
      <h1>投稿の編集</h1>

      <form action="{{ route('posts.update', ['post' => $post]) }}" method="POST">
        @csrf
        @method('PUT')
        <fieldset>
          <div>
            <label for="title">タイトル</label>
            <input type="text" id="title" name="title" value="{{ old('title') ?: $post->title }}">
            @if($errors->has('title'))
              <div>
                {{$errors->first('title')}}
              </div>
            @endif
          </div>
          <div>
            <label for="body">本文</label>
            <textarea name="body" id="body" rows="4" value="{{ old('body') ?: $post->body }}"></textarea>
            @if($errors->has('body'))
              <div>
                {{$errors->first('body')}}
              </div>
            @endif
          </div>
          <div>
            <a href="{{ route('posts.show', ['post' => $post]) }}">キャンセル</a>
            <button type="submit">更新する</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
@endsection