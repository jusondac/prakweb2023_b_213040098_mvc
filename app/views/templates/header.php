<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman <?= $data['judul']; ?></title>
      <script src="https://cdn.tailwindcss.com"></script>
      <script>
        tailwind.config = {
        }
      </script>
</head> 
<body>
  <div class="h-14 w-screen flex border p-4">
    <div class="w-1/3 font-bold">PHP MVC</div>
    <div class="w-1/3 flex gap-10">
      <a href="<?= BASE_URL; ?>/Home">Home</a>
      <a href="<?= BASE_URL; ?>/About">About</a>
      <a href="<?= BASE_URL; ?>/Mahasiswa">Mahasiswa</a>
    </div>
    <div class="w-1/3"></div>
  </div>
  <div class="p-10">

  