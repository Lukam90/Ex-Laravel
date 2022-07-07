@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
   
                <div class="card-body">
                    <p>You are a manager.</p>

                    <p><a href="/">Home Link</a></p>

                    <p><a href="/user">Users Link</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection