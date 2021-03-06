@extends('layout/userlayout')
@section('title', 'Home')

@section('content')

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="height: 550px;">
            <div class="carousel-item active">
            <img src="{{ asset('img/rog.jpg') }}" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{ asset('img/gambar 2.jpg') }}" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{ asset('img/rog.jpg') }}" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container-fluid background">
        <div class="row mt-4">
            <div class="col berita">
                Berita Terbaru
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row mt-5">
            <div class="col-sm background-card mb-row mx-4">
                <div class="card mt-card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>

           <div class="col-sm background-card mb-row mx-4">
                <div class="card mt-card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
           

            <div class="col-sm background-card mb-row mx-4">
                <div class="card mt-card">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-sm background-card mb-row mx-4">
                <div class="card mt-card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>

           <div class="col-sm background-card mb-row mx-4">
                <div class="card mt-card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
           

            <div class="col-sm background-card mb-row mx-4">
                <div class="card mt-card">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-4 mb-row">
            <div class="col mx-4 col-overflow">
                <h2>PENGUMUMAN</h2>
                <div class="overflow">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p>This is some text within a card body.</p>
                            <a href="#" class="card-link">Selanjutnya...</a>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p>This is some text within a card body.</p>
                            <a href="#" class="card-link">Selanjutnya...</a>
                        </div>
                    </div>
                 </div>
            </div>
            


             <div class="col mx-4 col-overflow">
                <h2>AGENDA</h2>
                <div class="overflow">
                    <div class="card mt-3">
                        <div class="card-body">
                           <table class="table table-borderless">
                                    <tr>
                                        <td rowspan="3" class="border border-secondary tgl-agenda"><h1>20 October</h1></td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <td>Larry the Bird</td>
                                    </tr>
                                    <tr>
                                        <td>Larry the Bird</td>
                                    </tr>
                            </table>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-body">
                          <table class="table table-borderless">
                                    <tr>
                                        <td rowspan="3" class="border border-secondary tgl-agenda"><h1>20 October</h1></td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <td>Larry the Bird</td>
                                    </tr>
                                    <tr>
                                        <td>Larry the Bird</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                 </div>
            </div>

        </div>

           <div class="row">
                <div class="col col-info">
                    <i class="fas fa-user-friends fa-5x"></i>
                    <p>71.000</p>
                    <p>Mahasiswa</p>
                </div>
                <div class="col col-info">
                    <i class="fas fa-user-friends fa-5x"></i>
                    <p>71.000</p>
                    <p>Mahasiswa</p>
                </div>
                <div class="col col-info">
                    <i class="fas fa-user-friends fa-5x"></i>
                    <p>71.000</p>
                    <p>Mahasiswa</p>
                </div>
                <div class="col col-info">
                    <i class="fas fa-user-friends fa-5x"></i>
                    <p>71.000</p>
                    <p>Mahasiswa</p>
                </div>          
            </div>

            <div class="row">
                <div class="col col-prodi bg-primary" style="background-image: url({{url('img/rog.jpg')}});">
                    <div class="col-prodi-text ">
                        Sistem Informasi
                    </div>
                </div>
                

                <div class="col col-prodi bg-primary">
                    <div class="col-prodi-text ">
                        Sistem Informasi
                    </div>
                </div>

                <div class="w-100"></div>
                <div class="col col-prodi bg-primary">
                    <div class="col-prodi-text ">
                        Sistem Informasi
                    </div>
                </div>
                <div class="col col-prodi bg-primary">
                    <div class="col-prodi-text ">
                        Sistem Informasi
                    </div>
                </div>
                
                </div>
            </div>

        
    </div>

    @endsection