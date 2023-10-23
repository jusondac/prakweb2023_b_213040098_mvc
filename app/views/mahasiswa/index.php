<div class="container mt-3">

  
    <div class="row">
        <div class="col-lg-6">
          <h3>Daftar Mahasiswa</h3>
          <ul class="list-group">
            <?php foreach( $data['mahasiswa'] as $mhs ) : ?>
              <li class="list-group-item">
                  <?= $mhs['nama']; ?>
                  
                  <a href="<?= BASEURL; ?>/Mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right">detail</a>
              </li>
            <?php endforeach; ?>
          </ul>      
        </div>
    </div>

</div>

