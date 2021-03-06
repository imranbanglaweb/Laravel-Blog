@extends('admin.master')
@section('title')Blog With Laravel - Page List @endsection
@section('mainContent')

<div class="container right_col" role="main">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3>Pages List</h3>
                <a href="{{ url('/pages/add')}}" class="pull-right btn btn-info">
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
    <thead>
      <tr>
        <th>SL No</th>
        <th>Page Title</th>
        <th>Page Discription</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; ?>
    @foreach($pages as $page)
      <tr>

        <td>{{$i++}}</td>
        <td>{{$page->pagetitle}}</td>
        <td>{{$page->pagedis}}</td>
        <td>
            <a href="{{ url('/pages/edit')}}/{{$page->id}}" class="btn btn-primary">
            <i class="fa fa-edit"></i>&nbsp;Edit</a> ||
            <a href="{{ url('/pages/delete')}}/{{$page->id}}" class="btn btn-danger" onclick="return confirm('Are You Sure To Deleted')">
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

@endsection