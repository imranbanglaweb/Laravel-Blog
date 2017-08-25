@extends('admin.master')
@section('mainContent')

<div class="container right_col" role="main">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>About Us</h3>
<span class="text-center text-success">
    {{Session::get('message')}}
</span>
                </div>
                <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ url('/pages/update') }}">
               {{ csrf_field() }}

<div class="form-group{{ $errors->has('pagetitle') ? ' has-error' : '' }}">
<label for="pagetitle" class="col-md-4 control-label">Page Title</label>

                <div class="col-md-8">
            <input type="hidden" name="uId" value="{{$pagesbyId->id }}">
                    <input id="pagetitle" type="text" class="form-control" name="pagetitle" value="{{ $pagesbyId->pagetitle }}" autofocus>
                        @if ($errors->has('pagetitle'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('pagetitle') }}</strong>
                                    </span>
                                @endif
                </div>
</div> 
<div class="form-group{{ $errors->has('pagedis') ? ' has-error' : '' }}">
<label for="pagedis" class="col-md-4 control-label">Page Discription</label>

                <div class="col-md-8">
                    <textarea id="pagedis" class="form-control" name="pagedis">
                    	{{ $pagesbyId->pagedis}}
                    </textarea>
            @if ($errors->has('pagedis'))
            <span class="help-block">
                            <strong>{{ $errors->first('pagedis') }}</strong>
                        </span>
             @endif
                </div>
</div>       
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Updated
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