<?= $this->extend('themes/MainContainer') ?>

<?= $this->section('meta_data') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div id="main-container" class="mb-10">
    <div id="header-section" class="w-full py-5 bg-sky-600">
        <h1 class="text-white text-center font-bold text-2xl">SISTEM INFORMASI AKUN</h1>
    </div>
    <div id="content-section" class="w-full flex justify-center flex-col items-center">
        <div id="table-control" class="w-11/12 md:w-2/3 py-10">
            <a href="/tambah-akun" class="px-5 py-3 bg-green-500 hover:bg-green-600 text-white rounded">
                <i class="fas fa-plus mr-1"></i>Tambah Akun Baru
            </a>
        </div>
        <div id="table-section" class="w-11/12 md:w-2/3 py-10 bg-white drop-shadow-lg rounded-lg p-10">
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="py-3 bg-sky-500 text-white">No</th>
                        <th class="py-3 bg-sky-500 text-white">Name</th>
                        <th class="py-3 bg-sky-500 text-white">Email</th>
                        <th class="py-3 bg-sky-500 text-white">Status</th>
                        <th class="py-3 bg-sky-500 text-white">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($userData as $index=>$ud):?>
                    <tr class="border-b">
                        <td class="py-3 text-center"><?= $index + 1 ?></td>
                        <td class="py-3"><?= $ud['name'] ?></td>
                        <td class="py-3"><?= $ud['email'] ?></td>
                        <td class="py-3 text-center"><?= $ud['status'] == '1'? 'Aktif':'Tidak Aktif' ?></td>
                        <td class="py-3 text-center">
                            <a href="/deleteUser" class="p-2 rounded bg-red-400 hover:bg-red-500 text-white"><i class="fas fa-trash"></i></a>
                            <a href="/account-detail/<?= $ud['uid']?>" class="p-2 rounded bg-sky-400 hover:bg-sky-500 text-white"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>