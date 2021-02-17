@extends('main')


@section('krok')
    Krok 5: wybór karty graficznej
@endsection
@section('zdjecie_komponentu')
    ../images/karta_graficzna.jpg
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
                    Układ graficzny
                </div>
            </div>

           @include('partials.series-filter',['series', $series])

            <hr class="hr">

            <div class="head-filter">
                <div class="head-filter-title">
                    Ilość pamięci
                </div>
            </div>

            @include('partials.memories-filter',['memories', $memories])

            <hr class="hr">
            <div class="przycisk-filtru">
                <input class="filtruj" type="submit" value={{__('Filtruj')}}>
            </div>

        </div>
    </form>
@endsection

@section('content')
        @include('partials.emptyResults', ['collection' => $gpus])
        @foreach($gpus as $gpu)

        <div class="lista-komponentow asd {{$gpu->producent_id}} {{$gpu->series}} {{$gpu->memory}}">
            <div class="card-komponent">
                <div class="grid-container">
                    <div class="grid-item1 zoomimage">
                        <img src="{{$gpu->zdj}}"class="zdjecie_produktu">
                    </div>
                    <div class="grid-item2">
                        <a><h3 class="tytul-produktu"><b>{{$gpu->name}}</b></h3> </a>
                        <div class="cat-product-features">
                            <div class="cat-product-feature" title="#">
                                Producent:
                                <b>{{$gpu->producent->name}}</b>
                            </div>
                            <div class="cat-product-feature" title="#">
                                Ilość pamięci:
                                <b>{{$gpu->memory}} GB</b>
                            </div>
                            <div class="cat-product-feature" title="#">
                                Układ graficzny:
                                <b>{{$gpu->series}}</b>
                            </div>
                            <div class="cat-product-feature" title="#">
                                Długość:
                                <b>{{$gpu->size}} mm</b>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item3">
                        <div class="przycisk-produktu">
                            <form class="wybor" action="{{url('/addGpuToCart')}}">
                                <input type="hidden" name="item" value="{{$gpu->id}}">
                                @if(Session::get('cart')['gpu'] == null)
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
