@extends('layouts.app')

@section('content')
    <div class="row " >
    <div class=" col-lg-3" >
        <div class="card">
            <div class="card-body">
                <div class="multi-range-price">

                <div id="product-categories">
                    <div class="product-category-title">
                        <h6 class="filter-title mb-1">Advanced search </h6>
                    </div>
                    <form method="get" action="{{ url('search') }}">
                    <ul class="list-unstyled categories-list">
                        <li>
                            <input id="bu_price" type="text" class="form-control " name="bu_price" value="" placeholder="Enter price">

                        </li><br>
                        <li>
                            <input id="rooms" type="text" class="form-control " name="rooms" value="" placeholder="Enter number of rooms">

                        </li><br>
                        <li>
                            <select id="bu_rent"  class="form-control " name="bu_rent" >
                                <option value=""></option>
                                <option value="0">ForRent</option>
                                <option value="1">Ownership</option>
                            </select>
                        </li><br>
                        <li>
                            <select id="bu_type" class="form-control" name="bu_type" >
                                <option value=""></option>
                                <option value="0">Flat</option>
                                <option value="1">Villa</option>
                            </select>
                        </li><br>
                        <li>
                            <select id="bu_status"  class="form-control" name="bu_status">
                                <option value=""></option>
                                <option value="0">Free</option>
                                <option value="1">Busy</option>
                            </select>
                        </li><br>
                        <li>
                            <input id="bu_square" type="text" class="form-control " name="bu_square" value="" placeholder="Enter Square">

                        </li><br>
                        <li>
                            <button type="submit" class="btn btn-primary" style="margin-left: 180px;">
                                Search
                            </button>
                        </li>




                    </ul>
                    </form>
                </div>

            </div>
        </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="multi-range-price">

                    <div id="product-categories">
                        <div class="product-category-title">
                            <h6 class="filter-title mb-1">Categories</h6>
                        </div>
                        <ul class="list-unstyled categories-list">

                            <li>
                                <a class="nav-link" href="{{ url("/showall")}}"> All </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ url("/villa")}}"> villa </a>
                            </li>

                            <li>
                                <a class="nav-link" href="{{ url("/flat")}}"> flat </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ url("/forrent")}}"> For Rent </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ url("/ownership")}}"> Ownership </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ url("/free")}}"> Free </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ url("busy")}}"> Busy </a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
  </div>
    <div class="col-lg-9"  >
        <nav aria-label="breadcrumb " style="">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url("/")}}">Home</a></li>
              @if(isset($array))
                @foreach($array as $key=>$value)
                    @if($key=="bu_price")
                <li class="breadcrumb-item"><a href="{{url("/search?".$key."=".$value)}}">{{"Price ->".$value}}</a></li>
                        @elseif($key=="bu_rent")
                            @if($value == 0)
                            <li class="breadcrumb-item"><a href="{{url("/search?".$key."=".$value)}}">{{"Rent -> For Rent "}}</a></li>
                            @else
                                <li class="breadcrumb-item"><a href="{{url("/search?".$key."=".$value)}}">{{"Rent -> Ownership"}}</a></li>
                            @endif
                        @elseif($key=="bu_type")

                            @if( $value == 0)
                                <li class="breadcrumb-item"><a href="{{url("/search?".$key."=".$value)}}">{{"Type -> Flat "}}</a></li>
                            @else
                                <li class="breadcrumb-item"><a href="{{url("/search?".$key."=".$value)}}}">{{"Type -> Villa"}}</a></li>
                            @endif
                        @elseif($key=="bu_status")

                            @if( $value == 0)
                                <li class="breadcrumb-item"><a href="{{url("/search?".$key."=".$value)}}">{{"Status -> Free "}}</a></li>
                            @else
                                <li class="breadcrumb-item"><a href="{{url("/search?".$key."=".$value)}}">{{"Status -> Busy"}}</a></li>
                            @endif
                        @elseif($key=="bu_square")
                                    <li class="breadcrumb-item"><a href="{{url("/search?".$key."=".$value)}}">{{"Square ->".$value}}</a></li>
                              @else
                            <li class="breadcrumb-item"><a href="{{url("/search?".$key."=".$value)}}">{{"Rooms ->".$value}}</a></li>

                        @endif
                @endforeach
                @endif
            </ol>
        </nav>
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
