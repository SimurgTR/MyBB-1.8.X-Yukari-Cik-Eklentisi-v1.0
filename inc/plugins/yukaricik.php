<?php
/*
 * Eklenti Adı: Yukarı Çık
 * Eklenti Yapımcısı: Hüseyin KÖRBALTA (Simurg)
 * Yapımcı Website: https://www.huseyinkorbalta.com
 * Github Page: https://github.com/SimurgTR/MyBB-1.8.X-Yukari-Cik-Eklentisi-v1.0
 * Versiyon: 1.0
 * Uyumlu Olduğu MyBB Sürümü: 1.8.X
 * Oluşturulma Tarihi: 04.02.2017
 * Son Güncelleme: 06.02.2017
 */

// Güvenlik gereği eklenti dosyalarına doğrudan ve dışarıdan erişimi kapat.

if(!defined("IN_MYBB"))
{
	die("Bu dosyaya doğrudan erişim yasak veya yetkiniz bulunmuyor.");
}
// Eklenti bağlantı fonksiyonları
$plugins->add_hook("pre_output_page","yukaricik");

// Eklenti bilgileri
function yukaricik_info()
{
    global $lang;

    $lang->load("yukaricik");
    
    $lang->yukaricik_Aciklama = '<img src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/img/logo.png" title="Hüseyin Körbalta İmzasıdır" alt="favicon" width="32" height="32" style="float: right;"/>'. $lang->yukaricik_Aciklama;

    return Array(
        'name' => $lang->yukaricik_Eklentiadi,
        'description' => $lang->yukaricik_Aciklama,
        'website' => $lang->yukaricik_Website,
        'author' => $lang->yukaricik_Yapimci,
        'authorsite' => $lang->yukaricik_Yapimcisite,
        'version' => $lang->yukaricik_Versiyon,
        'compatibility' => $lang->yukaricik_Surum
    );
}

// Yukarıçık buton fonksiyonu
function yukaricik($page)
{
	global $mybb,$db;

	// Anasayfada göster.
        if(THIS_SCRIPT=="index.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/css/yukaricik.css" />
<script type="text/javascript" async src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/js/yukaricik.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="yukaricikar">
    <a class="yukari-git" href="#top" title="Yukarı Çık"><img src="'.$mybb->settings["bburl"].'/inc/plugins/totop/img/yukaricik.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    }	// Forum görüntüleme kısmında göster.
	    if(THIS_SCRIPT=="forumdisplay.php")
	{
		{
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/css/yukaricik.css" />
<script type="text/javascript" async src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/js/yukaricik.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="yukaricikar">
    <a class="yukari-git" href="#top" title="Yukarı Çık"><img src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/img/yukaricik.png" /></a>
</div>
</body>',$page);
			
			return $page;
		}
	}// Konu gösteriminde göster.
        if(THIS_SCRIPT=="showthread.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/css/yukaricik.css" />
<script type="text/javascript" async src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/js/yukaricik.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="yukaricikar">
    <a class="yukari-git" href="#top" title="Yukarı Çık"><img src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/img/yukaricik.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    }
		// Üye listesinde göster.
        if(THIS_SCRIPT=="memberlist.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/css/yukaricik.css" />
<script type="text/javascript" async src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/js/yukaricik.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="yukaricikar">
    <a class="yukari-git" href="#top" title="Yukarı Çık"><img src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/img/yukaricik.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    } // Üye sayfasında göster.
        if(THIS_SCRIPT=="member.php")
    {
        {
           $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/css/yukaricik.css" />
<script type="text/javascript" async src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/js/yukaricik.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="yukaricikar">
    <a class="yukari-git" href="#top" title="Yukarı Çık"><img src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/img/yukaricik.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    } // Yardım sayfasında göster.
        if(THIS_SCRIPT=="misc.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/css/yukaricik.css" />
<script type="text/javascript" async src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/js/yukaricik.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="yukaricikar">
    <a class="yukari-git" href="#top" title="Yukarı Çık"><img src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/img/yukaricik.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    } // Arama sayfasında göster.
        if(THIS_SCRIPT=="search.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/css/yukaricik.css" />
<script type="text/javascript" async src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/js/yukaricik.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="yukaricikar">
    <a class="yukari-git" href="#top" title="Yukarı Çık"><img src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/img/yukaricik.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    } // Moderatör panelinde göster.
        if(THIS_SCRIPT=="modcp.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/css/yukaricik.css" />
<script type="text/javascript" async src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/js/yukaricik.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="yukaricikar">
    <a class="yukari-git" href="#top" title="Yukarı Çık"><img src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/img/yukaricik.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    } // Kullanıcı kontrol panelinde göster.
        if(THIS_SCRIPT=="usercp.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/css/yukaricik.css" />
<script type="text/javascript" async src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/js/yukaricik.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="yukaricikar">
    <a class="yukari-git" href="#top" title="Yukarı Çık"><img src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/img/yukaricik.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    } // Özel mesajlar sayfasında göster.
        if(THIS_SCRIPT=="private.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/css/yukaricik.css" />
<script type="text/javascript" async src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/js/yukaricik.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="yukaricikar">
    <a class="yukari-git" href="#top" title="Yukarı Çık"><img src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/img/yukaricik.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    } // Konu yazdırma sayfasında göster.
        if(THIS_SCRIPT=="printthread.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/css/yukaricik.css" />
<script type="text/javascript" async src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/js/yukaricik.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="yukaricikar">
    <a class="yukari-git" href="#top" title="Yukarı Çık"><img src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/img/yukaricik.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    } // Takvim sayfasında göster.
        if(THIS_SCRIPT=="calendar.php")
    {
        {
            $page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/css/yukaricik.css" />
<script type="text/javascript" async src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/js/yukaricik.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="yukaricikar">
    <a class="yukari-git" href="#top" title="Yukarı Çık"><img src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/img/yukaricik.png" /></a>
</div>
</body>',$page);
            
            return $page;
        }
    } // Portal sayfasında göster.
        if(THIS_SCRIPT=="portal.php")
	{

		{
			$page=str_replace("</head>",'<link rel="stylesheet" type="text/css" href="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/css/yukaricik.css" />
<script type="text/javascript" async src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/js/yukaricik.js"></script>
</head>',$page);

            $page=str_replace("</body>",'<div id="yukaricikar">
    <a class="yukari-git" href="#top" title="Yukarı Çık"><img src="'.$mybb->settings["bburl"].'/inc/plugins/yukaricik/img/yukaricik.png" /></a>
</div>
</body>',$page);
			
			return $page;
		}
	}
}

?>
