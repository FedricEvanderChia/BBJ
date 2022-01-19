@extends('template')

@section('content')

<h1 class="mb-3 pt-5">Manage Books</h1>
<h6 class="mb-3">Filter by Games Name</h6>
    <form class="card-body" action="/manage/search" method="GET">
        @csrf
            <input type="search" style="width: 20vw;" class="form-control" placeholder="Game Name" name="name">
    </form>

<a href="/insert" class="btn btn-lg btn-light mt-3" style="width: fit-content" >Insert New Games</a>

        <div class="row d-flex justify-content-around align-items-center">
            @if (!$games->isEmpty())
            @foreach ($games as $Game)
        <div class="col mb-5">
            <div class="card bg-dark mt-5" style="width:fit-content;">
                <a href="/Detail/{{$Game->id}}" class="text-dark">
                    <img src="{{asset('storage/images/'.$Game->title.'.jpg')}}"  class="card-img img-fluid" style="width:22vw;" alt="...">
                    <div class="card-img-overlay" style="background-color: hsla(0, 0%, 100%, 0.285)">
                        <div class="card-img-overlay ms-2" style="width: fit-content; height: fit-content; background-color: hsla(0, 0%, 100%, 0.8); margin-top: 85pt">
                            <h5 class="card-title">{{$Game->title}}</h5>
                            <p class="card-text">{{$Game->Genre->genre}}</p>
                        </div>
                    </div>
                </a>
            </div> 
            <form action="/manage/update/{{$Game->id}}" method="GET">
                <button class="btn btn-lg btn-light mt-1 d-flex" style="width: 22vw" type="submit"><img class="ms-2 me-2" src="{{ asset('storage/images/update.png')}}" style="width: 25px" alt="">  Update</button>
            </form>
            <button class="btn btn-lg btn-light mt-1 d-flex" style="width: 22vw" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal"><img class="ms-2 me-2" src="{{ asset('storage/images/delete.png')}}" style="width: 25px" alt="">  Delete</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header d-flex">
                        <h5 class="modal-title" id="exampleModalLabel">Delete {{$Game->title}}</h5>
                    </div>
                    <div class="modal-body">
                      <p>Are you sure you want to delete this game? all of your data will be permanently removed from our servers forever. This action cannot be undone.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{ url()->current().'/'.$Game->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
           
        </div>
        @endforeach
        @else
        <p class="mt-5" style="font-size: 20px">There are no games content can be showed right now</p>
        @endif
        <div style="width: 100%; height: 10vh">
            <div class="pagination d-flex justify-content-center align-items-center">
                {{$games->withQueryString()->links()}}
            </div>
        </div>
        </div>
@endsection