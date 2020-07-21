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
    Edit & Update
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
      <form method="post" action="{{ route('teachers.update', $teacher->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $teacher->name }}"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="{{ $teacher->email }}"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone" value="{{ $teacher->phone }}"/>
          </div>
          <div class="form-group">
              <label for="subject">Password</label>
              <input type="text" class="form-control" name="subject" value="{{ $teacher->subject }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update User</button>
      </form>
  </div>
</div>
@endsection