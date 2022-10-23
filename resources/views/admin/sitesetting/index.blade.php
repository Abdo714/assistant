@extends("admin.layouts.layout")

@section("content")
    {{getsetting("facebook")}}
    <form method="get" action="{{ url('/adminpanel/sitesetting/manage') }}">
        {{csrf_field()}}

    @foreach($sitesetting as $setting)

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{$setting->slug}}</label>

            <div class="col-md-6">
                <input id="{{$setting->namesetting}}" type="text" class="form-control @error('value') is-invalid @enderror" name="{{$setting->namesetting}}" value="{{ $setting->value }}" >
            </div>
        </div>
    @endforeach

        <button type="submit" class="btn btn-primary" style="margin-left: 50%;">
            Save
        </button>
    </form>


@endsection

