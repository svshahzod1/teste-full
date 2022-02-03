@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Барча Меню категориялари</span>
                        <!-- <a href="/admin/categories/create" class="btn btn-success"> Янги Яратиш</a> -->
                        <a href="{{ route('admin/categories/create') }}" class="btn btn-success"> Янги Яратиш</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Nomi</th>
                                <th scope="col">Izoh</th>
                                <th scope="col">Taomlari</th>
                                <th scope="col">Amaliyotlar</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach($categories as $item)
                                    <tr>
                                        <th>{{ $item->id }}</th>
                                        <td>{{ $item->niceName() }}</td>
                                        <td>{{ $item->description }}</td>
                                        <th>
                                            @foreach($item->food as $food)
                                                {{ $food->nomi }} </br>
                                            @endforeach
                                        </th>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <a href="{{ route('admin/categories/edit', $item->id) }}" class="btn btn-primary">O`zgartirish</a>
                                                <form action="{{ route('admin/categories/destroy', $item->id) }}" method="POST">
                                                @csrf @method('DELETE')
                                                    <button class="btn btn-danger">O`chirish</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
