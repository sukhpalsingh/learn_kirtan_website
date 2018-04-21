@include('layouts.header', ['tab' => 'raags'])
<div class="card card-cascade wider reverse">

    <div class="view cyan lighten-1">
        <a href="/">Home</a> >> Raags
    </div>

    <div class="card-body">

        <h4 class="card-title"><strong>Raag {{ $name }}</strong></h4>
        <div class="row">
            <div class="col-sm-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a
                        class="nav-link active"
                        id="v-pills-intro-tab"
                        data-toggle="pill"
                        href="#v-pills-intro"
                        role="tab"
                        aria-controls="v-pills-intro"
                        aria-selected="true"
                    >Introduction</a>
                    <a
                        class="nav-link"
                        id="v-pills-sargams-tab"
                        data-toggle="pill"
                        href="/raags/{{$name}}/sargams"
                        role="tab"
                        aria-controls="v-pills-sargams"
                        aria-selected="false"
                    >Sargams</a>
                    <a
                        class="nav-link"
                        id="v-pills-shabads-tab"
                        data-toggle="pill"
                        href="/raags/{{$name}}/shabads"
                        role="tab"
                        aria-controls="v-pills-shabads"
                        aria-selected="false"
                    >Shabads</a>
                </div>
            </div>
            <div class="col-sm-9">
                <p class="mb-1 font-size-20">
                    Comming soon...
                </p>
            </div>
        </div>
    </div>
</div>

<script src="build/js/app.js" type="text/javascript"></script>
@include('layouts.footer')
