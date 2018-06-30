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

            
            <div class="panel panel-default">
                <div class="panel-heading">Admin Settings</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ URL::to('admin/users/websites/update', $item->id) }}">
                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />


                   
                        <div class="form-group">
                                <label for="text" class="col-sm-2 control-label">Current Websites</label>
                                <div class="col-sm-10">
                                        @if(count(old('websites',$item->websites)) > 0)
                                        <ul class="list-group">
                                            @foreach( old('websites',$item->websites) as $index => $website)
                                            
                                                <li class="list-group-item"> {{$website->name}} <a class="remove-website btn btn-danger btn-sm pull-right" data-id="{{$website->pivot}}" style="line-height:1;">Remove</a></li>
                                            
                                            @endforeach    
                                        </ul>
                                        @else
                                            <ul class="list-group">
                                                <li class="list-group-item list-group-item-danger">This user is not assigned to any websites</li>
                                            </ul>
                                        @endif
                                </div>
                        </div>
                        
                        <div class="form-group">
                                <label for="text" class="col-sm-2 control-label">Websites</label>
                                <div class="col-sm-10">
                                        <select class="form-control" name="websites">
                                            @foreach($websitesall as $index => $website)
                                                <option value="{{$website->id}}">{{$website->name}}</option>
                                            @endforeach
                                        </select>
                              
                                </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Add User to site</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>

           

        </div>
    </div>

<script>


    $( ".remove-website" ).on( "click", function() {
        var that = this;
        var id = jQuery(that).data('id');
                 console.log(id.user_id + " - " +id.website_id);   
        jQuery.ajax({
            url: "/admin/users/websites/delete/" +id.user_id + "/" +id.website_id ,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'POST'
        }).success(function(){
            jQuery(that).parent().remove();
        });
    });
    

    
</script>

@endsection
