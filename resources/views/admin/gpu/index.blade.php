@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            @include('partials.admin.menu')
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Karty graficzne</div>
                <div class="col-md-12 p-2">
                    <a class="btn btn-success" href="{{route('adminGpuAdd')}}" role="button">Dodaj</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!empty($gpus))
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nazwa</th>
                            <th scope="col">Seria</th>
                            <th scope="col">Pamięć</th>
                            <th scope="col">Długość GPU</th>
                            <th scope="col">Pobór energii</th>
                            <th scope="col">Producent</th>
                            <th scope="col">Usuń</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gpus as $gpu )
                                <tr>
                                    <th scope="row">{{$gpu->id}}</th>
                                    <td>{{$gpu->name}}</td>
                                    <td>{{$gpu->series}}</td>
                                    <td>{{$gpu->memory}} GB</td>
                                    <td>{{$gpu->size}} mm</td>
                                    <td>{{$gpu->power}} W</td>
                                    <td>{{$gpu->producent->name}}</td>
                                    <td>
                                        <form action="{{route('adminGpuDelete')}}" method='POST'>
                                            @csrf
                                            <input type="hidden" name="id" value = {{$gpu->id}}>
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
