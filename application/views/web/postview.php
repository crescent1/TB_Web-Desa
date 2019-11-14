

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div id="content" class="three_quarter first"> 
        <!-- ################################################################################################ -->
        
        <?php foreach($berita1 as $row): ?>
        
        <h1><?php echo $row->judul_post ?></h1>
        <img class="imgl borderedbox" src="<?php echo base_url().'asset/images/post/'.$row->gambar_post.''?>" alt="">
        <p>Post at: <?php echo $row->tanggal_post?></p>
        <article><?php echo $row->post?></article>
        
        <a href="<?php echo base_url() ?>weltemplate/agenda">Back</a>
        <!--
        <?php if($row->id_post > 1): ?>
            <a href="<?php echo base_url() ?>halamanControler/berita/<?php echo $row->id_post-1 ?>">Sebelumnya-------</a>
        <?php endif; ?>
        <?php if($row->id_post < 1000): ?>
        <a href="<?php echo base_url() ?>halamanControler/berita/<?php echo $row->id_post+1 ?>">-------Selanjutnya</a>
        <?php endif; ?>
        -->
        
        <div id="comments">
          <h3>Comments</h3>
              <div class="fb-comments" data-href="http://localhost/desasentul2/halamanControler/berita/" data-numposts="5" data-colorscheme="light">
              </div>
              
              
        </div>
        <?php endforeach; ?>
        <!-- ################################################################################################ --> 
          
              
      </div>
      
      
      
      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->
      <div class="sidebar one_quarter"> 
        <!-- ################################################################################################ -->
        
            <ul class="nospace quickinfo">
                <li class="clear"><a href="<?php echo base_url(); ?>weltemplate/tabelview"><img src="<?php echo base_url().'asset/images/buku.jpg'?>" alt="">Buku Warga</a></li>
                <li class="clear"><a href="<?php echo base_url(); ?>weltemplate/downloadview"><img src="<?php echo base_url(); ?>asset/images/download.jpg" alt=""> Download </a></li>
            </ul>
            <br />
        
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