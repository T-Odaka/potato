@extends('layout.common')

@section('title', 'ポテトチップのススメ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', 'インデックスページの説明文です')
@section('pageCss')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
@endsection

@include('layout.header')
@include('layout.submenu')
@include('layout.footer')

@section('content')

<div class="container">

    <!-- ソート用ボタン -->
    <div class="dropdown offset-10 col-2">
        <button type="button" id="dropdown1" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            並び替え
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdown1">
            <a class="dropdown-item" href="/sortHot">名前</a>
            <a class="dropdown-item" href="/sortHot">辛さ</a>
            <a class="dropdown-item" href="/sortCrispy">サクサクさ</a>
            <a class="dropdown-item" href="/sortSalt">塩分み</a>
            <a class="dropdown-item" href="/sortGarlic">ニンニク度</a>
        </div>
    </div>

    <!-- 垂直カード -->
    <div class="row">
        <div class="card-deck col-12 mx-auto">
            @foreach ($pages as $page)
            <div class="col-xl-4 col-sm-12 grid">

                <!-- カード本体 -->
                <div class="card border-0 shadow-sm">
                    <?php
                    $str = $page->id;
                    $data = [$page->hot, $page->garlic, $page->salt, $page->crispy];
                    $detail = [$page->description, $page->image_url];
                    echo "<img class=card-img-top src=$detail[1] alt=$page->name >"
                    ?>
                    <div class="card-body">
                        <h5 class="card-title">{{ $page->name }}</h5>
                        <p class="card-text"><?php echo $detail[0] ?></p>
                        <div>
                            <canvas id="<?php echo  $str ?>"></canvas>
                        </div>

                        <!-- レーダーチャート -->
                        <script>
                            var ctx = document.getElementById("<?php echo $str ?>");
                            var myRadarChart = new Chart(ctx, {
                                type: 'radar',
                                data: {
                                    labels: ["辛さ", "ニンニク度", "塩分み", "サクサクさ"],
                                    datasets: [{
                                        data: [<?php echo $data[0] . ',' . $data[1] . ',' . $data[2] . ',' . $data[3] ?>],
                                        backgroundColor: 'RGBA(225,95,150, 0.5)',
                                        borderColor: 'RGBA(225,95,150, 1)',
                                        borderWidth: 1,
                                        pointBackgroundColor: 'RGB(46,106,177)',
                                        pointRadius: 2,
                                    }]
                                },
                                options: {
                                    animation: {
                                        duration: 3000,
                                        easing: "easeOutBounce",
                                    },
                                    legend: {
                                        display: false,
                                    },

                                    title: {
                                        display: false,
                                    },
                                    scale: {
                                        label: {
                                            display: false,
                                        },
                                        ticks: {
                                            suggestedMin: 0,
                                            suggestedMax: 5,
                                            stepSize: 1,
                                        },
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- 水平カード -->
    <div class="row">
        <div class="card-deck col-12 mx-auto">
            @foreach ($pages as $page)
            <div class="col-xl-6 col-sm-12 grid">
                <!-- カード本体 -->
                <div class="card mb-3 border-0 shadow-sm">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <?php
                            $str = $page->id;
                            $data = [$page->hot, $page->garlic, $page->salt, $page->crispy];
                            $detail = [$page->description, $page->image_url];
                            echo "<img class=card-img-top src=$detail[1] alt=$page->name >"
                            ?>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $page->name }}</h5>
                                <p class="card-text"><?php echo $detail[0] ?></p>
                                <div>
                                    <canvas id="<?php echo  $str . "h" ?>"></canvas>
                                </div>
                                <!-- レーダーチャート -->
                                <script>
                                    var ctx = document.getElementById("<?php echo $str . "h" ?>");
                                    var myRadarChart = new Chart(ctx, {
                                        type: 'radar',
                                        data: {
                                            labels: ["辛さ", "ニンニク度", "塩分み", "サクサクさ"],
                                            datasets: [{
                                                data: [<?php echo $data[0] . ',' . $data[1] . ',' . $data[2] . ',' . $data[3] ?>],
                                                backgroundColor: 'RGBA(225,95,150, 0.5)',
                                                borderColor: 'RGBA(225,95,150, 1)',
                                                borderWidth: 1,
                                                pointBackgroundColor: 'RGB(46,106,177)',
                                                pointRadius: 2,
                                            }]
                                        },
                                        options: {
                                            animation: {
                                                duration: 3000,
                                                easing: "easeOutBounce",
                                            },
                                            legend: {
                                                display: false,
                                            },

                                            title: {
                                                display: false,
                                            },
                                            scale: {
                                                label: {
                                                    display: false,
                                                },
                                                ticks: {
                                                    suggestedMin: 0,
                                                    suggestedMax: 5,
                                                    stepSize: 1,
                                                },
                                            }
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- ページネーション -->
    <div class="d-flex justify-content-center col-3 mx-auto">
        {{ $pages->appends(request()->query())->links('vendor.pagination.bootstrap-4') }}
    </div>
    @endsection