<div class="panel panel-default">
    <div class="panel-body">
        <form action="proses_news.php" method="post" enctype="multipart/form-data">
            <table class="table">
            <tr class="success">
                <td colspan="2" >Form Input Berita</td>
            </tr>
            <tr>
                <td >Judul</td>
                <td><input class="form-control"  type="text" name="judul" value="" placeholder="Isi Judul" /></td>
            </tr>
            <tr>
                <td >Isi Berita</td>
                <td><input class="form-control"  type="text" name="isi" value="" placeholder="Isi Berita" /></td>
            </tr>
            <tr>
                <td>Upload Gambar</td>
                <td><input type="file" name="file"></td>
            </tr>
            <tr>
                <td >Status</td>
				<td><input  type="radio" name="ket" value="Y"  /> Aktif
					<input  type="radio" name="ket" value="T"  /> Tidak Aktif
				</td>
            </tr>
            <tr>
                <td >Kata Kunci</td>
                <td><input class="form-control"  type="text" name="keyword" value="" placeholder="Isi Kata Kunci" /></td>
            </tr>
            <tr>
                <td >Deskripsi</td>
                <td><input class="form-control"  type="text" name="deskripsi" value="" placeholder="Isi deskripsi" /></td>
            </tr>
            <tr>
                <td >Link</td>
                <td><input class="form-control"  type="text" name="url" value="" placeholder="Isi Link" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td><td>	<input type="submit" class="btn btn-success" name="upload" value="Upload" />
                                    <input type="reset" class="btn btn-danger" name="reset" value="BATAL" />
                </td>
            </tr>
            </table>
        </form>
    </div>
</div>