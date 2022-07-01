<!DOCTYPE html>
<html lang="en">
<head>
  <title>DESIGNERS PAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
  .column {
    width: 100%;
  }


 


}
</style>


</head>
<body>

<div class="container">
  <h2>DESIGNERS PAGE</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="background-color: #800000; font-family: ALGERIAN; font-weight: bold; color: grey;">DESIGNED BY:</h4>
        </div>
        <div class="modal-body">
          
         <!-- <p>How to create side-by-side images with the CSS float property. On screens that are 500px wide or less, the images will stack on top of each other instead of next to each other:</p>
          <p>Resize the browser window to see the effect.</p>-->

          <div class="row" >
          <div class="column">
             <img src="theja.jpeg" alt="Snow" style="width:100%; /*border-radius: 50%;*/">
         </div>
        <div class="column">
           <img src="swathi.jpg" alt="Forest" style="width:100%; /*border-radius: 50%;*/">
        </div>
        <!--<div class="column">
           <img src="img_mountains.jpg" alt="Mountains" style="width:100%">
        </div>-->
       </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>