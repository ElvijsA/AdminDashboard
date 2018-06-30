@extends('layouts.dashboard')

@section('content')

    <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit Profile</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ URL::route('admin.websites.update', $item->id) }}">
                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                    <input type="hidden" name="_method" value="PUT">

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name" value="{{  old('name',$item->name) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="email" value="{{  old('url',$item->email) }}">
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

@endsection
