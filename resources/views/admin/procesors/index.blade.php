@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            @include('partials.admin.menu')
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Procesory</div>
                <div class="col-md-12 p-2">
                    <a class="btn btn-success" href="{{route('adminProcesorsAdd')}}" role="button">Dodaj</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!empty($procesors))
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nazwa</th>
                            <th scope="col">Seria</th>
                            <th scope="col">Wątki</th>
                            <th scope="col">Ilość rdzeni</th>
                            <th scope="col">Pobór energii</th>
                            <th scope="col">Producent</th>
                            <th scope="col">Usuń</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($procesors as $procesor )
                                <tr>
                                    <th scope="row">{{$procesor->id}}</th>
                                    <td>{{$procesor->name}}</td>
                                    <td>{{$procesor->series}}</td>
                                    <td>{{$procesor->threats}}</td>
                                    <td>{{$procesor->cores}}</td>
                                    <td>{{$procesor->power}} W</td>
                                    <td>{{$procesor->producent->name}}</td>
                                    <td>
                                        <form action="{{route('adminProcesorsDelete')}}" method='POST'>
                                            @csrf
                                            <input type="hidden" name="id" value = {{$procesor->id}}>
                                            <button type="submit" class="btn btn-danger">X</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>


                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
