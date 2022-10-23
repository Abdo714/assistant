
    @csrf
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Building Name</label>

        <div class="col-md-6">
            <input id="bu_name" type="text" class="form-control @error('bu_name') is-invalid @enderror" name="bu_name" value="{{ old('bu_name') }}" required autocomplete="bu_name" autofocus>

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
            <input id="rooms" type="text" class="form-control @error('rooms') is-invalid @enderror" name="rooms" value="{{ old('rooms') }}" required autocomplete="rooms" autofocus>

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
            <input id="bu_price" type="text" class="form-control @error('bu_price') is-invalid @enderror" name="bu_price" value="{{ old('bu_price') }}" required autocomplete="bu_price" autofocus>

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
            <select id="bu_rent"  class="form-control " name="bu_rent" >
                <option value="0">ForRent</option>
                <option value="1">Ownership</option>
            </select>
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
            <input id="bu_square" type="text" class="form-control @error('bu_square') is-invalid @enderror" name="bu_square" value="{{ old('bu_square') }}" required autocomplete="bu_square" autofocus>

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

            <select id="bu_type" class="form-control" name="bu_type" >
                <option value="0">Flat</option>
                <option value="1">Villa</option>
            </select>

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
            <input id="bu_meta" type="text" class="form-control @error('bu_meta') is-invalid @enderror" name="bu_meta" value="{{ old('bu_meta') }}" required autocomplete="bu_meta" autofocus>

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
            <textarea id="bu_small_dis" type="text" class="form-control @error('bu_small_dis') is-invalid @enderror" name="bu_small_dis" value="{{ old('bu_small_dis') }}" required autocomplete="bu_small_dis" autofocus>
            </textarea>
            @error('bu_small_dis')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Photo</label>

        <div class="col-md-6">
            <input type="file" id="img" class="form-control" name="img[]" multiple>
            @error('img')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">Langtude</label>

        <div class="col-md-6">
            <input id="bu_langtude" type="text" class="form-control @error('bu_langtude') is-invalid @enderror" name="bu_langtude" value="{{ old('bu_langtude') }}" required autocomplete="bu_langtude" autofocus>

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
            <input id="bu_latitude" type="text" class="form-control @error('bu_latitude') is-invalid @enderror" name="bu_latitude" value="{{ old('bu_latitude') }}" required autocomplete="bu_latitude" autofocus>

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
            <textarea id="bu_large_dis" type="text" class="form-control @error('bu_large_dis') is-invalid @enderror" name="bu_large_dis" value="{{ old('bu_large_dis') }}" required autocomplete="bu_large_dis" autofocus>
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
            <select id="bu_status"  class="form-control" name="bu_status">
                <option value="0">Free</option>
                <option value="1">Busy</option>
            </select>


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

