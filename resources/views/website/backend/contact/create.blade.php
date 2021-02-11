@extends('website.backend.layouts.main')

@section('content')
<div class="x_panel">
    <div class="x_title">
        <h2>Create Contact</h2>
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
        <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="POST" action="{{route('contact.store')}}" >
            @csrf
            
            {{-- <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Product Category Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <select  class="form-control" name="product_category">
                        @foreach ($productcategory as $procat)
                            <option value="{{$procat->id}}" name="product_category">{{$procat->category_name}}</option>
                        @endforeach
                    </select>    
                </div>
            </div> --}}


            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Location <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="location" name="location" required="required" class="form-control ">
                </div>
            </div>


            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> E-mail <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="email" id="email" name="email" required="required" class="form-control ">
                </div>
            </div>


            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Address <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <textarea id="address" name="address" required="required" class="form-control ">
                    </textarea>
                    </div>
            </div>
            
            
            
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Phone <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="phone" name="phone" required="required" class="form-control ">
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