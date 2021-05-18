<?php
$version     = $_GET['version'];
$lg          = $_GET['lg'];
$accountType = isset($_GET['account']) ? $_GET['account'] : false;
$playertype = isset($_GET['playertype']) ? $_GET['playertype'] : false;
$gamecode    = $_GET['gameid'];
$page        = isset($_GET['page']) ? $_GET['page'] : false;

/**
 * [getVerion description]  获取版本号
 *
 * @param  [type] $v [description]
 *
 * @return [type]    [description]
 */
function getVerion($v)
{

    return $str = '2.4.1';

}

$file = getVerion($version);

$CONFIG            = array();
$CONFIG['specicalGameCodes'] = ['lobr','lorpt','lode','loes','lonl','lopl', 'loar', 'losv', 'loel', 'lotr'];
$CONFIG['file']    = $file;
$CONFIG['path']    = 'gamebox/' . $CONFIG['file'] . '/';
$CONFIG['host']    = in_array($gamecode, $CONFIG['specicalGameCodes'], true) ? '//gamebox3.creaction-network.com/' : '//gamebox2.oasgames.com/';
$CONFIG['dir']     = $CONFIG['host'] . $CONFIG['path'];
$CONFIG['version'] = '2018062901';
$CONFIG['cdn']     = $CONFIG['host'] . $CONFIG['path'];

$arr = array(
    'host'        => $CONFIG['host'],
    'static_host' => $CONFIG['dir'],
    'version'     => $CONFIG['version'],
    'lang'        => $lg,
    'file_ver'    => $CONFIG['file'],
);

$CONFIG['js_config'] = json_encode($arr);

//echo $CONFIG['js_config'];
//游戏数据
$CONFIG['GamesData'] = array();

//意大利语火影忍者20180409
$CONFIG['GamesData']['narutoit'] = array(
    'name'          => 'Naruto Online',
    'ico'           => $CONFIG['cdn'] . 'static/games/narutoit/icon.jpg',
    'serverbgpic'   => $CONFIG['cdn'] . 'static/games/narutoit/list.jpg', //服务器列表背景图片
    'accountbgpic'  => $CONFIG['cdn'] . 'static/games/narutoit/smallload.jpg',    //账号多开背景图片
    'url'           => '//odp3.oasgames.com/api/game/serverlist?gamecode=narutoit&uid={uid}',
    //'newListMoreURL' => '//wwww.baidu.com/' ,
    'openGamesFlag' => 1,  //控制是否启用游戏中心页面或者直接打开游戏  1 -> 打开游戏  0 -> 打开游戏中心
    'login_css'     => $CONFIG['cdn'] . 'static/css/oas.narutoit.css',
    'login_skin'    => '2',
    'getNewsUrl'    => '//odp3.oasgames.com/api/game/gbox-news?gamecode=narutoit'

);

//葡语新神曲20171016
$CONFIG['GamesData']['lorpt'] = [
    'name'          => 'Legend Online Reborn',
    'ico'           => $CONFIG['cdn'] . 'static/games/lorpt/logo.ico',
    'serverbgpic'   => $CONFIG['cdn'] . 'static/games/lorpt/list.jpg', //服务器列表背景图片
    'accountbgpic'  => $CONFIG['cdn'] . 'static/games/lorpt/lorpt.jpg',    //账号多开背景图片
    'url'           => '//odp3.oasgames.com/api/game/serverlist?gamecode=lorpt&uid={uid}',
    'openGamesFlag' => 1,  //控制是否启用游戏中心页面或者直接打开游戏  1 -> 打开游戏  0 -> 打开游戏中心
    'login_css'     => $CONFIG['cdn'] . 'static/css/oas.login.css',
    'login_skin'    => '2',
    'getNewsUrl'    => '//odp3.oasgames.com/api/game/gbox-news?gamecode=lorpt'
];

//土语火影忍者
$CONFIG['GamesData']['narutotr'] = array(
    'name'          => 'Naruto Online',
    'ico'           => $CONFIG['cdn'] . 'static/games/narutotr/icon.jpg',
    'serverbgpic'   => $CONFIG['cdn'] . 'static/games/narutotr/list.jpg', //服务器列表背景图片
    'accountbgpic'  => $CONFIG['cdn'] . 'static/games/narutotr/smallload.jpg',    //账号多开背景图片
    'url'           => '//odp3.oasgames.com/api/game/serverlist?gamecode=narutotr&uid={uid}',
    'openGamesFlag' => 1,  //控制是否启用游戏中心页面或者直接打开游戏  1 -> 打开游戏  0 -> 打开游戏中心
    'login_css'     => $CONFIG['cdn'] . 'static/css/oas.narutotr.css',
    'login_skin'    => '2',
    'getNewsUrl'    => '//odp3.oasgames.com/api/game/gbox-news?gamecode=narutotr'
);
//波语火影忍者
$CONFIG['GamesData']['narutopl'] = array(
    'name'          => 'Naruto Online',
    'ico'           => $CONFIG['cdn'] . 'static/games/narutopl/icon.jpg',
    'serverbgpic'   => $CONFIG['cdn'] . 'static/games/narutopl/list.jpg', //服务器列表背景图片
    'accountbgpic'  => $CONFIG['cdn'] . 'static/games/narutopl/smallload.jpg',    //账号多开背景图片
    'url'           => '//odp3.oasgames.com/api/game/serverlist?gamecode=narutopl&uid={uid}',
    'openGamesFlag' => 1,  //控制是否启用游戏中心页面或者直接打开游戏  1 -> 打开游戏  0 -> 打开游戏中心
    'login_css'     => $CONFIG['cdn'] . 'static/css/oas.narutopl.css',
    'login_skin'    => '2',
    'getNewsUrl'    => '//odp3.oasgames.com/api/game/gbox-news?gamecode=narutopl'
);
//阿拉伯语生死狙击
$CONFIG['GamesData']['fbar'] = array(
    'name'         => 'First Blood',   //游戏名称
    'ico'          => $CONFIG['cdn'] . 'static/games/fbar/icon.jpg', //游戏小图标
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/fbar/list.jpg', //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/fbar/smallload.png',    //账号多开背景图片
    'url'          => '//odp3.oasgames.com/api/game/serverlist?gamecode=fbar&game_code=fbar&uid={uid}&type=oas_get_server',
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.login.fbar.css',
    'login_skin'   => '2',
    'getNewsUrl' => '//odp3.oasgames.com/api/game/gbox-news?gamecode=fbar'
);

//土语神曲
$CONFIG['GamesData']['lotr'] = array(
    'name'         => 'Legend Online',
    'ico'          => $CONFIG['cdn'] . 'static/games/lotr/icon.jpg',
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/lotr/list.jpg', //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/lotr/lotr.jpg',    //账号多开背景图片
    'url'          => '//odp3.oasgames.com/api/game/serverlist?gamecode=lotr&uid={uid}',
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.login.css',
    'login_skin'   => '2'
);

//葡语神曲
$CONFIG['GamesData']['lobr'] = array(
    'name'         => 'Legend Online',    //游戏名称
    'ico'          => $CONFIG['cdn'] . 'static/games/lotr/icon.jpg',    //游戏小图标
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/lotr/list.jpg',    //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/lotr/lobr.jpg',    //账号多开背景图片
    'url'          => '//odp3.oasgames.com/api/game/serverlist?gamecode=lobr&uid={uid}',
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.login.css',
    'login_skin'   => '2'
);
$CONFIG['GamesData']['lopt'] = array(
    'name'         => 'Legend Online',   //游戏名称
    'ico'          => $CONFIG['cdn'] . 'static/games/lotr/icon.jpg',    //游戏小图标
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/lotr/list.jpg', //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/lotr/lopt.jpg',    //账号多开背景图片
    'url'          => '//odp3.oasgames.com/api/game/serverlist?gamecode=lobr&uid={uid}',
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.login.css',
    'login_skin'   => '2'
);

//波语神曲
$CONFIG['GamesData']['lopl'] = array(
    'name'         => 'Legend Online',    //游戏名称
    'ico'          => $CONFIG['cdn'] . 'static/games/lotr/icon.jpg',    //游戏小图标
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/lotr/list.jpg',    //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/lopl/lopl.jpg',    //账号多开背景图片
    'url'          => '//odp3.oasgames.com/api/game/serverlist?gamecode=lopl&uid={uid}',
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.login.css',
    'login_skin'   => '2'
);

//西语神曲
$CONFIG['GamesData']['loes'] = array(
    'name'         => 'Legend Online',    //游戏名称
    'ico'          => $CONFIG['cdn'] . 'static/games/lotr/icon.jpg',    //游戏小图标
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/lotr/list.jpg',    //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/lotr/loes.jpg',    //账号多开背景图片
    'url'          => '//loes.oasgames.com/oasplay/api/serverlist4guanwang_v2.php?uid={uid}',
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.login.css',
    'login_skin'   => '2'
);

//德语神曲
$CONFIG['GamesData']['lode'] = array(
    'name'         => 'Legend Online',    //游戏名称
    'ico'          => $CONFIG['cdn'] . 'static/games/lotr/icon.jpg',    //游戏小图标
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/lotr/list.jpg',    //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/lotr/lode.jpg',    //账号多开背景图片
    'url'          => '//odp3.oasgames.com/api/game/serverlist?gamecode=lode&uid={uid}',
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.login.css',
    'login_skin'   => '2'
);

//希腊语神曲
$CONFIG['GamesData']['loel'] = array(
    'name'         => 'Legend Online',   //游戏名称
    'ico'          => $CONFIG['cdn'] . 'static/games/lotr/icon.jpg', //游戏小图标
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/lotr/list.jpg', //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/lotr/loel.jpg',    //账号多开背景图片
    'url'          => '//odp.oasgames.com/api/?m=serverlist&game_code=loel&type=oas_get_server&uid={uid}',
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.login.css',
    'login_skin'   => '2'
);

//瑞典语神曲
$CONFIG['GamesData']['losv'] = array(
    'name'         => 'Legend Online',   //游戏名称
    'ico'          => $CONFIG['cdn'] . 'static/games/lotr/icon.jpg', //游戏小图标
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/lotr/list.jpg', //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/lotr/losv.jpg',    //账号多开背景图片
    'url'          => '//odp3.oasgames.com/api/game/serverlist?gamecode=losv&uid={uid}',
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.login.css',
    'login_skin'   => '2'
);

//荷兰语神曲
$CONFIG['GamesData']['lonl'] = array(
    'name'         => 'Legend Online',   //游戏名称
    'ico'          => $CONFIG['cdn'] . 'static/games/lotr/icon.jpg', //游戏小图标
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/lotr/list.jpg', //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/lotr/lonl.jpg',    //账号多开背景图片
    'url'          => '//odp3.oasgames.com/api/game/serverlist?gamecode=lonl&uid={uid}',
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.login.css',
    'login_skin'   => '2'
);

//葡语Q游记
$CONFIG['GamesData']['irpt'] = array(
    'name'         => 'Island of Rainbow',
    'ico'          => $CONFIG['cdn'] . 'static/games/irpt/icon.jpg',
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/irpt/list.jpg', //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/irpt/smallload.jpg',    //账号多开背景图片
    'url'          => '//odp.oasgames.com/api/?m=serverlist&game_code=irpt&type=oas_get_server&uid={uid}',
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.qlogin.css',
    'login_skin'   => '3'
);

//土语生死狙击
$CONFIG['GamesData']['fbtr'] = array(
    'name'         => 'First Blood',
    'ico'          => $CONFIG['cdn'] . 'static/games/fbtr/icon.jpg',
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/fbtr/list.jpg', //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/fbtr/smallload.jpg',    //账号多开背景图片
    'url'          => '//fbtr.oasgames.com/oasplay/api/serverlist4guanwang_v2.php?uid={uid}',
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.flogin.css',
    'login_skin'   => '2'
);

//阿拉伯语神曲
$CONFIG['GamesData']['loar'] = array(
    'name'         => 'Legend Online',   //游戏名称
    'ico'          => $CONFIG['cdn'] . 'static/games/lotr/icon.jpg', //游戏小图标
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/lotr/list-ar.jpg', //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/lotr/loar.jpg',    //账号多开背景图片
    'url'          => '//odp3.oasgames.com/api/game/serverlist?gamecode=loar&uid={uid}',
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.login.ar.css',
    'login_skin'   => '2',
    'getNewsUrl'   => '//odp3.oasgames.com/api/game/gbox-news?gamecode=loar'
);

//弹弹堂西语
$CONFIG['GamesData']['ddtes'] = array(
    'name'         => 'DDtank',   //游戏名称
    'ico'          => $CONFIG['cdn'] . 'static/games/ddt/icon.gif', //游戏小图标
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/ddt/list.jpg', //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/ddt/account.jpg',    //账号多开背景图片
    'url'          => '//odp.oasgames.com/api/?m=serverlist&game_code=ddtes&type=oas_get_server&uid={uid}',
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.login.ddt.css',
    'login_skin'   => '2'
);

//葡语弹弹堂
$CONFIG['GamesData']['botpt'] = array(
    'name'         => 'Battle of Tanks',   //游戏名称
    'ico'          => $CONFIG['cdn'] . 'static/games/ddt/icon.jpg', //游戏小图标
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/ddt/list.jpg', //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/ddt/account.jpg',    //账号多开背景图片
    'url'          => '//odp.oasgames.com/api/?m=serverlist&game_code=botpt&type=oas_get_server&uid={uid}',
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.login.bot.css',
    'login_skin'   => '2'
);

//葡语弹弹堂
$CONFIG['GamesData']['oktr'] = array(
    'name'         => 'Okey',   //游戏名称
    'ico'          => $CONFIG['cdn'] . 'static/games/ddt/icon.jpg', //游戏小图标
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/ddt/list.jpg', //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/ddt/account.jpg',    //账号多开背景图片
    'url'          => '//103.26.1.235/Download/OkeySetup.exe?startname=okeysetup.exe',
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.login.bot.css',
    'login_skin'   => '2'
);

//土语核金弹头
$CONFIG['GamesData']['mwtr'] = array(
    'name'         => 'Metal War',
    'ico'          => $CONFIG['cdn'] . 'static/games/mwtr/icon.jpg',
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/mwtr/list.jpg', //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/mwtr/mwtr.jpg',    //账号多开背景图片
    'url'          => '//odp.oasgames.com/api/?m=serverlist&type=oas_get_server&game_code=mwtr&uid={uid}',
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.float.css',
    'login_skin'   => '2'
);

//德语火影忍者
$CONFIG['GamesData']['narutode'] = array(
    'name'         => 'Naruto Online',
    'ico'          => $CONFIG['cdn'] . 'static/games/narutode/icon.jpg',
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/narutode/list.jpg', //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/narutode/smallload.jpg',    //账号多开背景图片
    'url'          => '//odp3.oasgames.com/api/game/serverlist?gamecode=narutode&uid={uid}',
    //'newListMoreURL' => '//wwww.baidu.com/' ,
    'openGamesFlag' => 1,  //控制是否启用游戏中心页面或者直接打开游戏  1 -> 打开游戏  0 -> 打开游戏中心
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.narutode.css',
    'login_skin'   => '2',
    'getNewsUrl'   => '//odp3.oasgames.com/api/game/gbox-news?gamecode=narutode'
    
);

//葡语火影忍者
$CONFIG['GamesData']['narutopt'] = array(
    'name'         => 'Naruto Online',
    'ico'          => $CONFIG['cdn'] . 'static/games/narutopt/icon.jpg',
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/narutopt/list.jpg', //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/narutopt/smallload.jpg',    //账号多开背景图片
    'url'          => '//odp3.oasgames.com/api/game/serverlist?gamecode=narutopt&uid={uid}',
    'openGamesFlag' => 1,  //控制是否启用游戏中心页面或者直接打开游戏  1 -> 打开游戏  0 -> 打开游戏中心
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.narutopt.css',
    'login_skin'   => '2',
    'getNewsUrl'   => '//odp3.oasgames.com/api/game/gbox-news?gamecode=narutopt'
);

//英语火影忍者
$CONFIG['GamesData']['narutoen'] = array(
    'name'         => 'Naruto Online',
    'ico'          => $CONFIG['cdn'] . 'static/games/narutoen/icon.jpg',
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/narutoen/list.jpg', //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/narutoen/smallload.jpg',    //账号多开背景图片
    'url'          => '//odp3.oasgames.com/api/game/serverlist?gamecode=narutoen&uid={uid}',
    'openGamesFlag' => 1,  //控制是否启用游戏中心页面或者直接打开游戏  1 -> 打开游戏  0 -> 打开游戏中心
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.narutoen.css',
    'login_skin'   => '2',
    'getNewsUrl'   => '//odp3.oasgames.com/api/game/gbox-news?gamecode=narutoen'
);

//法语火影忍者
$CONFIG['GamesData']['narutofr'] = array(
    'name'         => 'Naruto Online',
    'ico'          => $CONFIG['cdn'] . 'static/games/narutofr/icon.jpg',
    'serverbgpic'  => $CONFIG['cdn'] . 'static/games/narutofr/list.jpg', //服务器列表背景图片
    'accountbgpic' => $CONFIG['cdn'] . 'static/games/narutofr/smallload.jpg',    //账号多开背景图片
    'url'          => '//odp3.oasgames.com/api/game/serverlist?gamecode=narutofr&uid={uid}',
    'openGamesFlag' => 1,  //控制是否启用游戏中心页面或者直接打开游戏  1 -> 打开游戏  0 -> 打开游戏中心
    'login_css'    => $CONFIG['cdn'] . 'static/css/oas.narutofr.css',
    'login_skin'   => '2',
    'getNewsUrl'   => '//odp3.oasgames.com/api/game/gbox-news?gamecode=narutofr'
);

//西语火影忍者
$CONFIG['GamesData']['narutoes'] = [
    'name'          => 'Naruto Online',
    'ico'           => $CONFIG['cdn'] . 'static/games/narutoes/icon.jpg',
    'serverbgpic'   => $CONFIG['cdn'] . 'static/games/narutoes/list.jpg', //服务器列表背景图片
    'accountbgpic'  => $CONFIG['cdn'] . 'static/games/narutoes/smallload.jpg',    //账号多开背景图片
    'url'           => '//odp3.oasgames.com/api/game/serverlist?gamecode=narutoes&uid={uid}',
    'openGamesFlag' => 1,  //控制是否启用游戏中心页面或者直接打开游戏  1 -> 打开游戏  0 -> 打开游戏中心
    'login_css'     => $CONFIG['cdn'] . 'static/css/oas.narutoes.css',
    'login_skin'    => '2',
    'getNewsUrl'    => '//odp3.oasgames.com/api/game/gbox-news?gamecode=narutoes'
];

//土语诸神黄昏
$CONFIG['GamesData']['pwartr'] = [
    'name'          => 'Pantheon War',
    'ico'           => $CONFIG['cdn'] . 'static/games/pwartr/icon.jpg',
    'serverbgpic'   => $CONFIG['cdn'] . 'static/games/pwartr/list.jpg', //服务器列表背景图片
    'accountbgpic'  => $CONFIG['cdn'] . 'static/games/pwartr/smallload.jpg',    //账号多开背景图片
    'url'           => '//odp.oasgames.com/api/?m=serverlist&game_code=pwartr&uid={uid}&type=oas_get_server',
    'openGamesFlag' => 1,  //控制是否启用游戏中心页面或者直接打开游戏  1 -> 打开游戏  0 -> 打开游戏中心
    'login_css'     => $CONFIG['cdn'] . 'static/css/oas.pwartr.css',
    'login_skin'    => '2'
];

//葡语弹弹堂2017-03-29 by Frank
$CONFIG['GamesData']['ddtpt'] = [
    'name'          => 'DDTANK',
    'ico'           => $CONFIG['cdn'] . 'static/games/ddtpt/icon.jpg',
    'serverbgpic'   => $CONFIG['cdn'] . 'static/games/ddtpt/list.jpg', //服务器列表背景图片
    'accountbgpic'  => $CONFIG['cdn'] . 'static/games/ddtpt/ddtptlist.png',    //账号多开背景图片
    'url'           => '//odp.oasgames.com/api/?m=serverlist&game_code=ddtpt&uid={uid}&type=oas_get_server',
    'openGamesFlag' => 1,  //控制是否启用游戏中心页面或者直接打开游戏  1 -> 打开游戏  0 -> 打开游戏中心
    'login_css'     => $CONFIG['cdn'] . 'static/css/oas.login.ddtpt.css',
    'login_skin'    => '2'
];

//当前登录器页面的游戏信息
if ($page == 'login')
{
    $CONFIG['info']   = $CONFIG['GamesData'][$gamecode];
    $CONFIG['jsInfo'] = json_encode($CONFIG['info']);
}

//体验版本信息
if($playertype == 'tiyanversion') {
    $CONFIG['tiyanversionInfo']   = json_encode($CONFIG['GamesData'][$gamecode]);
}

//设置前端资源变量
$jsConfigArr            = array();
$jsConfigArr['file']    = $file;
$jsConfigArr['path']    = $CONFIG['path'];
$jsConfigArr['host']    = $CONFIG['host'];
$jsConfigArr['dir']     = $CONFIG['dir'];
$jsConfigArr['version'] = $CONFIG['version'];
$jsConfigArr['cdn']     = $CONFIG['cdn'];
$jsConfig               = json_encode($jsConfigArr);
?>

