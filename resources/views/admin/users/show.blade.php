@extends('layouts.app')

@section('content')
  <div class="container-xxl">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4>#{{$user->id}} {{$user->name}}</h4>
          <h5>
            <a href="{{route('admin.users.index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg>
            </a>
          </h5>
        </div>

        <div class="card-body d-flex justify-content-center">
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif

          <div class="card" style="width: 18rem;">
            <img src="{{$user->image}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$user->name}}</h5>
               <p class="card-text">{{$user->bio}}</p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Email: {{$user->email}}</li>
                <li class="list-group-item">Creato il: {{$user->created_at}}</li>
                <li class="list-group-item">Ultima modifica: {{$user->updated_at}}</li>
              </ul>
            </div>
          </div>  
            
            
        </div>
      </div>
    </div>
  </div>
</div>
@endsection 