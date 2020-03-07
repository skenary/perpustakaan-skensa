<!DOCTYPE html>
<html>
<head>
  <title>Skenary</title>
  <link rel="stylesheet" type="text/css" href="../../../asset/CSS/petugas1.css">
</head>

<body>
  <center>
    <div class="img">
      <div class="text">
        <h1>Hai Petugas X!</h1>
        <br>
        <p>Welcome Back To Skenary</p>
      </div>
    </div>
  </center>
  <div class="header">
    <header id="skenary">Skenary</header>
      <div class="ul-li">
            <a id="addb" class="nowtamp" onclick="balik()"  href="#skenary">Add Book</a>
            <a id="addv" onclick="pindah()" href="#skenary">View Book</a>
      </div>
  </div>
<form>
  <div id="semuanya" class="semuanya">
    <div class="add_book">
      <center>
        <div class="box1">

            <h1>Book Description</h1>

          <div class="flex">
            <div class="box2">
              <p>Fill The Box</p>
              <div class="form" onclick="myFunction()">
                <input type="text" name="name" required="" autocomplete="off">
                <label for="name" class="label-name">
                    <span class="content-name">Book Name</span>
                </label>
              </div>
             

              <div class="form2">
                <input type="text" name="name" required="" autocomplete="off">
                <label for="name" class="label-name2">
                    <span class="content-name2">Book Type</span>
                </label>
              </div>

              <div class="form3">
                <input type="text" name="name" required="" autocomplete="off">
                <label for="name" class="label-name3">
                    <span class="content-name3">Book Code</span>
                </label>
              </div>
              
              
                <input class="tes" type="submit" name="submit">
              

            </div>

              <div class="apakek">
                <input type="file" id="file" disabled="disabled" onchange="return fileValidation()"/>
              </div>

            <div id="imagePreview"></div>
          </div>
        </div>
      </center>
    </div>
   
  </div>
</form>
<br><br><br><br><br>
</body>
</html>
<script>
    function myFunction() {
  document.getElementById("file").disabled = false;
}
</script>
<script>
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
</script>


 <div id="view_book" class="hidden">
    <p>ini untuk view ya!!!</p>
    </div>



<div id="add_book" class="hidden">
  <center>
    <div class="box1">
      <center>
        <h1>Book Description</h1>
      </center>

      <div class="flex">
        <div class="box2">
          <p>Fill The Box</p>
          <div class="form" onclick="myFunction()">
            <input type="text" name="name" required="" autocomplete="off">
            <label for="name" class="label-name">
                <span class="content-name">Book Name</span>
            </label>
          </div>
         

          <div class="form2">
            <input type="text" name="name" required="" autocomplete="off">
            <label for="name" class="label-name2">
                <span class="content-name2">Book Type</span>
            </label>
          </div>
          <div class="form3">
            <input type="text" name="name" required="" autocomplete="off">
            <label for="name" class="label-name3">
                <span class="content-name3">Book Code</span>
            </label>
          </div>

        </div>
        <div class="apakek">
          <input type="file" id="file" disabled="disabled" onchange="return fileValidation()"/>
        </div>
        <div id="imagePreview"></div>
      </div>
  </center>
</div>