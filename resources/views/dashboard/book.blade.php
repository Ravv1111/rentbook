@extends('layout.main')

@section('title', 'users')
@section('content')

@if (Session::get('danger'))
<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Success!</strong> This account has been successfully deleted
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Title</th>
      <th scope="col">Writer</th>
      <th scope="col">Publisher</th>
      <th scope="col">Cover Book</th>
      <th scope="col">Sinopsis</th>
      <th scope="col" style="text-align: center">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php $i=1;?>
   @foreach($books as $dt)
    <tr>
        
        <td>{{$i++}}</td>
        <td>{{$dt->nama}}</td>
        <td>{{$dt->email}}</td>
        <td>{{$dt->no_hp}}</td>
        <td>{{$dt->address}}</td>
        <td style="text-align: center">

          `{{-- <form action="/edit/">
          <button id="editUser" class="btn btn-primary text-white me-2"  
          data-target="#edit_modal" data-id="{{ $dt->id }}">Edit</button>
          </form> --}}

          <form action="/delete/{{ $dt['id'] }}" method="POST" class="d-inline">
            @csrf
            @method('delete')
            <a href="/edit/{{$dt['id']}}" class="btn btn-primary btn-sm ">Edit</a>   
            <button class="btn btn-danger btn-sm">Delete</button>  
          </form>

        </td>
        
    </tr>
    @endforeach
  </tbody>
</table>

@endsection