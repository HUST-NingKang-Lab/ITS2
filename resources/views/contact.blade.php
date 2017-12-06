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
                    <li><a href="/help">Help</a></li>
                    <li class="active"><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
@stop @section('main')
<link rel="stylesheet" type="text/css" href="css/contact.css">
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <h2><strong>Contact</strong></h2>
                <h4><strong>Questions about any of the tools? See our help and send related inquiries there.
</strong></h4>
                <table class="table table-bordered">
                    <caption>
                        <h4><strong>NingKang Lab</strong></h4></caption>
                    <tbody>
                        <tr>
                            <td>Email</td>
                            <td>ningkang@hust.edu.cn</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>+86 (027)87793041</td>
                        </tr>
                        <tr>
                            <td>Office</td>
                            <td>School of Life Science and Technology, Huazhong University of Science and Technology
                                <br> No.1037 Luoyu Road, Wuhan, Hubei province, China, 430074
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @stop
