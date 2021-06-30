<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<table class="table-product" style="color: black;">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Foto Produk</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td><img src="/assets/images/cookie1.jpg" alt="" class="image-product"></td>
            <td>Chocroissant</td>
            <td>
                <a href="" class="detail-button" style="color: black;">Detail</a>
            </td>
        </tr>
    </tbody>
</table>
<?= $this->endSection('content'); ?>