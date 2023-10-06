@extends('layouts.app',[
    'class' => '',
    'folderActive' => '',
    'elementActive' => 'dashboard'
])
                                                <!--
                                            ESSA É A INDEX DO TEAMPLATE, APÓS O LOGIN 
                                                    -->
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-globe text-warning"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Capacity</p>
                                    <p class="card-title">150GB
                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-refresh"></i> Update Now
                        </div>
                    </div>
                </div>
            </div>
          
           
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="numbers pull-left">
                                    $34,657
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="pull-right">
                                    <span class="badge badge-pill badge-success">
                                        +18%
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="big-title">total earnings in last ten quarters</h6>
                        <canvas id="activeUsers" width="826" height="380"></canvas>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="footer-title">Financial Statistics</div>
                            </div>
                            <div class="col-sm-5">
                                <div class="pull-right">
                                    <button class="btn btn-success btn-round btn-icon btn-sm">
                                        <i class="nc-icon nc-simple-add"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    
        <div class="row">
            <div class="col-md-6">
                <div class="card  card-tasks">
                    <div class="card-header ">
                        <h4 class="card-title">Tasks</h4>
                        <h5 class="card-category">Backend development</h5>
                    </div>
                    <div class="card-body ">
                        <div class="table-full-width table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" checked>
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="img-row">
                                            <div class="img-wrapper">
                                                <img src="{{ asset('img/faces/ayo-ogunseinde-2.jpg') }}" class="img-raised" />
                                            </div>
                                        </td>
                                        <td class="text-left">Sign contract for "What are conference organizers afraid of?"
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title=""
                                                class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                                data-original-title="Edit Task">
                                                <i class="nc-icon nc-ruler-pencil"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title=""
                                                class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                                data-original-title="Remove">
                                                <i class="nc-icon nc-simple-remove"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox">
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="img-row">
                                            <div class="img-wrapper">
                                                <img src="{{ asset('img/faces/erik-lucatero-2.jpg') }}" class="img-raised" />
                                            </div>
                                        </td>
                                        <td class="text-left">Lines From Great Russian Literature? Or E-mails From My Boss?
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title=""
                                                class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                                data-original-title="Edit Task">
                                                <i class="nc-icon nc-ruler-pencil"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title=""
                                                class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                                data-original-title="Remove">
                                                <i class="nc-icon nc-simple-remove"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" checked>
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="img-row">
                                            <div class="img-wrapper">
                                                <img src="{{ asset('img/faces/kaci-baum-2.jpg') }}" class="img-raised" />
                                            </div>
                                        </td>
                                        <td class="text-left">Using dummy content or fake information in the Web design
                                            process can result in products with unrealistic
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title=""
                                                class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                                data-original-title="Edit Task">
                                                <i class="nc-icon nc-ruler-pencil"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title=""
                                                class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                                data-original-title="Remove">
                                                <i class="nc-icon nc-simple-remove"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox">
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="img-row">
                                            <div class="img-wrapper">
                                                <img src="{{ asset('img/faces/joe-gardner-2.jpg') }}" class="img-raised" />
                                            </div>
                                        </td>
                                        <td class="text-left">But I must explain to you how all this mistaken idea of
                                            denouncing pleasure<    /td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title=""
                                                class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                                data-original-title="Edit Task">
                                                <i class="nc-icon nc-ruler-pencil"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title=""
                                                class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                                data-original-title="Remove">
                                                <i class="nc-icon nc-simple-remove"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-refresh spin"></i> Updated 3 minutes ago
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();
            demo.initVectorMap();
        });
    </script>
@endpush