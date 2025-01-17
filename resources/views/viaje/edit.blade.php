@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Viaje</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('viajes.update', $viaje->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('viaje.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
