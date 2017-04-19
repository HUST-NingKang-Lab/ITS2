<!DOCTYPE html>
<html>

<head>
    <title>ITS2 Database</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
    @section('navbar')
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="row">
                <div class="navbar-header col-lg-1 col-lg-offset-2">
                    <a class="navbar-brand" href="/"><img class="img-responsive" alt="Responsive image" src="/image/brand.png"></a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/identification">Identification</a></li>
                        <li><a href="/browser">Browser</a></li>
                        <li><a href="/help">Help</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    @show @section('main')
    <div class="bg-primary text-center main-panle">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-lg-offset-1">
                    <h1 class="display-1 text-white" id="name">Holmes-ITS2 Database</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 info-panel">
                <div class="info-panel-head row">
                    <img src="image/dna.png" class="col-lg-2">
                    <h3 class="col-lg-9">DNA biomarkers</h3>
                </div>
                <p>Basic panel example asda sdas ddjhask haskhasd fhasdfj asfsdjklf ad da da </p>
            </div>
            <div class="col-lg-3 info-panel">
                <div class="info-panel-head row">
                    <img src="image/search.png" class="col-lg-2">
                    <h3 class="col-lg-9">Search</h3>
                </div>
                <p>Basic panel example asda sdas ddjhask haskhasd fhasdfj asfsdjklf ad da da </p>
            </div>
            <div class="col-lg-3 info-panel">
                <div class="info-panel-head row">
                    <img src="image/statistics.png" class="col-lg-2">
                    <h3 class="col-lg-9">Statistics</h3>
                </div>
                <p>2 phyla<br>
38 classes<br>
169 orders<br>
501 families<br>
8,385 genera<br>
65,281 species<br>
</p>
            </div>
            <div class="col-lg-3 info-panel">
                <div class="info-panel-head row">
                    <img src="image/about.png" class="col-lg-2">
                    <h3 class="col-lg-9">About</h3>
                </div>
                <p>A taxonomy classification platform based on multiple nucleotide biomarkers hosted  
NingLab@HUST
</p>
            </div>
        </div>
    </div>
    @show
    <footer class="footer text-center">
        <h4>Copyright &copy; NingKang Lab 2017</h4>
    </footer>
</body>

</html>
