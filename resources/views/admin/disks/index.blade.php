@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            @include('partials.admin.menu')
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dyski twarde</div>
                <div class="col-md-12 p-2">
                    <a class="btn btn-success" href="{{route('adminDisksAdd')}}" role="button">Dodaj</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!empty($disks))
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nazwa</th>
                            <th scope="col">Pojemność</th>
                            <th scope="col">Typ</th>
                            <th scope="col">Producent</th>
                            <th scope="col">Usuń</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($disks as $disk )
                                <tr>
                                    <th scope="row">{{$disk->id}}</th>
                                    <td>{{$disk->name}}</td>
                                    <td>{{$disk->capacity}} GB</td>
                                    <td>{{$disk->type}}</td>
                                    <td>{{$disk->producent->name}}</td>
                                    <td>
                                        <form action="{{route('adminDisksDelete')}}" method='POST'>
                                            @csrf
                                            <input type="hidden" name="id" value = {{$disk->id}}>
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
