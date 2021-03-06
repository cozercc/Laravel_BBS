@extends('layouts.default')
@section('title', '登録')

@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card ">
    <div class="card-header">
      <h5>登録</h5>
    </div>
    <div class="card-body">

      @include('users/_errors')

      <form method="POST" action="{{ route('users.store') }}">
        {{ csrf_field() }}

        <div class="mb-3">
          <label for="name">名前：</label>
          <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="mb-3">
          <label for="email">メールアドレス：</label>
          <input type="text" name="email" class="form-control" value="{{ old('email') }}">
        </div>

        <div class="mb-3">
          <label for="password">パスワード：</label>
          <input type="password" name="password" class="form-control" value="{{ old('password') }}">
        </div>

        <div class="mb-3">
          <label for="password_confirmation">パスワード確認：</label>
          <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
        </div>

        <button type="submit" class="btn btn-primary">登録</button>
      </form>
      <a href={{ route('home') }}>
        <button class="btn btn-primary">一覧へ</button>
      </a>
    </div>
  </div>
</div>
@stop