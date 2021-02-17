@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            @include('partials.admin.menu')
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Płyty główne</div>
                <div class="col-md-12 p-2">
                    <a class="btn btn-success" href="{{route('adminMotherboardAdd')}}" role="button">Dodaj</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!empty($motherboards))
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nazwa</th>
                            <th scope="col">Sloty</th>
                            <th scope="col">Taktowanie Ram</th>
                            <th scope="col">Socket</th>
                            <th scope="col">Producent</th>
                            <th scope="col">Usuń</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($motherboards as $motherboard )
                                <tr>
                                    <th scope="row">{{$motherboard->id}}</th>
                                    <td>{{$motherboard->name}}</td>
                                    <td>{{$motherboard->slots}}</td>
                                    <td>{{$motherboard->max_timing}} Mhz</td>
                                    <td>{{$motherboard->socket->name}}</td>
                                    <td>{{$motherboard->producent->name}}</td>
                                    <td>
                                        <form action="{{route('adminMotherboardDelete')}}" method='POST'>
                                            @csrf
                                            <input type="hidden" name="id" value = {{$motherboard->id}}>
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
