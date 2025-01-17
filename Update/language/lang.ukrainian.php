// Author Notes:
// This file has been translated from English to Ukrain by ***Fire*** and nato

// This is the General Language File

<?php
//encoding and locale
define("_ENCODING","Windows-1251"); //ISO-8859-1,utf-8
define("_LOCALE","uk_UA"); //de_DE,fr_FR,en_EN...

//default
define("_SHORTSECONDS", "Сек.");
define("_NOACCESS","Ви не авторизовані для перегляду цієї сторінки!");
define("_LOADTIME","Сторінка сгенерована за");
define("_BANSINDB","Кількість банів в базі даних");
define("_BY","by");
define("_OR","або");
define("_ON","включено");
define("_OFF","вимкнено");
define("_YES","так");
define("_NO","ні");
define("_OWN","свої");
define("_CLEAR","Скинути");
define("_OPENSTEAMCOMSITE","Відвідайте сторінку Steam Community");
define("_ADMINAREA","Адмінцентр");
define("_NOSITE","Сторінка не доступна!");
define("_DELETE","Видалити");
define("_ADD","Додати");
define("_EDIT","Редагувати");
define("_DEFAULTLANG","Мова за замовчуванням");
define("_OTHER","Інше");
define("_VIEWIP","показати IP");
define("_LEVEL","Рівень");
define("_DETAILS","показати подробиці");
define("_SYSTEMSETTINGS","Система");
define("_VIEWSETTINGS","Вигляд");
define("_COMMENTSETTINGS","Коментарі");
define("_FILESETTINGS","Файли");
define("_BANLISTSETTINGS","Банлист");
define("_CONFIGURATION","Конфігурація");
define("_REPAIR","Виправити");
define("_AUTO","Автоматичний");
define("_TEST","Тест");
// user menu
define("_HOME","Головна сторінка");
define("_BANLIST","Банлист");
define("_SEARCH","Пошук");
define("_SERVER","Сервер");
// info amxaccess
define("_INFO_ACCESS","Інформація доступу");
define("_ACCESSFLAGS","Прапори доступу");
define("_ACCESSPERMS","Права доступу");
define("_ACCESS_FLAGS","a - Імунітет (не може бути кікнутий/забанений тощо.) <br /> b - Резервування слотів (може використовувати зарезервовані слоти) <br /> c - Команда amx_kick <br /> d - Команда amx_ban і amx_unban <br /> e - Команда amx_slay і amx_slap <br /> f - Команда amx_map <br /> g - Команда amx_cvar (не всі CVAR'и доступні) <br /> h - Команда amx_cfg <br /> i - amx_chat й інші команди чату <br /> j - amx_vote й інші команди голосувань (Vote) <br /> k - Доступ до зміни значення команди sv_password (через команду amx_cvar) <br /> l - Доступ до amx_rcon і rcon_password (через команду amx_cvar) <br /> m - Рівень доступу A (для інших плагінів) <br /> n - Рівень доступу B <br /> o - Рівень доступу C <br /> p - Рівень доступу D <br /> q - Рівень доступу E <br /> r - Рівень доступу F <br /> s - Рівень доступу G <br /> t - Рівень доступу H <br /> u - Основний доступ <br /> z - Гравець (не Адмін) ") ;
define("_FLAG_FLAGS","a - Кік гравця при введенні невірного паролю <br /> b - Тег клану <br /> c - Для SteamID <br /> d - Для IP <br /> e - Пароль не потрібно (важливий тільки  SteamID або IP) <br /> k - Нік або тег (з урахуванням рЕгІсТрУ !).");
define("_ADDADMINTOSERVERS","Додати Админа на сервер");
define("_WITHSTATICBANTIME","з встановленим часом бану");
// main header
define("_LOGGED","Ви увійшли як");
define("_NOTLOGGED","Вхід не виконаний");
define("_LOGOUT","Вихід");
define("_LOGIN","Вхід");
define("_MENU","Меню");
// ban list
define("_DATE","Дата");
define("_PLAYER","Гравець");
define("_ADMIN","Адмін");
define("_REASON","Причина");
define("_LENGHT","Тривалість");
define("_SITE","Сторінка");
define("_BANS","Бани");
define("_BL_COMMENTS","Коментарі");
define("_BL_FILES","Файли");
define("_BL_KICKS","Кіки");
define("_TO","до");
define("_YEAR","Рік");
define("_YEARS","Року / Років");
define("_MONTH","Місяць");
define("_MONTHS","Місяця(ів)");
define("_WEEK","Тиждень");
define("_WEEKS","Тижня(ів)");
define("_DAY","День");
define("_DAYS","Дня(ів)");
define("_HOUR","Час");
define("_HOURS","Годин(и)");
define("_MIN","Хвилина");
define("_MINS","Хвилин(и)");
define("_OF","з");
define("_REMAINING","залишилося");
// ban list details
define("_PERMANENT","Назавжди");
define("_BANDETAILS","Подробиці бану");
define("_STEAMID","SteamID");
define("_STEAMCOMID","Steam Community ID");
define("_NOTAVAILABLE","Недоступно");
define("_NOSTEAMID","нема STEAM-ID");
define("_STEAMID&IP","SteamID і/або IP");
define("_HIDDEN","прихований");
define("_INVOKED","Доданий");
define("_BANLENGHT","Тривалість бану"),
define("_EXPIRES","Закінчується");
define("_NOTAPPLICABLE","Ніколи");
define("_ALREADYEXP","вже минув");
define("_IP","IP адреса");
define("_BANTYPE","Тип бану");
define("_BANBY","Забанений Адміном");
define("_BANON","Забанений на сервері");
define("_FILE_TOBIG","Занадто великий файл");
define("_FILE_TYPENOTALLOWED","Невірній тип файлу");
define("_FROM","від");
define("_DOWNLOAD","Завантажити");
define("_DOWNLOADS","Кількість завантажень");
define("_FILE","Файл");
define("_NEWFILE","Новий файл");
define("_COMMENT","Коментар");
define("_COMMENTS","Коментарі");
define("_NEWCOMMENT","Новий коментар");
define("_NOCOMMENTS","Немає коментарів");
define("_BACK","назад");
define("_TIP_EDIT","Редагувати");
define("_TIP_DEL","Видалити");
define("_TIP_DOWNLOAD","Завантажити");
define("_TIP_BACK","Назад");
define("_TIP_SENDMAIL","Відправити E-Mail");
define("_EMAIL","E-Mail");
define("_FILEUPLOAD","Залити файл");
define("_UPLOAD","Залити");
define("_ENTRYEDIT","Редагувати запис");
define("_EDITBAN","Редагувати бан");
define("_TOTALEXPBANS","Попередніх порушень");
define("_EDITCOMMENT","Редагувати коментар");
define("_ADDCOMMENT","Додати коментар");
define("_NOFILES","Немає файлів");
define("_BANDETAILSEDITS","Змінено");
define("_EDITREASON","Причина редагування");
define("_UNBANPLAYER","Розбанити");
define("_UNBANNED","Розбанений");
define("_BANHISTORY","Історія банів");
// Login
define("_USERNAME","Ім'я користувача");
define("_PASSWORD","Пароль");
define("_REMEMBERME","Запам'ятати мене");
define("_LOGINBLOCKED","Вхід заблокований!");
define("_LOGINFAILEDPW","Невірний пароль!");
define("_LOGINFAILED","Помилка при вході!");
define("_LOGINTRY","Спробувати");
define("_SEC","Секунда");
define("_SECS","Секунд");
// admins amxx
define("_AMXADMINSETTINGS","Управління AMX Mod X адмінами");
define("_NAME","Ім'я");
define("_NICKNAME","Нік");
define("_MANAGEAMXADMINS","AMX Mod X Адміни");
define("_ADDAMXADMINS","Додати AMX Mod X Адміна");
define("_ACCESS","Доступ");
define("_FLAGS","Прапори");
define("_SETTINGS","Параметри");
define("_SAVE","Зберегти");
define("_EVER","Постійний");
define("_SHOWINADMINLIST","Показувати в списку Адмінів");
define("_ADMINVALIDITY","Термін адмінства");
define("_ADMINEXPIRATION","Адмін до");
define("_CREATED","Створений");
define("_EXTENDWITH","продовжити"),
define("_STEAMIDIPNAME","SteamID / IP / Ім`я");
// server
define("_SERVERSETTINGS","Опції Сервера");
define("_MOD","Мод");
define("_RCONPW","RCON Пароль");
define("_DEL","Видалити");
define("_MOTDURL","ссилка на motd");
define("_MOTDDELAY","Затримка перед показом motd");
define("_SERVERMENU","Меню сервера");
define("_REASONSSET","Групи причин банів");
define("_HOSTNAME","Назва сервера");
define("_VERSION","Версія");
define("_LASTSEEN","був у мережі");
define("_TIMEZONEFIXX","Часовий пояс");
define("_SERVERRCON","Відсилати серверу RCON команди");
define("_RCON_RELOADADMINS","Перезавантажити список Адмінів");
define("_RCON_RESTARTMAP","Перезавантажити карту/плагіни");
define("_RCON_STATUS","Команда status");
define("_RCON_PLUGINS","Показати список AMXX плагінів");
define("_RCON_MODULES","Показати список AMXX модулів");
define("_RCON_METALIST","Показати список Metamod модулів");
define("_RCON_PREDEFINED","Стандартні налаштування");
define("_RCON_USERDEFINED","настройки користувача");
define("_RCON_SEND","Відправити");
define("_RCON_SERVERRESPONSE","Відповідь з сервера:");
define("_RCON_MAPRESTARTED","Перезавантаження карти (Команда: рестарт).");
define("_RCON_TIMEDOUT","Сервер не відповідає!");
define("_RCON_CMDDENIED","Недопустима RCON команда!");
// server admins
define("_SERVERADMINSETTINGS","Управління адмінами серверів");
define("_ADMINS","Адміни");
define("_ACTIV","Активні");
define("_CUSTOMFLAGS","Додаткові прапори");
define("_STATICBANTIME","Встановлений час бану");
define("_EDITADMINS","Редагувати Адмінів");
define("_SPECIALS","Особливості сервера");
// reasons
define("_REASONSSETTINGS","Управління причинами банів");
define("_REASONSSETS","Група причин");
define("_NEWREASON","Нова причина");
define("_SAVESET","Зберегти групу");
define("_EDITSET","Редагувати групу");
define("_REASONS","Причини");
// settings
define("_SITESETTINGS","Управління сайтом");
define("_BANNER","Банер");
define("_BANNERURL","Посилання баннера");
define("_DESIGN","Дизайн");
define("_BANSPERPAGE","Кількість банів на сторінці");
define("_NEWSET","Нова група");
define("_COOKIENAME","Назва Cookie");
define("_STARTPAGE","Стартова сторінка");
define("_SHOWCOMMENTSCOUNT","Показувати кількість коментарів");
define("_SHOWFILESCOUNT","Показувати кількість файлів");
define("_SHOWKICKCOUNT","Показувати кількість кіків");
define("_FILE_USERUPLOADALLOWED","Користувачам дозволено розміщувати файли");
define("_MAXFILESIZE","Максимальний розмір файлів");
define("_FILE_ALLOWEDTYPES","Дозволені типи файлів");
define("_COMMENTUSERALLOWEDWRITE","Користувачам дозволено писати коментарі");
define("_USECAPTURE","Використовувати Captcha");
define("_AUTOPRUNE","Автоматична оптимізація бази даних (DB Prune)");
define("_USECOMMENTSYSTEM","Дозволити коментарі");
define("_USEFILESYSTEM","Дозволити заливати файли");
define("_AUTOPRUNE_MAXOFFENCES","Максимальна кількість порушень (перед тим як гравць буде забанений назавжди).");
define("_AUTOPRUNE_MAXOFFENCES_REASON","Причина перманентного бана при досягненні макс. к-сті порушень.");
define("_MUSTBEON","має бути включено!");
// admin list
define("_ADMINSINCE","Адмін з");
define("_ADMINTO","Адмін до");
define("_UNLIMITED","необмежений");
// admins web
define("_WEBADMINADD","Додати Веб-Адміна");
define("_WEBADMINSSETTINGS","Управління Веб-адмінами");
define("_WEBADMINS","Веб-адміни");
define("_LASTLOGIN","Останній вхід");
define("_PASSWORD2","Повторіть пароль");
define("_WADMINADDEDFAILED","Не вдалося додати адміна");
define("_NEVER","ніколи");
define("_YOURPASSWORD","З міркувань безпеки, після зміни вашого паролю, вам потрібно буде виконати заново вхід в систему!");
define("_ENTERPASSWORD","Введіть новий пароль:");
define("_NEWPASSWORD","Змінити пароль");
define("_PASSWORDCHANGED","Ваш пароль було змінено!");
define("_PASSWORDCHANGEDFAILED","Спроба зміни пароля не вдалося!");
define("_EMAILSENT","Повідомлення було відправлено на вказаний вами E-Mail.");
// search
define("_SEARCHRESULT","Результати пошуку");
define("_SEARCHWITH","Пошук з");
define("_SEARCHFOR","Пошук");
define("_PLAYERSWITH","Гравці з");
define("_MOREBANSHIS","або більше банами в історії банів");
define("_ACTIVEBANS","Активні бани");
define("_EXPIREDBANS","Минулі бани");
// Admin list
define("_ADMLIST","Список Адмінів");
// captcha
define("_SCODE","Код захисту:");
define("_SCODEENTER","Будь ласка введіть захисний код:");
// update
define("_WEBVERSIONINFO","Версія веб-сайту");
define("_PLUGINVERSIONINFO","Версія модуля");
define("_VERSION_CURRENT" "Поточна версія");
define("_VERSION_RELEASE","Остання версія");
define("_VERSION_BETA","Поточна бета версія");
define("_LASTCHANGELOG","Список змін"); 
define("_WEB","Веб-сайт");
define("_YOURWEB","Ваш Веб-сайт");
define("_PLUGIN","AMX Mod X Плагін");
define("_UPDATE_RECOMMENDED","Доступно оновлення!");
define("_UPDATE_NOTNEEDED","Оновлення не потрібне");
define("_WEBUPDATE_RECOMMENDED","Рекомендується оновити версію Веб-сайту!");
define("_PLUGINUPDATE_RECOMMENDED","Рекомендується оновити AMX Mod X Додаток!");
// admin menu
define("_MENUHOME","Головна сторінка Адмінцентру");
define("_MENUMAINSERVER","Сервер");
define("_MENUMAINWEB","Веб-сайт");
define("_MENUMAINOTHER","Інше");
define("_MENUMAINMODULE","Модуль");
define("_MENUSERVER","Сервер");
define("_MENUAMXADMINS","AMX Адміни");
define("_MENUSERVERADMINS","Призначення AMX Адмінів");
define("_MENUREASONS","Причини банів");
define("_MENUWEBCONFIG","Опції");
define("_MENUUSERLEVEL","Рівень користувача");
define("_MENUWEBADMINS","Веб Адміни");
define("_MENUUSERMENU","Меню користувача");
define("_MENUMODULE","Модуль");
define("_MENUUPDATE","Поновлення");
define("_MENUINFO","Інформація про систему");
define("_MENULOGS","Логи");
// admin user menu
define("_USERMENU","Меню користувача");
define("_USERMENUSETTINGS","Параметри меню користувача");
define("_MENULOGGEDIN","Користувач виконав вхід");
define("_MENULOGGEDOUT","Користувач вийшов"),
define("_POSITION","Місце");
define("_LANGKEY1","Мова 1");
define("_LANGKEY2","Мова 2");
define("_URL1","URL 1");
define("_URL2","URL 2");
define("_USERMENUADD","Нове меню користувача");
// admin module
define("_MODULSETTINGS","Керування модулями");
define("_MODULSETTINGS2","Опції модулів");
define("_NAMELANGKEY","Мова меню");
define("_INDEXSITE","Головна сторінка");
define("_ADMINSITE","Сторінка Адміна");
define("_TEMPLATE","Шаблон");
// admin info
define("_SERVERINFO","Інформація про сервер");
define("_SERVERSETUP","Параметри сервера");
define("_PHPMODULES","PHP Модуль");
define("_OTHERFUNCTIONS","Інші функції");
define("_STATISTIK","Статистика");
define("_CLEARCACHE","Очистити кеш");
define("_DBSIZE","Розмір бази даних");
define("_DBOPTIMIZE","Оптимізація бази даних");
define("_OPTIMIZE","Оптимізувати");
define("_PRUNEDB","Оптимізувати бани");
define("_PRUNE","Оптимізувати");
define("_DBPRUNED","Бани оптимізовані");
// user level
define("_ADMINLEVELSETTINGS","Управління рівнем Веб-Адмінів");
define("_AMXADMINS","AMX Адміни");
define("_WEBSETTINGS","Опції Веб-сайту");
define("_LEVELVIEW","Показати");
define("_LEVELUNBAN","Розбанити");
define("_LEVELIMPORT","Імпорт");
define("_LEVELEXPORT","Експорт");
define("_PERM","Рівні веб-адмінів");
define("_DBPRUNE","Оптимізація бази даних");
define("_SERVEREDIT","Редагувати сервер");
define("_NEWLEVEL","Новий рівень");
define("_YOURLEVEL","Ваш рівень:");
// admin logs
define("_LOGS","Логи Веб-сайту");
define("_FILTER","Фільтр");
define("_ALL","Всі логи");
define("_OLDERTHEN","Логи старше ніж");
define("_GO","Продовжити");
define("_ACTION","Виконати");
define("_ACTIONLOGS","Виконано");
define("_REMARKS","Опис");
define("_USER","Користувач");
// add ban
define("_ADDBAN","Додати бан");
define("_NEWBAN","Додати новий бан");
define("_NOBANNAME","Ім'я не введено!");
define("_ACTIVBANEXISTS","Активний бан вже є!");
// messages
define("_BANADDSUCCESS" "Бан успішно додано");
define("_BANEDITED","Бан збережено");
define("_AMXADMINSAVESUCCESS","AMX Mod X Адміна успішно збережено");
define("_AMXADMINDELETED","AMX Mod X Адміна видалено");
define("_AMXADMINADDED","AMX Mod X Адміна додано");
define("_NONAME","Відсутній нік!");
define("_NOFLAGS","Відсутні флаги!");
define("_NOSTEAM","SteamID не введено!");
define("_NOVALIDTIME","Відсутній час адміністрування!");
define("_REASONSETADDED","Група причин додана");
define("_REASONSETDELETED","група причин відсутня");
define("_REASONSSETSAVED","Група причин збережена");
define("_REASONADDED","Причина додана");
define("_REASONDELETED","Причина виделена");
define("_REASONSAVED","Причина збережена");
define("_SADMINSAVED","Адмін сервера збережений");
define("_SERVERSAVED","Параметри сервера збережено");
define("_SERVERDELETED","Сервер видалено");
define("_CACHEDELETED","Кеш Веб-сайту видалено");
define("_LOGDELETED","Логи видалені");
define("_MODULSAVED","Параметри модуля збережено");
define("_CONFIGSAVED","Параметри збережено");
define("_LEVELADDED","Рівень створено");
define("_LEVELDELFAILED","Помилка: <br> <br> Веб-Адмін(и) з цим рівнем доступу все ще існує(ють)! <br> Рівень не може бути знищений.");
define("_LEVELDELETED","Рівень видалено");
define("_LEVELSAVED","Рівень збережений");
define("_USERMENUDELETED","Меню користувача видалено");
define("_USERMENUADDED","Меню користувача додано");
define("_USERMENUPOSSAVED","Розташування меню користувача збережено");
define("_USERMENUSAVED","Меню користувача збережено");
define("_WADMINSAVED","Веб-Адмін збережений");
define("_WADMINDELETED","Веб-Адміна видалено");
define("_WADMINADDED","Веб-Адміна додано");
define("_COMDELETED","Коментар видалено");
define("_COMADDED","Коментар додано");
define("_COMEDITED","Коментар змінено");
define("_WRONGCAPTCHA","Невірний захисний код!");
define("_FILEDELFAILED","Файл неможливо видалити!");
define("_FILENOTFOUND","Файл не знайдено!");
define("_ERROR","Помилка");
define("_FILEEDITED","Зміни збережені");
define("_FILENOFILE","Немає файлу!");
define("_FILETYPENOTALLOWED","Невірний тип файлу!");
define("_FILETOBIG","Файл надто великий!");
define("_FILEUPLOADFAIL","Помилка завантаження файла!");
define("_FILEUPLOADSUCCESS","Файл успішно завантажено");
define("_FILENOTAVAILABLE","Файл недоступний!");
define("_FILEDELSUCCESS","Файл успішно видалено");
define("_NOREQUIREDFIELDS","Обов'язкові для заповнення поля відсутні!");
define("_DBOPTIMIZED","База даних оптимізована");
// live viewer
define("_SELECTSERVER","Вибір сервера");
define("_ADDHLSW","Додати в HLSW");
define("_CONNECT","Помилка з'єднання");
define("_NUMBER","#");
define("_FRAGS","Вбивств");
define("_ONLINE","Час");
define("_ADDRESS","Адреса");
define("_MAP","Карта");
define("_NEXTMAP","Наступна картка");
define("_TIMELEFT","Залишилося часу");
define("_TIMELIMIT","Обмеження часу");
define("_FRIENDLYFIRE","Дружній вогонь");
define("_GAMETYPE","Гра");
define("_ANTICHEAT","Анти-чіт");
define("_ADDONS","Аддони");
define("_PROTOCOL","Протокол");
define("_NOPLAYERS","Немає гравців"),
define("_PLAYERCONNECTING","Гравець з'єднується ...");
define("_SERVEROFFLINE","Сервер недоступний");
define("_REFRESH","Оновити");
define("_NOTIMELIMIT","немає обмеження часу");
// live ban
define("_ADDBANONLINE","Додати онлайн бан");
define("_BANSETTINGS","Опції банів/кіків");
define("_SHOW","Показати");
define("_USERID","ID користувача");
define("_STATUSNAME","Нік");
define("_BOT","Бот"),
define("_PLAYER","Гравець");
define("_HLTV","HLTV");
define("_UNKNOWN","невідомо");
define("_BAN","Бан");
define("_KICK","Кік");
define("_WRONGRCON","Невірний RCON пароль!");
define("_PLAYERKICKED","Гравця Кікнуто!");
define("_ADDBANSUCCESSKICK","Бан додано. Гравця буде Кікнуто!");
define("_BANANDKICK","Кік гравця після бана");
define("_BANPLAYER","Ви дійсно хочете забанити цього гравця?");
define("_KICKPLAYER","Ви дійсно хочете кікнути цього гравця?");
// title
define("_TITLEADMIN","Призначення Адмінів");
define("_TITLEADMINLIST","Список Адмінів");
define("_TITLEBANLIST","Банлист");
define("_TITLELOGIN","Вхід");
define("_TITLESEARCH","Пошук");
define("_TITLEVIEW","Статус серверів");
define("_TITLEBANDETAIL","Деталі");
define("_TITLEBANADD","Додати бан");
define("_TITLEBANADDONLINE","Додати онлайн бан");
define("_TITLEAMXADMINS","AMX Mod X Адміни");
define("_TITLEREASONS","Причини банів");
define("_TITLESERVERADMINS","Адміни сервера");
define("_TITLESERVER","Сервер");
define("_TITLEINFO","Інформація");
define("_TITLELOGS","Логи");
define("_TITLEMODULE","Модулі");
define("_TITLEUPDATE","Перевірка версії");
define("_TITLEUSERLEVEL","Рівень користувача");
define("_TITLESITE","Параметри сторінки");
define("_TITLEUSERMENU","Меню користувача");
define("_TITLEWEBADMIN","Веб-Адмін");
// value check
define("_NOUSERNAME","Не введене ім'я користувача!");
define("_NOPASSWORD","Не введений пароль!");
define("_ACCESSINVALID","Відмовлено у доступі!");
define("_FLAGSBCDMISSING","Флаг повинен бути B, C або D!");
define("_NONICKNAME","Не введено нік!");
define("_NOTAG","Не введений тег клану/ім'я!");
define("_EMAILINVALID","Невірна E-Mail адреса!");
define("_STEAMIDINVALID","Невірний SteamID!");
define("_IPINVALID","Невірна IP адреса!");
define("_FLAGSINVALID","Флаги не повні!");
define("_USERNAMETOSHORT","Закоротке  ім'я!");
define("_USERNAMETOLONG","Задовге ім'я!");
define("_NICKNAMETOSHORT","Занадто короткий нік!");
define("_NICKNAMETOLONG","Занадто довгий нік!");
define("_PASSWORDTOSHORT","Занадто короткий пароль!");
define("_PASSWORDTOLONG","Занадто довгий пароль!");
define("_NOREASONSET","Не введена причина!");
define("_REASONSETTOSHORT","Дуже коротка назва групи причин!");
define("_REASONSETTOLONG","надто довга назва групи причин!");
define("_NOREASON","Не введена причина бана!");
define("_REASONTOSHORT","Занадто коротка причина бана!");
define("_REASONTOLONG","Занадто довга причина бана!");
define("_PASSWORDNOTMATCH","Паролі, введені вами, не збігаються!");
define("_NOCOMMENT","Коментар не написано!");
define("_NOEDITREASON","Не введено причини редагування!");
define("_COMMENTTOSHORT","Коментар занадто короткий!");
define("_COMMENTTOLONG","Коментар занадто довгий!");
define("_STEAMTOLONG","SteamID занадто довгий!");
define("_STEAMTOSHORT","SteamID занадто короткий!");
define("_NOIP","Не введена IP адреса!");
define("_IPTOLONG","IP адреса занадто довга!");
define("_IPTOSHORT","IP адреса занадто коротка!");
// alerts
define("_SAVEEDIT","Зберегти зміни?");
define("_DELBAN","Ви дійсно хочете видалити цей бан?");
define("_DELDEMO","Ви дійсно хочете видалити цей файл?");
define("_DELCOMMENT","Ви дійсно хочете видалити цей коментар?");
define("_DELADMIN","Ви дійсно хочете видалити цього Адміна?");
define("_DELLEVEL","Ви дійсно хочете видалити цей рівень?");
define("_DELLOGSALL","Ви дійсно хочете видалити всі логи?");
define("_DELLOGS","Ви дійсно хочете видалити ці логи?");
define("_SAVESETTINGS","Зберегти параметри і застосувати їх?");
define("_DATALOSS","\nДанні НЕ можуть бути відновлені!");
define("_DELSERVER","Ви дійсно хочете видалити цей сервер?");
// motd
define("_NOEXPIREDBANS","Нема минулих банів");
define("_YOUAREBANNED","Ви забанені!!!");
//new design related
define("_OS","ОС");
define("_VAC","VAC");
define("_VAC_ALT","Valve Anti-Cheat");
define("_NA","N / A");
define("_STATS","Статистика");
define("_PERM_BANS","Постійні бани");
define("_TEMP_BANS","Тимчасові бани");
define("_ACTIVE_SERVERS","Активні сервера");
define("_LATEST_BAN","Останні бани");
define("_LATEST_KICKS","Останні Кікі");
define("_BROWSE_ALL","Переглянути все");
define("_POWERED_BY","Працює на");
define("_DESIGN_BY","Дизайн");
define("_NO_BANS","У базі даних відсутні бани");
define("_FIRST_PAGE","Перша сторінка");
define("_LAST_PAGE","Остання сторінка");
define("_PREVIOUS_PAGE","Попередня сторінка");
define("_NEXT_PAGE","Наступна сторінка");
define("_PICK_DATE","Виберіть дату");
define("_WEB_VERSION","Версія вебсайту");
define("_WEBSERVER","Вебсервер");
define("_MODULES","Модулі");
define("_MIN_OR","хв. або");
define("_SIZE","Розмір");
define("_UPD_CONNECT_ERROR","Неможливо з'єднатися із сервером поновлення"); 
define("_UPD_DB_ERROR","База даних оновлень не знайдена.");
define("_UPD_SELECT_ERROR","База даних оновлень не може бути обрана.");
define("_ADMINID","SteamID адмiнiстратора"); 
define("_TRACKBACK", "Trackback");
define("_YOUNOTBANNED", "Все добре, не хвилюйтесь, ви не забанені.");
?>