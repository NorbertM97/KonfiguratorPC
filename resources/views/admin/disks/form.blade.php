@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dodawanie Dysku Twardego</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('adminDisksPostAdd')}}" method="post" enctype="multipart/form-data">
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
                            <input type="hidden" class="form-control" name="type_of_item" value="hdd" required>
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
                            <label for="capacity">Pojemnośc dysku (GB)</label>
                            <input type="number" class="form-control"  name="capacity" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Typ</label>
                            <select class="form-control" name="type" required>
                                <option>Wybierz...</option>
                                <option value="SSD">SSD</option>
                                <option value="HDD">HDD</option>
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
