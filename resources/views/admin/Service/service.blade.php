@extends('admin.master')
@section('title')Blog With Laravel - Categories List @endsection
@section('mainContent') 
  
<div class="right_col" role="main">
  
<div class="container">
<div class="panel panel-info">
 <div class="panel-heading">
<i class="fa fa-list"></i>&nbsp;Service List

 <button id="btn_add" name="btn_add" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New Service</button>
<br> 
<br>
</div>
      <div class="panel-body"> 
       <table class="display table" id="myTable">
        <thead class="text-primary bg-success">
          <tr>
            <th>Sl</th>
            <th>Service name</th>
            <th width="30%">Service Content</th>
            <th>Service Icon</th>
            <th>Actions</th>
          </tr>
         </thead>
         <tbody id="service-list" name="service-list">
         <?php $i=1; ?>
           @foreach ($service as $service)
            <tr id="service{{$service->id}}">
             <td>{{$i++}}</td>
             <td>{{$service->stitle}}</td>
             <td>{{Text::shorten($service->scontent,25)}}</td>
             <td>{{$service->sicon}}</td>
              <td>
              <button class="btn btn-success btn-detail open_modal" value="{{$service->id}}">
              <i class="fa fa-edit"></i>&nbsp;Edit</button>
              <button class="btn btn-danger btn-delete delete-service" value="{{$service->id}}" onclick="return confirm('Are You Sure To Deleted')">
              <i class="fa fa-remove"></i>&nbsp;Delete</button>
              </td>
            </tr>
            @endforeach
        </tbody>
        </table>
       </div>
</div>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Service</h4>
            </div>
            <div class="modal-body">
            <form id="frmProducts" name="frmProducts" class="form-horizontal" action="" method="post">
                <div class="form-group error">
                 <label for="inputName" class="col-sm-4 control-label">Service Name</label>
                   <div class="col-sm-8">
                    <input type="text" class="form-control has-error" id="stitle" name="stitle" placeholder="Service Title" value="" required="required">
                   </div>
                   </div>
                 <div class="form-group">
                 <label for="inputDetail" class="col-sm-4 control-label">Service Content</label>
                    <div class="col-sm-8">
                    
                    <textarea class="form-control" name="scontent" id="scontent">
                      
                    </textarea>
                    </div>
                </div>
                   <div class="form-group">
                 <label for="inputDetail" class="col-sm-4 control-label">Service Icon</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="sicon" name="sicon" placeholder="Service Icon" value="">
                    </div>
                </div>
                <hr>
                <input type="submit" name="btn-save" value="Add Service" class="pull-right btn btn-primary" id="btn-save">
                <input type="hidden" id="id" name="id" value="0">
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <span aria-hidden="true"><i class="fa fa-remove"></i> Close</span>
            </button>
            
            </div>
        </div>
      </div>
  </div>
  <!-- end modal div -->
</div>
   
<meta name="_token" content="{!! csrf_token() !!}" />
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
     
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

  <script src="{{ asset('public/Admin/')}}/js/ServiceAjax.js"></script> 
</div>
<!-- right_col -->

  

@endsection