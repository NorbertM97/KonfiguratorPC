<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=0.9">

    <title>Kompletowanie_podzespołów</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style_last.css">
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
                        <form action="{{url('/')}}">
                            <button class="powrot" type="submit"><img src="../images/casee.png" style="width:150px;height:150px;">
                                </img>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-8" style="padding-top:20px;">
                    <div class="napis">Podsumowanie</div>
                </div>
                <div class="col-sm-2">
                    <div class="pdf">
                        <button class="powrot" title="Wygeneruj PDF" type="submit"><a href="{{route('item.printpdf')}}"><img src="../images/pdf.png" style="width:150px;height:150px;">
                                </img> </a>
                        </button>

                    </div>
                </div>
            </div>
            <div class="komponenty-row">
                <!-- <div class="tip">
                     <a> Aby uzyskać szczegółowych informacji na temat wyboru naciśnij</a>
                 </div>-->

                <div class="komponenty-right">

                    @foreach($totalCart as $item)
                    <div class="lista-komponentow">
                        <div class="card-komponent">
                            <div class="grid-container">
                                <div class="grid-item1 zoomimage">
                                    <img src="{{$item['photo']}}" class="zdjecie_produktu">
                                </div>
                                <div class="grid-item2">
                                    <a><h3 class="tytul-produktu"><b>{{$item['name']}}</b></h3></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
</main>
</body>
</html>
