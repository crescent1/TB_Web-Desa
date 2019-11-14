
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
              <th>Nama Lengkap</th>
              <th>NIK</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>SHDK</th>
              <th>Agama</th>
              <th>Pendidikan Terakhir</th>
              <th>Pekerjaan</th>
              <th>Nama Ibu</th>
              <th>Nama Ayah</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php foreach($post2 as $post_data): ?>
              <td><?php echo $post_data->nama;?></td>
              <td><?php echo $post_data->nik;?></td>
              <td><?php echo $post_data->tempat_lahir;?></td>
              <td><?php echo $post_data->tanggal_lahir;?></td>
              <td><?php echo $post_data->jenis_kelamin;?></td>
              <td><?php echo $post_data->shdk;?></td>
              <td><?php echo $post_data->agama;?></td>
              <td><?php echo $post_data->pendidikan_terakhir;?></td>
              <td><?php echo $post_data->pekerjaan;?></td>
              <td><?php echo $post_data->nama_ayah;?></td>
              <td><?php echo $post_data->nama_ibu;?></td>

                
              
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
