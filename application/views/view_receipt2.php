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
        <div class="row">
          <div class="col-md-12">
                    <h1>INVOICE</h1> 
                    <br>
                    <a href="<?=base_url();?>mainmenu/index">DASHBOARD</a><br>
                    <br/>
                    <ul class="nav nav-tabs" id="myTab" >
                        <li class="active"><a data-toggle="tab" id="list-tab" href="#home">List Data</a></li>
                        <li ><a data-toggle="tab" id="databaru-tab" href="#menu1">Data Baru</a></li>
                        <li ><a data-toggle="tab" id="detilreceipt-tab" href="#menu2">Detail Receipt</a></li>
                        <li class="nav-item">
                            <a class="nav-link" id="add-tab" data-toggle="pill" href="#add" 
                            role="tab" aria-controls="add" aria-selected="false">Add Data</a>
                        </li>
                        

                        <!-- <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>  -->
                    </ul>
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <br>
                            <table class="table is-narrow table-responsive" id="table_field">
                                <thead>
                                <tr>
                                <th>No Transasksi</th>
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
                                <th>view detail</th>                                                    
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                foreach($datainvoice as $value )
                                    { ?>
                                <tr>
                                    <td><?=$value->kode_transaksi; ?> </td>           
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
                                    <td>
                                            <button data-id-receipt="<?=$value->id_officialreceiptmaster;?>" class="btn btn-primary btn-md simpan-btn" style="float: right;">View Detail</button> 
                                    </td>            
                                </tr>
                                <?php    }?>                                  
                                </tbody>  
                    </table>
                        </div>

                        
                        <div id="menu2" class="tab-pane fade">
                             <h2>Test menu 2</h2>                        
                        </div>

                        <div class="tab-pane fade" id="add" role="tabpanel" aria-labelledby="add-tab">
                        <h2>Test menu 21</h2>                        
                        </div>


                        <div id="menu1" class="tab-pane fade">
                        <div class="message" style="margin-top: 30px;">
                                <?php if($this->session->flashdata('success')){ ?>       
                                            <div class="alert alert-success">
                                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                                            </div>
                                            <?php }elseif($this->session->flashdata('error')){?>
                                            <div class="alert alert-danger">
                                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                                            </div>
                                <?php }?>        
                                </div>

                            <form  id="forminputreceipt"  method="POST">
                                        <div class="form-group">
                                        <label for="rekanan_name">Invoice </label>
                                        <input type="hidden" name="invoice_id" id="invoice_id">
                                        <input type="text" name="search_invoice_id" class="form-control" id="search_invoice_id"  placeholder="Search Invoice Number" 
                                        style="width:500px;">
                                        </div>

                                        <div class="form-group">
                                            <label for="invoiceid">No.Receipt</label>
                                            <input type="text" class="form-control" id="nomor_or2" name = "nomor_or2" placeholder="Nomer OR">
                                        </div>

                                        <div class="form-group">
                                        <label class="control-label">Tanggal Receipt</label>
                                        <div class='input-group date' >
                                            <input type='text' class="form-control" id='tgl_receipt' name="tgl_receipt"/>
                                            <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="invoice_desc">Deskripsi Receipt</label>
                                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"  placeholder="Keterangan Receipt"> </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="invoice_amount">Nominal Receipt (Rp)</label>
                                            <input type="text" class="form-control" id="amount_receipt" name = "amount_receipt" placeholder="Nominal Receipt">
                                        </div>



                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </form>           
                        </div>

        </div>
           </div>                             


                <div class="row">
                    <div class="col-md-12">
                            <div id="ordetail">
                                            INI DETAIL RECEIPT               
                            </div>                            
                    </div>                                 
                
                </div>                                       

        </div>                                
    </div>
    <center><a href="<?=base_url();?>mainmenu">Back to Main menu</a></center> 
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
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

     $('#tgl_receipt').datetimepicker();
     
});
</script>

<!-- <script src="<?=base_url();?>assets/autocomplete/js/jquery-3.3.1.js" type="text/javascript"></script> -->
<!-- <script src="<?=base_url();?>assets/autocomplete/js/bootstrap.js" type="text/javascript"></script> -->

<script src="<?=base_url();?>assets/autocomplete/js/jquery-ui.js" type="text/javascript"></script>

     <script type="text/javascript">
    //   $.noConflict();
          $(document).ready(function()
          {
               // $.noConflict();
               $('#search_invoice_id').autocomplete({
                    source: "<?php echo site_url('crud/search_invoice_id');?>",

                    select: function (event, ui) 
                    {
                    $(this).val(ui.item.label);
                    $('#invoice_id').val(ui.item.description); 
                    } , 
                    change:function(event,ui)
                    {
                        if(!ui.item)
                        {
                          $('#search_invoice_id').val('');    
                          $('#invoice_id').val('');                           
                        } 
                    }
               });


          });
     </script>

<link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert.min.css');?>" />
<script src="<?php echo base_url('assets/js/sweetalert.min.js');?>"></script>

<script type="text/javascript">
$("#forminputreceipt").submit(function(event) {
        var url = "<?php echo site_url('crud/add_receipt')?>";
        swal({
              title: "Simpan data?", 
              type: "info",
              showCancelButton: true,
              closeOnConfirm: false,
              confirmButtonText: "Ya",
              confirmButtonColor: "#446bfd "
            }, 
           function(isConfirm){ 
              if (isConfirm) {       
                $(".confirm").attr("disabled", true);
                $.ajax({
                    type: "post",
                    url : url,
                    data: $('#forminputreceipt').serialize(),
                    dataType: "JSON",
                    success: function(data) { 
                      if (data !== 'error') {
                         swal({
                              title: "Berhasil", 
                              text: "Penyimpanan data berhasil", 
                              type: "success"
                          },function() {
                              window.location.href = "<?php echo site_url('mainmenu/inputreceipt')?>"
                          });
                      }else{

                         swal({
                              title: "Error", 
                              text: "Proses penyimpanan data gagal", 
                              type: "error"
                          },function() {
                              window.location.href = "<?php echo site_url('mainmenu/inputreceipt')?>"
                            });

                      }
                    },
                    error: function (data) {
                           //other errors that we didn't handle
                        swal("Sorry", "Data gagal tersimpan, silahkan coba lagi :(", "error");
                    }
                  });
              }/* else {     
                swal("Cancelled", "Pengajuan dibatalkan");
                   } */
              });
            //return false;
          event.preventDefault();
        });

</script>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->




<script type="text/javascript">
    $('button.simpan-btn').click(function() 
        {    
            var id = $(this).attr("data-id-receipt");
            // $.ajax({
            //         type: "post",
            //         url : "<?php //echo site_url('pinjaman/addpinjaman_priv/')?>"+id,
            //         data : $('#form_add').serialize(),
            //         success: function(data) {}
            //     });
               
                // $('.nav-tabs a[href="#menu2"]').tab('show');
                console.log('detail is clicked');
            //$('#myTab a[href="#menu2"]').tab('show');
            // $('#detilreceipt-tab').tab('show');
            $('#add-tab').trigger('click');
            return false;
        });
</script>

</html>