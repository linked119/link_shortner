<?php session_start();?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Example of Auto Loading Bootstrap Modal on Page Load</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">

<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>
<body>
<div style="width:100%; box-shadow:none;"class="wrapper ">
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><span style="color:#ff589e;">Create</span> <span style="color:#a284d8;">link here !</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                

      <form action="#" autocomplete="off">
      <input type="text" spellcheck="false" name="full_url" placeholder="Enter or paste a long url" required>
      <i class="url-icon uil uil-link"></i>
      <button>Shorten</button>
     

     

      <div class="blur-effect"></div>
      <div class="popup-box">
      <div class="info-box">Your short link is ready. You can also edit your short link now but can't edit once you saved it.</div>
      <form action="#" autocomplete="off">
      
      <input style="height: 45px;
      padding: 0 35px 0 15px;
      margin-top: 3px;
      position:relative;
      right:-0px;
      width:200px;
      border: 1px solid #ccc;" type="text" class="shorten-url" spellcheck="false" required>
      <i class="copy-icon uil uil-copy-alt"></i>
      <button style=" width: 100%;
      height: 45px;
      position: relative;
      right: 0;
      font-size: 20px;
      margin-top: 4px;
      margin-left:2px;
      width:180px;">Save</button>
      </form>
      <script src="script.js"></script>


        
      </div>
    </div>
  </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>