@extends('layouts.dashboard')

@section('content')
    <div class="row">

            <div class="panel panel-primary">
                <div class="panel-heading">Add Website</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/admin/websites') }}">
                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Website name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text" class="col-sm-2 control-label">Url</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="url" id="url" placeholder="Website url">
                            </div>
                        </div>

                          <div class="form-group">
                            <label for="text" class="col-sm-2 control-label">Desc</label>
                            <div class="col-sm-10">
                            <textarea name="desc" class="form-control" rows="3"></textarea>
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
