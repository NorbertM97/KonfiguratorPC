@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dodawanie pamięci Ram</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('adminRamPostAdd')}}" method="post" enctype="multipart/form-data">
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
                            <input type="hidden" class="form-control" name="type_of_item" value="ram" required>
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
                            <label for="memory">Ilość pamięci Ram</label>
                            <select class="form-control" name="memory" required>
                                <option>Wybierz...</option>
                                @for($i = 2; $i<=128 ; $i=$i*2)
                                    <option value="{{$i}}">{{$i}} GB</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="latency">Opóźnienia (cycle latency)</label>
                            <input type="number" class="form-control"  name="latency" required>
                        </div>

                        <div class="form-group">
                            <label for="timing">Maksymalne taktowanie pamięci Ram</label>
                            <select class="form-control" name="timing" required>
                                <option>Wybierz...</option>
                                <option value="1333">1333 Mhz</option>
                                <option value="1600">1600 Mhz</option>
                                <option value="1866">1866 Mhz</option>
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
                                <option value="4133">4133 Mhz</option>
                                <option value="4266">4266 Mhz</option>
                                <option value="4400">4400 Mhz</option>
                                <option value="4600">4600 Mhz</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="typ">Rodzaj pamięci Ram</label>
                            <select class="form-control" name="typ" required>
                                <option>Wybierz...</option>
                                <option value="DDR3">DDR3</option>
                                <option value="DDR4">DDR4</option>
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
