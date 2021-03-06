<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/

//不能非法包含或直接执行
if (!defined('IN_BAIGO')) {
    exit('Access Denied');
}

/*------提示信息------
x开头为错误
y开头为成功
------------------*/
return array(
    /*@@@@@@ x-1---- SSO @@@@@@*/

    /*++++++ x-1-1-- 数据 ++++++*/
    'y010101' => '用户注册成功',
    'x010101' => '用户注册失败',
    'y010102' => '用户存在',
    'x010102' => '用户不存在',
    'y010103' => '更新用户成功',
    'x010103' => '没有做任何修改',
    'y010104' => '删除用户成功',
    'x010104' => '未删除任何用户',
    'y010105' => '创建用户表成功',
    'x010105' => '创建用户表失败',
    'y010106' => '更新用户表成功',
    'x010106' => '没有做任何修改',
    'y010107' => '删除用户表成功',
    'x010107' => '未删除任何表',

    'y010108' => '创建用户视图成功',
    'x010108' => '创建用户视图失败',

    'y010111' => '无需更新用户表',

    /*++++++ x-1-2-- 验证 ++++++*/
    'x010201' => '请输入用户名',
    'x010202' => '用户名不能超过 10 中文，30 英文',
    'x010203' => '用户名只能使用中文、英文字母、数字、下划线和连字符',
    'x010204' => '用户名中含有禁止注册的词汇',
    'y010205' => '该用户名可以注册',
    'x010205' => '该用户名已存在',

    'x010206' => '请输入邮箱',
    'x010207' => '邮箱不能超过 300 英文',
    'x010208' => '邮箱格式错误',
    'x010209' => '该邮箱不允许注册',
    'x010210' => '该邮箱禁止注册',
    'y010211' => '该邮箱可以注册',
    'x010211' => '该邮箱已存在',

    'x010212' => '请输入密码',
    'x010213' => '密码错误',

    'x010214' => '昵称不能超过 10 中文，30 英文',
    'x010215' => '备注不能超过 10 中文，30 英文',
    'x010216' => '请选择状态',

    'x010217' => '获取用户 ID 错误',
    'x010218' => '用户 ID 必须为数字',
    'x010219' => '只能上传 CSV 文件',
    'x010220' => '用户名为必须项目', //CSV 导入验证
    'x010221' => '密码为必须项目',
    'x010222' => '请输入新密码',
    'x010223' => '新邮箱与原邮箱一样',
    'x010224' => '请确认密码',
    'x010225' => '两次密码输入不一致',
    'x010226' => '用户已激活',
    'x010227' => '参数错误',
    'x010228' => '获取访问口令错误',
    'x010229' => '访问口令最长 32 位',
    'x010230' => '访问口令错误',
    'x010231' => '访问口令过期',
    'x010232' => '获取刷新口令错误',
    'x010233' => '刷新口令最长 32 位',
    'x010234' => '刷新口令错误',
    'x010235' => '刷新口令过期',

    'x010236' => '密保问题不能超过 100 中文，300 英文',
    'x010237' => '请输入密保答案',
    'x010238' => '请输入密保问题',
    'x010240' => '您没有设置邮箱和密保问题，无法找回密码，请联系系统管理员！',
    'x010241' => '您没有设置邮箱！',
    'x010242' => '您没有设置密保问题！',
    'x010243' => '请输入原密码',
    'x010244' => '原密码错误',
    'x010245' => '密保答案错误',

    /*++++++ x-1-3-- 权限 ++++++*/
    'x010301' => '您没有浏览用户的权限',
    'x010302' => '您没有创建用户的权限',
    'x010303' => '您没有编辑用户的权限',
    'x010304' => '您没有删除用户的权限',
    'x010305' => '您没有批量导入的权限',

    /*++++++ x-1-4-- 状态 ++++++*/
    'y010401' => '用户登录成功',
    'x010401' => '用户被禁用',
    'y010402' => '导入成功',
    'x010402' => '未导入任何数据',
    'y010403' => 'CSV 文件上传成功',
    'x010403' => 'CSV 文件上传失败',
    'y010404' => 'CSV 文件删除成功',
    'x010404' => '未删除任何文件',
    'y010405' => '更换邮箱成功',
    'x010405' => '更换邮箱失败',
    'y010406' => '已将验证邮件发送至新的邮箱，请验证。',
    'x010406' => '更换邮箱失败',
    'y010407' => '修改密码成功',
    'x010407' => '密码未作修改',
    'y010408' => '已将验证邮件发送至您的邮箱，请验证。',
    'x010408' => '找回密码失败',
    'y010409' => '用户激活成功',
    'x010409' => '用户激活失败',
    'y010410' => '已将激活邮件发送至您的邮箱，请验证。',
    'x010410' => '发送激活邮件失败',
    'y010411' => '刷新访问口令成功',
    'x010411' => '刷新访问口令失败',
    'y010412' => '修改密保问题成功',
    'x010412' => '密保问题未作修改',


    /*@@@@@@ x-2---- 管理员 @@@@@@*/

    /*++++++ x-2-1-- 数据 ++++++*/
    'y020101' => '创建管理员成功',
    'x020101' => '创建管理员失败',
    'y020102' => '管理员存在',
    'x020102' => '管理员不存在',
    'y020103' => '更新管理员成功',
    'x020103' => '没有做任何修改',
    'y020104' => '删除管理员成功',
    'x020104' => '未删除任何管理员',
    'y020105' => '创建管理员表成功',
    'x020105' => '创建管理员表失败',
    'y020106' => '更新管理员表成功',
    'x020106' => '没有做任何修改',
    'y020107' => '删除管理员表成功',
    'x020107' => '未删除任何表',
    'y020108' => '更新个人资料成功',
    'x020108' => '禁止更新个人资料',
    'y020109' => '修改密码成功',
    'x020109' => '禁止修改密码',
    'y020111' => '无需更新管理员表',
    'y020112' => '偏好设置成功',
    'x020112' => '禁止更新偏好设置',

    /*++++++ x-2-2-- 验证 ++++++*/
    'x020204' => '用户已存在，请使用授权为管理员',
    'x020205' => '用户不存在，请使用创建管理员',
    'x020206' => 'SSO 管理员已存在',

    'x020212' => '备注不能超过 10 中文，30 英文',
    'x020213' => '请选择状态',
    'x020214' => '请选择群组',
    'x020216' => '昵称不能超过 10 中文，30 英文',
    'x020218' => '管理员已存在',
    'x020219' => '请选择类型',

    /*++++++ x-2-3-- 权限 ++++++*/
    'x020301' => '您没有浏览管理员的权限',
    'x020302' => '您没有创建管理员的权限',
    'x020303' => '您没有编辑管理员的权限',
    'x020304' => '您没有删除管理员的权限',
    'x020305' => '您没有加入群组的权限',
    'x020306' => '不能编辑自己',

    /*++++++ x-2-4-- 状态 ++++++*/
    'y020401' => '管理员登录成功',
    'x020401' => '管理员被禁用',
    'x020402' => '管理员尚未登录',
    'x020403' => '登录校验错误',
    'x020404' => '登录超时，请保存好相关信息，重新登录',
    'y020405' => '同步登录成功',
    'y020406' => '同步退出成功',


    /*@@@@@@ x-3---- 系统 @@@@@@*/

    /*++++++ x-3-1-- 数据 ++++++*/
    'y030101' => '创建会话成功',
    'x030101' => '创建会话失败',
    'y030102' => '会话存在',
    'x030102' => '会话不存在',
    'y030103' => '更新会话成功',
    'x030103' => '没有做任何修改',
    'y030104' => '删除会话成功',
    'x030104' => '未删除任何会话',

    'y030105' => '创建会话表成功',
    'x030105' => '创建会话表失败',
    'y030106' => '更新会话表成功',
    'x030106' => '没有做任何修改',
    'y030107' => '删除会话表成功',
    'x030107' => '未删除任何表',

    'y030108' => '创建数据表成功',

    'x030111' => '无法连接数据库服务器',
    'x030112' => '选择的数据库不存在',


    /*++++++ x-3-2-- 验证 ++++++*/
    'x030201' => '请输入 4 位验证码',
    'x030202' => '至少选择一项',
    'x030203' => '请选择具体操作',
    'x030204' => '输入不完整',
    'x030205' => '验证码错误',
    'x030206' => '令牌错误',
    'x030208' => 'SSO 返回错误',
    'x030209' => 'SSO 返回错误',
    'x030211' => 'SSO 版本必须在 2.0 以上',
    'x030213' => 'PHP 版本过低，最低要求 5.3.0！',

    /*++++++ x-3-4-- 状态 ++++++*/
    'x030401' => '正在验证',
    'x030402' => '验证过程出错',
    'x030403' => '系统已安装',
    'y030404' => '设置成功',
    'x030404' => '数据库未正确设置',
    'y030405' => '设置成功',
    'y030408' => 'SSO 设置成功',
    'x030408' => 'SSO 已安装',
    'y030409' => '创建管理员成功',
    'y030410' => '执行自动部署第一步成功',
    'x030410' => '执行自动部署第一步失败',
    'y030411' => '安装成功',
    'y030412' => '升级成功',
    'x030412' => '数据表未正确创建',
    'x030413' => 'SSO 需要执行安装程序',
    'x030414' => 'SSO 需要执行升级程序',
    'x030415' => '需要执行安装程序',
    'x030416' => '需要执行升级程序',
    'x030417' => '服务器环境检查未通过',
    'x030418' => '服务器环境检查未通过',
    'x030419' => 'SSO 数据库未正确设置',
    'x030420' => 'SSO 未正确上传',
    'x030421' => 'SSO 未正确上传',


    /*@@@@@@ x-4---- 广告位 @@@@@@*/

    /*++++++ x-4-1-- 数据 ++++++*/
    'y040101' => '创建广告位成功',
    'x040101' => '创建广告位失败',
    'y040102' => '广告位存在',
    'x040102' => '广告位不存在',
    'y040103' => '更新广告位成功',
    'x040103' => '没有做任何修改',
    'y040104' => '删除广告位成功',
    'x040104' => '未删除任何广告位',
    'y040105' => '创建广告位表成功',
    'x040105' => '创建广告位表失败',
    'y040106' => '更新广告位表成功',
    'x040106' => '没有做任何修改',
    'y040107' => '删除广告位表成功',
    'x040107' => '未删除任何表',

    'y040110' => '生成广告位缓存成功',
    'x040110' => '生成广告位缓存失败',
    'y040111' => '无需更新广告位表',

    /*++++++ x-4-2-- 验证 ++++++*/
    'x040201' => '请输入名称',
    'x040202' => '名称不能超过 100 中文，300 英文',
    'y040203' => '该名称可以创建',
    'x040203' => '该名称已存在',
    'x040204' => '备注不能超过 100 中文，300 英文',
    'x040205' => '请输入广告数',
    'x040206' => '获取广告位 ID 错误',
    'x040207' => '请选择状态',
    'x040208' => '广告数只能为数字',
    'x040209' => '请选择广告位类型',
    'x040210' => '请输入广告位宽度',
    'x040211' => '宽度不能超过 4 位',
    'x040212' => '请输入广告位高度',
    'x040213' => '高度不能超过 4 位',

    'x040215' => '请选择广告脚本',
    'x040216' => '请输入插件名',
    'x040217' => '插件名不能超过 100 字符',
    'x040218' => '请输入默认选择器',
    'x040219' => '选择器不能超过 100 字符',
    'x040221' => '请选择是否允许按几率展现',

    /*++++++ x-4-3-- 权限 ++++++*/
    'x040301' => '您没有浏览广告位的权限',
    'x040302' => '您没有创建广告位的权限',
    'x040303' => '您没有编辑广告位的权限',
    'x040304' => '您没有删除广告位的权限',
    'x040305' => '您没有查看广告位统计的权限',

    /*++++++ x-4-3-- 权限 ++++++*/
    'x040401' => '广告位被禁用',


    /*@@@@@@ x-5---- 应用 @@@@@@*/

    /*++++++ x-5-1-- 数据 ++++++*/
    'y050102' => '应用存在',
    'x050102' => '应用不存在',

    /*++++++ x-5-2-- 验证 ++++++*/
    'x050201' => '请输入应用名称',
    'x050202' => '应用名称不能超过 10 中文，30 英文',
    'x050203' => '获取应用 ID 错误',
    'x050204' => '应用 ID 必须为数字',

    'x050212' => '不允许访问的 IP 地址',
    'x050213' => '禁止访问的 IP 地址',

    'x050214' => '无通信密钥',
    'x050215' => '通信密钥最长 64 位',
    'x050216' => '通信密钥只能使用英文字母和数字',
    'x050217' => '通信密钥错误',

    'x050218' => '请选择是否同步',

    'x050222' => '无待加密数据',
    'x050223' => '无待解密数据',
    'x050224' => '无时间戳',
    'x050225' => '时间戳格式错误',
    'x050226' => '无签名',
    'x050227' => '时差超过 30 分钟',

    /*++++++ x-5-3-- 权限 ++++++*/
    'x050305' => '本应用没有用户注册权限',
    'x050306' => '本应用没有用户登录权限',
    'x050307' => '本应用没有获取用户信息权限',
    'x050308' => '本应用没有编辑用户权限',
    'x050309' => '本应用没有删除用户权限',
    'x050310' => '本应用没有验证用户名权限',
    'x050311' => '本应用没有验证邮箱权限',
    'x050312' => '本应用没有生成签名权限',
    'x050313' => '本应用没有验证签名权限',
    'x050314' => '本应用没有加密权限',
    'x050315' => '本应用没有解密权限',
    'x050316' => '系统禁止注册',
    'x050317' => '本应用没有检查新短消息权限',
    'x050318' => '本应用没有读取短消息权限',
    'x050319' => '本应用没有列出短消息权限',

    /*++++++ x-5-4-- 状态 ++++++*/
    'x050402' => '应用被禁用',
    'y050403' => '签名正确',
    'x050403' => '签名错误',
    'y050404' => '生成签名成功',
    'y050405' => '加密成功',
    'y050406' => '解密成功',



    /*@@@@@@ x-6---- 设置 @@@@@@*/

    /*++++++ x-6-1-- 数据 ++++++*/
    'y060101' => '创建设置项成功',
    'x060101' => '创建设置项失败',

    /*++++++ x-6-2-- 验证 ++++++*/
    'x060201' => '请输入',
    'x060202' => '不能超过 300 中文，900 英文',
    'x060203' => '格式错误',
    'x060204' => '请输入数据库地址',
    'x060205' => '地址不能超过 300 中文，900 英文',
    'x060206' => '请输入数据库名称',
    'x060207' => '名称不能超过 300 中文，900 英文',
    'x060208' => '请输入数据库端口',
    'x060209' => '端口不能超过 300 中文，900 英文',
    'x060210' => '请输入数据库用户名',
    'x060211' => '用户名不能超过 300 中文，900 英文',
    'x060212' => '请输入数据库密码',
    'x060213' => '密码不能超过 300 中文，900 英文',
    'x060214' => '请输入数据库编码',
    'x060215' => '编码不能超过 300 中文，900 英文',
    'x060216' => '请输入数据表前缀',
    'x060217' => '前缀不能超过 300 中文，900 英文',

    /*++++++ x-6-3-- 权限 ++++++*/
    'x060301' => '您没有设置的权限',

    /*++++++ x-6-4-- 状态 ++++++*/
    'y060401' => '设置成功',
    'y060402' => '检查更新成功',


    /*@@@@@@ x-7---- 图片数据 @@@@@@*/

    /*++++++ x-7-1-- 数据 ++++++*/
    'y070101' => '创建图片数据成功',
    'x070101' => '创建图片数据失败',
    'y070102' => '图片数据存在',
    'x070102' => '图片数据不存在',
    'y070103' => '更新图片数据成功',
    'x070103' => '没有做任何修改',
    'y070104' => '删除图片数据成功',
    'x070104' => '未删除任何图片数据',

    'y070105' => '创建图片表成功',
    'x070105' => '创建图片表失败',
    'y070106' => '更新图片表成功',
    'x070106' => '没有做任何修改',
    'y070107' => '删除图片表成功',
    'x070107' => '未删除任何表',

    'y070111' => '无需更新图片表',

    /*++++++ x-7-2-- 验证 ++++++*/
    'x070201' => '请选择要上传的图片',
    'x070202' => '不允许上传的类型',
    'x070203' => '上传图片不能超过',
    'x070204' => '同时上传不能超过',
    'x070205' => '请选择状态',
    'x070206' => '上传校验错误',

    /*++++++ x-7-3-- 权限 ++++++*/
    'x070301' => '您没有浏览图片的权限',
    'x070302' => '您没有上传的权限',
    'x070303' => '您没有编辑图片的权限',
    'x070304' => '您没有删除图片的权限',

    /*++++++ x-7-4-- 状态 ++++++*/
    'y070401' => '上传成功',
    'y070402' => '生成缩略图成功',
    'x070402' => '未生成缩略图',
    'y070403' => '上传初始化成功',
    'y070404' => '插入图片成功',
    'x070405' => '尚未设置允许上传类型',
    'y070406' => '此图片被使用',
    'x070406' => '此图片未使用',
    'y070407' => '图片清理完毕',
    'x070407' => '正在清理图片',
    'y070408' => '回收站清空完毕',
    'x070408' => '正在清空回收站',


    /*@@@@@@ x-8---- 广告 @@@@@@*/

    /*++++++ x-8-1-- 数据 ++++++*/
    'y080101' => '投放广告成功',
    'x080101' => '投放广告失败',
    'y080102' => '广告存在',
    'x080102' => '广告不存在',
    'y080103' => '更新广告成功',
    'x080103' => '没有做任何修改',
    'y080104' => '删除广告成功',
    'x080104' => '未删除任何广告',

    'y080105' => '创建广告表成功',
    'x080105' => '创建广告表失败',
    'y080106' => '更新广告表成功',
    'x080106' => '没有做任何修改',
    'y080107' => '删除广告表成功',
    'x080107' => '未删除任何表',

    'y080111' => '无需更新广告表',

    /*++++++ x-8-2-- 验证 ++++++*/
    'x080201' => '请输入广告名称',
    'x080202' => '广告名称不能超过 100 中文，300 英文',
    'x080203' => '请选择广告位',
    'x080204' => '请选择投放类型',
    'x080205' => '请输入链接地址',
    'x080206' => '链接地址不能超过 3000 字符',
    'x080207' => '备注不能超过 100 中文，300 英文',
    'x080208' => '请选择状态',
    'x080209' => '请选择展现几率',
    'x080210' => '展现几率不能超过 100%',
    'x080211' => '展现几率必须是数字',
    'x080212' => '请选择广告类型',
    'x080213' => '文字内容不能超过 1000 中文，3000 英文',
    'x080214' => '请输入生效时间',
    'x080215' => '生效时间格式错误',
    'x080216' => '请输入结束时间',
    'x080217' => '结束时间格式错误',
    'x080218' => '请输入展示数',
    'x080219' => '展示数只能为数字',
    'x080220' => '请输入点击数',
    'x080221' => '点击数只能为数字',
    'x080222' => '请选择广告图片',
    'x080223' => '请输入投放条件',
    'x080224' => '广告图片选择错误',
    'x080225' => '投放条件只能为数字',
    'x080226' => '请输入文字内容',
    'x080227' => '请选择广告图片或输入文字内容',
    'x080228' => '获取广告 ID 错误',
    'x080229' => '此广告已失效',
    'x080230' => '尚未创建广告位',

    /*++++++ x-8-3-- 权限 ++++++*/
    'x080301' => '您没有浏览广告的权限',
    'x080302' => '您没有投放广告的权限',
    'x080303' => '您没有编辑广告的权限',
    'x080304' => '您没有删除广告的权限',
    'x080305' => '您没有查看广告统计的权限',

    /*++++++ x-8-4-- 状态 ++++++*/
    'y080401' => '上传成功',
    'y080402' => '生成缩略图成功',
    'x080402' => '未生成缩略图',
    'y080403' => '上传初始化成功',
    'y080404' => '插入图片成功',
    'x080405' => '尚未设置允许上传类型',
    'y080406' => '此广告被使用',
    'x080406' => '此广告未使用',
    'y080407' => '广告清理完毕',
    'x080407' => '正在清理广告',
    'y080408' => '回收站清空完毕',
    'x080408' => '正在清空回收站',
    'y080409' => '重新生成缩略图完毕',
    'x080409' => '正在重新生成缩略图',


    /*@@@@@@ x-9---- 统计 @@@@@@*/

    /*++++++ x-9-1-- 数据 ++++++*/
    'y090101' => '插入统计数据成功',
    'x090101' => '插入统计数据失败',
    'y090102' => '统计数据存在',
    'x090102' => '统计数据不存在',
    'y090103' => '更新统计数据成功',
    'x090103' => '没有做任何修改',
    'y090104' => '删除统计数据成功',
    'x090104' => '未删除任何统计数据',

    'y090105' => '创建统计表成功',
    'x090105' => '创建统计表失败',
    'y090106' => '更新统计表成功',
    'x090106' => '没有做任何修改',
    'y090107' => '删除统计表成功',
    'x090107' => '未删除任何表',

    'y090111' => '无需更新统计表',


    /*@@@@@@ x10---- 目录 @@@@@@*/

    /*++++++ x10-1-- 目录 ++++++*/
    'y100101' => '创建目录成功',
    'x100101' => '创建目录失败',
    'y100102' => '目录存在',
    'x100102' => '目录不存在',
    'y100103' => '更新目录成功',
    'x100103' => '没有做任何修改',
    'y100104' => '删除目录成功',
    'x100104' => '未删除任何目录',

    /*++++++ x10-2-- php 上传处理 ++++++*/
    'x100201' => '上传的文件超过了 php.ini 的设置', //上传的文件超过了 php.ini 中的设置
    'x100202' => '上传文件的大小超过了表单的设置', //上传文件的大小超过了表单的设置
    'x100203' => '文件只有部分被上传', //文件只有部分被上传
    'x100204' => '没有文件被上传', //没有文件被上传
    'x100206' => '找不到临时目录', //找不到临时目录
    'x100207' => '文件写入失败', //找不到临时目录


    /*@@@@@@ x11---- 短信 @@@@@@*/

    /*++++++ x11-1-- 数据 ++++++*/
    'y110101' => '发送短信成功',
    'x110101' => '发送短信失败',
    'y110102' => '短信存在',
    'x110102' => '短信不存在',
    'y110103' => '更新短信成功',
    'x110103' => '没有做任何修改',
    'y110104' => '删除短信成功',
    'x110104' => '未删除任何短信',

    'y110105' => '创建短信表成功',
    'x110105' => '创建短信表失败',
    'y110106' => '更新短信表成功',
    'x110106' => '没有做任何修改',
    'y110107' => '删除短信表成功',
    'x110107' => '未删除任何表',

    'y110109' => '撤回短信成功',
    'x110109' => '未撤回任何短信',

    /*++++++ x11-2-- 验证 ++++++*/
    'x110201' => '请输入短信内容',
    'x110202' => '标题不能超过 30 中文，90 英文',
    'x110203' => '内容不能超过 300 中文，900 英文',
    'x110204' => '请选择群发方式',
    'x110205' => '请输入收件人',
    'x110206' => '请输入关键词',
    'x110207' => '请输入关键词',
    'x110208' => '请输入起始用户 ID',
    'x110209' => '用户 ID 只能为数字',
    'x110210' => '请输入结束用户 ID',
    'x110211' => '获取短信 ID 错误',
    'x110212' => '请输入起始时间',
    'x110213' => '时间格式错误',
    'x110214' => '请输入结束时间',
    'x110215' => '请输入起始时间',
    'x110216' => '时间格式错误',
    'x110217' => '请输入结束时间',
    'x110218' => '请选择短信类型',
    'x110219' => '请选择短信状态',

    /*++++++ x11-3-- 权限 ++++++*/
    'x110301' => '您没有浏览短信的权限',
    'x110302' => '您没有群发短信的权限',
    'x110303' => '您没有发送短信的权限',
    'x110304' => '您没有删除短信的权限',
    'x110305' => '您没有编辑短信的权限',

    /*++++++ x11-4-- 权限 ++++++*/
    'y110401' => '您有未读短信',
    'x110401' => '您没有未读短信',
    'y110402' => '列出短信成功',
    'x110403' => '该短信不属于您',

    /*@@@@@@ x12---- 链接 @@@@@@*/

    /*++++++ x12-1-- 数据 ++++++*/
    'y120101' => '创建链接成功',
    'x120101' => '创建链接失败',
    'y120102' => '链接存在',
    'x120102' => '链接不存在',
    'y120103' => '更新链接成功',
    'x120103' => '没有做任何修改',
    'y120104' => '删除链接成功',
    'x120104' => '未删除任何链接',
    'y120105' => '创建链接表成功',
    'x120105' => '创建链接表失败',
    'y120106' => '更新链接表成功',
    'x120106' => '没有做任何修改',
    'y120107' => '删除链接表成功',
    'x120107' => '未删除任何表',
    'y120111' => '无需更新链接表',

    /*++++++ x12-2-- 验证 ++++++*/
    'x120201' => '请输入链接名称',
    'x120202' => '链接名称不能超过 100 中文，300 英文',
    'x120203' => '请输入链接地址',
    'x120204' => '链接地址不能超过 300 中文，900 英文',
    'x120205' => '链接地址格式错误',
    'x120207' => '请选择链接状态',
    'x120208' => '请选择隶属栏目',
    'x120209' => '获取链接 ID 错误',
    'x120210' => '请选择是否在新窗口中打开',
    'x120211' => '请选择排序方式',
    'x120212' => '输入的 ID 错误',

    /*++++++ x12-3-- 权限 ++++++*/
    'x120301' => '您没有浏览链接的权限',
    'x120302' => '您没有创建链接的权限',
    'x120303' => '您没有编辑链接的权限',
    'x120304' => '您没有删除链接的权限',


    /*@@@@@@ x22---- 通知 @@@@@@*/

    /*++++++ x22-2-- 验证 ++++++*/
    'x220201' => '无时间戳',
    'x220202' => '无随机字符串',
    'x220203' => '无签名',
    'x220204' => '无待解密数据',
    'x220206' => '获取应用 ID 错误',
    'x220207' => '应用 ID 必须为数字',
    'x220208' => '应用 ID 错误',
    'x220209' => '无通信密钥',
    'x220210' => '通信密钥最长 64 位',
    'x220211' => '通信密钥格式错误',
    'x220212' => '通信密钥错误',
    'x220213' => '时间戳失效',
);
