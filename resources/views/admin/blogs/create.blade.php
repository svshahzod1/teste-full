@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Барча Овкатлар</span>
                        <a href="{{ route('admin/blogs/index') }}" class="btn btn-success"> Ортга</a>
                    </div>
                    <div class="card-body">
                        <form action="/admin/blogs/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Sana</label>
                                <input type="text" name="date" class="form-control my-2" placeholder="Avgust 12, 2021 (mana shunday ko`rinishda)">
                            </div>
                            <div class="form-group">
                                <label for="">Muallif</label>
                                <input type="text" name="author" class="form-control my-2">
                            </div>
                            <div class="form-group">
                                <label for="">Qisqacha</label>
                                <textarea name="short" class="form-control my-2" id="" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Rasmi</label>
                                <input type="file" name="image" class="form-control my-2">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 col-4 offset-8">Yaratish</button>
                        </form>                          
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection