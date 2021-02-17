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
                        <form action="{{url('firststep')}}">
                            <button class="powrot" type="submit"><img src="../images/casee.png" style="width:150px;height:150px;">
                                </img>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-8" style="padding-top:20px;">
                    <div class="napis">Krok 6: wybór dysku twardego</div>
                </div>
                <div class="col-sm-2">
                    <div class="koszyk">
                        <button class="powrot" title="Koszyk" type="submit"><img src="../images/ikona.png" style="width:150px;height:150px;" data-toggle="modal" data-target="#myModal">
                            </img>
                        </button>

                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header naglowek-modal">
                                        <h4 class="modal-title">Lista wybranych komponentów</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="float:left">
                                        <form>
                                            <table class="table table-hover">
                                                <tbody>
                                                @if(\Illuminate\Support\Facades\Session::has('cart'))

                                                        @foreach(Session::get('cart') as $item)
                                                            @if($item != null)
                                                                <tr>
                                                                    <td><img src="{{$item['zdj']}}" class="zdjecie_w_koszyku">{{$item['name']}}</td>
                                                                </tr>
                                                            @else

                                                            @endif
                                                        @endforeach

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
                        <img src="../images/dysk_twardy.jpg" style="width:220px;height:170px;">
                    </div>
                    <hr class="hr">
                    <div class="filtry">
                        <div class="head-filter">
                            <div class="head-filter-title">
                                Producent
                            </div>
                        </div>

                        @foreach($producents as $producent)
                            <label class="filter-checkbox">
                                {{$producent->name}}
                                <input class="filter" rel="{{$producent->name}}" name="checkbox" type="checkbox">
                                <span class="znaczek-filtru"></span>
                            </label>
                           @endforeach
                        <hr class="hr">

                        <div class="head-filter">
                            <div class="head-filter-title">
                                Pojemność
                            </div>
                        </div>

                        @foreach($capacitys as $capacity)
                            <label class="filter-checkbox">
                                {{$capacity->capacity}} GB
                                <input class="filter" rel="{{$capacity->capacity}}" name="checkbox" type="checkbox">
                                <span class="znaczek-filtru"></span>
                            </label>
                            @endforeach
                        <hr class="hr">

                        <div class="head-filter">
                            <div class="head-filter-title">
                                Typ dysku
                            </div>
                        </div>

                        @foreach($types as $type)
                            <label class="filter-checkbox">
                                {{$type->type}}
                                <input class="filter" rel="{{$type->type}}" name="checkbox" type="checkbox">
                                <span class="znaczek-filtru"></span>
                            </label>
                          @endforeach
                        <hr class="hr">
                        <div class="przycisk-filtru">
                            <input class="filtruj" type="submit" value={{__('Filtruj')}}>
                        </div>
                    </div>

                </aside>

                <div class="komponenty-right">


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
                                            <b>{{$hdd->producent_id}}</b>
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





                </div>
            </div>
        </div>
</main>

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
