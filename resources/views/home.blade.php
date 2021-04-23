@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('home') }}" method="GET">
                        <div class="row m-1">
                            <div class="col-9 col-md-9">
                                <div class="form-group row">
                                    <select class="form-control selectpicker" 
                                            title="¿Qué estas buscando?"
                                            multiple="multiple"
                                            placeholder="¿Qué estas buscando?"
                                            name="subcategory[]">
                                            @foreach ($subcategories as $subcategory)
                                                <option data-tokens="Espresso">{{ $subcategory->name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-3 col-md-3">
                                <div class="form-group">
                                    <input type="submit" value="Buscar" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>

                    @foreach ($services as $service)
                        <div class="border rounded mb-2 p-4">
                            <div class="row">
                                <div class="col-3 col-md-3 mx-auto text-center">
                                    <img src="https://placeimg.com/60/60/animals" class="rounded-circle mr-autod" style="min-width: 10px;" alt="...">
                                </div>
                                
                                <div class="col-9 col-md-9">
                                    <table class="w-100">
                                        <tr>
                                            <td style="width: 50%;">
                                                <strong>Nombre:</strong> {{ $service->user->name }} <br>
                                            </td>
                                            <td style="width: 50%;">
                                                <strong>Categoria:</strong> {{ $service->category->name }} <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%;">
                                                <strong>Servicios:</strong>  {{ $service->services_categories }} &nbsp;&nbsp; <br>
                                            </td>
                                            <td style="width: 50%;">
                                                <strong>Calif.</strong> 🌕🌕🌕🌕🌚
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="d-flex justify-content-center">
                        {{ $services->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center py-3">
        <div class="container">
        <div class="text-dark font-weight-lighter">Hecho con 
            <svg xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" height="24" width="24" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/">
                <g transform="translate(0 -1028.4)">
                    <path d="m7 1031.4c-1.5355 0-3.0784 0.5-4.25 1.7-2.3431 2.4-2.2788 6.1 0 8.5l9.25 9.8 9.25-9.8c2.279-2.4 2.343-6.1 0-8.5-2.343-2.3-6.157-2.3-8.5 0l-0.75 0.8-0.75-0.8c-1.172-1.2-2.7145-1.7-4.25-1.7z" fill="#e74c3c"/>
                </g>
            </svg>
            por DavaDev.

            <br>
            <a href="#">
                {{ __('Publicar Servicio') }}
            </a>
        </div>
        </div>
    </footer>  
</div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>

        jQuery(document).ready(function($){
            $(document).ready(function() {
                $('.selectpicker').select2();
            });
        });

        const $selectCategory = document.getElementById("category");
        const $selectSubcategory = document.getElementById("subcategory");

        let request = new XMLHttpRequest();

        request.onload = function(){
            if(request.status === 200) {
                console.log(request);
            }else{
                console.log("error");
            }
        };

        request.open("GET", "https://rickandmortyapi.com/api", true);

        $selectCategory.addEventListener("change", () => {
            console.log("change");
            request.send();
        });
    </script>
@endsection
