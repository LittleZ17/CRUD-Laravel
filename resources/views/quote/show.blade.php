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
                        <div class="float-left">
                            <span class="card-title">Show Quote</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('quotes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Prhase:</strong>
                            {{ $quote->prhase }}
                        </div>
                        <div class="form-group">
                            <strong>Author:</strong>
                            {{ $quote->author }}
                        </div>
                        <div class="form-group">
                            <strong>Img:</strong>
                            <img src= {{ $quote->img }}>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
