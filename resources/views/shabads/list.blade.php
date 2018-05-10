@include('layouts.header', ['tab' => 'shabads'])
<div class="card card-cascade wider reverse">

    <div class="view cyan lighten-1">
        <a href="/">Home</a> >> Shabads
    </div>

    <div class="card-body">

        <h4 class="card-title">
            <strong>Shabads</strong>
            <a href="/shabads/create" class="btn btn-primary btn-sm float-right">Add Shabad</a>
        </h4>
        <div class="row">
            <div class="col-sm-12">

                <section class="py-4">

                </section>        
            </div>
        </div>
    </div>
</div>

<script src="build/js/app.js" type="text/javascript"></script>
@include('layouts.footer')
