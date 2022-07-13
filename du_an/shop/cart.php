<?php
include './layout/header.php';
include 'dp.php';
$sql = "SELECT * FROM products ";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();
?>
<div class="fs_menu_overlay"></div>
<!-- New Arrivals -->

<div class="new_arrivals">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<div class="section_title new_arrivals_title">
					<h2></h2>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col text-center">
				<div class="new_arrivals_sorting">sss
					
				</div>
			</div>
		</div>
		
	</div>
</div>

<?php
// include './layout/footer.php';
?>