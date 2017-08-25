@extends('admin.master')
@section('mainContent')

<div class="right_col" role="main">
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3>Add Logo</h3>
<span class="text-center text-success">
    {{Session::get('message')}}
</span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/logo/save') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

<div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
<label for="lname" class="col-md-4 control-label">Logo Name</label>

                <div class="col-md-6">
                    <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}" autofocus>
                        @if ($errors->has('lname'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                </div>
</div>
<div class="form-group{{ $errors->has('ltitle') ? ' has-error' : '' }}">
<label for="ltitle" class="col-md-4 control-label">
Logo Title</label>

                <div class="col-md-6">
                    <input id="ltitle" type="text" class="form-control" name="ltitle" value="{{ old('ltitle') }}" autofocus>
                        @if ($errors->has('ltitle'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('ltitle') }}</strong>
                                    </span>
                                @endif
                </div>
</div> 
<div class="form-group{{ $errors->has('llink') ? ' has-error' : '' }}">
<label for="llink" class="col-md-4 control-label">Logo Link</label>

                <div class="col-md-6">
                    <textarea id="llink" class="form-control" name="llink" value="{{ old('llink') }}" autofocus>
                        
                    </textarea>
            @if ($errors->has('llink'))
            <span class="help-block">
                            <strong>{{ $errors->first('llink') }}</strong>
                        </span>
             @endif
                </div>
</div> 
<div class="form-group{{ $errors->has('limage') ? ' has-error' : '' }}">
<label for="limage" class="col-md-4 control-label">
Logo Image</label>

                <div class="col-md-6">
                 
                    <input type="file" name="limage" id="limage" class="limage form-control">
            @if ($errors->has('limage'))
            <span class="help-block">
                            <strong>{{ $errors->first('limage') }}</strong>
                        </span>
             @endif
                </div>
</div>       
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Added Logo
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