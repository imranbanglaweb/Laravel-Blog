@extends('admin.master')
@section('title')Blog With Laravel - Post List @endsection
@section('mainContent') 
<div class="right_col" role="main">
<div class="">
<div class="panel panel-success">
 <div class="panel-heading">
<i class="fa fa-list"></i>&nbsp;Post List

<button id="btn_add" name="btn_add" class="btn btn-primary pull-right">
 <i class="fa fa-plus"  data-toggle="modal"></i>
  Add New Post
</button>
 
<br> 
<br>
</div>
      <div class="panel-body"> 
       <table class="display table" id="myTable">
        <thead class="text-primary bg-success">
          <tr>
            <th width="2%">SL</th>
            <th width="20%">Post Title</th>
            <th>Category</th>
            <th width="15%">Content</th>
            <!-- <th width="5%">Tag</th> -->
            <th width="5%">Image</th>
            <th width="5%">P Date</th>
            <th width="5%">Status</th>
            <th width="50%">Actions</th>
          </tr>
         </thead>
         <tbody id="post-list" name="post-list">
         <?php $i=1; ?>
           @foreach ($posts as $post)
            <tr id="post{{$post->id}}">
             <td>{{$i++}}</td>
             <td>{{$post->ptitle}}</td>
             <td>{{$post->cname}}</td>
             <td>{{Text::shorten($post->pcontent,15)}}</td>
             <!-- <td>{{$post->ptag}}</td> -->
             @if (File::exists($post->image))
             <td>
           <!--   <img src="data:image/jpeg;base64,'.base64_encode({{asset($post->image)}}).'" height="60" width="75" class="img-thumbnail" /> -->
              <img style="border-radius: 50%; box-shadow: 1px 2px 2px 1px #666" src="{{asset($post->image)}}" width="50px" height="50px" title="{{$post->ptitle}}" data-toggle="tooltip" data-placement="right" >
           
             </td>
            @else 
            <td>
              <img src="{{ asset('public/Admin/images/user.png') }}" width="50px" height="50px" alt="{{ $post->ptitle }}" title="{{$post->ptitle}}" data-toggle="tooltip" data-placement="right" />

              
      
     
            </td>
              
            @endif
            
            <td>
            {{ date('F d, Y', strtotime($post->created_at)) }} 

            </td>

            @if(($post->status) == 1)
            <td>
            <button class="btn btn-info btn-sm"  title="Published" data-toggle="tooltip" data-placement="right">
               Published
            </button>
             
            </td>
            @else
            <td>
              <button class="btn btn-warning btn-sm" title="Unpublished" data-toggle="tooltip" data-placement="right">
               Un Published
              </button>
            </td>
            @endif
            <td>
              <button class="btn btn-success btn-detail open_modal" value="{{$post->id}}" disabled="">
              <i class="fa fa-edit"></i>&nbsp;Edit</button>

              <button  class="btn btn-danger btn-delete delete-post" value="{{$post->id}}">
              <i class="fa fa-remove"></i>&nbsp;Delete</button>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
       </div>
</div>
    <div class="modal fade in" data-easein="pulse" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">
                <i class="fa fa-list"></i>&nbsp;Post</h4>
                
            </div>
            <div class="modal-body">
            <form id="frmProducts" name="frmProducts" class="form-horizontal" enctype="multipart/form-data" method="POST">
                <div class="form-group error">
                 <label for="inputName" class="col-sm-4 control-label">Title</label>
                   <div class="col-sm-8">
                    <input type="text" class="form-control has-error" id="ptitle" name="ptitle" placeholder="Post Name" value="" required="required">
                   </div>
                   </div>
                 <div class="form-group">
                 <label for="inputDetail" class="col-sm-4 control-label">Post</label>
                    <div class="col-sm-8">
                   
                    <select name="categoryid" id="categoryid" class="form-control">
                    <option value="">Select Category</option> 
                       @foreach($categories as $category)
                       <option value="{{$category->id}}">
                          {{ $category->cname}}
                       </option>
                       @endforeach 
                    </select>
                    </div>
                </div>
                <div class="form-group">
                 <label for="inputDetail" class="col-sm-4 control-label">Content</label>
                    <div class="col-sm-8">
                    <textarea name="pcontent" id="pcontent" class="form-control">
                        
                    </textarea>
                     </div>
                </div>
                <div class="form-group">
                 <label for="inputDetail" class="col-sm-4 control-label">Tag</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="ptag" name="ptag" placeholder="Enter" value="">
                     </div>
                </div>
                <div class="form-group">
                 <label for="inputDetail" class="col-sm-4 control-label">Select Status</label>
                    <div class="col-sm-8">
                    <select name="status" id="status" class="form-control">
                      <option value="">
                      Select Published Status
                      </option>
                      <option value="1">Published</option>
                      <option value="0">Un Published</option>
                    </select>
                   
                     </div>
                </div>
                <div class="form-group">
                 <label for="inputDetail" class="col-sm-4 control-label">Image</label>
                    <div class="col-sm-8">
                    <input type="file" class="form-control" id="image" name="image"  value="">
                     </div>
                </div>
             
                <div class="form-group">
                 <label for="inputDetail" class="col-sm-4 control-label"></label>
                    <input type="submit" name="btn-save" value="Add Post" class="pull-right btn btn-primary waves-effect" id="btn-save">
                         <input type="hidden" id="id" name="id" value="0">
                     </div>
             
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
  
</div>
<!-- right_col -->
    <meta name="_token" content="{!! csrf_token() !!}" />
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
      

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

    
  <script src="{{ asset('public/Admin/')}}/js/Postajax.js"></script> 
  
@endsection