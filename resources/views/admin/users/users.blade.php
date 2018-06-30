@extends('layouts.dashboard')

@section('content')
    <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">Users</div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Current Website</th>
                            <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $index => $user)
                            <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->website['name']}}</td>
                            <td>
                                <a class="btn btn-default btn-sm" href="{{ URL::route('admin.users.edit', $user->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

    </div>

@endsection
