<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Dynamic Add Input Field </title>
     <link href ="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
     <link href ="<?=base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">     
     <script src="<?=base_url();?>assets/js/jquery-3.1.1.min.js"> </script>

     <script type="text/javascript">
                $(document).ready(function()
                {
                      var html = '<tr><td><input class="form control" type="text"  name="txtFullname[]" required=""></td><td><input class="form control" type="text" name="txtEmail[]" required=""></td><td><input class="form control" type="text" name="txtPhone[]" required=""></td><td><input class="form control" type="text" name="txtAddress[]" required=""><td><input class="button btn-danger" type="button" name="remove" id="remove" value="Remove"></td>  </tr>';      
                      
                      var max = 3 ;
                      var x = 1;
                      
                       $("#add").click(function()
                       {
                            // alert("Hello World");
                            // $("#table_field").append(html);
                               if ( x <= max ) 
                               {
                                    $("#table_field").append(html);
                                    x++ ;
                               }  else 
                               {
                                   alert("Maximal penambahan data adalah " + max + "  record ! ");
                               }

                       });
                       $("#table_field").on('click','#remove',function()
                       {
                            // alert("Hello World");
                            $(this).closest('tr').remove();
                            x--;
                       });


                });


     </script>

                

</head>

<body>
           <div class="container">
                <form class="insert_form" id="insert_form" method="POST" action="<?=base_url('crud/tambah')?>">
                     <hr>
                     <h1 class="text_center">Dynamically Add Input Field & Insert Data</h1>
                     <hr>
                     <div class="input-field">
                         <table class="table table bordered" id="table_field">
                             <tr>
                                <th>Fullname</th>
                                <th>Email Address</th>
                                <th>Phone No</th>
                                <th>Address</th>    
                                <th>Add Or Remove</th>                                                    
                             </tr>

                             <tr>
                                 <td><input class="form control" type="text"  name="txtFullname[]" required=""></td>
                                 <td><input class="form control" type="text" name="txtEmail[]" required=""></td>
                                 <td><input class="form control" type="text" name="txtPhone[]" required=""></td>
                                 <td><input class="form control" type="text" name="txtAddress[]" required=""></td>
                                 <td><input class="button btn-warning" type="button" name="add" id="add" value="Add"></td>
                             </tr>
                         </table>
                        <center>
                             <input class="btn btn-success" type="submit" name="save" id="save" value="Save Data">
                        </center>
                         
                     </div>


                </form>
                  <br>                  
                <table class="table table-striped">
                      <tr>
                         <th>Fullname</th>
                        <th>Email Address</th>
                        <th>Phone No</th>
                        <th>Address</th>    
                      </tr> 
                      <?php
                         foreach($datauser as $value )
                              { ?>
                      <tr>
                           <td><?=$value->fullname; ?> </td>           
                           <td><?=$value->email; ?> </td>           
                           <td><?=$value->phone; ?> </td>           
                           <td><?=$value->address; ?> </td>                                                                 
                        </tr>             
                      <?php    }?>           

                </table>

           </div>     


</body>
</html>