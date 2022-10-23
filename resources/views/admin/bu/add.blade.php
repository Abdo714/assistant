@extends("admin.layouts.layout")

@section("content")
    <form  action="{{ url('/adminpanel/bu/store') }}" method="post" enctype="multipart/form-data">
    @include("admin.bu.form")
    </form>


@endsection

