<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content= "width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="3dcalculator.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <title>3D Calculator</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="name">
		<div class="container">
<script>
function tes(){
var a=prompt("Masukan nama kamu","");
var b=new Date();
var c=b.getHours();
if(c>0 && c<4){
}else if(c>=4 && c<=9){
c="Hai, Selamat pagi " + a;
}else if(c>=10 && c<15){
c="Hai, Selamat siang " + a;
}else if(c>=15 && c<18){
c="Hai, Selamat sore " + a;
}else if(c>=18 && c<19){
c="Hai, Selamat petang " + a;
}else if(c>=19 && c<24){
c="Hai, Selamat malam " + a;
}
{
document.getElementById("aaa").innerHTML=c;

}
}</script>
</div>
</div>
<!-- sosmed -->
<div class="sosmed">
    <div class="media">
      	<h6>Social Media</h6>
      <ul>
        <li><a href="https://www.facebook.com/kahfi.mantang"><i class="fab fa-facebook-square"  style="font-size:25px;"></i></a></li>
        <li><a href="https://www.instagram.com/skahfi14/"><i class="fab fa-instagram"  style="font-size:25px;"></i></a></li>
        <li><a href="https://github.com/kahfiShohibul"><i class="fab fa-github"  style="font-size:25px;"></i></a></li>
      </ul>
    </div>  
  </div>
  <div class="logo">
    <div>
      <h9><img src="RAS.png"></h9>
      
    </div>
  </div>
  <!--button name-->
  <div class="nama">
  <br>Nama : <button type="button"onClick="tes()">isi</button><br><br><span style="color:red; font-style: 40px; "id="aaa"></span><br>
</div>

  <!-- home -->
  <div class="cal text-center">
  	<div class="home">
  <h1>3D Calculator</h1>
  <h5><p>Menghitung Luas dan volume pada Permukaan dari Silinder, Kerucut dan Bola.</p></h5> 
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2>Silinder</h2>
      <h3><img src="silinder.png"></h3>
      <div class="description">
            <label>Masukkan Jari-Jari Silinder:</label>  
                <input type="text" id="jariSilinder"><br><br>
                    <label>Masukkan Tinggi Silinder:</label>
                        <input type="text" id="tinggiSilinder"><br><br>
                    <button class = "btn_hitung" onclick="permukaanSilinder(), volumeSilinder()">Hitung!
                    </button>
                <h4><p>Hasil Perhitungan</p></h4>
                                    <p>Luas Permukaan: <span id="hasilPermukaan_Silinder"></span> m<sup>2</sup></p>
                                    <p>Volume: <span id="hasilVolume_Silinder"></span> m<sup>3</sup></p>
           </div>
    </div>
    <div class="col-sm-4">
    <div class="container">	
      <h2>Kerucut</h2>
      <h3><img src="kerucut.png" alt=""></h3>
       <div class="col-md-5 col-md-offset-1">
                <label>Masukkan Jari-Jari Kerucut:</label>
                    <input type="text" id="jariKerucut"><br><br>
                  <label>Masukkan Garis Pelukis Kerucut:</label>
                            <input type="text" id="pelukisKerucut"><br><br>
                  <label>Masukkan Tinggi Kerucut:</label>
                                  <input type="text" id="tinggiKerucut"><br><br>
                    <button class = "btn_hitung" onclick="permukaanKerucut(), volumeKerucut()">Hitung!
                    </button>
                                    <h4><p>Hasil perhitungan</p></h4>
                                    <p>Luas Permukaan: <span id="hasilPermukaan_Kerucut"></span> m<sup>2</sup></p>
                                    <p>Volume: <span id="hasilVolume_Kerucut"></span> m<sup>3</sup></p>
           </div>
    </div>       
    </div>
    <div class="col-sm-4">
    <div class="container">	
      <h2>Bola</h2>
      <h3><img src="bulat.png" alt=""></h3>        
      <label>Masukkan Jari-Jari Bola:</label>
        <input type="text" id="jariBola"><br><br>
            <button class = "btn_hitung" onclick="permukaanBola(), volumeBola()">Hitung!
            </button>
                <h4><p>Hasil perhitungan</p></h4>
                    <p>Luas permukaan: <span id="hasilPermukaan_Bola"></span> m<sup>2</sup></p>
                    <p>Volume: <span id="hasilVolume_Bola"></span> m<sup>3</sup></p>
                    </div>
    </div>                
    </div>
  </div>
   <div class="copyright">
   	<li class="sosa">Copyright © 2021 - Shohibul Kahfi.</li>
   </div>
</body>
	<!-- Script -->
    <script>
        function permukaanSilinder() 
        {       
            var r = document.getElementById('jariSilinder').value;
            var t = document.getElementById('tinggiSilinder').value;

            var hasil = 2*Math.PI*r*r+2*Math.PI*r*t;
            document.getElementById('hasilPermukaan_Silinder').innerHTML = hasil.toFixed(2);
        }
    function volumeSilinder() 
        {       
            var r = document.getElementById('jariSilinder').value;
            var t = document.getElementById('tinggiSilinder').value;

            var hasil = Math.PI*(r*r)*t;
            document.getElementById('hasilVolume_Silinder').innerHTML = hasil.toFixed(2);
        }

        function permukaanKerucut() 
        {
            var r = document.getElementById('jariKerucut').value;
            var pelukis = document.getElementById('pelukisKerucut').value;
            var t = document.getElementById('tinggiKerucut').value;

            var hasil = Math.PI*r*r+Math.PI*r*pelukis;
            document.getElementById('hasilPermukaan_Kerucut').innerHTML = hasil.toFixed(2);
        }

        function volumeKerucut() 
        {
            var r = document.getElementById('jariKerucut').value;           
            var t = document.getElementById('tinggiKerucut').value;

            var hasil = (1/3)*Math.PI*(r*r)*t;
            document.getElementById('hasilVolume_Kerucut').innerHTML = hasil.toFixed(2);
        }
         function permukaanBola() 
        {
            var r = document.getElementById('jariBola').value;

            var hasil = 4*Math.PI*r*r;
            document.getElementById('hasilPermukaan_Bola').innerHTML = hasil.toFixed(2);
        }

        function volumeBola() 
        {
            var r = document.getElementById('jariBola').value;

            var hasil = 4/3*Math.PI*r*r*r;
            document.getElementById('hasilVolume_Bola').innerHTML = hasil.toFixed(2);
        }

</script>
</html>
