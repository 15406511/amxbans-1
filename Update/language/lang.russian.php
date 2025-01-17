﻿// Author Notes:
// This file has been translated from English to Russian by IzI from http://games.zb.lv

// This is the General Language File

<?php
//encoding and locale
define("_ENCODING","UTF-8"); //ISO-8859-1,utf-8
define("_LOCALE","ru_RU"); //de_DE,fr_FR,en_EN...

//default
define("_SHORTSECONDS","сек.");
define("_NOACCESS","Вы не авторизованны для просмотра этой страницы!");
define("_LOADTIME","Страница сгенерирована за");
define("_BANSINDB","Кол-во банов в базе данных");
define("_BY","by");
define("_OR","или");
define("_ON","Включено");
define("_OFF","Выключено");
define("_YES","Да");
define("_NO","Нет");
define("_OWN","Свои");
define("_CLEAR","Сбросить");
define("_OPENSTEAMCOMSITE","Посетите страницу Steam Community");
define("_ADMINAREA","Админцентр");
define("_NOSITE","Страница не доступна!");
define("_DELETE","Удалить");
define("_ADD","Добавить");
define("_EDIT","Редактировать");
define("_DEFAULTLANG","Язык по умолчанию");
define("_OTHER","Другие");
define("_VIEWIP","Показать IP");
define("_LEVEL","Уровень");
define("_DETAILS","Показать подробности");
define("_SYSTEMSETTINGS","Система");
define("_VIEWSETTINGS","Вид");
define("_COMMENTSETTINGS","Комментарии");
define("_FILESETTINGS","Файлы");
define("_BANLISTSETTINGS","Банлист");
define("_CONFIGURATION","Конфигурация");
define("_REPAIR","Исправить");
define("_AUTO","Автоматический");
define("_TEST","Тест");
//user menu
define("_HOME","Главная страница");
define("_BANLIST","Банлист");
define("_SEARCH","Поиск");
define("_SERVER","Сервер");
//info amxaccess
define("_INFO_ACCESS","Информация доступа");
define("_ACCESSFLAGS","Флаги доступа");
define("_ACCESSPERMS","Права доступа");
define("_ACCESS_FLAGS","a - Иммунитет (не может быть кикнут / забанен и т.д)<br />b - Резервирование слотов (может использовать зарезервированные слоты)<br />c - Команда amx_kick<br />d - Команда amx_ban и amx_unban<br />e - Команда amx_slay и amx_slap<br />f - Команда amx_map<br />g - Команда amx_cvar (не все CVAR'ы доступны)<br />h - Команда amx_cfg<br />i - amx_chat и другие команды чата<br />j - amx_vote и другие команды голосований (Vote)<br />k - Доступ к изменению значения команды sv_password (через команду amx_cvar)<br />l - Доступ к amx_rcon и rcon_password (через команду amx_cvar)<br />m - Уровень доступа A (для иных плагинов)<br />n - Уровень доступа B<br />o - Уровень доступа C<br />p - Уровень доступа D<br />q - Уровень доступа E<br />r - Уровень доступа F<br />s - Уровень доступа G<br />t - Уровень доступа H<br />u - Основной доступ<br />z - Игрок (не администратор)");
define("_FLAG_FLAGS","a - Кикать игрока при вводе некорректного пароля<br />b - Тег клана<br />c - Для SteamID<br />d - Для IP<br />e - Пароль не требуется (важен только SteamID либо IP )<br />k - Имя или тег (С УчёТом РеГистРа!).");
define("_ADDADMINTOSERVERS","Добавить админа на сервер");
define("_WITHSTATICBANTIME","Использовать только указанные сроки банов");
//main header
define("_LOGGED","Вы вошли как");
define("_NOTLOGGED","Вход не выполнен");
define("_LOGOUT","Выход");
define("_LOGIN","Вход");
define("_MENU","Меню");
//ban list
define("_DATE","Дата");
define("_PLAYER","Игрок");
define("_ADMIN","Админ");
define("_REASON","Причина");
define("_LENGHT","Срок");
define("_SITE","Страница");
define("_BANS","Баны");
define("_BL_COMMENTS","Комментарии");
define("_BL_FILES","Файлы");
define("_BL_KICKS","Кики");
define("_TO","к");
define("_YEAR","Год");
define("_YEARS","Года / Лет");
define("_MONTH","Месяц");
define("_MONTHS","Месяца(ев)");
define("_WEEK","Неделя");
define("_WEEKS","Недели(ь)");
define("_DAY","День");
define("_DAYS","Дня / Дней");
define("_HOUR","Час");
define("_HOURS","Часа(ов)");
define("_MIN","Минута");
define("_MINS","Минут(ы)");
define("_OF","из");
define("_REMAINING","осталось");
//ban list details
define("_PERMANENT","Навсегда");
define("_BANDETAILS","Подробности бана");
define("_STEAMID","Steam ID");
define("_STEAMCOMID","Steam Community ID");
define("_NOTAVAILABLE","Недоступно");
define("_NOSTEAMID","нет Steam ID");
define("_STEAMID&IP","IP");
define("_HIDDEN","Cкрытый");
define("_INVOKED","Добавлен");
define("_BANLENGHT","Время бана");
define("_EXPIRES","Истекает");
define("_NOTAPPLICABLE","Никогда");
define("_ALREADYEXP","Уже истёк");
define("_IP","IP Адрес");
define("_BANTYPE","Тип бана");
define("_BANBY","Забанен админом");
define("_BANON","Забанен на сервере");
define("_FILE_TOBIG","Слишком большой файл");
define("_FILE_TYPENOTALLOWED","Недопустимый тип файла");
define("_FROM","из");
define("_DOWNLOAD","Скачать");
define("_DOWNLOADS","Кол-во скачиваний");
define("_FILE","Файл");
define("_NEWFILE","Новый файл");
define("_COMMENT","Комментарий");
define("_COMMENTS","Комментарии");
define("_NEWCOMMENT","Новый комментарий");
define("_NOCOMMENTS","Нет комментариев");
define("_BACK","назад");
define("_TIP_EDIT","Редактировать");
define("_TIP_DEL","Удалить");
define("_TIP_DOWNLOAD","Скачать");
define("_TIP_BACK","Назад");
define("_TIP_SENDMAIL","Отправить E-Mail");
define("_EMAIL","E-Mail");
define("_FILEUPLOAD","Залить файл");
define("_UPLOAD","Залить");
define("_ENTRYEDIT","Редактировать запись");
define("_EDITBAN","Редактировать бан");
define("_TOTALEXPBANS","Количество нарушений");
define("_EDITCOMMENT","Редактировать комментарий");
define("_ADDCOMMENT","Добавить комментарий");
define("_NOFILES","Нет файлов");
define("_BANDETAILSEDITS","Изменено");
define("_EDITREASON","Причина редактирования");
define("_UNBANPLAYER","Разбанить");
define("_UNBANNED","Разбанен");
define("_BANHISTORY","История банов");
//Login
define("_USERNAME","Имя пользователя");
define("_PASSWORD","Пароль");
define("_REMEMBERME","Запомнить меня");
define("_LOGINBLOCKED","Вход заблокирован!");
define("_LOGINFAILEDPW","Неверный пароль!");
define("_LOGINFAILED","Ошибка при входе!");
define("_LOGINTRY","Попробовать");
define("_SEC","Секунда");
define("_SECS","Секунд");
//admins amxx
define("_AMXADMINSETTINGS","Управление AMX Mod X админами");
define("_NAME","Имя");
define("_NICKNAME","Ник");
define("_MANAGEAMXADMINS","AMX Mod X админы");
define("_ADDAMXADMINS","Добавить AMX Mod X админа");
define("_ACCESS","Доступ");
define("_FLAGS","Флаги");
define("_SETTINGS","Настройки");
define("_SAVE","Сохранить");
define("_EVER","Неограниченный срок");
define("_SHOWINADMINLIST","Виден ли в списке админов");
define("_ADMINVALIDITY","Срок администрирования");
define("_ADMINEXPIRATION","Админ до");
define("_CREATED","Создан");
define("_EXTENDWITH","Продлить");
define("_STEAMIDIPNAME","Steam ID / IP / Имя");
//server
define("_SERVERSETTINGS","Настройки Сервера");
define("_MOD","Мод");
define("_RCONPW","RCON Пароль");
define("_DEL","Удалить");
define("_MOTDURL","Ссылка на motd");
define("_MOTDDELAY","Задержка перед показом motd");
define("_SERVERMENU","Меню сервера");
define("_REASONSSET","Группы причин банов");
define("_HOSTNAME","Имя сервера");
define("_VERSION","Версия");
define("_LASTSEEN","Был в сети");
define("_TIMEZONEFIXX","Часовой пояс");
define("_SERVERRCON","Отсылать серверу RCON команды");
define("_RCON_RELOADADMINS","Перезагрузить список админов");
define("_RCON_RESTARTMAP","Перезагрузить карту / плагины");
define("_RCON_STATUS","Команда status");
define("_RCON_PLUGINS","Показать список AMXX плагинов");
define("_RCON_MODULES","Показать список AMXX модулей");
define("_RCON_METALIST","Показать список Metamod модулей");
define("_RCON_PREDEFINED","Стандартные настройки");
define("_RCON_USERDEFINED","Пользовательские настройки");
define("_RCON_SEND","Отправить");
define("_RCON_SERVERRESPONSE","Ответ с сервера:");
define("_RCON_MAPRESTARTED","Перезагрузка карты (Команда: рестарт).");
define("_RCON_TIMEDOUT","Сервер не отвечает!");
define("_RCON_CMDDENIED","Недопустимая RCON команда!");
//server admins
define("_SERVERADMINSETTINGS","Управление админами серверов");
define("_ADMINS","Админы");
define("_ACTIV","Активные");
define("_CUSTOMFLAGS","дополнительные флаги");
define("_STATICBANTIME","Установленное время бана");
define("_EDITADMINS","Редактировать админов");
define("_SPECIALS","Особенности сервера");
//reasons
define("_REASONSSETTINGS","Управление причинами банов");
define("_REASONSSETS","Группа причин");
define("_NEWREASON","Новая причина");
define("_SAVESET","Сохранить группу");
define("_EDITSET","Редактировать группу");
define("_REASONS","Причины");
//settings
define("_SITESETTINGS","Управление сайтом");
define("_BANNER","Баннер");
define("_BANNERURL","Ссылка баннера");
define("_DESIGN","Дизайн");
define("_BANSPERPAGE","Кол-во банов на странице");
define("_NEWSET","Новая группа");
define("_COOKIENAME","Название Cookie");
define("_STARTPAGE","Стартовая страница");
define("_SHOWCOMMENTSCOUNT","Показывать число комментариев");
define("_SHOWFILESCOUNT","Показывать число файлов");
define("_SHOWKICKCOUNT","Показывать число киков");
define("_FILE_USERUPLOADALLOWED","Пользователям разрешено загружать файлы");
define("_MAXFILESIZE","Максимальный размер файлов");
define("_FILE_ALLOWEDTYPES","Разрешенные типы файлов");
define("_COMMENTUSERALLOWEDWRITE","Пользователям разрешено писать комментарии");
define("_USECAPTURE","Использовать Captcha");
define("_AUTOPRUNE","Автоматическая оптимизация базы данных (DB Prune)");
define("_USECOMMENTSYSTEM","Разрешить комментарии");
define("_USEFILESYSTEM","Разрешить загружать файлы");
define("_AUTOPRUNE_MAXOFFENCES","Максимальное кол-во нарушений (перед тем как игрока забанит навсегда).");
define("_AUTOPRUNE_MAXOFFENCES_REASON","Причина перманентного бана при достижении макс. кол-ва нарушений.");
define("_MUSTBEON","должно быть включёно!");
//admin list
define("_ADMINSINCE","Админ с");
define("_ADMINTO","Админ до");
define("_UNLIMITED","Неограниченный срок");
//admins web
define("_WEBADMINADD","Добавить Веб-админа");
define("_WEBADMINSSETTINGS","Управление Веб-админами");
define("_WEBADMINS","Веб-админы");
define("_LASTLOGIN","Последний вход");
define("_PASSWORD2","Повторите пароль");
define("_WADMINADDEDFAILED","Не удалось добавить админа.");
define("_NEVER","никогда");
define("_YOURPASSWORD","Из соображений безопасности, после смены вашего пароля, вам нужно будет выполнить заново вход в систему!");
define("_ENTERPASSWORD","Введите новый пароль:");
define("_NEWPASSWORD","Сменить пароль");
define("_PASSWORDCHANGED","Ваш пароль был изменён!");
define("_PASSWORDCHANGEDFAILED","Попытка смены пароля не удалась!");
define("_EMAILSENT","Сообщение было отправлено на указанный вами E-Mail.");
//search
define("_SEARCHRESULT","Результаты поиска");
define("_SEARCHWITH","Поиск c");
define("_SEARCHFOR","Поиск");
define("_PLAYERSWITH","Игроки с");
define("_MOREBANSHIS","или больше банов в истории");
define("_ACTIVEBANS","Активные баны");
define("_EXPIREDBANS","Истёкшие баны");
//Admin list
define("_ADMLIST","Список админов");
//captcha
define("_SCODE","Защитный код:");
define("_SCODEENTER","Пожалуйста, введите защитный код:");
//update
define("_WEBVERSIONINFO","Версия веб-сайта");
define("_PLUGINVERSIONINFO","Версия плагина");
define("_VERSION_CURRENT","Текущая версия");
define("_VERSION_RELEASE","Последний релиз");
define("_VERSION_BETA","Текущая бета-версия");
define("_LASTCHANGELOG","Список изменений"); 
define("_WEB","Веб-сайт");
define("_YOURWEB","Ваш Веб-сайт");
define("_PLUGIN","AMX Mod X Плагин");
define("_UPDATE_RECOMMENDED","Доступно обновление!");
define("_UPDATE_NOTNEEDED","Обновление не требуется");
define("_WEBUPDATE_RECOMMENDED","Рекомендуется обновить версию Веб-сайта!");
define("_PLUGINUPDATE_RECOMMENDED","Рекомендуется обновить AMX Mod X плагин!");
//admin menu
define("_MENUHOME","Главная страница админцентра");
define("_MENUMAINSERVER","Сервер");
define("_MENUMAINWEB","Веб-сайт");
define("_MENUMAINOTHER","Прочее");
define("_MENUMAINMODULE","Модуль");
define("_MENUSERVER","Сервер");
define("_MENUAMXADMINS","AMX админы");
define("_MENUSERVERADMINS","Назначение AMX админов");
define("_MENUREASONS","Причины банов");
define("_MENUWEBCONFIG","Настройки");
define("_MENUUSERLEVEL","Уровень пользователя");
define("_MENUWEBADMINS","Веб-админы");
define("_MENUUSERMENU","Меню пользователя");
define("_MENUMODULE","Модуль");
define("_MENUUPDATE","Обновление");
define("_MENUINFO","Информация о системе");
define("_MENULOGS","Логи");
//admin user menu
define("_USERMENU","Меню пользователей");
define("_USERMENUSETTINGS","Настройки меню пользователей");
define("_MENULOGGEDIN","Меню для авторизированных пользователей");
define("_MENULOGGEDOUT","Меню для неавторизированных пользователей");
define("_POSITION","Позиция");
define("_LANGKEY1","Язык 1");
define("_LANGKEY2","Язык 2");
define("_URL1","URL 1");
define("_URL2","URL 2");
define("_USERMENUADD","Новое меню пользователей");
//admin module
define("_MODULSETTINGS","Управление модулями");
define("_MODULSETTINGS2","Настройки модулей");
define("_NAMELANGKEY","Язык меню");
define("_INDEXSITE","Главная страница");
define("_ADMINSITE","Страница админа");
define("_TEMPLATE","Шаблон");
//admin info
define("_SERVERINFO","Информация о сервере");
define("_SERVERSETUP","Настройки сервера");
define("_PHPMODULES","PHP-Модуль");
define("_OTHERFUNCTIONS","Другие функции");
define("_STATISTIK","Статистика");
define("_CLEARCACHE","Очистить кеш");
define("_DBSIZE","Размер базы данных");
define("_DBOPTIMIZE","Оптимизация базы данных");
define("_OPTIMIZE","Оптимизировать");
define("_PRUNEDB","Оптимизировать баны");
define("_PRUNE","Оптимизировать");
define("_DBPRUNED","Баны оптимизированы");
//user level
define("_ADMINLEVELSETTINGS","Управление уровнями Веб-админов");
define("_AMXADMINS","AMX-админы");
define("_WEBSETTINGS","Настройки Веб-сайта");
define("_LEVELVIEW","Показать");
define("_LEVELUNBAN","Разбанить");
define("_LEVELIMPORT","Импорт");
define("_LEVELEXPORT","Экспорт");
define("_PERM","Уровни пользователей");
define("_DBPRUNE","Оптимизация базы данных");
define("_SERVEREDIT","Редактировать сервер");
define("_NEWLEVEL","Новый уровень");
define("_YOURLEVEL","Ваш уровень:");
//admin logs
define("_LOGS","Логи Веб-сайта");
define("_FILTER","Фильтр");
define("_ALL","все логи");
define("_OLDERTHEN","Логи старше чем");
define("_GO","Продолжить");
define("_ACTION","Действие");
define("_ACTIONLOGS","Выполнено");
define("_REMARKS","Описание");
define("_USER","Пользователь");
//add ban
define("_ADDBAN","Добавить бан");
define("_NEWBAN","Добавить новый бан");
define("_NOBANNAME","Имя не введено!");
define("_ACTIVBANEXISTS","Активный бан уже есть!");
//messages
define("_BANADDSUCCESS","Бан успешно добавлен");
define("_BANEDITED","Бан сохранён");
define("_AMXADMINSAVESUCCESS","AMX Mod X админ успешно сохранён");
define("_AMXADMINDELETED","AMX Mod X админ удалён");
define("_AMXADMINADDED","AMX Mod X админ добавлен");
define("_NONAME","Отсутствует имя!");
define("_NOFLAGS","Отсутствуют флаги!");
define("_NOSTEAM","SteamID не введён!");
define("_NOVALIDTIME","Отсутствует срок администраторства!"); 
define("_REASONSETADDED","Группа причин добавлена");
define("_REASONSETDELETED","Группая причин удалена");
define("_REASONSSETSAVED","Группа причин сохранена");
define("_REASONADDED","Причина добавлена");
define("_REASONDELETED","Причина удалена");
define("_REASONSAVED","Причина сохранена");
define("_SADMINSAVED","Админ сервера сохранён");
define("_SERVERSAVED","Настройки сервера сохранены");
define("_SERVERDELETED","Сервер удален"); 
define("_CACHEDELETED","Кеш Веб-сайта удалён");
define("_LOGDELETED","Логи удалены");
define("_MODULSAVED","Настройки модуля сохранены");
define("_CONFIGSAVED","Настройки сохранены");
define("_LEVELADDED","Уровень создан");
define("_LEVELDELFAILED","Ошибка:<br><br>Веб-админ(ы) с этим уровнем доступа всё еще существует(ют)!<br>Уровень не может быть удалён.");
define("_LEVELDELETED","Уровень удалён");
define("_LEVELSAVED","Уровень сохранён");
define("_USERMENUDELETED","Меню пользователя удалено");
define("_USERMENUADDED","Меню пользователя добавлено");
define("_USERMENUPOSSAVED","Расположение меню пользователя сохранено");
define("_USERMENUSAVED","Меню пользователя сохранено");
define("_WADMINSAVED","Веб-админ сохранён");
define("_WADMINDELETED","Веб-админ удалён");
define("_WADMINADDED","Веб-админ добавлен");
define("_COMDELETED","Комментарий удалён");
define("_COMADDED","Комментарий добавлен");
define("_COMEDITED","Комментарий изменён");
define("_WRONGCAPTCHA","Неверный защитный код!");
define("_FILEDELFAILED","Файл невозможно удалить!");
define("_FILENOTFOUND","Файл не найден!");
define("_ERROR","Ошибка");
define("_FILEEDITED","Изменения сохранены");
define("_FILENOFILE","Нет файла!");
define("_FILETYPENOTALLOWED","Недопустимый тип файла!");
define("_FILETOBIG","Файл слишком большой!");
define("_FILEUPLOADFAIL","Ошибка загрузки файла!");
define("_FILEUPLOADSUCCESS","Файл успешно загружен");
define("_FILENOTAVAILABLE","Файл недоступен!");
define("_FILEDELSUCCESS","Файл успешно удалён");
define("_NOREQUIREDFIELDS","Обязательные для заполнения поля отсутствуют!");
define("_DBOPTIMIZED","База данных оптимизирована");
//live viewer
define("_SELECTSERVER","Выбор сервера");
define("_ADDHLSW","Добавить в HLSW");
define("_CONNECT","Соединиться");
define("_NUMBER","#");
define("_FRAGS","Убийств");
define("_ONLINE","Время");
define("_ADDRESS","Адрес");
define("_MAP","Карта");
define("_NEXTMAP","Следующая карта");
define("_TIMELEFT","Оставшееся время");
define("_TIMELIMIT","Ограничение времени");
define("_FRIENDLYFIRE","Дружественный огонь");
define("_GAMETYPE","Игра");
define("_ANTICHEAT","Античит");
define("_ADDONS","Аддоны");
define("_PROTOCOL","Протокол");
define("_NOPLAYERS","Нет игроков");
define("_PLAYERCONNECTING","Игрок соединяется...");
define("_SERVEROFFLINE","Сервер недоступен");
define("_REFRESH","Обновить");
define("_NOTIMELIMIT","Нет ограничения времени");
//live ban
define("_ADDBANONLINE","Добавить онлайн-бан");
define("_BANSETTINGS","Настройки банов / киков");
define("_SHOW","Показать");
define("_USERID","ID пользователя");
define("_STATUSNAME","Имя");
define("_BOT","Бот");
define("_PLAYER","Игрок");
define("_HLTV","HLTV");
define("_UNKNOWN","неизвестно");
define("_BAN","Бан");
define("_KICK","Кик");
define("_WRONGRCON","Неверный RCON пароль!");
define("_PLAYERKICKED","Игрок кикнут!");
define("_ADDBANSUCCESSKICK","Бан добавлен. Игрок будет кикнут!");
define("_BANANDKICK","кик игрока после бана");
define("_BANPLAYER","Вы действительно хотите забанить этого игрока?");
define("_KICKPLAYER","Вы действительно хотите кикнуть этого игрока?");
//title
define("_TITLEADMIN","Назначение админов");
define("_TITLEADMINLIST","Список админов");
define("_TITLEBANLIST","Банлист");
define("_TITLELOGIN","Вход");
define("_TITLESEARCH","Поиск");
define("_TITLEVIEW","Статус серверов");
define("_TITLEBANDETAIL","Детали");
define("_TITLEBANADD","Добавить бан");
define("_TITLEBANADDONLINE","Добавить онлайн-бан");
define("_TITLEAMXADMINS","AMX Mod X админы");
define("_TITLEREASONS","Причины банов");
define("_TITLESERVERADMINS","Админы сервера");
define("_TITLESERVER","Сервер");
define("_TITLEINFO","Информация");
define("_TITLELOGS","Логи");
define("_TITLEMODULE","Модули");
define("_TITLEUPDATE","Проверка версии");
define("_TITLEUSERLEVEL","Уровень пользователя");
define("_TITLESITE","Настройки страницы");
define("_TITLEUSERMENU","Меню пользователя");
define("_TITLEWEBADMIN","Веб-админ");
//value check
define("_NOUSERNAME","Не введено имя пользователя!");
define("_NOPASSWORD","Не введён пароль!");
define("_ACCESSINVALID","Отказано в доступе!");
define("_FLAGSBCDMISSING","Флаг должен быть B, C или D!");
define("_NONICKNAME","Не введён ник!");
define("_NOTAG","Не введён тег клана / имя!");
define("_EMAILINVALID","Неверный E-Mail адрес!");
define("_STEAMIDINVALID","Неверный Steam ID!");
define("_IPINVALID","Неверный IP адрес!");
define("_FLAGSINVALID","Флаги недействительны!");
define("_USERNAMETOSHORT","Слишком короткое имя!");
define("_USERNAMETOLONG","Слишком длинное имя!");
define("_NICKNAMETOSHORT","Слишком короткий ник!");
define("_NICKNAMETOLONG","Слишком длинный ник!");
define("_PASSWORDTOSHORT","Слишком короткий пароль!");
define("_PASSWORDTOLONG","Слишком длинный пароль!");
define("_NOREASONSET","Не введена причина!");
define("_REASONSETTOSHORT","Слишком короткое название группы причин!");
define("_REASONSETTOLONG","Слишком длинное название группы причин!");
define("_NOREASON","Не введена причина бана!");
define("_REASONTOSHORT","Слишком короткая причина бана!");
define("_REASONTOLONG","Слишком длинная причина бана!");
define("_PASSWORDNOTMATCH","Пароли, введённые вами, не совпадают!");
define("_NOCOMMENT","Комментарий не написан!");
define("_NOEDITREASON","Вы не ввели причину редактирования");
define("_COMMENTTOSHORT","Комментарий слишком короткий!");
define("_COMMENTTOLONG","Комментарий слишком длинный!");
define("_STEAMTOLONG","SteamID слишком длинный!");
define("_STEAMTOSHORT","SteamID слишком короткий!");
define("_NOIP","Не введён IP-адрес!");
define("_IPTOLONG","IP-адрес слишком длинный!");
define("_IPTOSHORT","IP-адрес слишком короткий!");
//alerts
define("_SAVEEDIT","Сохранить изменения?");
define("_DELBAN","Вы действительно хотите удалить этот бан?");
define("_DELDEMO","Вы действительно хотите удалить этот файл?");
define("_DELCOMMENT","Вы действительно хотите удалить этот комментарий?");
define("_DELADMIN","Вы действительно хотите удалить этого админа?");
define("_DELLEVEL","Вы действительно хотите удалить этот уровень?");
define("_DELLOGSALL","Вы действительно хотите удалить все логи?");
define("_DELLOGS","Вы действительно хотите удалить эти логи?");
define("_SAVESETTINGS","Сохранить настройки и применить их?");
define("_DATALOSS","\nДанные НЕ могут быть восстановлены!");
define("_DELSERVER","Вы действительно хотите удалить этот сервер?");
//motd
define("_NOEXPIREDBANS","Нет истёкших банов");
define("_YOUAREBANNED","Вы забанены!");
//new design related
define("_OS", "ОС");
define("_VAC", "VAC");
define("_VAC_ALT", "Valve Anti-Cheat");
define("_NA", "N/A");
define("_STATS", "Статистика");
define("_PERM_BANS", "Перманентные баны");
define("_TEMP_BANS", "Временные баны");
define("_ACTIVE_SERVERS", "Активные сервера");
define("_LATEST_BAN", "Последние баны");
define("_LATEST_KICKS", "Последние кики");
define("_BROWSE_ALL", "Просмотреть все");
define("_POWERED_BY", "Сгенерировано");
define("_DESIGN_BY", "Дизайн");
define("_NO_BANS", "В базе данных баны отсутствуют");
define("_FIRST_PAGE", "Первая страница");
define("_LAST_PAGE", "Последняя страница");
define("_PREVIOUS_PAGE", "Предыдущая страница");
define("_NEXT_PAGE", "Следующая страница");
define("_PICK_DATE", "Выберите дату");
define("_WEB_VERSION", "Версия вебсайта");
define("_WEBSERVER", "Вебсервер");
define("_MODULES", "Модули");
define("_MIN_OR", "мин. или");
define("_SIZE", "Размер");
define("_UPD_CONNECT_ERROR", "Невозможно установить соединение с сервером обновления"); 
define("_UPD_DB_ERROR", "База данных обновлений не найдена.");
define("_UPD_SELECT_ERROR", "База данных обновлений не может быть выбрана.");
define("_ADMINID", "SteamID администратора"); 
define("_TRACKBACK", "Trackback");
define("_YOUNOTBANNED", "Не волнуйтесь, все хорошо. Вы не в бане.");
?>