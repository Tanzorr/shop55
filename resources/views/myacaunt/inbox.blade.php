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
                        <div class="panel-header"><h2 align="center">My inbox</h2><hr></div>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
