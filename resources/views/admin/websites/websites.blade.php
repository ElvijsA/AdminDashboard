@extends('layouts.dashboard')

@section('content')

    <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">Websites</div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Url</th>
                            <th>Desc by</th>
                            <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $index => $item)
                            <tr>
                            <td><i class="fa fa-arrows btn btn-default btn-sm" aria-hidden="true"></i></i></td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->url}}</td>
                            <td>{{$item->desc}}</td>
                            <td>
                                <a class="btn btn-default btn-sm" href="{{ URL::route('admin.websites.edit', $item->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
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
