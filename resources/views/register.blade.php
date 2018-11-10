@extends('layouts.front')
@section('menu')
    <li class="megamenu">
        <a href="{{route('welcome')}} ">Танилцуулга</a>
    </li>
    <li class="dropdown active">
        <a href="{{route('models')}}">Байрны сонголтууд</a>
    </li>
    <li class="dropdown">
        <a class="waves" href="talbai.html">Үйлчилгээний талбай</a>
    </li>
    <li class="megamenu">
        <a href="aboutus.html">Гүйцэтгэгч</a>

    </li>
@endsection
@section('content')
    <div class="container">
        <div class="row" style="margin-top: 30px">
            <div class="col-md-2 text-center"><h5 class="text-secondary">ЗАГВАР</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">БЛОК</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">ДАВХАР</h5></div>
            <div class="col-md-2 text-center"><h5 >БҮРТГҮҮЛЭХ</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">ГЭРЭЭ</h5></div>
            <div class="col-md-2 text-center"><h5 class="text-secondary">БАТАЛГААЖУУЛАХ</h5></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="progress">
                    <div class="progress-bar" data-width="66">
                    </div><!-- progress-bar -->
                </div><!-- progress -->
            </div><!-- col-->
        </div><!-- row-->
    </div><!-- container-->
    <br>



    <!-- slider-->
    <div class="headline text-center no-margin-bottom">


        <h6>PYRAMID APARTMENT</h6>
        <!--<h3 id="blocka">БҮРТГҮҮЛЭХ</h3>-->
        <br>




    </div><!-- headline -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-box">
                    <ul class="nav nav-tabs tabs-bordered nav-justified">

                        <li class="nav-item">
                            <a href="#login" data-toggle="tab" aria-expanded="false" class="nav-link">
                                Нэвтрэх
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#register" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                Бүртгүүлэх
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div id="login" class="tab-pane fade">
                            <form method="POST" action="" aria-label="">



                                <div class="form-group row">

                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <input id="login_email" type="email" class="form-control" name="email"  required placeholder="Цахим хаяг*">

                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <input id="login_password" type="password" class="form-control" name="password"  required placeholder="Нууц үг*">

                                    </div>
                                    <div class="col-md-1"></div>
                                </div>


                                <br>
                                <div class="form-group row mb-0">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-md btn-primary btn-block">
                                            Нэвтрэх
                                        </button>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <br>
                            </form>
                        </div>
                        <div id="register" class="tab-pane active">
                            <form method="POST" action="" >

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input id="lastname" type="text" class="form-control" name="last_name"  required placeholder="Овог*">

                                            <!--@if ($errors->has('last_name'))-->
                                                <!--<span class="invalid-feedback" role="alert">-->
                                            <!--<strong>{{ $errors->first('last_name') }}</strong>-->
                                                <!--@endif-->
                                            </div>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="name"  required placeholder="Нэр*">

                                            <!--@if ($errors->has('name'))-->
                                                <!--<span class="invalid-feedback" role="alert">-->
                                            <!--<strong>{{ $errors->first('name') }}</strong>-->
                                                <!--</span>-->
                                                <!--@endif-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <div class="form-group row">

                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="register_number"  required placeholder="Регистрийн дугаар*">

                                    <!--@if ($errors->has('email'))-->
                                        <!--<span class="invalid-feedback" role="alert">-->
                                    <!--<strong>{{ $errors->first('email') }}</strong>-->
                                        <!--</span>-->
                                        <!--@endif-->
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>


                                <div class="form-group row">

                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <input id="email" type="email" class="form-control" name="email" required placeholder="Цахим хаяг*">

                                    <!--@if ($errors->has('email'))-->
                                        <!--<span class="invalid-feedback" role="alert">-->
                                    <!--&lt;!&ndash;<strong>{{ $errors->first('email') }}</strong>&ndash;&gt;-->
                                        <!--</span>-->
                                        <!--@endif-->
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <select class="form-control" name="code">
                                            <option value="+976">Монгол</option>
                                            <option value="+976">Солонгос</option>
                                            <option value="+1">Америк</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <div class="form-group row">

                                    <div class="col-md-1"></div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="code">
                                            <option value="+976">+976</option>
                                            <option value="+1">+1</option>
                                            <option value="+81">+81</option>
                                            <option value="+82">+82</option>
                                        </select>
                                    </div>
                                    <div class="col-md-7">
                                        <input id="" type="number" class="form-control" name="phone_number"  required placeholder="Утасны дугаар*">

                                    <!--@if ($errors->has('phone_number'))-->
                                        <!--<span class="invalid-feedback" role="alert">-->
                                    <!--<strong>{{ $errors->first('phone_number') }}</strong>-->
                                        <!--</span>-->
                                        <!--@endif-->
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control" name="password" required placeholder="*******">
                                            </div>
                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="*******">
                                            </div>
                                        </div>
                                        <span class="invalid-feedback" role="alert">
                                        <strong>fdsafda</strong>
                                    </span>

                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                                <br>
                                <div class="form-group row mb-0">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-md btn-primary btn-block">
                                            Бүртгүүлэх
                                        </button>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
    <div class="row"></div>





@endsection
@section('footer')
    @endsection