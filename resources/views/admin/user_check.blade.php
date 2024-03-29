@extends('layouts.main')
@section('header')
@endsection
@section('content')


    <div class="content">
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="text-center card-box">
                <div class="member-card">
                    <div class="">
                        <h3 class="m-b-5">{{$user->name}}  {{$user->last_name}}</h3>
                        <p class="text-muted"><h4>Утас:{{$user->phone_number}}</h4></p>
                        @if($rela->state == 3)
                        @else
                        <a href="{{url('/home/user_check').'/'.$rela->id.'/'.'cancel'}}"><button type="button" class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Хэрэглэгчийн захиалгыг цуцлах</button></a>
                        @endif
                    </div>
                    {{--<button type="button" class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Follow</button>--}}
                    {{--<button type="button" class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Message</button>--}}
                    <div class="text-left m-t-40">

                        <p class="text-highlight-dark font-13"><strong>Регистр :</strong><span class="m-l-15">{{$user->register_number}}</span></p>

                        <p class="text-highlight-dark font-13"><strong>Email :</strong> <span class="m-l-15">{{$user->email}}</span></p>


                        <p class="text-highlight-dark font-13"><strong>Улс :</strong> <span class="m-l-15">
                        @if($user->country == "mn")
                                    Mongolia
                                @endif </span></p>
                    </div>

                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->

        <div class="col-xl-3 col-lg-4">
            <div class="text-center card-box">
                <div class="member-card">
                    <div class="">
                        <h3 class="m-b-5">Байрны мэдээлэл</h3>

                    </div>
                    {{--<button type="button" class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Follow</button>--}}
                    {{--<button type="button" class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Message</button>--}}

                    <div class="text-left m-t-40">

                        <p class="text-highlight-dark font-13"><strong>Сонгосон блок :</strong><span class="m-l-15">@if($rela->block_id == 1)
                                    <td>A</td>
                                @elseif($rela->block_id == 2)
                                    <td>B</td>
                                @elseif($rela->block_id == 3)
                                    <td>C</td>
                                @endif</span></p>

                        <p class="text-highlight-dark font-13"><strong>Сонгосон давхар :</strong> <span class="m-l-15"> {{$rela->floor_id}}  </span></p>


                        <p class="text-highlight-dark font-13"><strong>Сонгосон загвар :</strong> <span class="m-l-15">@if($rela->model_id == 1)
                                    <td>A</td>
                                @elseif($rela->model_id == 2)
                                    <td>B</td>
                                @elseif($rela->model_id == 3)
                                    <td>C</td>
                                @elseif($rela->model_id == 4)
                                    <td>D</td>
                                @elseif($rela->model_id == 5)
                                    <td>E</td>
                                @elseif($rela->model_id == 6)
                                    <td>F</td>
                                @elseif($rela->model_id == 7)
                                    <td>G</td>
                                @elseif($rela->model_id == 8)
                                    <td>H</td>
                                @elseif($rela->model_id == 9)
                                    <td>I</td>
                                @elseif($rela->model_id == 10)
                                    <td>J</td>
                                @elseif($rela->model_id == 11)
                                    <td>K</td>
                                @endif</span></p>
                    </div>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
        @if($rela->state == 0)
            <div class="col-xl-3 col-lg-4">
                <div class="text-center card-box">
                    <div class="member-card">
                        <div class="">
                            <h3 class="m-b-5">Гэрээний мэдээлэл</h3>
                        </div>

                        <div class="text-left m-t-40">

                            <p class="text-highlight-dark font-13"><strong>Шуудангийн хаяг :</strong><span class="m-l-15">{{$user->location}}</span></p>

                        </div>
                        <a href="{{url('/home/user_check').'/'.$user->id.'/'.'action'}}"><button type="button" class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light"> Гэрээ явуулсан</button></a>
                    </div>
                </div> <!-- end card-box -->
            </div>
        @elseif($rela->state == 1)
            <div class="col-xl-3 col-lg-4">
                <div class="text-center card-box">
                    <div class="member-card">
                        <div class="">
                            <h3 class="m-b-5">Гэрээний мэдээлэл</h3>
                        </div>

                        <div class="text-left m-t-40">

                            <p class="text-highlight-dark font-13"><strong>Гэрээ явуулсан огноо :</strong><span class="m-l-15"> {{$user->contract->sent_date}}</span></p>

                        </div>
                        <a href="{{url('/home/user_check').'/'.$user->id.'/'.'action1'}}"><button type="button" class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light"> Гэрээ хийсэн</button></a>
                    </div>
                </div> <!-- end card-box -->
            </div>
        @elseif($rela->state == 2 or $rela->state == 3)
            <div class="col-xl-3 col-lg-4">
                <div class="text-center card-box">
                    <div class="member-card">
                        <div class="">
                            <h3 class="m-b-5">Гэрээний мэдээлэл</h3>
                        </div>

                        <div class="text-left m-t-40">

                            <p class="text-danger font-13"><strong>Гэрээ амжилттай хийгдсэн</strong></p>
                            <p class="text-highlight-dark font-13"><strong>Гэрээ хийсэн огноо :</strong><span class="m-l-15">{{$user->contract->completed_date}}</span></p>

                        </div>

                    </div>
                </div> <!-- end card-box -->
            </div>
        @endif
        @if($rela->state == 0 or $rela->state==1 or $rela->state==2)
        <div class="col-xl-3 col-lg-4">
            <div class="text-center card-box">
                <div class="member-card">
                    <div class="">
                        <h3 class="m-b-5">Төлбөрийн мэдээлэл</h3>
                    </div>
                    <div class="text-left m-t-40">

                        <p class="text-highlight-dark font-13"><strong>Төлөх нийт үнэ :</strong><span class="m-l-15">{{$total}} төгрөг</span></p>
                    </div>
                    <a href="{{url('/home/user_check').'/'.$user->id.'/'.'code'}}"><button type="button" class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Төлбөр төлөгдсөн</button></a>

                </div>
            </div> <!-- end card-box -->
        </div>

        @elseif($rela->state == 3)
            <div class="col-xl-3 col-lg-4">
                <div class="text-center card-box">
                    <div class="member-card">
                        <div class="">
                            <h3 class="m-b-5">Төлбөрийн мэдээлэл</h3>
                        </div>
                        <div class="text-left m-t-40">
                            <p class="text-danger font-13"><strong>Төлбөр амжилттай төлөгдсөн</strong><span class="m-l-15"></span></p>
                            <p class="text-highlight-dark font-13"><strong>Төлбөр төлсөн огноо :</strong><span class="m-l-15">{{$user->contract->purchased_date}}</span></p>
                        </div>
                    </div>
                </div> <!-- end card-box -->
            </div>
        @endif


    </div> <!-- end col -->
    </div>


@endsection
@section('footer')
@endsection