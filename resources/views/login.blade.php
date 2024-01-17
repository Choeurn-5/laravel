@extends('layout.master')

@section('content')
<div class="row mt-5 justify-content-center">
    
    <div class="col-md-4">
        <h1 class="mb-4">Login</h1>
        @if($errors->any())
        @foreach ($errors->all() as $error )
        <div class="alert alert-danger">{{ $error }}</div>
            
        @endforeach
            
        @endif
        <div class="card">
            <div class="card-body">
                
                <form action="{{ route('login.submit') }}" method="POST"> 
                    @csrf
                    <div class="mb-2">
                        <label for="" class="form-label">User Name </label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>

                    <div class="mb-2">
                        <label for="" class="form-label">User Email </label>
                        <input type="email" name="email" id="" class="form-control">
                    </div>

                    <div class="mb-2">
                        <label for="" class="form-label">User Password </label>
                        <input type="password" name="password" id="" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary"> Submit </button>
                </form>
            </div>
        </div> 
    </div>
</div>


@endsection