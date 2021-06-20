<!DOCTYPE html>
<html>
<head>
    <title>e-Collection</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">


<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script> -->


<!-- autocomplete -->
<link rel="stylesheet" href="<?=base_url();?>assets/autocomplete/css/bootstrap.css" >
<!-- <link rel="stylesheet" href="<?=base_url();?>assets/autocomplete/css/jquery-ui.css"> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/overcast/jquery-ui.min.css" integrity="sha512-uhRZ0EP8LWCnPThiGrXLSIuqg4O+jPVWASoEsaRXM7f20flrtyk6v3jET0HPg8XjmMZftNIQbl4AR2FMhoDQUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- autocomplete -->

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



<script type="text/javasript">


</script>



</head>
<body>        
    <div class="container">
        <h1>INPUT INVOICE</h1> 
        <br>
        <a href="<?=base_url();?>mainmenu/index">DASHBOARD</a><br>
        <br/>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">List Data</a></li>
            <li><a data-toggle="tab" href="#menu1">Data Baru</a></li>
            <!-- <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
            <li><a data-toggle="tab" href="#menu3">Menu 3</a></li> -->
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
                    <th>Create By</th>                                    
                    <th>Create Date</th>                                    
                    <th>Last Modified</th>                                    
                    <th>Modified By</th>                                    
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
                        <td><?=$value->rekananshipping_name;?></td>                                                                                                                                                                   
                        <td><?=$value->create_by; ?> </td>    
                        <td><?=$value->create_date; ?> </td>    
                        <td><?=$value->modified_by; ?> </td>    
                        <td><?=$value->modified_date; ?> </td>                                                                            
                        <td><button type="button" class="btn btn-warning" title="Edit">Edit</button>
                        </td>            
                        <td>
                                <!-- <button type="button" class="btn btn-danger" title="Delete">Delete</button>    -->
                                <a href="<?=base_url().'crud/delete_mastertrcs/'.$value->id_officialreceiptmaster;?>" class="btn btn-danger" >delete</a>

                        </td>            
                    </tr>
                    <?php    }?>                                  
                    </tbody>  
      </table>
            </div>
            <div id="menu1" class="tab-pane fade">
                <form  id="forminputinvoice" action="<?php echo site_url('crud/add_invoice');?>" method="POST">

                              <div class="form-group">
                              <label class="control-label">Tanggal Invoice</label>
                              <div class='input-group date' >
                                   <input type='text' class="form-control" id='tglinvoice' name="tglinvoice"/>
                                   <span class="input-group-addon">
                                   <span class="glyphicon glyphicon-calendar"></span>
                                   </span>
                              </div>
                              </div>

                              <div class="form-group">
                              <label class="control-label">Tanggal Jatuh Tempo</label>
                              <div class='input-group date' >
                                   <input type='text' class="form-control" id='tglduedate' name="tglduedate" />
                                   <span class="input-group-addon">
                                   <span class="glyphicon glyphicon-calendar"></span>
                                   </span>
                              </div>
                              </div>

                              <div class="form-group">
                              <label for="tipe_transaksi">Tipe Transaksi</label>
                              <input type="hidden" name="agreementtype_id" id="agreementtype_id">
                              <input type="text" name="tipe_transaksi" class="form-control" id="tipe_transaksi"  placeholder="Tipe Transaksi" 
                              style="width:500px;">
                              </div>

                              <div class="form-group">
                              <label for="rekanan_name">Perusahaan</label>
                              <input type="hidden" name="rekanan_id" id="rekanan_id">
                              <input type="text" name="rekanan_name" class="form-control" id="rekanan_name"  placeholder="Nama Perusahaan" 
                              style="width:500px;">
                              </div>


                              <div class="form-group">
                              <label for="rekananshipping_name">Shop Name</label>
                              <input type="hidden" name="rekananshipping_line" id="rekananshipping_line">
                              <input type="text" name="rekananshipping_name" class="form-control" id="rekananshipping_name" name="rekananshipping_name" placeholder="Shop Name" 
                              style="width:500px;">
                              </div>

                             <div class="form-group">
                                   <label for="invoiceid">No.Invoice</label>
                                   <input type="text" class="form-control" id="invoiceid" name = "invoiceid" placeholder="Nomer Invoice">
                            </div>

                            <div class="form-group">
                                   <label for="invoice_desc">Deskripsi Invoice</label>
                                   <textarea class="form-control" id="invoice_desc" name="invoice_desc" rows="3"  placeholder="Keterangan Invoice"> </textarea>
                            </div>

                            <div class="form-group">
                                   <label for="installment_ke">Installment ke</label>
                                   <input type="text" class="form-control" id="installment_ke" name = "installment_ke" placeholder="Installment Ke">
                            </div>



                            <div class="form-group">
                                   <label for="invoice_amount">Nominal Invoice (Rp)</label>
                                   <input type="text" class="form-control" id="invoice_amount" name = "invoice_amount" placeholder="Nominal Invoice">
                            </div>



                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>           
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
          // $.noConflict();
          $('#table_field').DataTable();
     });
     </script>


     <!-- <script type="text/javascript">
               $(document).ready(function()
               {
                    $.noConflict();  
                    $( "#datepicker" ).datepicker();
               });
     </script> -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" /> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

<script type='text/javascript'>
$( document ).ready(function() 
{

     $('#tglinvoice').datetimepicker();
     $('#tglduedate').datetimepicker();

});
</script>

<!-- <script src="<?=base_url();?>assets/autocomplete/js/jquery-3.3.1.js" type="text/javascript"></script> -->
<!-- <script src="<?=base_url();?>assets/autocomplete/js/bootstrap.js" type="text/javascript"></script> -->

<script src="<?=base_url();?>assets/autocomplete/js/jquery-ui.js" type="text/javascript"></script>

     <script type="text/javascript">
          $(document).ready(function()
          {
               // $.noConflict();
               $('#tipe_transaksi').autocomplete({
                    source: "<?php echo site_url('crud/get_autocomplete');?>",

                    select: function (event, ui) 
                    {
                    $(this).val(ui.item.label);
                    $('#agreementtype_id').val(ui.item.description); 
                    } , 
                    change:function(event,ui)
                    {
                        if(!ui.item)
                        {
                          $('#tipe_transaksi').val('');    
                          $('#agreementtype_id').val('');                           
                        } 
                    }
               });


                $('#rekanan_name').autocomplete({
                    source: "<?php echo site_url('crud/get_autocomplete_rekananname');?>",
        
                    select: function (event, ui) 
                    {
                        $('[name="rekanan_name"]').val(ui.item.label); 
                        $('[name="rekanan_id"]').val(ui.item.description); 
                        $('[name="rekananshipping_name"]').val('');
                    } ,  change:function(event,ui)
				{
					if(!ui.item)
					{
                        $('#rekanan_name').val('');
                        $('[name="rekanan_id"]').val('');
					}
				}
                });


                var rekananshippingname = "<?php echo site_url('crud/get_rekananshippingname');?>";
                $('#rekananshipping_name').autocomplete({
                    source: function(request, response) 
                    {
                    $.getJSON(rekananshippingname, { rekanan: $('[name="rekanan_id"]').val(), shopname:$('[name="rekananshipping_name"]').val() }, 
                                response);
                    },
                    minLength: 1,
        
                    select: function (event, ui) {
                        $('[name="rekananshipping_name"]').val(ui.item.label); 
                        $('[name="rekananshipping_line"]').val(ui.item.description); 
                    }, change:function(event,ui)
				{
					if(!ui.item)
					{
                        $('#rekananshipping_name').val('');
                        $('[name="rekananshipping_line"]').val('');
					}
				}
                });



          });
     </script>


</html>