<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GES CLOUD</title>
        <link rel="icon" type="image/x-icon" href="assets/img/telkomicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">GES CLOUD STORAGE TELKOM SBU</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Search</a></li>
                        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contact</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">GES Cloud Storage</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Untuk menyimpan data - data anda</h2>
                    <a class="btn btn-danger js-scroll-trigger" href="#signup"><i class="fa fa-search"></i> SEARCH DOCUMENTS</a>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-white mb-4">GES CLOUD STORAGE TELKOM SBU</h2>
                        <p class="text-white-50">
                            Adalah tempat untuk penyimpanan sebuah data sehingga memudahkan pegawai untuk mengunggah dan mengunduh data.
                        </p>
                    </div>
                </div>
                <!--<img class="img-fluid" src="assets/img/t.png" alt="" />-->
            </div>
        </section>
        <!-- Projects-->
        <!--<section class="projects-section bg-light" id="projects">
            <form class="form-inline d-flex">
                <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" type="email" placeholder="Enter email address..." />
                <button class="btn btn-primary mx-auto" type="submit">Subscribe</button>
            </form>
        </section>-->
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Search your document here!</h2>
                        <form class="form-inline d-flex">
                            <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="nomor" type="text" placeholder="Nomor Kontrak..." />
                        </form>
                        <h2></h2>
                        <form class="form-inline d-flex">
                            <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="email" type="text" placeholder="Nama Corporate Customer..." />
                        </form>
                        <h2></h2>
                        <form class="form-inline d-flex">
                            <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="nama" type="text" placeholder="Nama AM..." />
                        </form>
                        <h2></h2>
                        <form class="form-inline d-flex">
                            <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="layanan" type="layanan" placeholder="Layanan..." />
                        </form>
                        <h2></h2>
                        <select id='selUser' class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" >
                            <option value='0'>-- Jenis Dokumen -- </option> 
                            <option value='1'>KB</option> 
                            <option value='2'>KL</option> 
                            <option value='3'>KFS</option> 
                            <option value='4'>P1</option> 
                            <option value='5'>P2</option> 
                            <option value='6'>P3</option> 
                            <option value='7'>P4</option>
                            <option value='8'>P5</option>
                            <option value='9'>P6</option>
                            <option value='10'>P7</option>
                            <option value='11'>P8</option> 
                          </select>
                        <h2></h2>
                        <button id="btnResult" class="btn btn-danger mx-auto" type="button" onclick="goToResult()"><i class="fa fa-search"></i> Search</button>
                        <button class="btn btn-danger mx-auto" type="submit"><i class="fa fa-upload"></i> Upload</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <!--<section class="contact-section bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">+1 (555) 902-8832</div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="social d-flex justify-content-center bg bg-black">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter" href="https://twitter.com/TelkomIndonesia"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f" href="https://www.facebook.com/TelkomIndonesia/"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-instagram" href="https://www.instagram.com/telkomindonesia/"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © Telkom Indonesia 2021</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>
            function goToResult(){
                var nomor = document.getElementById('nomor').value; // ini nilai dari tag input dengan id nomor
                var email = document.getElementById('email').value; 
                var nama = document.getElementById('nama').value; 
                var layanan = document.getElementById('layanan').value; 

               var xhr = new XMLHttpRequest();
               xhr.open("POST", "http://127.0.0.1:300/serach", true)
               xhr.setRequestHeader('Content-Type', 'application/json');
                xhr.send(JSON.stringify({
                    data: {
                        "nomor" : nomor,
                        "email" : email,
                        "nama" : nama,
                        "layanan" : layanan 
                    }
                }));
            }
        </script>
    </body>
</html>