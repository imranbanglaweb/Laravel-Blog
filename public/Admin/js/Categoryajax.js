  var url = "http://localhost/blogwithLaravel/category/categoryList";
    //display modal form for product editing
    $(document).on('click','.open_modal',function(){
        var id = $(this).val();
       
        $.get(url + '/' + id, function (data) {
            //success data
            console.log(data);
            $('#id').val(data.id);
            $('#cname').val(data.cname);
            $('#cdis').val(data.cdis);
            $('#cslug').val(data.cslug);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });
    //display modal form for creating new product
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmProducts').trigger("reset");
        $('#myModal').modal('show');

    });
    //delete product and remove it from list
    $(document).on('click','.delete-category',function(){
        var id = $(this).val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/' + id,
            success: function (data) {
                console.log(data);
                $("#category" + id).remove();
                toastr.error('Category Deleted Successfully.', 'Success Alert', {timeOut: 5000});
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
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
            cname: $('#cname').val(),
            cdis: $('#cdis').val(),
            cslug: $('#cslug').val(),
        }
        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var id = $('#id').val();
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + id;
        }
        console.log(formData);
        
$.ajax({
    type: type,
    url: my_url,
    data: formData,
    dataType: 'json',
    success: function (data) {
        console.log(data);
        var category = '<tr style="color:blue;transition:0.3s" id="category' + data.id + '"><td>' + data.cname + '</td><td>' + data.cdis + '</td><td>' + data.cslug + '</td>';
        category += '<td><button class="btn btn-success btn-detail open_modal" value="' + data.id + '"><i class="fa fa-edit"></i>&nbsp;Edit</button>';
        category += ' <button class="btn btn-danger btn-delete delete-category" value="' + data.id + '"><i class="fa fa-remove"></i>&nbsp;Delete</button></td></tr>';
        if (state == "add"){ //if user added a new record
            $('#category-list').append(category);
             toastr.info('Category Created Successfully.', 'Success Alert', {timeOut: 5000});
        }else{ //if user updated an existing record
            $("#category" + id).replaceWith( category );
             toastr.success('Category Updated Successfully.', 'Success Alert', {timeOut: 5000});
        }
        $('#frmProducts').trigger("reset");
        $('#myModal').modal('hide');
       
    },
    error: function (data) {
        console.log('Error:', data);
    }
});
    });