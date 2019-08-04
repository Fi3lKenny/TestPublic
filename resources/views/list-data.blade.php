@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Car List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Car Image</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Fuel</th>
                                <th>Transmission</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Car Image</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Fuel</th>
                                <th>Transmission</th>
                                <th>Price</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($getData as $data)
                                <tr>
                                    <td>
                                        <a href="/detail-data/{{$data->id}}">
                                            <img
                                                src="{!! asset("uploads/cars_img/".$data->car_img."") !!}"
                                                class="car-table">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/detail-data/{{$data->id}}">
                                            {{$data->brand}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/detail-data/{{$data->id}}">
                                            {{$data->model}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/detail-data/{{$data->id}}">
                                            {{$data->fuel}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/detail-data/{{$data->id}}">
                                            {{$data->transmission}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/detail-data/{{$data->id}}">
                                            IDR {{\App\Helpers\AppHelper::convertMoney($data->price)}}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script-content')
    <script type="text/javascript">const pageName = 'listData';</script>
@endsection
