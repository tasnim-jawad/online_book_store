<section id="mobile_menu_top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-4 col-sm-4">
                <div class="mobile_menu_top_logo">
                    <a href="index.html">
                        <img class="img-fluid" src="{{asset('frontend')}}/images/p2d17MiF8ujuAQsTh20IoZVzVlCKrZluuWLJQw4z.jpg" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-8 col-sm-8">
                <div class="mobile_menu_top_search">
                    <form action="http://www.shodeshishilpo.com/search" method="get">
                        <div class="mobile_menu_top_search_box">
                            <input class="search" type="text" name="query" placeholder="Search for product" value="" required>
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="typed-search-box mobile-box d-none">
                    <div class="search-preloader d-none">
                        <div class="loader"><div></div><div></div><div></div></div>
                    </div>
                    <div class="search-nothing d-none">Sorry, nothing found for <strong></strong></div>
                    <div class="product">
                        <div class="title">Products</div>
                        <ul></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
