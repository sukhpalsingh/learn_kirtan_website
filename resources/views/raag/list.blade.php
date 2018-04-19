@include('layouts.header', ['tab' => 'raags'])
<div class="card card-cascade wider reverse">

    <div class="view cyan lighten-1">
        <a href="/">Home</a> >> Raags
    </div>

    <div class="card-body">

        <h4 class="card-title"><strong>Gurbani Raags</strong></h4>
        <div class="row">
            <div class="col-sm-12">

                <section class="py-4">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-5 col-xl-4 mb-4">
                        <!--Featured image-->
                        <div class="overlay rounded z-depth-1-half">
                            <img src="build/images/raag_asa.jpg" class="img-fluid" alt="Raag Asa">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                        <h3 class="mb-3 font-weight-bold dark-grey-text">
                            <strong>Raag Asa</strong>
                        </h3>
                        <p class="grey-text">
                            Raag Asa
                        </p>
                        <a class="btn btn-primary btn-md">Read more</a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <hr class="mb-5">

                </section>
                        
            </div>
        </div>
    </div>
</div>

<script src="build/js/app.js" type="text/javascript"></script>
@include('layouts.footer')
