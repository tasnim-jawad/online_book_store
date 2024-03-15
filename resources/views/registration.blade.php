@extends('layout.frontend.master')

@section('content')

<section id="registration">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-8 col-12 mx-auto">
                <div class="registration_container">
                    <div class="registration_top text-center">
                        <h4>Let's create your account!</h4>
                        <p>Already have an account? <a href="login.html">Login</a></p>
                    </div>
                    <div class="registration_form">
                        <form action="http://www.shodeshishilpo.com/customer/register" method="post">
                            <input type="hidden" name="_token" value="2xjr41LfNWuzMFsHaw2xXqXO5VkqjVun2kgVLQq3" />
                            <div class="input_login_box">
                                <input name="name" type="text" placeholder="Name" value="" required="" />
                                <label><i class="icofont-user-alt-3"></i></label>
                            </div>
                            <div class="input_login_box">
                                <input name="email" type="email" placeholder="Email Address" value="" required="" />
                                <label><i class="icofont-email"></i></label>
                            </div>
                            <div class="input_login_box">
                                <input name="phone" type="text" placeholder="Phone" value="" required="" />
                                <label><i class="icofont-phone"></i></label>
                            </div>
                            <div class="input_login_box">
                                <input name="password" type="password" placeholder="Password" required="" />
                                <label><i class="icofont-lock"></i></label>
                            </div>
                            <div class="input_login_box">
                                <input name="password_confirmation" type="password" placeholder="Re-Password" required="" />
                                <label><i class="icofont-lock"></i></label>
                            </div>
                            <div class="registration_page_btn text-center">
                                <button type="submit">Register Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
