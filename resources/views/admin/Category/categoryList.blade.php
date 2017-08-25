@extends('admin.master')
@section('title')Blog With Laravel - Categories List @endsection
@section('mainContent') 
  
<div class="right_col" role="main">
  
<div class="container">
<div class="panel panel-info">
 <div class="panel-heading">
<i class="fa fa-list"></i>&nbsp;Category List

 <button id="btn_add" name="btn_add" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New Category</button>
<br> 
<br>
</div>
      <div class="panel-body"> 
       <table class="display table" id="myTable">
        <thead class="text-primary bg-success">
          <tr>
            <th>Category name</th>
            <th width="30%">Category Discription</th>
            <th>Category Slug</th>
            <th>Actions</th>
          </tr>
         </thead>
         <tbody id="category-list" name="category-list">
           @foreach ($categories as $category)
            <tr id="category{{$category->id}}">
             <td>{{$category->cname}}</td>
             <td>{{$category->cdis}}</td>
             <td>{{$category->cslug}}</td>
              <td>
              <button class="btn btn-success btn-detail open_modal" value="{{$category->id}}">
              <i class="fa fa-edit"></i>&nbsp;Edit</button>
              <button class="btn btn-danger btn-delete delete-category" value="{{$category->id}}" onclick="return confirm('Are You Sure To Deleted')">
              <i class="fa fa-remove"></i>&nbsp;Delete</button>
              </td>
            </tr>
            @endforeach
        </tbody>
        </table>
       </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Category</h4>
            </div>
            <div class="modal-body">
            <form id="frmProducts" name="frmProducts" class="form-horizontal" novalidate="">
                <div class="form-group error">
                 <label for="inputName" class="col-sm-4 control-label">Category Name</label>
                   <div class="col-sm-8">
                    <input type="text" class="form-control has-error" id="cname" name="cname" placeholder="Category Name" value="">
                   </div>
                   </div>
                 <div class="form-group">
                 <label for="inputDetail" class="col-sm-4 control-label">Category Discription</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="cdis" name="cdis" placeholder="Category Discription" value="">
                    </div>
                </div>
                   <div class="form-group">
                 <label for="inputDetail" class="col-sm-4 control-label">Category Slug</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="cslug" name="cslug" placeholder="c slug" value="">
                    </div>
                </div>
                <hr>
                <input type="submit" name="btn-save" value="Add Post" class="pull-right btn btn-primary" id="btn-save">
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

  <script src="{{ asset('public/Admin/')}}/js/Categoryajax.js"></script> 
</div>
<!-- right_col -->

  

@endsection