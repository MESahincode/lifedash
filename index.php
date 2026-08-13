<!DOCTYPE html>
<html lang="tr">
<head>

<title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Anlık verilere hızlıca ulaşın.">
  <meta name="keywords" content="lifedash, altın fiyatları, nöbetçi eczaneler, dashboard, canlı veri">
  <meta name="author" content="Musa Eymen Şahin">

    <link rel="stylesheet" href="index.css">
</head>
<body>



<div class="mainctrl">



<div class="vr1ctrl">
<div class="column1ctrl">
<div class="column1">


<!-- hava durumu -->
<div class="weathergeneralcontrol">

<div class="weatherbasic">

<strong><p id="Temperature"></p></strong>

<img id="WeatherIcon" src="">

  </div>

  <div class="weathergeneral">
 <p id="Wind"></p>
<p id="Pressure"></p>
</div>



</div>

<!-- hava durumu -->





<!-- ezan vakitleri -->
<div class="prayctrl">
<h3 id="pray">Ezan Vakitleri:</h3>

<p id="Imsak"></p>
<p id="Gunes"></p>
<p id="Ogle"></p>
<p id="Ikindi"></p>
<p id="Aksam"></p>
<p id="Yatsi"></p>

</div>
<!-- ezan vakitleri -->






</div> <!-- column1 öğeleri hizalamak için vr1 içine dahil değil -->
</div ><!-- column1ctrl vr1 içine dahil değil tüm yönetim -->



<div class="vr1"></div>

</div ><!-- vr1ctrl vr1 içine dahil tüm yönetim -->






<div class="vr2ctrl">
<div class="column2ctrl">


<h1 id="currentTime"></h1>



</div> <!-- column2ctrl tüm yönetim vr2 içine dahil değil -->
<!-- Burada column2 kullanmadık çünkü sadece 1 öğemiz var. Öğeleri hizalamak için en az 2 öğe gereklidir.-->


<div class="vr2"></div>

</div ><!-- vr2ctrl vr2 içine dahil tüm yönetim -->





<div class="vr3ctrl">
<div class="column3ctrl">
<div class="column3">

<h1 class="altinpricetitle">Altın Fiyatları</h1>
<div class="doviz">


<p id="gram"></p>
<p id="ons"></p>
<p id="ceyrek"></p>
<p id="yarim"></p>
<p id="tam"></p>
<p id="cumhuriyet"></p>
<p id="usdtry"></p>
<p id="usdeur"></p>
<p id="lastupdate"></p>

</div><!-- Döviz  -->

</div> <!-- column3 öğeleri hizalamak için vr1 içine dahil değil -->
</div> <!-- column3ctrl tüm yönetim vr2 içine dahil değil -->



<div class="vr3"></div>

</div ><!-- vr3ctrl vr3 içine dahil tüm yönetim -->



<div class="vr4ctrl">
  <div class="column4ctrl"> 
<div class="column4">


<h1 id="column4title">Nöbetçi Eczaneler:</h1>


<div id="eczaneAlani" style="margin:auto;text-align:center;width:100%;max-width:400px;">
    Nöbetçi eczaneler yükleniyor...
</div>


<p id="location"></p>


</div> <!-- column4 öğeleri hizalamak için vr1 içine dahil değil -->
 </div> <!--  column4ctrl tüm yönetim vr2 içine dahil değil -->



<div class="vr4"></div>

</div ><!-- vr4ctrl vr4 içine dahil tüm yönetim -->









 <!-- <div class="vr5ctrl"> -->
 <!--  <div class="column5ctrl"> -->
<div class="column5">



 
<form action="" method="GET">
    
        <div class="select">
        <input type="text" class="locationcity" name="locationcity" placeholder="İli seçin...">
  <input type="text" class="locationdistrict" name="locationdistrict" placeholder="İlçeyi seçin...">
  <input type="submit" class="submit" value="Gönder">
    </div>
    
</form>

<p class="not">İl ve ilçe adlarının sadece baş harfleri büyük yazılmalı.</p><br><br>

<p class="yapimci">Yapımcı:Musa Eymen Şahin</p><br>
<p class="github">MESahincode</p>
</div> <!-- column5 öğeleri hizalamak için vr1 içine dahil değil -->
<!-- </div> --><!-- column5ctrl tüm yönetim vr2 içine dahil değil -->



 <!-- <div class="vr5"></div> -->

<!-- </div > vr5ctrl vr5 içine dahil tüm yönetim -->


</div ><!-- mainctrl tüm columnları yan yana getirmek için flex-direction:row; ile -->



<script>


setInterval(() => {
    const suan = new Date().toLocaleTimeString('tr-TR');
    document.getElementById("currentTime").innerText = suan;
    

}, 1000);



</script>


<?php
$konumcity = "";
$konumdistrict = "";
if(isset($_GET['locationcity']) && isset($_GET['locationdistrict'])){
    $konumcity = htmlspecialchars($_GET['locationcity']);
    $konumdistrict = htmlspecialchars($_GET['locationdistrict']);
}
?>
<script>

const ilceler = {
   "Adana": {
        "Aladağ": { location: "1757", link: "adana-aladag" },
        "Ceyhan": { location: "1219", link: "adana-ceyhan" },
        "Çukurova": { location: "2033", link: "adana-cukurova" },
        "Feke": { location: "1329", link: "adana-feke" },
        "İmamoğlu": { location: "1806", link: "adana-imamoglu" },
        "Karaisalı": { location: "1437", link: "adana-karaisali" },
        "Karataş": { location: "1443", link: "adana-karatas" },
        "Kozan": { location: "1486", link: "adana-kozan" },
        "Pozantı": { location: "1580", link: "adana-pozanti" },
        "Saimbeyli": { location: "1588", link: "adana-saimbeyli" },
        "Sarıçam": { location: "2032", link: "adana-saricam" },
        "Seyhan": { location: "1104", link: "adana-seyhan" },
        "Tufanbeyli": { location: "1687", link: "adana-tufanbeyli" },
        "Yumurtalık": { location: "1734", link: "adana-yumurtalik" },
        "Yüreğir": { location: "1748", link: "adana-yuregir" }
    },
    "Adıyaman": {
        "Besni": { location: "1182", link: "adiyaman-besni" },
        "Çelikhan": { location: "1246", link: "adiyaman-celikhan" },
        "Gerger": { location: "1347", link: "adiyaman-gerger" },
        "Gölbaşı": { location: "1354", link: "adiyaman-golbasi" },
        "Kahta": { location: "1425", link: "adiyaman-kahta" },
        "Merkez": { location: "1105", link: "adiyaman-merkez" },
        "Samsat": { location: "1592", link: "adiyaman-samsat" },
        "Sincik": { location: "1985", link: "adiyaman-sincik" },
        "Tut": { location: "1989", link: "adiyaman-tut" }
    },
    "Afyonkarahisar": {
        "Başmakçı": { location: "1771", link: "afyonkarahisar-basmakci" },
        "Bayat": { location: "1773", link: "afyonkarahisar-bayat" },
        "Bolvadin": { location: "1200", link: "afyonkarahisar-bolvadin" },
        "Çay": { location: "1239", link: "afyonkarahisar-cay" },
        "Çobanlar": { location: "1906", link: "afyonkarahisar-cobanlar" },
        "Dazkırı": { location: "1267", link: "afyonkarahisar-dazkiri" },
        "Dinar": { location: "1281", link: "afyonkarahisar-dinar" },
        "Emirdağ": { location: "1306", link: "afyonkarahisar-emirdag" },
        "Evciler": { location: "1923", link: "afyonkarahisar-evciler" },
        "Hocalar": { location: "1944", link: "afyonkarahisar-hocalar" },
        "İhsaniye": { location: "1404", link: "afyonkarahisar-ihsaniye" },
        "İscehisar": { location: "1809", link: "afyonkarahisar-iscehisar" },
        "Kızılören": { location: "1961", link: "afyonkarahisar-kiziloren" },
        "Merkez": { location: "1108", link: "afyonkarahisar-merkez" },
        "Sandıklı": { location: "1594", link: "afyonkarahisar-sandikli" },
        "Sinanpaşa": { location: "1626", link: "afyonkarahisar-sinanpasa" },
        "Sultandağı": { location: "1639", link: "afyonkarahisar-sultandagi" },
        "Şuhut": { location: "1664", link: "afyonkarahisar-suhut" }
    },
    "Ağrı": {
        "Diyadin": { location: "1283", link: "agri-diyadin" },
        "Doğubayazıt": { location: "1287", link: "agri-dogubayazit" },
        "Eleşkirt": { location: "1301", link: "agri-eleskirt" },
        "Hamur": { location: "1379", link: "agri-hamur" },
        "Merkez": { location: "1111", link: "agri-merkez" },
        "Patnos": { location: "1568", link: "agri-patnos" },
        "Taşlıçay": { location: "1667", link: "agri-taslicay" },
        "Tutak": { location: "1691", link: "agri-tutak" }
    },
    "Amasya": {
        "Göynücek": { location: "1363", link: "amasya-goynucek" },
        "Gümüşhacıköy": { location: "1368", link: "amasya-gumushacikoy" },
        "Hamamözü": { location: "1938", link: "amasya-hamamozu" },
        "Merkez": { location: "1134", link: "amasya-merkez" },
        "Merzifon": { location: "1524", link: "amasya-merzifon" },
        "Suluova": { location: "1641", link: "amasya-suluova" },
        "Taşova": { location: "1668", link: "amasya-tasova" }
    },
    "Ankara": {
        "Altındağ": { location: "1130", link: "ankara-altindag" },
        "Ayaş": { location: "1157", link: "ankara-ayas" },
        "Bala": { location: "1167", link: "ankara-bala" },
        "Beypazarı": { location: "1187", link: "ankara-beypazari" },
        "Çamlıdere": { location: "1227", link: "ankara-camlidere" },
        "Çankaya": { location: "1231", link: "ankara-cankaya" },
        "Çubuk": { location: "1260", link: "ankara-cubuk" },
        "Elmadağ": { location: "1302", link: "ankara-elmadag" },
        "Güdül": { location: "1365", link: "ankara-gudul" },
        "Haymana": { location: "1387", link: "ankara-haymana" },
        "Kalecik": { location: "1427", link: "ankara-kalecik" },
        "Kızılcahamam": { location: "1473", link: "ankara-kizilcahamam" },
        "Nallıhan": { location: "1539", link: "ankara-nallihan" },
        "Polatlı": { location: "1578", link: "ankara-polatli" },
        "Şereflikoçhisar": { location: "1658", link: "ankara-sereflikochisar" },
        "Yenimahalle": { location: "1723", link: "ankara-yenimahalle" },
        "Gölbaşı": { location: "1744", link: "ankara-golbasi" },
        "Keçiören": { location: "1745", link: "ankara-kecioren" },
        "Mamak": { location: "1746", link: "ankara-mamak" },
        "Sincan": { location: "1747", link: "ankara-sincan" },
        "Kazan": { location: "1815", link: "ankara-kazan" },
        "Akyurt": { location: "1872", link: "ankara-akyurt" },
        "Etimesgut": { location: "1922", link: "ankara-etimesgut" },
        "Evren": { location: "1924", link: "ankara-evren" },
        "Pursaklar": { location: "2034", link: "ankara-pursaklar" }
    },
    "Antalya": {
        "Akseki": { location: "1121", link: "antalya-akseki" },
        "Alanya": { location: "1126", link: "antalya-alanya" },
        "Elmalı": { location: "1303", link: "antalya-elmali" },
        "Finike": { location: "1333", link: "antalya-finike" },
        "Gazipaşa": { location: "1337", link: "antalya-gazipasa" },
        "Gündoğmuş": { location: "1370", link: "antalya-gundogmus" },
        "Kaş": { location: "1451", link: "antalya-kas" },
        "Korkuteli": { location: "1483", link: "antalya-korkuteli" },
        "Kumluca": { location: "1492", link: "antalya-kumluca" },
        "Manavgat": { location: "1512", link: "antalya-manavgat" },
        "Serik": { location: "1616", link: "antalya-serik" },
        "Demre": { location: "1811", link: "antalya-demre" },
        "İbradı": { location: "1946", link: "antalya-ibradi" },
        "Kemer": { location: "1959", link: "antalya-kemer" },
        "Aksu": { location: "2035", link: "antalya-aksu" },
        "Döşemealtı": { location: "2036", link: "antalya-dosemealti" },
        "Kepez": { location: "2037", link: "antalya-kepez" },
        "Konyaaltı": { location: "2038", link: "antalya-konyaalti" },
        "Muratpaşa": { location: "2039", link: "antalya-muratpasa" }
    },
    "Artvin": {
        "Ardanuç": { location: "1145", link: "artvin-ardanuc" },
        "Arhavi": { location: "1147", link: "artvin-arhavi" },
        "Merkez": { location: "1152", link: "artvin-merkez" },
        "Borçka": { location: "1202", link: "artvin-borcka" },
        "Hopa": { location: "1395", link: "artvin-hopa" },
        "kemalpaşa": { location: "2105", link: "artvin-kemalpasa" },
        "Şavşat": { location: "1653", link: "artvin-savsat" },
        "Yusufeli": { location: "1736", link: "artvin-yusufeli" },
        "Murgul": { location: "1828", link: "artvin-murgul" }
    },
    "Aydın": {
        "Merkez": { location: "1159", link: "aydin-merkez" },
        "Bozdoğan": { location: "1206", link: "aydin-bozdogan" },
        "Efeler": { location: "2076", link: "aydin-efeler" },
        "Çine": { location: "1256", link: "aydin-cine" },
        "Germencik": { location: "1348", link: "aydin-germencik" },
        "Karacasu": { location: "1435", link: "aydin-karacasu" },
        "Koçarlı": { location: "1479", link: "aydin-kocarli" },
        "Kuşadası": { location: "1497", link: "aydin-kusadasi" },
        "Kuyucak": { location: "1498", link: "aydin-kuyucak" },
        "Nazilli": { location: "1542", link: "aydin-nazilli" },
        "Söke": { location: "1637", link: "aydin-soke" },
        "Sultanhisar": { location: "1640", link: "aydin-sultanhisar" },
        "Yenipazar": { location: "1724", link: "aydin-yenipazar" },
        "Buharkent": { location: "1781", link: "aydin-buharkent" },
        "İncirliova": { location: "1807", link: "aydin-incirliova" },
        "Karpuzlu": { location: "1957", link: "aydin-karpuzlu" },
        "Köşk": { location: "1968", link: "aydin-kosk" },
        "Didim": { location: "2000", link: "aydin-didim" }
    },
    "Balıkesir": {
        "Altıeylül": { location: "2077", link: "balikesir-altieylul" },
        "Ayvalık": { location: "1161", link: "balikesir-ayvalik" },
        "Merkez": { location: "1168", link: "balikesir-merkez" },
        "Balya": { location: "1169", link: "balikesir-balya" },
        "Bandırma": { location: "1171", link: "balikesir-bandirma" },
        "Bigadiç": { location: "1191", link: "balikesir-bigadic" },
        "Burhaniye": { location: "1216", link: "balikesir-burhaniye" },
        "Dursunbey": { location: "1291", link: "balikesir-dursunbey" },
        "Edremit": { location: "1294", link: "balikesir-edremit" },
        "Erdek": { location: "1310", link: "balikesir-erdek" },
        "Gönen": { location: "1360", link: "balikesir-gonen" },
        "Havran": { location: "1384", link: "balikesir-havran" },
        "İvrindi": { location: "1418", link: "balikesir-ivrindi" },
        "Karesi": { location: "2078", link: "balikesir-karesi" },
        "Kepsut": { location: "1462", link: "balikesir-kepsut" },
        "Manyas": { location: "1514", link: "balikesir-manyas" },
        "Savaştepe": { location: "1608", link: "balikesir-savastepe" },
        "Sındırgı": { location: "1619", link: "balikesir-sindirgi" },
        "Gömeç": { location: "1928", link: "balikesir-gomec" },
        "Susurluk": { location: "1644", link: "balikesir-susurluk" },
        "Marmara": { location: "1824", link: "balikesir-marmara" }
    },
    "Bilecik": {
        "Merkez": { location: "1192", link: "bilecik-merkez" },
        "Bozüyük": { location: "1210", link: "bilecik-bozuyuk" },
        "Gölpazarı": { location: "1359", link: "bilecik-golpazari" },
        "Osmaneli": { location: "1559", link: "bilecik-osmaneli" },
        "Pazaryeri": { location: "1571", link: "bilecik-pazaryeri" },
        "Söğüt": { location: "1636", link: "bilecik-sogut" },
        "Yenipazar": { location: "1857", link: "bilecik-yenipazar" },
        "İnhisar": { location: "1948", link: "bilecik-inhisar" }
    },
    "Bingöl": {
        "Merkez": { location: "1193", link: "bingol-merkez" },
        "Genç": { location: "1344", link: "bingol-genc" },
        "Karlıova": { location: "1446", link: "bingol-karliova" },
        "Kiğı": { location: "1475", link: "bingol-kigi" },
        "Solhan": { location: "1633", link: "bingol-solhan" },
        "Adaklı": { location: "1750", link: "bingol-adakli" },
        "Yayladere": { location: "1855", link: "bingol-yayladere" },
        "Yedisu": { location: "1996", link: "bingol-yedisu" }
    },
    "Bitlis": {
        "Adilcevaz": { location: "1106", link: "bitlis-adilcevaz" },
        "Ahlat": { location: "1112", link: "bitlis-ahlat" },
        "Merkez": { location: "1196", link: "bitlis-merkez" },
        "Hizan": { location: "1394", link: "bitlis-hizan" },
        "Mutki": { location: "1537", link: "bitlis-mutki" },
        "Tatvan": { location: "1669", link: "bitlis-tatvan" },
        "Güroymak": { location: "1798", link: "bitlis-guroymak" }
    },
    "Bolu": {
        "Merkez": { location: "1199", link: "bolu-merkez" },
        "Gerede": { location: "1346", link: "bolu-gerede" },
        "Göynük": { location: "1364", link: "bolu-goynuk" },
        "Kıbrıscık": { location: "1466", link: "bolu-kıbrıscık" },
        "Mengen": { location: "1522", link: "bolu-mengen" },
        "Mudurnu": { location: "1531", link: "bolu-mudurnu" },
        "Seben": { location: "1610", link: "bolu-seben" },
        "Dörtdivan": { location: "1916", link: "bolu-dortdivan" },
        "Yeniçağa": { location: "1997", link: "bolu-yenicaga" }
    },
    "Burdur": {
        "Ağlasun": { location: "1109", link: "burdur-aglasun" },
        "Bucak": { location: "1211", link: "burdur-bucak" },
        "Merkez": { location: "1215", link: "burdur-merkez" },
        "Gölhisar": { location: "1357", link: "burdur-golhisar" },
        "Tefenni": { location: "1672", link: "burdur-tefenni" },
        "Yeşilova": { location: "1728", link: "burdur-yesilova" },
        "Karamanlı": { location: "1813", link: "burdur-karamanli" },
        "Kemer": { location: "1816", link: "burdur-kemer" },
        "Altınyayla": { location: "1874", link: "burdur-altinyayla" },
        "Çavdır": { location: "1899", link: "burdur-cavdir" },
        "Çeltikçi": { location: "1903", link: "burdur-celtikci" }
    },
    "Bursa": {
        "Gemlik": { location: "1343", link: "bursa-gemlik" },
        "İnegöl": { location: "1411", link: "bursa-inegol" },
        "İznik": { location: "1420", link: "bursa-iznik" },
        "Karacabey": { location: "1434", link: "bursa-karacabey" },
        "Keles": { location: "1457", link: "bursa-keles" },
        "Mudanya": { location: "1530", link: "bursa-mudanya" },
        "Mustafakemalpaşa": { location: "1535", link: "bursa-mustafakemalpasa" },
        "Orhaneli": { location: "1553", link: "bursa-orhaneli" },
        "Orhangazi": { location: "1554", link: "bursa-orhangazi" },
        "Yenişehir": { location: "1725", link: "bursa-yenisehir" },
        "Büyükorhan": { location: "1783", link: "bursa-buyukorhan" },
        "Harmancık": { location: "1799", link: "bursa-harmancik" },
        "Nilüfer": { location: "1829", link: "bursa-nilufer" },
        "Osmangazi": { location: "1832", link: "bursa-osmangazi" },
        "Yıldırım": { location: "1859", link: "bursa-yildirim" },
        "Gürsu": { location: "1935", link: "bursa-gursu" },
        "Kestel": { location: "1960", link: "bursa-kestel" }
    },
    "Çanakkale": {
        "Ayvacık": { location: "1160", link: "canakkale-ayvacik" },
        "Bayramiç": { location: "1180", link: "canakkale-bayramic" },
        "Biga": { location: "1190", link: "canakkale-biga" },
        "Bozcaada": { location: "1205", link: "canakkale-bozcaada" },
        "Çan": { location: "1229", link: "canakkale-can" },
        "Merkez": { location: "1230", link: "canakkale-merkez" },
        "Eceabat": { location: "1293", link: "canakkale-eceabat" },
        "Ezine": { location: "1326", link: "canakkale-ezine" },
        "Gelibolu": { location: "1340", link: "canakkale-gelibolu" },
        "Gökçeada": { location: "1408", link: "canakkale-gokceada" },
        "Lapseki": { location: "1503", link: "canakkale-lapseki" },
        "Yenice": { location: "1722", link: "canakkale-yenice" }
    },
    "Çankırı": {
        "Merkez": { location: "1232", link: "cankiri-merkez" },
        "Çerkeş": { location: "1248", link: "cankiri-cerkes" },
        "Eldivan": { location: "1300", link: "cankiri-eldivan" },
        "Ilgaz": { location: "1399", link: "cankiri-ilgaz" },
        "Kurşunlu": { location: "1494", link: "cankiri-kursunlu" },
        "Orta": { location: "1555", link: "cankiri-orta" },
        "Şabanözü": { location: "1649", link: "cankiri-sabanozu" },
        "Yapraklı": { location: "1718", link: "cankiri-yaprakli" },
        "Atkaracalar": { location: "1765", link: "cankiri-atkaracalar" },
        "Kızılırmak": { location: "1817", link: "cankiri-kizilirmak" },
        "Bayramören": { location: "1885", link: "cankiri-bayramoren" },
        "Korgun": { location: "1963", link: "cankiri-korgun" }
    },
    "Çorum": {
        "Alaca": { location: "1124", link: "corum-alaca" },
        "Bayat": { location: "1177", link: "corum-bayat" },
        "Merkez": { location: "1259", link: "corum-merkez" },
        "İskilip": { location: "1414", link: "corum-iskilip" },
        "Kargı": { location: "1445", link: "corum-kargi" },
        "Mecitözü": { location: "1520", link: "corum-mecitozu" },
        "Ortaköy": { location: "1556", link: "corum-ortakoy" },
        "Osmancık": { location: "1558", link: "corum-osmancik" },
        "Sungurlu": { location: "1642", link: "corum-sungurlu" },
        "Boğazkale": { location: "1778", link: "corum-bogazkale" },
        "Uğurludağ": { location: "1850", link: "corum-ugurludag" },
        "Dodurga": { location: "1911", link: "corum-dodurga" },
        "Laçin": { location: "1972", link: "corum-lacin" },
        "Oğuzlar": { location: "1976", link: "corum-oguzlar" }
    },
    "Denizli": {
        "Acıpayam": { location: "1102", link: "denizli-acipayam" },
        "Buldan": { location: "1214", link: "denizli-buldan" },
        "Çal": { location: "1224", link: "denizli-cal" },
        "Çameli": { location: "1226", link: "denizli-cameli" },
        "Çardak": { location: "1233", link: "denizli-cardak" },
        "Çivril": { location: "1257", link: "denizli-civril" },
        "Merkezefendi": { location: "2079", link: "denizli-merkezefendi" },
        "Pamukkale": { location: "1871", link: "denizli-pamukkale" },
        "Güney": { location: "1371", link: "denizli-guney" },
        "Kale": { location: "1426", link: "denizli-kale" },
        "Sarayköy": { location: "1597", link: "denizli-saraykoy" },
        "Tavas": { location: "1670", link: "denizli-tavas" },
        "Babadağ": { location: "1769", link: "denizli-babadag" },
        "Bekilli": { location: "1774", link: "denizli-bekilli" },
        "Honaz": { location: "1803", link: "denizli-honaz" },
        "Serinhisar": { location: "1840", link: "denizli-serinhisar" },
        "Baklan": { location: "1881", link: "denizli-baklan" },
        "Beyağaç": { location: "1888", link: "denizli-beyagac" },
        "Bozkurt": { location: "1889", link: "denizli-bozkurt" }
    },
    "Diyarbakır": {
        "Kocaköy": { location: "1962", link: "diyarbakir-kocakoy" },
        "Çermik": { location: "1249", link: "diyarbakir-cermik" },
        "Çınar": { location: "1253", link: "diyarbakir-cinar" },
        "Çüngüş": { location: "1263", link: "diyarbakir-cungus" },
        "Dicle": { location: "1278", link: "diyarbakir-dicle" },
        "Ergani": { location: "1315", link: "diyarbakir-ergani" },
        "Hani": { location: "1381", link: "diyarbakir-hani" },
        "Hazro": { location: "1389", link: "diyarbakir-hazro" },
        "Kulp": { location: "1490", link: "diyarbakir-kulp" },
        "Lice": { location: "1504", link: "diyarbakir-lice" },
        "Silvan": { location: "1624", link: "diyarbakir-silvan" },
        "Eğil": { location: "1791", link: "diyarbakir-egil" },
        "Bağlar": { location: "2040", link: "diyarbakir-baglar" },
        "Kayapınar": { location: "2041", link: "diyarbakir-kayapinar" },
        "Sur": { location: "2042", link: "diyarbakir-sur" },
        "Yenişehir": { location: "2043", link: "diyarbakir-yenisehir" },
        "Bismil": { location: "1195", link: "diyarbakir-bismil" }
    },
    "Edirne": {
        "Merkez": { location: "1295", link: "edirne-merkez" },
        "Enez": { location: "1307", link: "edirne-enez" },
        "Havsa": { location: "1385", link: "edirne-havsa" },
        "İpsala": { location: "1412", link: "edirne-ipsala" },
        "Keşan": { location: "1464", link: "edirne-kesan" },
        "Lalapaşa": { location: "1502", link: "edirne-lalapasa" },
        "Meriç": { location: "1523", link: "edirne-meric" },
        "Uzunköprü": { location: "1705", link: "edirne-uzunkopru" },
        "Süloğlu": { location: "1988", link: "edirne-suloglu" }
    },
    "Elazığ": {
        "Ağın": { location: "1110", link: "elazig-agin" },
        "Baskil": { location: "1173", link: "elazig-baskil" },
        "Merkez": { location: "1298", link: "elazig-merkez" },
        "Karakoçan": { location: "1438", link: "elazig-karakocan" },
        "Keban": { location: "1455", link: "elazig-keban" },
        "Maden": { location: "1506", link: "elazig-maden" },
        "Palu": { location: "1566", link: "elazig-palu" },
        "Sivrice": { location: "1631", link: "elazig-sivrice" },
        "Arıcak": { location: "1762", link: "elazig-aricak" },
        "Kovancılar": { location: "1820", link: "elazig-kovancilar" },
        "Alacakaya": { location: "1873", link: "elazig-alacakaya" }
    },
    "Erzincan": {
        "Çayırlı": { location: "1243", link: "erzincan-cayirli" },
        "Merkez": { location: "1318", link: "erzincan-merkez" },
        "İliç": { location: "1406", link: "erzincan-ilic" },
        "Kemah": { location: "1459", link: "erzincan-kemah" },
        "Kemaliye": { location: "1460", link: "erzincan-kemaliye" },
        "Refahiye": { location: "1583", link: "erzincan-refahiye" },
        "Tercan": { location: "1675", link: "erzincan-tercan" },
        "Üzümlü": { location: "1853", link: "erzincan-uzumlu" },
        "Otlukbeli": { location: "1977", link: "erzincan-otlukbeli" }
    },
    "Erzurum": {
        "Aşkale": { location: "1153", link: "erzurum-askale" },
        "Çat": { location: "1235", link: "erzurum-cat" },
        "Hınıs": { location: "1392", link: "erzurum-hinis" },
        "Horasan": { location: "1396", link: "erzurum-horasan" },
        "İspir": { location: "1416", link: "erzurum-ispir" },
        "Karayazı": { location: "1444", link: "erzurum-karayazi" },
        "Narman": { location: "1540", link: "erzurum-narman" },
        "Oltu": { location: "1550", link: "erzurum-oltu" },
        "Olur": { location: "1551", link: "erzurum-olur" },
        "Pasinler": { location: "1567", link: "erzurum-pasinler" },
        "Şenkaya": { location: "1657", link: "erzurum-senkaya" },
        "Tekman": { location: "1674", link: "erzurum-tekman" },
        "Tortum": { location: "1683", link: "erzurum-tortum" },
        "Karaçoban": { location: "1812", link: "erzurum-karacoban" },
        "Uzundere": { location: "1851", link: "erzurum-uzundere" },
        "Pazaryolu": { location: "1865", link: "erzurum-pazaryolu" },
        "Köprüköy": { location: "1967", link: "erzurum-koprukoy" },
        "Palandöken": { location: "2044", link: "erzurum-palandoken" },
        "Yakutiye": { location: "2045", link: "erzurum-yakutiye" },
        "Aziziye": { location: "1945", link: "erzurum-aziziye" }
    },
    "Eskişehir": {
        "Çifteler": { location: "1255", link: "eskisehir-cifteler" },
        "Mahmudiye": { location: "1508", link: "eskisehir-mahmudiye" },
        "Mihalıççık": { location: "1527", link: "eskisehir-mihaliccik" },
        "Sarıcakaya": { location: "1599", link: "eskisehir-saricakaya" },
        "Seyitgazi": { location: "1618", link: "eskisehir-seyitgazi" },
        "Sivrihisar": { location: "1632", link: "eskisehir-sivrihisar" },
        "Alpu": { location: "1759", link: "eskisehir-alpu" },
        "Beylikova": { location: "1777", link: "eskisehir-beylikova" },
        "İnönü": { location: "1808", link: "eskisehir-inonu" },
        "Günyüzü": { location: "1934", link: "eskisehir-gunyuzu" },
        "Han": { location: "1939", link: "eskisehir-han" },
        "Mihalgazi": { location: "1973", link: "eskisehir-mihalgazi" },
        "Odunpazarı": { location: "2046", link: "eskisehir-odunpazari" },
        "Tepebaşı": { location: "2047", link: "eskisehir-tepebasi" }
    },
    "Gaziantep": {
        "Araban": { location: "1139", link: "gaziantep-araban" },
        "İslahiye": { location: "1415", link: "gaziantep-islahiye" },
        "Nizip": { location: "1546", link: "gaziantep-nizip" },
        "Oğuzeli": { location: "1549", link: "gaziantep-oguzeli" },
        "Yavuzeli": { location: "1720", link: "gaziantep-yavuzeli" },
        "Şahinbey": { location: "1841", link: "gaziantep-sahinbey" },
        "Şehitkamil": { location: "1844", link: "gaziantep-sehitkamil" },
        "Karkamış": { location: "1956", link: "gaziantep-karkamis" },
        "Nurdağı": { location: "1974", link: "gaziantep-nurdagi" }
    },
    "Giresun": {
        "Alucra": { location: "1133", link: "giresun-alucra" },
        "Bulancak": { location: "1212", link: "giresun-bulancak" },
        "Dereli": { location: "1272", link: "giresun-dereli" },
        "Espiye": { location: "1320", link: "giresun-espiye" },
        "Eynesil": { location: "1324", link: "giresun-eynesil" },
        "Merkez": { location: "1352", link: "giresun-merkez" },
        "Görele": { location: "1361", link: "giresun-gorele" },
        "Keşap": { location: "1465", link: "giresun-kesap" },
        "Şebinkarahisar": { location: "1654", link: "giresun-sebinkarahisar" },
        "Tirebolu": { location: "1678", link: "giresun-tirebolu" },
        "Piraziz": { location: "1837", link: "giresun-piraziz" },
        "Yağlıdere": { location: "1854", link: "giresun-yaglidere" },
        "Çamoluk": { location: "1893", link: "giresun-camoluk" },
        "Çanakçı": { location: "1894", link: "giresun-canakci" },
        "Doğankent": { location: "1912", link: "giresun-dogankent" },
        "Güce": { location: "1930", link: "giresun-guce" }
    },
    "Gümüşhane": {
        "Merkez": { location: "1369", link: "gumushane-merkez" },
        "Kelkit": { location: "1458", link: "gumushane-kelkit" },
        "Şiran": { location: "1660", link: "gumushane-siran" },
        "Torul": { location: "1684", link: "gumushane-torul" },
        "Köse": { location: "1822", link: "gumushane-kose" },
        "Kürtün": { location: "1971", link: "gumushane-kurtun" }
    },
    "Hakkari": {
        "Çukurca": { location: "1261", link: "hakkari-cukurca" },
        "Merkez": { location: "1377", link: "hakkari-merkez" },
        "Şemdinli": { location: "1656", link: "hakkari-semdinli" },
        "Yüksekova": { location: "1737", link: "hakkari-yuksekova" },
        "Derecik": { location: "2107", link: "hakkari-derecik" }
    },
    "Hatay": {
        "Altınözü": { location: "1131", link: "hatay-altinozu" },
        "Arsuz": { location: "2081", link: "hatay-arsuz" },
        "Defne": { location: "2080", link: "hatay-defne" },
        "Dörtyol": { location: "1289", link: "hatay-dortyol" },
        "Hassa": { location: "1382", link: "hatay-hassa" },
        "Antakya": { location: "2080", link: "hatay-antakya" },
        "İskenderun": { location: "1413", link: "hatay-iskenderun" },
        "Kırıkhan": { location: "1468", link: "hatay-kirikhan" },
        "Payas": { location: "2083", link: "hatay-payas" },
        "Reyhanlı": { location: "1585", link: "hatay-reyhanli" },
        "Samandağ": { location: "1591", link: "hatay-samandag" },
        "Yayladağı": { location: "1721", link: "hatay-yayladagi" },
        "Erzin": { location: "1792", link: "hatay-erzin" },
        "Belen": { location: "1887", link: "hatay-belen" },
        "Kumlu": { location: "1970", link: "hatay-kumlu" }
    },
    "Isparta": {
        "Atabey": { location: "1154", link: "isparta-atabey" },
        "Eğirdir": { location: "1297", link: "isparta-egirdir" },
        "Gelendost": { location: "1341", link: "isparta-gelendost" },
        "Merkez": { location: "1401", link: "isparta-merkez" },
        "Keçiborlu": { location: "1456", link: "isparta-keciborlu" },
        "Senirkent": { location: "1615", link: "isparta-senirkent" },
        "Sütçüler": { location: "1648", link: "isparta-sutculer" },
        "Şarkikaraağaç": { location: "1651", link: "isparta-sarkikaraagac" },
        "Uluborlu": { location: "1699", link: "isparta-uluborlu" },
        "Yalvaç": { location: "1717", link: "isparta-yalvac" },
        "Aksu": { location: "1755", link: "isparta-aksu" },
        "Gönen": { location: "1929", link: "isparta-gonen" },
        "Yenişarbademli": { location: "2001", link: "isparta-yenisarbademli" }
    },
    "Mersin": {
        "Anamur": { location: "1135", link: "mersin-anamur" },
        "Erdemli": { location: "1311", link: "mersin-erdemli" },
        "Gülnar": { location: "1366", link: "mersin-gulnar" },
        "Mut": { location: "1536", link: "mersin-mut" },
        "Silifke": { location: "1621", link: "mersin-silifke" },
        "Tarsus": { location: "1665", link: "mersin-tarsus" },
        "Aydıncık": { location: "1766", link: "mersin-aydincik" },
        "Bozyazı": { location: "1779", link: "mersin-bozyazi" },
        "Çamlıyayla": { location: "1892", link: "mersin-camliyayla" },
        "Akdeniz": { location: "2064", link: "mersin-akdeniz" },
        "Mezitli": { location: "2065", link: "mersin-mezitli" },
        "Toroslar": { location: "2066", link: "mersin-toroslar" },
        "Yenişehir": { location: "2067", link: "mersin-yenisehir" }
    },
    "İstanbul": {
        "Adalar": { location: "1103", link: "istanbul-adalar" },
        "Bakırköy": { location: "1166", link: "istanbul-bakirkoy" },
        "Beşiktaş": { location: "1183", link: "istanbul-besiktas" },
        "Beykoz": { location: "1185", link: "istanbul-beykoz" },
        "Beyoğlu": { location: "1186", link: "istanbul-beyoglu" },
        "Çatalca": { location: "1237", link: "istanbul-catalca" },
        "Eyüp": { location: "1325", link: "istanbul-eyup" },
        "Fatih": { location: "1327", link: "istanbul-fatih" },
        "Gaziosmanpaşa": { location: "1336", link: "istanbul-gaziosmanpasa" },
        "Kadıköy": { location: "1421", link: "istanbul-kadikoy" },
        "Kartal": { location: "1449", link: "istanbul-kartal" },
        "Sarıyer": { location: "1604", link: "istanbul-sariyer" },
        "Silivri": { location: "1622", link: "istanbul-silivri" },
        "Şile": { location: "1659", link: "istanbul-sile" },
        "Şişli": { location: "1663", link: "istanbul-sisli" },
        "Üsküdar": { location: "1708", link: "istanbul-uskudar" },
        "Zeytinburnu": { location: "1739", link: "istanbul-zeytinburnu" },
        "Büyükçekmece": { location: "1782", link: "istanbul-buyukcekmece" },
        "Kağıthane": { location: "1810", link: "istanbul-kagithane" },
        "Küçükçekmece": { location: "1823", link: "istanbul-kucukcekmece" },
        "Pendik": { location: "1835", link: "istanbul-pendik" },
        "Ümraniye": { location: "1852", link: "istanbul-umraniye" },
        "Bayrampaşa": { location: "1886", link: "istanbul-bayrampasa" },
        "Avcılar": { location: "2003", link: "istanbul-avcilar" },
        "Bağcılar": { location: "2004", link: "istanbul-bagcilar" },
        "Bahçelievler": { location: "2005", link: "istanbul-bahcelievler" },
        "Güngören": { location: "2010", link: "istanbul-gungoren" },
        "Maltepe": { location: "2012", link: "istanbul-maltepe" },
        "Sultanbeyli": { location: "2014", link: "istanbul-sultanbeyli" },
        "Tuzla": { location: "2015", link: "istanbul-tuzla" },
        "Esenler": { location: "2016", link: "istanbul-esenler" },
        "Arnavutköy": { location: "2048", link: "istanbul-arnavutkoy" },
        "Ataşehir": { location: "2049", link: "istanbul-atasehir" },
        "Başakşehir": { location: "2050", link: "istanbul-basaksehir" },
        "Beylikdüzü": { location: "2051", link: "istanbul-beylikduzu" },
        "Çekmeköy": { location: "2052", link: "istanbul-cekmekoy" },
        "Esenyurt": { location: "2053", link: "istanbul-esenyurt" },
        "Sancaktepe": { location: "2054", link: "istanbul-sancaktepe" },
        "Sultangazi": { location: "2055", link: "istanbul-sultangazi" }
    },
    "Osmaniye": {
        "Bahçe": { location: "1165", link: "osmaniye-bahce" },
        "Kadirli": { location: "1423", link: "osmaniye-kadirli" },
        "Merkez": { location: "1560", link: "osmaniye-merkez" },
        "Düziçi": { location: "1743", link: "osmaniye-duzici" },
        "Hasanbeyli": { location: "2027", link: "osmaniye-hasanbeyli" },
        "Sumbas": { location: "2028", link: "osmaniye-sumbas" },
        "Toprakkale": { location: "2029", link: "osmaniye-toprakkale" }
    }
};





const urlParams = new URLSearchParams(window.location.search);
let locationcity = "<?php echo $konumcity; ?>";
let locationdistrict = "<?php echo $konumdistrict; ?>";

function eczaneGoster(sehir, ilce) {
    if (ilceler[sehir][ilce]) {
        let eczaneKodu = ilceler[sehir][ilce].location;
        let ilceLinkAdi = ilceler[sehir][ilce].link;

        const eczaneHtml = `
            <a href="https://www.eczaneler.gen.tr/nobetci-${ilceLinkAdi}" target="_blank">
                <img src="https://www.eczaneler.gen.tr/resimler/nobetci-eczane.jpg" alt="${ilce} nöbetçi eczaneleri" style="width:100%;border-radius:2px;">
            </a>
            <iframe class="pharmacy" src="https://www.eczaneler.gen.tr/iframe.php?lokasyon=${eczaneKodu}" name="${ilce} nöbetçi eczaneleri" "></iframe>
        `;
        document.getElementById('eczaneAlani').innerHTML = eczaneHtml;
        document.getElementById('location').innerText = "Konumunuz: " + sehir + " / " + ilce;
    } else {
        document.getElementById('eczaneAlani').innerText = "Girilen kriterlere uygun ilçe/şehir bulunamadı.";
    }
}

// 1. Önce manuel arama yapılmış mı kontrol et
if (locationcity && locationdistrict) {
    console.log("Manuel konum kullanılıyor:", locationcity, locationdistrict);
    eczaneGoster(locationcity, locationdistrict);
} else {
    // 2. Manuel değer yoksa GPS (Navigator) devreye girsin
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(position => {
            const enlem = position.coords.latitude;
            const boylam = position.coords.longitude;

            fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${enlem}&lon=${boylam}`)
              .then(response => response.json())
              .then(data => {
                  const adres = data.address;
                  let ilce = adres.town ;
                  let sehir = adres.province ;
                  
                  eczaneGoster(sehir, ilce);
              })
              .catch(error => {
                  console.error("Hata:", error);
                  document.getElementById('eczaneAlani').innerText = "Konum bilgisi alınamadı.";
              });

        }, error => {
            console.log("Konum izni reddedildi veya alınamadı:", error);
            document.getElementById('eczaneAlani').innerText = "Konum izni alınamadı ve manuel seçim yapılmadı.";
        });
    } else {
        document.getElementById('eczaneAlani').innerText = "Tarayıcınız konum desteklemiyor.";
    }
}
</script>







   



<script>

   // Farklı bir proxy servisi (allorigins) kullanıyoruz
   fetch("api-proxy.php?service=gold")
     
        .then(response => response.json()) 
        .then(data => {
            console.log("Altın fiyatları:", data);
            
           
                const altin = data;
                
                const grambuying= altin.result[0].buying; 
                const gramselling = altin.result[0].selling; 
               
                const onsbuying= altin.result[1].buying; 
                const onsselling = altin.result[1].selling; 

                const ceyrekbuying= altin.result[2].buying; 
                const ceyrekselling = altin.result[2].selling; 


                const yarimbuying= altin.result[3].buying; 
                const yarimselling = altin.result[3].selling; 

                const tambuying= altin.result[4].buying; 
                const tamselling = altin.result[4].selling; 

                const cumhuriyetbuying= altin.result[5].buying; 
                const cumhuriyetselling = altin.result[5].selling; 

                document.getElementById('gram').innerHTML = "<strong>Gram altın: </strong>" + "<strong>  Alış:</strong>" + grambuying + "&nbsp&nbsp" + "<strong>Satış:</strong>" + gramselling ;
                document.getElementById('ons').innerHTML = "<strong>Ons altın: </strong>" + "<strong>  Alış: </strong> " + onsbuying + "&nbsp&nbsp" + "<strong>  Satış: </strong>"+ onsselling  ;
                 document.getElementById('ceyrek').innerHTML = "<strong>Çeyrek altın: </strong>" + "<strong>  Alış: </strong> " + ceyrekbuying + "&nbsp&nbsp" + "<strong>  Satış: </strong>"+ ceyrekselling  ;
                  document.getElementById('yarim').innerHTML = "<strong>Yarım altın: </strong>" + "<strong>  Alış: </strong> " + yarimbuying + "&nbsp&nbsp" + "<strong>  Satış: </strong>"+ yarimselling  ;
                   document.getElementById('tam').innerHTML = "<strong>Tam altın: </strong>" + "<strong>  Alış: </strong> " + tambuying + "&nbsp&nbsp" + "<strong>  Satış: </strong>"+ tamselling  ;
                    document.getElementById('cumhuriyet').innerHTML = "<strong>Cumhuriyet altın: </strong>" + "<br><strong>  Alış: </strong> " + cumhuriyetbuying + "&nbsp&nbsp" + "<br><strong>  Satış: </strong>"+ cumhuriyetselling  ;
            document.getElementById('lastupda').innerHTML = "<strong>Son Güncelleme: </strong>" + lastupdate ;
       
        })
        .catch(error => {
            console.log("Bir hata oluştu: ", error);
            document.getElementById('usdtry').innerText = "Döviz kuru alınamadı.";
        });
</script>





<script>

   
   // Farklı bir proxy servisi (allorigins) kullanıyoruz
   fetch("api-proxy.php?service=currency")
        .then(response => response.json()) 
        .then(data => {
            console.log("Döviz verisi:", data);
            
           
                const kur = data.result;
                const lastupdate = data.result.lastupdate;
                const usdtry = kur.data[47].rate; 
                const usdeur = kur.data[47].rate; 
               

                document.getElementById('usdtry').innerHTML = "<strong>USD/TRY: </strong>" + usdtry ;
                document.getElementById('usdeur').innerHTML = "<strong>USD/EUR: </strong>" + usdeur ;
            document.getElementById('lastupdate').innerHTML = "<strong>Son Güncelleme: </strong>" + lastupdate ;
       
        })
        .catch(error => {
            console.log("Bir hata oluştu: ", error);
            document.getElementById('usdtry').innerText = "Döviz kuru alınamadı.";
        });
</script>


   







    <script>
       fetch("api-proxy.php?service=weather")
            .then(response => response.json()) // JSON'a çevir
            .then(data => {
                // Bugünün vakitlerini alıyoruz
             const today = data[0];
             const Temperature = today.Temperature.Metric.Value; 
            const Wind = today.Wind.Speed.Metric.Value; 
             const Pressure = today.Pressure.Metric.Value;
             const WeatherIcon = today.WeatherIcon;

let formatted = WeatherIcon;
  const url = `https://www.accuweather.com/assets/images/weather-icons/v2a/${formatted}.svg`;

console.log(formatted);

document.getElementById('Temperature').innerText =  Temperature;
document.getElementById('Wind').innerText = "Rüzgar: " + Wind;
document.getElementById('Pressure').innerText = "Basınç: " + Pressure ;
document.getElementById('WeatherIcon').src = url ;
            })
            .catch(error => {
                console.log("Bir hata oluştu: ", error);
                document.getElementById('Temperature').innerText = "Veri çekilemedi.";
                document.getElementById('Wind').innerText = "Veri çekilemedi.";
                document.getElementById('Pressure').innerText = "Veri çekilemedi.";
            });
    </script>




<script>
   
       // 2. Tarih oluşturma
       const now = new Date();
       const day = String(now.getDate()).padStart(2, '0');
       const month = String(now.getMonth() + 1).padStart(2, '0');
       const year = now.getFullYear();
       const currentDate = `${day}-${month}-${year}`;

       // 3. Konumu al ve veriyi KESİNLİKLE konum geldikten sonra (içeride) çek
       if (navigator.geolocation) {
           navigator.geolocation.getCurrentPosition(position => {
               const enlem = position.coords.latitude;
               const boylam = position.coords.longitude;

               console.log("Kullanıcının koordinatları:", enlem, boylam);









               // API isteği konum alındığı an burada tetikleniyor:
               fetch(`https://api.aladhan.com/v1/timings/${currentDate}?latitude=${enlem}&longitude=${boylam}&method=13`, {
                  headers: {
                    'Accept-Encoding': ''
                  }
               })
               .then(response => response.json())
               .then(data => {
                    const ezanvakti = data.data.timings;
                    
                    let Imsak = ezanvakti.Fajr;
                    let Gunes = ezanvakti.Sunrise;
                    let Ogle = ezanvakti.Dhuhr;
                    let Ikindi = ezanvakti.Asr;
                    let Aksam = ezanvakti.Maghrib;
                    let Yatsi = ezanvakti.Isha;


                    document.getElementById('Imsak').innerText = "İmsak: " + Imsak;
                    document.getElementById('Gunes').innerText = "Güneş: " + Gunes;
                    document.getElementById('Ogle').innerText = "Öğle: " + Ogle;
                    document.getElementById('Ikindi').innerText = "İkindi: " + Ikindi;
                    document.getElementById('Aksam').innerText = "Akşam: " + Aksam;
                    document.getElementById('Yatsi').innerText = "Yatsı: " + Yatsi;
               })
               .catch(error => {
                   console.log("API hatası: ", error);
                   document.getElementById('Imsak').innerText = "Veri çekilemedi.";
               });

           }, error => {
               console.log("Konum izni reddedildi veya alınamadı:", error);
               document.getElementById('Imsak').innerText = "Konum alınamadı.";
           });
       } else {
           console.log("Tarayıcınız konum desteklemiyor.");
       }
  </script>




</body>
</html>