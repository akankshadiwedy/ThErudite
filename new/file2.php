<html>
<head>
<title>PHP microsoft docx file Upload script</title>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
        background-image: url("about-bg.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
    }

    #box {
        margin: auto;
        margin-top: 100px;
        border-radius: 5px;
        padding: 200px;
        padding-left: 400px;
        background-color: #f2f2f2;
        border: 1px solid black;
        opacity: 0.5;
    }

    form .form-inline {
        opacity: 1; 
    }
</style>
</head>
<body>
<div><?php
if ( isset( $_FILES['docFile'] ) ) {
    if ($_FILES['docFile']['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") {
        $source_file = $_FILES['docFile']['tmp_name'];
        $dest_file = "upload/".$_FILES['docFile']['name'];
            
        if (file_exists($dest_file)) {
            print "The file name already exists!!";
        }
        else {
            move_uploaded_file( $source_file, $dest_file )
            or die ("Error!!");
            if($_FILES['docFile']['error'] == 0) {
            print "File was successfully uploaded!! <br/><br/>";
            print "<b><u>Details : </u></b><br/>";
            print "File Name : ".$_FILES['docFile']['name']."<br.>"."<br/>";
            print "File Size : ".$_FILES['docFile']['size']." bytes"."<br/>";
            print "File location : upload/".$_FILES['docFile']['name']."<br/>";
            $URL="http://localhost/new/test.php";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
            }
        }
    }
    else {
        if ( $_FILES['docFile']['type'] != "application/vnd.openxmlformats-officedo

        cument.wordprocessingml.document") {
            print "Error occured while uploading file : ".$_FILES['docFile']['name']."<br/>";
            print "Invalid  file extension, should be docx !!"."<br/>";
            print "Error Code : ".$_FILES['docFile']['error']."<br/>";
        }
    }
}
?></div>
<div id="box" class="container">
<div class="col-sm-8">
<form class="form-inline" enctype="multipart/form-data"
    action="<?php print $_SERVER['PHP_SELF']?>" method="post">
<div class="form-group"><input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
<input type="file" name="docFile" class="btn btn-default btn-lg" style="width:150%; padding-left:5%"></input></div>
<br>
<br>
<br>
<div class="form-group"><button class="btn btn-primary btn-lg" type="submit" value="upload!" >Upload</button></div>
</form>
</div>
</div>
</body>

</html>