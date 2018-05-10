@include('layouts.header', ['tab' => 'shabads'])
<div class="card card-cascade wider reverse">

    <div class="view cyan lighten-1">
        <a href="/">Home</a> >> <a href="/shabads">Shabads</a> >> Add Shabad
    </div>

    <div class="card-body">

        <h4 class="card-title">
            <strong>Step2. Shabad Sargams</strong>
        </h4>
        <div class="row">
            <div class="col-sm-12">
                <form class="form-horizontal" method="POST" action="/shabads/search">
                    {{ csrf_field() }}

                    @foreach ($akhars as $i => $lineAkhars)
                        <div style="clear: both" class="mb-3">
                            @foreach ($lineAkhars as $i => $akhar)
                                <div class='float-left gurbani-font-2 mr-2'>{{ $akhar }}</div>
                                <div class='float-left gurbani-font-2 mr-2'>
                                    <select>
                                        <option value=''></option>
                                        @foreach ($surs as $sur)
                                            <option class='gurbani-font-2' value="{{ $sur }}">{{ $sur }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
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
