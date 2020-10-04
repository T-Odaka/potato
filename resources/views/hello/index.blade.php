@extends('layout.common')
 
@section('title', 'インデックスページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', 'インデックスページの説明文です')
@section('pageCss')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
@endsection
 
@include('layout.header')
 
@section('content')
<div class="card-deck">

    @foreach ($potatos as $potato)
    <div class="card">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
    <div class="card-body">
      <h5 class="card-title">{{ $potato->name }}</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <?php  
        $str = $potato->id;
        $data = [$potato->hot, $potato->garlic, $potato->salt, $potato->crispy];

      ?>
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
                label: 'バランス',
                data: [<?php echo $data[0].','. $data[1].','.$data[2].','. $data[3]?>],
                backgroundColor: 'RGBA(225,95,150, 0.5)',
                borderColor: 'RGBA(225,95,150, 1)',
                borderWidth: 1,
                pointBackgroundColor: 'RGB(46,106,177)'
            }]
        },
        options: {
            title: {
                display: true,
                text: '5段階評価'
            },
            scale:{
                ticks:{
                    suggestedMin: 0,
                    suggestedMax: 5,
                    stepSize: 5,
                    callback: function(value, index, values){
                        return  value +  '点'
                    }
                }
            }
        }
    });
    </script>

    </div>
  </div>
    @endforeach
</div>

@endsection
 
@include('layout.submenu')
 
@include('layout.footer')
