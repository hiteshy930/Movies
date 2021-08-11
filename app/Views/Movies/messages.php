    
   

 <?php if(session()->has('warning')): ?>
        	<div class='warning' style="color:black;">
           		<?= session('warning') ?>
         	</div>
        <?php endif; ?>		

       <?php if(session()->has('info')): ?>
           	<div class='info' style="color:black;">
            		<?= session('info') ?>
          	</div>
       <?php endif; ?>	

        <?php if(session()->has('error')): ?>
            <div class='error' style="color:black;">
                <?= session('error') ?>
            </div>
       <?php endif; ?>  