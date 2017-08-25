@extends('admin.master')
@section('mainContent')

<div class="right_col" role="main">
<div class="">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Team Edit</h3>
<span class="text-center text-success">
    {{Session::get('message')}}
</span>
                </div>
                <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ url('/team/update') }}" enctype="multipart/form-data">
               {{ csrf_field() }}

<div class="form-group{{ $errors->has('teamtitle') ? ' has-error' : '' }}">
<label for="teamtitle" class="col-md-4 control-label">Team Title</label>

                <div class="col-md-8">
            <input type="hidden" name="uId" value="{{$teamsbyId->id }}">
                    <input id="teamtitle" type="text" class="form-control" name="teamtitle" value="{{ $teamsbyId->teamtitle }}" autofocus>
                        @if ($errors->has('teamtitle'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('teamtitle') }}</strong>
                                    </span>
                                @endif
                </div>
</div> 
<div class="form-group{{ $errors->has('teamsubtitle') ? ' has-error' : '' }}">
<label for="teamsubtitle" class="col-md-4 control-label">Team Sub Title</label>

                <div class="col-md-8">
                    <input id="teamsubtitle" type="text" class="form-control" name="teamsubtitle" value="{{ $teamsbyId->teamsubtitle }}" autofocus>
                        @if ($errors->has('teamsubtitle'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('teamsubtitle') }}</strong>
                                    </span>
                                @endif
                </div>
</div> 

<div class="form-group{{ $errors->has('teamcontent') ? ' has-error' : '' }}">
<label for="teamcontent" class="col-md-4 control-label">
Team Discription</label>

                <div class="col-md-8">
                    <textarea id="teamcontent" class="form-control" name="teamcontent">
                        {{ $teamsbyId->teamcontent}}
                    </textarea>
            @if ($errors->has('teamcontent'))
            <span class="help-block">
                            <strong>{{ $errors->first('teamcontent') }}</strong>
                        </span>
             @endif
                </div>
</div>
<div class="form-group{{ $errors->has('teamcontent') ? ' has-error' : '' }}">
<label for="teamcontent" class="col-md-4 control-label">
Team Image</label>

                <div class="col-md-8">
                    <img src="{{asset($teamsbyId->teamimage)}}" class="img-responsive" width="150px" height="150px">
                    <input type="file" name="teamimage" id="teamimage" class="form-control">
            
                </div>
</div>       
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-info">
                <i class="fa fa-plus"></i> Updated Team Content
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