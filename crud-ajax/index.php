<?php

include "./css/style.css";
include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM</title>
</head>

<body>
    <div class="container">

        <h1 class="title">Form</h1>


        <form action="" method="post" enctype="multipart/form-data">

            <div class="input-wrap">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name..">
            </div>

            <div class="input-wrap">
                <label for="country">Country</label>
                <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
                </select>
            </div>

            <div class="input-wrap">
                <label for="image">Upload Image</label>
                <input type="file" name="image" id="image">
            </div>

            <div class="input-wrap">
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
            </div>

            <input type="submit" id="data-insert" value="Submit" class="btn" name="submit">

            <a href="javascript:void(0)" id="view-all" class="btn">View All Data</a>

    </form>

</div>




<div class="table-wrap">
    <table>

        <tbody>

        </tbody>

    </table>        

</div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>

        $(document).ready(function(){

            $("#view-all").click(function(){
                displayData();
            });

                
                // Display data using Ajax
            function displayData(){
                $.ajax({

                    url: "display.php",

                    type: "POST",

                    success: function(data) {

                        $(".table-wrap tbody").html(data);

                    }

                });


            };









            $(document).on("click",".delete-id",function() {
                debugger;

                var deleteId = $(this).data('id');

                // Delete data using Ajax

                $.ajax({

                    url: 'delete.php',

                    type: 'POST',

                    data: {id : deleteId},

                    success: function(data) {


                        if(data == 1){

                            // displayData();

                        }else{

                            displayData();

                        }

                    }

                });
            });

        });

    </script>
    
</body>
</html>
