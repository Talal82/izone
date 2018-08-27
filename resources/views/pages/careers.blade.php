@extends('main')

@section('title', '| Careers')

@section('content')
        <!--banner section -->
        <div class="next_banner">
            <figure><img src="images/next-banner-5.jpg" alt="image" class="img-responsive center-block"></figure>
            <div class="container">
                <div class="col-md-12">
                    <ul>
                        <li><a href="{{ route('index') }}">I zone Electromechanical</a></li><span>/</span>
                        <li>Careers</li>
                    </ul>
                </div>
            </div>   
        </div>  
        <!--banner section --> 

        <!--center section -->
        <div class="career_sec">
            <div class="container">
                <div class="row">

                    <div class="heading">
                        <div class="col-md-12">
                            <h2>Careers</h2>	
                        </div>

                        <div class="col-md-12">
                            <div class="btn-back">
                                <button class="btn btn-danger pull-right">Back</button>
                            </div>
                        </div>

                        

                    </div><!-- main heading and breadcrumbs -->

                    <div class="oi-form">

                        <form method="post" name="online-inquiry">

                            <!-- input field rows -->

                            <div class="col-md-4 col-xs-12 col-sm-6">
                                <div class="inq-field">
                                    <select name="">
                                    <option>Select</option>
                                        <option>Sample Text</option>
                                        <option>Sample Text</option>
                                    </select>
                                </div>
                            </div><!-- input field rows -->

                            <div class="col-md-4 col-xs-12 col-sm-6">
                                <div class="inq-field">
                                    <input type="text" name="" placeholder="Full Name" />
                                </div>
                            </div><!-- input field rows -->

                            <div class="col-md-4 col-xs-12 col-sm-6">
                                <div class="inq-field">
                                    <input type="text" name="" placeholder="Nationality" />
                                </div>
                            </div><!-- input field rows -->

                            <div class="col-md-4 col-xs-12 col-sm-6">
                            <div class="inq-field">
                                    <input type="text" name="" placeholder="phone" />
                                </div>
                                
                            </div><!-- input field rows -->

                            <div class="col-md-4 col-xs-12 col-sm-6">
                                <div class="inq-field">
                                    <input type="text" name="" placeholder="Mobile" />
                                </div>
                            </div><!-- input field rows -->

                            <div class="col-md-4 col-xs-12 col-sm-6">
                                <div class="inq-field">
                                    <input type="text" name="" placeholder="Email" />
                                </div>
                            </div><!-- input field rows -->

                            <div class="col-md-4 col-xs-12 col-sm-6">
                                <div class="inq-field">
                                    <select name="">
                                        <option>Country</option>
                                        <option>Sample Text</option>
                                        <option>Sample Text</option>
                                    </select>
                                </div>
                            </div><!-- input field rows -->

<div class="col-md-4 col-xs-12 col-sm-6">
                                <div class="inq-field">
                                    <select name="">
                                        <option>City</option>
                                        <option>Sample Text</option>
                                        <option>Sample Text</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-6">
                                <div class="inq-field">
                                    <input type="text" name="" placeholder="Address:" />
                                </div>
                            </div><!-- input field rows -->

                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="inq-field">
                                    <textarea name="" placeholder="Exerience detail:"></textarea>
                                    
                                </div>
                            </div><!-- textarea -->

                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="inq-field">
                                    <div class="upld_img">
                                        <input type="file" id="exampleInputFile">
                                        <span>support file format:jpg,jpeg,pdf,Docs-up to 1mb</span>
                                    </div>	
                                </div>
                            </div>

                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="recapcha">
                                    <img class="pull-left img-responsive" src="images/recapcha_dummy.jpg" />
                                    <input class="pull-right" type="submit" name="" value="Apply Now" />
                                    <input  class="pull-right" type="reset" name="" value="Clear" />
                                </div>
                            </div><!-- recapctcha section -->

                        </form><!-- inquiry form section -->

                    </div><!-- career bottm form section -->

                </div>
            </div>			
        </div>	



@endsection