@extends('admin.master')
@section('mainContent')

<div class="right_col" role="main">
<div class="">
    <div class="row">
        <div class="col-md-">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Add Testimonials</h3>
<span class="text-center text-success">
    {{Session::get('message')}}
</span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/testimonials/save') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

<div class="form-group{{ $errors->has('tname') ? ' has-error' : '' }}">
<label for="tname" class="col-md-4 control-label">Testimonials Title</label>

                <div class="col-md-6">
                    <input id="tname" type="text" class="form-control" name="tname" value="{{ old('tname') }}" autofocus>
                        @if ($errors->has('tname'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('tname') }}</strong>
                                    </span>
                                @endif
                </div>
</div>
<div class="form-group{{ $errors->has('tcontent') ? ' has-error' : '' }}">
<label for="tcontent" class="col-md-4 control-label">Testimonials Discription</label>

                <div class="col-md-6">
                    <textarea id="tcontent" class="form-control" name="tcontent" value="{{ old('tcontent') }}" autofocus>
                        
                    </textarea>
            @if ($errors->has('tcontent'))
            <span class="help-block">
                            <strong>{{ $errors->first('tcontent') }}</strong>
                        </span>
             @endif
                </div>
</div> 
<div class="form-group{{ $errors->has('timage') ? ' has-error' : '' }}">
<label for="timage" class="col-md-4 control-label">Testimonials Image</label>

                <div class="col-md-6">
                 
                    <input type="file" name="timage" id="timage" class="teamimage form-control">
            @if ($errors->has('timage'))
            <span class="help-block">
                            <strong>{{ $errors->first('timage') }}</strong>
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
</div>

@endsection