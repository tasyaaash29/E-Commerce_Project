<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   if(isset($_GET['iddel'])){
      $ar_data[]=$_GET['iddel'];// ? 
        $sql = "DELETE FROM pesanan WHERE id=?";
   } else {
        $_id = $_POST['id'];
        $_tanggal = $_POST['tanggal'];
        $_nama = $_POST['nama'];
        $_alamat = $_POST['alamat'];
        $_jumlah = $_POST['jumlah'];
        $_produk = $_POST['produk'];

      // array data
        $ar_data[]=$_id;
        $ar_data[]=$_tanggal;
        $ar_data[]=$_nama;
        $ar_data[]=$_alamat;
        $ar_data[]=$_jumlah;
        $ar_data[]=$_produk;

      if($_proses == "Simpan"){
      // data baru
      $sql = "INSERT INTO pesanan (id, tanggal, nama, alamat, jumlah, produk) VALUES (?,?,?,?,?,?)";
      }else if($_proses == "Update"){
      $ar_data[]=$_POST['idedit'];// ? 5
      $sql = "UPDATE pesanan SET id=?,tanggal=?,nama=?,alamat=?,jumlah=?,produk=? WHERE id=?";
      } 
   }
   
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }
   header('location:list_pesanan.php');
?>