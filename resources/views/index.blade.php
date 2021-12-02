
@extends('template.base')
@section('body')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard - Fabio 2.0</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <!--
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Primary Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Warning Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Success Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Danger Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        -->
            <div class="row">
<!--
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Area Chart Example
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Bar Chart Example
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
            </div>
        -->
            <div class="card mb-4">
                <div class="card-header"><!-- TAB AGGIORNAMENTO -->
                    <i class="fas fa-table me-1"></i>
                    Lista da fare AGGIORNATA (SENZA VUE E MYSQL NON VERRA VISUALIZZATO NULLA)
                </div>
                <div class="card-body">



                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Data</th>
                                    <th>Testo</th>
                                    <th>Fatto</th>
                                    <th>Seleziona come fatto</th>
                                </tr>
                            </thead>

                            <tbody id="render-list">

                                <tr v-for="nota in note">
                                    <td>@{{nota.data}}</td>
                                    <td>@{{nota.testo}}</td>
                                    <td>@{{nota.fatto}}</td>
                                    <td>Ciao</td>
                                </tr>
                            </tbody>
                        </table>



                </div>
            </div>
        </div>

    </main>
@endsection


@section('scripts')
<script>

let todolist = null;

$.get('{{url("dafare")}}', function(json) {
    if(json.res) {
        Vue.createApp({
            data() {
                return {
                    note:json.dafare
                }
            }
        }).mount('#render-list')
    }
})



</script>
@endsection
