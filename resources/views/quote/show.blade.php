@extends('layouts.app')

@section('template_title')
    {{ $quote->name ?? 'Show Quote' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <div class="float-left">
                            <span class="card-title">Show Quote</span>
                        </div> --}}
                        <div class="float-right">
                            <a class="btn btn-primary" style="background-color:#F8A488; border:0;" href="{{ route('quotes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group mb-3">
                            <h5>FRASE:</h5>
                            {{ $quote->prhase }}
                        </div>
                        <div class="form-group mb-3">
                            <h5>AUTOR:</h5>
                            {{ $quote->author }}
                        </div>
                        <div class="form-group mb-3">
                            <h5>IMAGEN:</h5>
                            <img class="w-100" src= {{ $quote->img }}>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
