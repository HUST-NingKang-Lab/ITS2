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
                    <li><a href="/browser">Browser</a></li>
                    <li class="active"><a href="/help">Help</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
@stop @section('main')
<link rel="stylesheet" type="text/css" href="css/help.css">
<div class="main">
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
        <h2><strong>Help</strong></h2>
<h4><strong>How to make a organism identification or taxonomy classification through Holmes-ITS2?</strong></h4>
<br>
<p>As multiple search engines and nucleotide biomarkers are available, just paste a/multiple fasta sequence(s) into the input field,
choose proper search engine and reference sequence database and click search. Each batch of submission will be considered as a sample. Classification and statistics result will be shown below including sequence taxonomy table and statistics table.</p>
        </div>
    </div>
</div>


</div>
@stop
