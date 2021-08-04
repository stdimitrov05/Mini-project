<?php include('header.php'); ?>
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<div class="navigator-tab" ">
<link rel="shortcut icon" type="image/x-icon" sizes="192x192" href="../../images/Wep_logo.png">



<nav class=" navbar navbar-expand-sm ">
     <!-- Brand/logo -->
     <a class=" navbar-brand" href="http://localhost/WorkList/App/pages/page.php"><img class="Logo_image" src="../../images/Wep_logo.png"></a>
	<ul class=" navbar-nav">
		<li class="nav-tabs">
			<a class="navigator-text" href="http://localhost/WorkList/App/pages/page.php"><i class="fa fa-fw fa-home"></i> Home</a>
		</li>


	</ul>
	</nav>
</div>

<body>


	<div class="row-fluid">
		<div class="span12">




			<div class="container">


				<?php include('modal_add.php'); ?>


				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
					<div class="alert alert-info">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
					</div>
					<thead>
						<tr>
							<th style="text-align:center;">User Image</th>
							<th style="text-align:center;">FirstName</th>
							<th style="text-align:center;">LastName</th>
							<th style="text-align:center;">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						require_once('db.php');
						$result = $conn->prepare("SELECT * FROM tbl_image ORDER BY tbl_image_id ASC");
						$result->execute();
						for ($i = 0; $row = $result->fetch(); $i++) {
							$id = $row['tbl_image_id'];
						?>
							<tr>
								<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;">
									<?php if ($row['image_location'] != "") : ?>
										<img src="uploads/<?php echo $row['image_location']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
									<?php else : ?>
										<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
									<?php endif; ?>
								</td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row['first_name']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row['last_name']; ?></td>
								<td style="text-align:center; width:350px;">
									<a href="#delete<?php echo $id; ?>" data-toggle="modal" class="btn btn-danger">Delete </a>
								</td>
							</tr>
							<!-- Modal -->
							<div id="delete<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
									<h3 id="myModalLabel">Delete</h3>
								</div>
								<div class="modal-body">
									<div class="alert alert-danger">
										<?php if ($row['image_location'] != "") : ?>
											<img src="uploads/<?php echo $row['image_location']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
										<?php else : ?>
											<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333; margin-left:15px;">
										<?php endif; ?>
										<b style="color:blue; margin-left:25px; font-size:30px;"><?php echo $row['first_name'] . " " . $row['last_name']; ?></b>
										<br />
										<p style="font-size: larger; text-align: center;">Are you Sure you want to Delete?</p>
									</div>
									<hr>
									<div class="modal-footer">
										<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
										<a href="delete.php<?php echo '?tbl_image_id=' . $id; ?>" class="btn btn-danger">Yes</a>
									</div>
								</div>
							</div>
						<?php } ?>
					</tbody>
				</table>





			</div>
		</div>
	</div>
	</div>


</body>

</html>