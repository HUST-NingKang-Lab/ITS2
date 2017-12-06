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
                    <li class="active"><a href="/identification">Search</a></li>
                    <li><a href="/browser">Browse</a></li>
                    <li><a href="/help">Help</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
@stop @section('main')
<link rel="stylesheet" type="text/css" href="css/identification.css">
<div class="main">
    <div class="container">
        <ul class="nav nav-tabs" id="softwareNav">
            <li role="presentation" class="active"><a>BLAST</a></li>
            <li role="presentation"><a>KRAKEN</a></li>
        </ul>
        <div id="BLAST">
            <div class="row">
                <div class="col-lg-12">
                    <p>blast introduction</p>
                </div>
                <div class="col-lg-12">
                    <form role="form">
                        <div class="form-group">
                            <label for="name" id="blastLabel">Enter Query Sequence</label>
                            <textarea name="searchSeq" id="searchSeq" class="form-control" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="name" id="blastLabel">Choose Dataset</label>
                            <br>
                            <div id="datasetChoose">
                                <label for="name">Species</label>
                                <label class="checkbox-inline">
                                    <input type="radio" name="speciesRadio" id="optionsRadios3" value="Animal" disabled="disabled"> Animal
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" name="speciesRadio" id="optionsRadios4" value="Plant" checked> Plant
                                </label>
                                <br>
                                <label for="name">Database</label>
                                <label class="checkbox-inline">
                                    <input type="radio" name="databaseRadio" value="ITS2" checked> ITS2
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" name="databaseRadio" value="matK" disabled="disabled"> matK
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" name="databaseRadio" value="trnH-psbA" disabled="disabled"> trnH-psbA
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" name="databaseRadio" value="rbcL" disabled="disabled"> rbcL
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="btn-group-lg">
                                <button type="button" id="submitBtn" class="btn btn-default pull-right">Submit and Search</button>
                                <div class="loader" id="loader" style="display: none;"></div>
                            </div>
                        </div>
                    </form>
                    <div id="searchResult" style="display: none;">
                        <div id="identification_result">
                            <label for="name">Identification Result</label>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>seq name</th>
                                        <th>taxonomy</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div id="genus_abd">
                            <label for="name">Genus Abundance</label>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>genus</th>
                                        <th>abundance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <div id="genusPie"></div>
                        </div>
                        <div id="species_abd">
                            <label for="name">Species Abundance</label>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>species</th>
                                        <th>abundance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <div id="speciesPie"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/d3.min.js?da"></script>
<script type="text/javascript" src="js/d3pie.min.js?da"></script>
<script type="text/javascript" src="js/identification.js?da"></script>
@stop
