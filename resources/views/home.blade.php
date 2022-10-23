@extends('layouts.app')

@section('content')
    <div class="banner text-center">
        <div class="container">
            <div class="banner-info">
                <h1> welcome {{getsetting()}}</h1>


                                        <form method="get" action="{{ url('search') }}">
                                            <ul class="list-unstyled categories-list">
                                                <li>
                                                    <input id="bu_price" type="text" class="form-control " name="bu_price" value="" placeholder="Enter price" style="width: 150px; display: inline-block">

                                                </li><br>
                                                <li>
                                                    <input id="rooms" type="text" class="form-control " name="rooms" value="" placeholder="Enter number of rooms" style="width: 150px; display: inline-block">

                                                </li><br>
                                                <li>
                                                    <select id="bu_rent"  class="form-control " name="bu_rent" style="width: 150px; display: inline-block">
                                                        <option value=""></option>
                                                        <option value="0">ForRent</option>
                                                        <option value="1">Ownership</option>
                                                    </select>
                                                </li><br>
                                                <li>
                                                    <select id="bu_type" class="form-control" name="bu_type" style="width: 150px; display: inline-block">
                                                        <option value=""></option>
                                                        <option value="0">Flat</option>
                                                        <option value="1">Villa</option>
                                                    </select>
                                                </li><br>
                                                <li>
                                                    <select id="bu_status"  class="form-control" name="bu_status"style="width: 150px; display: inline-block">
                                                        <option value=""></option>
                                                        <option value="0">Free</option>
                                                        <option value="1">Busy</option>
                                                    </select>
                                                </li><br>
                                                <li>
                                                    <input id="bu_square" type="text" class="form-control " name="bu_square" value="" placeholder="Enter Square" style="width: 150px; display: inline-block" >

                                                </li><br>
                                                <li>
                                                    <button type="submit" class="btn btn-primary" style="display: inline-block">
                                                        Search
                                                    </button>
                                                </li>




                                            </ul>
                                        </form>


                <a class="banner_btn" href="{{url("/showall")}}">Read More</a> </div>
        </div>
    </div>

        <div class="content_white">

            <div class="row">

                @foreach($bu as $b)
                    <div class=" col-lg-3 ">
                        <div class="card">
                            <div class="card-content">

                                @foreach(unserialize($b->img) as $image)
                                    <img class="card-img-top img-fluid" src="{{asset($image)}}" alt="Card image cap">
                                @endforeach
                                <div class="card-body">
                                    <h4 class="card-title">{{$b->bu_name}}</h4>
                                    <h5 class="card-title">{{$b->bu_price}}</h5>
                                    <p class="card-text">{{$b->bu_small_dis}}</p>
                                    <a href="{{url("/singlebu/".$b->id)}}" class="btn btn-outline-primary waves-effect waves-light">show more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>






        </div>
@endsection
