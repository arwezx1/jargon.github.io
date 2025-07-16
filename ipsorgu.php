<?php

include_once 'includes/baglan.php';

session_start();

if ($_SESSION['GET_USER_SSID'] == "") {
    header('Location: auth/auth-login');
}

$GET_SESSION_TOKEN = $_SESSION['GET_USER_SSID'];

$CheckAccount = $db->query("SELECT * FROM users WHERE token = '$GET_SESSION_TOKEN'");
$CheckAccountCount = $CheckAccount->rowCount();

if ($CheckAccountCount != "1") {
    exit('Error: no token');
    die();
}

?>
<!DOCTYPE html>
<html class="loading dark-layout" lang="tr" data-layout="dark-layout" data-textdirection="ltr">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discord ID Sorgu</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <link rel='stylesheet' href='app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css'>
    <link rel='stylesheet' href='app-assets/vendors/css/tables/datatable/dataTables.checkboxes.css'>
    <link rel='stylesheet' href='app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css'>
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href=".assets/css/style.css">
	<style id="tableConfig">
		th {
			border: none !important;
		}

		table {
			border-collapse: collapse;
			border-spacing: 0;
			width: 100%;
		}

		th,
		td {
			text-align: left;
			padding: 8px;
		}
	</style>
</head>

<?php
include_once("includes/header.php");
?>

<?php
include_once("includes/menu.php");
?>

error_reporting(0);

?>
<!--<div class="page-content">-->
<!--BAŞLANGIC-->
<br>
<br>
             
<div class="container-fluid">

<div class="row">
    <div class="col-xl-12 col-md-6">
        <div class="col-lg-12">
        


                      <div class="card">
                <div class="card-body">
                <h4 class="fs-base lh-base fw-medium text-muted mb-0">





  <div class="card">
                                       


<h5><b>- IP adresi ile ne yapabilirim ?</b></h5>
<p>
    <b>İstediğiniz kişinin Adresine ve cihazına sızıp, veri aktarımı yapabilirsiniz.</b>
</p>


<h5><b> - Neden IP sorguda Açık adresi göremiyorum ?</b></h5>
<p>
    <b>Diğer sunucuları deneyebilir veya Harita üzerinden kullanabilirsiniz.</b>
</p>

<p><?php


                                                      ?>
</p>
					    			     
										
                                <form action="" method="post">

<div class="tab-pane active" id="tc" role="tabpanel">
                         <div class="mb-3 input-group">
                        <input type="text" maxlength="18" class="form-control" name="ip_adresi" id="number" placeholder="IP Adresi" required><br>
                        </div>
                       
                                </div>

                                <br>
					<center>
                   <button type="submit" name="sorgula" class="btn waves-effect waves-light btn-rounded btn-primary" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-search"></i> Sorgula</button></form>
<button id="durdurButon" type="button" class="btn waves-effect waves-light btn-rounded btn-danger" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-trash-alt"></i><a href="ipsorgu.php" class="text-white"> Sıfırla </a></button>
<button id="temizleButon" type="button" class="btn waves-effect waves-light btn-rounded btn-warning" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-print"></i> Yazdır Detay</button><br><br>
                </center>
                        
 </div>
  </div>
                                </div>
                            </div>
							</div>
								</div>
							
	<div class="col-xl-12 col-md-6">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
									
										<div class="table-responsive">
                                            <table class="table mb-0">
        
                                                <thead class="thead-light">
<tr>
<th scope="col">IP</th>
<th scope="col">Ülke</th>
<th scope="col">Ülke Kodu</th>
<th scope="col">Bölge</th>
<th scope="col">Bölge Kodu</th>
<th scope="col">Şehir</th>
<th scope="col">Posta Kodu</th>
<th scope="col">Enlem</th>
<th scope="col">Boylam</th>
<th scope="col">Zaman Dilimi</th>
<th scope="col">ISP</th>
<th scope="col">Organizasyon</th>
<th scope="col">As Numarası/Adı</th>
<th scope="col">Harita</th>
</tr>
                            </thead>
                        
                            <tr>
                                	<?php
        if(isset($_POST['sorgula'])) {
            //JSON Veriyi çek ve çöz
            $ip_bilgi = file_get_contents('http://ip-api.com/json/'.$_POST['ip_adresi']);
            $json_coz = json_decode($ip_bilgi, true);
            ?>
                  
<tbody>
<td><?php echo $json_coz['query']; ?> </td>

<td><?php echo $json_coz['country']; ?> </td>

<td><?php echo $json_coz['countryCode']; ?> </td>

<td><?php echo $json_coz['regionName']; ?> </td>

<td><?php echo $json_coz['region']; ?> </td>

<td><?php echo $json_coz['city']; ?> </td>

<td><?php echo $json_coz['zip']; ?> </td>

<td><?php echo $json_coz['lat']; ?> </td>

<td><?php echo $json_coz['lon']; ?> </td>

<td><?php echo $json_coz['timezone']; ?> </td>

<td><?php echo $json_coz['isp']; ?> </td>
	
<td><?php echo $json_coz['org']; ?> </td>

<td><?php echo $json_coz['as']; ?> </td>

<td><?php  echo '<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script><div style="overflow:hidden;height:240px;width:500px;"><div id="gmap_canvas" style="height:440px;width:700px;"></div><div><small><a href="embed google map">http://embedgooglemaps.com</a></small></div><div><small><a href="https://googlemapsgenerator.com">embed google maps</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type="text/javascript">function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(39.9333635,32.85974190000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng('.$json_coz['lat'].','.$json_coz['lon'].')});infowindow = new google.maps.InfoWindow({content:"<strong>'.$json_coz['query'].'</strong><br>'.$json_coz['city'].', '.$json_coz['country'].'<br>"});google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, "load", init_map);</script> '; } ?> </td>

</tbody>       
</tbody>
</table>



</div>

                            </div>
                                        </div>
									
                                    </div>
                                </div>
                            </div>
							</div>
							
                        </div>
				
				</div>
                        <!-- end row -->

                    </div>
                    <!-- container-fluid -->
                </div>

    </div>

    <?php
    include_once("includes/ayar.php");
    ?>
    
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js'></script>
    <script src='app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js'></script>
    <script src='app-assets/vendors/js/tables/datatable/dataTables.responsive.js'></script>
    
    <script>
        if (window.innerWidth < 769) {
            var element = document.getElementById("example2");
            element.classList.add("table-responsive");
        }
    </script>
    <script>
        $('#example22').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": false,
            "info": false,
            "autoWidth": true,
            "responsive": true,
            "sDom": '<"refresh"i<"clear">>rt<"top"lf<"clear">>rt<"bottom"p<"clear">>',
            "language": {
                "emptyTable": "Gösterilecek veri bulunamadı.",
                "processing": "Veriler yükleniyor",
                "sDecimal": ".",
                "sInfo": "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
                "sInfoFiltered": "(_MAX_ kayıt içerisinden bulunan)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "Sayfada _MENU_ kayıt göster",
                "sLoadingRecords": "Yükleniyor...",
                "sSearch": "Ara:",
                "sZeroRecords": "Eşleşen kayıt bulunamadı",
                "oPaginate": {
                    "sFirst": "İlk",
                    "sLast": "Son",
                    "sNext": "Sonraki",
                    "sPrevious": "Önceki"
                },
                "oAria": {
                    "sSortAscending": ": artan sütun sıralamasını aktifleştir",
                    "sSortDescending": ": azalan sütun sıralamasını aktifleştir"
                },
                "select": {
                    "rows": {
                        "_": "%d kayıt seçildi",
                        "0": "",
                        "1": "1 kayıt seçildi"
                    }
                }
            }
        });
    </script>
    
    
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components/components-bs-toast.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <script src="app-assets/js/scripts/forms/form-tooltip-valid.js"></script>
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    </body>
    </html>