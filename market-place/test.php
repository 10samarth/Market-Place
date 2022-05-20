<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Cosmocast</title>
      <link href="../../css/bootstrap-4.4.1.css" rel="stylesheet">
      <link href="../../css/site.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> 
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
      <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
   </head>
   <body>
      <?php include "navbar.php"; ?>
      <div class="container sectionSeperator mt-5">
         <h1>Top products in Market Place</h1>
 
      <div class="container sectionSeperator mt-3">
      <?php include "../cosmocast/curl.php"; 
         $op1 = get_top_rated_page("http://localhost:8010/cosmocast/read_curl_top.php");
         $op2 = get_top_rated_page("http://localhost:8010/cosmocast/del_curl.php");
         // fetchContacts();

         echo $op1;
         echo $op2;
      ?>  
      </div>
      </div>
   </body>
   <script>
      $(document).ready( function () {
         $('#table_id').DataTable({
            order: [[2, 'desc']],
         });
      } );
   </script>
</html>