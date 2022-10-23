@extends("admin.layouts.layout")

@section("content")
    <form method="get" action="{{ url('/adminpanel/bu/update') }}">

        @csrf
        <input id="id" type="text" class="form-control" name="id" value="{{ $bu->id}}" hidden>


        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Building Name</label>

            <div class="col-md-6">
                <input id="bu_name" type="text" class="form-control @error('bu_name') is-invalid @enderror" name="bu_name" value="{{ $bu->bu_name}}" required autocomplete="bu_name" autofocus>

                @error('bu_name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Building Rooms</label>

            <div class="col-md-6">
                <input id="rooms" type="text" class="form-control @error('rooms') is-invalid @enderror" name="rooms" value="{{ $bu->rooms}}" required autocomplete="rooms" autofocus>

                @error('rooms')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Building Price</label>

            <div class="col-md-6">
                <input id="bu_price" type="text" class="form-control @error('bu_price') is-invalid @enderror" name="bu_price" value="{{ $bu->bu_price}}" required autocomplete="bu_price" autofocus>

                @error('bu_price')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Building Rent</label>

            <div class="col-md-6">
                <input id="bu_rent" type="text" class="form-control @error('bu_rent') is-invalid @enderror" name="bu_rent" value="{{ $bu->bu_rent}}" required autocomplete="bu_rent" autofocus>

                @error('bu_rent')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Building Square</label>

            <div class="col-md-6">
                <input id="bu_square" type="text" class="form-control @error('bu_square') is-invalid @enderror" name="bu_square" value="{{ $bu->bu_square}}" required autocomplete="bu_square" autofocus>

                @error('bu_square')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Building Type</label>

            <div class="col-md-6">
                <input id="bu_type" type="text" class="form-control @error('bu_type') is-invalid @enderror" name="bu_type" value="{{ $bu->bu_type}}" required autocomplete="bu_type" autofocus>

                @error('bu_type')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Meta</label>

            <div class="col-md-6">
                <input id="bu_meta" type="text" class="form-control @error('bu_meta') is-invalid @enderror" name="bu_meta" value="{{ $bu->bu_meta}}" required autocomplete="bu_meta" autofocus>

                @error('bu_meta')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Small Discrbtion</label>

            <div class="col-md-6">
            <textarea id="bu_small_dis" type="text" class="form-control @error('bu_small_dis') is-invalid @enderror" name="bu_small_dis" value="{{ $bu->bu_small_dis}}" required autocomplete="bu_small_dis" autofocus>
           {{ $bu->bu_small_dis}}
            </textarea>
                @error('bu_small_dis')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Langtude</label>

            <div class="col-md-6">
                <input id="bu_langtude" type="text" class="form-control @error('bu_langtude') is-invalid @enderror" name="bu_langtude" value="{{ $bu->bu_langtude }}" required autocomplete="bu_langtude" autofocus>

                @error('bu_langtude')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Latitude</label>

            <div class="col-md-6">
                <input id="bu_latitude" type="text" class="form-control @error('bu_latitude') is-invalid @enderror" name="bu_latitude" value="{{ $bu->bu_latitude }}" required autocomplete="bu_latitude" autofocus>

                @error('bu_latitude')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Large Discrbtion</label>

            <div class="col-md-6">
            <textarea id="bu_large_dis" type="text" class="form-control @error('bu_large_dis') is-invalid @enderror" name="bu_large_dis" value="{{ $bu->bu_large_dis }}" required autocomplete="bu_large_dis" autofocus>
           {{ $bu->bu_large_dis }}
            </textarea>
                @error('bu_large_dis')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Statuse</label>

            <div class="col-md-6">
                <input id="bu_status" type="text" class="form-control @error('bu_status') is-invalid @enderror" name="bu_status" value="{{ $bu->bu_status }}" required autocomplete="bu_status" autofocus>

                @error('bu_status')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>







        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>


    </form>


@endsection
