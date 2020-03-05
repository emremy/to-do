<nav class="navbar fixed-bottom  navbar-light" style="background-color: #e3f2fd;">
    <div class="container">
          <span class="navbar-text mr-auto myTime"></span>
          <?php include _functions.'/Modals/SwitchList.php';?>
      </div>
  </nav>
</body>
<script src="./Src/js/Ajax/SwitchTasks.js" type="text/javascript"></script>
<?php 
if(!empty($ResultData['JsFile'])){
    for($i = 0; $i<count($ResultData['JsFile']); $i++){
        echo "<script src='./Src/js/{$ResultData['JsFile'][$i]}' type='text/javascript'></script>\n";
    }
}
if(!empty($ResultData['Ajax'])){
    for($i = 0; $i<count($ResultData['Ajax']); $i++){
        echo "<script src='./Src/js/Ajax/{$ResultData['Ajax'][$i]}' type='text/javascript'></script>\n";
    }  
}
?>
<script src="./Src/js/TimeAndDate.js" type="text/javascript"></script>
</html>