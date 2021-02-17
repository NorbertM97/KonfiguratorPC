@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dodawanie Płyty Głównej</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('adminMotherboardPostAdd')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nazwa</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="zdj">Zdjęcie</label>
                            <input type="file" class="form-control" name="zdj" accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <label for="slots">Ilość slotów pamięci ram</label>
                            <select class="form-control" name="slots" required>
                                <option>Wybierz...</option>
                                @for($i=2; $i<=8; $i=$i+2)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="type_of_item" value="motherboard" required>
                        </div>
                        <div class="form-group">
                            <label for="producent_id">Producent</label>
                            <select class="form-control" name="producent_id" required>
                                <option>Wybierz...</option>
                                @foreach($producents as $producent)
                                    <option value="{{$producent->producent->id}}">{{$producent->producent->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="compability_id">Kompatybilność</label>
                            <select class="form-control" name="compability_id" required>
                                <option>Wybierz...</option>
                                @foreach($compabilities as $compability)
                                    <option value="{{$compability->compability->id}}">{{$compability->compability->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="max_timing">Maksymalne taktowanie pamięci Ram</label>
                            <select class="form-control" name="max_timing" required>
                                <option>Wybierz...</option>
                                <option value="2133">2133 Mhz</option>
                                <option value="2400">2400 Mhz</option>
                                <option value="2666">2666 Mhz</option>
                                <option value="2800">2800 Mhz</option>
                                <option value="3000">3000 Mhz</option>
                                <option value="3200">3200 Mhz</option>
                                <option value="3300">3300 Mhz</option>
                                <option value="3400">3400 Mhz</option>
                                <option value="3466">3466 Mhz</option>
                                <option value="3600">3600 Mhz</option>
                                <option value="3733">3733 Mhz</option>
                                <option value="3866">3866 Mhz</option>
                                <option value="4000">4000 Mhz</option>
                                <option value="4266">4266 Mhz</option>
                                <option value="4400">4400 Mhz</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="socket_id">Gniazdo procesora(Socket)</label>
                            <select class="form-control" name="socket_id" required>
                                <option>Wybierz...</option>
                                @foreach($sockets as $socket)
                                    <option value="{{$socket->socket->id}}">{{$socket->socket->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary m-2 p-3 btn-md">Dodaj</button>
                        </div>

                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
