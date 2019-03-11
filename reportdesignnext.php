<!DOCTYPE html>
<?php
require "header.php";
?>
<html>
<head>
  <title>Report Design</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />

  <style>
.hr
{
  border: 1px solid black;
  width: 1468px;
  margin-left: -1170px;
  opacity: 0.1;
}
.collapsible {
  background-color: #4C8EBA;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: 2px #4C8EBA;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color:#4C8EBA;
  }

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
  border: 1px solid lightblue;

}
div.ex1 {
  background-color: white;
  height: 300px;
  width: 350px;
  overflow-y: scroll;
  border: 1px solid black;

}
</style>
</head>
<body>
  
<div class="panel-default"> 
<div class="container" style="width:1500px;margin-left:10px;">
  <h4 style="color: gray;">Dashboard:My Reports : Report Design</h4>
  <div>
     <button class="collapsible" style="width: 70%;">Report Information<i style="float: right;" class="fa fa-chevron-down" aria-hidden="true"></i></button>
<div class="content" style="width: 70%;">
 <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Report Name :</h6></label>
 
</div>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</div>

 <div>
     <button class="collapse" style="width: 70%;">Report Information</button>
<div class="content" style="width: 70%;">
 <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Report Name :</h6></label>
 
</div><br><br>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</div>

 <div>
     <button class="collapsible" style="width: 30%;">Column Order<i style="float: right;" class="fa fa-chevron-down" aria-hidden="true"></i>
</button>
     <div class="content" style="width: 30%;">
     <label for="ex2" style="color:black;margin-top: 5px;" ><h4>Selection</h4></label>
<div class="ex1">
  
</div>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</div>
</div>
<div>
     <button class="collapse" style="width: 70%;">Report Information</button>
<div class="content" style="width: 70%;">
 <label for="ex2" style="color:black;margin-top: 5px;" ><h6>Report Name :</h6></label>
 
</div><br>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</div>
<div>
     <button class="collapsible" style="width: 30%;">Group Order<i style="float: right;" class="fa fa-chevron-down" aria-hidden="true"></i></button>
     <div class="content" style="width: 30%;">
     <label for="ex2" style="color:black;margin-top: 5px;" ><h4>Selection</h4></label>
<div class="ex1">
  
</div><br>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</div>
</div>
<div>
<a  href="myreports.php" type="button" class="btn btn-success" style="background-color:#00C084;float:right;">Finish</a>

<a  href="reportdesign.php" type="button" class="btn btn-success" style="background-color:#00C084;float:right;">Previous</a>
 
 
 </div>
</body>
</html>




