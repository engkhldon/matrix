

<!DOCTYPE html>
<html dir="rtl">
<head>
<title>Laravel Currency Exchange Rate Calculator</title> 
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script> 
</head>
<body>
<div class="container mt-5">
<div class="card">
<div class="card-header" style="text-align:center;">
حاسبة تحويل عملات نظام الارشيف
</div>
<div class="card-body">
<form id="currency-exchange-rate" action="#" method="post" class="form-group">
<div class="row mb-3">
<div class="col-md-4">
<input type="text" name="amount" class="form-control" value="1">  
</div>
<div class="col-md-3">

<select name="from_currency" class="form-control"> 
<?php
foreach($data as $currency){ ?>
	<option value='<?php echo $currency->id ?>'><?php echo $currency->name ?></option>
<?php
}
?>

</select>
</div>
<div class="col-md-1"  >
<span style="border:2px solid blue;border-radius:50%; padding:5%;color:blue">TO</span>

</div>
<div class="col-md-3">
<select name="to_currency" class="form-control">
<?php
foreach($data as $currency){ ?>
	<option value='<?php echo $currency->id ?>'><?php echo $currency->name ?></option>
<?php
}
?>
</select>
</div>
</div>  
<div class="row">
<div class="col-md-4" style="margin-right:25%">
<input type="submit" name="submit" id="btnSubmit" class="btn btn-primary "   value="تحويل">
</div>
</div>
</form> 
</div>
<div class="card-footer">
<span id="output"></span>
</div>
</div>
</div>
<script>
$(document).ready(function () {
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$("#btnSubmit").click(function (event) {
//stop submit the form, we will post it manually.
event.preventDefault();
// Get form
var form = $('#currency-exchange-rate')[0];
// Create an FormData object 
var data =  {firstcurrID:1,secondcurrID:2,value:2000 };

// disabled the submit button
$("#btnSubmit").prop("disabled", true);
$.ajax({
type: "get",
url: "{{ url('currency') }}",
data: data,
processData: false,
contentType: false,
cache: false,
timeout: 800000,
success: function (data) {
$("#output").html(data);
$("#btnSubmit").prop("disabled", false);
},
error: function (e) {
$("#output").html(e.responseText);
console.log("ERROR : ", e);
$("#btnSubmit").prop("disabled", false);
}
});
});
});
</script>
</body>
</html>