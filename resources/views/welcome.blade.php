@include('layouts.header', ['tab' => 'home'])

<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
            <div class="container flex-center">
                <div class="row flex-center pt-5 mt-3">
                    <div class="col-md-6 text-center text-md-left margins">
                        <div>
                            <h1 class="h1-responsive wow fadeInLeft" data-wow-delay="0.3s">Learn Kirtan Online</h1>
                                <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                <h6 class="wow fadeInLeft" data-wow-delay="0.3s">
                                    Kirtan is a precious gift and singing together with love makes it even more joyful.
                                </h6>
                                <br>
                                <a class="btn btn-default wow fadeInLeft" data-wow-delay="0.3s">Learn more</a>
                                <a class="btn btn-default wow fadeInLeft" data-wow-delay="0.3s">Register</a>
                        </div>
                    </div>

                    <div class="col-md-6 wow fadeInRight d-flex justify-content-center" data-wow-delay="0.3s">
                        <img src="build/images/harmonium.png" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
            <div class="container flex-center">
                    <div class="row flex-center pt-5 mt-3">
                        <div class="col-md-6 text-center text-md-left margins">
                            <div>
                                <h1 class="h1-responsive wow fadeInLeft" data-wow-delay="0.3s">Learn Tabla Online</h1>
                                    <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                    <h6 class="wow fadeInLeft" data-wow-delay="0.3s">
                                        Kirtan is a precious gift and singing together with love makes it even more joyful.
                                    </h6>
                                    <br>
                                    <a class="btn btn-default wow fadeInLeft" data-wow-delay="0.3s">Learn more</a>
                                    <a class="btn btn-default wow fadeInLeft" data-wow-delay="0.3s">Register</a>
                            </div>
                        </div>

                        <div class="col-md-6 wow fadeInRight d-flex justify-content-center" data-wow-delay="0.3s">
                            <img src="build/images/tabla.png" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<!--Main Navigation-->
        <script src="build/js/app.js" type="text/javascript"></script>
        <script type="text/javascript">
            new WOW().init();
        </script>

@include('layouts.footer')