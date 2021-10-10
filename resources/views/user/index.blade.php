@extends('user.layout.layout')

@section('main')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-5 text-center">Users</h1>
            <div>
                <a class="btn btn-success float-right mr-5 mb-2" href="{{route('users.create')}}">Add User</a>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Sr. No</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Country</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->country}}</td>
                        <td>
                            <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('users.destroy', $user->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection
