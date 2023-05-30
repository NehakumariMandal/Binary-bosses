<?php
  $page_title = 'Monthly Sales';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(3);
?>
<?php
 $year = date('Y');
 $sales = monthlySales($year);
?>
<?php include_once('layouts/header.php'); ?>
<link rel="stylesheet" href="bars.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


<div class="row">
  <div class="col-md-6">
    <?php echo display_msg($msg); ?>
  </div>
</div>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Monthly Sales</span>
          </strong>
        </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;">#</th>
                <th> Product name </th>
                <th class="text-center" style="width: 15%;"> Quantity sold</th>
                <th class="text-center" style="width: 15%;"> Total </th>
                <th class="text-center" style="width: 15%;"> Date </th>
             </tr>
            </thead>
           <tbody>
             <?php foreach ($sales as $sale):?>
             <tr>
               <td class="text-center"><?php echo count_id();?></td>
               <td><?php echo remove_junk($sale['name']); ?></td>
               <td class="text-center"><?php echo (int)$sale['qty']; ?></td>
               <td class="text-center"><?php echo remove_junk($sale['total_saleing_price']); ?></td>
               <td class="text-center"><?php echo $sale['date']; ?></td>
             </tr>
             <?php endforeach;?>
           </tbody>
         </table>
        </div>
      </div>
    </div>
  </div>
 
    <div class="chart">
    <h4>Graph Analysis of sale</h4>
        <ul class="numbers">
            <li><span>100</span></li>
            <li><span>50</span></li>
            <!-- <li><span>175</span></li> -->
            <li><span>0</span></li>
        </ul>
        <ul class="bars">
            <li><div class="bar" data-percentage="50"></div><span>August</span></li>
            <li><div class="bar" data-percentage="30"></div><span>September</span></li>
            <li><div class="bar" data-percentage="60"></div><span>October</span></li>
            <li><div class="bar" data-percentage="90"></div><span>November</span></li>
            <li><div class="bar" data-percentage="80"></div><span>December</span></li>
        </ul>
    </div>
    <script type="text/javascript">
        $(function(){
            $('.bars li .bar').each(function(key,bar)
            {
                var percentage=$(this).data('percentage');
                $(this).animate({
                    'height':percentage+'%'

                },1000);
            });
        });
    </script>
    

<?php include_once('layouts/footer.php'); ?>
