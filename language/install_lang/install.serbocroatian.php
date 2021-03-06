<?php
/////////////////////////////////////////////////////////////////////////////////////
// xbtit - Bittorrent tracker/frontend
//
// Copyright (C) 2004 - 2015  DPWS Media LTD
//
//    This file is part of xbtit.
//
// Redistribution and use in source and binary forms, with or without modification,
// are permitted provided that the following conditions are met:
//
//   1. Redistributions of source code must retain the above copyright notice,
//      this list of conditions and the following disclaimer.
//   2. Redistributions in binary form must reproduce the above copyright notice,
//      this list of conditions and the following disclaimer in the documentation
//      and/or other materials provided with the distribution.
//   3. The name of the author may not be used to endorse or promote products
//      derived from this software without specific prior written permission.
//
// THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR IMPLIED
// WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
// MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
// IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
// SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
// TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
// PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
// LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
// NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE,
// EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
//
////////////////////////////////////////////////////////////////////////////////////
# Srpskohrvatski instaler by miskotes

$install_lang["charset"]                = "ISO-8859-1";
$install_lang["lang_rtl"]               = FALSE;
$install_lang["step"]                   = "Korak:";
$install_lang["welcome_header"]         = "Dobrodosli";
$install_lang["welcome"]                = "Dobrodosli u instalaciju vaseg novog xbtit.";
$install_lang["installer_language"]     = "Jezik:";
$install_lang["installer_language_set"] = "Odaberi ovaj jezik";
$install_lang["start"]                  = "Pocetak";
$install_lang["next"]                   = "Sljedeci korak";
$install_lang["back"]                   = "Natrag";
$install_lang["requirements_check"]     = "Pozivamo postavke sistema";
$install_lang["reqcheck"]               = "Pos.Sis";
$install_lang["settings"]               = "Podesavanja";
$install_lang["system_req"]             = "<p>".$GLOBALS["btit-tracker"]."&nbsp;".$GLOBALS["current_btit_version"]." zahtijeva PHP 4.1.2 pa na vise i MYSQL bazu podataka.</p>";
$install_lang["list_chmod"]             = "<p>Prije nego odemo dalje, molimo provjerite da su svi fajlovi uploadovani, i da sljedeci fajlovi imaju propisnu dozvolu koja omogucuje instaleru zapis u njih.<br>(0777 CHMOD bi trebalo biti dovoljno na *NIX platformama).</p>";
$install_lang["view_log"]               = "Pogledajte promjene u ovoj verziji";
$install_lang["here"]                   = "ovdje";
$install_lang["settingup"]              = "Podesavanja vaseg novog trackera";
$install_lang["settingup_info"]         = "Osnovna podesavanja";
$install_lang["sitename"]               = "Naziv stranice";
$install_lang["sitename_input"]         = "xbtit";
$install_lang["siteurl"]                = "URL stranice";
$install_lang["siteurl_info"]           = "Bez ==> <b>/</b> na kraju.";
$install_lang["mysql_settings"]         = "MySQL podesavanja";
$install_lang["mysql_settings_info"]    = "Podesavanje baze podataka.";
$install_lang["mysql_settings_server"]  = "MySQL Server";
$install_lang["mysql_settings_username"] = "MySQL korisnicko ime";
$install_lang["mysql_settings_password"] = "MySQL lozinka";
$install_lang["mysql_settings_database"] = "MySQL naziv baze podataka";
$install_lang["mysql_settings_prefix"]  = "MySQL prefix stola";
$install_lang["cache_folder"]           = "Direktorijum kesa";
$install_lang["torrents_folder"]        = "Torrent direktorijum";
$install_lang["badwords_file"]          = "badwords.txt";
$install_lang["chat.php"]               = "chat.php";
$install_lang["write_succes"]           = "<span style=\"color:#00FF00; font-weight: bold;\">zapis dozvoljen!</span>";
$install_lang["write_fail"]             = "<span style=\"color:#FF0000; font-weight: bold;\">NIJE zapis dozvoljen!</span> (0777)";
$install_lang["write_file_not_found"]   = "<span style=\"color:#FF0000; font-weight: bold;\">NIJE PRONADJEN!</span>";
$install_lang["mysqlcheck"]             = "Provjera MySQL veze";
$install_lang["mysqlcheck_step"]        = "MySQL provjera";
$install_lang["mysql_succes"]           = "<span style=\"color:#00FF00; font-weight: bold;\">Uspjesna konekcija sa MySQL!</span>";
$install_lang["mysql_fail"]             = "<span style=\"color:#FF0000; font-weight: bold;\">Greska, vezu sa MySQL nije moguce uspostaviti!</span>";
$install_lang["back_to_settings"]       = "otidjite natrag i popunite potrebne informacije.";
$install_lang["saved"]                  = " sacuvana";
$install_lang["file_not_writeable"]     = "U fajl <b>./include/settings.php</b> nije moguc zapis.";
$install_lang["file_not_exists"]        = "Fajl <b>./include/settings.php</b> ne postoji.";
$install_lang["not_continue_settings"]  = "Ne mozete nastaviti sa instalacijom be da dozvolite zapis u ovaj fajl (0777).";
$install_lang["not_continue_settings2"] = "Ne mozete nastaviti sa ovim fajlom.";
$install_lang["settings.php"]           = "./include/settings.php";
$install_lang["can_continue"]           = "Mozete nastaviti i promjeniti ovaj info kasnije.";
$install_lang["mysql_import"]           = "MySQL kreacija";
$install_lang["mysql_import_step"]      = "SQL kre.";
$install_lang["create_owner_account"]   = "Pravljenje vlasnickog naloga";
$install_lang["create_owner_account_step"] = "Vlasnicki nalog";
$install_lang["database_saved"]         = "Database.sql je uspjesno sacuvana.";
$install_lang["create_owner_account_info"] = "Ovdje mozete napraviti vlasnicki nalog.";
$install_lang["username"]               = "Korisnicko ime";
$install_lang["password"]               = "Lozinka";
$install_lang["password2"]              = "Lozinka ponovo";
$install_lang["email"]                  = "E-mail";
$install_lang["email2"]                 = "E-mail ponovo";
$install_lang["is_succes"]              = "je zavrseno.";
$install_lang["no_leave_blank"]         = "Ne ostavljajte nijedno polje prazno.";
$install_lang["not_valid_email"]        = "Ovaj e-mail nije prepoznat.";
$install_lang["pass_not_same_username"] = "Lozinka ne moze biti ista kao i korisnicko ime.";
$install_lang["email_not_same"]         = "E-mail adrese se ne poklapaju.";
$install_lang["pass_not_same"]          = "Lozinke se ne poklapaju.";
$install_lang["site_config"]            = "Tracker podesavanja";
$install_lang["site_config_step"]       = "Tracker podes.";
$install_lang["default_lang"]           = "Jezik trackera";
$install_lang["default_style"]          = "Stil trackera";
$install_lang["torrents_dir"]           = "Direktorijum torrenata";
$install_lang["validation"]             = "Validacija";
$install_lang["more_settings"]          = "*&nbsp;&nbsp;&nbsp;Detaljnija podesavanja <u>Admin Panelu</u> kada zavrsite instalaciju.";
$install_lang["tracker_saved"]          = "Podesavanja uspjesno sacuvana.";
$install_lang["finished"]               = "Obrada infa instalacije";
$install_lang["finished_step"]          = "Obradjujemo info";
$install_lang["succes_install1"]        = "Instalacija je uspjesno zavrsena!";
$install_lang["succes_install2a"]       = "<p>Vi ste uspjesno instalirali ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]." kao vas tracker.</p><p>Savjetujemo vam sada da zakljucate vas instalacijski panel. To mozete uraditi promjenom <b>install.unlock</b> u <b>install.lock</b> ili da obrisete ovaj <b>install.php</b> fajl.</p>";
$install_lang["succes_install2b"]       = "<p>Vi ste uspjesno instalirali ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"].".</p><p>savjetujemo vam da zakljucate instalaciju. Mozete to uraditi tako sto ce te preimenovati <b>install.unlock</b> u <b>install.lock</b> i da obrisete <b>install.php</b> fajl.</p>";
$install_lang["succes_install3"]        = "<p>Mi iz BTIT se nadamo da ce te uzivati u nasem proizvodu i da vas vidimo nasem oficijalnom forumu <a href=\"http://dpwsmedia.com/smf/index.php\" target=\"_blank\">BTIT Forum</a>.</p>";
$install_lang["go_to_tracker"]          = "Posjetite vas novi bittorrent tracker >>>";
$install_lang["forum_type"]             = "Forum Type";
$install_lang["forum_internal"]         = "XBTI-Tracker Integrisani Forum";
$install_lang["forum_smf"]              = "Simple Machines Forum";
$install_lang["forum_other"]            = "Ne Integrisani Externi Forum - Unesite url ovdje -->";
$install_lang["smf_download_a"]         = "<strong>Ukoliko koristite Simple Machines Forum:</strong><br /><br/ >Molimo downloadujte najnoviju verziju Simple Machines Foruma <a target='_new' href='http://www.simplemachines.org/download/'>ovdje</a> i uploadujte sadrzaj arhive u \"smf\" direktorijum i <a target='_new' href='smf/install.php'>kliknite ovdje</a> za instalaciju.*<br /><strong>(Molimo koristite ISTU Bazu Podataka i ISTE detalje prijave za Bazu Podataka koje ste koristili i za Tracker instalaciju).<br /><br /><font color='#FF0000'>Jednom instaliran</font></strong> molimo CHMOD SMF English language fajl (<strong>";
$install_lang["smf_download_b"]         = "</strong>) u 777 i kliknite <strong>nastavi</strong> da nastavite sa XBTI-Tracker instalacijom.<br /><br /><strong>* Oba linka ce se otvoriti u novom prozoru/tabu da se ne zbunite u koracima XBTI-Tracker instalacije.</strong></p>";
$install_lang["smf_err_1"]              = "Ne mozemo pronaci Simple Machines Forum u \"smf\" direktorijumu, molimo instalirajte ga prije nego nastavimo.<br /><br />Kliknite <a href=\"javascript: history.go(-1);\">ovdje</a> za povratak na prethodnu stranicu.";
$install_lang["smf_err_2"]              = "Ne mozemo pronaci Simple Machines Forum u Bazi Podataka, molimo instalirajte ga prije nego nastavimo.<br /><br />Kliknite <a href=\"javascript: history.go(-1);\">ovdje</a> za povratak na prethodnu stranicu.";
$install_lang["smf_err_3a"]             = "Nismo u stanju izvrsiti zapis u SMF English language fajl (<strong>";
$install_lang["smf_err_3b"]             = "</strong>) molimo CHMOD to 777 prije nego nastavite.<br /><br />Kliknite <a href=\"javascript: history.go(-1);\">ovdje</a> za povratak na prethodnu stranicu.";
$install_lang["allow_url_fopen"]        = "php.ini value for \"allow_url_fopen\" (najbolje je ON)";
$install_lang["allow_url_fopen_ON"]        = "<span style=\"color:#00FF00; font-weight: bold;\">ON</span>";
$install_lang["allow_url_fopen_OFF"]        = "<span style=\"color:#FF0000; font-weight: bold;\">OFF</span>";
$install_lang["succes_upgrade1"]        = "Upgrade je kompletiran!";
$install_lang["succes_upgrade2a"]       = "<p>Uspjesno ste izvrsili upgrade ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]." na vasem trackeru.</p><p>Upgrade je uspjesno zakljucan da sprijecimo ponovno koristenje ali vas savjetujemo da obrisete <b>upgrade.php+install.php</b> radi sigurnosti.</p>";
$install_lang["succes_upgrade2b"]       = "<p>Uspjesno ste izvrsili upgrade ".$GLOBALS["btit-tracker"]." ".$GLOBALS["current_btit_version"]." na vasem trackeru.</p><p>savjetujemo vam da zakljucate instalaciju. Mozete to uraditi tako sto ce te preimenovati <b>install.unlock</b> u <b>install.lock</b> ili da obrisete <b>upgrade.php+install.php</b> fajl.</p>";
$install_lang["succes_upgrade3"]        = "<p>Mi iz BTIT se nadamo da ce te uzivati u nasem proizvodu i da vas vidimo nasem oficijalnom forumu <a href=\"http://dpwsmedia.com/smf/index.php\" target=\"_blank\">BTIT Forum</a>.</p>";
$install_lang['error_mysql_database']   = 'Instaler nije mogaopristupiti &quot;<i>%s</i>&quot; Bazi Podataka. Sa nekim hostovima, morate kreirati Bazu Podataka u Administraciji prije nego je xBtit moze koristiti. neki hostovi takodje dodaju prefikse - kao vase korisnicko ime - nazivu stolova vase baze podataka.';
$install_lang['error_message_click']    = 'Kliknite Ovdje';
$install_lang['error_message_try_again']= 'da pokusate ponovo';

$install_lang["forum_ipb"]              = "Invision Power Board";
$install_lang["ipb_download_a"]         = "<b>If using Invision Power Board:</b><br /><br/ >Please download the latest version of Invision Power Board from your <a target='_new' href='http://www.invisionpower.com/customer/'>Client Area</a> at Invision Power Services, extract the files somewhere on your computer and then upload the contents of the \"upload\" folder to the \"ipb\" folder.<br /><br />Once uploaded please make sure the \"cache\", \"hooks\", \"public\" and \"uploads\" folders are CHMOD'd to 777 recursively, rename \"conf_global.dist.php\" to \"conf_global.php\" and CHMOD that to 777 as well.<br /><br />Once done please <a target='_new' href='ipb/admin/install/index.php'>click here</a> to install it.*<br /><b>(Please use the same database credentials you used for this installation procedure and be sure to enter a database prefix, we suggest using <span style='color:blue;'>ipb_</span> as your prefix).<br /><br /><font color='#FF0000'>Once installed</font></b> please CHMOD the default cached English language file (<b>";
$install_lang["ipb_download_b"]         = "</b>) to 777 and click <b>Next</b> to continue with the xbtit installation.<br /><br /><b>* Both links will open into a new window/tab to prevent losing your place on the xbtit installation.</b></p>";
$install_lang["ipb_err_1"]              = "Can't find Invision Power Board in the \"ipb\" folder, please install it before proceeding.<br /><br />Click <a href=\"javascript: history.go(-1);\">here</a> to return to the previous page.";
$install_lang["ipb_err_2"]              = "Can't find Invision Power Board in the database, please install it before proceeding.<br /><br />Click <a href=\"javascript: history.go(-1);\">here</a> to return to the previous page.";
$install_lang["ipb_err_3a"]             = "Unable to write to the IPB English language file (<b>";
$install_lang["ipb_err_3b"]             = "</b>) please CHMOD to 777 before proceeding.<br /><br />Click <a href=\"javascript: history.go(-1);\">here</a> to return to the previous page.";
$install_lang["ipb_err_4a"]             = "IPB English language file (<b>";
$install_lang["ipb_err_4b"]             = "</b>) doesn't exist, cannot proceed.<br /><br />Click <a href=\"javascript: history.go(-1);\">here</a> to return to the previous page.";
$install_lang["ipb_err_5"]             = "Unable to write to the IPB Config file (<b>";
$install_lang["ipb_err_6"]             = "Unable to write to the Tracker Config file (<b>";
?>