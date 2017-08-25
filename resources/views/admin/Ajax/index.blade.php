<html>
  <head>
   <title>Laravel CRUD Application using Ajax without Reloading Page</title>  
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> 
  </head>
<body>
<div class="container">
<div class="panel panel-primary">
 <div class="panel-heading">
 Laravel CRUD Application using Ajax without Reloading Page
 <button id="btn_add" name="btn_add" class="btn btn-default pull-right">Add New Product</button>
    </div>
      <div class="panel-body"> 
       <table class="table">
        <thead>
          <tr>
            <th>c name</th>
            <th>c dis</th>
            <th>c slug</th>
            <th>Actions</th>
          </tr>
         </thead>
         <tbody id="category-list" name="category-list">
           @foreach ($categories as $category)
            <tr>
             <td>{{$category->cname}}</td>
             <td>{{$category->cdis}}</td>
             <td>{{$category->cslug}}</td>
              <td>
              <button class="btn btn-warning btn-detail open_modal" value="{{$category->id}}">Edit</button>
              <button class="btn btn-danger btn-delete delete-category" value="{{$category->id}}">Delete</button>
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
                <h4 class="modal-title" id="myModalLabel">Product</h4>
            </div>
            <div class="modal-body">
            <form id="frmProducts" name="frmProducts" class="form-horizontal" novalidate="">
                <div class="form-group error">
                 <label for="inputName" class="col-sm-3 control-label">c Name</label>
                   <div class="col-sm-9">
                    <input type="text" class="form-control has-error" id="cname" name="cname" placeholder="Product Name" value="">
                   </div>
                   </div>
                 <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">c dis</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="cdis" name="cdis" placeholder="details" value="">
                    </div>
                </div>
                   <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">c slug</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="cslug" name="cslug" placeholder="c slug" value="">
                    </div>
                </div>
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
            <input type="hidden" id="id" name="id" value="0">
            </div>
        </div>
      </div>
  </div>
</div>
    <meta name="_token" content="{!! csrf_token() !!}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{asset('public/Admin/js/ajaxscript.js')}}"></script>
</body>
</html>