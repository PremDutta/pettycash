<?php
require 'db.php';
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--GOOGLE FONTS-->
<link href="https://fonts.googleapis.com/css?family=Merriweather:700" rel="stylesheet">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        iframe{
        width:100%;
        height:40vw;
        }

        button{
            border-radius: 5px ;
            margin:10px;
        }

    button:hover {
        box-shadow: 5px 5px 5px 5px rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    }

    </style>
</head>
<body>
    
        

<!--googlesheet-->

<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTXDUEADxDScHhb8j4BAbfJjb-q2oJkLEWclQ3-3Gw-C3Rluqv66MdINbvmohtwTqodjDvFN312ASGc/pubhtml?widget=true&amp;headers=false" ></iframe>

<!--button-->
<button type="button" class="btn btn-info btn-lg pull-right" data-toggle="modal" data-target="#myModal"> + Add Expense</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"></button>
        <h4 class="modal-title">Expense</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
            <div class="form-group">
                
                
                            <label class="col-md-2 control-label" for="date">Date</label>
                            <div class="col-md-10">
                                <input type="date" class="form-control" id="name" placeholder="Enter the date">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="name"> Full Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="fname" id="name" placeholder="Enter your Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label"  for="name">Category</label>
                            <div class="col-md-10">
                                <select name="category">
                                    <option value="bills">Bills</option>
                                    <option value="grocery">Grocery</option>
                                    <option value="fuel">Fuel</option>
                                    <option value="tours">Tours and Events</option>
                                    <option value="others">Others</option>
                                </select></div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="amount">Amount</label>
                            <div class="col-md-10">
                                <input type="number" class="form-control" name="amount" placeholder="Enter the amount" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="message">Description</label>
                            <div class="col-md-10">
                                <textarea class="form-control"  name="description"  placeholder="Enter the details of expense" rows="4"></textarea>
                            </div>
                        </div>

                        </div>

                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" >Save Changes</button>
      </div>
    </div>



</body>
</html>
    