@extends('user.layout.layout')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-5 text-center">Add a user</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('users.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" value="{{old('name')}}" name="name"/>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" value="{{old('email')}}" name="email"/>
                    </div>
                    <div class="form-group">
                        <label for="country">Country :</label>
                        <input type="text" class="form-control" value="{{old('country')}}" name="country"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{url()->previous()}}" class="btn btn-warning">Go back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
