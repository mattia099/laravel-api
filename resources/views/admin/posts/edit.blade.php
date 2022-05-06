@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header"><h3>{{__('Modifica')}}</h3></div>

              <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              
                <form action="{{ route('admin.posts.update',$post) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="form-group mb-3">
                    <label for="title" class="form-label">Title*</label>
                    <input type="text" class="form-control @error ('title') is-invalid @enderror" name="title" id="title" value="{{ $post->title }}">
                    @error('title')
                      <div class="invalid-feedback">{{ $message }}</div>    
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="category_id">Categories</label>
                    <select class="form-control @error('category_id') is-invalid  @enderror" id="category_id" name="category_id">
                      <option value="">--Seleziona--</option>
                      @foreach ($categories as $category)
                        <option {{ old( 'category_id',optional($post->category)->id == $category->id ) ? 'selected' : '' }} value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                    @error('category_id')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <label class="d-block">Tags:</label>
                  <div class="form-group form-check form-check-inline ">
                  @foreach($tags as $index => $tag)
                    <input class="form-check-input" {{ $post->tags->contains($tag) ? 'checked' : '' }} type="checkbox" name="tags[{{$index}}]" id="tags-{{$tag->id}}" value="{{$tag->id}}">
                    <label class="form-check-label mr-4" for="{{$tag->id}}">{{ $tag->name }}</label>
                  @endforeach
                  @error('tags.{{$index}}')
                    <div class="text-danger d-block">{{ $message }}</div>
                  @enderror

                  </div>
                  
                  

                  <div class="form-group mb-3">
                    <label for="content" class="form-label">Content*</label>
                    <textarea class="form-control @error ('content') is-invalid @enderror" name="content" id="content">{{$post->content}}</textarea>
                    
                    @error('content')
                      <div class="invalid-feedback">{{ $message }}</div>    
                    @enderror
                  </div>
                  <div class="form-group mb-3">
                    <label for="published_at" class="form-label">Published at</label>
                    <input type="date" class="form-control" name="published_at" id="published_at" value="{{ Str::substr($post->published_at, 0, 10) }}">
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Salva</button>
                </form>
                
              </div>
          </div>
      </div>
  </div>
</div>
@endsection