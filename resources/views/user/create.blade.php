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
                        <label for="first_name">Name:</label>
                        <input type="text" class="form-control" name="first_name"/>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email"/>
                    </div>
                    <div class="form-group">
                        <label for="city">Country :</label>
                        <input type="text" class="form-control" name="city"/>
                    </div>
                    <button type="submit" class="btn btn-primary-outline">Add contact</button>
                </form>
            </div>
        </div>
    </div>
@endsection
