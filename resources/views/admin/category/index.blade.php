@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Category

                </div>
                

                <div class="card-body">
                      {{--@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif--}}


                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Sl no</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php ($i = 1)
                      
                       
                        
                
                        <tr>
                        <th scope="row">{{$i++}}</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>

                       

                            
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Add Category

                </div>
                

                <div class="card-body">
                      {{--@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif--}}
                    <form action="{{route('store.category')}}" method="POST">
                     @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Add Category</label>
                          <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" id="exampleInputEmail1" 
                          aria-describedby="emailHelp" placeholder="Enter Category">
                            
                          @error('category_name')
                          <span class="text-danger">{{$message}}</span>
                          @enderror  
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Add</button>
                      </form>

            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection