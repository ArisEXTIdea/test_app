<?= $this->extend('themes/MainContainer') ?>

<?= $this->section('meta_data') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div id="main-container" class="mb-10">
    <div id="header-section" class="w-full py-5 bg-sky-600">
        <h1 class="text-white text-center font-bold text-2xl">Detail Akun : <?= $userData['name'] ?></h1>
    </div>
    <div id="content-section" class="w-full flex justify-center flex-col items-center">
        <div id="form-control" class="w-11/12 md:w-2/3 py-10">
            <a href="/" class="px-5 py-3 bg-orange-500 hover:bg-orange-600 text-white rounded">
                <i class="fas fa-arrow-left mr-1"></i>Dashboard
            </a>
        </div>
        <div id="detail-section" class="w-11/12 md:w-2/3 py-10 bg-white drop-shadow-lg rounded-lg p-10">
            <div class="w-full">
                <img src="/assets/uploads/<?= $userData['profile_picture']?>" alt="picture">
            </div>
            <div id="form-control" class="w-11/12 md:w-2/3 pt-5">
                <a href="/ubah-profil" class="px-5 py-3 bg-orange-500 hover:bg-orange-600 text-white rounded">
                    <i class="fas fa-upload mr-1"></i>Ubah Foto profil
                </a>
                <a href="/edit-profile/<?= $userData['uid']?>" class="px-5 mx-2 py-3 bg-sky-500 hover:bg-sky-600 text-white rounded">
                    <i class="fas fa-edit mr-1"></i>Edit Data
                </a>
            </div>
            <div class="mt-5">
                <div class="bg-stone-200 w-full flex py-3 px-10">
                    <div class="w-1/3">
                        <p class="text-semibold">Nama</p>
                    </div>
                    <div class="w-2/3">
                        <p>: <?= $userData['name'] ?></p>
                    </div>
                </div>
                <div class="bg-stone-100 w-full flex py-3 px-10">
                    <div class="w-1/3">
                        <p class="text-semibold">Email</p>
                    </div>
                    <div class="w-2/3">
                        <p>: <?= $userData['email'] ?></p>
                    </div>
                </div>
                <div class="bg-stone-200 w-full flex py-3 px-10">
                    <div class="w-1/3">
                        <p class="text-semibold">Alamat</p>
                    </div>
                    <div class="w-2/3">
                        <p>: <?= $userData['address'] ?></p>
                    </div>
                </div>
                <div class="bg-stone-100 w-full flex py-3 px-10">
                    <div class="w-1/3">
                        <p class="text-semibold">Jenis Kelamin</p>
                    </div>
                    <div class="w-2/3">
                        <p>: <?= $userData['gender'] == 'L'? 'Laki-Laki': 'Perempuan' ?></p>
                    </div>
                </div>
                <div class="bg-stone-200 w-full flex py-3 px-10">
                    <div class="w-1/3">
                        <p class="text-semibold">Status Akun</p>
                    </div>
                    <div class="w-2/3">
                        <p>: <?= $userData['status'] == 1? 'Aktif': 'Tidak Aktif' ?></p>
                    </div>
                </div>
                <div class="bg-stone-100 w-full flex py-3 px-10">
                    <div class="w-1/3">
                        <p class="text-semibold">Level Akun</p>
                    </div>
                    <div class="w-2/3">
                        <p> :
                        <?php 
                            if($userData['level'] == 0) {
                                echo('Super User');
                            } elseif($userData == 1) {
                                echo('Site Administrator');
                            } elseif($userData == 2) {
                                echo('Admin');
                            } elseif($userData == 3) {
                                echo('User');
                            } 
                        ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>