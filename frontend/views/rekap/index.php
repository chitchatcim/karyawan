<?php

$this->title = 'Rekap Anggota';
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="box">
   <div class="box-body ">
                 <table id="example1" class="table table-bordered table-striped">
                   <thead>
                   <tr>
                     <th>No.</th>
                     <th>Nip</th>
                     <th>nama</th>
                     <th>kode bagian</th>
                     <th>alamat</th>
                   </tr>
                 </thead>

                     <?php
                      $i=1;
                     foreach($query as $row) { ?>
                       <tbody>
                   <tr>
                     <td><?php echo $i++; ?></td>
                     <td><?php echo $row['nip']; ?></td>
						<td><?php echo $row['nama']; ?></td>
						<td><?php echo $row['kd_bagian']; ?></td>
						<td><?php echo $row['alamat']; ?></td>



                   </tr>
                     <?php } ?>
                   </tbody>
                 </table>
               </div>
  </div>

  
