@include('layouts.header', ['tab' => 'basics'])

<div class="card card-cascade wider reverse">

    <div class="view cyan lighten-1">
        <a href="/">Home</a> >> Basics
    </div>

    <div class="card-body text-center">

        <h4 class="card-title"><strong>Kirtan Basics</strong></h4>

        <h5 class="indigo-text"><strong>Sargams</strong></h5>
        <p class="card-text">
            Sevet set of notes id called 'Sargam' but in playing a sargam, 'Sa' of next scale is added, thus making eight notes.
            It is important to learn the sargam keys thoroughly; This will make the playing of the harmonium very easy.
        </p>
        <img src="build/images/sargam.jpg" class="img-fluid" />

        <h5 class="indigo-text">Types of Scales</h5>
        <p class="card-text">
            There are three types of the scales in harmonium:
            <ol>
                <li>Lower Sclae</li>
                <li>Middle Scale</li>
                <li>Upper Scale</li>
            </ol>
        </p>
    </div>
</div>

<script src="build/js/app.js" type="text/javascript"></script>
@include('layouts.footer')
