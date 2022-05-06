@extends('layouts.app')

@section('content')
  <div class="container-xxl">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4>Utenti registrati</h4>
          <h5>
            <a href="{{route('admin.home')}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg>
            </a>
          </h5>
        </div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            
            
            <table class="table">
              <thead> 
                <th>Id</th>
                <th>Nome</th> 
                <th>Email</th>
                <th>Creato il</th>
                <th></th>
              </thead> 
              
              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td> 
                    <td>{{$user->email}}</td> 
                    <td>{{$user->created_at}}</td>
                    <td><a class="btn btn-info text-light" href="{{route('admin.users.show',$user->id)}}">Guarda Profilo</a></td> 
                  </tr>
                @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection 