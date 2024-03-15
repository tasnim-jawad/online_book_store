@extends('layout.frontend.master')

@section('content')

<section id="login_page">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-md-7 col-sm-9 mx-auto">
                <div class="login_main_container">
                    <h3>We're glad to see you again!</h3>
                    <p>Don't have an account? <a href="register.html">Sign Up!</a></p>
                </div>
                <div class="login_page_login_container">
                    <form action="http://www.shodeshishilpo.com/customer/login" method="post">
                        <input type="hidden" name="_token" value="2xjr41LfNWuzMFsHaw2xXqXO5VkqjVun2kgVLQq3" />
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="input_login_box">
                                    <input name="email" type="text" placeholder="Email" value="" required />
                                    <label><i class="icofont-user-alt-3"></i></label>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="input_login_box">
                                    <input name="password" type="password" placeholder="Password" required="" />
                                    <label><i class="icofont-lock"></i></label>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="login_page_btn text-center">
                                    <button type="submit">Login Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
