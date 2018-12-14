@extends('front.master')

@section('content')


    <div class="greyBg">
        <div class="container">
            <div class="wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{url('/')}}">Home </a></li>
                                <li><span class="dot">/</span>
                                    <a href="{{url('/home')}}"> {{Auth::user()->name}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row top25">
                    <div class="panel itemBox">
                        <div class="panel-header"><h2 align="center">My Account</h2><hr></div>



                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                                <div class="myContent">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#profile" data-toggle="tab">profile</a></li>
                                        <li><a href="#myorders" data-toggle="tab">My orders</a></li>
                                        <li><a href="#changepassword" data-toggle="tab">cahange Passwod</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="profile" class="tab-pane fade in active">
                                            <form action="{{url('/saveAddress')}}" method="post">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                                                <input type="text" name="name" class="form-control"
                                                       value="{{AUth::user()->name}}" placeholder="Full Name"/>
                                                <br>


                                                <input type="text" name="email" class="form-control"
                                                       value="{{AUth::user()->email}}"
                                                       readonly style="background-color:#efefef" placeholder="email"/>
                                                <br>


                                                <input type="text" name="city" class="form-control"
                                                       placeholder="City"/>
                                                <br>


                                                <input type="text" name="phoneNumber"  class="form-control"
                                                       placeholder="Phone Number"/>
                                                <br>

                                                <input type="text"  class="form-control" placeholder="State" name="state">
                                                <br>
                                                <input type="text"  class="form-control" placeholder="Country" name="country">
                                                <br>
                                                <textarea  class="form-control" rows="4" placeholder="Full Address"
                                                           name="full_address"></textarea>
                                                <br>
                                                <input type="submit" class="btn btn-primary btn-block" value="Update">
                                            </form>
                                        </div>
                                        <div id="myorders" class="tab-pane fade in">
                                            my orders
                                        </div>
                                        <div id="changepassword" class="tab-pane fade in active">
                                            change password tabe
                                        </div>

                                    </div>
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
