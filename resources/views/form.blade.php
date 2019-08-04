@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- DISPLAY ERROR -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/submit_form" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" class="form-control" id="brand" name="brand" value="{{old('brand')}}"
                           placeholder="Car Brand ex: Toyota, Honda, etc.">
                </div>
                <div class="form-group">
                    <label for="model">Model</label>
                    <input type="text" class="form-control" id="model" name="model" value="{{old('model')}}"
                           placeholder="Car Model ex: Agya, Sigra, etc.">
                </div>
                <div class="form-group">
                    <label for="fuel">Fuel</label>
                    <input type="text" class="form-control" id="fuel" name="fuel" value="{{old('fuel')}}"
                           placeholder="Fuel Type ex: Solar, Pertamax, etc.">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{old('price')}}" placeholder="0">
                </div>
                <div class="form-group">
                    <label for="transmission">Transmission</label>
                    <select class="form-control" id="transmission" name="transmission">
                        <option value="AT" selected>AT</option>
                        <option value="MT">MT</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="carImage">Car Image</label>
                    <input type="file" class="form-control-file" id="carImage" name="carImage">
                </div>

                <input type="submit"
                       value="submit"
                       class="btn btn-primary btn-lg btn-block">
            </form>
        </div>
    </div>
@endsection

@section('script-content')
    <script type="text/javascript">const pageName = 'formInput';</script>
@endsection
