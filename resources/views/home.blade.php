@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($services as $service)
                        <div class="row mb-4">
                            <div class="col-4 col-md-4">
                                <img src="https://placeimg.com/60/60/animals" class="rounded-circle card-img" style="min-width: 10px;" alt="...">
                                <br />
                            </div>
                            
                            <div class="col-8 col-md-8">
                                <strong>Nombre:</strong> {{ $service->user->name }} <br>
                                <strong>Categoria:</strong> {{ $service->category->name }} <br>
                                <strong>Servicios:</strong>  Carpintero, Albañil, Pintor<br>
                                <strong>Calif.</strong> 🌕🌕🌕🌕🌚
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
