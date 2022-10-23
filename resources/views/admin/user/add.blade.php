@extends("admin.layouts.layout")

@section("content")
    <form method="POST" action="{{ url('/adminpanel/users/store') }}">
    @include("admin.user.form")
    </form>


@endsection

