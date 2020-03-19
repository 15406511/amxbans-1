// Author Notes:
// This file has been translated from English to Finnish by Jussi "insAnum" Luntiala from www.proz.com

// This is the General Language File

<?php
//encoding and locale
define("_ENCODING","ISO-8859-1"); //ISO-8859-1,utf-8
define("_LOCALE","fi_FI"); //de_DE,fr_FR,en_EN...

//default
define("_SHORTSECONDS","sek");
define("_NOACCESS","Sinulla ei ole oikeuksia avata t&auml;t&auml; sivua!");
define("_LOADTIME","Sivu ladattu ajassa");
define("_BANSINDB","Bannneja tietokannassa");
define("_BY",",");
define("_OR","tai");
define("_ON","p&auml;&auml;ll&auml;");
define("_OFF","pois p&auml;&auml;lt&auml;");
define("_YES","kyll&auml;");
define("_NO","ei");
define("_OWN","omat");
define("_CLEAR","Oletukset");
define("_OPENSTEAMCOMSITE","K&auml;y STEAM-yhteis&ouml;n sivulla");
define("_ADMINAREA","Yll&auml;pit&auml;jien alue");
define("_NOSITE","Sivua ei ole saatavilla!");
define("_DELETE","Poista");
define("_ADD","Lis&auml;&auml;");
define("_EDIT","Muokkaa");
define("_DEFAULTLANG","Oletuskieli");
define("_OTHER","muut");
define("_VIEWIP","n&auml;yt&auml; IP");
define("_LEVEL","Taso");
define("_DETAILS","n&auml;yt&auml; yksityiskohdat");
define("_SYSTEMSETTINGS","J&auml;rjestelm&auml;");
define("_VIEWSETTINGS","N&auml;yt&auml;");
define("_COMMENTSETTINGS","Kommentit");
define("_FILESETTINGS","Tiedostot");
define("_BANLISTSETTINGS","Bannilista");
define("_CONFIGURATION","Muuta asetuksia");
define("_REPAIR","Korjaa");
define("_AUTO","Automaattinen");
define("_TEST","Testi");
//user menu
define("_HOME","P&auml;&auml;sivu");
define("_BANLIST","Bannilista");
define("_SEARCH","Etsi");
define("_SERVER","Palvelin");
//info amxaccess
define("_INFO_ACCESS","Tietojen vaihto");
define("_ACCESSFLAGS","Oikeuksien vaihto");
define("_ACCESSPERMS","Lupien vaihto");
define("_ACCESS_FLAGS","a - Koskemattomuus (ei voida potkia ulos/bannata jne.)<br />b - Varatut paikat (p&auml;&auml;see varatuille paikoille)<br />c - amx_kick-komento<br />d - amx_ban- ja amx_unban-komennot<br />e - amx_slay- ja amx_slap-komennot<br />f - amx_map-komento<br />g - amx_cvar-komento (kaikkia CVAReja ei saatavilla)<br />h - amx_cfg-komento<br />i - amx_chat- ja muut chat-komennot<br />j - amx_vote- ja muut vote-komennot<br />k - P&auml;&auml;sy sv_password cvar:iin (amx_cvar-komennon kautta)<br />l - P&auml;&auml;sy amx_rcon-komentoon ja rcon_password cvar:iin (amx_cvar-komennon kautta)<br />m - K&auml;ytt&auml;j&auml;n m&auml;&auml;ritt&auml;m&auml; taso A (muille plugineille)<br />n - K&auml;ytt&auml;j&auml;n m&auml;&auml;ritt&auml;m&auml; taso B<br />o - K&auml;ytt&auml;j&auml;n m&auml;&auml;ritt&auml;m&auml; taso C<br />p - K&auml;ytt&auml;j&auml;n m&auml;&auml;ritt&auml;m&auml; taso D<br />q - K&auml;ytt&auml;j&auml;n m&auml;&auml;ritt&auml;m&auml; taso E<br />r - K&auml;ytt&auml;j&auml;n m&auml;&auml;ritt&auml;m&auml; taso F<br />s - K&auml;ytt&auml;j&auml;n m&auml;&auml;ritt&auml;m&auml; taso G<br />t - K&auml;ytt&auml;j&auml;n m&auml;&auml;ritt&auml;m&auml; taso H<br />u - Valikkoon p&auml;&auml;sy<br />z - K&auml;ytt&auml;j&auml; (ei yll&auml;pit&auml;j&auml;)");
define("_FLAG_FLAGS","a - Potki k&auml;ytt&auml;j&auml; ulos v&auml;&auml;r&auml;n salasanan takia<br />b - Klaanin tunnus<br />c - SteamID<br />d - IP<br />e - ei salasanaa (vain SteamID/IP tarvitaan)<br />k - nimi tai tunnus (KiRJaiNkooLLa on v&AUML;Li&auml;!).");
define("_ADDADMINTOSERVERS","Lis&auml;&auml; yll&auml;pit&auml;j&auml; palvelimelle");
define("_WITHSTATICBANTIME","muuttumattomalla bannausajalla");
//main header
define("_LOGGED","Kirjautuneena nimell&auml;");
define("_NOTLOGGED","Ei kirjautuneena sis&auml;&auml;n");
define("_LOGOUT","Kirjaudu ulos");
define("_LOGIN","Kirjaudu sis&auml;&auml;n");
define("_MENU","Valikko");
//ban list
define("_DATE","P&auml;iv&auml;ys");
define("_PLAYER","Pelaaja");
define("_ADMIN","Yll&auml;pit&auml;j&auml;");
define("_REASON","Syy");
define("_LENGHT","Pituus");
define("_SITE","Sivu");
define("_BANS","Bannit");
define("_BL_COMMENTS","Kommentit");
define("_BL_FILES","Tiedostot");
define("_BL_KICKS","Potkitut");
define("_TO",">");
define("_YEAR","vuosi");
define("_YEARS","vuotta");
define("_MONTH","kuukausi");
define("_MONTHS","kuukautta");
define("_WEEK","viikko");
define("_WEEKS","viikkoa");
define("_DAY","p&auml;iv&auml;");
define("_DAYS","p&auml;iv&auml;&auml;");
define("_HOUR","tunti");
define("_HOURS","tuntia");
define("_MIN","minuutti");
define("_MINS","minuuttia");
define("_OF","/");
define("_REMAINING","j&auml;ljell&auml;");
//ban list details
define("_PERMANENT","Pysyv&auml;");
define("_BANDETAILS","Bannin yksityiskohdat");
define("_STEAMID","SteamID");
define("_STEAMCOMID","Steam Community ID");
define("_NOTAVAILABLE","Ei saatavilla");
define("_NOSTEAMID","ei SteamID:t&auml;");
define("_STEAMID&IP","IP");
define("_HIDDEN","piilotettu");
define("_INVOKED","Lis&auml;tty");
define("_BANLENGHT","Bannin pituus");
define("_EXPIRES","Vanhenee");
define("_NOTAPPLICABLE","Ei sovi");
define("_ALREADYEXP","vanhentunut jo aiemmin");
define("_IP","IP-osoite");
define("_BANTYPE","Bannin tyyppi");
define("_BANBY","Bannaaja");
define("_BANON","Bannatty");
define("_FILE_TOBIG","Tiedosto on liian iso");
define("_FILE_TYPENOTALLOWED","Tiedoston tyyppi&auml; ei sallita");
define("_FROM","tiedostosta");
define("_DOWNLOAD","Lataa");
define("_DOWNLOADS","Lataukset");
define("_FILE","Tiedosto");
define("_NEWFILE","Uusi tiedosto");
define("_COMMENT","kommentti");
define("_COMMENTS","kommenttia");
define("_NEWCOMMENT","Uusi kommentti");
define("_NOCOMMENTS","Ei kommentteja");
define("_BACK","takaisin");
define("_TIP_EDIT","Muokkaa");
define("_TIP_DEL","Poista");
define("_TIP_DOWNLOAD","Lataa");
define("_TIP_BACK","Takaisin");
define("_TIP_SENDMAIL","L&auml;het&auml; s&auml;hk&ouml;postia");
define("_EMAIL","S&auml;hk&ouml;posti");
define("_FILEUPLOAD","L&auml;het&auml; tiedosto");
define("_UPLOAD","L&auml;het&auml;");
define("_ENTRYEDIT","Muokkaa sy&ouml;tt&ouml;&auml;");
define("_EDITBAN","Muokkaa bannia");
define("_TOTALEXPBANS","Vanhentuneita banneja yhteens&auml;");
define("_EDITCOMMENT","Muokkaa kommenttia");
define("_ADDCOMMENT","Lis&auml;&auml; kommentti");
define("_NOFILES","Ei tiedostoja");
define("_BANDETAILSEDITS","Aiemmat muutokset");
define("_EDITREASON","Muokkauksen syy");
define("_UNBANPLAYER","Poista banni");
define("_UNBANNED","Banni poistettu");
define("_BANHISTORY","Bannihistoria");
//Login
define("_USERNAME","K&auml;ytt&auml;j&auml;nimi");
define("_PASSWORD","Salasana");
define("_REMEMBERME","Muista minut");
define("_LOGINBLOCKED","Kirjautuminen estettiin!");
define("_LOGINFAILEDPW","Tarkista salasana!");
define("_LOGINFAILED","Kirjautuminen ep&auml;onnistui!");
define("_LOGINTRY","Yrit&auml;");
define("_SEC","sekunti");
define("_SECS","sekuntia");
//admins amxx
define("_AMXADMINSETTINGS","AMX Mod X -yll&auml;pit&auml;jien hallinto");
define("_NAME","Nimi");
define("_NICKNAME","Nimimerkki");
define("_MANAGEAMXADMINS","AMX Mod X -yll&auml;pit&auml;j&auml;t");
define("_ADDAMXADMINS","Lis&auml;&auml; AMX Mod X -yll&auml;pit&auml;ji&auml;");
define("_ACCESS","P&auml;&auml;sy");
define("_FLAGS","Oikeudet");
define("_SETTINGS","Asetukset");
define("_SAVE","Tallenna");
define("_EVER","Loppumaton");
define("_SHOWINADMINLIST","N&auml;kyvill&auml; yll&auml;pit&auml;jien listassa");
define("_ADMINVALIDITY","Voimassaolo");
define("_ADMINEXPIRATION","Voimassaolo p&auml;&auml;ttyy");
define("_CREATED","Luotu");
define("_EXTENDWITH","jatka");
define("_STEAMIDIPNAME","SteamID/IP/nimi");
//server
define("_SERVERSETTINGS","Palvelimen asetukset");
define("_MOD","Mod");
define("_RCONPW","RCON-salasana");
define("_DEL","Poista");
define("_MOTDURL","motd-URL");
define("_MOTDDELAY","motd:n viive");
define("_SERVERMENU","Palvelinvalikko");
define("_REASONSSET","Bannayssyiden sarjat");
define("_HOSTNAME","Palvelimen nimi");
define("_VERSION","Versio");
define("_LASTSEEN","viimeksi n&auml;hty");
define("_TIMEZONEFIXX","Aikavy&ouml;hykkeen korjaus");
define("_SERVERRCON","L&auml;het&auml; palvelimen komentoja (RCON)");
define("_RCON_RELOADADMINS","Lataa yll&auml;pit&auml;j&auml;t");
define("_RCON_RESTARTMAP","Lataa mappi/pluginit uudelleen");
define("_RCON_STATUS","Status-komento");
define("_RCON_PLUGINS","N&auml;yt&auml; lista AMXX-plugeista");
define("_RCON_MODULES","N&auml;yt&auml; lista AMXX-moduuleista");
define("_RCON_METALIST","N&auml;yt&auml; Metamod-lista");
define("_RCON_PREDEFINED","Esim&auml;&auml;ritetty");
define("_RCON_USERDEFINED","K&auml;ytt&auml;j&auml;n m&auml;&auml;ritt&auml;m&auml;");
define("_RCON_SEND","L&auml;het&auml;");
define("_RCON_SERVERRESPONSE","Vastaus palvelimelta:");
define("_RCON_MAPRESTARTED","Mappi alkaa alusta (komento: restart).");
define("_RCON_TIMEDOUT","Ei vastausta palvelimelta!");
define("_RCON_CMDDENIED","T&auml;m&auml; RCON-komento on kielletty!");
//server admins
define("_SERVERADMINSETTINGS","Palvelimen yll&auml;pit&auml;jien asetukset");
define("_ADMINS","Yll&auml;pit&auml;j&auml;t");
define("_ACTIV","aktiivinen");
define("_CUSTOMFLAGS","muutellut oikeudet"); 
define("_STATICBANTIME","Muuttumaton banniaika");
define("_EDITADMINS","Muokkaa yll&auml;pit&auml;ji&auml;");
define("_SPECIALS","Palvelimen erikoisuudet");
//reasons
define("_REASONSSETTINGS","Bannien syiden hallinta");
define("_REASONSSETS","Bannayssyiden sarjat");
define("_NEWREASON","Uusi syy");
define("_SAVESET","Tallenna sarja");
define("_EDITSET","Muokkaa sarjaa");
define("_REASONS","Syyt");
//settings
define("_SITESETTINGS","Sivuston yll&auml;pito");
define("_BANNER","Bannaaja");
define("_BANNERURL","Bannaajan URL");
define("_DESIGN","Suunnittelu");
define("_BANSPERPAGE","bannia sivua kohden");
define("_NEWSET","Uusi sarja");
define("_COOKIENAME","Ev&auml;steen nimi");
define("_STARTPAGE","Aloitussivu");
define("_SHOWCOMMENTSCOUNT","N&auml;yt&auml; kommenttien m&auml;&auml;r&auml;");
define("_SHOWFILESCOUNT","N&auml;yt&auml; tiedostojen m&auml;&auml;r&auml;");
define("_SHOWKICKCOUNT","N&auml;yt&auml; potkittujen m&auml;&auml;r&auml;");
define("_FILE_USERUPLOADALLOWED","K&auml;ytt&auml;jill&auml; on oikeus l&auml;hett&auml;&auml; tiedostoja");
define("_MAXFILESIZE","Tiedostokoko enint.");
define("_FILE_ALLOWEDTYPES","Sallitut tiedostop&auml;&auml;tteet");
define("_COMMENTUSERALLOWEDWRITE","K&auml;ytt&auml;j&auml;t voivat kirjoittaa kommentteja");
define("_USECAPTURE","K&auml;yt&auml; kuvavarmennusta");
define("_AUTOPRUNE","Automaattinen tietokannan karsiminen");
define("_USECOMMENTSYSTEM","K&auml;yt&auml; kommenttij&auml;rjestelm&auml;&auml;");
define("_USEFILESYSTEM","K&auml;yt&auml; tiedostoj&auml;rjestelm&auml;&auml;");
define("_AUTOPRUNE_MAXOFFENCES","Vanhentuneiden bannien enimm&auml;ism&auml;&auml;r&auml; ennen pysyv&auml;&auml; bannia");
define("_AUTOPRUNE_MAXOFFENCES_REASON","Vanhentuneiden bannien enimm&auml;ism&auml;&auml;r&auml;n syy");
define("_MUSTBEON","t&auml;ytyy olla p&auml;&auml;ll&auml;!");
//admin list
define("_ADMINSINCE","Yll&auml;pit&auml;jyys alkoi");
define("_ADMINTO","Yll&auml;pit&auml;jyys loppuu");
define("_UNLIMITED","loputon");
//admins web
define("_WEBADMINADD","Lis&auml;&auml; verkon yll&auml;pit&auml;j&auml;");
define("_WEBADMINSSETTINGS","Verkon yll&auml;pit&auml;jien hallinto");
define("_WEBADMINS","Verkon yll&auml;pit&auml;j&auml;t");
define("_LASTLOGIN","viimeksi kirjautunut");
define("_WADMINADDEDFAILED","Lis&auml;&auml;minen ep&auml;onnistui. Ovatko jotkin arvoista jo olemassa?");
define("_NEVER","ei koskaan");
define("_YOURPASSWORD","Turvallisuussyist&auml; joudut kirjautumaan uudelleen sis&auml;&auml;n vaihdettuasi salasanasi!");
define("_ENTERPASSWORD","Sy&ouml;t&auml; uusi salasana:");
define("_PASSWORD2","Salasana uudelleen");
define("_NEWPASSWORD","Vaihda salasana");
define("_PASSWORDCHANGED","Salasana vaihdettu!");
define("_PASSWORDCHANGEDFAILED","Salasanan vaihto ep&auml;onnistui!");
define("_EMAILSENT","S&auml;hk&ouml;posti l&auml;hetettiin antamaasi osoitteeseen.");
//search
define("_SEARCHRESULT","Hakutulokset");
define("_SEARCHWITH","Hakuehdot");
define("_SEARCHFOR","Etsi");
define("_PLAYERSWITH","Pelaajia, joilla on");
define("_MOREBANSHIS","tai enemm&auml;n aiempaa bannaysta");
define("_ACTIVEBANS","Aktiiviset bannit");
define("_EXPIREDBANS","Vanhentuneet bannit");
//Admin list
define("_ADMLIST","Lista yll&auml;pit&auml;jist&auml;");
//captcha
define("_SCODE","Turvakoodi:");
define("_SCODEENTER","Sy&ouml;t&auml; turvakoodi:");
//update
define("_WEBVERSIONINFO","Tietoja sivuston versiosta");
define("_PLUGINVERSIONINFO","Tietoja pluginin versiosta");
define("_VERSION_CURRENT","Nykyinen");
define("_VERSION_RELEASE","Viimeisin julkaisu");
define("_VERSION_BETA","Viimeisin beta-versio");
define("_LASTCHANGELOG","Muutosloki");
define("_WEB","Nettisivu");
define("_YOURWEB","Sinun nettisivusi");
define("_PLUGIN","AMX Mod X -plugin");
define("_UPDATE_RECOMMENDED","P&auml;ivitys suositeltavaa!");
define("_UPDATE_NOTNEEDED","P&auml;ivityst&auml; ei tarvita");
define("_WEBUPDATE_RECOMMENDED","Verkkop&auml;ivitys suositeltavaa!");
define("_PLUGINUPDATE_RECOMMENDED","AMX Mod X -pluginin p&auml;ivitys suositeltavaa!");
//admin menu
define("_MENUHOME","Adminien p&auml;&auml;sivu");
define("_MENUMAINSERVER","Palvelin");
define("_MENUMAINWEB","Nettisivu");
define("_MENUMAINOTHER","muut");
define("_MENUMAINMODULE","Moduuli");
define("_MENUSERVER","Palvelin");
define("_MENUAMXADMINS","AMX-yll&auml;pit&auml;j&auml;t");
define("_MENUSERVERADMINS","M&auml;&auml;r&auml;&auml; AMX-yll&auml;pit&auml;ji&auml;");
define("_MENUREASONS","Bannayksen syyt");
define("_MENUWEBCONFIG","Asetukset");
define("_MENUUSERLEVEL","K&auml;ytt&auml;j&auml;taso");
define("_MENUWEBADMINS","Verkon yll&auml;pit&auml;j&auml;t");
define("_MENUUSERMENU","K&auml;ytt&auml;j&auml;valikko");
define("_MENUMODULE","Moduuli");
define("_MENUUPDATE","P&auml;ivit&auml;");
define("_MENUINFO","Tietoa j&auml;rjestelm&auml;st&auml;");
define("_MENULOGS","Lokitiedostot");
//admin user menu
define("_USERMENU","K&auml;ytt&auml;j&auml;valikko");
define("_USERMENUSETTINGS","K&auml;ytt&auml;j&auml;valikon asetukset");
define("_MENULOGGEDIN","K&auml;ytt&auml;j&auml; kirjautui sis&auml;&auml;n");
define("_MENULOGGEDOUT","K&auml;ytt&auml;j&auml; kirjautui ulos");
define("_POSITION","Asento");
define("_LANGKEY1","Kielin&auml;pp&auml;in 1");
define("_LANGKEY2","Kielin&auml;pp&auml;in 2");
define("_URL1","URL 1");
define("_URL2","URL 2");
define("_USERMENUADD","Uusi k&auml;ytt&auml;j&auml;valikko");
//admin module
define("_MODULSETTINGS","Moduulien hallinta");
define("_MODULSETTINGS2","Moduulien asetukset");
define("_NAMELANGKEY","Kielin&auml;pp&auml;in valikolle");
define("_INDEXSITE","Indeksisivu");
define("_ADMINSITE","Yll&auml;pitosivu");
define("_TEMPLATE","Pohja");
//admin info
define("_SERVERINFO","Tietoa palvelimesta");
define("_SERVERSETUP","Palvelin asetus");
define("_PHPMODULES","PHP-moduuli");
define("_OTHERFUNCTIONS","muut toiminnot");
define("_STATISTIK","Tilasto");
define("_CLEARCACHE","Tyhjenn&auml; sivun v&auml;limuisti");
define("_DBSIZE","Tietokannan koko");
define("_DBOPTIMIZE","Opitimoi tietokanta");
define("_OPTIMIZE","Optimoi");
define("_PRUNEDB","Karsi banneja");
define("_PRUNE","Karsi");
define("_DBPRUNED","Karsitut bannit");
//user level
define("_ADMINLEVELSETTINGS","Verkon yll&auml;pit&auml;jien k&auml;ytt&auml;j&auml;tasojen hallinta");
define("_AMXADMINS","AMX-yll&auml;pit&auml;j&auml;t");
define("_WEBSETTINGS","Verkon asetukset");
define("_LEVELVIEW","N&auml;yt&auml;");
define("_LEVELUNBAN","Poista banni");
define("_LEVELIMPORT","Tuo");
define("_LEVELEXPORT","Vie");
define("_PERM","K&auml;ytt&auml;j&auml;tasot");
define("_DBPRUNE","Karsi tietokantaa");
define("_SERVEREDIT","Muokkaa palvelinta");
define("_NEWLEVEL","Uusi k&auml;ytt&auml;j&auml;taso");
define("_YOURLEVEL","Sinun tasosi: Sinut kirjataan ulos tallentaessasi");
//admin logs
define("_LOGS","Nettisivun loki");
define("_FILTER","Suodatin");
define("_ALL","Kaikki lokitiedostot");
define("_OLDERTHEN","Vanhemmat kuin");
define("_GO","Mene");
define("_ACTION","Toiminto");
define("_ACTIONLOGS","Tehdyt toiminnot");
define("_REMARKS","Kuvaus");
define("_USER","K&auml;ytt&auml;j&auml;");
//add ban
define("_ADDBAN","Lis&auml;&auml; banni");
define("_NEWBAN","Lis&auml;&auml; uusi banni");
define("_NOBANNAME","Ei nime&auml; sy&ouml;tettyn&auml;!");
define("_ACTIVBANEXISTS","Aktiivinen banni on jo olemassa!");
//messages
define("_BANADDSUCCESS","Banni lis&auml;ttiin onnistuneesti");
define("_BANEDITED","Banni tallennettiin");
define("_AMXADMINSAVESUCCESS","AMX Mod X:n yll&auml;pit&auml;j&auml; tallennettiin onnistuneesti");
define("_AMXADMINDELETED","AMX Mod X:n yll&auml;pit&auml;j&auml; poistettiin");
define("_AMXADMINADDED","AMX Mod X:n yll&auml;pit&auml;j&auml; lis&auml;ttiin");
define("_NONAME","Nimi puuttuu!");
define("_NOFLAGS","Oikeudet puuttuvat!");
define("_NOSTEAM","SteamID puuttuut!");
define("_NOVALIDTIME","Voimassaoloaika puuttuu!");
define("_REASONSETADDED","Syiden sarja lis&auml;tty");
define("_REASONSETDELETED","Syiden sarja poistettu");
define("_REASONSSETSAVED","Syiden sarja tallennettu");
define("_REASONADDED","Syy lis&auml;tty");
define("_REASONDELETED","Syy poistettu");
define("_REASONSAVED","Syy tallennettu");
define("_SADMINSAVED","Palvelimen yll&auml;pit&auml;j&auml; tallennettu");
define("_SERVERSAVED","Palvelimen asetukset tallennettu");
define("_SERVERDELETED","Palvelin poistettu");
define("_CACHEDELETED","Sivun v&auml;limuisti tyhjennetty");
define("_LOGDELETED","Lokitiedostot poistettu");
define("_MODULSAVED","Moduulin asetukset tallennettu");
define("_CONFIGSAVED","Asetukset tallennettu");
define("_LEVELADDED","Taso luotu");
define("_LEVELDELFAILED","Virhe:<br><br>T&auml;m&auml;n k&auml;ytt&auml;j&auml;tason verkon yll&auml;pit&auml;ji&auml; on jo olemassa!<br>Tasoa ei voida poistaa.");
define("_LEVELDELETED","Taso poistettu");
define("_LEVELSAVED","Taso tallennettu");
define("_USERMENUDELETED","K&auml;ytt&auml;j&auml;valikko poistettu");
define("_USERMENUADDED","K&auml;ytt&auml;j&auml;valikko lis&auml;tty");
define("_USERMENUPOSSAVED","K&auml;ytt&auml;j&auml;valikon sijainti tallennettu");
define("_USERMENUSAVED","K&auml;ytt&auml;j&auml;valikko tallennettu");
define("_WADMINSAVED","Verkon yll&auml;pit&auml;j&auml; tallennettu");
define("_WADMINDELETED","Verkon yll&auml;pit&auml;j&auml; poistettu");
define("_WADMINADDED","Verkon yll&auml;pit&auml;j&auml; lis&auml;tty");
define("_COMDELETED","Kommentti poistettu");
define("_COMADDED","Kommentti lis&auml;tty");
define("_COMEDITED","Kommenttia muutettu");
define("_WRONGCAPTCHA","V&auml;&auml;r&auml; turvakoodi!");
define("_FILEDELFAILED","Tiedostoa ei voitu poistaa!");
define("_FILENOTFOUND","Tiedostoa ei l&ouml;ydy!");
define("_ERROR","Virhe");
define("_FILEEDITED","Sy&ouml;tt&ouml; tallennettu");
define("_FILENOFILE","Ei tiedostoa!");
define("_FILETYPENOTALLOWED","Tiedostotyyppi&auml; ei sallita!");
define("_FILETOBIG","Tiedosto on liian suuri!");
define("_FILEUPLOADFAIL","Virhe l&auml;hetyksess&auml;!");
define("_FILEUPLOADSUCCESS","Tiedoston l&auml;hetys onnistui");
define("_FILENOTAVAILABLE","Tiedostoa ei saatavilla!");
define("_FILEDELSUCCESS","Tiedosto poistettiin onnistuneesti");
define("_NOREQUIREDFIELDS","Pakollisia kentti&auml; on t&auml;ytt&auml;m&auml;tt&auml;!");
define("_DBOPTIMIZED","Tietokanta optimoitu");
//live viewer
define("_SELECTSERVER","Valitse palvelin");
define("_ADDHLSW","Lis&auml;&auml; HLSW:iin");
define("_CONNECT","Yhdist&auml;");
define("_NUMBER","#");
define("_FRAGS","Tapot");
define("_ONLINE","Aika");
define("_ADDRESS","Osoite");
define("_MAP","Mappi");
define("_NEXTMAP","Seuraava mappi");
define("_TIMELEFT","Aikaa j&auml;ljell&auml;");
define("_TIMELIMIT","Aikaraja");
define("_FRIENDLYFIRE","Friendly Fire");
define("_GAMETYPE","Peli");
define("_ANTICHEAT","Huijauksenesto-ohjelmat");
define("_ADDONS","Lis&auml;osat");
define("_PROTOCOL","Protokolla");
define("_NOPLAYERS","Ei pelaajia");
define("_PLAYERCONNECTING","Pelaaja yhdist&auml;&auml;...");
define("_SERVEROFFLINE","Palvelinta ei saatavilla");
define("_REFRESH","P&auml;ivit&auml;");
define("_NOTIMELIMIT","Ei aikarajaa");
//live ban
define("_ADDBANONLINE","Lis&auml;&auml; online-banni");
define("_BANSETTINGS","Bannays/potkimisasetukset");
define("_SHOW","N&auml;yt&auml;");
define("_USERID","K&auml;ytt&auml;j&auml;n ID");
define("_STATUSNAME","Status-nimi");
define("_BOT","Botti");
define("_PLAYER","Pelaaja");
define("_HLTV","HLTV");
define("_UNKNOWN","tuntematon");
define("_BAN","Bannaa");
define("_KICK","Potki ulos");
define("_WRONGRCON","V&auml;&auml;r&auml; RCON-salasana!");
define("_PLAYERKICKED","Pelaaja potkittiin ulos!");
define("_ADDBANSUCCESSKICK","Banni lis&auml;tty. Pelaaja potkitaan ulos!");
define("_BANANDKICK","Potki pelaaja ulos bannayksen j&auml;lkeen");
define("_BANPLAYER","Haluatko varmasti bannata t&auml;m&auml;n pelaajan?");
define("_KICKPLAYER","Haluatko varmasti potkaista t&auml;m&auml;n pelaajan ulos?");
//title
define("_TITLEADMIN","M&auml;&auml;r&auml;&auml; yll&auml;pit&auml;ji&auml;");
define("_TITLEADMINLIST","Lista yll&auml;pit&auml;jist&auml;");
define("_TITLEBANLIST","Bannilista");
define("_TITLELOGIN","Kirjaudu sis&auml;&auml;n");
define("_TITLESEARCH","Etsi");
define("_TITLEVIEW","Palvelimen tila");
define("_TITLEBANDETAIL","Yksityiskohdat");
define("_TITLEBANADD","Lis&auml;&auml; banni");
define("_TITLEBANADDONLINE","Lis&auml;&auml; online-banni");
define("_TITLEAMXADMINS","AMX Mod X -yll&auml;pit&auml;j&auml;t");
define("_TITLEREASONS","Banni(e)n syyt");
define("_TITLESERVERADMINS","Palvelimen yll&auml;pit&auml;j&auml;t");
define("_TITLESERVER","Palvelin");
define("_TITLEINFO","Tietoa");
define("_TITLELOGS","Lokitiedostot");
define("_TITLEMODULE","Moduuli");
define("_TITLEUPDATE","Version tarkistus");
define("_TITLEUSERLEVEL","K&auml;ytt&auml;j&auml;taso");
define("_TITLESITE","Sivun asetukset");
define("_TITLEUSERMENU","K&auml;ytt&auml;j&auml;valikko");
define("_TITLEWEBADMIN","Verkon yll&auml;pit&auml;j&auml;");
//value check
define("_NOUSERNAME","K&auml;ytt&auml;j&auml;nime&auml; ei sy&ouml;tetty!");
define("_NOPASSWORD","Salasanaa ei sy&ouml;tetty!");
define("_ACCESSINVALID","P&auml;&auml;sy ep&auml;onnistui!");
define("_FLAGSBCDMISSING","Oikeuden t&auml;ytyy olla B, C tai D!");
define("_NONICKNAME","Nimimerkki&auml; ei sy&ouml;tetty!");
define("_NOTAG","Klaanin tunnusta/nime&auml; ei sy&ouml;tetty!");
define("_EMAILINVALID","S&auml;hk&ouml;postiosoite ei kelpaa!");
define("_STEAMIDINVALID","SteamID ei kelpaa!");
define("_IPINVALID","IP-osoite ei kelpaa!");
define("_FLAGSINVALID","Oikeudet eiv&auml;t kelpaa!");
define("_USERNAMETOSHORT","Nimi on liian lyhyt!");
define("_USERNAMETOLONG","Nimi on liian pitk&auml;!");
define("_NICKNAMETOSHORT","Nimimerkki on liian lyhyt!");
define("_NICKNAMETOLONG","Nimimerkki on liian pitk&auml;!");
define("_PASSWORDTOSHORT","Salasana on liian lyhyt!");
define("_PASSWORDTOLONG","Salasana on liian pitk&auml;!");
define("_NOREASONSET","Syyt&auml; ei ole ilmoitettu!");
define("_REASONSETTOSHORT","Syiden sarjan nimi on liian lyhyt!");
define("_REASONSETTOLONG","Syiden sarjan nimi on liian pitk&auml;!");
define("_NOREASON","Bannayksen syyt&auml; ei ole ilmoitettu!");
define("_REASONTOSHORT","Bannayksen syy on liian lyhyt!");
define("_REASONTOLONG","Bannayksen syy on liian pitk&auml;!");
define("_PASSWORDNOTMATCH","Sy&ouml;tt&auml;m&auml;si salasanat eiv&auml;t t&auml;sm&auml;&auml;!");
define("_NOCOMMENT","Kommenttia ei ole sy&ouml;tetty!");
define("_NOEDITREASON","Syyt&auml; ei ole ilmoitettu!");
define("_COMMENTTOSHORT","Kommentti on liian lyhyt!");
define("_COMMENTTOLONG","Kommentti on liian pitk&auml;!");
define("_STEAMTOLONG","SteamID on liian pitk&auml;!");
define("_STEAMTOSHORT","SteamID on liian lyhyt!");
define("_NOIP","IP-osoitetta ei ole ilmoitettu!");
define("_IPTOLONG","IP-osoite on liian pitk&auml;!");
define("_IPTOSHORT","IP-osoite on liian lyhyt!");
//alerts
define("_SAVEEDIT","Tallenna muutokset?");
define("_DELBAN","Haluatko varmasti poistaa t&auml;m&auml;n bannin?");
define("_DELDEMO","Haluatko varmasti poistaa t&auml;m&auml;n tiedoston?");
define("_DELCOMMENT","Haluatko varmasti poistaa t&auml;m&auml;n kommentin?");
define("_DELADMIN","Haluatko varmasti poistaa t&auml;m&auml;n yll&auml;pit&auml;j&auml;n?");
define("_DELLEVEL","Haluatko varmasti poistaa t&auml;m&auml;n tason?");
define("_DELLOGSALL","Haluatko varmasti poistaa kaikki lokitiedostot?");
define("_DELLOGS","Haluatko varmasti poistaa n&auml;m&auml; lokitiedostot?");
define("_SAVESETTINGS","Tallenna ja ota asetukset k&auml;ytt&ouml;&ouml;n?");
define("_DATALOSS","\nTietoja EI saada takaisin!");
define("_DELSERVER","Haluatko varmasti poistaa t&auml;m&auml;n palvelimen?");
//motd
define("_NOEXPIREDBANS","Ei vanhentuneita banneja");
define("_YOUAREBANNED","Sinut on bannatty!!");
//new design related
define("_OS", "OS");
define("_VAC", "VAC");
define("_VAC_ALT", "Valve Anti-Cheat");
define("_NA", "N/A");
define("_STATS", "Tilastot");
define("_PERM_BANS", "Pysyv&auml;t bannit");
define("_TEMP_BANS", "V&auml;liaikaiset bannit");
define("_ACTIVE_SERVERS", "Aktiiviset palvelimet");
define("_LATEST_BAN", "Vimeisin banni");
define("_LATEST_KICKS", "Viimeisimm&auml;t kickit");
define("_BROWSE_ALL", "Selaa kaikkia");
define("_POWERED_BY", "Powered by");
define("_DESIGN_BY", "Design by");
define("_NO_BANS", "Ei banneja tietokannassa");
define("_FIRST_PAGE", "Ensimmäinen sivu");
define("_LAST_PAGE", "Viimeinen sivu");
define("_PREVIOUS_PAGE", "Edellinen sivu");
define("_NEXT_PAGE", "Seuraava sivu");
define("_PICK_DATE", "Valitse p&auml;iv&auml;m&auml;&auml;r&auml;");
define("_WEB_VERSION", "Sivuston versio");
define("_WEBSERVER", "Verkkopalvelin");
define("_MODULES", "Moduulit");
define("_MIN_OR", "minuuttia tai");
define("_SIZE", "Koko");
define("_UPD_CONNECT_ERROR", "P&auml;ivityspalvelimelle ei voitu yhdist&auml;&auml;!"); 
define("_UPD_DB_ERROR", "P&auml;ivitystietokantaa ei l&ouml;ytynyt.");
define("_UPD_SELECT_ERROR", "P&auml;ivitystietokantaa ei pystytty valitsemaan.");
define("_ADMINID", "Yll&auml;pit&auml;j&auml;n SteamID"); 
define("_TRACKBACK", "Trackback");
define("_YOUNOTBANNED", "Kaikki on hyvin, et ole kielletty");
?>