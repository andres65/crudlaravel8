@extends('layouts.app')

@section('template_title')
    Create Tb Role
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><strong>Crear Rol</strong></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tb-roles.index') }}"> Atrás</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tb-roles.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tb-role.form', ['formMode' => 'create'])

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
