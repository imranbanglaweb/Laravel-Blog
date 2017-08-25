  var url = "http://localhost/blogwithLaravel/post/postlist";
 
    //display modal form for product editing
    $(document).on('click','.open_modal',function(){
        var id = $(this).val();
    
        $.get(url + '/' + id, function (data) {
            //success data
            console.log(data);
            $('#id').val(data.id);
            $('#ptitle').val(data.ptitle);
            $('#categoryid').val(data.categoryid);
            $('#pcontent').val(data.pcontent);
            $('#ptag').val(data.ptag);
            $('#status').val(data.status);
            $('#image').val(data.image);
            $('#btn-save').val("Update");
            $('#modal').modal('show');


        }) 
    });
    //display modal form for creating new product
    $('#btn_add').click(function(){
        $('#btn-save').val("Add");
        $('#frmProducts').trigger("reset");
        $('#modal').modal('show');



    });
    //delete product and remove it from list
    $(document).on('click','.delete-post',function(){
        var id = $(this).val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
       if(confirm("Are you sure you want to Deleted Post?"))
       {
         $.ajax({
            type: "DELETE",
            url: url + '/' + id,
            success: function (data) {
                console.log(data);
                $("#post" + id).remove();
                toastr.error('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
       }
       else{
        return false;
       }
       
    });


    //create new product / update existing product
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault(); 
        var formData = {
            ptitle: $('#ptitle').val(),
            categoryid: $('#categoryid').val(),
            pcontent: $('#pcontent').val(),
            ptag: $('#ptag').val(),
            status: $('#status').val(),
            image: $('#image').val(),
        }
        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var image =$('#image').val();
        var id = $('#id').val();
        var my_url = url;
        if (state == "Update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + id;
        }
        console.log(formData);
    var postData = new FormData($("#frmProducts")[0]);

  
// function ajaxSave() {
//         var ed = tinyMCE.get('pcontent');

//         // Do you ajax call here, window.setTimeout fakes ajax call
//         ed.setProgressState(1); // Show progress
//         window.setTimeout(function() {
//                 ed.setProgressState(0); // Hide progress
//                 alert(ed.getContent());
//         }, 3000);
// }
$.ajax({
    type: type,
    cache:false,
    url: my_url,
    data: postData,
    processData: false,
    contentType: false,
    dataType: 'json',
    //  beforeSend:function(){
    //   $("#btn-save").val('Updated Post');
    //   // $("#btn_add").val('Added Post');

    // },
    success: function (data) {

        console.log(data);
        var i=1;
          

        var post = '<tr style="color:green;text-transform:uppercase" id="post' 
        + data.id + '"><td>' 
        + i++ + '</td><td>' 
        + data.ptitle + '</td><td>' 
        + data.cname + '</td><td>' 
        + data.pcontent + '</td><td>' 
        + data.status + '</td><td>'
        + data.image + '</td>';
        post += '<td><button class="btn btn-success btn-detail open_modal" value="' + data.id + '"><i class="fa fa-edit"></i>&nbsp;Edit</button>';
        post += ' <button class="btn btn-danger btn-delete delete-post" value="' + data.id + '"><i class="fa fa-remove"></i>&nbsp;Delete</button></td></tr>';
        if (state == "Add"){ //if user added a new record
            
            $('#post-list').append(post);
             toastr.info('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
        }else{ //if user updated an existing record
            $("#post" + id).replaceWith( post ).val();
             toastr.success('Post Updated Successfully.', 'Success Alert', {timeOut: 5000});
        }
        $('#frmProducts').trigger("reset");
        $('#modal').modal('hide');
       
    },
    error: function (data) {
        console.log('Error:', data);
    }
});
    });