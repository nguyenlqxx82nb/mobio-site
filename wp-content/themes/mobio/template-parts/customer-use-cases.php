
<div class="use-case-wrapper <?php echo $args['classExtend'] ? $args['classExtend'] : 'mr-t-150' ?> b-g-b mr-t-70-s0">
	<div class="auto-container auto">
		<div class="pa-l-10 pa-r-10">
			<p class="title-sm c-fff text-center mr-t-60 opa-5 mr-t-40-s0 f-18 f-14-s1"><?php echo $args['title'] ?></p>
			<h3 class=" text-center c-fff mr-t-15 mr-t-11-s0"><?php echo $args['name'] ?></h3>
		</div>
		
		<div class="text-tab f-b f-15 c-fff mr-t-30 d-n d-block-s1 pa-l-35">
			<?php 
				for($i = 0 ; $i < count($args["items"]); $i++) {
			?>
				<div class="text-tab-item pa-r-30 upper-case <?php echo $i === 0 ? 'selected' : '' ?>"><?php echo $args["items"][$i]['text-tab'] ?></div>
			<?php } ?>
		</div>
		
		<div class="b-fff b-sd b-r-15 pa-t-50 pa-b-50 pa-l-60 pa-r-60 mr-l-80  mr-l-40-s3 mr-r-80 mr-r-40-s3 mr-t-50 mr-b-50 mr-l-45-s0 mr-r-45-s0 mr-t-20-s1 pa-0-s0" >
			<div class="position-relative overflow-hidden slides-wrapper" initialSize="1" fixWidth="1">
				<div class="d-flex position-relative slides">
					<?php 
						for($i = 0 ; $i < count($args["items"]); $i++) {
					?>
						<div class=" mo-row-2 mo-row row pa-l-15-s0 pa-r-15-s0 pa-t-15-s0 pa-b-25-s0 slide-item" style="flex: 0 0 100%;">
						
							<div class="mo-col-6 mo-col-12-s2 mo-col d-flex flex-column justify-content-center pa-r-60 d-none-s2">
								<p class="f-b f-36 f-30-s2"><?php echo $args['items'][$i]['title'] ?></p>
								<p class="f-b mr-t-5 f-18 f-18-s2"><?php echo $args['items'][$i]['title-sub'] ?></p>
								<p class="f-n mr-t-30 f-16 f-16-s2"><?php echo $args['items'][$i]['desc'] ?></p>
								<a href="<?php echo $args['items'][$i]['url'] ?>">
									<button class="btn-small mr-t-30 b-sd-n">READ MORE</button>
								</a>
							</div>

							<div class="mo-col-6 mo-col-12-s2 pa-t-20-s2 mo-col d-flex align-items-center justify-content-center">
								<div class="rt-3-4 w-100">
									<img class="w-100 img-full object-fit-contain" src="<?php echo $args["items"][$i]['img-src'] ?>" />
								</div>
							</div>

							<div class="mo-col-12-s2 d-flex flex-column justify-content-center pa-l-10 pa-r-10 pa-b-0 d-n d-block-s2 mr-t-20-s2">
								
								<div class="mo-col-12-s2">
									<div class="mo-col-6">
										<img src="<?php echo $args["items"][$i]['tab-img-s'] ?>" class="selected" />
									</div>
								</div>

								<div class="mo-col-12-s2">
									<p class="f-b f-20 mr-t-15"><?php echo $args['items'][$i]['title-sub'] ?></p>
									<p class="f-n f-16 mr-t-20"><?php echo $args['items'][$i]['desc'] ?></p>
									<a href="<?php echo $args['items'][$i]['url'] ?>">
										<button class="btn-small mr-t-20">READ MORE</button>
									</a>
								</div>
								
							</div>

						</div>
					<?php } ?>
				</div>
			</div>
			
		</div>
		
		<div class="d-flex align-items-center justify-content-between use-case-tab mr-t-30 mr-l-80 mr-r-80 mr-l-40-s3 mr-r-40-s3  mr-b-60 d-none-s1">
			<?php 
				for($i = 0 ; $i < count($args["items"]); $i++) {
			?>
				<div class="use-case-tab-item <?php echo $i === 0 ? 'selected' : '' ?>">
					<img class="tab-img-selected" src="<?php echo $args["items"][$i]['tab-img-s'] ?>" />
					<img class="tab-img-normal" src="<?php echo $args["items"][$i]['tab-img-n'] ?>" />
				</div>
			<?php } ?>
		</div>

	</div>
</div>
