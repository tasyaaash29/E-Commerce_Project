<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   if(isset($_GET['iddel'])){
      $ar_data[]=$_GET['iddel'];// ? 
        $sql = "DELETE FROM produk WHERE id=?";
   } else {
        $_nama = $_POST['nama'];
        $_stok = $_POST['stok'];
        $_harga = $_POST['harga'];
        $_foto = $_POST['foto'];
        $_deskripsi = $_POST['deskripsi'];
        $_kategori_produk_id = $_POST['kategori_produk_id'];
        $_proses = $_POST['proses'];

      // array data
        $ar_data[]=$_nama;
        $ar_data[]=$_stok;
        $ar_data[]=$_harga;
        $ar_data[]=$_foto;
        $ar_data[]=$_deskripsi;
        $ar_data[]=$_kategori_produk_id;

      if($_proses == "Simpan"){
      // data baru
      $sql = "INSERT INTO produk (nama, stok, harga, foto, deskripsi, kategori_produk_id) VALUES (?,?,?,?,?,?)";
      }else if($_proses == "Update"){
      $ar_data[]=$_POST['idedit'];// ? 5
      $sql = "UPDATE produk SET nama=?,stok=?,harga=?,foto=?,deskripsi=?,kategori_produk_id=? WHERE id=?";
      } 
   }
   
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }
   header('location:list_produk.php');
?>