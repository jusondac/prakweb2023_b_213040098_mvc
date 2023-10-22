<div>
    <h3>Daftar mahasiswa</h3>
    <div class="flex gap-10 mt-5">
        <?php foreach($data['mahasiswa'] as $mhs) : ?>
            <ul class="w-32">
                <li class="font-bold"><?= $mhs["nama"]; ?></li>
                <div class="text-sm">
                <li><?= $mhs["npm"]; ?></li>
                <li><?= $mhs["email"]; ?></li>
                <li><?= $mhs["jurusan"]; ?></li>
                </div>
            </ul>
        <?php endforeach ?>
    </div>
</div>