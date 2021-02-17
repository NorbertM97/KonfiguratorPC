@extends('main')

@section('krok')
    Krok 4: wybór pamięci Ram
@endsection
@section('zdjecie_komponentu')
    ../images/ram.jpg
@endsection
@section('filtry')
    <form action="{{url()->current()}}" method="GET">
        <div class="filtry">
            <div class="head-filter">
                <div class="head-filter-title">
                    Producent
                </div>
            </div>

            @include('partials.producent-filter',['producents', $producents])
            <hr class="hr">

            <div class="head-filter">
                <div class="head-filter-title">
                    Rozmiar pamięci
                </div>
            </div>
            @include('partials.memories-filter',['memories', $memories])

            <hr class="hr">

            <div class="head-filter">
                <div class="head-filter-title">
                    Opóźnienie
                </div>
            </div>

            @include('partials.latencies-filter',['latencies', $latencies])
            <hr class="hr">

            <div class="head-filter">
                <div class="head-filter-title">
                    Taktowanie pamięci
                </div>
            </div>

            @include('partials.timings2-filter',['timings', $timings])


            <hr class="hr">
            <div class="przycisk-filtru">
                <input class="filtruj" type="submit" value={{__('Filtruj')}}>
            </div>
        </div>
    </form>
@endsection

@section('content')

    @include('partials.emptyResults', ['collection' => $rams])
    @foreach($rams as $ram)

    <div class="lista-komponentow asd {{$ram->producent_id}} {{$ram->timing}} {{$ram->latency}}cl {{$ram->memory}}mb">
        <div class="card-komponent">
            <div class="grid-container">
                <div class="grid-item1 zoomimage">
                    <img src="{{$ram->zdj}}"class="zdjecie_produktu">
                </div>
            <div class="grid-item2">
                <a><h3 class="tytul-produktu"><b>{{$ram->name}}</b></h3> </a>
                <div class="cat-product-features">
                    <div class="cat-product-feature" title="#">
                        Producent:
                        <b>{{$ram->producent->name}}</b>
                    </div>
                    <div class="cat-product-feature" title="#">
                        Rozmiar pamięci:
                        <b>{{$ram->memory}} GB</b>
                    </div>
                    <div class="cat-product-feature" title="#">
                        Opóźnienie:
                        <b>{{$ram->latency}} CL</b>
                    </div>
                    <div class="cat-product-feature" title="#">
                        Taktowanie pamięci:
                        <b>{{$ram->timing}} Mhz</b>
                    </div>
                    <div class="cat-product-feature" title="#">
                        Typ pamięci:
                        <b>{{$ram->typ}}</b>
                    </div>
                </div>
            </div>
                <div class="grid-item3">
                    <div class="przycisk-produktu">
                        <form class="wybor" action="{{url('/addRamToCart')}}">
                            <input type="hidden" name="item" value="{{$ram->id}}">
                            @if(Session::get('cart')['ram'] == null)
                                <button type="submit" class="btn btn-danger" id="wybierz">Wybierz!</button>
                            @else
                                <button type="submit" class="btn btn-danger" id="wybierz">Zamień!</button>
                                <div class="potwierdzenie">
                                    <div class="napis_potwierdzenie">Jeśli zostały wybrane inne komponenty, zostaną one usunięte.</div>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
        </div>
    </div>
    </div>

    @endforeach
@endsection
