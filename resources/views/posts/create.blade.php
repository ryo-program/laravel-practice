@extends('layout')

@section('content')
  <div class="insert">
    <div class="insert__container">
      <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <fieldset>
          <div>
            <label for="title">タイトル</label>
            <input id="title" type="text" name="title" value="{{ old('title') }}">
            @if ($errors->has('title'))
              <div>{{ $errors->first('title') }}</div>
            @endif
          </div>
          <div>
            <label for="body">本文</label>
            <textarea name="body" id="body" value="{{ old('body') }}" rows="4"></textarea>
            @if ($errors->has('body'))
              <div>{{ $errors->first('body') }}</div>
            @endif
          </div>
          <div>
            <a href="{{ route('top') }}">キャンセル</a>
            <button type="submit">投稿</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
@endsection
