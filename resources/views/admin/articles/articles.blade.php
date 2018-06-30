@extends('layouts.dashboard')

@section('content')

    <div class="row">

            <div class="panel panel-primary">
                <div class="panel-heading">Articles</div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Edited by</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $index => $article)
                            <tr>
                            <td>{{$article->title}}</td>
                            <td>{{$article->author->name}}</td>
                            <td>{{$article->author->name}}</td>
                            <td>{{$article->created_at}}</td>
                            <td>{{$article->updated_at}}</td>
                            <td>
                                <a class="btn btn-default btn-sm" href="{{ URL::route('admin.articles.edit', $article->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
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
