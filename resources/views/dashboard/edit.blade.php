@extends('layout.main')

@section('content')

    <form action="/update/{{$data['id']}}" method="post" style="max-width: 500px; margin: auto;">
     @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
     @endif
     {{--  mengirim data ke controller yg ditampung oleh Request $request --}}
        @csrf
        {{-- karena attribute method pada tag form cuman bisa GET/POST sedangkang buat update
            data itu pake method PATCH,jadi method="post" di form di timpa saa method 
            patch ini --}}
        @method('PATCH')
        <div class="d-flex flex-column">
            <label> Name</label>
            <input type="nama" name="nama" value="{{$data['nama']}}">
        </div>
        <div class="d-flex flex-column">
            <label>Email</label>
            <input type="email" name="email" value="{{$data['email']}}">
        </div>
        <div class="d-flex flex-column">
            <label>No Handphone</label>
            <input type="no_hp" name="no_hp" value="{{$data['no_hp']}}">
        </div>
        <div class="d-flex flex-column">
            <label>Adrress</label>
            <input type="address" name="address" value="{{$data['address']}}">
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection