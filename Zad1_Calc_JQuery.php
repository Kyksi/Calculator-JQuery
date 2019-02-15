<?php
    require('../Login/session_check.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Zad. 1 - Calc JQuery</title>
        <link rel="stylesheet" href="CSS.css">
        <link rel="shortcut icon" href="../NS-icon.png" type="image/png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#calc-box").animate({marginRight: "100%", width: "0px"});
                $( "#calc-box" ).toggle();
                
                $("#checkbutton").click(function(){
                    if ($(this).is(':checked')) {
                        $("#calc-box" ).toggle("1000");
                        $("#calc-box").animate({marginRight: "0", width: "450px"});
                    } else {
                        $("#calc-box").animate({marginRight: "100%", width: "0px"});
                        $("#calc-box").toggle("1000");
                    }
                });
        
                /*  $("#btn1").click(function(){
                        $( "#calc-box" ).toggle("slide", {direction: 'left'}, 500);
                    }); */
                
                $(".calc-btn").click(function() {
                    $(".display").val($(".display").val()+$(this).val());
                });
                $(".operator").click(function() {
		          $(".display").val($(".display").val()+$(this).val());
                });
                
                $(".clear-btn").click(function() {
	              $(".display").val('');
                });
                
                $(".eval").click(function() {
	              $(".display").val(eval($(".display").val()));
                });
            });
    
        </script>
    </head>
    <body>
        <center>
            <input type="checkbox" id="checkbutton">
            <label for="checkbutton">
                <i></i>
            </label>
            <div id="calc-box">
                <div id="calculator">
	                <div class="top">
                        <input  class="display" type="text" style="width:290px" disabled>
	                </div>
	                <div class="keys">
		                <input type="button" class="calc-btn" value="7">
		                <input type="button" class="calc-btn" value="8">
		                <input type="button" class="calc-btn" value="9">
		                <input type="button" class="operator" value="+">
		                
		                <input type="button" class="calc-btn" value="4">
		                <input type="button" class="calc-btn" value="5">
		                <input type="button" class="calc-btn" value="6">
		                <input type="button" class="operator" value="-">
		                
		                <input type="button" class="calc-btn" value="1">
		                <input type="button" class="calc-btn" value="2">
		                <input type="button" class="calc-btn" value="3">
		                <input type="button" class="operator" value="*">
		                
		                <input type="button" class="clear-btn" value="C">
		                <input type="button" class="calc-btn" value="0">
		                <input type="button" class="calc-btn" value=".">
		                <input type="button" class="operator" value="/">
		                
		                <input type="button" class="eval" value="=">
	                </div>
                </div>
	        </div>
        </center>
        <footer>
            <p id="author"> Nazar Semeniuk</p>
        </footer>
    </body>
</html>
