@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Барча Овкатлар</span>
                        <a href="{{ route('admin/foods/create') }}" class="btn btn-success"> Янги Яратиш</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Narxi</th>
                                <th scope="col">Nomi</th>
                                <th scope="col">Retsepti</th>
                                <th scope="col">Kategoriyasi</th>
                                <th scope="col" width="10%">Rasmi</th>
                                <th scope="col">Amaliyotlar</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach($foods as $item)
                                    <tr>
                                        <th>{{ $item->id }}</th>
                                        <td>{{ $item->narxi }} $</td>
                                        <td>{{ $item->nomi }}</td>
                                        <td>{{ $item->retsept }}</td>
                                        <td>
                                            {{ $item->category->name }}
                                        </td>
                                        <td>
                                            <img src="{{ $item->image }}" width="100%" alt="">
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <a href="{{ route('admin/foods/edit', $item->id) }}" class="btn btn-primary">O`zgartirish</a>
                                                <form action="{{ route('admin/foods/destroy', $item->id) }}" method="POST">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-danger">O`chirish</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $foods->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection