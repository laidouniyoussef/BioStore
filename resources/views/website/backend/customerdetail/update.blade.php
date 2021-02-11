@extends('website.backend.layouts.main')

@section('content')
<div class="x_panel">
    <div class="x_title">
        <h2>Update Customer Detail </h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                    {{--<li><a class="dropdown-item" href="#">Settings 1</a>
                    </li>
                    <li><a class="dropdown-item" href="#">Settings 2</a>
                    </li>--}}
                </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <br>
        <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="POST" action="{{route('customerDetail.update',$customerDetail->id)}}" >
            @csrf

            @method('PUT')
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> First Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input value="{{$customerDetail->f_name}}" type="text" id="f_name" name="f_name" required="required" class="form-control ">
                </div>
            </div>


            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Last Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input value="{{$customerDetail->l_name}}"type="text" id="l_name" name="l_name" required="required" class="form-control ">
                </div>
            </div>

            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Phone Number <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input value="{{$customerDetail->phone}}" type="text" id="phone" name="phone" required="required" class="form-control ">
                </div>
            </div>

            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> E-mail <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input value="{{$customerDetail->email}}" type="email" id="email" name="email" required="required" class="form-control ">
                </div>
            </div>



            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> City <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input  value="{{$customerDetail->city}}" type="text" id="city" name="city" required="required" class="form-control ">
                </div>
            </div>

            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> District <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input  value="{{$customerDetail->district}}" type="text" id="district" name="district" required="required" class="form-control ">
                </div>
            </div>

            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Address <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <textarea  id="address" name="address" required="required" class="form-control ">
                        {{$customerDetail->address}}</textarea>
                    </div>
            </div>


            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Postal Code <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input value="{{$customerDetail->post_code}}" type="text" id="post_code" name="post_code" required="required" class="form-control ">
                </div>
            </div>


            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Other Notes<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <textarea id="other_note" name="other_note" required="required" class="form-control ">
                        {{$customerDetail->other_note}}</textarea>
                    </div>
            </div>

           
            <div class="ln_solid"></div>
            <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                    <button class="btn btn-primary" type="button">Cancel</button>
                    <button class="btn btn-primary" type="reset">Reset</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>

        </form>
    </div></div> 
@endsection