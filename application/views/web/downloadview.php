
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      
      <h2>Tabel Warga</h2>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>id_download</th>
              <th>Keterangan</th>
              <th>Link Download</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php foreach($post2 as $post_data): ?>
              <td><?php echo $post_data->id_download;?></td>
              <td><?php echo $post_data->keterangan;?></td>
              <td><a href="<?php echo $post_data->download;?>"><?php echo $post_data->download;?></a></td>                
              
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
            <div>  
                <h4><?php  echo $halaman_pesan; ?></h4>
            </div>
        
      </div>
      <div id="comments">
        
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
