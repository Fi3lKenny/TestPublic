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
                    @if(session()->has('commentsData'))
                        <h4>Display Comments</h4>
                        <hr/>
                        @foreach(session('commentsData') as $comment)
                            <div class="display-comment">
                                <strong>{{ $comment->user_name }}</strong>
                                <div>{{ $comment->body }}</div>
                                <div class="vote-count">Vote Count: {{ $comment->votes }}</div>
                                <form method="post" action="/submit_vote">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{ $comment->post_id }}"/>
                                    <input type="hidden" name="parent_id" value="{{ $comment->parent_id }}"/>

                                    <button type="submit" class="btn vote-btn" name="upVote" value="1"><i
                                            class="fas fa-arrow-up"></i></button>
                                    <button type="submit" class="btn vote-btn" name="downVote" value="1"><i
                                            class="fas fa-arrow-down"></i>
                                    </button>

                                </form>
                            </div>
                        @endforeach
                    @endif
                    <h4 class="mt-5">Add comment</h4>
                    <form method="post" action="/submit_comment">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                            <input type="hidden" name="parent_id" value="{{ $detailData->id }}"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Add Comment" required/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
