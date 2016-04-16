<div>
		<div class="flex-container">
			<div class="flexslider">
				<ul class="slides" id="arsmain">
					<li>
						<?php
						$block = module_invoke('bean', 'block_view', 'three-case-trial');
						print render ($block['content']);
						?>									
					</li>
		 
					<li>
						<?php
						$block = module_invoke('bean', 'block_view', 'subscription');
						print render ($block['content']);
						?>
					</li>
		 
					<li>
						<?php
						$block = module_invoke('bean', 'block_view', 'promo-code');
						print render ($block['content']);
						?>
					</li>
				</ul>								
			</div>
		</div>	
</div>
