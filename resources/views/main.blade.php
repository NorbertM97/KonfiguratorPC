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

@yield('section')
    <div class="container-fluid" id="start">
        <div class="komponenenty">
            <div class="row naglowek">
                <div class="col-sm-2 powrot_div">
                    <div class="powrot" title="Powrót do obudowy">
                        <form action="{{url('/')}}">
                            <button class="powrot" type="submit"><img src="../images/casee.png" style="width:150px;height:150px;">
                                </img></button>
                        </form>

                    </div>
                </div>
                <div class="col-sm-8" style="padding-top:20px;">
                    <div class="napis">@yield('krok')</div>
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
                                                    @if(Cart::count() > 0)

                                                        @foreach(Cart::content() as $item)
                                                            @if($item != null)
                                                            <tr>
                                                                <td><img src="{{$item->options->photo}}" class="zdjecie_w_koszyku">{{$item->options->name}}</td>
                                                            </tr>
                                                                @else

                                                            @endif
                                                        @endforeach

                                                    @else
                                                    Brak komponentów.

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
                        <img src="@yield('zdjecie_komponentu')" style="width:220px;height:170px;">
                    </div>
                    <hr class="hr">
                    <div class="filtry">

                        @yield('filtry')

                    </div>



                </aside>

                <div class="komponenty-right">

                    @yield('content')

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
