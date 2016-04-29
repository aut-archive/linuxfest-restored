<section class="bg-green" id="presentations">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    ارائه ها و کارگاه ها
                </h2>
                <hr class="primary">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            @foreach($sections as $section)

                <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4>
                                {{$section->title}}
                            </h4>
                            <h5>
                                {{$section->name}}
                            </h5>

                            <br>
                            <br>

                            <div style="text-align: center">
                                <a href="{{$section->id}}"
                                   class="btn btn-info" target="_blank">
                                    <span>مشاهده‌ی جزئیات</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>

</section>