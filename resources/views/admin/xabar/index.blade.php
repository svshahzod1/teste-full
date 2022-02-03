@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Барча Хабарлар</span>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Nomi</th>
                                <th scope="col">Pochtasi</th>
                                <th scope="col">Xabar</th>
                                <th scope="col">Mazmuni</th>
                                <th scope="col">Amaliyotlar</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach($messages as $item)
                                    <tr>
                                        <th>{{ $item->id }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->subject }}</td>
                                        <td>{{ $item->message }}</td>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <form action="{{ route('admin/xabar/destroy', $item->id) }}" method="POST">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-danger">O`chirish</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $messages->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection