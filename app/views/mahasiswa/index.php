<div>
    <h3 class="text-4xl font-bold">Daftar mahasiswa</h3>
    <div class="flex gap-5 mt-5 flex-wrap">
        <?php foreach($data['mahasiswa'] as $mhs) : ?>
            <a href="<?= BASE_URL; ?>/Mahasiswa/detail/<?= $mhs["id"] ?>">
                <ul class="w-fit bg-green-100 p-5 rounded-xl shadow-xl">
                    <li class="font-bold"><?= $mhs["nama"]; ?></li>    
                </ul>
            </a>
        <?php endforeach ?>
    </div>
</div>