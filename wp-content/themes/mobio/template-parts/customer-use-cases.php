
<div class="use-case-wrapper <?php echo $args['classExtend'] ? $args['classExtend'] : 'mr-t-250 mr-t-200-s4' ?> b-g-b mr-t-70-s1">
	<div class="auto-container auto">
		<div class="pa-l-30 pa-r-30">
			<p class="title-sm c-fff text-center mr-t-120 mr-t-80-s4 opa-5 mr-t-40-s1 f-16-s4 f-14-s1"><?php echo $args['title'] ?></p>
			<p class="f-b f-56 f-36-s4 f-36-s1 text-center c-fff mr-t-15 mr-t-11-s1"><?php echo $args['name'] ?></p>
		</div>
		
		<div class="text-tab f-b f-15 c-fff mr-t-20 d-n d-block-s1 pa-l-35">
			<?php 
				for($i = 0 ; $i < count($args["items"]); $i++) {
			?>
				<div class="text-tab-item upper-case <?php echo $i === 0 ? 'selected' : '' ?>"><?php echo $args["items"][$i]['text-tab'] ?></div>
			<?php } ?>
		</div>
		
		<div class="b-fff b-sd b-r-15 pa-t-50 pa-b-50 pa-l-80 pa-r-80 mr-l-100 mr-r-50-s4 mr-l-100 mr-r-50-s4 mr-t-50 mr-b-50 mr-l-45-s1 mr-r-45-s1 mr-t-30-s1 pa-0-s1" >
			<div class="position-relative overflow-hidden slides-wrapper" initialSize="1" fixWidth="1">
				<div class="d-flex position-relative slides">
					<?php 
						for($i = 0 ; $i < count($args["items"]); $i++) {
					?>
						<div class=" mo-row-2 mo-row row pa-l-15-s1 pa-r-15-s1 pa-t-15-s1 pa-b-25-s1 slide-item" style="flex: 0 0 100%;">
						
							<div class="mo-col-6 mo-col-12-s1 mo-col d-flex flex-column justify-content-center pa-r-80 d-none-s1">
								<p class="f-b f-64 f-48-s4"><?php echo $args['items'][$i]['title'] ?></p>
								<p class="f-b f-30 mr-t-5 f-18-s4"><?php echo $args['items'][$i]['title-sub'] ?></p>
								<p class="f-n f-20 mr-t-30 f-16-s4"><?php echo $args['items'][$i]['desc'] ?></p>
								<a href="<?php echo $args['items'][$i]['url'] ?>">
									<button class="btn-small mr-t-30 b-sd-n">READ MORE</button>
								</a>
							</div>

							<div class="mo-col-6 mo-col-12-s1 mo-col d-flex align-items-center justify-content-center mo-col-12-s1">
								<div class="rt-3-4 w-100">
									<img class="w-100 img-full object-fit-contain" src="<?php echo $args["items"][$i]['img-src'] ?>" />
								</div>
							</div>

							<div class="mo-col-12-s1 d-flex flex-column justify-content-center pa-l-10 pa-r-10 pa-b-0 d-n d-block-s1 mo-col-12-s1 mr-t-20-s1">
								
								<div class="mo-col-12-s1">
									<div class="mo-col-6">
										<img src="<?php echo $args["items"][$i]['tab-img-s'] ?>" class="selected" />
									</div>
								</div>

								<div class="mo-col-12-s1">
									<p class="f-b f-20 mr-t-15"><?php echo $args['items'][$i]['title-sub'] ?></p>
									<p class="f-n f-13 mr-t-20"><?php echo $args['items'][$i]['desc'] ?></p>
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
		
		<div class="d-flex align-items-center justify-content-between use-case-tab mr-t-30 mr-l-120 mr-r-120 mr-b-100 mr-b-80-s4 d-none-s1">
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
