<!DOCTYPE html>
<?php 
include "header.php";
?>
<html>
<head>
	<title>PROJECTS</title>
</head>
<style>
.hr
{
	border: 1px solid black;
	width: 1468px;
	margin-left: -1068px;
	
	opacity: 0.1;
}

</style>
<body>
	

	<div class="container" style="width:1500px;margin-left:10px;">
  <h4 style="color: gray;">Dashboard : Projects</h4>
  <div class="panel panel-default" style="height:250px;width:100%;">
    <div class="panel-body" style="color:#4C8EBA "><h5 style="margin-top: 3px;"><strong>PROJECTS</strong></h5>
    	<div style="margin-top: -40px;margin-left: 1039px;">


<button type="button" class="btn btn-danger" disabled="">Delete Selected</button>
<button style="background-color: lightgray;" type="button" class="btn btn-default btn-sm">
          <span id="mymodal" data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-search"></span> Search 
        </button>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div style="width: 115%;" class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color: gray;">Add Project</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
      <span class="required" style="color: red;">*</span> <label for="usr" style="color: gray;">Project Name:</label>
      <input type="text" class="form-control" id="usr">
    </div>
    <div class="container">
  <ul style="width: 57%;" class="nav nav-tabs" style="width: 100px;">
    <li class="active"><a data-toggle="tab" href="#basic">Basic</a></li>
    <li><a data-toggle="tab" href="#team">Team</a></li>
    <li><a data-toggle="tab" href="#approval">Approval</a></li>
    <li><a data-toggle="tab" href="#billing">Billing</a></li>
    <li><a data-toggle="tab" href="#advanced">Advanced</a></li>
    <li><a data-toggle="tab" href="#others">Others</a></li>
    <li><a data-toggle="tab" href="#attachment">Attachment</a></li>
</ul>
  <div class="tab-content">
    <div id="basic" class="tab-pane fade in active">
    	<div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Client Name</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
    	<option value="">None</option>
        </select>
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Project Code</h6></label>
        <input class="form-control" id="ex2" type="text">
      </div>
  </div>
  <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Team Lead</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
    	<option value="">None</option>
        </select>
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Project Manager</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
    	<option value="">None</option>
        </select>
      </div>
  </div>
</div>


<div id="team" class="tab-pane fade">
	<div style="margin-top: 10px;" class="container" class="col-xs-3">
        <label for="ex2" style="color: black;"><h6><b>Total Members :</b></h6></label>
        <div style="margin-left: 500px;margin-top: -35px;" class="checkbox">
  		<label style="color: black;">
  		<input type="checkbox" value="">Select All</label>
		</div>
        <input style="width: 606px;" class="form-control" id="ex2" type="text" placeholder="search for Team Members">
      </div>
 </div>
<div id="approval" class="tab-pane fade">

	<div class="form-group row">
		<div class="col-xs-4">
	<label style="color: black;margin-top: 5px;" for="ex2"><h6>Timesheet Approval Type</h6></label>
    	<select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
    	<option value="">Approval Not Required</option>
    	<option>Team Lead-->Project Manager</option>
       <option>Team Lead</option>
        <option>Project Manager</option>
        <option>Employee Manager</option>
      </select>
    </div>

    <div class="col-xs-4">
	<label style="color: black;margin-top: 5px;" for="ex2"><h6>Expense Approval Type</h6></label>
    	<select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
    	<option value="">Approval Not Required</option>
    	<option>Team Lead-->Project Manager</option>
        <option>Team Lead</option>
        <option>Project Manager</option>
        <option>Employee Manager</option>
      </select>
    </div>
</div>
	
</div>

<div id="billing" class="tab-pane fade">
	<div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Default Billing Rate</h6></label>
        <input class="form-control" id="ex1" type="text">
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Project Billing Type</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
    	<option value=""></option>
    	<option>Use Employee Own Billing Rate</option>
        <option>Use Project Roles Billing Rate</option>
        <option>Use Project Employees Billing Rate</option>
        <option>Use Project Task Billing Rate</option>
      </select>
      </div>
  </div>
  <div class="form-group row">
      <div class="col-sm-3">
        <label for="ex1" style="color: black;"><h6>Billing Rate Type</h6></label>
        <select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
        <option value=""></option>
    	<option>Per Hour</option>
    	<option>Fixrd Bid</option>
      </select>
      </div>
      <div class="col-sm-3">
        <label for="ex2" style="color: black;"><h6>Fixed Cost</h6></label>
        <input class="form-control" id="ex2" type="text">
      </div>
  </div>

</div>

<div id="advanced" class="tab-pane fade">
	<div class="form-group">
      <label style="color: gray;margin-top: 20px;" for="comment">Project Description</label>
      <textarea style="width: 630px;" class="form-control" rows="3" id="comment"></textarea>
    </div>
    <div class="form-group row">
      <div class="col-xs-3">
        <label for="ex1" style="color: black;"><h6>Duration (Hours) </h6></label>
        <input class="form-control" id="ex1" type="text">
      </div>
      <div class="col-xs-3">
        <label for="ex2" style="color: black;"><h6>Project Estimated Cost</h6></label>
        <input class="form-control" id="ex2" type="text">
      </div>
  </div>

  <div class="form-group row">
		<div class="col-xs-3">
	<label style="color: black;margin-top: 5px;" for="ex2"><h6>Project Status</h6></label>
    	<select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
    	<option value=""></option>
    	<option>Onhold</option>
        <option>In Progress</option>
        <option>Cancelled</option>
        <option>Completed</option>
      </select>
    </div>

    <div class="col-xs-3">
	<label style="color: black;margin-top: 5px;" for="ex2"><h6>Project Type</h6></label>
    	<select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
    	<option value=""></option>
    	<option>Marketing</option>
        <option>Technology</option>
        <option>Training</option>
      </select>
    </div>
</div>
</div>

<div id="others" class="tab-pane fade">
 <div class="container">
      <div class="form-group row">
        <div class='col-sm-2'>
        	<label for="ex2" style="color: black;"><h6>Start Date</h6></label>
            <div class='input-group date' id='datetimepicker'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
          </div>
          <div style="margin-left: 150px;" class='col-sm-2'>
          	<label for="ex2" style="color: black;"><h6>Due Date</h6></label>
            <div class='input-group date' id='duedate'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
          </div>
        </div>
   </div>

<div class="form-group row">
	<div class="col-xs-3">
	<label style="color: black;margin-top: 5px;" for="ex2"><h6>Project Template</h6></label>
    	<select class="selectpicker" data-show-subtext="true" data-live-search="true" id="type">
    	<option value="">Select</option>
   
      </select>
    </div>
</div>

</div>

<div id="attachment" class="tab-pane fade">

<div class="file-upload-wrapper">
  <input type="file" id="input-file-max-fs" class="file-upload" data-max-file-size="2M" />
</div>

</div>
</div>
      </div>
      <div class="modal-footer" style="margin-top: 25px;">
      	<button type="button" class="btn btn-success">Add Project</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>


<a href="#" class="btn btn-success">
	<span id="mymodal" data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-plus">Add Project 
        </span></a>
<hr class="hr">

<p style="margin-left: -1050px;color: black;">Show</p>
  <select style="width: 85px;margin-left: -1005px;margin-top: -40px;" class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      <p style="margin-left: -915px;margin-top: -30px;color: black;">entries</p>
      <div class="form-group">
        <div style="margin-top: -29px;">
        <label style="margin-left: 60px;color: black;" for="search">Search</label>
      </div>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="search" style="margin-left: 104px;width: 200px;margin-top: -30px;">
        </div>
      </div>
         <div style="margin-top: 60px;margin-left: -1050px;color: #363636;">
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
</div>
</div>
</div>


</body>
</html>

<<script type="text/javascript">
            $(function () {
                $('#datetimepicker').datepicker();
            });
            $(function () {
                $('#duedate').datepicker();
            });
 </script>

 <script type="text/javascript">
 	$('.file_upload').file_upload();
 </script>