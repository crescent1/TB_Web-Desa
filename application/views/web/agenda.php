
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div id="portfolio">
        <ul class="nospace clear">
          <?php foreach($post2 as $post_data): ?>
          
          <li class="">
            <h3><?php echo $post_data->judul_post;?></h3>
            <article><img class="borderedbox" src="<?php echo base_url().'asset/images/post/' .$post_data->gambar_post;?>" alt="">
              <p>post at :<?php echo $post_data->tanggal_post ;?></p>
              <p>
              <?php 
              $limit = $post_data->post;
              $limit = character_limiter($limit, 150);
            
              echo $limit; ?>
              </p>
              <p class="right"><a href="<?php echo base_url();?>halamanControler/berita/<?php echo $post_data->id_post;?>">Read More Here &raquo;</a></p>
            </article>
          </li>
          
          <?php endforeach; ?>
         
          
          
          
        </ul>
        <div>  
            <h4><?php  echo $halaman_pesan; ?></h4>
        </div>
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

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
