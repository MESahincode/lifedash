<!DOCTYPE html>
<html lang="tr">
<head>

<title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Anlık verilere hızlıca ulaşın.">
  <meta name="keywords" content="lifedash, altın fiyatları, nöbetçi eczaneler, dashboard, canlı veri">
  <meta name="author" content="Musa Eymen Şahin">

   <link rel="canonical" href="https://lifedash.site.je" />
    <link rel="stylesheet" href="index.css">
    <link rel="icon" type="image/gif" href="/favicon.gif">
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
    "İzmir": {
        "Aliağa": { location: "1128", link: "izmir-aliaga" },
        "Bayındır": { location: "1178", link: "izmir-bayindir" },
        "Bergama": { location: "1181", link: "izmir-bergama" },
        "Bornova": { location: "1203", link: "izmir-bornova" },
        "Çeşme": { location: "1251", link: "izmir-cesme" },
        "Dikili": { location: "1280", link: "izmir-dikili" },
        "Foça": { location: "1334", link: "izmir-foca" },
        "Karaburun": { location: "1432", link: "izmir-karaburun" },
        "Karşıyaka": { location: "1448", link: "izmir-karsiyaka" },
        "Kemalpaşa": { location: "1461", link: "izmir-kemalpasa" },
        "Kınık": { location: "1467", link: "izmir-kinik" },
        "Kiraz": { location: "1477", link: "izmir-kiraz" },
        "Menemen": { location: "1521", link: "izmir-menemen" },
        "Ödemiş": { location: "1563", link: "izmir-odemis" },
        "Seferihisar": { location: "1611", link: "izmir-seferihisar" },
        "Selçuk": { location: "1612", link: "izmir-selcuk" },
        "Tire": { location: "1677", link: "izmir-tire" },
        "Torbalı": { location: "1682", link: "izmir-torbali" },
        "Urla": { location: "1703", link: "izmir-urla" },
        "Beydağ": { location: "1776", link: "izmir-beydag" },
        "Buca": { location: "1780", link: "izmir-buca" },
        "Konak": { location: "1819", link: "izmir-konak" },
        "Menderes": { location: "1826", link: "izmir-menderes" },
        "Balçova": { location: "2006", link: "izmir-balcova" },
        "Çiğli": { location: "2007", link: "izmir-cigli" },
        "Gaziemir": { location: "2009", link: "izmir-gaziemir" },
        "Narlıdere": { location: "2013", link: "izmir-narlidere" },
        "Güzelbahçe": { location: "2018", link: "izmir-guzelbahce" },
        "Bayraklı": { location: "2056", link: "izmir-bayrakli" },
        "Karabağlar": { location: "2057", link: "izmir-karabaglar" }
    },
    "Kars": {
        "Arpaçay": { location: "1149", link: "kars-arpacay" },
        "Digor": { location: "1279", link: "kars-digor" },
        "Kağızman": { location: "1424", link: "kars-kagizman" },
        "Merkez": { location: "1447", link: "kars-merkez" },
        "Sarıkamış": { location: "1601", link: "kars-sarikamis" },
        "Selim": { location: "1614", link: "kars-selim" },
        "Susuz": { location: "1645", link: "kars-susuz" },
        "Akyaka": { location: "1756", link: "kars-akyaka" }
    },
    "Kastamonu": {
        "Abana": { location: "1101", link: "kastamonu-abana" },
        "Araç": { location: "1140", link: "kastamonu-arac" },
        "Azdavay": { location: "1162", link: "kastamonu-azdavay" },
        "Bozkurt": { location: "1208", link: "kastamonu-bozkurt" },
        "Cide": { location: "1221", link: "kastamonu-cide" },
        "Çatalzeytin": { location: "1238", link: "kastamonu-catalzeytin" },
        "Daday": { location: "1264", link: "kastamonu-daday" },
        "Devrekani": { location: "1277", link: "kastamonu-devrekani" },
        "İnebolu": { location: "1410", link: "kastamonu-inebolu" },
        "Merkez": { location: "1450", link: "kastamonu-merkez" },
        "Küre": { location: "1499", link: "kastamonu-kure" },
        "Taşköprü": { location: "1666", link: "kastamonu-taskopru" },
        "Tosya": { location: "1685", link: "kastamonu-tosya" },
        "İhsangazi": { location: "1805", link: "kastamonu-ihsangazi" },
        "Pınarbaşı": { location: "1836", link: "kastamonu-pinarbasi" },
        "Şenpazar": { location: "1845", link: "kastamonu-senpazar" },
        "Ağlı": { location: "1867", link: "kastamonu-agli" },
        "Doğanyurt": { location: "1915", link: "kastamonu-doganyurt" },
        "Hanönü": { location: "1940", link: "kastamonu-hanonu" },
        "Seydiler": { location: "1984", link: "kastamonu-seydiler" }
    },
    "Kayseri": {
        "Bünyan": { location: "1218", link: "kayseri-bunyan" },
        "Develi": { location: "1275", link: "kayseri-develi" },
        "Felahiye": { location: "1330", link: "kayseri-felahiye" },
        "İncesu": { location: "1409", link: "kayseri-incesu" },
        "Pınarbaşı": { location: "1576", link: "kayseri-pinarbasi" },
        "Sarıoğlan": { location: "1603", link: "kayseri-sarioglan" },
        "Sarız": { location: "1605", link: "kayseri-sariz" },
        "Tomarza": { location: "1680", link: "kayseri-tomarza" },
        "Yahyalı": { location: "1715", link: "kayseri-yahyali" },
        "Yeşilhisar": { location: "1727", link: "kayseri-yesilhisar" },
        "Akkışla": { location: "1752", link: "kayseri-akkisla" },
        "Talas": { location: "1846", link: "kayseri-talas" },
        "Kocasinan": { location: "1863", link: "kayseri-kocasinan" },
        "Melikgazi": { location: "1864", link: "kayseri-melikgazi" },
        "Hacılar": { location: "1936", link: "kayseri-hacilar" },
        "Özvatan": { location: "1978", link: "kayseri-ozvatan" }
    },
    "Kırklareli": {
        "Babaeski": { location: "1163", link: "kirklareli-babaeski" },
        "Demirköy": { location: "1270", link: "kirklareli-demirkoy" },
        "Merkez": { location: "1471", link: "kirklareli-merkez" },
        "Kofçaz": { location: "1480", link: "kirklareli-kofcaz" },
        "Lüleburgaz": { location: "1505", link: "kirklareli-luleburgaz" },
        "Pehlivanköy": { location: "1572", link: "kirklareli-pehlivankoy" },
        "Pınarhisar": { location: "1577", link: "kirklareli-pinarhisar" },
        "Vize": { location: "1714", link: "kirklareli-vize" }
    },
    "Kırşehir": {
        "Çiçekdağı": { location: "1254", link: "kirsehir-cicekdagi" },
        "Kaman": { location: "1429", link: "kirsehir-kaman" },
        "Merkez": { location: "1472", link: "kirsehir-merkez" },
        "Mucur": { location: "1529", link: "kirsehir-mucur" },
        "Akpınar": { location: "1754", link: "kirsehir-akpinar" },
        "Akçakent": { location: "1869", link: "kirsehir-akcakent" },
        "Boztepe": { location: "1890", link: "kirsehir-boztepe" }
    },
    "Kocaeli": {
        "Gebze": { location: "1338", link: "kocaeli-gebze" },
        "Gölcük": { location: "1355", link: "kocaeli-golcuk" },
        "Kandıra": { location: "1430", link: "kocaeli-kandira" },
        "Karamürsel": { location: "1440", link: "kocaeli-karamursel" },
        "Körfez": { location: "1821", link: "kocaeli-korfez" },
        "Derince": { location: "2030", link: "kocaeli-derince" },
        "Başiskele": { location: "2058", link: "kocaeli-basiskele" },
        "Çayırova": { location: "2059", link: "kocaeli-cayirova" },
        "Darıca": { location: "2060", link: "kocaeli-darica" },
        "Dilovası": { location: "2061", link: "kocaeli-dilovasi" },
        "İzmit": { location: "2062", link: "kocaeli-izmit" },
        "Kartepe": { location: "2063", link: "kocaeli-kartepe" },
        "Merkez": { location: "1478", link: "kocaeli-merkez" }
    },
    "Konya": {
        "Akşehir": { location: "1122", link: "konya-aksehir" },
        "Beyşehir": { location: "1188", link: "konya-beysehir" },
        "Bozkır": { location: "1207", link: "konya-bozkir" },
        "Cihanbeyli": { location: "1222", link: "konya-cihanbeyli" },
        "Çumra": { location: "1262", link: "konya-cumra" },
        "Doğanhisar": { location: "1285", link: "konya-doganhisar" },
        "Ereğli": { location: "1312", link: "konya-eregli" },
        "Hadim": { location: "1375", link: "konya-hadim" },
        "Ilgın": { location: "1400", link: "konya-ilgin" },
        "Kadınhanı": { location: "1422", link: "konya-kadinhani" },
        "Karapınar": { location: "1441", link: "konya-karapinar" },
        "Kulu": { location: "1491", link: "konya-kulu" },
        "Sarayönü": { location: "1598", link: "konya-sarayonu" },
        "Seydişehir": { location: "1617", link: "konya-seydisehir" },
        "Yunak": { location: "1735", link: "konya-yunak" },
        "Akören": { location: "1753", link: "konya-akoren" },
        "Altınekin": { location: "1760", link: "konya-altinekin" },
        "Derebucak": { location: "1789", link: "konya-derebucak" },
        "Hüyük": { location: "1804", link: "konya-huyuk" },
        "Karatay": { location: "1814", link: "konya-karatay" },
        "Meram": { location: "1827", link: "konya-meram" },
        "Selçuklu": { location: "1839", link: "konya-selcuklu" },
        "Taşkent": { location: "1848", link: "konya-taskent" },
        "Ahırlı": { location: "1868", link: "konya-ahirli" },
        "Çeltik": { location: "1902", link: "konya-celtik" },
        "Derbent": { location: "1907", link: "konya-derbent" },
        "Emirgazi": { location: "1920", link: "konya-emirgazi" },
        "Güneysınır": { location: "1933", link: "konya-guneysindir" },
        "Halkapınar": { location: "1937", link: "konya-halkapinar" },
        "Tuzlukçu": { location: "1990", link: "konya-tuzlukcu" },
        "Yalıhüyük": { location: "1994", link: "konya-yalihuyuk" }
    },
    "Kütahya": {
        "Altıntaş": { location: "1132", link: "kutahya-altintas" },
        "Domaniç": { location: "1288", link: "kutahya-domanic" },
        "Emet": { location: "1304", link: "kutahya-emet" },
        "Gediz": { location: "1339", link: "kutahya-gediz" },
        "Merkez": { location: "1500", link: "kutahya-merkez" },
        "Simav": { location: "1625", link: "kutahya-simav" },
        "Tavşanlı": { location: "1671", link: "kutahya-tavsanli" },
        "Aslanapa": { location: "1764", link: "kutahya-aslanapa" },
        "Dumlupınar": { location: "1790", link: "kutahya-dumlupinar" },
        "Hisarcık": { location: "1802", link: "kutahya-hisarcik" },
        "Şaphane": { location: "1843", link: "kutahya-saphane" },
        "Çavdarhisar": { location: "1898", link: "kutahya-cavdarhisar" },
        "Pazarlar": { location: "1979", link: "kutahya-pazarlar" }
    },
    "Malatya": {
        "Akçadağ": { location: "1114", link: "malatya-akcadag" },
        "Arapgir": { location: "1143", link: "malatya-arapgir" },
        "Arguvan": { location: "1148", link: "malatya-arguvan" },
        "Darende": { location: "1265", link: "malatya-darende" },
        "Doğanşehir": { location: "1286", link: "malatya-dogansehir" },
        "Hekimhan": { location: "1390", link: "malatya-hekimhan" },
        "Merkez": { location: "1509", link: "malatya-merkez" },
        "Pütürge": { location: "1582", link: "malatya-puturge" },
        "Yeşilyurt": { location: "1729", link: "malatya-yesilyurt" },
        "Battalgazi": { location: "1772", link: "malatya-battalgazi" },
        "Doğanyol": { location: "1914", link: "malatya-doganyol" },
        "Kale": { location: "1953", link: "malatya-kale" },
        "Kuluncak": { location: "1969", link: "malatya-kuluncak" },
        "Yazıhan": { location: "1995", link: "malatya-yazihan" }
    },
    "Manisa": {
        "Akhisar": { location: "1118", link: "manisa-akhisar" },
        "Alaşehir": { location: "1127", link: "manisa-alasehir" },
        "Demirci": { location: "1269", link: "manisa-demirci" },
        "Gördes": { location: "1362", link: "manisa-gordes" },
        "Kırkağaç": { location: "1470", link: "manisa-kirkagac" },
        "Kula": { location: "1489", link: "manisa-kula" },
        "Merkez": { location: "1513", link: "manisa-merkez" },
        "Salihli": { location: "1590", link: "manisa-salihli" },
        "Sarıgöl": { location: "1600", link: "manisa-sarigol" },
        "Saruhanlı": { location: "1606", link: "manisa-saruhanli" },
        "Selendi": { location: "1613", link: "manisa-selendi" },
        "Soma": { location: "1634", link: "manisa-soma" },
        "Şehzadeler": { location: "2086", link: "manisa-sehzadeler" },
        "Yunusemre": { location: "2087", link: "manisa-yunusemre" },
        "Turgutlu": { location: "1689", link: "manisa-turgutlu" },
        "Ahmetli": { location: "1751", link: "manisa-ahmetli" },
        "Gölmarmara": { location: "1793", link: "manisa-golmarmara" },
        "Köprübaşı": { location: "1965", link: "manisa-koprubasi" }
    },
    "Kahramanmaraş": {
        "Afşin": { location: "1107", link: "kahramanmaras-afsin" },
        "Andırın": { location: "1136", link: "kahramanmaras-andirin" },
        "Dulkadiroğlu": { location: "2084", link: "kahramanmaras-dulkadiroglu" },
        "Onikişubat": { location: "2085", link: "kahramanmaras-onikisubat" },
        "Elbistan": { location: "1299", link: "kahramanmaras-elbistan" },
        "Göksun": { location: "1353", link: "kahramanmaras-goksun" },
        "Pazarcık": { location: "1570", link: "kahramanmaras-pazarcik" },
        "Türkoğlu": { location: "1694", link: "kahramanmaras-turkoglu" },
        "Çağlayancerit": { location: "1785", link: "kahramanmaras-caglayancerit" },
        "Ekinözü": { location: "1919", link: "kahramanmaras-ekinozu" },
        "Nurhak": { location: "1975", link: "kahramanmaras-nurhak" },
        "Merkez": { location: "1515", link: "kahramanmaras-merkez" }
    },
    "Mardin": {
        "Derik": { location: "1273", link: "mardin-derik" },
        "Kızıltepe": { location: "1474", link: "mardin-kiziltepe" },
        "Artuklu": { location: "2088", link: "mardin-artuklu" },
        "Merkez": { location: "1516", link: "mardin-merkez" },
        "Mazıdağı": { location: "1519", link: "mardin-mazidagi" },
        "Midyat": { location: "1526", link: "mardin-midyat" },
        "Nusaybin": { location: "1547", link: "mardin-nusaybin" },
        "Ömerli": { location: "1564", link: "mardin-omerli" },
        "Savur": { location: "1609", link: "mardin-savur" },
        "Dargeçit": { location: "1787", link: "mardin-dargecit" },
        "Yeşilli": { location: "2002", link: "mardin-yesilli" }
    },
    "Muğla": {
        "Bodrum": { location: "1197", link: "mugla-bodrum" },
        "Datça": { location: "1266", link: "mugla-datca" },
        "Fethiye": { location: "1331", link: "mugla-fethiye" },
        "Köyceğiz": { location: "1488", link: "mugla-koycegiz" },
        "Marmaris": { location: "1517", link: "mugla-marmaris" },
        "Menteşe": { location: "2089", link: "mugla-mentese" },
        "Milas": { location: "1528", link: "mugla-milas" },
        "Ula": { location: "1695", link: "mugla-ula" },
        "Yatağan": { location: "1719", link: "mugla-yatagan" },
        "Dalaman": { location: "1742", link: "mugla-dalaman" },
        "Seydikemer": { location: "2090", link: "mugla-seydikemer" },
        "Ortaca": { location: "1831", link: "mugla-ortaca" },
        "Kavaklıdere": { location: "1958", link: "mugla-kavaklidere" },
        "Merkez": { location: "1532", link: "mugla-merkez" }
    },
    "Muş": {
        "Bulanık": { location: "1213", link: "mus-bulanik" },
        "Malazgirt": { location: "1510", link: "mus-malazgirt" },
        "Merkez": { location: "1534", link: "mus-merkez" },
        "Varto": { location: "1711", link: "mus-varto" },
        "Hasköy": { location: "1801", link: "mus-haskoy" },
        "Korkut": { location: "1964", link: "mus-korkut" }
    },
    "Nevşehir": {
        "Avanos": { location: "1155", link: "nevsehir-avanos" },
        "Derinkuyu": { location: "1274", link: "nevsehir-derinkuyu" },
        "Gülşehir": { location: "1367", link: "nevsehir-gulsehir" },
        "Hacıbektaş": { location: "1374", link: "nevsehir-hacibektas" },
        "Kozaklı": { location: "1485", link: "nevsehir-kozakli" },
        "Merkez": { location: "1543", link: "nevsehir-merkez" },
        "Ürgüp": { location: "1707", link: "nevsehir-urgup" },
        "Acıgöl": { location: "1749", link: "nevsehir-acigol" }
    },
    "Niğde": {
        "Bor": { location: "1201", link: "nigde-bor" },
        "Çamardı": { location: "1225", link: "nigde-camardi" },
        "Merkez": { location: "1544", link: "nigde-merkez" },
        "Ulukışla": { location: "1700", link: "nigde-ulukisla" },
        "Altunhisar": { location: "1876", link: "nigde-altunhisar" },
        "Çiftlik": { location: "1904", link: "nigde-ciftlik" }
    },
    "Ordu": {
        "Akkuş": { location: "1119", link: "ordu-akkus" },
        "Altınordu": { location: "2103", link: "ordu-altinordu" },
        "Aybastı": { location: "1158", link: "ordu-aybasti" },
        "Fatsa": { location: "1328", link: "ordu-fatsa" },
        "Gölköy": { location: "1358", link: "ordu-golkoy" },
        "Korgan": { location: "1482", link: "ordu-korgan" },
        "Kumru": { location: "1493", link: "ordu-kumru" },
        "Mesudiye": { location: "1525", link: "ordu-mesudiye" },
        "Perşembe": { location: "1573", link: "ordu-persembe" },
        "Ulubey": { location: "1696", link: "ordu-ulubey" },
        "Ünye": { location: "1706", link: "ordu-unye" },
        "Gülyalı": { location: "1795", link: "ordu-gulyali" },
        "Gürgentepe": { location: "1797", link: "ordu-gurgentepe" },
        "Çamaş": { location: "1891", link: "ordu-camas" },
        "Çatalpınar": { location: "1897", link: "ordu-catalpinar" },
        "Çaybaşı": { location: "1900", link: "ordu-caybasi" },
        "İkizce": { location: "1947", link: "ordu-ikizce" },
        "Kabadüz": { location: "1950", link: "ordu-kabaduz" },
        "Kabataş": { location: "1951", link: "ordu-kabatas" },
        "Merkez": { location: "1552", link: "ordu-merkez" }
    },
    "Rize": {
        "Ardeşen": { location: "1146", link: "rize-ardesen" },
        "Çamlıhemşin": { location: "1228", link: "rize-camlihemsin" },
        "Çayeli": { location: "1241", link: "rize-cayeli" },
        "Fındıklı": { location: "1332", link: "rize-findikli" },
        "İkizdere": { location: "1405", link: "rize-ikizdere" },
        "Kalkandere": { location: "1428", link: "rize-kalkandere" },
        "Pazar": { location: "1569", link: "rize-pazar" },
        "Merkez": { location: "158", link: "rize-merkez" },
        "Güneysu": { location: "1796", link: "rize-guneysu" },
        "Derepazarı": { location: "1908", link: "rize-derepazari" },
        "Hemşin": { location: "1943", link: "rize-hemsin" },
        "İyidere": { location: "1949", link: "rize-iyidere" }
    },
    "Sakarya": {
        "Akyazı": { location: "1123", link: "sakarya-akyazi" },
        "Geyve": { location: "1351", link: "sakarya-geyve" },
        "Hendek": { location: "1391", link: "sakarya-hendek" },
        "Karasu": { location: "1442", link: "sakarya-karasu" },
        "Kaynarca": { location: "1453", link: "sakarya-kaynarca" },
        "Sapanca": { location: "1595", link: "sakarya-sapanca" },
        "Kocaali": { location: "1818", link: "sakarya-kocaali" },
        "Pamukova": { location: "1833", link: "sakarya-pamukova" },
        "Taraklı": { location: "1847", link: "sakarya-tarakli" },
        "Ferizli": { location: "1925", link: "sakarya-ferizli" },
        "Karapürçek": { location: "1955", link: "sakarya-karapurcek" },
        "Söğütlü": { location: "1986", link: "sakarya-sogutlu" },
        "Adapazarı": { location: "2068", link: "sakarya-adapazari" },
        "Arifiye": { location: "2069", link: "sakarya-arifiye" },
        "Erenler": { location: "2070", link: "sakarya-erenler" },
        "Serdivan": { location: "2071", link: "sakarya-serdivan" },
        "Merkez": { location: "1589", link: "sakarya-merkez" }
    },
    "Samsun": {
        "Alaçam": { location: "1125", link: "samsun-alacam" },
        "Bafra": { location: "1164", link: "samsun-bafra" },
        "Çarşamba": { location: "1234", link: "samsun-carsamba" },
        "Havza": { location: "1386", link: "samsun-havza" },
        "Kavak": { location: "1452", link: "samsun-kavak" },
        "Ladik": { location: "1501", link: "samsun-ladik" },
        "Terme": { location: "1676", link: "samsun-terme" },
        "Vezirköprü": { location: "1712", link: "samsun-vezirkopru" },
        "Asarcık": { location: "1763", link: "samsun-asarcik" },
        "Ondokuzmayıs": { location: "1912", link: "samsun-ondokuzmayis" },
        "Salıpazarı": { location: "1838", link: "samsun-salipazari" },
        "Tekkeköy": { location: "1849", link: "samsun-tekkekoy" },
        "Ayvacık": { location: "1879", link: "samsun-ayvacik" },
        "Yakakent": { location: "1993", link: "samsun-yakakent" },
        "Atakum": { location: "2072", link: "samsun-atakum" },
        "Canik": { location: "2073", link: "samsun-canik" },
        "İlkadım": { location: "2074", link: "samsun-ilkadim" }
    },
    "Siirt": {
        "Baykan": { location: "1179", link: "siirt-baykan" },
        "Eruh": { location: "1317", link: "siirt-eruh" },
        "Kurtalan": { location: "1495", link: "siirt-kurtalan" },
        "Pervari": { location: "1575", link: "siirt-pervari" },
        "Merkez": { location: "1620", link: "siirt-merkez" },
        "Şirvan": { location: "1662", link: "siirt-sirvan" },
        "Tillo": { location: "1878", link: "siirt-tillo" }
    },
    "Sinop": {
        "Ayancık": { location: "1156", link: "sinop-ayancik" },
        "Boyabat": { location: "1204", link: "sinop-boyabat" },
        "Durağan": { location: "1290", link: "sinop-duragan" },
        "Erfelek": { location: "1314", link: "sinop-erfelek" },
        "Gerze": { location: "1349", link: "sinop-gerze" },
        "Merkez": { location: "1627", link: "sinop-merkez" },
        "Türkeli": { location: "1693", link: "sinop-turkeli" },
        "Dikmen": { location: "1910", link: "sinop-dikmen" },
        "Saraydüzü": { location: "1981", link: "sinop-sarayduzu" }
    },
    "Sivas": {
        "Divriği": { location: "1282", link: "sivas-divrigi" },
        "Gemerek": { location: "1342", link: "sivas-gemerek" },
        "Gürün": { location: "1373", link: "sivas-gurun" },
        "Hafik": { location: "1376", link: "sivas-hafik" },
        "İmranlı": { location: "1407", link: "sivas-imranli" },
        "Kangal": { location: "1431", link: "sivas-kangal" },
        "Koyulhisar": { location: "1484", link: "sivas-koyulhisar" },
        "Merkez": { location: "1628", link: "sivas-merkez" },
        "Suşehri": { location: "1646", link: "sivas-susehri" },
        "Şarkışla": { location: "1650", link: "sivas-sarkisla" },
        "Yıldızeli": { location: "1731", link: "sivas-yildizeli" },
        "Zara": { location: "1738", link: "sivas-zara" },
        "Akıncılar": { location: "1870", link: "sivas-akincilar" },
        "Altınyayla": { location: "1875", link: "sivas-altinyayla" },
        "Doğanşar": { location: "1913", link: "sivas-dogansar" },
        "Gölova": { location: "1927", link: "sivas-golova" },
        "Ulaş": { location: "1991", link: "sivas-ulas" }
    },
    "Tekirdağ": {
        "Çerkezköy": { location: "1250", link: "tekirdag-cerkezkoy" },
        "Çorlu": { location: "1258", link: "tekirdag-corlu" },
        "Ergene": { location: "2094", link: "tekirdag-ergene" },
        "Hayrabolu": { location: "1388", link: "tekirdag-hayrabolu" },
        "Malkara": { location: "1511", link: "tekirdag-malkara" },
        "Muratlı": { location: "1538", link: "tekirdag-muratli" },
        "Saray": { location: "1596", link: "tekirdag-saray" },
        "Süleymanpaşa": { location: "2096", link: "tekirdag-suleymanpasa" },
        "Kapaklı": { location: "2095", link: "tekirdag-kapakli" },
        "Şarköy": { location: "1652", link: "tekirdag-sarkoy" },
        "Marmaraereğlisi": { location: "1825", link: "tekirdag-marmaraereglisi" },
        "Merkez": { location: "1673", link: "tekirdag-merkez" }
    },
    "Tokat": {
        "Almus": { location: "1129", link: "tokat-almus" },
        "Artova": { location: "1151", link: "tokat-artova" },
        "Erbaa": { location: "1308", link: "tokat-erbaa" },
        "Niksar": { location: "1545", link: "tokat-niksar" },
        "Reşadiye": { location: "1584", link: "tokat-resadiye" },
        "Merkez": { location: "1679", link: "tokat-merkez" },
        "Turhal": { location: "1690", link: "tokat-turhal" },
        "Zile": { location: "1740", link: "tokat-zile" },
        "Pazar": { location: "1834", link: "tokat-pazar" },
        "Yeşilyurt": { location: "1858", link: "tokat-yesilyurt" },
        "Başçiftlik": { location: "1883", link: "tokat-basciftlik" },
        "Sulusaray": { location: "1987", link: "tokat-sulusaray" }
    },
    "Trabzon": {
        "Akçaabat": { location: "1113", link: "trabzon-akcaabat" },
        "Araklı": { location: "1141", link: "trabzon-arakli" },
        "Arsin": { location: "1150", link: "trabzon-arsin" },
        "Çaykara": { location: "1244", link: "trabzon-caykara" },
        "Maçka": { location: "1507", link: "trabzon-macka" },
        "Of": { location: "1548", link: "trabzon-of" },
        "Ortahisar": { location: "2097", link: "trabzon-ortahisar" },
        "Sürmene": { location: "1647", link: "trabzon-surmene" },
        "Tonya": { location: "1681", link: "trabzon-tonya" },
        "Vakfıkebir": { location: "1709", link: "trabzon-vakfikebir" },
        "Yomra": { location: "1732", link: "trabzon-yomra" },
        "Beşikdüzü": { location: "1775", link: "trabzon-besikduzu" },
        "Şalpazarı": { location: "1842", link: "trabzon-salpazari" },
        "Çarşıbaşı": { location: "1896", link: "trabzon-carsibasi" },
        "Dernekpazarı": { location: "1909", link: "trabzon-dernekpazari" },
        "Düzköy": { location: "1917", link: "trabzon-duzkoy" },
        "Hayrat": { location: "1942", link: "trabzon-hayrat" },
        "Köprübaşı": { location: "1966", link: "trabzon-koprubasi" },
        "Merkez": { location: "1686", link: "trabzon-merkez" }
    },
    "Tunceli": {
        "Çemişgezek": { location: "1247", link: "tunceli-cemisgezek" },
        "Hozat": { location: "1397", link: "tunceli-hozat" },
        "Mazgirt": { location: "1518", link: "tunceli-mazgirt" },
        "Nazımiye": { location: "1541", link: "tunceli-nazimiye" },
        "Ovacık": { location: "1562", link: "tunceli-ovacik" },
        "Pertek": { location: "1574", link: "tunceli-pertek" },
        "Pülümür": { location: "1581", link: "tunceli-pulumur" },
        "Merkez": { location: "1688", link: "tunceli-merkez" }
    },
    "Şanlıurfa": {
        "Akçakale": { location: "1115", link: "sanliurfa-akcakale" },
        "Birecik": { location: "1194", link: "sanliurfa-birecik" },
        "Bozova": { location: "1209", link: "sanliurfa-bozova" },
        "Ceylanpınar": { location: "1220", link: "sanliurfa-ceylanpinar" },
        "Eyyübiye": { location: "2091", link: "sanliurfa-eyyubiye" },
        "Halfeti": { location: "1378", link: "sanliurfa-halfeti" },
        "Haliliye": { location: "2092", link: "sanliurfa-haliliye" },
        "Hilvan": { location: "1393", link: "sanliurfa-hilvan" },
        "Karaköprü": { location: "2093", link: "sanliurfa-karakopru" },
        "Siverek": { location: "1630", link: "sanliurfa-siverek" },
        "Suruç": { location: "1643", link: "sanliurfa-suruc" },
        "Viranşehir": { location: "1713", link: "sanliurfa-viransehir" },
        "Harran": { location: "1800", link: "sanliurfa-harran" },
        "Merkez": { location: "1702", link: "sanliurfa-merkez" }
    },
    "Uşak": {
        "Banaz": { location: "1170", link: "usak-banaz" },
        "Eşme": { location: "1323", link: "usak-esme" },
        "Karahallı": { location: "1436", link: "usak-karahalli" },
        "Sivaslı": { location: "1629", link: "usak-sivasli" },
        "Ulubey": { location: "1697", link: "usak-ulubey" },
        "Merkez": { location: "1704", link: "usak-merkez" }
    },
    "Van": {
        "Başkale": { location: "1175", link: "van-baskale" },
        "Çatak": { location: "1236", link: "van-catak" },
        "Erciş": { location: "1309", link: "van-ercis" },
        "Gevaş": { location: "1350", link: "van-gevas" },
        "Gürpınar": { location: "1372", link: "van-gurpinar" },
        "İpekyolu": { location: "2098", link: "van-ipekyolu" },
        "Muradiye": { location: "1533", link: "van-muradiye" },
        "Özalp": { location: "1565", link: "van-ozalp" },
        "Tuşba": { location: "2099", link: "van-tusba" },
        "Bahçesaray": { location: "1770", link: "van-bahcesaray" },
        "Çaldıran": { location: "1786", link: "van-caldiran" },
        "Edremit": { location: "1918", link: "van-edremit" },
        "Saray": { location: "1980", link: "van-saray" },
        "Merkez": { location: "1710", link: "van-merkez" }
    },
    "Yozgat": {
        "Akdağmadeni": { location: "1117", link: "yozgat-akdagmadeni" },
        "Boğazlıyan": { location: "1198", link: "yozgat-bogazliyan" },
        "Çayıralan": { location: "1242", link: "yozgat-cayiralan" },
        "Çekerek": { location: "1245", link: "yozgat-cekerek" },
        "Sarıkaya": { location: "1602", link: "yozgat-sarikaya" },
        "Sorgun": { location: "1635", link: "yozgat-sorgun" },
        "Şefaatli": { location: "1655", link: "yozgat-sefaatli" },
        "Yerköy": { location: "1726", link: "yozgat-yerkoy" },
        "Merkez": { location: "1733", link: "yozgat-merkez" },
        "Aydıncık": { location: "1877", link: "yozgat-aydincik" },
        "Çandır": { location: "1895", link: "yozgat-candir" },
        "Kadışehri": { location: "1952", link: "yozgat-kadisehri" },
        "Saraykent": { location: "1982", link: "yozgat-saraykent" },
        "Yenifakılı": { location: "1998", link: "yozgat-yenifakili" }
    },
    "Zonguldak": {
        "Çaycuma": { location: "1240", link: "zonguldak-caycuma" },
        "Devrek": { location: "1276", link: "zonguldak-devrek" },
        "Ereğli": { location: "1313", link: "zonguldak-eregli" },
        "Merkez": { location: "1741", link: "zonguldak-merkez" },
        "Alaplı": { location: "1758", link: "zonguldak-alapli" },
        "Gökçebey": { location: "1926", link: "zonguldak-gokcebey" },
        "Kilimli": { location: "2100", link: "zonguldak-kilimli" },
        "Kozlu": { location: "2101", link: "zonguldak-kozlu" }
    },
    "Aksaray": {
        "Ağaçören": { location: "1860", link: "aksaray-agacoren" },
        "Eskil": { location: "1921", link: "aksaray-eskil" },
        "Gülağaç": { location: "1932", link: "aksaray-gulagac" },
        "Sultanhanı": { location: "2106", link: "aksaray-sultanhani" },
        "Güzelyurt": { location: "1861", link: "aksaray-guzelyurt" },
        "Merkez": { location: "1120", link: "aksaray-merkez" },
        "Ortaköy": { location: "1557", link: "aksaray-ortakoy" },
        "Sarıyahşi": { location: "1866", link: "aksaray-sariyahsi" }
    },
    "Bayburt": {
        "Merkez": { location: "1176", link: "bayburt-merkez" },
        "Aydıntepe": { location: "1767", link: "bayburt-aydintepe" },
        "Demirözü": { location: "1788", link: "bayburt-demirozu" }
    },
    "Karaman": {
        "Ermenek": { location: "1316", link: "karaman-ermenek" },
        "Merkez": { location: "1439", link: "karaman-merkez" },
        "Ayrancı": { location: "1768", link: "karaman-ayranci" },
        "Kazımkarabekir": { location: "1862", link: "karaman-kazimkarabekir" },
        "Başyayla": { location: "1884", link: "karaman-basyayla" },
        "Sarıveliler": { location: "1983", link: "karaman-sariveliler" }
    },
    "Kırıkkale": {
        "Delice": { location: "1268", link: "kirikkale-delice" },
        "Keskin": { location: "1463", link: "kirikkale-keskin" },
        "Merkez": { location: "1469", link: "kirikkale-merkez" },
        "Sulakyurt": { location: "1638", link: "kirikkale-sulakyurt" },
        "Bahşili": { location: "1880", link: "kirikkale-bahsili" },
        "Balışeyh": { location: "1882", link: "kirikkale-baliseyh" },
        "Çelebi": { location: "1901", link: "kirikkale-celebi" },
        "Karakeçili": { location: "1954", link: "kirikkale-karakecili" },
        "Yahşihan": { location: "1992", link: "kirikkale-yahsihan" }
    },
    "Batman": {
        "Merkez": { location: "1174", link: "batman-merkez" },
        "Beşiri": { location: "1184", link: "batman-besiri" },
        "Gercüş": { location: "1345", link: "batman-gercus" },
        "Kozluk": { location: "1487", link: "batman-kozluk" },
        "Sason": { location: "1607", link: "batman-sason" },
        "Hasankeyf": { location: "1941", link: "batman-hasankeyf" }
    },
    "Şırnak": {
        "Beytüşşebap": { location: "1189", link: "sirnak-beytussebap" },
        "Cizre": { location: "1223", link: "sirnak-cizre" },
        "İdil": { location: "1403", link: "sirnak-idil" },
        "Silopi": { location: "1623", link: "sirnak-silopi" },
        "Merkez": { location: "1661", link: "sirnak-merkez" },
        "Uludere": { location: "1698", link: "sirnak-uludere" },
        "Güçlükonak": { location: "1931", link: "sirnak-guclukonak" }
    },
    "Bartın": {
        "Merkez": { location: "1172", link: "bartin-merkez" },
        "Kurucaşile": { location: "1496", link: "bartin-kurucasile" },
        "Ulus": { location: "1701", link: "bartin-ulus" },
        "Amasra": { location: "1761", link: "bartin-amasra" }
    },
    "Ardahan": {
        "Merkez": { location: "1144", link: "ardahan-merkez" },
        "Çıldır": { location: "1252", link: "ardahan-cildir" },
        "Göle": { location: "1356", link: "ardahan-gole" },
        "Hanak": { location: "1380", link: "ardahan-hanak" },
        "Posof": { location: "1579", link: "ardahan-posof" },
        "Damal": { location: "2008", link: "ardahan-damal" }
    },
    "Iğdır": {
        "Aralık": { location: "1142", link: "igdir-aralik" },
        "Merkez": { location: "1398", link: "igdir-merkez" },
        "Tuzluca": { location: "1692", link: "igdir-tuzluca" },
        "Karakoyunlu": { location: "2011", link: "igdir-karakoyunlu" }
    },
    "Yalova": {
        "Merkez": { location: "1716", link: "yalova-merkez" },
        "Altınova": { location: "2019", link: "yalova-altinova" },
        "Armutlu": { location: "2020", link: "yalova-armutlu" },
        "Çınarcık": { location: "2021", link: "yalova-cinarcik" },
        "Çiftlikköy": { location: "2022", link: "yalova-ciftlikkoy" },
        "Termal": { location: "2026", link: "yalova-termal" }
    },
    "Karabük": {
        "Eflani": { location: "1296", link: "karabuk-eflani" },
        "Eskipazar": { location: "1321", link: "karabuk-eskipazar" },
        "Merkez": { location: "1433", link: "karabuk-merkez" },
        "Ovacık": { location: "1561", link: "karabuk-ovacik" },
        "Safranbolu": { location: "1587", link: "karabuk-safranbolu" },
        "Yenice": { location: "1856", link: "karabuk-yenice" }
    },
    "Kilis": {
        "Merkez": { location: "1476", link: "kilis-merkez" },
        "Elbeyli": { location: "2023", link: "kilis-elbeyli" },
        "Musabeyli": { location: "2024", link: "kilis-musabeyli" },
        "Polateli": { location: "2025", link: "kilis-polateli" }
    },
    "Osmaniye": {
        "Bahçe": { location: "1165", link: "osmaniye-bahce" },
        "Kadirli": { location: "1423", link: "osmaniye-kadirli" },
        "Merkez": { location: "1560", link: "osmaniye-merkez" },
        "Düziçi": { location: "1743", link: "osmaniye-duzici" },
        "Hasanbeyli": { location: "2027", link: "osmaniye-hasanbeyli" },
        "Sumbas": { location: "2028", link: "osmaniye-sumbas" },
        "Toprakkale": { location: "2029", link: "osmaniye-toprakkale" }
    },
    "Düzce": {
        "Akçakoca": { location: "1116", link: "duzce-akcakoca" },
        "Merkez": { location: "1292", link: "duzce-merkez" },
        "Yığılca": { location: "1730", link: "duzce-yigilca" },
        "Cumayeri": { location: "1784", link: "duzce-cumayeri" },
        "Gölyaka": { location: "1794", link: "duzce-golyaka" },
        "Çilimli": { location: "1905", link: "duzce-cilimli" },
        "Gümüşova": { location: "2017", link: "duzce-gumusova" },
        "Kaynaşlı": { location: "2031", link: "duzce-kaynasli" }
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

function getWeatherIcon(weathercode, is_day) {
    
  const timeSuffix = (is_day === 1) ? 'd' : 'n'; 

  if (weathercode === 0) return `http://openweathermap.org/img/wn/01${timeSuffix}@2x.png`; // Açık gökyüzü
  if (weathercode === 1) return `http://openweathermap.org/img/wn/01${timeSuffix}@2x.png`; // Az bulutlu
  if (weathercode === 2) return `http://openweathermap.org/img/wn/02${timeSuffix}@2x.png`; // Parçalı bulutlu
  if (weathercode === 3) return `http://openweathermap.org/img/wn/03${timeSuffix}@2x.png`; // Çok bulutlu / Kapalı
  
  if (weathercode === 45) return `http://openweathermap.org/img/wn/50${timeSuffix}@2x.png`; // Sisli
  if (weathercode === 48) return `http://openweathermap.org/img/wn/50${timeSuffix}@2x.png`; // Kırağı oluşturan sis
  
  if (weathercode === 51) return `http://openweathermap.org/img/wn/09${timeSuffix}@2x.png`; // Hafif çisenti
  if (weathercode === 52) return `http://openweathermap.org/img/wn/09${timeSuffix}@2x.png`; // Orta çisenti
  if (weathercode === 53) return `http://openweathermap.org/img/wn/09${timeSuffix}@2x.png`; // Orta çisenti
  if (weathercode === 54) return `http://openweathermap.org/img/wn/09${timeSuffix}@2x.png`; // Yoğun çisenti
  if (weathercode === 55) return `http://openweathermap.org/img/wn/09${timeSuffix}@2x.png`; // Yoğun çisenti
  if (weathercode === 56) return `http://openweathermap.org/img/wn/09${timeSuffix}@2x.png`; // Hafif dondurucu çisenti
  if (weathercode === 57) return `http://openweathermap.org/img/wn/09${timeSuffix}@2x.png`; // Yoğun dondurucu çisenti
  
  if (weathercode === 61) return `http://openweathermap.org/img/wn/10${timeSuffix}@2x.png`; // Hafif yağmur
  if (weathercode === 62) return `http://openweathermap.org/img/wn/10${timeSuffix}@2x.png`; // Orta yağmur
  if (weathercode === 63) return `http://openweathermap.org/img/wn/10${timeSuffix}@2x.png`; // Orta şiddetli yağmur
  if (weathercode === 64) return `http://openweathermap.org/img/wn/10${timeSuffix}@2x.png`; // Şiddetli yağmur
  if (weathercode === 65) return `http://openweathermap.org/img/wn/10${timeSuffix}@2x.png`; // Şiddetli yağmur
  if (weathercode === 66) return `http://openweathermap.org/img/wn/10${timeSuffix}@2x.png`; // Hafif dondurucu yağmur
  if (weathercode === 67) return `http://openweathermap.org/img/wn/10${timeSuffix}@2x.png`; // Şiddetli dondurucu yağmur
  
  if (weathercode === 71) return `http://openweathermap.org/img/wn/13${timeSuffix}@2x.png`; // Hafif kar yağışı
  if (weathercode === 72) return `http://openweathermap.org/img/wn/13${timeSuffix}@2x.png`; // Orta kar yağışı
  if (weathercode === 73) return `http://openweathermap.org/img/wn/13${timeSuffix}@2x.png`; // Orta şiddetli kar yağışı
  if (weathercode === 74) return `http://openweathermap.org/img/wn/13${timeSuffix}@2x.png`; // Yoğun kar yağışı
  if (weathercode === 75) return `http://openweathermap.org/img/wn/13${timeSuffix}@2x.png`; // Yoğun kar yağışı
  if (weathercode === 76) return `http://openweathermap.org/img/wn/13${timeSuffix}@2x.png`; // Kar tanecikleri
  if (weathercode === 77) return `http://openweathermap.org/img/wn/13${timeSuffix}@2x.png`; // Kar tanecikleri
  
  if (weathercode === 80) return `http://openweathermap.org/img/wn/09${timeSuffix}@2x.png`; // Hafif sağanak yağmur
  if (weathercode === 81) return `http://openweathermap.org/img/wn/09${timeSuffix}@2x.png`; // Orta sağanak yağmur
  if (weathercode === 82) return `http://openweathermap.org/img/wn/09${timeSuffix}@2x.png`; // Şiddetli sağanak yağmur
  
  if (weathercode === 85) return `http://openweathermap.org/img/wn/13${timeSuffix}@2x.png`; // Hafif kar sağanağı
  if (weathercode === 86) return `http://openweathermap.org/img/wn/13${timeSuffix}@2x.png`; // Yoğun kar sağanağı
  
  if (weathercode === 95) return `http://openweathermap.org/img/wn/11${timeSuffix}@2x.png`; // Hafif veya orta gök gürültülü fırtına
  if (weathercode === 96) return `http://openweathermap.org/img/wn/11${timeSuffix}@2x.png`; // Hafif dolu yağışlı fırtına
  if (weathercode === 97) return `http://openweathermap.org/img/wn/11${timeSuffix}@2x.png`; // Fırtına
  if (weathercode === 98) return `http://openweathermap.org/img/wn/11${timeSuffix}@2x.png`; // Fırtına
  if (weathercode === 99) return `http://openweathermap.org/img/wn/11${timeSuffix}@2x.png`; // Şiddetli dolu yağışlı fırtına

  return ""; // Tanımlı olmayan diğer tüm kodlar için varsayılan
}

     // 3. Konumu al ve veriyi KESİNLİKLE konum geldikten sonra (içeride) çek
       if (navigator.geolocation) {
           navigator.geolocation.getCurrentPosition(position => {
               const enlem = position.coords.latitude;
               const boylam = position.coords.longitude;

               console.log("Kullanıcının koordinatları:", enlem, boylam);




       fetch(`https://api.open-meteo.com/v1/forecast?latitude=${enlem}&longitude=${boylam}&current=temperature_2m,wind_speed_10m,weather_code,surface_pressure,is_day`)
            .then(response => response.json()) // JSON'a çevir
            .then(data => {
                // Bugünün vakitlerini alıyoruz
                const current = data.current;
                const temperature = current.temperature_2m;
                const wind = current.wind_speed_10m;
                const pressure = current.surface_pressure;
               const weathercode = current.weather_code;
 const is_day = current.is_day; // Buradan alınıyor
             console.log(data);





document.getElementById('WeatherIcon').src = getWeatherIcon(weathercode, is_day);
document.getElementById('Temperature').innerText =  temperature;
document.getElementById('Wind').innerText = "Rüzgar: " + wind;
document.getElementById('Pressure').innerText = "Basınç: " + pressure ;
            })
            .catch(error => {
                console.log("Bir hata oluştu: ", error);
                document.getElementById('Temperature').innerText = "Veri çekilemedi.";
 
            });
                       }, error => {
               console.log("Konum izni reddedildi veya alınamadı:", error);
               document.getElementById('Imsak').innerText = "Konum alınamadı.";
           });
       } else {
           console.log("Tarayıcınız konum desteklemiyor.");
       }
    </script>





   <!-- <script>
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
-->



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