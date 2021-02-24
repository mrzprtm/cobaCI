<h2>Tampil Data Mahasiswa</h2>
<table border="1" width="80%">
    <tr>
        <th>NOBP</th>
        <th>NAMA</th>
        <th>JURUSAN</th>
        <th>ALAMAT</th>
    </tr>
    <?php foreach ($data->result_array() as $d) { ?>
    <tr>
        <td align="center"><?php echo $d['nobp'] ?></td>
        <td align="center"><?php echo $d['nama'] ?></td>
        <td align="center"><?php echo $d['jurusan'] ?></td>
        <td align="center"><?php echo $d['alamat'] ?></td>
    </tr>
    <?php } ?>
</table>