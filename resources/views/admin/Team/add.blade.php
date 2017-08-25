@extends('admin.master')
@section('mainContent')

<div class="container right_col" role="main">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Add Team</h3>
<span class="text-center text-success">
    {{Session::get('message')}}
</span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/team/save') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

<div class="form-group{{ $errors->has('teamtitle') ? ' has-error' : '' }}">
<label for="teamtitle" class="col-md-4 control-label">Team Title</label>

                <div class="col-md-6">
                    <input id="teamtitle" type="text" class="form-control" name="teamtitle" value="{{ old('teamtitle') }}" autofocus>
                        @if ($errors->has('teamtitle'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('teamtitle') }}</strong>
                                    </span>
                                @endif
                </div>
</div>
<div class="form-group{{ $errors->has('teamsubtitle') ? ' has-error' : '' }}">
<label for="teamsubtitle" class="col-md-4 control-label">Team Sub Title</label>

                <div class="col-md-6">
                    <input id="teamsubtitle" type="text" class="form-control" name="teamsubtitle" value="{{ old('teamsubtitle') }}" autofocus>
                        @if ($errors->has('teamsubtitle'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('teamsubtitle') }}</strong>
                                    </span>
                                @endif
                </div>
</div> 
<div class="form-group{{ $errors->has('teamcontent') ? ' has-error' : '' }}">
<label for="teamcontent" class="col-md-4 control-label">Team Discription</label>

                <div class="col-md-6">
                    <textarea id="teamcontent" class="form-control" name="teamcontent" value="{{ old('teamcontent') }}" autofocus>
                        
                    </textarea>
            @if ($errors->has('teamcontent'))
            <span class="help-block">
                            <strong>{{ $errors->first('teamcontent') }}</strong>
                        </span>
             @endif
                </div>
</div> 
<div class="form-group{{ $errors->has('teamimage') ? ' has-error' : '' }}">
<label for="teamimage" class="col-md-4 control-label">Team Image</label>

                <div class="col-md-6">
                 
                    <input type="file" name="teamimage" id="teamimage" class="teamimage form-control">
            @if ($errors->has('teamimage'))
            <span class="help-block">
                            <strong>{{ $errors->first('teamimage') }}</strong>
                        </span>
             @endif
                </div>
</div>       
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Added Team Section
                </button>
            </div>
        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection