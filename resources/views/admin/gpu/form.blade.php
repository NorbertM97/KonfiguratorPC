@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dodawanie Karty Graficznej</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('adminGpuPostAdd')}}" method="post" enctype="multipart/form-data">
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
                            <input type="hidden" class="form-control" name="type_of_item" value="gpu" required>
                        </div>
                        <div class="form-group">
                            <label for="series">Seria karty graficznej (RTX 2080 = 2080)</label>
                            <input type="number" class="form-control"  name="series" required>
                        </div>
                        <div class="form-group">
                            <label for="size">Długość karty graficznej (mm)</label>
                            <input type="number" class="form-control"  name="size" required>
                        </div>
                        <div class="form-group">
                            <label for="power">Maksymalny pobór energii (W)</label>
                            <input type="number" class="form-control"  name="power" required>
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
                            <label for="memory">Ilość pamięci karty graficznej (GB)</label>
                            <input type="number" class="form-control"  name="memory" required>
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
