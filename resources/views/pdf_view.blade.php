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

</head>
<body>
<h1 style="text-align: center;">List of selected components</h1>

    <table width="100%" style="width:100%;padding-left:10px;padding-top:40px;" border="1">
    <tr>
        <td class="tabela_1" style="padding-left:10px;">Type</td>
        <td class="tabela_1" style="padding-left:10px;">Title</td>
    </tr>

        @foreach(Cart::content() as $item)

            <tr>
                <td style="padding-left:20px;text-transform: capitalize;"><a>{{$item->options->type}}</a></td>
                <td style="text-align: left;padding-left:20px; text-transform: capitalize;">{{$item->options->name}}</td>
            </tr>

    @endforeach

    </table>
</body>
</body>
</html>
