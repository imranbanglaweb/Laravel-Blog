@extends('admin.master')
@section('title')Blog With Laravel - Contact List @endsection
@section('mainContent')

<div class="right_col" role="main">
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3>Contact List</h3>
               
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
        <th>SL</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th width="35%">Action</th>
      </tr>
    </thead>
    <tbody class="text-success">
    <tr>
                <?php $i = 0 ?>
                @foreach($contacts as $contact)
                <?php $i++ ?>
                        
                <td>{{$i}}</td>
                <td>{{$contact->cname}}</td>             
         
                <td>{{$contact->email}}</td>
                <td>
                {{ Text::shorten($contact->cbody, 15) }}
                </td>
             
                   <td>
<button style="text-decoration: none" href="{{ url('/contact/edit/'.$contact->id)}} " class="btn btn-primary" disabled="">
<i class="glyphicon glyphicon-pencil"></i> Edit 
</button>  &nbsp;|| 
<a style="text-decoration: none" href="{{ url('/contact/delete/'.$contact->id)}} " class="btn btn-danger" onclick="return confirm('Are You Sure to Deleted');">
<i class="glyphicon glyphicon-remove"></i> Delete
</a>
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