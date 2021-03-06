<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
	margin: 0;
	padding: 0;
	background-image: url(i/e5.jpg);
	background-size: cover;
	background-attachment: fixed;
	background-position: center;
	font-family: sans-serif;
}
h1{color: #FFC0CB}
.blogg{
	position: relative;
	z-index: 1;
	margin: auto;
}
.kepala1, .kepala2, .badan1, .badan2, .badan3, .badan4, .footer{padding: 100px;}

.row{
	display: flex;
	flex-wrap: wrap;
}
.row .col-lg-3{flex-wrap: 25%}
.row .col-lg-4{flex-wrap: 33.333333%}
.row .col-lg-6{flex-wrap: 50%}
.row .col-lg-9{flex-wrap: 75%}

.kepala1{
	padding: 10px 115px;
	background-color: #FFF;
	overflow: hidden;
	position: fixed;
	width: 90vw;
	border: 3px solid #FFC0CB;
}
.tags{
	position: relative;
	top: 4vh;
	left: 33vw;
}
.tags a{
	text-decoration: none;
	color: #000;
	font-weight: bold;
	text-transform: uppercase;
	font-size: 14px;
	padding: 0 20px;
}
.tags a:hover{
	color: pink;
	transition: 0.3s;
}
.kepala2{
	background-color: rgba(0,0,0,0.3);
	color: white;
}
.kepala2 .judul{
	padding-top: 200px;
	font-size: 30px;
	line-height: 20px;
	font-weight: bold;
	padding-bottom: 50px;
}
.komen{
	margin-left: 20px;
	margin-top: 17px;
}
.gatau{
	float: right;
	transform: translateY(-50%);
	line-height: 1px;
}
.gatau p{
	font-size: 14px;
}
.gatau p, .gatau h4{
	padding-right: 100px;
	text-align: right;
	font-weight: bold;
}
.gatau img{
	padding-left: 160px;
	transform: translateY(-125%);
}
.badan1{
	background-color: #FFF;
}
.badan1 h1{
	font-size: 36px;
	text-align: center;
	margin-bottom: 15px;
}
.badan1 .teks, .badan1 .jarak{
	font-size: 14px;
	text-align: center;
	color: #777777;
	line-height: 5px;
}
.badan1 .jarak{
	margin-bottom: 120px;
}
.badan1 .ehem{
	padding: 15px;
	align-items: center;
}
.ehem img{
	width: 100%;
	max-width: 350px;	
}
.rate{
	margin-top: 10px;
}
.checked{
	color: orange;
}
.ehem a{
	text-decoration: none;
	color: #000;
	padding-top: 5px;
	font-size: 19px;
}
.badan3{
	background-color: #FFF;
}
.badan3 h1{
	font-size: 36px;
	text-align: center;
	margin-bottom: 13px;
}
.badan3 .apbah1, .badan3 .jarak4{
	font-size: 14px;
	text-align: center;
	color: #777777;
	line-height: 5px;
}
.badan3 .jarak4{
	margin-bottom: 120px;
}
.aku h4 a{
	text-decoration: none;
	color: #222;
	line-height: 2px;
	font-size: 18px;
	margin-bottom: 20px;
}
.buton .saya{
	margin-left: 42.5%;
	border-radius: 25px;
	border: 1px solid transparent;
	padding: 10px 30px;
	color: #FFF;
	font-weight: bold;
	background-color: #FF69B4;
	text-decoration: none;
	text-transform: uppercase;
}
.buton .saya:hover{
	border: 1px solid #FF69B4;
	background-color: #FFF;
	color: #FF69B4;
}
.kita{float: left; margin: 5px 5px 50px 5px; width: 24%}
.kita .aku{margin-left: 0;}
.kita .aku .terserah,.kita .aku .jarak3,.kita .aku .sukak,.kita .aku .komen2{font-size: 15px;}
.tanggal{
	padding: 2px 15px;
	background-color: #000;
	color: #fff;
	width: 115px;
	text-align: center;
}
.badan4{background-color: #F9F9FF;}
.badan4 h1{
	font-size: 36px;
	text-align: center;
	margin-bottom: 15px;
}
.badan4 .desember{
	font-size: 14px;
	text-align: center;
	color: #777777;
	margin-bottom: 600px;
}
.febuari{
	max-width: 50%;
	float: left;
	margin-top: -400px;
	color: #777;
}
.maret{
	max-width: 50%;
	float: right;
	margin-top: -450px;
	text-align: center;
}
.maret .dirimu{
	color: #777;
}
.samping{
	flex-direction: row;
}
.nov{
	text-align: right;
	margin-left: 5.5vw;	
}
.sabit i{
	border: 1px solid pink;
	width: 40px;
	height: 30px;
	text-align: center;
	display: box;
	color: pink;
	padding-top: 15px;
}
.sabit i:hover{
	color: #FFF;
	background-color: pink;
}
.tags .but{
	padding: 10px 20px;
	border-radius: 25px;
	background-color:  #FF69B4;
	border: 1px solid transparent;
	color: #FFF;
	font-weight: bold;
}
.but:hover{
	cursor: pointer;
	border: 1px solid #FF69B4;
	color: #FF69B4;
	background-color: #FFF;
}
.tags .now{color: pink;}
.subret{
	padding: 10px 20px;
	border-radius: 25px;
	background-color:  #FF69B4;
	border: 1px solid transparent;
	color: #FFF;
	font-weight: bold;
}
.subret:hover{
	cursor: pointer;
	border: 1px solid  #FF69B4;
	color: #FF69B4;
	background-color: #FFF;
}
</style>
</head>
<body>
<div class="blogg">
	<div class="kepala1 row">
		<div class="col-lg-6">
			<h1>NIKAH KUY</h1>
		</div>
		<div class="col-lg-6 tags">
			<a href="http://localhost/phpdasar/tugasakhir/oindex.php">Home</a>
			<a href="http://localhost/phpdasar/tugasakhir/oprofile.php" class="now">Profile</a>
			<a href="http://localhost/phpdasar/tugasakhir/oteam.php">Teams</a>
			<a href="http://localhost/phpdasar/tugasakhir/osearch.php">Search</a>
			<a href="http://localhost/phpdasar/tugasakhir/front.php" class="but">Sign Out</a>
		</div>
	</div>
	<div class="kepala2">
		<div class="content">
			<div class="pencarian">
				<input type="text" class="cari" placeholder="Addiction when gambling">
			</div>
<!-- 			<p class="haha">169 Results found for "Addiction when gambling"</p> -->
		</div>
	</div>

	<div class="row">
	<div class="badan1">
		<div class="stengah">
			<div class="dates">
				<span>20</span>
				<p>Dec</p>
			</div>
			<img src="i/d9.jpg" style="width:200px; height: 180px;">
			<div class="aku">
				<h4><a href="#"><p>Addiciton When Gambling</p>
				<p>Becomes A Problem</p></a></h4>
				<p class="terserah">Inapropriate behavior lorem ipsum dolor sit</p>
				<p class="hehe">amet, consectetur Inapropriate behavior lorem ipsum dolor sit amet</p>
				<p class="jarak3">consectetur</p>
				<p class="sukak">15 Likes </p> <p class="komen2">02 Comments</p>
			</div>			
		</div>
		<div class="stengah">
			<div class="dates">
				<span>20</span>
				<p>Dec</p>
			</div>
			<img src="i/c4.jpg" style="width:200px; height: 180px;">
			<div class="aku">
				<h4><a href="#"><p>Addiciton When Gambling</p>
				<p>Becomes A Problem</p></a></h4>
				<p class="terserah">Inapropriate behavior lorem ipsum dolor sit</p>
				<p class="hehe">amet, consectetur Inapropriate behavior lorem ipsum dolor sit amet</p>
				<p class="jarak3">consectetur</p>
				<p class="sukak">15 Likes </p> <p class="komen2">02 Comments</p>
			</div>			
		</div>
		<div class="stengah">
			<div class="dates">
				<span>20</span>
				<p>Dec</p>
			</div>
			<img src="i/c5.jpg" style="width:200px; height: 180px;">
			<div class="aku">
				<h4><a href="#"><p>Addiciton When Gambling</p>
				<p>Becomes A Problem</p></a></h4>
				<p class="terserah">Inapropriate behavior lorem ipsum dolor sit</p>
				<p class="hehe">amet, consectetur Inapropriate behavior lorem ipsum dolor sit amet</p>
				<p class="jarak3">consectetur</p>
				<p class="sukak">15 Likes </p> <p class="komen2">02 Comments</p>
			</div>			
		</div>
		<div class="stengah">
			<div class="dates">
				<span>20</span>
				<p>Dec</p>
			</div>
			<img src="i/c6.jpg" style="width:200px; height: 180px;">
			<div class="aku">
				<h4><a href="#"><p>Addiciton When Gambling</p>
				<p>Becomes A Problem</p></a></h4>
				<p class="terserah">Inapropriate behavior lorem ipsum dolor sit</p>
				<p class="hehe">amet, consectetur Inapropriate behavior lorem ipsum dolor sit amet</p>
				<p class="jarak3">consectetur</p>
				<p class="sukak">15 Likes </p> <p class="komen2">02 Comments</p>
			</div>			
		</div>
		<div class="stengah">
			<div class="dates">
				<span>20</span>
				<p>Dec</p>
			</div>
			<img src="i/c8.jpg" style="width:200px; height: 180px;">
			<div class="aku">
				<h4><a href="#"><p>Addiciton When Gambling</p>
				<p>Becomes A Problem</p></a></h4>
				<p class="terserah">Inapropriate behavior lorem ipsum dolor sit</p>
				<p class="hehe">amet, consectetur Inapropriate behavior lorem ipsum dolor sit amet</p>
				<p class="jarak3">consectetur</p>
				<p class="sukak">15 Likes </p> <p class="komen2">02 Comments</p>
			</div>			
		</div>
		<div class="stengah">
			<div class="dates">
				<span>20</span>
				<p>Dec</p>
			</div>
			<img src="i/c9.jpg" style="width:200px; height: 180px;">
			<div class="aku">
				<h4><a href="#"><p>Addiciton When Gambling</p>
				<p>Becomes A Problem</p></a></h4>
				<p class="terserah">Inapropriate behavior lorem ipsum dolor sit</p>
				<p class="hehe">amet, consectetur Inapropriate behavior lorem ipsum dolor sit amet</p>
				<p class="jarak3">consectetur</p>
				<p class="sukak">15 Likes </p> <p class="komen2">02 Comments</p>
			</div>			
		</div>
		<div class="stengah">
			<div class="dates">
				<span>20</span>
				<p>Dec</p>
			</div>
			<img src="i/d1.jpg" style="width:200px; height: 180px;">
			<div class="aku">
				<h4><a href="#"><p>Addiciton When Gambling</p>
				<p>Becomes A Problem</p></a></h4>
				<p class="terserah">Inapropriate behavior lorem ipsum dolor sit</p>
				<p class="hehe">amet, consectetur Inapropriate behavior lorem ipsum dolor sit amet</p>
				<p class="jarak3">consectetur</p>
				<p class="sukak">15 Likes </p> <p class="komen2">02 Comments</p>
			</div>			
		</div>
		<div class="stengah">
			<div class="dates">
				<span>20</span>
				<p>Dec</p>
			</div>
			<img src="i/d2.jpg" style="width:200px; height: 180px;">
			<div class="aku">
				<h4><a href="#"><p>Addiciton When Gambling</p>
				<p>Becomes A Problem</p></a></h4>
				<p class="terserah">Inapropriate behavior lorem ipsum dolor sit</p>
				<p class="hehe">amet, consectetur Inapropriate behavior lorem ipsum dolor sit amet</p>
				<p class="jarak3">consectetur</p>
				<p class="sukak">15 Likes </p> <p class="komen2">02 Comments</p>
			</div>			
		</div>
		<div class="buton">
			<a href="#" class="saya">Load More Post</a>
		</div>
	</div>
</body>
</html>