
        <div class="home-slides owl-carousel owl-theme">


            @foreach($header as $item)
@if($item->show)

            <div class="main-banner jarallax" style="background-image: url({{asset("storage/$item->image")}});" data-jarallax='{"speed": 0.3}'>
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="main-banner-content">
                                <h1>{{$item->title}}</h1>
                                <p>{{$item->description}}</p>

                                <div class="btn-box">
                                    <a href="{{$item->btn_link}}" class="default-btn">{{$item->btn_name}}<span></span></a>
                                    <a href="{{$item->btn_name}}" class="optional-btn">اطلاعات بیشتر <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endif
                @endforeach

        </div>
