<?php
  $page_title = 'Daily Sales';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(3);
?>

<?php
 $year  = date('Y');
 $month = date('m');
 $sales = dailySales($year,$month);
?>
<?php include_once('layouts/header.php'); ?>
<title>Charts</title>
    <link rel="stylesheet" href="charts.css">
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
            <span>Daily Sales</span>
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
  <div class="main-container">
		<div class="year-stats">
			<div class="month-group">
				<div class="bar h-100"></div>
				<p class="month">Jan</p>
			</div>
			<div class="month-group">
				<div class="bar h-50"></div>
				<p class="month">Feb</p>
			</div>
			<div class="month-group">
				<div class="bar h-75"></div>
				<p class="month">Mar</p>
			</div>
			<div class="month-group">
				<div class="bar h-25"></div>
				<p class="month">Apr</p>
			</div>
			<div class="month-group selected">
				<div class="bar h-100"></div>
				<p class="month">May</p>
			</div>
			<div class="month-group">
				<div class="bar h-50"></div>
				<p class="month">Jun</p>
			</div>
			<div class="month-group">
				<div class="bar h-75"></div>
				<p class="month">Jul</p>
			</div>
			<div class="month-group">
				<div class="bar h-25"></div>
				<p class="month">Aug</p>
			</div>
			<div class="month-group">
				<div class="bar h-50"></div>
				<p class="month">Sep</p>
			</div>
			<div class="month-group">
				<div class="bar h-75"></div>
				<p class="month">Oct</p>
			</div>
			<div class="month-group">
				<div class="bar h-25"></div>
				<p class="month">Nov</p>
			</div>
			<div class="month-group">
				<div class="bar h-100"></div>
				<p class="month">Dez</p>
			</div>
		</div>

		<div class="stats-info">
			<div class="graph-container">
				<div class="percent">
					<svg viewBox="0 0 36 36" class="circular-chart">
						<path class="circle" stroke-dasharray="100, 100" d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831" />
						<path class="circle" stroke-dasharray="85, 100" d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831" />
						<path class="circle" stroke-dasharray="60, 100" d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831" />
						<path class="circle" stroke-dasharray="30, 100" d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831" />
					</svg>
				</div>
				<p>Total: $3075</p>
			</div>

			<div class="info">
				<p>Highest Profit Months <br /><span>January & May</span></p>
				<p>Updated Goods <span>2</span></p>
				<p>Highest Sales <span>$2000</span></p>
			</div>
		</div>
    </div>

<?php include_once('layouts/footer.php'); ?>
