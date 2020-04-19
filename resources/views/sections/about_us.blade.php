



        <div class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="about-content">
                            <span class="sub-title">{{$about_us->head}}</span>
                            <h2>  {{$about_us->head_text}}</h2>
                            <p>{{$about_us->text}}</p>
                            <div class="quote">
                                “{{$about_us->red_text}}
                            </div>
                            <a href="{{$about_us->btn_link}}" class="default-btn">{{$about_us->btn_name}}<span></span></a>

                            <div class="back-animation-text">شصت سی چاره</div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="about-image">
                            <img src="{{asset("storage/about-im.jpg")}}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="offer-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-offer-box">
                            <div class="offer-image">
                                <a href="">
                                    <img src="{{asset("img/offer-im.jpg")}}" alt="image">
                                </a>
                            </div>

                            <div class="offer-content">
                                <h3><a href="">طراحی حرفه ای</a></h3>

                                <a href="" class="details-btn"><i class="flaticon-left-chevron"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-offer-box">
                            <div class="offer-image">
                                <a href="">
                                    <img src="{{asset("img/offer-in.jpg")}}" alt="image">
                                </a>
                            </div>

                            <div class="offer-content">
                                <h3><a href="">ایده خلاق</a></h3>

                                <a href="" class="details-btn"><i class="flaticon-left-chevron"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                        <div class="single-offer-box">
                            <div class="offer-image">
                                <a href="">
                                    <img src="{{asset("img/offer-io.jpg")}}" alt="image">
                                </a>
                            </div>

                            <div class="offer-content">
                                <h3><a href="">معماری ماهرانه</a></h3>

                                <a href="" class="details-btn"><i class="flaticon-left-chevron"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
