<section class="features">
<?php $options = get_option('novena-options'); ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span> <?php if($options['features_1_subtitle']){
							echo $options['features_1_subtitle'];
						} ?></span>
						<h4 class="mb-3"><?php if($options['features_1_heading']){
							echo $options['features_1_heading']; 
						}?></h4>
						<p class="mb-4"><?php if($options['features_1_description']){
							echo $options['features_1_description'];
						} ?></p>
						<?php
							if($options['features_1_btn_text']['url']){
								?>
								<a href="<?php echo $options['features_1_btn_text']['url']; ?>" class="btn btn-main btn-round-full"><?php echo $options['features_1_btn_text']['text']; ?></a>
								<?php
							}
						?>
						
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<span> 
							<?php if($options['features_2_subtitle']){
								echo $options['features_2_subtitle'];
							}?>  
						</span>
						<h4 class="mb-3"> 
							<?php 
							if($options['features_2_heading']){
								echo $options['features_2_heading']; 
							}
							?>
						 </h4>
						<ul class="w-hours list-unstyled">
							<?php
								if($options['features_day_time']){
									$time_days = $options['features_day_time'];
									foreach($time_days as $time_day){
										?>
											<li class="d-flex justify-content-between"><?php echo $time_day['features_day']; ?><span><?php echo $time_day['features_time']; ?></span></li>
										<?php
									}
								}
								
							?>
						</ul>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span><?php if( $options['features_3_subtitle']){echo $options['features_3_subtitle']; } ?></span>
						<h4 class="mb-3"><?php if($options['features_3_heading']){echo $options['features_3_heading'];}?></h4>
						<p><?php if($options['features_3_description']){echo $options['features_3_description'];} ?></p>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
