@include('layouts.header', ['tab' => 'home'])

<!--Intro Section-->
<section class="view gray-bg">
    <div class="full-bg-img">
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
</section>

<!--Main Navigation-->
        <script src="build/js/app.js" type="text/javascript"></script>
        <script type="text/javascript">
            new WOW().init();
        </script>

@include('layouts.footer')