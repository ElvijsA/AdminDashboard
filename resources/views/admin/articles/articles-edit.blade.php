@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$article->title}} Edit</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ URL::route('admin.articles.update', $article->id) }}">
                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                    <input type="hidden" name="_method" value="PUT">

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $article->title) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-sm-2 control-label">Text</label>
                            <div class="col-sm-10">
                            <textarea name="text" class="form-control" rows="3">{{ old('text', $article->text) }}</textarea>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
