<!DOCTYPE html>
<?php
require "header.php";
?>
<html>
<head>
	<title></title>
	<style>
.hr
{
	border: 1px solid black;
	width: 1468px;
	margin-left: -1170px;
	opacity: 0.1;
}

</style>
</head>
<body>
<div class="panel-default">	
<div class="container" style="width:1500px;margin-left:10px;">
  <h4 style="color: gray;">Dashboard:Clients</h4>
  <div class="panel panel-default" style="height:250px;width:100%;">
    <div class="panel-body" style="color:#4C8EBA "><h5>CLIENTS</h5>
    	<div style="margin-top: -40px;margin-left: 1155px;">

<button type="button" class="btn btn-danger" disabled="">Delete Selected</button>
<a href="#" class="btn btn-success">
          <span id="mymodal" data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-plus">Add Client 
        </a></span>
        <hr class="hr">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color: gray;">Add Client</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
      <span class="required" style="color: red;">*</span> <label for="usr" style="color: gray;">Client Name:</label>
      <input type="text" class="form-control" id="usr">
    </div>
    <div class="container">
  <ul style="width: 50%;" class="nav nav-tabs" style="width: 100px;">
    <li class="active"><a data-toggle="tab" href="#basic">Basic</a></li>
    <li><a data-toggle="tab" href="#details">Details</a></li>
    <li><a data-toggle="tab" href="#notes">Notes</a></li>
    <li><a data-toggle="tab" href="#billing">Billing</a></li>
  </ul>
  <div class="tab-content">
    <div id="basic" class="tab-pane fade in active">
    	<div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Client Nick</h6></label>
        <input class="form-control" id="ex1" type="text">
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Email Address</h6></label>
        <input class="form-control" id="ex2" type="text">
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Website</h6></label>
        <input class="form-control" id="ex1" type="text">
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Default Billing Rate</h6></label>
        <input class="form-control" id="ex2" type="text">
      </div>
  </div>
</div>


<div id="details" class="tab-pane fade">
    	<div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Address1</h6></label>
        <input class="form-control" id="ex1" type="text">
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Address2</h6></label>
        <input class="form-control" id="ex2" type="text">
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Country</h6></label>
        <input class="form-control" id="ex1" type="text">
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>City</h6></label>
        <input class="form-control" id="ex2" type="text">
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>State</h6></label>
        <input class="form-control" id="ex1" type="text">
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Zip code</h6></label>
        <input class="form-control" id="ex2" type="text">
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Telephone1</h6></label>
        <input class="form-control" id="ex1" type="text">
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Telephone2</h6></label>
        <input class="form-control" id="ex2" type="text">
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Fax</h6></label>
        <input class="form-control" id="ex1" type="text">
      </div>
  </div>
</div>
<div id="notes" class="tab-pane fade">
	<div class="form-group">
      <label style="color: gray;" for="comment">Notes</label>
      <textarea style="width: 550px;" class="form-control" rows="5" id="comment"></textarea>
    </div>
</div>

<div id="billing" class="tab-pane fade">
	<div class="form-group row">
		<div class="col-xs-3">
	<label style="color: black;margin-top: 5px;" for="ex2"><h6>Fixed Bid Billing Mode</h6></label>
    	<select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
    	<option value="">None</option>
       <option>Fixed Bid Client</option>
        <option>Fixed Bid Project</option>
        <option>Fixed Bid Task</option>
      </select>
    </div>
    <div class="col-xs-3" id="row_dim">
      <div style="margin-top:0px;">
    <label style="margin-top:5px;color: black;" for="bill"><h6>Fixed Bid Cost</h6></label></div>
 	<input type="text" name="length" class="dimension" style="margin-left:2px;margin-top:-1px;height: 38px">
     </div>

  </div>
</div>

</div>
      </div>
      <div class="modal-footer" style="margin-top: 25px;">
      	<button type="button" class="btn btn-success">Add client</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>
    </div>


  </div>
  <p style="margin-left: 5px;">Show</p>
  <select style="width: 85px;margin-left: 50px;margin-top: -40px;" class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      <p style="margin-left: 135px;margin-top: -30px;">entries</p>
      <div style="margin-left: 1150px;margin-top: -40px;" class="form-group">
      <label class="control-label col-sm-9" for="pwd">Search</label>
      <div class="col-sm-3">          
        <input style="margin-left: -175px;width: 230px;" type="text" class="form-control" id="pwd" name="pwd">
      </div>
          </div>
          <div style="margin-top: 60px;width: 98%;margin-left: 20px;">
      <table class="table table-bordered">
    <thead>
      <tr>
      	 <th></th>
        <th></th>
        <th>Client_Nick</th>
        <th>Client_Name</th>
        <th>Email_Address</th>
        <th>Country</th>
        <th>Telephone</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      
    </tbody>
  </table>
</div>
  </div>
</body>
</html>


<script type="text/javascript">
	$(function() {
    $('#row_dim').hide(); 
    $('#type').change(function(){
        if($('#type').val() == 'Fixed Bid Client') {
            $('#row_dim').show(); 
        } else {
            $('#row_dim').hide(); 
        } 
    });
});
</script>