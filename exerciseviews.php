<html>
<head><title></title>
<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
<script src="bootstrap-3.3.7/jquery/jquery-3.2.1.js"></script>
     <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

      <div class="row">

      <ul class="nav nav-tabs col-sm-12 col-sm-offset-4" style="border:none;">
      <li class="active" style="border:none;"><a data-toggle="tab" href="#pe">item</a></a></li>
      <li><a data-toggle="tab" href="#p">customer</a></li>
      <li><a data-toggle="tab" href="#pi">receipt</a></li>
    </ul>

    <div class="tab-content">

    <div id="pe" class="tab-pane fade in active">

    <div class="col-sm-6 col-sm-offset-2">
<form method="post" action="<?php echo site_url('Exercisecontroller/insert1');?>" class="col-sm-12" style="box-shadow: 1px 3px 8px #808080;margin-top:10px;">
<h1 class="caption col-sm-offset-5" style="font-size:px;">item</h1>
<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;margin-bottom:15px;">
<input type="text" name="price" class="form-control" placeholder="price" value="<?php
foreach ($this->s->select() as $row){}
echo $row-> itid; ?>" required></div>

<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;">
<input type="text" name="item" class="form-control" placeholder="item"></div>
<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;">
<input type="text" name="price" class="form-control" placeholder="price for one"></div>
<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;">
<input type="text" name="quantity" class="form-control" placeholder="quantity" ></div>
<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;margin-bottom:15px;">
<select class= "form-control" name="type">
    <option>books</option>
<option>food</option>
<option>medical drugs</option>
<option>electronic</option>
<option>others</option>
</select></div>
<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;margin-bottom:15px;">
<select class= "form-control" name="category">
    <option>local</option>
<option>import</option>
</select></div>
<div class="input-group col-sm-12" style="margin-top:15px;margin-bottom:15px;">
<input type="submit" name="submit" value="send" class="btn btn-default btn-primary col-sm-offset-4" class="form-control"></div>
</form>

<!---<table>
    <?php
foreach ($this->sel->select() as $row){
echo "<tr><td>".$row-> itemname."</td></tr>";
echo "<tr><td>".$row-> price."<td></tr>";
echo "<tr><td>".$row-> quantity."</td></tr>";
echo "<tr><td>".$row-> type."</td></tr>"; } ?>

</table>-->

</div>
       </div>

       <div id="p" class="tab-pane fade">
<div class="col-sm-6 col-sm-offset-2">
<form method="post" action="<?php echo site_url('Exercisecontroller/insert2');?>" class="col-sm-12" style="box-shadow: 1px 3px 8px #808080;margin-top:10px;">
<h1 class="caption col-sm-offset-5" style="font-size:px;">curstomer</h1>
<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;margin-bottom:15px;">
<input type="text" name="price" class="form-control" placeholder="price" value="<?php
foreach ($this->s->select1() as $cus){}
echo $cus-> cusid; ?>" required></div>

<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;">
<input type="text" name="cusname" class="form-control" placeholder="name"></div>
<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;">
<input type="text" name="cusaddress" class="form-control" placeholder="address"></div>
<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;">
<input type="text" name="cusphone" class="form-control" placeholder="phone" ></div>
<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;margin-bottom:15px;">
<input type="text" name="cussex" class="form-control" placeholder="sex" ></div>
<div class="input-group col-sm-12" style="margin-top:15px;margin-bottom:15px;">
<input type="submit" name="submit" value="send" class="btn btn-default btn-primary col-sm-offset-4" class="form-control"></div>
</form>
</div>
</div>


<div id="pi" class="tab-pane fade">

<div class="col-sm-6 col-sm-offset-2">
<form method="post" action="<?php echo site_url('Exercisecontroller/insert3');?>" class="col-sm-12" style="box-shadow: 1px 3px 8px #808080;margin-top:10px;">
<h1 class="caption col-sm-offset-5" style="font-size:px;">receipt</h1>
<!--<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;margin-bottom:15px;">
<input type="text" name="price" class="form-control" value="" required></div>-->

<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;">
  <?php
  echo "<select class=\"form-control\" placeholder=\"item\" name =\"itemname\" required>";
  		 echo"<option></option>";
  foreach($this->sel->select() as $row)
   {
  echo"<option>".$row-> itemname."</option>";
  }
  echo "</select>";
  ?>
</div>
<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;">
<?php
  echo "<select class=\"form-control\" placeholder=\"item\" name =\"cusname\" required>";
  		 echo"<option></option>";
  foreach($this->se->select1() as $cus)
   {
  echo"<option>".$cus-> cusname."</option>";
  }
  echo "</select>";
  ?></div>
<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;">
<input type="text" name="date" class="form-control" placeholder="date" value="<?php echo date("Y-m-d,H:i:s A");?>" ></div>
<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;margin-bottom:15px;">
<input type="text" name="price" class="form-control" placeholder="price" required></div>
<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;margin-bottom:15px;">
<input type="text" name="quantity" class="form-control" placeholder="quantity" required></div>
<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;margin-bottom:15px;">
<select class= "form-control" name="category">
    <option>local</option>
<option>import</option>
</select></div>

<div class="input-group col-sm-8 col-sm-offset-2" style="margin-top:15px;margin-bottom:15px;">
<select class= "form-control" name="type" required>
    <option>cash</option>
<option>credit card</option>
</select></div>
<div class="input-group col-sm-12" style="margin-top:15px;margin-bottom:15px;">
<input type="submit" name="submit" value="send" class="btn btn-default btn-primary col-sm-offset-4" class="form-control"></div>
</form>
<div class="input-group col-sm-12" style="margin-top:15px;margin-bottom:15px;">
<input type="submit" value="receipt" id="mybtn" class="btn btn-default btn-primary col-sm-offset-6" class="form-control"></div>

<div class="modal fade" id="mymodal" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header bg-primary">
                      <button type= "button" class="btn btn-success pull-right" class="lock" data-dismiss="modal">&times;</button>
                      </button>
                      <h3 class ="caption text-center">receipt</h3>
                  </div>
                  <div class="modal-body col-sm-offset-1">
                  <table border=1>
                      <?php
                      foreach($this->sel->select1() as $cus){
                      }
                      echo "<tr><td>"."customer name"."</td>";
                      echo "<td><h2>".$cus->cusname."</h2></td></tr>";?>
                      <tr><th>item</th>
                          <th>quantity</th>
                          <th>price</th>
                          <th>total cost</th>
                          </tr>
                           <?php
                           
                      foreach($this->sel->select2() as $re) {
                          echo"<tr>";
                          echo"<td><h3>".$re-> itemname."</h3></td>";
                          echo"<td><h3>".$re-> quantity."</h3></td>";
                          echo"<td><h3>".$re-> price."</h3></td>";
                          echo"<td><h3>".$re->quantity * $re-> price."</h3></td>";
                          echo"</tr>";

                      } ?></td></tr>


                  </table>
                  </div>
              </div>
          </div>
    </div>

</div>
</div>
</div>
</div>

<!---<table>
    <?php
foreach ($this->sel->select() as $row){
echo "<tr><td>".$row-> itemname."</td></tr>";
echo "<tr><td>".$row-> price."<td></tr>";
echo "<tr><td>".$row-> quantity."</td></tr>";
echo "<tr><td>".$row-> type."</td></tr>"; } ?>

</table>-->


</div>

  <script>
$(document).ready(function(){
    $("#mybtn").click(function(){
        $("#mymodal").modal();
    });
});
</script>
</body>
</html>