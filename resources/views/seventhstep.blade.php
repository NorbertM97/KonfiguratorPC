@extends('main')

@section('krok')
    Krok 7: wybór zasilacza
@endsection
@section('zdjecie_komponentu')
    ../images/zasilacz.jpg
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
                    Moc
                </div>
            </div>

            @include('partials.powers-filter',['powers', $powers])


            <hr class="hr">
            <div class="przycisk-filtru">
                <input class="filtruj" type="submit" value={{__('Filtruj')}}>
            </div>



        </div>
    </form>
@endsection

@section('content')
    @include('partials.emptyResults', ['collection' => $psus])
    @foreach($psus as $psu)

        <div class="lista-komponentow asd {{$psu->producent_id}} {{$psu->power}} {{$psu->certificate}}">
            <div class="card-komponent">
                <div class="grid-container">
                    <div class="grid-item1 zoomimage">
                        <img src="{{$psu->zdj}}"class="zdjecie_produktu">
                    </div>
                    <div class="grid-item2">
                        <a><h3 class="tytul-produktu"><b>{{$psu->name}}</b></h3> </a>
                        <div class="cat-product-features">
                            <div class="cat-product-feature" title="#">
                                Producent:
                                <b>{{$psu->producent->name}}</b>
                            </div>
                            <div class="cat-product-feature" title="#">
                                Moc:
                                <b>{{$psu->power}} W</b>
                            </div>
                            <div class="cat-product-feature" title="#">
                                Certyfikat:
                                <b>{{$psu->certificate}}</b>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item3">
                        <div class="przycisk-produktu">
                            <form class="wybor" action="{{url('/addPsuToCart')}}">
                                <input type="hidden" name="item" value="{{$psu->id}}">
                                @if(Session::get('cart')['psu'] == null)
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
