@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dodawanie Procesora</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('adminProcesorsPostAdd')}}" method="post" enctype="multipart/form-data">
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
                            <input type="hidden" class="form-control" name="type_of_item" value="cpu" required>
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
                            <label for="socket_id">Gniazdo procesora(Socket)</label>
                            <select class="form-control" name="socket_id" required>
                                <option>Wybierz...</option>
                                <option value="1">1151</option>
                                <option value="2">AM4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="series">Seria procesora</label>
                            <select class="form-control" name="series" required>
                                <option>Wybierz...</option>
                                <option value="i3">Intel Core i3</option>
                                <option value="i5">Intel Core i5</option>
                                <option value="i7">Intel Core i7</option>
                                <option value="i9">Intel Core i9</option>
                                <option value="Pentium">Intel Pentium</option>
                                <option value="Rayzen 9">AMD Ryzen 9</option>
                                <option value="Rayzen 7">AMD Ryzen 7</option>
                                <option value="Rayzen 5">AMD Ryzen 5</option>
                                <option value="Rayzen 3">AMD Ryzen 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cores">Ilość rdzeni w procesorze</label>
                            <select class="form-control" name="cores" required>
                                <option>Wybierz...</option>
                                @for($i = 2; $i<20 ; $i= $i+2)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="core_timing">Taktowanie procesora</label>
                            <select class="form-control" name="core_timing" required>
                                <option>Wybierz...</option>
                                <option value="2600">2600 Mhz</option>
                                <option value="2700">2700 Mhz</option>
                                <option value="2800">2800 Mhz</option>
                                <option value="2900">2900 Mhz</option>
                                <option value="3000">3000 Mhz</option>
                                <option value="3100">3100 Mhz</option>
                                <option value="3200">3200 Mhz</option>
                                <option value="3300">3300 Mhz</option>
                                <option value="3400">3400 Mhz</option>
                                <option value="3500">3500 Mhz</option>
                                <option value="3600">3600 Mhz</option>
                                <option value="3700">3700 Mhz</option>
                                <option value="3800">3800 Mhz</option>
                                <option value="3900">3900 Mhz</option>
                                <option value="4000">4000 Mhz</option>
                                <option value="4100">4100 Mhz</option>
                                <option value="4200">4200 Mhz</option>
                                <option value="4300">4300 Mhz</option>
                                <option value="4400">4400 Mhz</option>
                                <option value="4500">4500 Mhz</option>
                                <option value="4600">4600 Mhz</option>
                                <option value="4700">4700 Mhz</option>
                                <option value="4800">4800 Mhz</option>
                                <option value="4900">4900 Mhz</option>
                                <option value="5000">5000 Mhz</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="threats">Ilość wątków w procesorze</label>
                            <select class="form-control" name="threats" required>
                                <option>Wybierz...</option>
                                @for($i = 2; $i<=128 ; $i=$i*2)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="power">Maksymalny pobór energii (W)</label>
                            <input type="number" class="form-control"  name="power" required>
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
