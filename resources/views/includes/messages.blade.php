@if($errors = \Illuminate\Support\Facades\Session::get('errors'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
            @foreach($errors->messages() as $error)
                @foreach($error as $message)
                <div class="alert alert-danger alert-dismissible fade show d-flex justify-content-between" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" style="border: none; font-size: 15px;" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endforeach
            @endforeach
            </div>
        </div>
    </div>        
@endif

@if($message = Session::get('msg'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="alert alert-danger alert-dismissible fade show d-flex justify-content-between" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button"  style="border: none; font-size: 15px;" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div> 
@endif

@if($message = Session::get('success'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button"  style="border: none; font-size: 15px;" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div> 
@endif