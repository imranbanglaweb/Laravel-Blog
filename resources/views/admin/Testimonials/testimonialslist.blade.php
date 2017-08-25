@extends('admin.master')
@section('title')Blog With Laravel - Page List @endsection
@section('mainContent')

<div class="right_col" role="main">
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3>Testimonials List</h3>
                <a href="{{ url('/testimonials/add')}}" class="pull-right btn btn-info">
                    <i class="fa fa-plus"></i> Add Now
                </a>
                <br>
                <hr>
 
@if(Session::has('message'))
<div class="alert {{ Session::get('alert-class', 'alert-success alert-dismissable') }}">
<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
{{ Session::get('message') }}
</div>
@endif

  <table class="table  table-responsive table-hover" id="myTable">
    <thead class="btn-primary">
      <tr>
        <th>SL.</th>
        <th>Title</th>
        <th>Discription</th>
        <th>Image</th>
        <th width="35%">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; ?>
    @foreach($testimonials as $testimonial)
      <tr>

        <td>{{$i++}}</td>
        <td>{{$testimonial->tname}}</td>
        <td>{{Text::shorten($testimonial->tcontent,25)}}</td>
        <td><img src="{{asset($testimonial->timage)}}" width="50px" height="50px"></td>
        <td>
            <a href="{{ url('/testimonials/edit')}}/{{$testimonial->id}}" class="btn btn-primary">
            <i class="fa fa-edit"></i>&nbsp;Edit</a> 
            <a href="{{ url('/testimonials/delete/')}}/{{$testimonial->id}}" class="btn btn-danger" onclick="return confirm('Are You Sure To Deleted')">
            <i class="fa fa-remove"></i>&nbsp;Delete</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
                </div>
                
            </div>
        </div>
        </div>
    </div>

@endsection