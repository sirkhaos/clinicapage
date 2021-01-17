<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div class="modal-body">

<form action="frontend/addNew" method="post">
    <label for="exampleInputEmail1"> </label>
    <select class="form-control m-bot15 js-example-basic-single pos_select" id="pos_select" name="patient" value=''> 
        <option value=" ">Select .....</option>
        <option value="patient_id" style="color: #41cac0 !important;"></option>
        <option value="add_new" style="color: #41cac0 !important;"></option>
    </select>

    <div class="pos_client_id clearfix">

        <div class="col-md-12 payment pad_bot pull-right">
            <div class="col-md-3 payment_label"> 
                <label for="exampleInputEmail1"> </label>
            </div>
            <div class="col-md-9"> 
                <input type="text" class="form-control pay_in" name="patient_id" placeholder="patient_id">
            </div>
        </div>

    </div>

    <div class="pos_client clearfix">

        <label for=""></label>
        <input type="text" class="form-control" name="p_name" placeholder="p_name">
        <label for=""></label>
        <input type="rut" class="form-control" name="p_rut" placeholder="p_rut">
        <label for=""></label>
        <input type="email" class="form-control" name="p_email" placeholder="p_email">
        <label for=""></label>
        <input type="text" class="form-control" name="p_phone" placeholder="p_phone">
        <!-- <label for="">HOSPITAL PHONE</label>
         <input type="text" class="form-control">-->
        <label for=""></label>
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
    <label for=""> </label>
    <select class="form-control" name="doctor" id="doctors">
        <option value="">Select ..... doc</option>
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

<label for=""></label>
<input type="text" class="form-control default-date-picker" readonly="" id="date" name="date" id="" value='' placeholder="">
<label for=""></label>
<select class="form-control m-bot15" name="time_slot" id="aslots" value=''> 

</select>
<label for=""> </label>
<input type="text" class="form-control" name="remarks" id="" value='' placeholder="">
<input type="hidden" name="request" value=''>

<button type="submit" name="submit" class="btn btn-primary mt-3 pull-right"> </button>

</form>


</div>
</body>
</html>