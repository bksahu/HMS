<?php

$GLOBALS['title']="Assets-HMS";
$base_url="http://localhost/hms/";

require('./../../inc/sessionManager.php');
require('./../../inc/dbPlayer.php');


$ses = new \sessionManager\sessionManager();
$ses->start();
if($ses->isExpired())
{
    header( 'Location:'.$base_url.'login.php');


}
else
{


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["btnSave"])) {

            $db = new \dbPlayer\dbPlayer();
            $msg = $db->open();

            if ($msg = "true") {


                $amount = (float)$_POST['amount'];
                $data = array(
                    'type' => $_POST['type'],
                    'amount' => floatval($_POST['amount']),
                    'date' =>date("Y-m-d"),

                    'description' => $_POST['description']

                );
                $result = $db->insertData("cost",$data);

                if($result>=0)
                {

                    //  $db->close();
                    echo '<script type="text/javascript"> alert("Asset Added Successfully.");</script>';
                }
                elseif(strpos($result,'Duplicate') !== false)
                {
                    echo '<script type="text/javascript"> alert("Asset Already Exits!");</script>';
                }
                else
                {
                    echo '<script type="text/javascript"> alert("' . $result . '");</script>';
                }

            }
            else
            {
                echo '<script type="text/javascript"> alert("' . $msg . '");</script>';
            }
        }
    }


}

?>
<?php include('./../../master.php'); ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header titlehms"><i class="fa fa-pencil"></i>&nbsp; Add Asset</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-info-circle fa-fw"></i>&nbsp;Asset Information
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <form name="bill" action="add.php"  accept-charset="utf-8" method="post" enctype="multipart/form-data">


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <div class="form-group ">
                                        <label>Asset Type</label>
                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-cube"></i>&nbsp; </span>
                                            <input type="text" placeholder="Asset Type" class="form-control" name="type" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group ">
                                        <label>Amount</label>
                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-inr"></i>&nbsp; </span>
                                            <input type="text" placeholder="Amount" class="form-control" name="amount" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-info"></i>&nbsp; </span>
                                            <input type="text" placeholder="Description" class="form-control" name="description">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>





                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-2">
                                    <div class="form-group ">
                                        <button type="submit" class="btn btn-success" name="btnSave" ><i class="fa fa-check"></i>&nbsp; Save</button>
                                    </div>

                                </div>
                                <div class="col-lg-5">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>

</div>
<!-- /#page-wrapper -->


<?php include('./../../footer.php'); ?>
<script type="text/javascript">
    $( document ).ready(function() {



    });



</script>