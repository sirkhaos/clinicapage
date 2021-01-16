<!doctype html>
<html class="no-js" lang="en">
    <?php
    $settings = $this->frontend_model->getSettings();
    $title = explode(' ', $settings->title);
    ?>
    <head>
        <base href="<?php echo base_url(); ?>">
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hospital Management </title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="shortcut icon" type="image/x-icon" href="front/img/favicon/favicon-16x16.png" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,400i,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="front/css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="front/css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="common/assets/bootstrap-datepicker/css/datepicker.css" />
        <link rel="stylesheet" type="text/css" href="common/assets/bootstrap-timepicker/compiled/timepicker.css">
        <link rel="stylesheet" href="front/css/flexslider.css"/>
        <link href="front/assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
        <link href="front/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
        <link rel="stylesheet" href="front/assets/revolution_slider/css/rs-style.css" media="screen">
        <link rel="stylesheet" href="front/assets/revolution_slider/rs-plugin/css/settings.css" media="screen">
        <link rel="stylesheet" href="front/css/animate/animate.min.css">
        <link rel="stylesheet" href="front/css/style.css">
        <link rel="stylesheet" href="front/css/responsive.css">

    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="20">


        <header>
            <nav class="navbar navbar-expand-lg py-3 fixed-top scrollTop bg-light">
                <div class="container">
                    <a class="navbar-brand" href="frontend#header">
                        <?php
                        if (!empty($settings->logo)) {
                            if (file_exists($settings->logo)) {
                                echo '<img width="200" src=' . $settings->logo . '>';
                            } else {
                                echo $title[0] . '<span> ' . $title[1] . '</span>';
                            }
                        } else {
                            echo $title[0] . '<span> ' . $title[1] . '</span>';
                        }
                        ?>
                    </a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#bar"> 
                        <span><i class="fa fa-bars"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="bar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link active" href="#header">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="frontend#hospital-management">Reserva una Cita</a></li>
                            <li class="nav-item"><a class="nav-link" href="frontend#service">Servicios</a></li>
                            <li class="nav-item"><a class="nav-link" href="frontend#package">Doctor Destacado</a></li>
                            <li class="nav-item"><a class="nav-link" href="frontend#footer">Contacto</a></li>
                            <li class="nav-item"><a class="nav-link" href="http://neuralclinica.cl/auth/login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>


        <section id="header" class="py-5">
            <!-- revolution slider start -->
            <div class="fullwidthbanner-container main-slider">
                <div class="fullwidthabnner">
                    <ul id="revolutionul" style="display:none;">
                        <!-- 1st slide -->

                        <style>


                            .slide_item_left{
                                top: 0px !important;
                                left: 0px !important;
                                background-size: contain !important;



                                position: absolute;
                                top: 0;
                                left: 0;
                                right: 0;
                                bottom: 0;
                                background-image: url("path/to/img");
                                background-repeat: no-repeat;
                                background-size: contain;


                            }

                            .slide_item_left img{
                                background-size: cover !important;
                            }
                            h1 {
                                font-size: 2.5rem !important;

                            </style> 


                            <?php
                            foreach ($slides as $slide) {
                                if ($slide->status == 'Active') {
                                    ?>

                                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="5000" data-thumb="">
                                        <div class="caption lfl slide_item_left"
                                             data-x="10"
                                             data-y="70"
                                             data-speed="400"
                                             data-start="0"
                                             data-easing="easeOutBack">
                                            <img src="<?php echo $slide->img_url; ?>" alt="Image 1">
                                        </div>
                                        <div class="home-content text-center">
                                            <h1 class="caption lfr wow slideInLeft"
                                                data-wow-duration="2s"
                                                data-x="100"
                                                data-y="220"
                                                >
                                                    <?php echo $slide->text1; ?>
                                            </h1>

                                            <h6 class="caption lfr wow slideInUp"
                                                data-wow-duration="2s"
                                                data-x="100"
                                                data-y="280"
                                                >
                                                    <?php echo $slide->text2; ?>
                                            </h6>
                                        </div>
                                    </li>

                                    <?php
                                }
                            }
                            ?>

                            <!-- 2nd slide  -->




                        </ul>
                        <div class="tp-bannertimer tp-top"></div>
                    </div>
                </div>
                <!-- revolution slider end -->



            </section>


            <section id="hospital-management" class="py-5">
                <div class="content-lg">
                    <div class="container">
                        <div class="row py-5">
                            <div class="col-md-12 text-center">
                                <h1><?php echo $settings->title; ?></h1>
                                <p><?php echo $settings->block_1_text_under_title; ?></p>
                            </div>
                            <?php
                            $message = $this->session->flashdata('feedback');
                            if (!empty($message)) {
                                ?>
                                <div class="flashmessage col-md-12" style="text-align: center;
                                     color: green;
                                     font-size: 23px;
                                     font-weight: 500;"> <?php echo $message; ?></div>

                            <?php } ?>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <i class="fa fa-phone phone"></i>
                                            <h6>TELÉFONO: <?php echo $settings->emergency; ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-3" data-toggle="modal" data-target="#modal">
                                    <div class="card-body card-2nd">
                                        <div class="card-content">
                                            <i class="fa fa-calendar"></i>
                                            <h6>Reserva una Cita</h6>
                                        </div>

                                    </div>
                                </div>

                                <div class="modal" role="dialog" id="modal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body">

                                                <form action="frontend/addNew" method="post">
                                                    <label for="exampleInputEmail1"> <?php echo lang('patient'); ?></label>
                                                    <select class="form-control m-bot15 js-example-basic-single pos_select" id="pos_select" name="patient" value=''> 
                                                        <option value=" ">Select .....</option>
                                                        <option value="patient_id" style="color: #41cac0 !important;"><?php echo lang('patient_id'); ?></option>
                                                        <option value="add_new" style="color: #41cac0 !important;"><?php echo lang('add_new'); ?></option>
                                                    </select>

                                                    <div class="pos_client_id clearfix">

                                                        <div class="col-md-12 payment pad_bot pull-right">
                                                            <div class="col-md-3 payment_label"> 
                                                                <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('id'); ?></label>
                                                            </div>
                                                            <div class="col-md-9"> 
                                                                <input type="text" class="form-control pay_in" name="patient_id" placeholder="">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="pos_client clearfix">

                                                        <label for=""><?php echo lang('patient'); ?> <?php echo lang('name'); ?></label>
                                                        <input type="text" class="form-control" name="p_name">
                                                        <label for=""><?php echo lang('patient'); ?> <?php echo lang('email'); ?></label>
                                                        <input type="email" class="form-control" name="p_email">
                                                        <label for=""><?php echo lang('patient'); ?> <?php echo lang('phone'); ?></label>
                                                        <input type="text" class="form-control" name="p_phone">
                                                        <!-- <label for="">HOSPITAL PHONE</label>
                                                         <input type="text" class="form-control">-->
                                                        <label for=""><?php echo lang('patient'); ?> <?php echo lang('gender'); ?></label>
                                                        <select class="form-control" name="p_gender">
                                                            <option value="Male" <?php
                                                            if (!empty($patient->sex)) {
                                                                if ($patient->sex == 'Male') {
                                                                    echo 'selected';
                                                                }
                                                            }
                                                            ?> > Male </option>   
                                                            <option value="Female" <?php
                                                            if (!empty($patient->sex)) {
                                                                if ($patient->sex == 'Female') {
                                                                    echo 'selected';
                                                                }
                                                            }
                                                            ?> > Female </option>
                                                            <option value="Others" <?php
                                                            if (!empty($patient->sex)) {
                                                                if ($patient->sex == 'Others') {
                                                                    echo 'selected';
                                                                }
                                                            }
                                                            ?> > Others </option>
                                                        </select>
                                                    </div>
                                                    <label for=""> <?php echo lang('doctor'); ?></label>
                                                    <select class="form-control" name="doctor" id="adoctors">
                                                        <option value="">Select .....</option>
                                                        <?php foreach ($doctors as $doctor) { ?>
                                                            <option value="<?php echo $doctor->id; ?>"<?php
                                                            if (!empty($payment->doctor)) {
                                                                if ($payment->doctor == $doctor->id) {
                                                                    echo 'selected';
                                                                }
                                                            }
                                                            ?>><?php echo $doctor->name; ?> </option>
                                                                <?php } ?>

                                                    </select>

                                                    <label for=""><?php echo lang('date'); ?></label>
                                                    <input type="text" class="form-control default-date-picker" readonly="" id="date" name="date" id="" value='' placeholder="">
                                                    <label for=""><?php echo lang('available_slots'); ?></label>
                                                    <select class="form-control m-bot15" name="time_slot" id="aslots" value=''> 

                                                    </select>
                                                    <label for=""> <?php echo lang('remarks'); ?></label>
                                                    <input type="text" class="form-control" name="remarks" id="" value='' placeholder="">
                                                    <input type="hidden" name="request" value=''>

                                                    <button type="submit" name="submit" class="btn btn-primary mt-3 pull-right"> <?php echo lang('submit'); ?></button>

                                                </form>


                                            </div>

                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <i class="fa fa-heart heart"></i>
                                            <h6>30 oriente 1420, edificio plaza oriente, oficina 315 Tercer piso</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="service">

                <div class="content-lg">
                    <div class="container">
                        <div class="row py-5">
                            <div class="col-md-12 text-center">
                                <h1>NUESTROS SERVICIOS</h1>
                                <h6 class="lead"><?php echo $settings->service_block__text_under_title; ?></h6>
                            </div>
                        </div>

                        <div class="row text-center py-4">
                            <?php foreach ($services as $service) { ?>
                                <div class="col-md-6 justify-content-between">
                                    <div class="service-content-left">
                                        <img width="200px" style="border-radius: 100px" src=" <?php echo $service->img_url; ?>" alt=""> 
                                            <h4><?php echo $service->title; ?></h4>
                                            <p><?php echo $service->description; ?></p>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>

                        </div>
                    </div>

                </section>


                <section id="package" class="py-5">
                    <div class="content-lg">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center py-5">
                                    <h2>DOCTOR DESTACADO</h2>
                                    <p><?php echo $settings->doctor_block__text_under_title; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="container" id="doctors">
                                    <div class="row">
                                        <?php
                                        $count = count($featureds);
                                        $i = 1;
                                        foreach ($featureds as $featured) {
                                            ?>
                                            <div class="col-lg-4 wow <?php
                                            if ($i % 3 == 1) {
                                                echo'bounceInRight';
                                            } elseif ($i % 3 == 0) {
                                                echo 'bounceInLeft';
                                            } else {
                                                echo 'pulse';
                                            }
                                            ?>
                                                 " data-wow-duration="2s">
                                                <div class="person text-center">
                                                    <img src="<?php echo $featured->img_url; ?>" alt="">
                                                </div>
                                                <div class="person-info text-center">
                                                    <h4>
                                                        <a href="javascript:;"><?php echo $featured->name; ?></a>
                                                    </h4>
                                                    <p class="text-muted"> <?php echo $featured->profile; ?> </p>

                                                    <p><?php echo $featured->description; ?></p>
                                                </div>
                                            </div>

                                            <?php
                                            $i = $i + 1;
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!--  <div class="col-md-3">
                                       <div class="card text-center wow bounceInLeft mb-3" data-wow-duration="2s">
                                           <div class="card-header">
                                               <h4>Pro pack</h4>
                                           </div>
                                           <div class="card-img">
                                               <img src="front/img/package/Hospital-Management.jpg" class="img-fluid" alt="">
                                           </div>
                                           <div class="card-body">
           
                                               <p>accountant</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <button class="btn btn-dark">Get Now</button>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-3">
                                       <div class="card text-center wow pulse mb-3" data-wow-duration="2s">
                                           <div class="card-header">
                                               <h4>Pro pack</h4>
                                           </div>
                                           <div class="card-img">
                                               <img src="front/img/package/Hospital-Management.jpg" class="img-fluid" alt="">
                                           </div>
                                           <div class="card-body">
           
                                               <p>accountant</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <button class="btn btn-dark">Get Now</button>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-3">
                                       <div class="card text-center text-center wow pulse mb-3" data-wow-duration="2s">
                                           <div class="card-header">
                                               <h4>Pro pack</h4>
                                           </div>
                                           <div class="card-img">
                                               <img src="front/img/package/Hospital-Management.jpg" class="img-fluid" alt="">
                                           </div>
                                           <div class="card-body">
           
                                               <p>accountant</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <button class="btn btn-dark">Get Now</button>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-3">
                                       <div class="card text-center wow bounceInRight" data-wow-duration="2s">
                                           <div class="card-header">
                                               <h4>Pro pack</h4>
                                           </div>
                                           <div class="card-img">
                                               <img src="front/img/package/Hospital-Management.jpg" class="img-fluid" alt="">
                                           </div>
                                           <div class="card-body">
           
                                               <p>accountant</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <p>appointment</p>
                                               <button class="btn btn-dark">Get Now</button>
                                           </div>
                                       </div>
                                   </div> -->
                            </div>
                        </div>
                    </div>
                </section>



                <footer id="footer" class="py-5">
                    <div class="content-lg">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="contact-info text-center">
                                        <h4>DATOS DE CONTACTO</h4>
                                        <p>Dirección: <?php echo $settings->address; ?> </p>
                                        <p>Teléfono: <?php echo $settings->phone; ?></p>
                                        <p>Correo electrónico: <span><?php echo $settings->email; ?></span> </p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="latest-tweet">
                                        <h4 class="text-center">ÚLTIMO TWEET</h4>
                                        <div class="shape">
                                            <div class="cube"></div>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-2 col-xs-2">
                                                    <i class="fa fa-twitter"></i>
                                                </div>
                                                <div class="col-md-10 col-sm-10 col-xs-10">
                                                    <p>Please follow <span><a href="<?php echo $settings->twitter_id; ?>">@<?php echo $settings->twitter_username; ?></a></span> for all future updates of us!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="social-media text-center">
                                        <h4>MANTÉNGASE CONECTADO</h4>

                                        <div class="social-icon">
                                            <ul>
                                                <?php if (!empty($settings->facebook_id)) { ?>
                                                    <li class=""><a href="<?php echo $settings->facebook_id; ?>"><i class="fa fa-facebook"></i></a></li> <?php } ?>
                                                <?php if (!empty($settings->google_id)) { ?>
                                                    <li><a href="<?php echo $settings->google_id; ?>"><i class="fa fa-google-plus"></i></a></li> <?php } ?>
                                                <?php if (!empty($settings->twitter_id)) { ?>
                                                    <li><a href="<?php echo $settings->twitter_id; ?>"><i class="fa fa-twitter"></i></a></li> <?php } ?>
                                                <?php if (!empty($settings->youtube_id)) { ?>
                                                    <li><a href="<?php echo $settings->youtube_id; ?>"><i class="fa fa-youtube"></i></a></li> <?php } ?>

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>


                <script src="front/js/jquery.js"></script>
                <script src="front/js/bootstrap/bootstrap.min.js"></script>
                <script src="front/js/wow/wow.min.js"></script>
                <script src="front/js/smoothscroll/jquery.smoothscroll.min.js"></script>
                <script src="front/js/script.js"></script>
                <script type="text/javascript" src="common/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
                <script type="text/javascript" src="common/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
                <script src="front/assets/fancybox/source/jquery.fancybox.pack.js"></script>

                <script type="text/javascript" src="front/assets/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
                <script type="text/javascript" src="front/assets/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
                <script src="front/js/revulation-slide.js"></script>
                <script>
                    $('.default-date-picker').datepicker({
                        format: 'dd-mm-yyyy',
                        autoclose: true
                    });
                    $('#date').on('changeDate', function () {
                        $('#date').datepicker('hide');
                    });
                    $('#date1').on('changeDate', function () {
                        $('#date1').datepicker('hide');
                    });</script>

                <script>
                    $(document).ready(function () {
                        $('.timepicker-default').timepicker({defaultTime: 'value'});
                    });</script>




                <script>
                    $(document).ready(function () {
                        $('.pos_client').hide();
                        $('.pos_client_id').hide();
                        $(document.body).on('change', '#pos_select', function () {

                            var v = $("select.pos_select option:selected").val()
                            if (v == 'add_new') {
                                $('.pos_client').show();
                                $('.pos_client_id').hide();
                            } else if (v == 'patient_id') {
                                $('.pos_client_id').show();
                                $('.pos_client').hide();
                            } else {
                                $('.pos_client_id').hide();
                                $('.pos_client').hide();
                            }
                        });
                    });</script>


                <script>
                    $(document).ready(function () {
                        $('.appointment').hide();
                        $(document.body).on('click', '#appointment', function () {

                            if ($('.appointment').is(":hidden")) {
                                $('.appointment').show();
                            } else {
                                $('.appointment').hide();
                            }
                        });
                    });</script>






                <script type="text/javascript">
                    $(document).ready(function () {
                        $("#adoctors").change(function () {
                            // Get the record's ID via attribute  
                            var id = $('#appointment_id').val();
                            var date = $('#date').val();
                            var doctorr = $('#adoctors').val();
                            $('#aslots').find('option').remove();
                            // $('#default').trigger("reset");
                            $.ajax({
                                url: 'frontend/getAvailableSlotByDoctorByDateByJason?date=' + date + '&doctor=' + doctorr,
                                method: 'GET',
                                data: '',
                                dataType: 'json',
                            }).done(function (response) {
                                var slots = response.aslots;
                                $.each(slots, function (key, value) {
                                    $('#aslots').append($('<option>').text(value).val(value)).end();
                                });
                                //   $("#default-step-1 .button-next").trigger("click");
                                if ($('#aslots').has('option').length == 0) {                    //if it is blank. 
                                    $('#aslots').append($('<option>').text('No Further Time Slots').val('Not Selected')).end();
                                }
                                // Populate the form fields with the data returned from server
                                //  $('#default').find('[name="staff"]').val(response.appointment.staff).end()
                            });
                        });
                    });
                    $(document).ready(function () {
                        var id = $('#appointment_id').val();
                        var date = $('#date').val();
                        var doctorr = $('#adoctors').val();
                        $('#aslots').find('option').remove();
                        // $('#default').trigger("reset");
                        $.ajax({
                            url: 'frontend/getAvailableSlotByDoctorByDateByJason?date=' + date + '&doctor=' + doctorr,
                            method: 'GET',
                            data: '',
                            dataType: 'json',
                        }).done(function (response) {
                            var slots = response.aslots;
                            $.each(response.aslots, function (key, value) {
                                $('#aslots').append($('<option>').text(value).val(value)).end();
                            });
                            $("#aslots").val(response.current_value)
                                    .find("option[value=" + response.current_value + "]").attr('selected', true);
                            //   $("#default-step-1 .button-next").trigger("click");
                            if ($('#aslots').has('option').length == 0) {                    //if it is blank. 
                                $('#aslots').append($('<option>').text('No Further Time Slots').val('Not Selected')).end();
                            }
                            // Populate the form fields with the data returned from server
                            //  $('#default').find('[name="staff"]').val(response.appointment.staff).end()
                        });
                    });
                    $(document).ready(function () {
                        $('#date').datepicker({
                            format: "dd-mm-yyyy",
                            autoclose: true,
                        })
                                //Listen for the change even on the input
                                .change(dateChanged)
                                .on('changeDate', dateChanged);
                    });
                    function dateChanged() {
                        // Get the record's ID via attribute  
                        var id = $('#appointment_id').val();
                        var date = $('#date').val();
                        var doctorr = $('#adoctors').val();
                        $('#aslots').find('option').remove();
                        // $('#default').trigger("reset");
                        $.ajax({
                            url: 'frontend/getAvailableSlotByDoctorByDateByJason?date=' + date + '&doctor=' + doctorr,
                            method: 'GET',
                            data: '',
                            dataType: 'json',
                        }).done(function (response) {
                            var slots = response.aslots;
                            $.each(response.aslots, function (key, value) {
                                $('#aslots').append($('<option>').text(value).val(value)).end();
                            });
                            //   $("#default-step-1 .button-next").trigger("click");
                            if ($('#aslots').has('option').length == 0) {                    //if it is blank. 
                                $('#aslots').append($('<option>').text('No Further Time Slots').val('Not Selected')).end();
                            }


                            // Populate the form fields with the data returned from server
                            //  $('#default').find('[name="staff"]').val(response.appointment.staff).end()
                        });
                    }

                </script>

                <script>

                    $(document).ready(function () {
                        $('.caption img').removeAttr('style');
                        var windowH = $(window).width();
                        $('.caption img').css('width', (windowH) + 'px');
                        $('.caption img').css('height', '500px');
                    });

                </script>
                <script>

                    RevSlide.initRevolutionSlider();
                    $(window).load(function () {
                        $('[data-zlname = reverse-effect]').mateHover({
                            position: 'y-reverse',
                            overlayStyle: 'rolling',
                            overlayBg: '#fff',
                            overlayOpacity: 0.7,
                            overlayEasing: 'easeOutCirc',
                            rollingPosition: 'top',
                            popupEasing: 'easeOutBack',
                            popup2Easing: 'easeOutBack'
                        });
                    });
                    $(window).load(function () {
                        $('.flexslider').flexslider({
                            animation: "slide",
                            start: function (slider) {
                                $('body').removeClass('loading');
                            }
                        });
                    });
                    //    fancybox
                    jQuery(".fancybox").fancybox();
                    $(function () {
                        $('a[href*=#]:not([href=#])').click(function () {
                            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                                var target = $(this.hash);
                                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                                if (target.length) {
                                    $('html,body').animate({
                                        scrollTop: target.offset().top
                                    }, 1000);
                                    return false;
                                }
                            }
                        });
                    });
                </script>
            </body></html>