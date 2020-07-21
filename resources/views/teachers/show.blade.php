@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Student Profile
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name : </label> {{ $teacher->name }}
          </div>
          <div class="form-group">
              <label for="email">Email : </label> {{ $teacher->email }}
          </div>
          <div class="form-group">
              <label for="phone">Phone : </label> {{ $teacher->phone }}
          </div>
          <div class="form-group">
              <label for="password">Password : </label> *********
          </div>
      </form>
  </div>
</div>
@endsection