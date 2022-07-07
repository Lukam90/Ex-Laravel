@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome Page</div>

                <div class="card-body">
                    @if ($message = Session::get("error"))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <p>This is the default page.</p>

                    <p><a href="/user">Users Link</a></p>

                    <p><a href="/manager">Managers Link</a></p>
                    
                    <p><a href="/admin">Admin Link</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
