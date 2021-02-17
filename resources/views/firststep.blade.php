@extends('main')

@section('krok')
Krok 1: wybór obudowy
@endsection
@section('zdjecie_komponentu')
    ../images/obudowa.jpg
@endsection
@section('filtry')

        <form action="{{url()->current()}}" method="GET">
            <div class="head-filter">
                <div class="head-filter-title">
                    Producent
                </div>
            </div>


                    @include('partials.producent-filter',['producents', $producents])

            <hr class="hr">

            <div class="head-filter">
                <div class="head-filter-title">
                    Kompatybilność
                </div>
            </div>

            @include('partials.compability-filter',['compabilities', $compabilities])


            <hr class="hr">

            <div class="head-filter">
                <div class="head-filter-title">
                    Długość karty graficznej
                </div>
            </div>

                @foreach($sizes as $size)

                    <input type="checkbox" name="GPU_size[]" value={{$size->GPU_size}} {{ (isset($_GET['GPU_size']) && in_array($size->GPU_size, $_GET['GPU_size'])) ? 'checked' : '' }}>
                    <label for={{$size->GPU_size}}> {{$size->GPU_size}} mm</label>
                    <br>
                @endforeach
                <hr class="hr">
            <div class="przycisk-filtru">
                <input class="filtruj" type="submit" value={{__('Filtruj')}}>
            </div>
        </form>
@endsection


@section('content')
    @include('partials.emptyResults', ['collection' => $covers])
    @foreach($covers as $cover)

    <tr>
    <div rel="{{$cover->producent_id}}" class="lista-komponentow asd {{$cover->producent_id}} {{$cover->compability_id}} {{$cover->GPU_size}} {{$cover->type}}">
    <div class="card-komponent">
        <div class="grid-container">
            <div class="grid-item1">
                <div class="zoomimage">
                    <img src="{{$cover->zdj}}"class="zdjecie_produktu alignleft size-medium wp-image-7000">
                </div>
            </div>
            <div class="grid-item2">
                <a><h3 class="tytul-produktu"><b>{{$cover->name}}</b></h3> </a>
                <div class="cat-product-features">
                    <div class="cat-product-feature" title="#">
                        Producent:
                        <b>{{$cover->producent->name}}</b>
                    </div>
                    <div class="cat-product-feature" title="#">
                        Kompatybilność:
                        <b>{{$cover->compability->name}}</b>
                    </div>
                    <div class="cat-product-feature" title="#">
                        Długość karty graficznej:
                        <b>{{$cover->GPU_size}} mm</b>
                    </div>
                    <div class="cat-product-feature" title="#">
                        Typ obudowy:
                        <b>{{$cover->type}}</b>
                    </div>

                </div>
            </div>
            <div class="grid-item3">
                <div class="przycisk-produktu">

                <form class="wybor" action="{{url('/addCoverToCart')}}">
                    <input type="hidden" name="selected_cover" value="{{$cover->id}}">
                    @if(Session::get('cart')['cover'] == null)
                    <button type="submit" class="btn btn-danger" id="wybierz">Wybierz!</button>
                        @else
                        <button type="submit" class="btn btn-danger" id="wybierz">Zamień!</button>
                    <div style="padding-top:10px;">

                        <div class="napis_potwierdzenie">
                            <a style="color:red;"><strong>Uwaga!</strong> Koszyk zostanie wyczyszczony.</a>
                        </div>
                    </div>

                    @endif
                </form>

                </div>
            </div>
        </div>
    </div>
    </div>
    </tr>
    @endforeach


@endsection
