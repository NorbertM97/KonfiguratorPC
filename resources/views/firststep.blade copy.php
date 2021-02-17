<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kompletowanie_podzespołów</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>

        .grid-item2 {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding:5px;
            min-width:290px;
        }
        @media (max-width:1300px) {
            .tytul-produktu {
                font-size: 22px;
                padding:5px;
                min-width: 290px;
            }
        }

    </style>
</head>

<!-- Strona główna-->

<body id="strona_główna">

<body background="../images/tło_układ_scalony.jpg" alt="układ_scalony" ></body>
<main class="main-content" id="main-content" role="main">


    <div class="container-fluid" id="start">
        <div class="komponenenty">
            <div class="row naglowek">
                <div class="col-sm-2 powrot_div">
                    <div class="powrot" title="Powrót do obudowy">
                        <form action="{{url('/')}}">
                            <button class="powrot" type="submit"><img src="../images/home.png" style="width:150px;height:150px;">
                                </img></button>
                        </form>

                    </div>
                </div>
                <div class="col-sm-8" style="padding-top:20px;">
                    <div class="napis">Krok 1: wybór obudowy</div>
                </div>
                <div class="col-sm-2">
                    <div class="koszyk">
                        <button class="powrot" title="Koszyk" type="submit"><img src="../images/ikona.png" style="width:150px;height:150px;" data-toggle="modal" data-target="#myModal">
                            </img>
                        </button>

                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header naglowek-modal">
                                        <h4 class="modal-title">Lista wybranych komponentów</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>



                                        <div class="modal-body" style="float: left">
                                            <form>
                                                <table class="table table-hover">
                                                    <tbody>
                                                    @if(\Illuminate\Support\Facades\Session::has('cart'))
                                                       @if(\Illuminate\Support\Facades\Session::get('cart')['cover'] != null)
                                                        @foreach(Session::get('cart') as $item)
                                                            @if($item != null)
                                                            <tr>
                                                                <td><img src="{{$item['zdj']}}" class="zdjecie_w_koszyku">{{$item['name']}}</td>
                                                            </tr>
                                                                @else

                                                            @endif
                                                        @endforeach
                                                           @else
                                                           Brak komponentów.
                                                           @endif
                                                    @endif

                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Zamknij</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="modal-backdrop" class="modal-backdrop-transparent modal-transition"></div>
                    </div>
                </div>
            </div>
            <div class="komponenty-row">
                <!-- <div class="tip">
                     <a> Aby uzyskać szczegółowych informacji na temat wyboru naciśnij</a>
                 </div>-->
                <aside class="komponenty-left">
                    <div class="ikona">
                        <img src="../images/obudowa.jpg" style="width:220px;height:170px;">
                    </div>
                    <hr class="hr">
                    <div class="filtry">
                        <div class="head-filter">
                            <div class="head-filter-title">
                                Producent
                            </div>
                        </div>
                        <form action="{{url()->current()}}" method="GET">

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




                    </div>

                    </form>

                </aside>

                <div class="komponenty-right">



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



                </div>

            </div>
        </div>


<script>
    $(document).ready(function(){
        $('input.filter').click(function(){
            $('div.asd').show();
            $('div.asd').filter(':not(.'+$(this).attr('rel')+')').hide();
        })
    });
</script>


</body>
</html>
