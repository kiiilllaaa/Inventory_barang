<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Inventory Barang Sederhana</title>
</head>
<body>
    <form action="invoice.php" method="post">
    <table class="table">

    <tr><center><h2>Form Inventory Produk</h2> </center></tr>

        <tr>
            <td><h4>Kode Produk </h4></td>
            <td><input type="hidden" name="kodebarang">MD-01</td>
        </tr>

        <tr>
            <td><h4>Nama Produk </h4></td>
            <td><input type="text" name="nama_produk" id="namab"></td>
        </tr>

        <tr>
            <td><h4>Harga Produk </h4></td>
            <td><input name="harga_produk" type="text" id="harba"></td>
        </tr>

        <tr>
            <td><h4>Kategori Produk : </h4></td>
            <td><select name="kategori" id="kate">
                <option value="kategori 1">Kategori 1</option>
                <option value="kategori 2">Kategori 2</option>
                <option value="kategori 3">Kategori 3</option>
            </select></td>
        </tr>
        <tr>
            <td> <h4>Satuan Produk </h4></td>
                    <td><select name="satuan" id="stn">
                    <option value="null">Pilih satuan</option>
                        <option value="pieces">Pieces</option>
                        <option value="perbox">Perbox</option>
                    </select>
            </td>
        </tr>

        <tr>
            <td><h4>Jumlah Produk </h4></td>
            <td><input type="text" name="stok" id="jumlah"></td>
        </tr>

        <tr>
            <td colspan=3><input type="submit" name="btsimpan" id="simpen"></td>
        </tr>
    </table>
    </form>
</body>
</html>