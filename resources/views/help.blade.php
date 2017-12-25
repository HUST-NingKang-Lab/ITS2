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
                    <li><a href="/identification">Search</a></li>
                    <li><a href="/browser">Browse</a></li>
                    <li class="active"><a href="/help">Help</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
@stop @section('main')
<link rel="stylesheet" type="text/css" href="css/help.css">
<div class="main" style="margin-bottom: 50px;">
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
        <h2><strong>Help</strong></h2>
            <h4><strong>Data source</strong></h4>
            <p>
                Current ITS2 and other markers' datesets are automatically extracted and manually curated fom NCBI nucleotide database.
            </p>
            <br>
            <h4><strong>How to make a organism identification or taxonomy classification through Holmes-ITS2?</strong></h4>
            <p>
                As multiple search engines and nucleotide biomarkers are available, just paste a/multiple fasta sequence(s) into the input field,
                choose proper search engine and reference sequence database and click search. Each batch of submission will be considered as a sample. Classification and statistics result will be shown below including sequence taxonomy table and statistics table.
            </p>
            <img class="img-thumbnail" src="/image/its.png">
            <p>The whole workflow of the Holmes-ITS2 system including database, web service and search engines. <span style="font-weight: bold">(A)</span> Raw ITS2 sequences obtained from NCBI, target sequence extraction and sequence quality filtration. <span style="font-weight: bold">(B)</span> Database refinement by metagenomic sample clustering and representative ITS2 sequence selection. <span style="font-weight: bold">(C)</span> The refined ITS2 database. <span style="font-weight: bold">(D)</span> Interactive web service with (E) multiple search engines enabled.</p>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="alert alert-info panel-title" style="font-weight: bold">Tutorial For Browse</h3>
                </div>
                <div class="panel-body" style="font-size: 18px; font-family: Arial">
                    <ol>

                        <li>
                            Browse page provides the full access to our ITS2 databases, you can search and browse all the
                            taxonomy and its sequences.
                        </li>
                        <li>
                            You can choose different  <span class="badge">Species Type</span>  <span class="badge">Database</span>
                            for search. leave the <span class="badge">Species Name</span> blank as default to browse all the data.
                            <hr>
                            <div>

                            </div>
                            <img class="img-thumbnail" src="/image/1513154212.png">

                            <hr>
                            <img class="img-thumbnail" src="/image/1513154756.png">
                            <hr>
                        </li>
                        <li>
                            Click <img src="./image/wikipedia.png" style="max-width: 22px;"> to view details of this taxonomy on wikipedia
                        </li>
                    </ol>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="alert alert-info panel-title" style="font-weight: bold">Tutorial For Search</h3>
                </div>
                <div class="panel-body" style="font-size: 18px; font-family: Arial">
                    <ol>
                        <li>
                            Submit your own ITS2 seq in fasta format on Search page, and choose different data sets and
                            algorithms to perform search
                            <hr>
                            <img class="img-thumbnail" src="image/1513158049.png">
                            <hr>
                        </li>
                        <li>
                            Wait for a while, and the front end will show you the results, including species composition,
                            and its abundance.
                            <hr>
                            <img class="img-thumbnail" src="image/6.png">
                            <hr>
                            <img class="img-thumbnail" src="image/4.png">


                        </li>
                    </ol>
                </div>
            </div>
        </div>

    </div>

</div>


</div>
@stop
