@extends('layouts.app',[
    'class' => '',
    'folderActive' => '',
    'elementActive' => 'charts'
])

@section('content')
    <div class="content">
       
        <div class="row">
            <div class="col-md-6">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-title">Cadastros por mês</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="activeUsers"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-title">24 Hours Performance</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="activeUsers"></canvas>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartPageCharts();
        });
    </script>
@endpush