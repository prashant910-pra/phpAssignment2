<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $.post("json.php",
    {
      json_data: $('#json_data').val()
    },
    function(data,status){
      $('#res_json').html(data);
      if(data){
      $('.jS').removeClass('hide');
    }
    });
  });
});
</script>
</head>
<body>



<div id="wrapper">

<div id="page-wrapper">
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            JSON Examples
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                       
                                        <div class="form-group">
                                           
                                           <textarea id="json_data" rows="25" cols="60">
                                               [{
                                                  "id": 8,
                                                  "parent": 4,
                                                  "name": "Food & Lifestyle"
                                                },
                                                {
                                                  "id": 2,
                                                  "parent": 1,
                                                  "name": "Mobile Phones"
                                                },
                                                {
                                                  "id": 1,
                                                  "parent": 0,
                                                  "name": "Electronics"
                                                },
                                                {
                                                  "id": 3,
                                                  "parent": 1,
                                                  "name": "Laptops"
                                                },
                                                {
                                                  "id": 5,
                                                  "parent": 4,
                                                  "name": "Fiction"
                                                },
                                                {
                                                  "id": 4,
                                                  "parent": 0,
                                                  "name": "Books"
                                                },
                                                {
                                                  "id": 6,
                                                  "parent": 4,
                                                  "name": "Non-fiction"
                                                },
                                                {
                                                  "id": 7,
                                                  "parent": 1,
                                                  "name": "Storage"
                                                }
                                              ]

                                           </textarea>
                                        </div>
                                          <div class="form-group">
                                             <button class="btn btn-success">Get Json</button> 
                                        </div>
                                        
                                </div>
                                <div class="col-lg-6 jS hide">
                                    
                                       
                                        <pre><div id="res_json"></div></pre>
                                        
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            </div>
                            </div>
                </div>
                            </div>
                             </div>
                              </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
