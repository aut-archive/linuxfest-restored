<section id="presenters">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    ارائه‌دهندگان
                </h2>
                <hr class="primary">
            </div>
        </div>
    </div>

    <div class="container grid-wrap col-set-one-quarter tablet-col-set-one-half phone-col-set-full">
        <div class="row">

            @foreach($presenters as $presenter)

                <div class="col-lg-3 col-md-6 col-rtl2 text-center wow fadeIn">
                    <a href="{{route('app::presenter',[$presenter->id])}}" class="profile grid-col" target="_blank">

                        <img style="max-height: 220px;" src="{{$presenter->avatar}}">

                        <h2>{{$presenter->name}}</h2>

                        <h5>{{$presenter->bio}}</h5>

                        <a href="{{$presenter->url}}"><h5>صفحه شخصی</h5></a>
                        <div class="clear"></div>
                        <br>

                    </a>
                </div>

            @endforeach

        </div>
    </div>

</section>