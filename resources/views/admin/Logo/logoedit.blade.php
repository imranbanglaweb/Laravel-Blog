@extends('admin.master')
@section('mainContent')

<div class="right_col" role="main">
<div class="">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Logo Edit</h3>
<span class="text-center text-success">
    {{Session::get('message')}}
</span>
                </div>
                <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ url('/logo/update') }}" enctype="multipart/form-data">
               {{ csrf_field() }}

<div class="form-group{{ $errors->has('teamtitle') ? ' has-error' : '' }}">
<label for="teamtitle" class="col-md-4 control-label">Logo Name</label>

                <div class="col-md-8">
            <input type="hidden" name="uId" value="{{$logosbyId->id }}">
                    <input id="lname" type="text" class="form-control" name="lname" value="{{ $logosbyId->lname }}" autofocus>
                        @if ($errors->has('lname'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                </div>
</div> 
<div class="form-group{{ $errors->has('teamsubtitle') ? ' has-error' : '' }}">
<label for="teamsubtitle" class="col-md-4 control-label">Logo Title</label>

                <div class="col-md-8">
                    <input id="ltitle
                    " type="text" class="form-control" name="ltitle" value="{{ $logosbyId->ltitle }}" autofocus>
                        @if ($errors->has('ltitle'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('ltitle') }}</strong>
                                    </span>
                                @endif
                </div>
</div> 

<div class="form-group{{ $errors->has('teamcontent') ? ' has-error' : '' }}">
<label for="teamcontent" class="col-md-4 control-label">
Logo Link</label>

                <div class="col-md-8">
                  
                    <input type="text" name="llink" class="form-control" id="llink" value="{{ $logosbyId->llink}}">
            @if ($errors->has('llink'))
            <span class="help-block">
                            <strong>{{ $errors->first('llink') }}</strong>
                        </span>
             @endif
                </div>
</div>
<div class="form-group{{ $errors->has('teamcontent') ? ' has-error' : '' }}">
<label for="teamcontent" class="col-md-4 control-label">
Logo Image</label>

                <div class="col-md-8">
                    <img src="{{asset($logosbyId->limage)}}" class="img-responsive" width="150px" height="150px">
                    <input type="file" name="teamimage" id="teamimage" class="form-control">
            
                </div>
</div>       
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                <i class="fa fa-plus"></i> Updated Logo 
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