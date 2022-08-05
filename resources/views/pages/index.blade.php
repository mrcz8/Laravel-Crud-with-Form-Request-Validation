@extends('main/master')

@section('title')

@endsection

@section('content')

    <div class="container mt-5">
        <a href="{{ url('/crud/create')}}" type="button" class="btn btn-info">Add New</a>
        <table class="table table-hover">
            <thead>
                <th>ID</th>
                <th>FULLNAME</th>
                <th>AGE</th>
                <th>EMAIL</th>
                <th>ACTION</th>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->fullname}}</td>
                    <td>{{$item->age}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        <a href="{{ url('/crud/'.$item->id.'/edit') }}" class="btn btn-success">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
