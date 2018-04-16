@include('layouts.header', ['tab' => 'basics'])

<div class="card card-cascade wider reverse">

    <div class="view cyan lighten-1">
        <a href="/">Home</a> >> Basics
    </div>

    <div class="card-body">

        <h4 class="card-title"><strong>Kirtan Basics</strong></h4>
        <div class="row">
            <div class="col-sm-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a
                        class="nav-link active"
                        id="v-pills-home-tab"
                        data-toggle="pill"
                        href="#v-pills-home"
                        role="tab"
                        aria-controls="v-pills-intro"
                        aria-selected="true"
                    >Introduction</a>
                    <a
                        class="nav-link"
                        id="v-pills-practice-tab"
                        data-toggle="pill"
                        href="#v-pills-practice"
                        role="tab"
                        aria-controls="v-pills-practice"
                        aria-selected="false"
                    >Daily Practice</a>
                    <a
                        class="nav-link"
                        id="v-pills-sargams-tab"
                        data-toggle="pill"
                        href="#v-pills-harmonium"
                        role="tab"
                        aria-controls="v-pills-harmonium"
                        aria-selected="false"
                    >Harmonium</a>
                    <a
                        class="nav-link"
                        id="v-pills-sargams-tab"
                        data-toggle="pill"
                        href="#v-pills-sargams"
                        role="tab"
                        aria-controls="v-pills-sargams"
                        aria-selected="false"
                    >Sargams</a>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-intro-tab">
                        <p>
                            <blockquote class="blockquote gurbani-font-2">
                                kIrqn is~Kx leI sB qoN mh~qvpUrn hY gurU swihb dI ndir Aqy ikrpw[ pRmwqmw ijs au~pr qruT jwvy aus nUM kIrqn krn dI dwq pRwpq huMdI hY[
                            </blockquote>
                        </p>

                        <img src="/build/images/guru_nanak_dev_ji.png" />
                    </div>
                    <div
                        class="tab-pane fade"
                        id="v-pills-practice"
                        role="tabpanel"
                        aria-labelledby="v-pills-sargams-tab"
                    >
                        <p class="gurbani-font-2 justify-content-between">
                            ‘sw’ (gwien dw pihlw sur jwN mUl sur) gwien dw ADwr hY, ieh jwxn leI sB qoN pihlwN swnUM Awpxw skyl pqw hoxw cwhIdw hY[
                        </p>
                        <p class="gurbani-font-2 justify-content-between">
                            iksy vI gwien dy iqMn ih~sy huMdy hn[ kIrqn krn leI Awpxw skyl cux ky iqMn spqkwN dI jwxkwrI hoxI cwhIdI hY[ iehnwN spqkwN qy gwien krn leI srgmwN qwnwN dw AiBAws krnw cwhIdw hY[
                        </p>
                        <ul class="list-group">
                            <li class="list-group-item gurbani-font-2">
                                <div class="d-flex w-100 justify-content-between">
                                    <h4 class="mb-1">1. mMdr spqk</h4>
                                </div>
                                <p class="mb-1">
                                    ies spqk qy gwien krnw kuJ muSikl hY ies leI kw&I AiBAws krnw pYNdw hY pr ies spqk qy gwien krn nwl gwien iv~c bhuq Tihrwau AwauNdw hY[
                                </p>
                            </li>
                            <li class="list-group-item gurbani-font-2">
                                <div class="d-flex w-100 justify-content-between">
                                    <h4 class="mb-1">2. m~D spqk</h4>
                                </div>
                                <p class="mb-1">
                                    m~D spqk qy gwien krnw Awswn hY ikauNik ies spqk qy gwien krn leI ijAwdw AiBAws dI loV nhIN huMdI, ieh AwswnI nwl pkV ivc Aw jwNdw hY ikauNik ies spqk dw quhwfy gly dI sur nwl jldI myl bx jwNdw hY[
                                </p>
                            </li>
                            <li class="list-group-item gurbani-font-2">
                                <div class="d-flex w-100 justify-content-between">
                                    <h4 class="mb-1">3. qwr spqk</h4>
                                </div>
                                <p class="mb-1">
                                    qwr spqk mqlb au~cy surwN dw spqk[ ies p~Dr qy gwien krn leI vI bhuq AiBAws dI loV huMdI hY Aqy zordwr AiBAws krnw cwhIdw hY, ijs nwl spqk qy gwien krnw Awswn huMdw hY Aqy gwien krn sunx iv~c AwnMd Awaudw hY[
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-harmonium" role="tabpanel" aria-labelledby="v-pills-harmonium-tab">
                        <img src="build/images/men_kirtan_layout.png" class="img-fluid" />
                        <img src="build/images/women_kirtan_layout.png" class="img-fluid" />
                    </div>
                    <div class="tab-pane fade" id="v-pills-sargams" role="tabpanel" aria-labelledby="v-pills-sargams-tab">
                        Comming soon...
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="build/js/app.js" type="text/javascript"></script>
@include('layouts.footer')
