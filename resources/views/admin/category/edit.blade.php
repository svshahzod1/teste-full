@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Барча Меню категориялари</span>
                        <a href="{{ route('admin/categories/index') }}" class="btn btn-outline-success"> Ортга</a>
                    </div>
                    <div class="card-body">
                        <form action="/admin/categories/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                            @csrf @method('PATCH')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomi</label>
                                <input class="form-control" name="name" value="{{ $item->name }}">
                            </div>
                            <div class="form-group">
                                <label for="">Izoh</label>
                                <textarea name="description" cols="30" rows="10" class="form-control">{{ $item->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 col-4 offset-8">Озгартириш</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
