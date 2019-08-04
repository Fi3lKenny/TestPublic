@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-4">
            <div class="card mb-4">
                <div class="card-body">
                    <img src="{!! asset("uploads/cars_img/".$detailData->car_img."") !!}"
                         class="car-pic">
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row car-detail-wrapper">
                        <div class="col-12">
                            <span>Brand :</span>
                            <span class="font-weight-bold">{{$detailData->brand}}</span>
                        </div>
                        <div class="col-12">
                            <span>Model :</span>
                            <span class="font-weight-bold">{{$detailData->model}}</span>
                        </div>
                        <div class="col-12">
                            <span>Fuel :</span>
                            <span class="font-weight-bold">{{$detailData->fuel}}</span>
                        </div>
                        <div class="col-12">
                            <span>Transmission :</span>
                            <span class="font-weight-bold">{{$detailData->transmission}}</span>
                        </div>
                        <div class="col-12">
                            <span>Price :</span>
                            <span
                                class="font-weight-bold">IDR {{\App\Helpers\AppHelper::convertMoney($detailData->price) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header bg-color-blue color-white font-weight-bold">Comments</div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script-content')
    <script type="text/javascript">const pageName = 'detailData';</script>
@endsection
