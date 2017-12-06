@extends('basic') @section('navbar')
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="navbar-header col-lg-1 col-lg-offset-2">
                <a class="navbar-brand" href="/"><img class="img-responsive" alt="Responsive image" src="/image/brand.png"></a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/identification">Identification</a></li>
                    <li class="active"><a href="/browser">Browser</a></li>
                    <li> <a href="/help">Help</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
@stop @section('main')
<link rel="stylesheet" type="text/css" href="css/browse.css">
<div class="main">
    <div class="container">
        <div class="row">
            <form>
                <div class="col-lg-3 col-lg-offset-2">
                    <div class="form-group">
                        <label for="">Species</label>
                        <select class="form-control" name="species">
                            <option>Animal</option>
                            <option>Plant</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="">Database</label>
                        <select class="form-control" name="database">
                            <option>ITS2</option>
                            <option>matK</option>
                            <option>trnH-psbA</option>
                            <option>rbcL</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-offset-2">
                    <div class="form-group">
                        <label for="">Species Name</label>
                        <input name="speciesName" class="form-control" id="" placeholder="">
                    </div>
                </div>
                <div class="col-lg-6 col-lg-offset-2">
                    <input class="btn btn-default" type="submit" value="Submit" id="submitBtn">
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/browse.js"></script>
@stop
