@extends('layouts.app')

@section('title-block')Обновление записи@endsection

@section('content')
  <h1>Обновление записи</h1>


  <form action="{{route('contact-update-submit', $data->id)}}" method="post">
    @csrf
    <div class="form-group">
      <label for="name">Введите имя:</label>
      <input type="text" name="name" value="{{ $data->name }}"
      placeholder="Введите имя" id="name" class="form-control">
    </div>

    <div class="form-group">
      <label for="email">Введите email:</label>
      <input type="text" name="email" value="{{ $data->email }}"
      placeholder="Введите email" id="email" class="form-control">
    </div>

    <div class="form-group">
      <label for="subject">Введите тему сообщения:</label>
      <input type="text" name="subject" value="{{ $data->subject }}"
      placeholder="Введите тему сообщения" id="subject" class="form-control">
    </div>

    <div class="form-group">
      <label for="message">Введите сообщение:</label>
      <textarea name="message" id="message" class="form-control"
      placeholder="Введите сообщение">{{ $data->message }}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Обновить</button>
  </form>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
    mollit anim id est laborum.</p>
@endsection
