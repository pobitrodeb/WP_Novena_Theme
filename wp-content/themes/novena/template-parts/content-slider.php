<!-- Slider Start -->
<section class="banner">
    <?php $options = get_option('novena-options');  ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing ">
						<?php if($options['banner_sub_heading']){ echo $options['banner_sub_heading'];} ?>
					</span>
					<h1 class="mb-3 mt-3"><?php if($options['banner_heading']){ echo $options['banner_heading'];} ?></h1>
					
					<p class="mb-4 pr-5"> <?php if($options['banner_content']){ echo $options['banner_content'];} ?> </p>
					<div class="btn-container ">
						<?php
							if($options['banner_btn']){
								?>
									<a href="<?php echo $options['banner_btn']['url'];?>" target="_blank" class="btn btn-main-2 btn-icon btn-round-full"> <?php echo $options['banner_btn']['text'];?><i class="icofont-simple-right ml-2  "></i></a>
								<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>