@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            @include('partials.admin.menu')
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Pamięci RAM</div>
                <div class="col-md-12 p-2">
                    <a class="btn btn-success" href="{{route('adminRamAdd')}}" role="button">Dodaj</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!empty($rams))
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nazwa</th>
                            <th scope="col">Pamięć</th>
                            <th scope="col">Opóżnienie</th>
                            <th scope="col">Taktowanie Pamięci</th>
                            <th scope="col">Typ</th>
                            <th scope="col">Producent</th>
                            <th scope="col">Usuń</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rams as $ram )
                                <tr>
                                    <th scope="row">{{$ram->id}}</th>
                                    <td>{{$ram->name}}</td>
                                    <td>{{$ram->memory}} GB</td>
                                    <td>CL{{$ram->latency}}</td>
                                    <td>{{$ram->timing}} Mhz</td>
                                    <td>{{$ram->typ}}</td>
                                    <td>{{$ram->producent->name}}</td>
                                    <td>
                                        <form action="{{route('adminRamDelete')}}" method='POST'>
                                            @csrf
                                            <input type="hidden" name="id" value = {{$ram->id}}>
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
