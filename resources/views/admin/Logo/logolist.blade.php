@extends('admin.master')
@section('title')Blog With Laravel - Page List @endsection
@section('mainContent')

<div class="right_col" role="main">
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3>Team List</h3>
                <a href="{{ url('/logo/add')}}" class="pull-right btn btn-info">
                    <i class="fa fa-plus"></i> Add Now
                </a>
                <br>
                <hr>
 
<!-- @if(Session::has('message'))
<div class="alert {{ Session::get('alert-class', 'alert-success alert-dismissable') }}">
<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
{{ Session::get('message') }}
</div>
@endif -->

@include('flash::message')
  <table class="table  table-responsive table-hover" id="myTable">
    <thead class="btn-primary">
      <tr>
        <th>SL No</th>
        <th>Name</th>
        <th>Title</th>
        <th>Link</th>
        <th>Image</th>
        <th width="35%">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; ?>
    @foreach($Logos as $logo)
      <tr>

        <td>{{$i++}}</td>
        <td>{{$logo->lname}}</td>
        <td>{{$logo->ltitle}}</td>
        <td>{{$logo->llink}}</td>
        <td>
        <img style="border-radius: 50%;border:2px solid #ddd" src="{{asset($logo->limage)}}" width="50px" height="50px">
        </td>
        <td>
            <a href="{{ url('/logo/edit')}}/{{$logo->id}}" class="btn btn-primary">
            <i class="fa fa-edit"></i>&nbsp;Edit</a> ||
            <a href="{{ url('/logo/delete')}}/{{$logo->id}}" class="btn btn-danger" onclick="return confirm('Are You Sure To Deleted')">
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