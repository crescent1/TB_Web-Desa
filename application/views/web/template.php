

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper">
  <div id="slider">
    <div id="slide-wrapper" class="rounded clear"> 
      <!-- #######----Slider---############################################################################# -->
      <?php
          $no = 1;
          foreach($gambarHeader as $row){
              echo'
                  <figure id="slide-'.$no.'"><a class="view" href="#"><img src="'.base_url().'asset/images/slider/'.$row->gambar_slide.'" alt=""></a>
                    <figcaption>
                      <h4>'.$row->pesan_slide.'</h4>
                    </figcaption>
                  </figure>';
                  $no++;
                  }        
                  ?>
                  <ul id="slide-tabs">
                      <?php 
                        $noo = 1;
                        foreach($gambarHeader as $row1){
                        echo'<li><h5><a href="#slide-'.$noo.'">'.$row1->judul_slide.'</a></h5></li>';
                        $noo++;
                        }
                      ?>
                  </ul>
            
      <!--=============================================================================================-->
      
        
      
      <!-- ################################################################################################ -->
      
      <!-- ################################################################################################ --> 
    </div>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="group btmspace-30"> 
        <!-- Left Column -->
        <div class="one_quarter first"> 
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li class="btmspace-15"><a href="<?php echo base_url().'halamanControler/desa/3' ?>"><em class="heading">Kepala Desa</em> <img class="borderedbox" src="<?php echo base_url(); ?>asset/images/halaman/lurah_lagi1.jpg" alt=""></a></li>
            <br />
            <li class="btmspace-15">
                
            </li>
          </ul>
          <!-- ################################################################################################ --> 
        </div>
        <!-- / Left Column --> 
        <!-- Middle Column -->
        <div class="one_half"> 
          <!-- ################################################################################################ -->
          <h3>Informasi Terbaru </h3>
          <ul >
          
          <?php foreach($post2 as $post_data): ?>
            <li class="clear">
              <h3><p class="nospace btmspace-15"><a href="<?php echo base_url();?>halamanControler/berita/<?php echo $post_data->id_post;?>"><?php echo $post_data->judul_post;?></a></p></h3>
              <p>post at :<?php echo $post_data->tanggal_post ;?></p>
              <!--<div class="imgl borderedbox"><img src="<?php echo base_url().'asset/images/post/' .$post_data->gambar_post;?>" alt=""></div>-->
              
              <p>
              <?php 
              $limit = $post_data->post;
              $limit = character_limiter($limit, 150);
            
              echo $limit; ?>
              </p>
            </li>
          <?php endforeach; ?> 
            
          </ul>
          <div>  
                <h4><?php  echo $halaman_pesan; ?></h4>
          </div>
          <!-- ################################################################################################ -->  
        </div>
        <!-- / Middle Column --> 
        <!-- Right Column -->
        <div class="one_quarter sidebar"> 
          <!-- ################################################################################################ -->
          <div class="sdb_holder">
            <h6>Informasi</h6>
            <ul class="nospace quickinfo">
              <li class="clear"><a href="<?php echo base_url(); ?>weltemplate/tabelview"><img src="<?php echo base_url(); ?>asset/images/buku.jpg" alt="">Buku Warga</a></li>
              <li class="clear"><a href="<?php echo base_url(); ?>weltemplate/downloadview"><img src="<?php echo base_url(); ?>asset/images/download.jpg" alt=""> Download </a></li>
            </ul>
          </div>
          <div class="sdb_holder">
                  <h6>Alamat Balai Desa</h6>
                  <address>
                      JL. Diponegoro RT:20 RW:07 Sentul, Tembelang, Jombang<br />
                      Tel: (0321) 888375<br />
                      Email: <a>desasentul10@gmail.com
                  </address>
         </div>
          <!-- ################################################################################################ --> 
        </div>
        <!-- / Right Column --> 
      </div>
      
      <div class="group">
        <h2></h2>
        <div class="one_quarter first"> 
           
        </div>
      </div>
      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->
      
      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->
      <div class="group">
        
      </div>
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
