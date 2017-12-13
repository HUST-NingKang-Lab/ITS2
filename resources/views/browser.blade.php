@extends('basic') @section('navbar')
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="row">
                <div class="navbar-header col-lg-1 col-lg-offset-2">
                    <a class="navbar-brand" href="/"><img class="img-responsive" alt="Responsive image"
                                                          src="/image/brand.png"></a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/identification">Search</a></li>
                        <li class="active"><a href="/browser">Browse</a></li>
                        <li><a href="/help">Help</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
@stop @section('main')
    <link rel="stylesheet" type="text/css" href="css/browse.css">
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    {{--<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}
    <script src="https://unpkg.com/vue"></script>

    <div class="main">
        <div class="container">
            <div class="row">
                <form>
                    <div class="col-lg-4 col-lg-offset-1">
                        <div class="form-group">
                            <label for="">Species Types</label>
                            <select class="form-control" name="species">
                                <option>Plant</option>
                                <option disabled>Animal</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Database</label>
                            <select class="form-control" name="database">
                                <option>ITS2</option>
                                <option disabled>matK</option>
                                <option disabled>trnH-psbA</option>
                                <option disabled>rbcL</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-8 col-lg-offset-1">
                        <div class="form-group">
                            <label for="">Species Name</label>
                            <input name="speciesName" class="form-control" id="" placeholder=""
                                   value="{{ $speciesName }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-offset-1">
                        <input class="btn btn-default" type="submit" value="Submit" id="submitBtn">
                    </div>
                </form>
                <div id="main-content" class="col-lg-11 col-lg-offset-1 table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <th>Species Name & its ITS2 seq : {{ ($totalCount)  }} items, {{ ceil($totalCount/20) }}pages
                        </th>
                        </thead>
                        <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td style="font-size: 15px">
                                    {{$item->Id."."}}
                                    {{--@php--}}
                                        {{--$taxa = explode("|",$item->taxonomy);--}}
                                        {{--foreach($taxa as $t){--}}
                                            {{--$t = explode("__",$t)[1];--}}
                                            {{--echo $t;--}}
                                            {{----}}
                                        {{--}--}}
                                    {{--@endphp--}}
                                    @foreach(explode("|",$item->taxonomy) as $taxa)
                                        <a target="_blank" href="https://en.wikipedia.org/wiki/{{ explode("__",$taxa)[1] }}">
                                            <img src="./image/wikipedia.png" style="max-width: 22px;">
                                        </a>
                                        {{ explode("__",$taxa)[1] }}
                                        <span style="font-size: 20px;">/</span>
                                    @endforeach
{{--                                    {{$item->taxonomy }}--}}
                                </td>
                            </tr>
                            <tr >
                                <td class="col-lg-offset-1" style="font-family: monospace; font-size:13px; max-width: 100px; word-wrap: break-word">
                                    {{ $item->seq }}
                                </td>
                            </tr>
                        @endforeach

                        @if (count($items) === 0)
                            <tr>
                                <td>
                                    No data for species {{$speciesName}}!
                                </td>
                            </tr>
                        @endif

                        </tbody>
                    </table>
                    <nav aria-label="...">
                        <ul class="pagination">
                            @if($currentPage > 4)
                                @foreach([4,3,2,1] as $i)
                                    <li>
                                        <a href="./browser?page={{$currentPage-$i}}&speciesName={{$speciesName}}">{{$currentPage-$i}}</a>
                                    </li>
                                @endforeach
                            @endif
                            <li class="active"><a href="#">{{ $currentPage }}<span class="sr-only">(current)</span></a>
                            </li>
                            @foreach([1,2,3,4,5] as $i)
                                @if($currentPage+$i <= ceil($totalCount/20) )
                                    <li>
                                        <a href="./browser?page={{$currentPage+$i}}&speciesName={{$speciesName}}">{{$currentPage+$i}}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/browse.js"></script>
@stop
