@extends('main')

@section('krok')
    Krok 6: wybór dysku twardego
@endsection
@section('zdjecie_komponentu')
    ../images/dysk_twardy.jpg
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
                    Pojemność
                </div>
            </div>

            @include('partials.capacities-filter',['capacities', $capacities])


            <hr class="hr">

            <div class="head-filter">
                <div class="head-filter-title">
                    Typ dysku
                </div>
            </div>

            @include('partials.types-filter',['types', $types])


            <hr class="hr">
            <div class="przycisk-filtru">
                <input class="filtruj" type="submit" value={{__('Filtruj')}}>
            </div>
        </div>
    </form>
@endsection

@section('content')

    
        @include('partials.emptyResults', ['collection' => $hdds])
        @foreach($hdds as $hdd)
        
        <div class="lista-komponentow asd {{$hdd->producent_id}} {{$hdd->capacity}} {{$hdd->type}}">
            <div class="card-komponent">
                <div class="grid-container">
                    <div class="grid-item1 zoomimage">
                        <img src="{{$hdd->zdj}}"class="zdjecie_produktu">
                    </div>
                    <div class="grid-item2">
                        <a><h3 class="tytul-produktu"><b>{{$hdd->name}}</b></h3> </a>
                        <div class="cat-product-features">
                            <div class="cat-product-feature" title="#">
                                Producent:
                                <b>{{$hdd->producent->name}}</b>
                            </div>
                            <div class="cat-product-feature" title="#">
                                Pojemność:
                                <b>{{$hdd->capacity}} GB</b>
                            </div>
                            <div class="cat-product-feature" title="#">
                                Typ dysku:
                                <b>{{$hdd->type}}</b>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item3">
                        <div class="przycisk-produktu">
                            <form class="wybor" action="{{url('/addHddToCart')}}">
                                <input type="hidden" name="item" value="{{$hdd->id}}">
                                @if(Session::get('cart')['hdd'] == null)
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
