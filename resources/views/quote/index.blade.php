@extends('layouts.app')

@section('template_title')
    Quote
@endsection

@section('content')
    <div class="container-fluid">
       
            <div class="col-sm-12">
                {{-- SLIDER VA AQUI!! --}}
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://images.pexels.com/photos/5874593/pexels-photo-5874593.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/255379/pexels-photo-255379.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/13371882/pexels-photo-13371882.jpeg?auto=compress&cs=tinysrgb&w=1600
                        " class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin:10px">

                            <span id="card_title">
                                {{ __('Quote') }}
                            </span>
                            @role('admin')
                            <div class="float-right">
                                <a href="{{ route('quotes.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                            @endrole
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                       
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="col"> 
                            @foreach ($quotes as $quote)
                                <div class="bg-image card shadow-1-strong " 
                                    style="background-image: url({{ $quote->img}}); 
                                        backdrop-filter: blur(0px);
                                        background-color: rgba(203,193,209,0.3);}">
                                    <div class="card-body text-white " >
                                        <h5 class="card-title">{{ $quote->prhase }}</h5>
                                        <p class="card-text ">
                                            {{ $quote->author }}
                                        </p>
                                        <div>
                                                <form action="....." method="POST">
                                                    <button type="submit" class="btn btn-sm" style="background-color: rgba(90, 168, 151, 1);>
                                                    <i class="fa fa-fw fa-trash"></i> Añadir a Favoritos</button>
                                                </form>
                                            @role('admin')
                                                <form action="{{ route('quotes.destroy', $quote->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('quotes.show', $quote->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('quotes.edit', $quote->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            @endrole
                                        </div>
                                    </div>
                                </div>    
                            @endforeach
                        </div>
                    </div>
                </div>
                {!! $quotes->links() !!}
            </div>
        </div>
    </div>
@endsection
