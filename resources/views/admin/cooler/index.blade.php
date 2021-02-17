@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            @include('partials.admin.menu')
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Zasilacze</div>
                <div class="col-md-12 p-2">
                    <a class="btn btn-success" href="{{route('adminCoolerAdd')}}" role="button">Dodaj</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!empty($coolers))
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nazwa</th>
                            <th scope="col">Moc</th>
                            <th scope="col">Certyfikat</th>
                            <th scope="col">Producent</th>
                            <th scope="col">Usuń</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($coolers as $cooler )
                                <tr>
                                    <th scope="row">{{$cooler->id}}</th>
                                    <td>{{$cooler->name}}</td>
                                    <td>{{$cooler->power}} W</td>
                                    <td>{{$cooler->certificate}}</td>
                                    <td>{{$cooler->producent->name}}</td>
                                    <td>
                                        <form action="{{route('adminCoolerDelete')}}" method='POST'>
                                            @csrf
                                            <input type="hidden" name="id" value = {{$cooler->id}}>
                                            <button type="submit" class="btn btn-danger">X</button>
                                        </form>
                                    </td>
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
