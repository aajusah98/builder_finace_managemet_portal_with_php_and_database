<?php
include "db/logic.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADB_Offical_Work</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Martel">
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="fontawesome/css/all.min.css">
      <script type="text/javascript" src="bootstrap/jquery-3.5.1.min.js"></script>
    <style media="screen">
    #officefld
    {
      border: 2px double blue !important;
      margin-bottom: 20px;
      xmin-width: 0;
      padding: 10px;
      position: relative;
      border-radius:4px;
      background-color:#f5f5f5;
      padding-left:10px!important;
    }

    .cr {
        position: relative;
        display: inline-block;
        border: 1px solid #a9a9a9;
        border-radius: .25em;
        width: 1.9em;
        height: 1.9em;
        float: left;
        margin-right: .5em;
      }
      label
      {
      font-family:'Lora';
      font-size:17px;
      color: #0008ff;
      }

      table,tr,th{

    border-top: 0px !important;

    font-family:'Lora';
    font-size:19px;
    color: #0008ff;
    font-weight: bold;



      }
      table,tr,td{

        border-top: 0px !important;
      }

    </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="welcome.php?bname=Nepal%20Investment%20Bank%20Ltd">ALKA DESIGNERS AND BUILDERS</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        </div>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav">
          <li class="active"><a href="welcome.php?bname=Nepal%20Investment%20Bank%20Ltd">Home</a></li>
                <li><a href="secondpage.php">OFFICIAL FORM</a></li>
          </li>
          <li><a href="users_display.php">PRINT INITIAL DATA</a></li>
            <li><a href="final_official_display.php">PRINT FINAL DATA</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li style="color:red; font-size: 15px; font-family: 'Martel'; margin-top:19px;text-align:center; text-transform:uppercase;">WELCOME TO ADB</li>
          <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-in"></span>Logout</a></button> </li>
        </ul>
          </div>
      </div>
    </nav>


<div class="container-fluid">
<div class="panel panel-primary">
  <div class="panel-heading"><p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:25px; margin:5px; color:black ;">ALKA DESIGNERS AND BUILDERS (OFFICIAL FINAL)</p></div>
    <div class="panel-body">
      <form method="post">
        <fieldset id="officefld">
        <p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:#ff4700;">ADB OFFICE WORK</p>
          <hr style="border-top: 1px  solid blue; margin:0px;">
          <div class="table-responsive">
              <table class="table table-borderless">
                    <tr>
                      <th>
                        <label for="Party_Name">Bank Name:</label>
                      </th>
                      <td>
                        <?php
                           $sql = "SELECT * FROM bank";
                            $result = $conn->query($sql);
                          ?>
                        <SELECT class="form-control" name="bank_id">
                          <?php while($row = mysqli_fetch_array($result)):;?>
                             <!-- $_GET['bname']==$row[1] it will print selected  -->
                            <option value="<?php echo $row[0]; ?>"><?php echo $row[1];?></option>
                                <?php endwhile;?>
                        </SELECT>
                      </td>
                      <th>
                        <label >Clint Name:</label>
                      </th>
                      <td>
                        <?php
                        $query="SELECT * FROM clint_data";
                        $result=mysqli_query($conn,$query);
                         ?>
                           <select name="clint_id" class="form-control" >
                             <?php while ($row=mysqli_fetch_array($result)):;?>
                             <option value="<?php echo $row[0];?>" selected > <?php echo $row[7]; ?> </option>
                           <?php endwhile;?>
                           </select>
                      </td>

                    </tr>
                    <tr>

                      <th>
                           <label>Field Visited By :</label>
                      </th>
                      <td>
                        <input type="text" name="field_visitor" placeholder="Enter Field Visiter Name"  class="form-control">
                      </td>

                      <th>
                       <label>ADB Visited Date:</label>
                      </th>
                      <td>
                        <input  type="date"   class="form-control"  name="adb_visited_date" >
                      </td>
                    </tr>
                    <tr>
                      <th>
                           <label>Initial Report Sent Date:</label>
                      </th>
                      <td>
                        <input type="date" name="ini_rep_sent_date"  class="form-control">
                      </td>
                      <th>
                       <label>Initial Report Prepared By:</label>
                      </th>
                      <td>
                        <input  type="text"   class="form-control"  placeholder="Enter Your Name" name="ini_rep_pre_by" >
                      </td>
                    </tr>
                    <tr>
                      <th>
                           <label>Final Report Sent Date:</label>
                      </th>
                      <td>
                        <input type="date" name="final_rep_pre_date"  class="form-control">
                      </td>
                      <th>
                       <label>Final Report Prepared By:</label>
                      </th>
                      <td>
                        <input  type="text"  class="form-control"  placeholder="Enter Your Name" name="final_rep_pep_by" >
                      </td>
                    </tr>



<script type="text/javascript">

function Amount() {
  var f=parseFloat(document.getElementById("amntrecived").value);
  var d=parseFloat(document.getElementById("disamnt").value);
  var a=f-d;
document.getElementById("adv").value=a;

}

</script>


                    <tr>
                      <th>
                           <label>Total Amount:</label>
                      </th>
                      <td>
                        <input type="number" id="tolamnt" name="total_amount" placeholder="Enter Total Amount" class="form-control">
                      </td>

                      <th>
                           <label>Due Amount:</label>
                      </th>
                      <td>
                        <input type="number" id="amntrecived" name="due_amount" placeholder="Enter Due Amount" class="form-control">
                      </td>
                    </tr>

                    <tr>
                      <th>
                           <label>Discount Amount:</label>
                      </th>
                      <td>
                        <input type="number" id="disamnt" value="0" name="discount_amount" placeholder="Enter Discount Amount" class="form-control">
                      </td>

                      <th>
                           <label>Discounted By:</label>
                      </th>
                      <td>
                        <select class="form-control" name="dicounter_name">
                          <option value="Engineer Atmaram">Engineer Atmaram</option>
                          <option value="Engineer Sanja">Engineer Sanja</option>
                          <option value="No Discount" selected>No Discount</option>
                        </select>
                     </td>
                    </tr>
                    <tr>
                      <th>
                           <label>Payment Recived By:</label>
                      </th>
                      <td>
                        <input type="text" name="payment_rec_by" placeholder="Enter Your Name" class="form-control">
                      </td>
                      <th>
                       <label>Payment Method:</label>
                      </th>
                      <td>
                        <select class="form-control" name="payment_method">
                          <option value="CASH">CASH</option>
                          <option value="ACCOUNT">ACCOUNT</option>
                        </select>
                     </td>
                   </tr>
                   <tr>
                     <th><label>Form Fille By:</label></th>
                     <td ><input type="text" name="form_filled_by" placeholder="Enter Your Name" class="form-control" required></td>
                     <th>
                          <label>ADB Ref No(Take From Register):</label>
                     </th>
                     <td>
                       <input type="text" name="adb_ref_no" placeholder="ADB Reference Number" class="form-control">
                     </td>
                   </tr>
                   <tr>
                     <th>
                      <label>Bill Number:</label>
                     </th>
                     <td>
                       <input  type="number"  class="form-control"  placeholder="Enter Bill Number" name="bill_num">
                     </td>
                     <th>
                      <label><button onclick="Amount()" type="button">Actuacl Amount Is:</button></label>
                     </th>
                     <td>
                       <input type="text" name="final_payment_recived" id="adv"  class="form-control" readonly required >
                    <p ></p>

                     </td>
                   </tr>




                    </table>
                    </div>

        </fieldset>
        <div class="col text-center">
               <button type="submit" name="office_submit" style="background-color: #00f300;" class="btn btn-default"><p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:blue ;">Submit</p></button>
         </div>
      </form>
      </div>
    </div>
</div>
</html>
