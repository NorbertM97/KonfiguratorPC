@extends('main')

@section('krok')
    Krok 3: wybór procesora
@endsection
@section('zdjecie_komponentu')
    ../images/procesor.jpg
@endsection
@section('filtry')
        <form action="{{url()->current()}}" method="GET">

            <div class="head-filter">
                <div class="head-filter-title">
                    Ilość rdzeni
                </div>
            </div>
            @include('partials.cores-filter',['cores', $cores])

            <hr class="hr">

            <div class="head-filter">
                <div class="head-filter-title">
                    Ilość wątków
                </div>
            </div>


            @include('partials.threats-filter',['threats', $threats])

        <hr class="hr">
        <div class="przycisk-filtru">
        <input class="filtruj" type="submit" value={{__('Filtruj')}}>
        </div>
        </form>
@endsection

@section('content')
        @include('partials.emptyResults', ['collection' => $cpus])
        @foreach($cpus as $cpu)

        <div class="lista-komponentow asd {{$cpu->socket_id}} {{$cpu->series}} {{$cpu->cores}}r {{$cpu->threats}}w">
            <div class="card-komponent">
                <div class="grid-container">
                    <div class="grid-item1 zoomimage">
                        <img src="{{$cpu->zdj}}"class="zdjecie_produktu">
                    </div>
                <div class="grid-item2">
                    <a><h3 class="tytul-produktu"><b>{{$cpu->name}}</b></h3> </a>
                    <div class="cat-product-features">
                        <div class="cat-product-feature" title="#">
                            Producent:
                            <b>{{$cpu->producent->name}}</b>
                        </div>
                        <div class="cat-product-feature" title="#">
                            Taktowanie rdzenia:
                            <b>{{$cpu->core_timing}} Mhz</b>
                        </div>
                        <div class="cat-product-feature" title="#">
                            Socket:
                            <b>{{$cpu->socket->name}}</b>
                        </div>
                        <div class="cat-product-feature" title="#">
                            Ilość rdzeni:
                            <b>{{$cpu->cores}}</b>
                        </div>
                        <div class="cat-product-feature" title="#">
                            Ilość wątków:
                            <b>{{$cpu->threats}}</b>
                        </div>
                    </div>
                </div>
                <div class="grid-item3">
                    <div class="przycisk-produktu">
                        <form class="wybor" action="{{url('/addCpuToCart')}}">
                            <input type="hidden" name="item" value="{{$cpu->id}}">
                            @if(Session::get('cart')['cpu'] == null)
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
