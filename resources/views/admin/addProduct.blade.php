@extends('admin.master')
@section('title', 'Admin')

@section('content')
    <script>


        $(document).ready(function(){
           $("#msg").hide();
            $("#btn").click(function(){
                $("#msg").show();
               var pro_name =$("#pro_name").val();
               var pro_code =$("#pro_code").val();
               var pro_price =$("#pro_price").val();
               var token =$("#token").val();

               $.ajax({
                   type:"post",
                   data: "&pro_name="+pro_name+ "&pro_code=" +pro_code+ "&pro_price=" +pro_price+ "&token=" +token,
                   url: "<?php echo url('admin/saveProduct'); ?>",
                   success:function (data) {
                      $("#msg").html("Product has been inserted");
                      $("#msg").fadeOut(4000);
                   }
               })
            });
        });
    </script>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">

                        <div class="content">
                            <h2>Add Product</h2>
                            <p class="alert alert-success " id="msg"></p>
                            <input type="hidden" value="{{csrf_token()}}" id="token">
                                <label for="">Product name</label>
                                <input type="text" id="pro_name" class="form-control">
                                <br>
                                <label for="">Product Code</label>
                                <input type="text" id="pro_code" class="form-control">
                                <br>
                                <label for="">Product Price</label>
                                <input type="text" id="pro_price" class="form-control">
                                <br>
                                <input type="submit" class="btn btn-success" value="Submit" id="btn">

                            <div class="footer">
                                <p>hasellus non imperdiet sem, vel posuere tellus</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">

                        <div class="content">
                            <p> Fusce quis dictum erat, ornare mattis quam. Pellentesque eget ipsum hendrerit, feugiat risus lacinia, accumsan eros. In fringilla volutpat elementum. Integer volutpat ex ut pharetra auctor. Vivamus turpis arcu, sollicitudin id est nec, imperdiet consectetur sapien. Integer quis volutpat velit, id auctor leo</p>
                            <div class="footer">
                                <p>Donec congue eleifend sapien, in molestie diam vulputate sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection