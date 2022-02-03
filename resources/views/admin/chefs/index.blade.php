@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Барча Поврлар</span>
                        <a href="{{ route('admin/chefs/create') }}" class="btn btn-success"> Янги Яратиш</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#ID</th>
                                    <th scope="col">Nomi</th>
                                    <th scope="col">Kasbi</th>
                                    <th scope="col">Biografiyasi</th>
                                    <th scope="col" width="10%">Rasmi</th>
                                    <th scope="col">Amaliyotlar</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($chefs as $item)
                                    <tr>
                                        <th>{{ $item->id }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->job }}</td>
                                        <td>{{ $item->bio }}</td>
                                        <td>
                                            <img src="{{ $item->img }}" alt="" width="100%">
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <a href="{{ route('admin/chefs/edit', $item->id) }}" class="btn btn-primary">O`zgartirish</a>
                                                <form action="{{ route('admin/chefs/destroy', $item->id) }}" method="POST">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-danger">O`chirish</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $chefs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
