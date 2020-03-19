// Author Notes:
// This file has been translated from English to Lithuanian by ramiax from www.amxbans.de.

// This is the General Language File

<?php
//encoding and locale
define("_ENCODING","ISO-8859-1"); //ISO-8859-1,utf-8
define("_LOCALE","lt_LT"); //de_DE,fr_FR,en_EN...

//default
define("_SHORTSECONDS","Sek.");
define("_NOACCESS","Tu neturi reikiamų teisių žiūrėti šiam puslapiui!");
define("_LOADTIME","Puslapis sugeneruotas per");
define("_BANSINDB","Banai duomenų bazėje");
define("_BY"," ");
define("_OR","arba");
define("_ON","įjungta");
define("_OFF","išjungta");
define("_YES","taip");
define("_NO","ne");
define("_OWN","turimas");
define("_CLEAR","Iš naujo");
define("_OPENSTEAMCOMSITE","Aplankykite STEAM-Bendruomenės puslapį");
define("_ADMINAREA","Administratorių zona");
define("_NOSITE","Puslapis nepasiekiamas");
define("_DELETE","Ištrinti");
define("_ADD","Pridėti");
define("_EDIT","Redaguoti");
define("_DEFAULTLANG","Pagrindinė Kalba");
define("_OTHER","kiti");
define("_VIEWIP","rodyti IP");
define("_LEVEL","Lygis");
define("_DETAILS","rodyti Detales");
define("_SYSTEMSETTINGS","Sistema");
define("_VIEWSETTINGS","Žiūrėti");
define("_COMMENTSETTINGS","Komentarai");
define("_FILESETTINGS","Failai");
define("_BANLISTSETTINGS","Banų sąrašas");
define("_CONFIGURATION","Konfiguracija");
define("_REPAIR","Pataisyti");
define("_AUTO","Automatiškai");
define("_TEST","Testas");
//user menu
define("_HOME","Namai");
define("_BANLIST","Banų sąrašas");
define("_SEARCH","Ieškoti");
define("_SERVER","Serveris");
//info amxaccess
define("_INFO_ACCESS","Priėjimo-Informacija");
define("_ACCESSFLAGS","Priėjimo-Flags");
define("_ACCESSPERMS","Priėjimo-Leidimai");
define("_ACCESS_FLAGS","a - Imunitetas (negali būti išmestas / užbanintas pvz.)<br />b - Reservuotos Vietos (Gali naudotis rezervuota vieta)<br />c - amx_kick Komanda<br />d - amx_ban ir amx_unban Komandos<br />e - amx_slay ir amx_slap Komandos<br />f - amx_map Komanda<br />g - amx_cvar Komanda (ne visi CVAR'ai galimi)<br />h - amx_cfg Komanda<br />i - amx_chat ir kitos Pokalbio-Komandos<br />j - amx_vote ir kitos Balsavimo-Komandos<br />k - Priėjimas prie sv_password cvar'o (per amx_cvar Komanda)<br />l - Priėjimas prie amx_rcon komandos ir rcon_password cvar'o (per amx_cvar Komandą)<br />m - Naudotojo nustatytas Lygis A (kitiems Pluginams)<br />n - Naudotojo nustatytas Lygis B<br />o - Naudotojo nustatytas Lygis C<br />p - Naudotojo nustatytas Lygis D<br />q - Naudotojo nustatytas Lygis E<br />r - Naudotojo nustatytas Lygis F<br />s - Naudotojo nustatytas Lygis G<br />t - Naudotojo nustatytas Lygis H<br />u - Meniu-Priėjimas<br />z - Žaidėjas (ne Adminas)");
define("_FLAG_FLAGS","a - išmesti žaidėją po neteisingo slaptažodžio<br />b - Klano Pavadinimas<br />c - tai STEAM-ID<br />d - tai IP<br />e - be slaptažodžio (tik STEAM-ID / IP reikalingi)<br />k - Vardas ar Pavadinimas (Didžiosio bei mažosios raidės turi atitikti!).");
define("_ADDADMINTOSERVERS","Pridėti Adminą į Serverį");
define("_WITHSTATICBANTIME","su statiniu Bano laiku");
//main header
define("_LOGGED","Prisijungęs kaip");
define("_NOTLOGGED","Neprisijungęs");
define("_LOGOUT","Atsijungti");
define("_LOGIN","Prisijungti");
define("_MENU","Meniu");
//ban list
define("_DATE","Data");
define("_PLAYER","Žaidėjas");
define("_ADMIN","Adminas");
define("_REASON","Priežastis");
define("_LENGHT","Laikas");
define("_SITE","Puslapis");
define("_BANS","Banai");
define("_BL_COMMENTS","Komentarai");
define("_BL_FILES","Failai");
define("_BL_KICKS","Išmetimai");
define("_TO"," ");
define("_YEAR","Metas");
define("_YEARS","Metai");
define("_MONTH","Mėnesis");
define("_MONTHS","Mėnesiai");
define("_WEEK","Savaitė");
define("_WEEKS","Savaitės");
define("_DAY","Diena");
define("_DAYS","Dienos");
define("_HOUR","Valanda");
define("_HOURS","Valandos");
define("_MIN","Minutė");
define("_MINS","Minutės");
define("_OF","iš");
define("_REMAINING","likusių");
//ban list details
define("_PERMANENT","Amžinas");
define("_BANDETAILS","Bano detalės");
define("_STEAMID","SteamID");
define("_STEAMCOMID","Steamo Bendruomenės ID");
define("_NOTAVAILABLE","Negalima");
define("_NOSTEAMID","nėra STEAM-ID");
define("_STEAMID&IP","IP");
define("_HIDDEN","paslėptas");
define("_INVOKED","Remiantis");
define("_BANLENGHT","Bano ilgumas");
define("_EXPIRES","Pasibaigs");
define("_NOTAPPLICABLE","Niekada");
define("_ALREADYEXP","jau pasibaiges");
define("_IP","IP adresas");
define("_BANTYPE","Bano tipas");
define("_BANBY","Užbanino");
define("_BANON","Užbanintas per");
define("_FILE_TOBIG","Failas perdidelis");
define("_FILE_TYPENOTALLOWED","Failo tipas neleidžiamas");
define("_FROM","iš");
define("_DOWNLOAD","Siūstis");
define("_DOWNLOADS","Siuntimai");
define("_FILE","Failas");
define("_NEWFILE","Naujas failas");
define("_COMMENT","Komentuoti");
define("_COMMENTS","Komentarai");
define("_NEWCOMMENT","Naujas komentaras");
define("_NOCOMMENTS","Nėra komentarų");
define("_BACK","grįžti");
define("_TIP_EDIT","Redaguoti");
define("_TIP_DEL","Ištrinti");
define("_TIP_DOWNLOAD","Siūstis");
define("_TIP_BACK","Grįžti");
define("_TIP_SENDMAIL","Siūsti El. žinutę");
define("_EMAIL","El. paštas");
define("_FILEUPLOAD","Patalpinti failą");
define("_UPLOAD","Patalpinti");
define("_ENTRYEDIT","Redaguoti iėjimą");
define("_EDITBAN","Redaguoti baną");
define("_TOTALEXPBANS","Iš viso pasibaigusių banų");
define("_EDITCOMMENT","Redaguoti komentarą");
define("_ADDCOMMENT","Pridėti komentarą");
define("_NOFILES","Nėra failų");
define("_BANDETAILSEDITS","Pakeitimai praeityje");
define("_EDITREASON","Redaguoti priežastį");
define("_UNBANPLAYER","Atbaninti");
define("_UNBANNED","Atbaninti");
define("_BANHISTORY","Banų istorija");
//Login
define("_USERNAME","Naudotojo vardas");
define("_PASSWORD","Slaptažodis");
define("_REMEMBERME","Atsiminti");
define("_LOGINBLOCKED","Prisijungimas užblokuotas!");
define("_LOGINFAILEDPW","Patikrinkite slaptažodį!");
define("_LOGINFAILED","Prisijungimas nepavyko!");
define("_LOGINTRY","Bandyti");
define("_SEC","Sekundė");
define("_SECS","Sekundės");
//admins amxx
define("_AMXADMINSETTINGS","AMX Mod X adminų administracija");
define("_NAME","Vardas");
define("_NICKNAME","Nikas");
define("_MANAGEAMXADMINS","AMX Mod X Adminai");
define("_ADDAMXADMINS","Pridėti AMX Mod X Adminą");
define("_ACCESS","Priėjimas");
define("_FLAGS","Žymėjimas");
define("_SETTINGS","Nustatymai");
define("_SAVE","Išsaugoti");
define("_EVER","Begalinis");
define("_SHOWINADMINLIST","Matomas adminų saraše");
define("_ADMINVALIDITY","Galiojimas");
define("_ADMINEXPIRATION","Galioja iki");
define("_CREATED","Sukurtas");
define("_EXTENDWITH","tęsti");
define("_STEAMIDIPNAME","SteamID / IP / Name");
//server
define("_SERVERSETTINGS","Serverio nustatymai");
define("_MOD","Modas");
define("_RCONPW","RCON slaptažodis");
define("_DEL","Ištrinti");
define("_MOTDURL","motd URL");
define("_MOTDDELAY","motd laikas");
define("_SERVERMENU","Serverio meniu");
define("_REASONSSET","Bano priežasčių rinkiniai");
define("_HOSTNAME","Serverio vardas");
define("_VERSION","Versija");
define("_LASTSEEN","paskutinį kartą matytas");
define("_TIMEZONEFIXX","Laiko zonos pataisymas");
define("_SERVERRCON","Siūsti Serverio komandas (RCON)");
define("_RCON_RELOADADMINS","Perkrauti adminus");
define("_RCON_RESTARTMAP","Perkrauti žemėlapi / Pluginus");
define("_RCON_STATUS","Statistikos komanda");
define("_RCON_PLUGINS","Rodyti AMXX-Pluginų sąrašą");
define("_RCON_MODULES","Rodyti AMXX-Modulių sąrašą");
define("_RCON_METALIST","Rodyti Metamod sąrašą");
define("_RCON_PREDEFINED","Apibrėžtas");
define("_RCON_USERDEFINED","Naudotojo nustatytas");
define("_RCON_SEND","Siūsti");
define("_RCON_SERVERRESPONSE","Atsakymas iš serverio:");
define("_RCON_MAPRESTARTED","Žemėlapis bus restartuotas (Komanda: restartuoti).");
define("_RCON_TIMEDOUT","Jokio atsakymo iš serverio!");
define("_RCON_CMDDENIED","Šita RCON komanda pamiršta!");
//server admins
define("_SERVERADMINSETTINGS","Serverio adminų nustatymai");
define("_ADMINS","Adminai");
define("_ACTIV","aktyvūs");
define("_CUSTOMFLAGS","asmeninis žymėjimas");
define("_STATICBANTIME","statinis bano laikas");
define("_EDITADMINS","Redaguoti adminus");
define("_SPECIALS","Serverio specialūs");
//reasons
define("_REASONSSETTINGS","Banų priežasčių administracija");
define("_REASONSSETS","Banų priežasčių rinkiniai");
define("_NEWREASON","Nauja priežastis");
define("_SAVESET","Išsaugoti rinkinį");
define("_EDITSET","Redaguoti rinkinį");
define("_REASONS","Priežastys");
//settings
define("_SITESETTINGS","Puslapio Administracija");
define("_BANNER","Baneris");
define("_BANNERURL","Banerio URL");
define("_DESIGN","Stilius");
define("_BANSPERPAGE","Banai per puslapį");
define("_NEWSET","Naujas rinkinys");
define("_COOKIENAME","Sausainėlio vardas");
define("_STARTPAGE","Pradinis puslapis");
define("_SHOWCOMMENTSCOUNT","Rodyti komentarų skaičių");
define("_SHOWFILESCOUNT","Rodyti failų skaičių");
define("_SHOWKICKCOUNT","Rodyti išspyrimų skaičių");
define("_FILE_USERUPLOADALLOWED","Nariai gali talpinti failus");
define("_MAXFILESIZE","maksimalus failo dydis");
define("_FILE_ALLOWEDTYPES","Leistini priedai");
define("_COMMENTUSERALLOWEDWRITE","Nariai gali rašyti komentarus");
define("_USECAPTURE","Naudoti Captcha");
define("_AUTOPRUNE","Automatiškas DB Prune");
define("_USECOMMENTSYSTEM","Naudoti komentarų sistemą");
define("_USEFILESYSTEM","Naudoti failų sistemą");
define("_AUTOPRUNE_MAXOFFENCES","Maksimalus pasibaigusių banų skaičius prieš amžiną baną");
define("_AUTOPRUNE_MAXOFFENCES_REASON","Bano priežastis pasibaigusių banų banui");
define("_MUSTBEON","privalo būti įjungtas!");
//admin list
define("_ADMINSINCE","Administratorius nuo");
define("_ADMINTO","Administratorius iki");
define("_UNLIMITED","begalinis");
//admins web
define("_WEBADMINADD","Pridėti Puslapio-Adminą");
define("_WEBADMINSSETTINGS","Puslapio adminų administracija");
define("_WEBADMINS","Puslapio adminai");
define("_LASTLOGIN","paskutinis prisijungimas");
define("_WADMINADDEDFAILED","Pridėjimas nepavyko. Ar yra pasikartojančių duomenų?");
define("_NEVER","niekada");
define("_YOURPASSWORD","Dėl saugumo priežasčių, tu būsi atjungtas po savo slaptažodžio pakeitimo!");
define("_ENTERPASSWORD","Įrašyk naują slaptažodį:");
define("_PASSWORD2","Pakartok slaptažodį");
define("_NEWPASSWORD","Pakeisti slaptažodį");
define("_PASSWORDCHANGED","Slaptažodis pakeistas!");
define("_PASSWORDCHANGEDFAILED","Slaptažodžio keitimas nepavyko!");
define("_EMAILSENT","El. laiškas buvo nusiūstas į adresą, kurį tu davei.");
//search
define("_SEARCHRESULT","Paieškos rezultatai");
define("_SEARCHWITH","Ieškoti su");
define("_SEARCHFOR","Ieškoti");
define("_PLAYERSWITH","Žaidėjų su");
define("_MOREBANSHIS","ar daugiau banų istorijoje");
define("_ACTIVEBANS","Aktyvių banų");
define("_EXPIREDBANS","Pasibaigusių banų");
//Admin list
define("_ADMLIST","Adminų sąrašas");
//captcha
define("_SCODE","Apsaugos kodas:");
define("_SCODEENTER","Prašome irašyti apsaugos kodą:");
//update
define("_WEBVERSIONINFO","Puslapio versijos informacija");
define("_PLUGINVERSIONINFO","Plugino versijos informacija");
define("_VERSION_CURRENT","Dabartinė");
define("_VERSION_RELEASE","Paskutinis leidimas");
define("_VERSION_BETA","Paskutinė beta");
define("_LASTCHANGELOG","Pakeitimų istorija"); 
define("_WEB","Puslapis");
define("_YOURWEB","Tavo puslapis");
define("_PLUGIN","AMX Mod X Pluginas");
define("_UPDATE_RECOMMENDED","Atnaujinimas rekomenduojamas!");
define("_UPDATE_NOTNEEDED","Atnaujinimas nereikalingas");
define("_WEBUPDATE_RECOMMENDED","Puslapio atnaujinimas rekomenduojamas!");
define("_PLUGINUPDATE_RECOMMENDED","AMX Mod X Plugino atnaujinimas rekomenduojamas!");
//admin menu
define("_MENUHOME","Admino namai");
define("_MENUMAINSERVER","Serveris");
define("_MENUMAINWEB","Puslapis");
define("_MENUMAINOTHER","kita");
define("_MENUMAINMODULE","Modulis");
define("_MENUSERVER","Serveris");
define("_MENUAMXADMINS","AMXAdminai");
define("_MENUSERVERADMINS","Paskirstyti AMX-Adminus");
define("_MENUREASONS","Banų priežastys");
define("_MENUWEBCONFIG","Nustatymai");
define("_MENUUSERLEVEL","Nario lygis");
define("_MENUWEBADMINS","Puslapio adminai");
define("_MENUUSERMENU","Nario meniu");
define("_MENUMODULE","Modulis");
define("_MENUUPDATE","Atnaujinti");
define("_MENUINFO","Sistemos informacija");
define("_MENULOGS","Žurnalas");
//admin user menu
define("_USERMENU","Nario meniu");
define("_USERMENUSETTINGS","Nario meniu nustatymai");
define("_MENULOGGEDIN","Narys prisijungęs");
define("_MENULOGGEDOUT","Narys atsijungęs");
define("_POSITION","Vieta");
define("_LANGKEY1","Kalbos raktas 1");
define("_LANGKEY2","Kalbos raktas 2");
define("_URL1","URL 1");
define("_URL2","URL 2");
define("_USERMENUADD","Naujas nario meniu");
//admin module
define("_MODULSETTINGS","Modulių administracija");
define("_MODULSETTINGS2","Modulių nustatymai");
define("_NAMELANGKEY","Meniu kalbos raktas");
define("_INDEXSITE","Pagrindinis puslapis");
define("_ADMINSITE","Admino puslapis");
define("_TEMPLATE","šablonas");
//admin info
define("_SERVERINFO","Serverio informacija");
define("_SERVERSETUP","Serverio įrašymas");
define("_PHPMODULES","PHP Modulis");
define("_OTHERFUNCTIONS","kitos funkcijos");
define("_STATISTIK","Statistika");
define("_CLEARCACHE","Išvalyti puslapių kešą");
define("_DBSIZE","Duomenų bazės dydis");
define("_DBOPTIMIZE","Optimizuoti duomenų bazę");
define("_OPTIMIZE","Optimizuoti");
define("_PRUNEDB","Prune Banus");
define("_PRUNE","Prune");
define("_DBPRUNED","Banai Pruned");
//user level
define("_ADMINLEVELSETTINGS","Puslapio adminų lygių administravimas");
define("_AMXADMINS","AMX Adminai");
define("_WEBSETTINGS","Puslapio nustatymai");
define("_LEVELVIEW","Rodyti");
define("_LEVELUNBAN","Atbaninti");
define("_LEVELIMPORT","Importuoti");
define("_LEVELEXPORT","Eksportuoti");
define("_PERM","Nario lygiai");
define("_DBPRUNE","Prune DB");
define("_SERVEREDIT","Redaguoti serverį");
define("_NEWLEVEL","Naujas lygis");
define("_YOURLEVEL","Tavo lygis: Tu būsi atjungtas, kol išsaugos");
//admin logs
define("_LOGS","Puslapio žurnalas");
define("_FILTER","Filtras");
define("_ALL","Visi žurnalai");
define("_OLDERTHEN","Žurnalai senesni nei");
define("_GO","Eiti");
define("_ACTION","Veiksmas");
define("_ACTIONLOGS","Veiksmas baigtas");
define("_REMARKS","Aprašymas");
define("_USER","Narys");
//add ban
define("_ADDBAN","Pridėti baną");
define("_NEWBAN","Pridėti naują baną");
define("_NOBANNAME","Joks vardas neįrašytas!");
define("_ACTIVBANEXISTS","Jau yra aktyvus banas!");
//messages
define("_BANADDSUCCESS","Banas sėkmingai pridėtas");
define("_BANEDITED","Banas išsaugotas");
define("_AMXADMINSAVESUCCESS","AMX Mod X Adminai sėkmingai išsaugoti");
define("_AMXADMINDELETED","AMX Mod X Adminas ištryntas");
define("_AMXADMINADDED","AMX Mod X Adminas pridėtas");
define("_NONAME","Vardas nerastas!");
define("_NOFLAGS","Žymėjimai nerasti!");
define("_NOSTEAM","Neįraytas SteamID!");
define("_NOVALIDTIME","Galiojimo laikas nerastas!");
define("_REASONSETADDED","Priežasčių rinkinys pridėtas");
define("_REASONSETDELETED","Priežasčių rinkinys ištrintas");
define("_REASONSSETSAVED","Priežasčių rinkinys išsaugotas");
define("_REASONADDED","Priežastis pridėta");
define("_REASONDELETED","Priežastis ištrinta");
define("_REASONSAVED","Priežastis išsaugota");
define("_SADMINSAVED","Serverio adminas išsaugotas");
define("_SERVERSAVED","Serverio nustatymai išsaugoti");
define("_SERVERDELETED","Serveris ištrintas");
define("_CACHEDELETED","Puslapio kešas išvalytas");
define("_LOGDELETED","Žurnalas ištrintas");
define("_MODULSAVED","Modulio nustatymai išsaugoti");
define("_CONFIGSAVED","Nustatymai išsaugoti");
define("_LEVELADDED","Lygis sukurtas");
define("_LEVELDELFAILED","Klaida:<br><br>Puslapio adminas su šitu lygiu egzistuoja!<br>Lygis negali būti ištrintas.");
define("_LEVELDELETED","Lygis ištrintas");
define("_LEVELSAVED","Lygis išsaugotas");
define("_USERMENUDELETED","Nario meniu ištrintas");
define("_USERMENUADDED","Nario meniu pridėtas");
define("_USERMENUPOSSAVED","Nario meniu pozicija išsaugota");
define("_USERMENUSAVED","Nario meniu išsaugota");
define("_WADMINSAVED","Puslapio adminas išsaugotas");
define("_WADMINDELETED","Puslapio adminas ištrintas");
define("_WADMINADDED","Puslapio adminas pridėtas");
define("_COMDELETED","Komentaras ištrintas");
define("_COMADDED","Komentaras pridėtas");
define("_COMEDITED","Komentaras redaguotas");
define("_WRONGCAPTCHA","Blogas apsaugos kodas!");
define("_FILEDELFAILED","Failas negali būti ištrintas!");
define("_FILENOTFOUND","Failas nerastas!");
define("_ERROR","Klaida");
define("_FILEEDITED","Veiksmas išsaugotas");
define("_FILENOFILE","Nėra failo!");
define("_FILETYPENOTALLOWED","Failo tipas neleistinas!");
define("_FILETOBIG","Failas perdidelis!");
define("_FILEUPLOADFAIL","Talpinimo klaida!");
define("_FILEUPLOADSUCCESS","Failas patalpintas sėkmingai");
define("_FILENOTAVAILABLE","Failas negalimas!");
define("_FILEDELSUCCESS","Failas sėkmingai ištrintas");
define("_NOREQUIREDFIELDS","Reikalingi laukai nerasti!");
define("_DBOPTIMIZED","Duomenų bazė optimizuota");
//live viewer
define("_SELECTSERVER","Pasirinkti serverį");
define("_ADDHLSW","Pridėti prie HLSW");
define("_CONNECT","Jungtis");
define("_NUMBER","#");
define("_FRAGS","Fragai");
define("_ONLINE","Laikas");
define("_ADDRESS","Adresas");
define("_MAP","Žemėlapis");
define("_NEXTMAP","Kitas žemėlapis");
define("_TIMELEFT","Laiko liko");
define("_TIMELIMIT","Laiko limitas");
define("_FRIENDLYFIRE","Komandinė ugnis");
define("_GAMETYPE","Žaidimas");
define("_ANTICHEAT","Antičytiniai įrankiai");
define("_ADDONS","Priedai");
define("_PROTOCOL","Protokolas");
define("_NOPLAYERS","Nėra žaidėjų");
define("_PLAYERCONNECTING","Žaidėjas jungiasi...");
define("_SERVEROFFLINE","Serveris nepasiekiamas");
define("_REFRESH","Atnaujinti");
define("_NOTIMELIMIT","Nėra laiko limito");
//live ban
define("_ADDBANONLINE","Pridėti tiesioginį baną");
define("_BANSETTINGS","Banų / Išmetimų Nustatymai");
define("_SHOW","Rodyti");
define("_USERID","Nario ID");
define("_STATUSNAME","Statuso vardas");
define("_BOT","Botas");
define("_PLAYER","Žaidėjas");
define("_HLTV","HLTV");
define("_UNKNOWN","nežinomas");
define("_BAN","Banas");
define("_KICK","Išmetimas");
define("_WRONGRCON","Blogas RCON slaptažodis!");
define("_PLAYERKICKED","Žaidėjas išmestas!");
define("_ADDBANSUCCESSKICK","Banas pridėtas. Žaidėjas bus išmestas!");
define("_BANANDKICK","išmesti žaidėją po bano");
define("_BANPLAYER","Ar tu tikrai nori užbaninti šitą žaidėją?");
define("_KICKPLAYER","Ar tu tikrai nori išmesti šitą žaidėją?");
//title
define("_TITLEADMIN","Adminų paskirstymas");
define("_TITLEADMINLIST","Adminų sąrašas");
define("_TITLEBANLIST","Banų sąrašas");
define("_TITLELOGIN","Jungtis");
define("_TITLESEARCH","Ieškoti");
define("_TITLEVIEW","Tiesioginė serverio statistika");
define("_TITLEBANDETAIL","Detalės");
define("_TITLEBANADD","Pridėti baną");
define("_TITLEBANADDONLINE","pridėti tiesioginį baną");
define("_TITLEAMXADMINS","AMXModX Adminai");
define("_TITLEREASONS","Banų priežastys");
define("_TITLESERVERADMINS","Serverio adminai");
define("_TITLESERVER","Serveris");
define("_TITLEINFO","Informacija");
define("_TITLELOGS","Žurnalai");
define("_TITLEMODULE","Modulis");
define("_TITLEUPDATE","Versijos patikrinimas");
define("_TITLEUSERLEVEL","Nario lygis");
define("_TITLESITE","Puslapio nustatymai");
define("_TITLEUSERMENU","Nario meniu");
define("_TITLEWEBADMIN","Puslapio adminas");
//value check
define("_NOUSERNAME","Nėra nario vardo!");
define("_NOPASSWORD","Nėra slaptažodžio!");
define("_ACCESSINVALID","Priėimas negalimas!");
define("_FLAGSBCDMISSING","Žymėjimas turi būti B, C arba D!");
define("_NONICKNAME","Nėra nario niko!");
define("_NOTAG","Nėra Klanotago / Vardo!");
define("_EMAILINVALID","Blogas El. Pašto adresas!");
define("_STEAMIDINVALID","Blogas SteamID!");
define("_IPINVALID","Blogas IP Adresas!");
define("_FLAGSINVALID","Blogas žymėjimas!");
define("_USERNAMETOSHORT","Vardas pertrumpas!");
define("_USERNAMETOLONG","Vardas perilgas!");
define("_NICKNAMETOSHORT","Nickas pertrumpas!");
define("_NICKNAMETOLONG","Nickas perilgas!");
define("_PASSWORDTOSHORT","Slaptažodis pertrumpas!");
define("_PASSWORDTOLONG","Slaptažodis perilgas!");
define("_NOREASONSET","Neįrašyta bano priežastis!");
define("_REASONSETTOSHORT","Banų grupės vardas per trumpas!");
define("_REASONSETTOLONG","Banų grupės vardas per ilgas!");
define("_NOREASON","Neįrašyta bano priežastis!");
define("_REASONTOSHORT","Bano priežastis pertrumpa!");
define("_REASONTOLONG","Bano priežastis perilga!");
define("_PASSWORDNOTMATCH","Tavo irašyti slaptažodžiai nesutampa!");
define("_NOCOMMENT","Neįrašytas komentaras!");
define("_NOEDITREASON","Jokia redagavimo-priežastis neįvesta!");
define("_COMMENTTOSHORT","Komentaras pertrumpas!");
define("_COMMENTTOLONG","Komentaras perilgas!");
define("_STEAMTOLONG","SteamID perilgas!");
define("_STEAMTOSHORT","SteamID pertrumpas!");
define("_NOIP","Neįrašytas IP!");
define("_IPTOLONG","IP perilgas!");
define("_IPTOSHORT","IP pertrumpas!");
//alerts
define("_SAVEEDIT","Išsaugoti pakeitimus?");
define("_DELBAN","Ar tu tikrai nori ištrinti šitą baną?");
define("_DELDEMO","Ar tu tikrai nori ištrinti šitą failą?");
define("_DELCOMMENT","Ar tu tikrai nori ištrinti šitą komentarą?");
define("_DELADMIN","Ar tu tikrai nori ištrinti šitą adminą?");
define("_DELLEVEL","Ar tu tikrai nori ištrinti šitą lygį?");
define("_DELLOGSALL","Ar tu tikrai nori ištrinti visus žurnalus?");
define("_DELLOGS","Ar tu tikrai nori ištrinti šitus žurnalus?");
define("_SAVESETTINGS","Išsaugoti nustatymus ir ijungti juos?");
define("_DATALOSS","\nDuomenys negali būti atkurti!");
define("_DELSERVER","Ar tu tikrai nori ištrinti šitą serverį?");
//motd
define("_NOEXPIREDBANS","Nėra pasibaigusių banų");
define("_YOUAREBANNED","Tu buvai užbanintas!!");
//new design related
define("_OS", "OS");
define("_VAC", "VAC");
define("_VAC_ALT", "Valve Anti-Cheat");
define("_NA", "N/A");
define("_STATS", "Statistika");
define("_PERM_BANS", "Amžini Banai");
define("_TEMP_BANS", "Laikini Banai");
define("_ACTIVE_SERVERS", "Aktyvūs serveriai");
define("_LATEST_BAN", "Paskutinis banas");
define("_LATEST_KICKS", "Paskutinis išmetimas");
define("_BROWSE_ALL", "Naršyti viską");
define("_POWERED_BY", "Powered by");
define("_DESIGN_BY", "Design by");
define("_NO_BANS", "Nėra banų duomenų bazėje");
define("_FIRST_PAGE", "Pirmasis puslapis");
define("_LAST_PAGE", "Paskutinis puslapis");
define("_PREVIOUS_PAGE", "Ankstyvesnis puslapis");
define("_NEXT_PAGE", "Kitas puslapis");
define("_PICK_DATE", "Pasirinkite datą");
define("_WEB_VERSION", "Tinklapio versija");
define("_WEBSERVER", "Tinklapio serveris");
define("_MODULES", "Moduliai");
define("_MIN_OR", "minutės arba");
define("_SIZE", "Dydis");
define("_UPD_CONNECT_ERROR", "Prisijungimas negalimas prie atnaujinimų serverio!"); 
define("_UPD_DB_ERROR", "Atnaujinimų duomenų bazė nerasta.");
define("_UPD_SELECT_ERROR", "Atnaujinimų duomenų bazė negali būti pasirinkta."); 
define("_ADMINID", "Admino SteamID");  
define("_TRACKBACK", "Trackback");
define("_YOUNOTBANNED", "Viskas gerai, jus ne uzdrausta");

?>