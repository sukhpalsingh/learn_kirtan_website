@include('layouts.header', ['tab' => 'shabads'])
<div class="card card-cascade wider reverse">

    <div class="view cyan lighten-1">
        <a href="/">Home</a> >> <a href="/shabads">Shabads</a> >> Add Shabad
    </div>

    <div class="card-body">

        <h4 class="card-title">
            <strong>Step1. Search Shabad</strong>
        </h4>
        <div class="row">
            <div class="col-sm-12">
                <form class="form-horizontal" method="POST" action="/shabads/search">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="hidden" name="search_param" value="all" id="search_param">         
                        <input type="text" class="form-control" name="query" placeholder="Gurbani first letters e.g. shdt">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Search</button>
                        </span>
                    </div>
                </form>

                @if (isset($shabads))
                    @foreach ($shabads as $shabad)
                        <div class="list-group">
                            <a href="/shabads/create?shabad_id={{ $shabad['shabad']['shabadid'] }}">
                                {{ $shabad['shabad']['gurmukhi']['unicode'] }}
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

<script src="build/js/app.js" type="text/javascript"></script>
@include('layouts.footer')
