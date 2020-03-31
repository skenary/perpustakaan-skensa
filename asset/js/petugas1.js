
function fileValidation(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
function pindah() {
  var view_book = document.getElementById("view_book").innerHTML;
  document.getElementById("addb").className = "";
  document.getElementById("addv").className = "nowtamp";
  document.getElementById("semuanya").innerHTML = view_book;
}
function balik() {
  var add_book = document.getElementById("add_book").innerHTML;
  document.getElementById("addb").className = "nowtamp";
  document.getElementById("addv").className = "";
  document.getElementById("semuanya").innerHTML = add_book;
}
function input(){
$cek = 0;
if(isset($_POST['nama_buku'])){
  if ($_POST['nama_buku'] !== "" ) {
    $cek=$cek + 1;
  }
}
if(isset($_POST['tipe_buku'])){
  if ($_POST['tipe_buku'] !== "" ) {
    $cek=$cek + 1;
  }
}
if(isset($_POST['kode_buku'])){
  if ($_POST['kode_buku'] !== "" ) {
    $cek=$cek + 1;
  }
} 
if ($cek == 3) {
  document.getElementById('file').disabled = false;
}

}