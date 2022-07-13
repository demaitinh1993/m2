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
				<div class="new_arrivals_sorting">
					<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
						<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
						<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".Husky">Husky</li>
						<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".Alaska">Alaska</li>
						<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".Pug">Pug</li>
						<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".Poodle">Poodle</li>
						<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".Grass">Grass</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

					<!-- Product 1 -->
                    <?php foreach ($rows as $key => $item) { ?>

					<div class="product-item <?php echo $item->breed ?>">
						<div class="product discount product_filter">
							<div class="product_image">
								<img src="../admin/public/img/<?php echo $item->image ?>" alt="">
							</div>
							<div class="favorite favorite_left"></div>
							<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
							<div class="product_info">
								<h6 class="product_iname"><a href="single.html"><?php echo $item->name; ?></a></h6>
								<div class="product_price">$<?php echo $item->price; ?></div>
							</div>
						</div>
						<div class="red_button add_to_cart_button"><a href="cart.php">add to cart</a></div>
					</div>
                    <?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include './layout/footer.php';
?>