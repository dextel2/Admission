<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Admin Area | Dashboard</title>
   <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
   <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<body>
   <!-- Almost Common for Every Page -->
   <?php include'adminMenu.php' ?>
   <header id="header">
      <div class="container">
         <div class="row">
            <div class="col-md-10">
               <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Search Records </h1>
            </div>
         </div>
      </div>
      </div>
      </div>
   </header>
   <section id="breadcrumb">
      <div class="container">
         <ol class="breadcrumb">
            <li class="active">Records</li>
         </ol>
      </div>
   </section>
   <?php include 'side-menu.php' ?>
   <div class="col-md-9">
      <!-- Website Overview -->
      <div class="panel panel-default">
         <div class="panel-heading main-color-bg">
            <h3 class="panel-title">Admissions Record</h3>
         </div>
         <div class="panel-body">
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="exampleSelect1">Select Year</label>
                     <select class="form-control" id="exampleSelect1">
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="exampleSelect1">Select Course</label>
                     <select class="form-control" id="exampleSelect1">
                        <option>BCA</option>
                        <option>BBA</option>
                        <option>MBA</option>
                        <option>MSC (IT)</option>
                        <option>MSC (LS)</option>
                        <option>MHRM</option>
                        <option>MSW</option>
                     </select>
                  </div>
               </div>
            </div>
            <br>
            <table border=1 class="table table-striped table-hover">
               <tr>
                  <th>ID</th>
                  <th>Student Name</th>
                  <th>Course</th>
                  <th>Year</th>
                  <th>Test Result </th>
               </tr>
               <tr>
                  <td>1</td>
                  <td>Yash Karanke</td>
                  <td>MSC (IT)</td>
                  <td>2018</td>
                  <td>20</td>
               </tr>
               <tr>
                  <td>1</td>
                  <td>Yash Karanke</td>
                  <td>MSC (IT)</td>
                  <td>2018</td>
                  <td>20</td>
               </tr>
            </table>
         </div>
      </div>
   </div>
   </div>
   </div>
   </section>
   <script>
      CKEDITOR.replace( 'editor1' );
   </script>
   <!-- Bootstrap core JavaScript
      ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>