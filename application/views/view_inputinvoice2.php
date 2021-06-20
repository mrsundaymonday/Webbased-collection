<!DOCTYPE html>
<html>
<head>
    <title>e-Collection</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">



    <style type="text/css">
        .dataTables_wrapper 
        {
            position: relative;
            clear: both;
            *zoom: 1;
            zoom: 1;
            font-size: 8 !important;
            /* font-style: inherit; */
            font-size: small !important;
            width: inherit !important;

        }

        h1.text_center 
          {
               font-size: 182%;
               font-weight: 400;
               text-align: center;
          }  

</style>



</head>
<body>        
    <div class="container">
        <h1>INPUT INVOICE</h1> 
        <br/>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">List Data</a></li>
            <li><a data-toggle="tab" href="#menu1">Data Baru</a></li>
            <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
            <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
        </ul>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <br>
                <table class="table is-narrow" id="table_field">
                    <thead>
                    <tr>
                    <th>No Transasksi</th>
                    <th>Tgl Invoice</th>
                    <th>Tgl Duedate</th>
                    <th>Tipe Transaksi</th>       
                    <th>Installment Ke</th>                                                                                                    
                    <th>No.Invoice</th>    
                    <th>Desc Invoice</th>    
                    <th>Nominal Invoice(Rp)</th>                                    
                    <th>Perusahaan</th>                                    
                    <th>Shopname</th>                                    
                    <th>Edit</th>                                                    
                    <th>Delete</th>      
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                    foreach($datainvoice as $value )
                        { ?>

                    <tr>
                        <td><?=$value->kode_transaksi; ?> </td>           
                        <td><?=$value->tgl_invoice; ?> </td>           
                        <td><?=$value->tgl_duedate; ?> </td>           
                        <td><?=$value->agreementtype_name; ?> </td>    
                        <td><?=$value->installment_ke; ?> </td>    
                        <td><?=$value->invoice_id; ?> </td>    
                        <td><?=$value->schedulepaymentdetil_descr; ?> </td>    
                        <td><?=$value->schedulepaymentdetil_amount; ?> </td>     
                        <td><?=$value->rekanan_name; ?> </td>    
                        <td><?=$value->rekananshipping_name; ?> </td>                                                                                                                                                                   
                        <td><button type="button" class="btn btn-warning" title="Edit">Edit</button>
                        </td>            
                        <td>
                                <button type="button" class="btn btn-danger" title="Delete">Delete</button>   
                        </td>            
                    </tr>
                    <?php    }?>                                  
                    </tbody>  
      </table>
            </div>
            <div id="menu1" class="tab-pane fade">
                <form>

                            <div class="form-group">
                                    <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    </div>
                            </div>


                             <div class="form-group">
                            <label for="exampleInputPassword1">Kata</label>
                            <input type="text" class="form-control" id="kata" placeholder="isi nama">
                            </div>

                            <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>

                            <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>           
            </div>
            <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Membuat navigasi tabs dynamic menggunakan bootstrap.</p>
            </div>
                <div id="menu3" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Belajar Membuat website dengan mudah</p>
            </div>
        </div>
    </div>
    <center><a href="<?=base_url();?>mainmenu">Back to Main menu</a></center> 
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() 
  {
      $('#table_field').DataTable();
  });
  </script>

    <script type="text/javascript">
        $(function () 
        {
            $('#datetimepicker1').datetimepicker();
        });
    </script>



</html>