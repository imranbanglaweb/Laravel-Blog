@extends('admin.master')
@section('mainContent')

<div class="right_col" role="main">
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Team Edit</h3>
<span class="text-center text-success">
    {{Session::get('message')}}
</span>
                </div>
                <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ url('/testimonials/update') }}" enctype="multipart/form-data">
               {{ csrf_field() }}

<div class="form-group{{ $errors->has('tname') ? ' has-error' : '' }}">
<label for="tname" class="col-md-4 control-label">Team Title</label>

                <div class="col-md-8">
            <input type="hidden" name="tId" value="{{$tbyId->id }}">
                    <input id="tname" type="text" class="form-control" name="tname" value="{{ $tbyId->tname }}" autofocus>
                        @if ($errors->has('tname'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('tname') }}</strong>
                                    </span>
                                @endif
                </div>
</div> 

<div class="form-group{{ $errors->has('tcontent') ? ' has-error' : '' }}">
<label for="tcontent" class="col-md-4 control-label">
Team Discription</label>

                <div class="col-md-8">
                    <textarea id="tcontent" class="form-control" name="tcontent">
                        {{ $tbyId->tcontent}}
                    </textarea>
            @if ($errors->has('tcontent'))
            <span class="help-block">
                            <strong>{{ $errors->first('tcontent') }}</strong>
                        </span>
             @endif
                </div>
</div>
<div class="form-group{{ $errors->has('timage') ? ' has-error' : '' }}">
<label for="timage" class="col-md-4 control-label">
Team Image</label>

                <div class="col-md-8">
                    <img src="{{asset($tbyId->timage)}}" class="img-responsive" width="150px" height="150px">
                    <input type="file" name="image" id="timage" class="form-control">
            
                </div>
</div>       
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-info">
                <i class="fa fa-plus"></i> Updated Testimonial Content
                </button>
            </div>
        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection