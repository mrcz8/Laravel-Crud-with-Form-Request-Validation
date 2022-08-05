@extends('main/master')

@section('title')

@endsection

@section('content')
        
    <div class="container mt-5">
        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ url('crud/'.$crud->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" id="fullname" value="{{$crud->fullname}}" name="fullname">
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" class="form-control" id="age" value="{{$crud->age}}" name="age">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" value="{{$crud->email}}" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
@endsection