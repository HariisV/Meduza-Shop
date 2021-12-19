@extends('Tampilan.default')
@section('judul')
    Tentang Kami
@endsection
@section('konten')
<div class="page about-us">
    <div class="wrap">
        <div class="wrap_float">
            <div class="breadcrumbs">
                <a href="/">Home</a> - <a href="#" class="current">About</a>
            </div>
            <div class="title-block">
                <h1 class="title">About Us</h1>
                <p class="description">
                    When designers create products, they tell stories to users. Designers have a lot of tools to make a story more interesting. Motion design is one of the most powerful tools designers have. The true power of motion can be seen in mobile experiences. A mobile app without motion is just a sequence of independent screens. But when designers introduce.
                </p>
            </div>
            <div class="slider-wrap">
                <div class="slider" id="about-us-slider">
                    <div class="slide ie-img">
                        <img src="{{Asset('meduza-assets/img/about-1.jpg')}}" alt="">
                    </div>
                    <div class="slide ie-img">
                        <img src="{{Asset('meduza-assets/img/about-3.jpg')}}" alt="">
                    </div>
                    <div class="slide ie-img">
                        <img src="{{Asset('meduza-assets/img/about-slide-1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="arrows">
                    <div class="arrow prev"></div>
                    <div class="arrow next"></div>
                </div>
            </div>
            <div class="faq_block">
                <h2 class="title">
                    On the other hand, we denounce with righteous indignation
                </h2>
                <div class="section_content">
                    <div class="faq_item">
                        <h3 class="faq_item-question">
                            <span>When designers create products</span>
                        </h3>
                        <div class="faq_item-answer">
                            <p>
                                When designers create products, they tell stories to users. Designers have a lot of tools to make a story more interesting. Motion design is one of the most powerful tools designers have. The true power of motion can be seen in mobile experiences. A mobile app without motion is just a sequence of independent screens. But when designers introduce motion, something magical happens – a design comes alive – an app becomes an interactive story that can engage users.
                                <br><br>
                                Today we explore the concept of motion design in the interfaces of the future with Artificial Intelligence (AI) assistants. It is a sort of a decider: whether your readers will be back or ditch you and your company. But make sure that every email newsletter looks pleasing and is unobtrusive.
                            </p>
                        </div>
                    </div>
                    <div class="faq_item">
                        <h3 class="faq_item-question">
                            <span>When designers create products</span>
                        </h3>
                        <div class="faq_item-answer">
                            <p>
                                When designers create products, they tell stories to users. Designers have a lot of tools to make a story more interesting. Motion design is one of the most powerful tools designers have. The true power of motion can be seen in mobile experiences. A mobile app without motion is just a sequence of independent screens. But when designers introduce motion, something magical happens – a design comes alive – an app becomes an interactive story that can engage users.
                                <br><br>
                                Today we explore the concept of motion design in the interfaces of the future with Artificial Intelligence (AI) assistants. It is a sort of a decider: whether your readers will be back or ditch you and your company. But make sure that every email newsletter looks pleasing and is unobtrusive.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statistics">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="statistics_item">
                            <div class="_icon">
                                <img src="{{Asset('meduza-assets/img/shield.svg')}}" alt="">
                            </div>
                            <h3 class="_title">Unique articles</h3>
                            <p class="_text">
                                Read only unique articles on our newsletter
                            </p>
                        </div>
                        
                        <div class="statistics_item">
                            <div class="_icon">
                                <img src="{{Asset('meduza-assets/img/diamond.svg')}}" alt="">
                            </div>
                            <h3 class="_title">New articles every day</h3>
                            <p class="_text">
                                Get the latest news every day
                            </p>
                        </div>
                        
                        <div class="statistics_item">
                            <div class="_icon">
                                <img src="{{Asset('meduza-assets/img/vision.svg')}}" alt="">
                            </div>
                            <h3 class="_title">Only Verified Articles</h3>
                            <p class="_text">
                                We guarantee you the authenticity of written articles
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap team-wrap">
        <div class="wrap_float">
            <h2 class="title">Our team</h2>
            <div class="subtitle">
                When designers create products, they tell stories to users. Designers have a lot of tools to make a story more interesting. Motion design is one of the most powerful tools designers have.
            </div>
            <div class="section_content">
                <div class="item">
                    <div class="photo ie-img">
                        <img src="{{Asset('meduza-assets/img/team-1.jpg')}}" alt="">
                    </div>
                    <div class="name">John Digistrict</div>
                    <div class="position">General Director</div>
                </div>
                <div class="item">
                    <div class="photo ie-img">
                        <img src="{{Asset('meduza-assets/img/team-6.jpg')}}" alt="">
                    </div>
                    <div class="name">John Digistrict</div>
                    <div class="position">General Director</div>
                </div>
                <div class="item">
                    <div class="photo ie-img">
                        <img src="{{Asset('meduza-assets/img/team-5.jpg')}}" alt="">
                    </div>
                    <div class="name">John Digistrict</div>
                    <div class="position">General Director</div>
                </div>
                <div class="item">
                    <div class="photo ie-img">
                        <img src="{{Asset('meduza-assets/img/team-2.jpg')}}" alt="">
                    </div>
                    <div class="name">John Digistrict</div>
                    <div class="position">General Director</div>
                </div>
                <div class="item">
                    <div class="photo ie-img">
                        <img src="{{Asset('meduza-assets/img/team-3.jpg')}}" alt="">
                    </div>
                    <div class="name">John Digistrict</div>
                    <div class="position">General Director</div>
                </div>
                <div class="item">
                    <div class="photo ie-img">
                        <img src="{{Asset('meduza-assets/img/team-4.jpg')}}" alt="">
                    </div>
                    <div class="name">John Digistrict</div>
                    <div class="position">General Director</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection