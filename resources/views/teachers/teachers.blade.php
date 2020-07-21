@extends('layout')

@section('content')
<style>
  .push-top {
    margin-top: 100px;
  }
</style>

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Phone</td>
          <td>Password</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($teacher as $teachers)
        <tr>
            <td>{{$teachers->id}}</td>
            <td>{{$teachers->name}}</td>
            <td>{{$teachers->email}}</td>
            <td>{{$teachers->phone}}</td>
            <td>{{$teachers->subject}}</td>
            <td class="text-center">
                <a href="{{ route('teachers.show', $teachers->id)}}" class="btn btn-primary btn-sm">View</a>
                <a href="{{ route('teachers.edit', $teachers->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('teachers.destroy', $teachers->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <a href="{{ url('/teachers/create') }}"><p style="float:right;"><b>- CREATE</b></p></a>
<div>
@endsection