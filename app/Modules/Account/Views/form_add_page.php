<?= $this->extend('themes/MainContainer') ?>

<?= $this->section('meta_data') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div id="main-container" class="mb-10">
    <div id="header-section" class="w-full py-5 bg-sky-600">
        <h1 class="text-white text-center font-bold text-2xl">Tambah Akun Baru</h1>
    </div>
    <div id="content-section" class="w-full flex justify-center flex-col items-center">
        <div id="form-control" class="w-11/12 md:w-2/3 py-10">
            <a href="/" class="px-5 py-3 bg-sky-500 hover:bg-sky-600 text-white rounded">
                <i class="fas fa-arrow-left mr-1"></i>Dashboard
            </a>
        </div>

        <?php $session = \Config\Services::session();?>
        <?php if($session->getFlashdata('alert') === 'active'):?>
        <div id="alert-section" class="w-11/12 md:w-2/3 pb-5">
            <?php if($session->getFlashdata('fail-alert') === 'active'):?>
            <div id="failed-alert" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Gagal!</strong>
                <span class="block sm:inline">User Gagal Didaftarkan</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
            <?php endif;?>
            <?php if($session->getFlashdata('success-alert') === 'active'):?>
            <div id="success-alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Berhasil!</strong>
                <span class="block sm:inline">User Berhasil Didaftarkan</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
            <?php endif;?>
        </div>
        <?php endif;?>

        <div id="form-section" class="w-11/12 md:w-2/3 py-10 bg-white drop-shadow-lg rounded-lg p-10">
            <form action="/saveData" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" name="name" class="w-full py-3 px-5 border rounded-lg mt-2" placeholder="contoh: Putra Pratama">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="w-full py-3 px-5 border rounded-lg mt-2" placeholder="contoh: akunku@gmail.com">
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="w-full py-3 px-5 border rounded-lg mt-2" placeholder="Buat password baru">
                </div>
                <div class="mb-3">
                    <label for="address">Alamat</label>
                    <input type="text" name="address" class="w-full py-3 px-5 border rounded-lg mt-2" placeholder="contoh: Jl.Patimura no.100">
                </div>
                <div class="mb-3">
                    <label for="gender">Jenis Kelamin</label>
                    <select  name="gender" class="w-full py-3 px-5 border rounded-lg mt-2">
                        <option value="L"> -- Pilih Salah Satu --</option>
                        <option value="L"> Laki-laki</option>
                        <option value="P"> Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="status">Status Akun</label>
                    <select  name="status" class="w-full py-3 px-5 border rounded-lg mt-2">
                        <option value="1"> -- Pilih Salah Satu --</option>
                        <option value="1"> Aktif</option>
                        <option value="0"> Tidak Aktif</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="level">Level Akun</label>
                    <select  name="level" class="w-full py-3 px-5 border rounded-lg mt-2">
                        <option value="3"> -- Pilih Salah Satu --</option>
                        <option value="0"> Super User</option>
                        <option value="1"> Site Administrator</option>
                        <option value="2"> Admin</option>
                        <option value="3"> User</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="profile_picture">Profile Picture</label>
                    <input type="file" name="profile_picture" class="w-full py-3 px-5 border rounded-lg mt-2" placeholder="contoh: Jl.Patimura no.100">
                </div>
                <div class="mb-3">
                    <button type="submit" class="px-5 py-3 text-white bg-sky-500 hover:bg-sky-600 rounded-lg">
                        <i class="fas fa-save mr-1"></i>
                        Simpan Data User
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>