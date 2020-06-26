@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  -->
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
                            @php ($i=1);
                        @foreach ($users as $user)
                       
                        
                
                        <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        </tr>

                        @endforeach

                            
                        </tbody>
                    </table>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection