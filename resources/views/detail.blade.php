@extends('template')

@section('content')
<nav class="ms-3" style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb pt-3 mb-2" style=" font-size: 20px;">
      <li class="breadcrumb-item"><a href="/"> <img src="{{asset('storage/images/home.png')}}" alt="Noimage" style="width: 30px"></a></li>
      <li class="breadcrumb-item">{{$Book->Author->name}}</li>
      <li class="breadcrumb-item active" aria-current="page">{{$Book->name}}</li>
    </ol>
  </nav>
  <div class="pb-5">

      <div class="d-flex flex-row justify-content-around mt-3">
          <img src="{{asset('storage/images/'.$Book->name.'.jpg')}}" style="height: 50vh; width: fit-content" class="card-img img-fluid ms-3 me-3" alt="...">
          <div class="d-flex flex-column">
              <h2 class="mt-3 mb-3">{{$Book->name}}</h2>
              <h5>By {{$Book->Author->name}}</h5>
              <h5>Description:</h5>
              <p>{{$Book->desc}}</p>
            </div>
        </div>
        <div class="card d-flex justify-content-center mt-5 mb-5" style="width: 98vw; height: initial; box-shadow: rgba(115, 115, 115, 0.476) 0 5px">
            <div class="card-body">
                <h4>Buy {{$Book->name}}</h4>
                <div class="card-img-overlay" style="width: 500px; height: 50px fit-content; margin: 0 80vw">
                    {{-- <form action="/add/{{$Game->id}}" method="POST"> --}}
                        <button class="btn btn-lg btn-dark text-white mt-4" style="width: fit-content" type="submit">Rp. {{$Book->price}}  |  <img class="ms-2 me-2" src="{{ asset('storage/images/cart.png')}}" style="width: 25px" alt="">  ADD TO CART</button>
                        
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
            
        </div>
@endsection