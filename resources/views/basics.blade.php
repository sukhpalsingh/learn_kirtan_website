@include('layouts.header', ['tab' => 'basics'])

<div class="card card-cascade wider reverse">

    <div class="view cyan lighten-1">
        <a href="/">Home</a> >> Basics
    </div>

    <div class="card-body text-center">

        <h4 class="card-title"><strong>Kirtan Basics</strong></h4>
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-intro" aria-selected="true">Introduction</a>
                    <a class="nav-link" id="v-pills-sargams-tab" data-toggle="pill" href="#v-pills-sargams" role="tab" aria-controls="v-pills-sargams" aria-selected="false">Sargams</a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-intro-tab">
                        <p>
                            <blockquote class="blockquote gurbani-font-1">
                                kIrqn is~Kx leI sB qoN mh~qvpUrn hY gurU swihb dI ndir Aqy ikrpw[ pRmwqmw ijs au~pr qruT jwvy aus nUM kIrqn krn dI dwq pRwpq huMdI hY[
                            </blockquote>
                        </p>

                        <p class="card-text gurbani-font-1">
                                
                        </p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-sargams" role="tabpanel" aria-labelledby="v-pills-sargams-tab">
                        Sargams
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="build/js/app.js" type="text/javascript"></script>
@include('layouts.footer')
