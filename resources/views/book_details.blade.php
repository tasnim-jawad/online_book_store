@extends('layout.frontend.master')


@section('content')
@include('frontend.all_slider.infobar')
<section id="product_details">
    <div class="container">
        <div class="row">
            <!-- details sidebar -->

            <!-- product details main part -->
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="details_main_content">
                    <div class="details_slide_content">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <div class="details_slide_active_top">
                                    <div class="details_slide_item">
                                        <img class="img-fluid" src="{{asset('frontend')}}/images/WIya5MWLkGGH72vW5UaOEQnZiypZU1HhqwfVMLu5.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="details_slide_active_bottom">
                                    <div class="details_slide_item_bottom">
                                        <img class="img-fluid" src="{{asset('frontend')}}/images/WIya5MWLkGGH72vW5UaOEQnZiypZU1HhqwfVMLu5.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="product_slide_right_content">
                                    <h3>Promotional Bag</h3>
                                    <h4>Product Code:</h4>
                                    <h2>&#2547; 100</h2>
                                    <p></p>
                                    <form action="http://www.shodeshishilpo.com/cart/add/6" method="post" id="addtocart-form">
                                        <input type="hidden" name="_token" value="2xjr41LfNWuzMFsHaw2xXqXO5VkqjVun2kgVLQq3" />
                                        <div class="details_size">
                                            <div class="row"></div>
                                        </div>
                                        <div class="details_btn">
                                            <div class="row align-items-center">
                                                <div class="col-xl-4 col-md-4 col-sm-5">
                                                    <div class="quantity_form_input">
                                                        <input name="qty" type="number" value="1" min="1" max="100" step="1" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-md-8 col-sm-7">
                                                    <button class="detail_shop_btn btn-submit"><i class="icofont-shopping-cart"></i> Buy Now</button>
                                                    <a class="addtofavorite" href="../customer/favorite/6.html"><i class="fas fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="details_share">
                                        <div class="row align-items-center">
                                            <div class="col-xl-4">
                                                <div class="share_text">
                                                    <p>Share Product :-</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-8">
                                                <div class="share_social">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fab face fa-facebook-f"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab twi fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab lin fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab pin fa-pinterest-p"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab go fa-google-plus-g"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="payment_accept">
                                        <div class="row align-items-center">
                                            <div class="col-xl-4">
                                                <div class="payment_accept_text">
                                                    <p>We Accept :-</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-8">
                                                <div class="payment_accept_img">
                                                    <img class="img-fluid" src="{{asset('frontend')}}/img/payment-icons.png" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- satrt details tab area -->
                    <div class="details_tab_section">
                        <div class="row">
                            <div class="col-xl-12">
                                <nav>
                                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Product Feature</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Product Description</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Rating</a>
                                    </div>
                                </nav>
                                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <ul>
                                            <li><i class="icofont-thin-double-right"></i> Battery: Non-removable Li-Ion 3750 mAh battery</li>
                                            <li><i class="icofont-thin-double-right"></i> Radio: Yesy</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <p>Promotional Bag</p>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <ul>
                                            <li><i class="icofont-thin-double-right"></i> Please <a href="../customer/login.html">login</a> before to give review.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')

    <script src="{{asset('frontend')}}/js/slick.min.js"></script>
    <script src="{{asset('frontend')}}/js/slick.active.js"></script>
    <script src="{{asset('frontend')}}/js/bootstrap-input-spinner.js"></script>
    <script src="{{asset('frontend')}}/js/better-rating.js"></script>
    <script src="{{asset('frontend')}}/js/selectize.min.js"></script>
    <script src="{{asset('frontend')}}/js/jquery.zoom.min.js"></script>
    <script>
        $(function(){
            // this is for input group
            $("input[type='number']").InputSpinner();
            $('#better-rating-form').betterRating();
            $('.selectize').selectize({
                plugins: ['remove_button']
            });
            $('.details_slide_item').zoom();
        });
    </script>

@endpush
