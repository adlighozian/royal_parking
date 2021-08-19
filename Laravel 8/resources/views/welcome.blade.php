<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Royal Parking</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
</head>

<body>

    <header>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img src="{{ url('/foto/Royal_parking.png') }}" width= "50" class="img-circle elevation-1" alt="User Image">
                    <div class="test" style="color: gold;">
                        <strong>Royal Parking</strong>
                    </div>
                </a>

            </div>
        </div>
    </header>

    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Royal Parking</h1>
                <p class="lead text-muted">Visi ROYAL PARKING adalah
                  menjadi salah satu Perusahaan Jasa Pengelolaan Parkir
                  terbaik dengan mengedepankan perkembangan teknologi perpakiran di dunia,
                  serta peningkatan mutu pelayanan pelanggan dengan mengedepankan komitmen
                  kepercayaan untuk memberikan hasil maksimal diantara managemen dengan customer.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="{{ url('/foto/1.png') }}" class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">keterangan parkiran 1</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="{{ url('/foto/2.png') }}" class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">keterangan parkiran 2</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="{{ url('/foto/3.png') }}" class="card-img-top"
                                data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">keterangan parkiran 3</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                                    </div>
                                    <small class="text-muted"></small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a
                    href="../../getting-started/">getting started guide</a>.</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
</body>

</html>
