  var url = "http://localhost/blogwithLaravel/service/add";
 
    //display modal form for product editing
    $(document).on('click','.open_modal',function(){
        var id = $(this).val();
    
        $.get(url + '/' + id, function (data) {
            //success data
            console.log(data);
            $('#id').val(data.id);
            $('#stitle').val(data.stitle);
            $('#scontent').val(data.scontent);
            $('#sicon').val(data.sicon);
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
    $(document).on('click','.delete-service',function(){
        var id = $(this).val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
       if(confirm("Are you sure you want to Deleted Service?"))
       {
         $.ajax({
            type: "DELETE",
            url: url + '/' + id,
            success: function (data) {
                console.log(data);
                $("#post" + id).remove();
                toastr.error('Service Deleted Successfully.', 'Success Alert', {timeOut: 5000});
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
            stitle: $('#stitle').val(),
            scontent: $('#scontent').val(),
            sicon: $('#sicon').val(),
        }
        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var id = $('#id').val();
        var my_url = url;
        if (state == "Update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + id;
        }
        console.log(formData);
    // var postData = new FormData($("#frmProducts")[0]);
        
$.ajax({
    type: type,
    url: my_url,
    data: formData,
    dataType: 'json',
     beforeSend:function(){
      $("#btn-save").val('Updated Service');
      // $("#btn_add").val('Added Post');

    },
    success: function (data) {

        console.log(data);
        var i=1;
          

        var post = '<tr style="border-left:2px solid blue;color:green;text-transform:uppercase" id="post' 
        + data.id + '"><td>' 
        + i++ + '</td><td>' 
        + data.stitle + '</td><td>' 
        + data.scontent + '</td><td>' 
        + data.sicon + '</td>';
        post += '<td><button class="btn btn-success btn-detail open_modal" value="' + data.id + '"><i class="fa fa-edit"></i>&nbsp;Edit</button>';
        post += ' <button class="btn btn-danger btn-delete delete-service" value="' + data.id + '"><i class="fa fa-remove"></i>&nbsp;Delete</button></td></tr>';
        if (state == "Add"){ //if user added a new record
            
            $('#service-list').append(post);
             toastr.info('Service Created Successfully.', 'Success Alert', {timeOut: 5000});
        }else{ //if user updated an existing record
            $("#service" + id).replaceWith( post ).val();
             toastr.success('Service Updated Successfully.', 'Success Alert', {timeOut: 5000});
        }
        $('#frmProducts').trigger("reset");
        $('#modal').modal('hide');
       
    },
    error: function (data) {
        console.log('Error:', data);
    }
});
    });