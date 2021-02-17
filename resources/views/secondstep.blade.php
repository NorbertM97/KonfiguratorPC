@extends('main')

@section('krok')
    Krok 2: wybór płyty głównej
@endsection
@section('zdjecie_komponentu')
    ../images/plyta_glowna.jpg
@endsection
@section('filtry')

<form action="{{url()->current()}}" method="GET">
    {{--producenci--}}
        <div class="head-filter">
            <div class="head-filter-title">
                Producent
            </div>
        </div>

            @include('partials.producent-filter',['producents', $producents])

        <hr class="hr">

        {{--socket--}}
        <div class="head-filter">
            <div class="head-filter-title">
                Socket
            </div>
        </div>
        @include('partials.sockets-filter',['sockets' => $sockets])

        <hr class="hr">

        {{--ilośc slotów ram--}}
        <div class="head-filter">
            <div class="head-filter-title">
                Ilość slotów Ram
            </div>
        </div>
        @include('partials.slots-filter',['slots' => $slots])

        <hr class="hr">



        <div class="head-filter">
            <div class="head-filter-title">
                Maksymalne taktowanie Ramu
            </div>
        </div>
        @include('partials.timings-filter', ['timings', $timings])
    </div>
    <hr class="hr">
    <div class="przycisk-filtru">
        <input class="filtruj" type="submit" value={{__('Filtruj')}}>

    </form>
@endsection

@section('content')
        @include('partials.emptyResults', ['collection' => $mbs])
        @foreach($mbs as $mb)
        <div class="lista-komponentow asd {{$mb->producent_id}} {{$mb->socket_id}} {{$mb->slots}} {{$mb->max_timing}}">
            <div class="card-komponent">
                <div class="grid-container">
                    <div class="grid-item1 zoomimage">
                        <img src="{{$mb->zdj}}"class="zdjecie_produktu alignleft size-medium wp-image-7000">
                    </div>
                    <div class="grid-item2">
                        <a><h3 class="tytul-produktu"><b>{{$mb->name}}</b></h3> </a>
                        <div class="cat-product-features">
                            <div class="cat-product-feature" title="#">
                                Producent:
                                <b>{{$mb->producent->name}}</b>
                            </div>
                            <div class="cat-product-feature" title="#">
                                Kompatybilność:
                                <b>{{$mb->compability->name}}</b>
                            </div>
                            <div class="cat-product-feature" title="#">
                                Socket:
                                <b>{{$mb->socket->name}}</b>
                            </div>
                            <div class="cat-product-feature" title="#">
                                Slotów Ram:
                                <b>{{$mb->slots}}</b>
                            </div>
                            <div class="cat-product-feature" title="#">
                                Maksymalne taktowanie ramu:
                                <b>{{$mb->max_timing}} Mhz</b>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item3">
                        <div class="przycisk-produktu">
                            <form class="wybor" action="{{url('/addMBToCart')}}">
                                <input type="hidden" name="item" value="{{$mb->id}}">
                                @if(Session::get('cart')['motherboard'] == null)
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

        @endforeach


@endsection
