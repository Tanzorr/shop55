@extends('admin.master')
@section('title', 'Admin')

@section('content')
    <script>


        $(document).ready(function(){
            $("#msg").hide();
            $("#btn").click(function(){
                $("#msg").show();
                var pro_name =$("#pro_name").val();
                var pro_info =$("#pro_info").val();
                var pro_code =$("#pro_code").val();
                var pro_price =$("#pro_price").val();
                var token =$("#token").val();
                var id = $("#id").val();
                $.ajax({
                    type:"post",
                    data: "id="+ id +"&pro_name="+pro_name+"&pro_info="+pro_info+ "&pro_code=" +pro_code+ "&pro_price=" +pro_price+ "&token=" +token,
                    url: "<?php echo url('admin/saveProduct'); ?>",
                    success:function (data) {
                        $("#msg").html("Product has been updated");
                        $("#msg").fadeOut(4000);
                    }
                })
            });
            var auto_refresh = setInterval(
                function(){
                    $('#products').load('<?php echo url('admin/products');?>').fadeIn("slow");
                },1000);
        });
    </script>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">

                        <div class="content">
                            <h2>Edit product -{{$data[0]->pro_name}} {{request()->route('id')}}</h2>
                            <p class="alert alert-success " id="msg"></p>
                            <input type="hidden" value="{{$data[0]->id}}" id="id"/>
                            <input type="hidden" value="{{csrf_token()}}" id="token">
                            <label for="">Product name</label>
                            <input type="text" id="pro_name"  value="{{$data[0]->pro_name}}"class="form-control">
                            <br>
                            <label for="">Product info</label>
                            <textarea type="text" id="pro_info"  class="form-control">
                                {{$data[0]->pro_info}}
                            </textarea>
                            <br>
                            <label for="">Product Code</label>
                            <input type="text" id="pro_code" class="form-control"  value="{{$data[0]->pro_code}}">
                            <br>
                            <label for="">Product Price</label>
                            <input type="text" id="pro_price"  value="{{$data[0]->pro_price}}" class="form-control">
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
                        <div class="content">
                            <img src="{{url('/img')}}/{{$data[0]->pro_img}}"
                                 width="100%"/>
                           <div class="footer">
                               <a href="{{url('admin/changeImage')}}/{{$data[0]->id}}" class="btn btn-fill btn-sm btn-primary">Change Product img</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection