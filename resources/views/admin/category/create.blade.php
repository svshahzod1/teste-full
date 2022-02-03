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
                        <form action="/admin/categories/store" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="">Nomi</label>
                                <input class="form-control my-2" name="name">
                            </div>
                            <div class="form-group">
                                <label for="">Izoh</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control my-2"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 col-4 offset-8">Yaratish</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
