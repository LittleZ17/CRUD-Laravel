@extends('layouts.app')

@section('template_title')
    Quote
@endsection

@section('content')
    <div class="container-fluid">

        <div class="col-sm-12 row justify-content-center">
            <div id="carouselExample" class="carousel slide w-75 mb-5">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <img src="https://images.pexels.com/photos/5874593/pexels-photo-5874593.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                            class="d-block w-100 rounded" style="height: 200px" alt="carrousel image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/255379/pexels-photo-255379.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                            class="d-block w-100 rounded" style="height: 200px" alt="carrousel image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/13371882/pexels-photo-13371882.jpeg?auto=compress&cs=tinysrgb&w=1600"
                            class="d-block w-100 rounded" style="height: 200px" alt="carrousel image 3">
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

            <div class="card w-100 mb-5 border-0">
                <div class="card-header bg-white border-0">
                        @role('admin')
                            <div class="d-flex flex-row-reverse">
                                <a href="{{ route('quotes.create') }}" class="btn btn-primary btn-lg" style="background-color:#F8A488; border:0;"
                                    data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        @endrole
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <div class="col">
                            @foreach ($quotes as $quote)
                                <div class="bg-image card shadow-1-strong mb-5 "
                                    style="background-image: url({{ $quote->img }});">
                                    <div class="card-body text-white ">
                                        <h5 class="card-title">{{ $quote->prhase }}</h5>
                                        <p class="card-text font-italic ">
                                            {{ $quote->author }}
                                        </p>
                                        <div>
                                            @hasallroles('admin')
                                                <form action="{{ route('quotes.destroy', $quote->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('quotes.show', $quote->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('quotes.edit', $quote->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Edit</a>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            @else
                                                <form action="....." method="POST">
                                                    <button type="submit" class="btn btn-sm"
                                                        style="background-color: rgba(90, 168, 151, 1)";>
                                                        <i class="fa fa-fw fa-trash"></i> Añadir a Favoritos</button>
                                                </form>
                                            @endhasallroles
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
<footer class="footer fixed-bottom">
    <div class="pt-3 pb-3 w-full text-center" style="background-color: rgba(90, 168, 151, 1);">
          <span class="text-white">© Copyright Todos los derechos reservados 2023 || Privacy Policy</span>
    </div>
  </footer>
