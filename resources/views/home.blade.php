@extends('layout.frontend.master')

@section('content')

<!-- start slider area -->
@include('frontend.all_slider.banner_slider')
<!-- start infobar top -->
@include('frontend.all_slider.infobar')

<!-- satrt summer collection -->
@include('frontend.all_slider.slider_one')

<!-- satrt feater product -->
@include('frontend.all_slider.feater_product')

<!-- start feater image area page -->
@include('frontend.all_slider.feater_image')

<!-- start new arival -->
@include('frontend.all_slider.new_arival')

<!-- start tshirt area -->
@include('frontend.all_slider.tshirt')

<!--start feater product 2-->
@include('frontend.all_slider.feater_product_2')

<!--start Gadget-->
@include('frontend.all_slider.gatget')

@endsection
