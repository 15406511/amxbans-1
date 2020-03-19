// Author Notes:
// This file has been translated from English to Brazilian Portuguese by RAFAAA from www.sod-cs.com, fixed by Seta00 from instantsfun.es/lazor

// This is the General Language File

<?php
//encoding and locale
define("_ENCODING","utf-8"); //ISO-8859-1,utf-8
define("_LOCALE","pt_BR"); //de_DE,fr_FR,en_EN...

//default
define("_RELEASE_BY","Lancamento");
define("_SHORTSECONDS","Seg.");
define("_NOACCESS","Você não está autorizado a visualizar esta página!");
define("_LOADTIME","Página gerada em");
define("_BANSINDB","Bans na base de dados");
define("_BY","por");
define("_OR","ou");
define("_ON","on");
define("_OFF","off");
define("_YES","sim");
define("_NO","não");
define("_OWN","Próprio");
define("_CLEAR","Resetar");
define("_OPENSTEAMCOMSITE","Visitar página na Comunidade STEAM");
define("_ADMINAREA","Área de Administração");
define("_NOSITE","Página não disponível!");
define("_DELETE","Deletar");
define("_ADD","Adicionar");
define("_EDIT","Editar");
define("_DEFAULTLANG","Idioma Padrão");
define("_OTHER","outros");
define("_VIEWIP","Mostrar IP");
define("_LEVEL","Nível");
define("_DETAILS","Mostrar Detalhes");
define("_SYSTEMSETTINGS","Sistema");
define("_VIEWSETTINGS","Visualizar");
define("_COMMENTSETTINGS","Comentários");
define("_FILESETTINGS","Arquivos");
define("_BANLISTSETTINGS","Lista de Bans");
define("_CONFIGURATION","Configuração");
define("_REPAIR","Reparar");
define("_AUTO","Automático");
define("_TEST","Testar");
//user menu
define("_HOME","Página Principal");
define("_BANLIST","Lista de Bans");
define("_SEARCH","Pesquisar");
define("_SERVER","Servidor");
//info amxaccess
define("_INFO_ACCESS","Informações de Acesso");
define("_ACCESSFLAGS","Atributos de Acesso");
define("_ACCESSPERMS","Permissões de Acesso");
define("_ACCESS_FLAGS","a - Imunidade (não pode ser kickado / banido etc)<br />b - Vaga Reservada (pode utilizar slots reservados)<br />c - Comando amx_kick<br />d - Comandos amx_ban e amx_unban<br />e - Comandos amx_slay e amx_slap<br />f - Comando amx_map<br />g - Comando amx_cvar (NÃO dá acesso a TODAS as CVARS)<br />h - Comando amx_cfg<br />i - Comandos de chat amx_chat e outros<br />j - Comandos amx_vote e outros comandos de votação<br />k - Accesso à cvar sv_password (através do comando amx_cvar)<br />l - Accesso ao comando amx_rcon e à cvar rcon_password (através do comando amx_cvar)<br />m - Nível de Usuário A (para outros plugins)<br />n - Nível de Usuário B<br />o - Nível de Usuário C<br />p - Nível de Usuário D<br />q - Nível de Usuário E<br />r - Nível de Usuário F<br />s - Nível de Usuário G<br />t - Nível de Usuário H<br />u - Acesso ao Menu<br />z - Usuário (não é admin)");
define("_FLAG_FLAGS","a - kicka o jogador ao digitar senha incorreta<br />b - tag do clã<br />c - utilizar STEAM-ID<br />d - utilizar IP<br />e - não utilizar senha (apenas STEAM-ID / IP necessários)<br />k - nome ou tag (sensível a letras maiúsculas/minúsculas)).");
define("_ADDADMINTOSERVERS","Adicionar Admin ao Servidor");
define("_WITHSTATICBANTIME","com tempo de ban estático");
//main header
define("_LOGGED","Autenticado como");
define("_NOTLOGGED","Usuário Não-Autenticado");
define("_LOGOUT","Sair");
define("_LOGIN","Autenticar");
define("_MENU","Menu");
//ban list
define("_DATE","Data");
define("_PLAYER","Jogador");
define("_ADMIN","Admin");
define("_REASON","Motivo");
define("_LENGHT","Tempo");
define("_SITE","Página");
define("_BANS","Bans");
define("_BL_COMMENTS","Comentários");
define("_BL_FILES","Arquivos");
define("_BL_KICKS","Kicks");
define("_TO","até");
define("_YEAR","Ano");
define("_YEARS","Anos");
define("_MONTH","Mês");
define("_MONTHS","Meses");
define("_WEEK","Semana");
define("_WEEKS","Semanas");
define("_DAY","Dia");
define("_DAYS","Dias");
define("_HOUR","Hora");
define("_HOURS","Horas");
define("_MIN","Minuto");
define("_MINS","Minutos");
define("_OF","de");
define("_REMAINING","restando");
//ban list details
define("_PERMANENT","Permanente");
define("_BANDETAILS","Detalhes do Ban");
define("_STEAMID","SteamID");
define("_STEAMCOMID","ID da Comunidade STEAM");
define("_NOTAVAILABLE","Indisponível");
define("_NOSTEAMID","sem STEAM-ID");
define("_STEAMID&IP","IP");
define("_HIDDEN","oculto");
define("_INVOKED","Aplicado em");
define("_BANLENGHT","Duração");
define("_EXPIRES","Expira em");
define("_NOTAPPLICABLE","Não aplicável");
define("_ALREADYEXP","já expirado");
define("_IP","Endereço IP");
define("_BANTYPE","Tipo de Ban");
define("_BANBY","Banido por");
define("_BANON","Banido no");
define("_FILE_TOBIG","O arquivo é muito grande");
define("_FILE_TYPENOTALLOWED","Tipo de arquivo não permitido");
define("_FROM","de");
define("_DOWNLOAD","Download");
define("_DOWNLOADS","Downloads");
define("_FILE","Arquivo");
define("_NEWFILE","Novo Arquivo");
define("_COMMENT","Comentário");
define("_COMMENTS","Comentários");
define("_NEWCOMMENT","Novo Comentário");
define("_NOCOMMENTS","Sem Comentários");
define("_BACK","voltar");
define("_TIP_EDIT","Editar");
define("_TIP_DEL","Deletar");
define("_TIP_DOWNLOAD","Download");
define("_TIP_BACK","Voltar");
define("_TIP_SENDMAIL","Enviar E-Mail");
define("_EMAIL","E-Mail");
define("_FILEUPLOAD","Enviar Arquivo");
define("_UPLOAD","Enviar");
define("_ENTRYEDIT","Editar Entrada");
define("_EDITBAN","Editar Ban");
define("_TOTALEXPBANS","Total de bans expirados");
define("_EDITCOMMENT","Editar Comentário");
define("_ADDCOMMENT","Adicionar Comentário");
define("_NOFILES","Nenhum Arquivo");
define("_BANDETAILSEDITS","Mudanças no Passado");
define("_EDITREASON","Editar Motivo");
define("_UNBANPLAYER","Desbanir");
define("_UNBANNED","Desbanido");
define("_BANHISTORY","Histórico de Bans");
//Login
define("_USERNAME","Nome de Usuário");
define("_PASSWORD","Senha");
define("_REMEMBERME","Lembrar-me");
define("_LOGINBLOCKED","Autenticação bloqueada!");
define("_LOGINFAILEDPW","Verifique sua senha!");
define("_LOGINFAILED","A autenticação falhou!");
define("_LOGINTRY","Tentar");
define("_SEC","Segundo");
define("_SECS","Segundos");
//admins amxx
define("_AMXADMINSETTINGS","Administração dos Admins do AMX Mod X");
define("_NAME","Nome");
define("_NICKNAME","Nickname");
define("_MANAGEAMXADMINS","Admins do AMX Mod X");
define("_ADDAMXADMINS","Adicionar Admins do AMX Mod X");
define("_ACCESS","Acesso");
define("_FLAGS","Permissões");
define("_SETTINGS","Configurações");
define("_SAVE","Salvar");
define("_EVER","Permanente");
define("_SHOWINADMINLIST","Visível na Lista de Admins");
define("_ADMINVALIDITY","Validade");
define("_ADMINEXPIRATION","Válido até");
define("_CREATED","Criado");
define("_EXTENDWITH","extender");
define("_STEAMIDIPNAME","SteamID / IP / Nome");
//server
define("_SERVERSETTINGS","Configurações do Servidor");
define("_MOD","Mod");
define("_RCONPW","Senha RCON");
define("_DEL","Deletar");
define("_MOTDURL","URL da MOTD");
define("_MOTDDELAY","Atraso da MOTD");
define("_SERVERMENU","Menu do Servidor");
define("_REASONSSET","Motivo de Ban Definido");
define("_HOSTNAME","Nome do Servidor");
define("_VERSION","Versão");
define("_LASTSEEN","última conexão em");
define("_TIMEZONEFIXX","Fuso-horário");
define("_SERVERRCON","Enviar comandos ao servidor (RCON)");
define("_RCON_RELOADADMINS","Recarregar Admins");
define("_RCON_RESTARTMAP","Recarregar Mapa / Plugins");
define("_RCON_STATUS","Comando de Status");
define("_RCON_PLUGINS","Mostrar Lista de Plugins do AMXX");
define("_RCON_MODULES","Mostrar Lista de Módulos do AMXX");
define("_RCON_METALIST","Mostrar Lista do Metamod");
define("_RCON_PREDEFINED","Pré-definido");
define("_RCON_USERDEFINED","Definido pelo Usuário");
define("_RCON_SEND","Enviar");
define("_RCON_SERVERRESPONSE","Retorno do Servidor:");
define("_RCON_MAPRESTARTED","O mapa será reiniciado (Comando: restart).");
define("_RCON_TIMEDOUT","Não houve retorno por parte do servidor!");
define("_RCON_CMDDENIED","Este comando de RCON é proibido!");
//server admins
define("_SERVERADMINSETTINGS","Configurações de Administrador do Servidor");
define("_ADMINS","Admins");
define("_ACTIV","ativo");
define("_CUSTOMFLAGS","permissoes especiais");
define("_STATICBANTIME","tempo de ban estático");
define("_EDITADMINS","Editar Admins");
define("_SPECIALS","Configuraões Especiais do Servidor");
//reasons
define("_REASONSSETTINGS","Administração dos Motivos de Ban");
define("_REASONSSETS","Pacotes de Motivos");
define("_NEWREASON","Novo Motivo");
define("_SAVESET","Salvar Pacote");
define("_EDITSET","Editar Pacote");
define("_REASONS","Motivos");
//settings
define("_SITESETTINGS","Administração do Site");
define("_BANNER","Banner");
define("_BANNERURL","URL do Banner");
define("_DESIGN","Design");
define("_BANSPERPAGE","Bans por Página");
define("_NEWSET","Novo Pacote");
define("_COOKIENAME","Nome do Cookie");
define("_STARTPAGE","Página Inicial");
define("_SHOWCOMMENTSCOUNT","Mostrar Número de Comentários");
define("_SHOWFILESCOUNT","Mostrar Número de Arquivos");
define("_SHOWKICKCOUNT","Mostrar Número de Kicks");
define("_FILE_USERUPLOADALLOWED","Usuários podem enviar arquivos");
define("_MAXFILESIZE","Tam. Máximo");
define("_FILE_ALLOWEDTYPES","Extensões Permitidas");
define("_COMMENTUSERALLOWEDWRITE","Usuários podem enviar comentários");
define("_USECAPTURE","Usar Captcha");
define("_AUTOPRUNE","Limpeza Automática da BD");
define("_USECOMMENTSYSTEM","Utilizar Sistema de Comentários");
define("_USEFILESYSTEM","Utilizar Sistema de Arquivos");
define("_AUTOPRUNE_MAXOFFENCES","Máximo de bans expirados antes de banir permanentemente");
define("_AUTOPRUNE_MAXOFFENCES_REASON","Motivo de ban ao atingir o número máximo de bans expirados");
define("_MUSTBEON","deve estar habilitado!");
//admin list
define("_ADMINSINCE","Admin desde");
define("_ADMINTO","Admin até");
define("_UNLIMITED","permanentemente");
//admins web
define("_WEBADMINADD","Adicionar Admin Web");
define("_WEBADMINSSETTINGS","Administração de Admins Web");
define("_WEBADMINS","Admins Web");
define("_LASTLOGIN","última autenticação");
define("_PASSWORD2","Digite Novamente sua Senha");
define("_WADMINADDEDFAILED","Falha ao Adicionar. Há valores duplicados?");
define("_NEVER","nunca");
define("_YOURPASSWORD","Por motivos de segurança, você será desconectado ao mudar a própria senha!");
define("_ENTERPASSWORD","Digite a Nova Senha:");
define("_NEWPASSWORD","Modificar Senha");
define("_PASSWORDCHANGED","A senha foi modificada!");
define("_PASSWORDCHANGEDFAILED","A mudança de senha falhou!");
define("_EMAILSENT","Um E-Mail foi enviado para o endereço que você informou.");
//search
define("_SEARCHRESULT","Resultados da Pesquisa");
define("_SEARCHWITH","Pesquisar com");
define("_SEARCHFOR","Pesquisar por");
define("_PLAYERSWITH","Jogadores com");
define("_MOREBANSHIS","um ou mais bans em seu histórico");
define("_ACTIVEBANS","Bans Ativos");
define("_EXPIREDBANS","Bans Expirados");
//Admin list
define("_ADMLIST","Lista de Admins");
//captcha
define("_SCODE","Código de Segurança:");
define("_SCODEENTER","Por favor, insira o código de segurança:");
//update
define("_WEBVERSIONINFO","Versão do Website");
define("_PLUGINVERSIONINFO","Versão do Plugin");
define("_VERSION_CURRENT","Atual");
define("_VERSION_RELEASE","Última Versão");
define("_VERSION_BETA","Último Beta");
define("_LASTCHANGELOG","Log das versões"); 
define("_WEB","Website");
define("_YOURWEB","Seu Website");
define("_PLUGIN","Plugin do AMX Mod X");
define("_UPDATE_RECOMMENDED","Atulização Recomendada!");
define("_UPDATE_NOTNEEDED","Atualização não é necessária");
define("_WEBUPDATE_RECOMMENDED","Atualização Web recomendada!");
define("_PLUGINUPDATE_RECOMMENDED","Atualização do Plugin do AMX Mod X Plugin Recomendada");
//admin menu
define("_MENUHOME","Home do Admin");
define("_MENUMAINSERVER","Servidor");
define("_MENUMAINWEB","Website");
define("_MENUMAINOTHER","outros");
define("_MENUMAINMODULE","Módulo");
define("_MENUSERVER","Servidor");
define("_MENUAMXADMINS","Admins do AMX");
define("_MENUSERVERADMINS","Definir Admins do AMX");
define("_MENUREASONS","Motivos de Ban");
define("_MENUWEBCONFIG","Configurações");
define("_MENUUSERLEVEL","Nível do Usuário");
define("_MENUWEBADMINS","Admins Web");
define("_MENUUSERMENU","Menu de Usuário");
define("_MENUMODULE","Módulo");
define("_MENUUPDATE","Atualizar");
define("_MENUINFO","Informações do Sistema");
define("_MENULOGS","Logs");
//admin user menu
define("_USERMENU","Menu de Usuário");
define("_USERMENUSETTINGS","Configurações do Menu de Usuário");
define("_MENULOGGEDIN","Usuário Autenticado");
define("_MENULOGGEDOUT","Usuário Desconectado");
define("_POSITION","Posição");
define("_LANGKEY1","Chave de Idioma 1");
define("_LANGKEY2","Chave de Idioma 2");
define("_URL1","URL 1");
define("_URL2","URL 2");
define("_USERMENUADD","Novo Menu de Usuário");
//admin module
define("_MODULSETTINGS","Administração dos Módulos");
define("_MODULSETTINGS2","Configurações dos Módulos");
define("_NAMELANGKEY","Chave de Idioma para o Menu");
define("_INDEXSITE","Página Inicial");
define("_ADMINSITE","Página de Admin");
define("_TEMPLATE","Template");
//admin info
define("_SERVERINFO","Informações do Servidor");
define("_SERVERSETUP","Configurações do Servidor");
define("_PHPMODULES","Módulo PHP");
define("_OTHERFUNCTIONS","Outras Funções");
define("_STATISTIK","Estatísticas");
define("_CLEARCACHE","Limpar Cache da Página");
define("_DBSIZE","Tamanho da Base de Dados");
define("_DBOPTIMIZE","Otimizar Base de Dados");
define("_OPTIMIZE","Otimizar");
define("_PRUNEDB","Remover Bans Inativos");
define("_PRUNE","Remover Bans Inativos");
define("_DBPRUNED","Bans Inativos Removidos");
//user level
define("_ADMINLEVELSETTINGS","Administração dos Níveis dos Admins Web");
define("_AMXADMINS","Admins AMX");
define("_WEBSETTINGS","Configurações Web");
define("_LEVELVIEW","Mostrar");
define("_LEVELUNBAN","Desbanir");
define("_LEVELIMPORT","Importar");
define("_LEVELEXPORT","Exportar");
define("_PERM","Níveis de Usuário");
define("_DBPRUNE","Remover Bans Antigos da BD");
define("_SERVEREDIT","Editar Servidor");
define("_NEWLEVEL","Novo Nível");
define("_YOURLEVEL","Seu Nível:");
//admin logs
define("_LOGS","Log do Website");
define("_FILTER","Filtro");
define("_ALL","Todos os Logs");
define("_OLDERTHEN","Logs mais antigos do que");
define("_GO","Ir");
define("_ACTION","Ação");
define("_ACTIONLOGS","Ações Tomadas");
define("_REMARKS","Descrição");
define("_USER","Usuário");
//add ban
define("_ADDBAN","Adicionar Ban");
define("_NEWBAN","Adicionar Novo Ban");
define("_NOBANNAME","Nenhum nome foi definido!");
define("_ACTIVBANEXISTS","Já existe um ban ativo correspondente!");
//messages
define("_BANADDSUCCESS","Ban adicionado com sucesso");
define("_BANEDITED","Ban salvo");
define("_AMXADMINSAVESUCCESS","Admin do AMX Mod X Admin salvo com sucesso");
define("_AMXADMINDELETED","Admin do AMX Mod X deletado");
define("_AMXADMINADDED","Admin do AMX Mod X adicionado");
define("_NONAME","Falta o Nome!");
define("_NOFLAGS","Faltam as Permissões!");
define("_NOSTEAM","Nenhuma SteamID foi especificada!");
define("_NOVALIDTIME","Falta o Tempo de Vaidade!");
define("_REASONSETADDED","Pacote de Motivos adicionado");
define("_REASONSETDELETED","Pacote de Motivos deletadd");
define("_REASONSSETSAVED","Pacote de Motivos salvo");
define("_REASONADDED","Motivo adicionado");
define("_REASONDELETED","Motivo deletado");
define("_REASONSAVED","Motivo salvo");
define("_SADMINSAVED","Admin do servidor foi salvo");
define("_SERVERSAVED","Configurações do servidor foram salvas");
define("_SERVERDELETED","Servidor deletado");
define("_CACHEDELETED","Cache do website apagada");
define("_LOGDELETED","Logs deletados");
define("_MODULSAVED","Configurações dos módulos salvas");
define("_CONFIGSAVED","Configurações salvas");
define("_LEVELADDED","Nível criado");
define("_LEVELDELFAILED","Erro:<br><br>Admin(s) Web com esse nível já existe(m)!<br>O nível não pôde ser deletado.");
define("_LEVELDELETED","Nível deletado");
define("_LEVELSAVED","Nível salvo");
define("_USERMENUDELETED","Menu de usuário deletado");
define("_USERMENUADDED","Menu de Uuuário salvo");
define("_USERMENUPOSSAVED","Posição no menu de usuário salva");
define("_USERMENUSAVED","Menu de Usuário salvo");
define("_WADMINSAVED","Admin Web salvo");
define("_WADMINDELETED","Admin Web deletado");
define("_WADMINADDED","Admin Web adicionado");
define("_COMDELETED","Comentário deletado");
define("_COMADDED","Comentário adicionado");
define("_COMEDITED","Comentário editado");
define("_WRONGCAPTCHA","Código de Segurança Incorreto!");
define("_FILEDELFAILED","O arquivo não pôde ser deletado!");
define("_FILENOTFOUND","Arquivo não encontrado!");
define("_ERROR","Erro");
define("_FILEEDITED","Entrada salva");
define("_FILENOFILE","Nenhum arquivo!");
define("_FILETYPENOTALLOWED","Tipo de arquivo não permitido!");
define("_FILETOBIG","O arquivo é muito grande!");
define("_FILEUPLOADFAIL","Erro ao Enviar!");
define("_FILEUPLOADSUCCESS","Arquivo enviado com sucesso");
define("_FILENOTAVAILABLE","Arquivo não disponível!");
define("_FILEDELSUCCESS","Arquivo deletado com sucesso");
define("_NOREQUIREDFIELDS","Há campos requeridos que não foram preenchidos!");
define("_DBOPTIMIZED","A base de dados foi otimizada");
//live viewer
define("_SELECTSERVER","Selecionar Servidor");
define("_ADDHLSW","Adcionar ao HLSW");
define("_CONNECT","Conectar");
define("_NUMBER","#");
define("_FRAGS","Frags");
define("_ONLINE","Tempo");
define("_ADDRESS","Endereço");
define("_MAP","Mapa");
define("_NEXTMAP","Próximo Mapa");
define("_TIMELEFT","Tempo Restante");
define("_TIMELIMIT","Limite de Tempo");
define("_FRIENDLYFIRE","Fogo amigo");
define("_GAMETYPE","Jogo");
define("_ANTICHEAT","Ferramentas Anti-Cheat");
define("_ADDONS","Addons");
define("_PROTOCOL","Protocolo");
define("_NOPLAYERS","Não há Jogadores");
define("_PLAYERCONNECTING","Jogador conectando...");
define("_SERVEROFFLINE","Servidor indisponível");
define("_REFRESH","Atualizar");
define("_NOTIMELIMIT","Sem Limite de Tempo");
//live ban
define("_ADDBANONLINE","Adicionar Ban Online");
define("_BANSETTINGS","Configurações de Ban / Kick");
define("_SHOW","Mostrar");
define("_USERID","ID do Usuário");
define("_STATUSNAME","Nome de Status");
define("_BOT","Bot");
define("_PLAYER","Jogador");
define("_HLTV","HLTV");
define("_UNKNOWN","desconhecido");
define("_BAN","Banir");
define("_KICK","Kickar");
define("_WRONGRCON","Senha RCON Incorreta!");
define("_PLAYERKICKED","Jogador Kickado!");
define("_ADDBANSUCCESSKICK","Ban adicionado. O jogador será kickado!");
define("_BANANDKICK","kickar jogador após ser banido");
define("_BANPLAYER","Você tem certeza de que deseja banir este jogador?");
define("_KICKPLAYER","Você tem certeza de que deseja kickar este jogador?");
//title
define("_TITLEADMIN","Determinação de Admins");
define("_TITLEADMINLIST","Lista de Admins");
define("_TITLEBANLIST","Lista de Bans");
define("_TITLELOGIN","Autenticar");
define("_TITLESEARCH","Pesquisar");
define("_TITLEVIEW","Status do Servidor");
define("_TITLEBANDETAIL","Detalhes");
define("_TITLEBANADD","Adicionar Ban");
define("_TITLEBANADDONLINE","Adionar Ban Online");
define("_TITLEAMXADMINS","Admins do AMXModX");
define("_TITLEREASONS","Motivos de Ban");
define("_TITLESERVERADMINS","Admins dos Servidores");
define("_TITLESERVER","Servidor");
define("_TITLEINFO","Informação");
define("_TITLELOGS","Logs");
define("_TITLEMODULE","Módulo");
define("_TITLEUPDATE","Verificador de versão");
define("_TITLEUSERLEVEL","Nível de Usuário");
define("_TITLESITE","Configuração de página");
define("_TITLEUSERMENU","Menu de Usuário");
define("_TITLEWEBADMIN","Admin Web");
//value check
define("_NOUSERNAME","Nenhum usuário foi especificado!");
define("_NOPASSWORD","Nenhuma senha foi especificada!");
define("_ACCESSINVALID","Acceso inválido!");
define("_FLAGSBCDMISSING","A permissão deve ser B, C ou D!");
define("_NONICKNAME","Nenhum nickname especificado!");
define("_NOTAG","Nenhuma tag de clã  / nome foi especificado!");
define("_EMAILINVALID","Endereço de e-mail inválido!");
define("_STEAMIDINVALID","STEAM-ID inválida!");
define("_IPINVALID","Endereço IP Address inválido!");
define("_FLAGSINVALID","Atributos inválidos!");
define("_USERNAMETOSHORT","Nome muito pequeno!");
define("_USERNAMETOLONG","Nome muito extenso!");
define("_NICKNAMETOSHORT","Nickname muito pequeno!");
define("_NICKNAMETOLONG","Nickname muito extensa!");
define("_PASSWORDTOSHORT","Senha muito pequena!");
define("_PASSWORDTOLONG","Senha muito extensa!");
define("_NOREASONSET","Nenhum motivo foi especificado!");
define("_REASONSETTOSHORT","Motivo muito pequeno!");
define("_REASONSETTOLONG","Motivo muito extenso!");
define("_NOREASON","Nenhum motivo de ban foi especificado!");
define("_REASONTOSHORT","Motivo de ban muito pequeno!");
define("_REASONTOLONG","Motivo de ban muito extenso!");
define("_PASSWORDNOTMATCH","As senhas que você especificou não conferem!");
define("_NOCOMMENT","Nenhum comentário foi realizado!");
define("_NOEDITREASON","Nenhum motivo foi especificado!");
define("_COMMENTTOSHORT","Comentário muito pequeno!");
define("_COMMENTTOLONG","Comentário muito extenso!");
define("_STEAMTOLONG","SteamID muito extensa!");
define("_STEAMTOSHORT","SteamID muito pequena!");
define("_NOIP","Nenhum IP foi especificado!");
define("_IPTOLONG","IP muito extenso!");
define("_IPTOSHORT","IP muito pequeno!");
//alerts
define("_SAVEEDIT","Salvar alterações?");
define("_DELBAN","Você realmente deseja deletar este ban?");
define("_DELDEMO","Você realmente deseja deletar este arquivo?");
define("_DELCOMMENT","Você realmente deseja deletar este comentário?");
define("_DELADMIN","Você realmente deseja deletar este admin?");
define("_DELLEVEL","Você realmente deseja deletar este nível?");
define("_DELLOGSALL","Você realmente deseja deletar todos os logs?");
define("_DELLOGS","Você realmente deseja deletar estes logs?");
define("_SAVESETTINGS","Salvar configurações e aplicar?");
define("_DATALOSS","\nOs dados NÃO poderão ser recuperados!");
define("_DELSERVER","Você realmente deseja deletar este servidor?");
//motd
define("_NOEXPIREDBANS","Não há bans expirados");
define("_YOUAREBANNED","Você foi banido!!");
//new design related
define("_OS", "SO");
define("_VAC", "VAC");
define("_VAC_ALT", "Valve Anti-Cheat");
define("_NA", "N/D");
define("_STATS", "Estatísticas");
define("_PERM_BANS", "Bans Permanentes");
define("_TEMP_BANS", "Bans Temporários");
define("_ACTIVE_SERVERS", "Servidores Ativos");
define("_LATEST_BAN", "Último Ban");
define("_LATEST_KICKS", "Últimos Kicks");
define("_BROWSE_ALL", "Explorar");
define("_POWERED_BY", "Powered by");
define("_DESIGN_BY", "Design por");
define("_NO_BANS", "Nenhum Ban no Banco de Dados");
define("_FIRST_PAGE", "Primeira Página");
define("_LAST_PAGE", "Última Página");
define("_PREVIOUS_PAGE", "Página Anterior");
define("_NEXT_PAGE", "Próxima Página");
define("_PICK_DATE", "Escolha um Dia");
define("_WEB_VERSION", "Versão do site");
define("_WEBSERVER", "Servidor Web");
define("_MODULES", "Módulos");
define("_MIN_OR", "minutos ou");
define("_SIZE", "Tamanho");
define("_UPD_CONNECT_ERROR", "A conexão com o servidor de atualizações falhou!"); 
define("_UPD_DB_ERROR", "O Banco de Dados de atualizações não foi encontrado.");
define("_UPD_SELECT_ERROR", "O Banco de Dados de atualizações não pôde ser selecionado.");
define("_ADMINID", "SteamID do admin");  
define("_TRACKBACK", "Trackback");
define("_YOUNOTBANNED", "Don't worry, you are not banned");

?>