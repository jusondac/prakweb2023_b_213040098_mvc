<div>
    <h1 class="text-4xl mb-10">Detail Mahasiswa id : <span class="font-bold"><?= $data['mahasiswa']['id'] ?></span> </h1>
    <div class="mb-5">
        <div class="p-2 border w-1/6"><?= $data['mahasiswa']['nama'] ?></div>
        <div class="p-2 border w-1/6"><?= $data['mahasiswa']['npm'] ?></div>
        <div class="p-2 border w-1/6"><?= $data['mahasiswa']['email'] ?></div>
        <div class="p-2 border w-1/6"><?= $data['mahasiswa']['jurusan'] ?></div>
    </div>
    <a href="<?= BASE_URL ?>/Mahasiswa">Kembali</a>
</div>