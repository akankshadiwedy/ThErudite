<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style type="text/css">
	body{
		background-image: url("php-mysql.jpg");
	}
	.btn-primary-outline {
  border: 1px solid #fff;
  border-radius: 8px;
  color: #fff;
  font-size: 14px;
  font-weight: 600;
  padding: 15px 125px;
  margin-left: 70px;
  background-color: transparent;
  text-transform: uppercase;
}

.btn-primary-outline:hover {
  color: #fff;
  background-color: #017fb5;
}
</style>
</head>
<body>
<div id="user" class="container">
	<h2 style="font-size:2em; padding:5%; color:white">Hey Girl! </h2>
</div>

<div id="scholar">
	
</div>
<?php

$output = shell_exec('curl -X POST --form "file=@C:\xampp\htdocs\new\upload\Akanksha_Diwedy.docx" --form "extract_metadata=true" --form "extract_text=true" --form "extract_xmlattributes=false" --form "apikey=8a96043b-61ae-4b02-9dca-e835655bc159" https://api.havenondemand.com/1/api/sync/extracttext/v1');
//echo "<pre>$output</pre>";

?>

<script type="text/javascript">
//	var x='curl -X POST --form "file=@C:\xampp\htdocs\lady\upload\Akanksha_Diwedy.docx" --form "extract_metadata=true" --form "extract_text=true" --form "extract_xmlattributes=false" --form "apikey=8a96043b-61ae-4b02-9dca-e835655bc159" https://api.havenondemand.com/1/api/sync/extracttext/v1';
//	console.log(x);
var x="";
x = '<?php echo $output; ?>';
var obj = JSON.parse(x);
//console.log(obj);
for(var key in obj)
 	{
 		obj1=obj[key];
 		for( var key2 in obj1)
 		{
 			for( var key3 in obj1[key2])
 			{
 				//document.getElementById("user").innerHTML=obj1[key2][reference];

 				if (key3=="content")

        {
          y=obj1[key2][key3];
          //console.log(y);
          var res = y.match(/IT/g);
            //console.log(res);
            if(res != null)
            { 
            if(res[0] == 'IT')
            {
              document.getElementById("scholar").innerHTML="<button class='col-sm-10 btn-primary-outline' type='button'>Ada I. Pressman Memorial Scholarships</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>AAUW Selected Professional Fellowships</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>Betty Lou Bailey SWE Region F Scholarships</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>Google Anita Borg Memorial Scholarships</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>Lydia I. Pickup Memorial Scholarship</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>Women in Defense Horizons Scholarships</button>";
            }
          }

            var res = y.match(/CE/g);
            //console.log(res);
            if(res != null)
            {
            if(res[0] == 'CE')
            {
              document.getElementById("scholar").innerHTML="<button class='col-sm-10 btn-primary-outline' type='button'>Ada I. Pressman Memorial Scholarships</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>AAUW Selected Professional Fellowships</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>Betty Lou Bailey SWE Region F Scholarships</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>Google Anita Borg Memorial Scholarships</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>Lydia I. Pickup Memorial Scholarship</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>Women in Defense Horizons Scholarships</button>";
            }
          }

            var res = y.match(/MBA/g);
            //console.log(res);
            if(res != null)
            {
            if(res[0] == 'MBA')
            {
              document.getElementById("scholar").innerHTML="<button class='col-sm-10 btn-primary-outline' type='button'>AAUW Selected Professions Group Fellowships</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>Little Family Foundation MBA Fellowship</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>C200 Scholar Awards</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>Toigo MBA Fellowship</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>Military MBA Scholarships</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>National Black MBA Association Graduate Scholarships</button>";
            }
          }

            var res = y.match(/Nursing/g);
            //console.log(res);
            if(res != null)
            {
            if(res[0] == 'Nursing')
            {
              document.getElementById("scholar").innerHTML="<button class='col-sm-10 btn-primary-outline' type='button'>AACN Scholarships</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>Geraldine “Polly” Bednash Scholarship</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>CertifiedBackground.Com-GNSA Scholarship</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>Hurst Reviews/AACN Nursing Scholarship</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>National Health Service Corps Scholarships</button>"+"<br><br>"+"<button class='col-sm-10 btn-primary-outline' type='button'>Johnson & Johnson/AACN Minority Nurse Faculty Scholars Program</button>";
            }
            }

        }
        //console.log(key3);
 			}
 		}
 	}
</script>
</body>
</html>
