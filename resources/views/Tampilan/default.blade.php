<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('judul') - Meduza</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{Asset('meduza-assets/css/style.css')}}">
</head>

<body>
    <div class="container">
        <div class="menu_btn" id="menu_btn"></div>
        <div class="top_panel">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="mobile-btn" id="mobile-btn"></div>
                    <div class="top_left">
                        <a href="/" class="logo">
                            <img src="{{Asset('meduza-assets/img/logo.svg')}}" alt="">
                        </a>
                        <div class="menu" id="menu">
                           <div class="close"></div>
                           <ul>
                              @if (Auth()->user() != null)
                                @if (Auth()->user()->role == "Admin" )
                                    <li><a href="{{Route('dashboard')}}">Dashboard</a></li>
                                @endif
                              @endif
                               <li><a href="{{Route('about')}}">About</a></li>
                               <li><a href="{{Route('contact')}}">Contact</a></li>
                                @if(Auth()->user() == null)
                                <li><a data-href="#login" class="getModal">Login</a></li>
                                @else
                                <li><a href="{{Route('logout')}}">Logout</a></li>
                                @endif
                           </ul>
                       </div>
                    </div>
                    <div class="top_right">
                        <div class="search" id="search-link">
                            <div class="search-open"></div>
                        </div>
                        <a href="{{Route('cart')}}" class="cart">
                            <span>{{$jumlahCart}}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainpage">
           @yield('konten')
        </div>
        <footer class="footer">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="footer_top">
                        <div class="logo"></div>
                    </div>
                    <div class="footer_center">
                        <div class="subscribe">
                            <p>Subscribe to the latest news</p>
                            <div class="subscribe_form">
                                <form class="flex">
                                    <input type="text" placeholder="Email Address">
                                    <button class="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <div class="socials">
                            <a href="#" class="instagram"></a>
                            <a href="#" class="twitter"></a>
                            <a href="#" class="pinterest"></a>
                        </div>
                    </div>
                    <div class="footer_bottom">
                        <div class="left">
                            © Copyright 2019
                        </div>
                        <div class="center">
                            <ul>
                                <li><a href="about.html"><span>About Meduza</span></a></li>
                                <li><a href="static.html"><span>Privacy Policy</span></a></li>
                                <li><a href="contacts.html"><span>Contact us</span></a></li>
                            </ul>
                        </div>
                        <div class="right">
                            Powered by <a href="https://hellodigi.ru" target="_blank">hellodigi.ru</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="menu_block">
            <div class="close"></div>
            <h2 class="category_p">Categories</h2>
            <div class="menu_wrap">
                <div class="scroll">
                    <div class="wrap">
                        <div class="wrap_float">
                            <div class="items">
                                <a href="shop-catalog-3-items.html" class="item">
                                    <div class="_image">
                                        <img src="{{Asset('meduza-assets/img/demo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="_title">
                                        Fashion <span>09</span>
                                    </div>
                                </a>

                                <a href="shop-catalog-3-items.html" class="item">
                                    <div class="_image">
                                        <img src="{{Asset('meduza-assets/img/demo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="_title">
                                        Inspiration <span>12</span>
                                    </div>
                                </a>

                                <a href="shop-catalog-3-items.html" class="item">
                                    <div class="_image">
                                        <img src="{{Asset('meduza-assets/img/demo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="_title">
                                        Lifestyle <span>09</span>
                                    </div>
                                </a>

                                <a href="shop-catalog-3-items.html" class="item">
                                    <div class="_image">
                                        <img src="{{Asset('meduza-assets/img/demo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="_title">
                                        Culture <span>09</span>
                                    </div>
                                </a>

                                <a href="shop-catalog-3-items.html" class="item">
                                    <div class="_image">
                                        <img src="{{Asset('meduza-assets/img/demo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="_title">
                                        Photography <span>19</span>
                                    </div>
                                </a>

                                <a href="shop-catalog-3-items.html" class="item">
                                    <div class="_image">
                                        <img src="{{Asset('meduza-assets/img/demo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="_title">
                                        Shopping <span>22</span>
                                    </div>
                                </a>

                                <a href="shop-catalog-3-items.html" class="item">
                                    <div class="_image">
                                        <img src="{{Asset('meduza-assets/img/demo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="_title">
                                        World <span>64</span>
                                    </div>
                                </a>

                                <a href="shop-catalog-3-items.html" class="item">
                                    <div class="_image">
                                        <img src="{{Asset('meduza-assets/img/demo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="_title">
                                        Nature <span>45</span>
                                    </div>
                                </a>

                                <a href="shop-catalog-3-items.html" class="item">
                                    <div class="_image">
                                        <img src="{{Asset('meduza-assets/img/demo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="_title">
                                        People <span>03</span>
                                    </div>
                                </a>

                                <a href="shop-catalog-3-items.html" class="item">
                                    <div class="_image">
                                        <img src="{{Asset('meduza-assets/img/demo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="_title">
                                        Tattoo <span>40</span>
                                    </div>
                                </a>

                                <a href="shop-catalog-3-items.html" class="item">
                                    <div class="_image">
                                        <img src="{{Asset('meduza-assets/img/demo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="_title">
                                        Music <span>314</span>
                                    </div>
                                </a>

                                <a href="shop-catalog-3-items.html" class="item">
                                    <div class="_image">
                                        <img src="{{Asset('meduza-assets/img/demo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="_title">
                                        Travel <span>53</span>
                                    </div>
                                </a>

                                <a href="shop-catalog-3-items.html" class="item">
                                    <div class="_image">
                                        <img src="{{Asset('meduza-assets/img/demo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="_title">
                                        Events <span>09</span>
                                    </div>
                                </a>

                                <a href="shop-catalog-3-items.html" class="item">
                                    <div class="_image">
                                        <img src="{{Asset('meduza-assets/img/demo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="_title">
                                        Architecture <span>12</span>
                                    </div>
                                </a>

                                <a href="shop-catalog-3-items.html" class="item">
                                    <div class="_image">
                                        <img src="{{Asset('meduza-assets/img/demo-bg.jpg')}}" alt="">
                                    </div>
                                    <div class="_title">
                                        Health and beauty <span>34</span>
                                    </div>
                                </a>
                            </div>
                            <div class="btn_wrap">
                                <a href="#" class="show_more">
                                    <span>see all articles</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-popup" id="search-popup">
            <div class="close"></div>
            <input type="text" class="input" placeholder="Search the blog…">
            <button class="submit submit-search"><span>SEARCH</span></button>
        </div>
        <div class="overlay" id="overlay"></div>
        <div class="modal share-block" id="share-block">
            <div class="close"></div>
            <div class="wrap">
                <div class="wrap_float">
                    <div class="close mobile-close"></div>
                    <div class="links">
                        <a href="#" class="link facebook"></a>
                        <a href="#" class="link pinterest"></a>
                        <a href="#" class="link twitter"></a>
                        <a href="#" class="link linked"></a>
                        <a href="#" class="link email"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal review-modal" id="write-review-block">
            <div class="close"></div>
            <div class="wrap">
                <div class="wrap_float write-comment">

                    <div class="write-review">
                        <div class="close mobile-close"></div>
                        <div class="title">Reviews</div>
                        <div class="subtitle">
                            Your email address will not be published. Required fields are marked *
                        </div>
                        <div class="rating">
                            <div class="reviews-count">Your rating</div>
                            <div class="stars user-rating" id="user-rating">
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                            </div>
                        </div>
                        <div class="form">
                            <textarea class="textarea" placeholder="Your review *"></textarea>
                            <div>
                                <input type="text" placeholder="Name *" class="input">
                                <input type="email" placeholder="Email *" class="input">
                            </div>
                            <button class="submit">Post Comment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div style="display: none;">
            <div class="modal modal_default" id="login">
                <div class="modal_wrap">
                    <div class="modal-top">
                        <h2 class="title modal-title">Authorization</h2>
                        <div class="flex">
                            <div class="subtitle modal-subtitle">
                                Using your Meduza account
                            </div>
                            <a data-href="#buatACC" class="getModal link">Buat Account</a>
                        </div>
                        <form action="{{Route('LoginProses')}}" method="POST">
                            @csrf
                            <div class="fields">
                                <div class="input_wrap">
                                    <input type="text" name="email" class="input" placeholder="Email">
                                </div>
                                <div class="input_wrap">
                                    <input type="password" name="password" class="input" placeholder="Password">
                                </div>
                            </div>
                            <button class="btn submit-btn" type="submit"><span>Enter</span></button>
                        </form>
                    </div>
                    <div class="modal_close"></div>
                </div>
            </div>
        </div>
        <div style="display: none;">
            <div class="modal modal_default registration" id="buatACC">
                <div class="modal_wrap">
                    <div class="modal-top">
                        <h2 class="title modal-title">Registration</h2>
                        <form action="{{Route('tambahCustomer')}}" method="POST">
                            @csrf
                            <div class="fields">
                                <input type="hidden" value="Customer" name="role">
                                <div class="input_wrap fullwrap">
                                    <input type="text" name="nama" class="input" placeholder="Nama Lengkap">
                                </div>
                                
                                <div class="input_wrap">
                                    <input type="email" name="email" class="input" placeholder="Email">
                                </div>
                                <div class="input_wrap ">
                                    <input type="password" name="password" class="input" placeholder="Password">
                                </div>
                                <div class="input_wrap fullwrap">
                                    <input type="text" name="alamat" class="input" placeholder="Alamat">
                                </div>
                                <div class="input_wrap ">
                                    <input type="text" name="phone" class="input" placeholder="Phone">
                                </div>
                                <div class="input_wrap ">
                                    <select name="gender" class="input">
                                        <option value="L">Laki Laki</option>
                                        <option value="P">Prempuan</option>
                                    </select>
                                </div>
                            </div>
                       
                        
                            <button class="btn submit-btn" type="submit"><span>Registration</span></button>
                        </form>
                        <div class="agreement">
                            By registering on the site you accept the <a href="#">terms of privacy</a> and personal data <a href="#">processing policy</a>
                        </div>
                    </div>
                    <div class="modal_close"></div>
                </div>
            </div>
        </div>
        <div style="display: none;">
            <div class="modal modal_default registration" id="registration">
                <div class="modal_wrap">
                    <div class="modal-top">
                        <h2 class="title modal-title">Registration</h2>
                        <div class="fields">
                            <div class="input_wrap fullwrap">
                                <input type="email" class="input" placeholder="Email">
                            </div>
                            <div class="input_wrap">
                                <input type="password" class="input" placeholder="Password">
                            </div>
                            <div class="input_wrap">
                                <input type="password" class="input" placeholder="Confirm password">
                            </div>
                            <div class="input_wrap fullwrap">
                                <input type="text" class="input" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="userpic-block">
                           <div class="userpic"></div>
                           <div class="change">
                               <label for="change-userpic-modal">Select your avatar</label>
                               <input type="file" id="change-userpic-modal">
                           </div>
                       </div>
                        <button class="btn submit-btn"><span>Registration</span></button>
                        <div class="agreement">
                            By registering on the site you accept the <a href="#">terms of privacy</a> and personal data <a href="#">processing policy</a>
                        </div>
                    </div>
                    <div class="modal_close"></div>
                </div>
            </div>
        </div>
     
    </div>
    <script src="{{Asset('meduza-assets/js/jquery.min.js')}}"></script>
    <script src="{{Asset('meduza-assets/js/jquery.arcticmodal.min.js')}}"></script>
    <script src="{{Asset('meduza-assets/js/slick.min.js')}}"></script>
    <script src="{{Asset('meduza-assets/js/scripts.js')}}"></script>
</body>

</html>