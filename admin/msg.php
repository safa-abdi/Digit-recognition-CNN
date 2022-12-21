<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SCIN</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include_once('model/message.php');
$mes=new message();
$res=$mes->listeMsg();
echo "
<img src='img/ce.png' align='right' width='400px'>
  <section class='ftco-section ftco-no-pt ftco-no-pb'>
          <div class='container'>
            <div class='row d-flex'>
              <div ftco-animate img img-1 style='background-image: url('img/ce.png');'></div>
              <div class='col-md-9 ftco-animate makereservation p-4 p-md-5'>
                <div class='heading-section ftco-animate mb-5'>
                  <h1 class='s1'>Messages</h1>
                </div>";
                foreach ($res as $row){
                    echo"<table>
                  <div class='row'>
                    <div class='col-md-6'>
                      <div class='form-group'>
                       <tr> <td>Nom : $row[NomPer]</td>
                      </div>
                    </div>
                    <div class='col-md-6'>
                      <div class='form-group'>
                        <td>Email :$row[Email]</td>
                      </div>
                    </div>
                    <div class='col-md-6'>
                    <div class='form-group'>
                      <td>Message:$row[message]</td></tr></table>
                      <hr>";
}
?>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </section>
<br>
</body>
</html>