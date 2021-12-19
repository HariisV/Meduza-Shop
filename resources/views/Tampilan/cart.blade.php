@extends('Tampilan.default')
@section('judul')
    Keranjang Belanjaan
@endsection
@section('konten')
   
    <div class="page cart">
        <div class="wrap">
            <div class="wrap_float">
                <div class="breadcrumbs">
                    <a href="/">Home</a> - <a href="#" class="current">Cart</a>
                </div>
                <div class="title-block">
                    <h1 class="title">Cart <span class="count">({{count($produkCart)}})</span></h1>
                </div>
                <div class="cart-block">
                    <div class="cart-block-left">
                        <div class="table">
                            <div class="thead">
                                <div class="td product-td">Product / Price</div>
                                <div class="td quantity-td">Quantity</div>
                                <div class="td cost-td">Total</div>
                            </div>
                            <div class="tbody">
                                @foreach ($produkCart as $item)
                                @php
                                    $slugProduk = str_replace(" ","-",$item->product->nama_product); 
                                @endphp
                               {{-- @dd($slugProduk) --}}
                                    <div class="tr">
                                        <div class="td product-td">
                                            <a href="{{Route('detailProduct', $slugProduk)}}">
                                                <div class="img ie-img">
                                                    <img src="storage/Product/{{$item->product->photo}}" alt="">
                                                </div>
                                                <h3 class="_title">{{$item->product->nama_product}}</h3>
                                                <div class="_cost">Rp. {{number_format($item->product->harga,0,'.','.')}}</div>
                                            </a>
                                        </div>
                                        <div class="td quantity-td">
                                            <div class="number_wrap">
                                                <input type="number" class="num js_number" readonly value="{{$item->jumlah}}" max="100" min="1" data-maxlength="3">
                                            </div>
                                        </div>
                                        <div class="td cost-td">Rp {{number_format($item->jumlah * $item->product->harga,0,'.','.')}}</div>
                                        <form action="{{Route('hapusCart', $item->id)}}" method="POST">
                                            @csrf
                                            <button class="remove" type="submit"></button>
                                            
                                        </form>
                                    </div>
                                @endforeach
                               
                            </div>
                        </div>
                    </div>
                    <div class="cart-block-right">
                        <div class="order-info">
                            <div class="info-list">
                               
                                <div class="list-item total">
                                    <div class="_left">Total</div>
                                    <div class="_right">Rp {{number_format($harga,0,'.',)}}</div>
                                </div>
                            </div>
                        </div>
                        <a class="next-step" href="{{Route('checkout')}}">
                            <span>Proceed to checkout</span>
                        </a>

                    </div>
                </div>
                <div class="other-products">
                    <h2 class="title">Can be useful to you</h2>
                    <div class="products">
                       @foreach ($productRelate as $item)
                       @php
                         $slugProduk = str_replace(" ","-",$item->nama_product); 
                       @endphp
                        <a href="{{Route('detailProduct', $slugProduk)}}" class="product_item">
                            <div class="_image ie-img">
                                <img src="storage/Product/{{$item->photo}}" alt="">
                                <div class="to-cart">+ Add to cart</div>
                            </div>
                            <h3 class="_title">{{$item->nama_product}}</h3>
                            <div class="_cost">Rp {{number_format($item->harga,0,'.','.')}}</div>
                        </a>
                       @endforeach
                    
                       
                    </div>
                </div>
            </div>
        </div>
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
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_title">
                                    Fashion <span>09</span>
                                </div>
                            </a>

                            <a href="shop-catalog-3-items.html" class="item">
                                <div class="_image">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_title">
                                    Inspiration <span>12</span>
                                </div>
                            </a>

                            <a href="shop-catalog-3-items.html" class="item">
                                <div class="_image">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_title">
                                    Lifestyle <span>09</span>
                                </div>
                            </a>

                            <a href="shop-catalog-3-items.html" class="item">
                                <div class="_image">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_title">
                                    Culture <span>09</span>
                                </div>
                            </a>

                            <a href="shop-catalog-3-items.html" class="item">
                                <div class="_image">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_title">
                                    Photography <span>19</span>
                                </div>
                            </a>

                            <a href="shop-catalog-3-items.html" class="item">
                                <div class="_image">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_title">
                                    Shopping <span>22</span>
                                </div>
                            </a>

                            <a href="shop-catalog-3-items.html" class="item">
                                <div class="_image">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_title">
                                    World <span>64</span>
                                </div>
                            </a>

                            <a href="shop-catalog-3-items.html" class="item">
                                <div class="_image">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_title">
                                    Nature <span>45</span>
                                </div>
                            </a>

                            <a href="shop-catalog-3-items.html" class="item">
                                <div class="_image">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_title">
                                    People <span>03</span>
                                </div>
                            </a>

                            <a href="shop-catalog-3-items.html" class="item">
                                <div class="_image">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_title">
                                    Tattoo <span>40</span>
                                </div>
                            </a>

                            <a href="shop-catalog-3-items.html" class="item">
                                <div class="_image">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_title">
                                    Music <span>314</span>
                                </div>
                            </a>

                            <a href="shop-catalog-3-items.html" class="item">
                                <div class="_image">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_title">
                                    Travel <span>53</span>
                                </div>
                            </a>

                            <a href="shop-catalog-3-items.html" class="item">
                                <div class="_image">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_title">
                                    Events <span>09</span>
                                </div>
                            </a>

                            <a href="shop-catalog-3-items.html" class="item">
                                <div class="_image">
                                    <img src="img/demo-bg.jpg" alt="">
                                </div>
                                <div class="_title">
                                    Architecture <span>12</span>
                                </div>
                            </a>

                            <a href="shop-catalog-3-items.html" class="item">
                                <div class="_image">
                                    <img src="img/demo-bg.jpg" alt="">
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
    <div class="modal success-modal" id="success">
        <div class="close"></div>
        <div class="wrap">
            <div class="wrap_float">
                <div class="message">
                    <div class="close mobile-close"></div>
                    <div class="title">Thank you</div>
                    <div class="subtitle">
                        Your feedback has been sent and will be published soon
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
                        <a class="link">Create an account</a>
                    </div>
                    <div class="fields">
                        <div class="input_wrap">
                            <input type="text" class="input" placeholder="Email">
                        </div>
                        <div class="input_wrap">
                            <input type="password" class="input" placeholder="Password">
                        </div>
                    </div>
                    <button class="btn submit-btn"><span>Enter</span></button>
                    <a class="link bottom-link getModal" data-href="#recover-pass">Forgot your password?</a>
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
    <div style="display: none;">
        <div class="modal modal_default" id="recover-pass">
            <div class="modal_wrap">
                <div class="modal-top">
                    <h2 class="title modal-title">Recover the password</h2>
                    <div class="flex">
                        <div class="subtitle modal-subtitle">
                            Enter your email address
                        </div>
                    </div>
                    <div class="fields">
                        <div class="input_wrap fullwrap">
                            <input type="email" class="input" placeholder="Email">
                        </div>
                    </div>
                    <button class="btn submit-btn"><span>Recover the password</span></button>
                </div>
                <div class="modal_close"></div>
            </div>
        </div>
    </div>
    <div style="display: none;">
        <div class="modal modal_default success-recover" id="success-recover-pass">
            <div class="modal_wrap">
                <div class="modal-top">
                    <h2 class="title modal-title">Recover the password</h2>
                    <div class="subtitle modal-subtitle">
                        A link to reset your password has been sent  to your e-mail. Please check your email.
                    </div>
                </div>
                <div class="modal_close"></div>
            </div>
        </div>
    </div>

@endsection