@extends('admin.master')
@section('title')Blog With Laravel - Ad Post @endsection
@section('mainContent')

<div class="container right_col" role="main">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Add Post</h3>
<span class="text-center text-success">
    {{Session::get('message')}}
</span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/post/save') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

<div class="form-group{{ $errors->has('ptitle') ? ' has-error' : '' }}">
<label for="ptitle" class="col-md-4 control-label">Post Title</label>

                <div class="col-md-6">
                    <input id="posttitle" type="text" class="form-control" name="ptitle" value="{{ old('ptitle') }}" autofocus placeholder="Enter Your Post Title">
                        @if ($errors->has('ptitle'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('ptitle') }}</strong>
                                    </span>
                                @endif
                </div>
</div> 
<div class="form-group{{ $errors->has('Category') ? ' has-error' : '' }}">
<label for="Category" class="col-md-4 control-label">Category</label>

                <div class="col-md-6">
                    <select name="categoryid" id="categoryid" class="form-control">
                    <option value="">
                        Select Category
                    </option>
                    @foreach($categories as $category)
            <option value="{{$category->id}}">
                {{$category->cname}}
            </option>
                    @endforeach    
                    </select>
                        @if ($errors->has('pagetitle'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('Category') }}</strong>
                                    </span>
                                @endif
                </div>
</div> 
<div class="form-group{{ $errors->has('pcontent') ? ' has-error' : '' }}">
<label for="pcontent" class="col-md-4 control-label">Post Content</label>

                <div class="col-md-6">
                    <textarea id="pcontent" class="tinymce form-control" name="pcontent" value="{{ old('pcontent') }}" autofocus placeholder="Enter Your Post Content">
                    	
                    </textarea>
            @if ($errors->has('pcontent'))
            <span class="help-block">
                            <strong>{{ $errors->first('pcontent') }}</strong>
                        </span>
             @endif
                </div>
</div> 
<div class="form-group{{ $errors->has('ptag') ? ' has-error' : '' }}">
<label for="ptag" class="col-md-4 control-label">Tag Name</label>

                <div class="col-md-6">
                    <input id="ptag" type="text" class="form-control" name="ptag" value="{{ old('tag') }}" autofocus placeholder="Enter Your Tag Name">
                        @if ($errors->has('ptag'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('ptag') }}</strong>
                                    </span>
                                @endif
                </div>
</div>
<div class="form-group{{ $errors->has('tag') ? ' has-error' : '' }}">
<label for="tag" class="col-md-4 control-label">Upload image</label>

                <div class="col-md-6">
                    <input id="image" type="file" name="image">
                </div>
</div>       
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> 
                    Add Post
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