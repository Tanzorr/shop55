@extends('front.master')
@section('content')

    <div class="container-fluid">

        <div class="home-content">

            <div class="container hidden-xs">
                <div id="hdLine"><span><h1>Our Product Range</h1></span><hr></div>
                <div class="row">
                    @foreach($data as $p)
                        <div class="col-xs-6 col-sm-4" >
                            <div class="itemBox">
                                <div class="prod">
                                    <img src="/img/{{$p->pro_img}}" alt=""
                                            width="400px" height="360px" /></div>
                                <label>{{$p->pro_name}}</label>
                                <span class="hidden-xs">Code: {{$p->pro_code}}
                                    <br>
                                    {{$p->pro_info}}</span>
                                <div class="addcart">
                                    <div class="price">Rs {{$p->pro_price}}</div>
                                    <div class="cartIco hidden-xs"><a href="{{url('/cart/add')}}/{{$p->id}}"></a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="row hidden-xs">
                    <div class="col-sm-12">
                        <div class="topSell">
                            <h3>DISCOVER OUR TOP SELLERS PRODUCTS FOR BODYCARE</h3>
                            <span class="bttn"><a href="">SHOP NOW</a></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
