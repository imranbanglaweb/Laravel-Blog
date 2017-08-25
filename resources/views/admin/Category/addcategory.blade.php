@extends('admin.master')
@section('mainContent')

<div class="container right_col" role="main">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Add Category</h3>
<span class="text-center text-success">
    {{Session::get('message')}}
</span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/category/save') }}">
                        {{ csrf_field() }}

<div class="form-group{{ $errors->has('cname') ? ' has-error' : '' }}">
<label for="cname" class="col-md-4 control-label">
Category Name</label>

                <div class="col-md-6">
                    <input id="cname" type="text" class="form-control" name="cname" value="{{ old('pagetitle') }}" autofocus>
                        @if ($errors->has('cname'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('cname') }}</strong>
                                    </span>
                                @endif
                </div>
</div>
<div class="form-group{{ $errors->has('cname') ? ' has-error' : '' }}">
<label for="cname" class="col-md-4 control-label">
Category Discription</label>

                <div class="col-md-6">
                       
                        <textarea name="cdis" class="form-control">
                            
                        </textarea>
                         @if ($errors->has('cdis'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('cdis') }}</strong>
                                    </span>
                                @endif
                </div>
</div> 
<div class="form-group{{ $errors->has('cslug') ? ' has-error' : '' }}">
<label for="cslug" class="col-md-4 control-label">
Category Slug</label>

                <div class="col-md-6">
                    <input id="cslug" type="text" class="form-control" name="cslug" value="{{ old('cslug') }}" autofocus>
                        @if ($errors->has('cslug'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('cslug') }}</strong>
                                    </span>
                                @endif
                </div>
</div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                   <i class="fa fa-plus"></i> Category Added
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