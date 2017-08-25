@extends('admin.master')
@section('mainContent')
<div class="right_col" role="main">
<div class="">
    <div class="row">
        <div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">Edit Portfolio 
<span class="text-center text-success">
    <!-- {{Session::get('message')}} -->
</span>
</div>
<div class="panel-body">
{!! Form::open(['url' => 'Portfolio/update','method'=>'post','class'=>'form-horizontal','name'=>'editCform']) !!}
<div class="form-group{{ $errors->has('cname') ? ' has-error' : '' }}">
<label for="name" class="col-md-4 control-label">Portfolio Title
</label>

    <div class="col-md-6">
        <input id="title" type="text" class="form-control" name="title" value="{{ $portfolioById->title }}">
<input type="hidden"  name="uid" value="{{ $portfolioById->id }}">
        @if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('cdis') ? ' has-error' : '' }}">
    <label for="discription" class="col-md-4 control-label">Portfolio Discription</label>

    <div class="col-md-6">
        <textarea class="form-control" name="discription">
            {{ $portfolioById->discription}}
        </textarea>

        @if ($errors->has('discription'))
            <span class="help-block">
                <strong>{{ $errors->first('discription') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
    <label for="link" class="col-md-4 control-label">Portfolio Link</label>

    <div class="col-md-6">
       <input type="text" name="link" value="{{ $portfolioById->link}}" class="form-control">

        @if ($errors->has('link'))
            <span class="help-block">
                <strong>{{ $errors->first('link') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
    <label for="image" class="col-md-4 control-label">Portfolio Image</label>

    <div class="col-md-6">
       
        <img src="{{ asset($portfolioById->image)}}" height="50px" width="50px">
 
        @if ($errors->has('image'))
            <span class="help-block">
                <strong>{{ $errors->first('image') }}</strong>
            </span>
        @endif
    </div>
</div>



<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-success">
        <i class="fa fa-plus"></i>
            Update Portfolio
        </button>
    </div>
</div>
{!! Form::close() !!}
</div>
</div>
        </div>
    </div>
</div>
</div>
@endsection