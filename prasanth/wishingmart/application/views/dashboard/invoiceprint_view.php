<?php 
  require('admin/head.php');
?>

 <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    
</head>
  <body onload="" class="skin-blue"><?php //window.print();?>
    <div class="wrapper">
      <h3 class="title">INVOICE</h3>
      <!-- Main content -->
      <section class="invoice ">
        <!-- title row -->
         <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i>WishingMart
                <small class="pull-right">Date: <?php echo date("Y-M-d H:i:s",time()); ?></small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              <u>From Address</u> :
              <address>
                <strong><?php echo $invoice_view[0]['g_fn'].' '.$invoice_view[0]['g_ln']; ?></strong><br>
                <?php echo substr($invoice_view[0]['a_add1'],0,28); ?>,<br>
                <?php echo $invoice_view[0]['a_add2']; ?>,<br>
                <?php echo $invoice_view[0]['a_country']; ?>,<br>
                <?php echo $invoice_view[0]['a_pincode']; ?>.<br>
              </address>
            </div><!-- /.col -->
            
            <div class="col-sm-4 invoice-col">
              <u>To Address</u> :
              <address>
                <strong><?php echo $invoice_view[0]['w_fn'].' '.$invoice_view[0]['w_ln']; ?></strong><br>
                <?php echo substr($invoice_view[0]['s_add1'],0,28); ?>,<br>
                <?php echo $invoice_view[0]['s_add2']; ?>,<br>
                <?php echo $invoice_view[0]['s_country']; ?>,<br>
                <?php echo $invoice_view[0]['s_pincode']; ?>.<br>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Invoice # <?php echo $invoice_view[0]['iid']; ?></b><br>
              <b>Express : </b><?php echo $invoice_view[0]['escompany']; ?><br>
              <b>Transaction ID: </b><?php echo $invoice_view[0]['stid']; ?><br>
              <b>Wish ID : </b>W<?php echo $invoice_view[0]['wid']; ?><br>
              <b>Grant ID: </b>G<?php echo $invoice_view[0]['gid']; ?><br>
              <b>Date : </b><?php echo date('d-M-Y',strtotime($invoice_view[0]['inv_date'])); ?>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Qty</th>
                    <th>Product</th>
                    <th>Country</th>
                    <th>Subtotal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $invoice_view[0]['quantity']; ?></td>
                    <td><?php echo $invoice_view[0]['wpn']; ?></td>
                    <td><?php echo $invoice_view[0]['s_country']; ?></td>
                    <td>USD <?php echo $invoice_view[0]['gtprice']; ?></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                 
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;"> Terms & condition apply <br> Wishingmart is not responsible for the transactions.<br>Shipping Company : <b><?php echo $invoice_view[0]['escompany']; ?></b> Delivery Service <br> Expected Delivery Time : 14 days
              </p>
            </div><!-- /.col -->
            <div class="col-xs-6">
              <p class="lead">Amount Due </p>
                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th style="width:50%">Subtotal :</th>
                      <td>USD <?php echo $invoice_view[0]['gtprice']; ?></td>
                    </tr>
                    <tr>
                      <th>Tax : </th>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Shipping :</th>
                      <td>USD <?php echo $invoice_view[0]['escost']; ?></td>
                    </tr>
                    <tr>
                      <th>Total :</th>
          <?php
          $total_price= $invoice_view[0]['gtprice'] + $invoice_view[0]['escost'];
          ?>
                      <td>USD <?php echo $total_price; ?></td>
                    </tr>
                  </table>
                </div>
            </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->
    </div><!-- ./wrapper -->

  <!-- AdminLTE App -->
  </body>
</html>