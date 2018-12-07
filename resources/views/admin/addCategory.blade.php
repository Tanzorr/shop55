@extends('admin.master')
@section('title', 'Admin')

@section('content')
    <script>


        $(document).ready(function(){
            $("#msg").hide();
            $("#btn").click(function(){
                $("#msg").show();
                var cat_name =$("#cat_name").val();

                var token =$("#token").val();

                $.ajax({
                    type:"post",
                    data: "&cat_name="+cat_name+"&token=" +token,
                    url: "<?php echo url('admin/saveCategory'); ?>",
                    success:function (data) {
                        $("#msg").html("Category has been inserted");
                        $("#msg").fadeOut(4000);
                    }
                })
            });
            var auto_refresh = setInterval(
                function(){
                    $('#category').load('<?php echo url('admin/cats');?>').fadeIn("slow");
                },1000);
        });
    </script>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">

                        <div class="content">
                            <h2>Add Category</h2>
                            <p class="alert alert-success " id="msg"></p>
                            <input type="hidden" value="{{csrf_token()}}" id="token">
                            <label for="">Category name</label>
                            <input type="text" id="cat_name" class="form-control">
                            <br>
                            <input type="submit" class="btn btn-success" value="Submit" id="btn">
                            <div class="footer">
                                <p>hasellus non imperdiet sem, vel posuere tellus</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card">

                        <div class="content" id="category">
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