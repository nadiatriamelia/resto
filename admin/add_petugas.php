<?php
    if(isset($_POST['simpan'])){
        extract($_POST);
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $ins = $dbo->insert("tblpetugas","null,'$nama_petugas','$alamat','$no_hp','$username','$pass','$role'");
        if($ins){
            ?>
              <script>
                alert('Simpan Berhasil');
                location.href='?hal=petugas';
              </script>  
            <?php
        }
    }
?>
<div class="judul">
    <a href="?hal=petugas"><i class="fa fa-list"></i> Lihat Data</a>
    <div class="keterangan">Data Petugas</div>
</div>
<div class="data-input">
    <form action="?hal=add_petugas" method="post">
        <table>
            <tr> 
                 <td>Nama Petugas</td>
                <td>:</td>
                <td>
                <input type="text" name="nama_petugas" placeholder="Nama Menu" required>
                        </td>    
                    </tr>   
                    <tr>
                        <td>alamat</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="alamat" required> 
                        </td>
                    </tr>
                    <tr>
                        <td>No. HP</td>    
                        <td>:</td>
                        <td>
                            <input type="text" name="no_hp" required>
                        </td>    
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="username" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td>
                            <input type="password" name="password"placeholder="password">
                        </td>
                    <tr>
                        <td>Role</td>
                        <td>:</td>
                        <td>
                            <select name="role" id="">
                                <option value="">==pilih role==</option>
                                <option value="kasir">kasir</option>
                                <option value="dapur">Dapur</option>
                                <option value="manager">Manager</option>
                                <option value="owner">Owner</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>          
                        <button class="btn-add" type="submit" name="simpan" value="simpan"><i class="fa fa-save"></i> Simpan</button>
                    </td>

                </tr>
            </table>
        </form>
</div>