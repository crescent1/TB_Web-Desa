
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      
      
      <div id="gallery">
        <figure>
          <header class="heading">Gambar Terbaru</header>
          <?php foreach($post2 as $post_data): ?>
          <ul class="nospace clear">
            <li class="one_quarter first">
            <a class="nlb" data-lightbox-gallery="gallery1" href="<?php echo base_url().'asset/images/galery/' .$post_data->gambar_galery;?>">
                <img class="borderedbox" src="<?php echo base_url().'asset/images/galery/' .$post_data->gambar_galery;?>" alt="">
                <p><?php echo $post_data->keterangan_galery;?></p>
            
            </a></li>
          </ul>
          <?php endforeach; ?>
          <div>  
            <h4><?php  echo $halaman_pesan; ?></h4>
          </div>
        </figure>
        
      </div>

      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->

<