@extends('layouts.dashboard')

@section('content')
    <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">Website - {{$item->name}} edit</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ URL::route('admin.websites.update', $item->id) }}">
                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                    <input type="hidden" name="_method" value="PUT">

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name" value="{{  old('name',$item->name) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-sm-2 control-label">Url</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="url" id="url" value="{{  old('url',$item->url) }}">
                            </div>
                        </div>

                          <div class="form-group">
                            <label for="text" class="col-sm-2 control-label">Desc</label>
                            <div class="col-sm-10">
                            <textarea name="desc" class="form-control" rows="3">{{  old('desc',$item->desc) }}</textarea>
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

@endsection
