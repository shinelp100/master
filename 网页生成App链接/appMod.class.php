<?php

/*
    * APP接口
    * Lijingang
    * 2014/12/01
    */

class appMod extends CommonMod
{
    private  $bankname = array(
        'ABC'=>array('single'=>'5万','single-card-days'=>'5万','single-days'=>'5万','binkname'=>'农业银行','bankimg'=>'/template/default/public/images/bank/nongye_bank.png'),
        'CCB'=>array('single'=>'50万','single-card-days'=>'50万','single-days'=>'50万','binkname'=>'建设银行','bankimg'=>'/template/default/public/images/bank/jianshe_bank.png'),
        'BOC'=>array('single'=>'5万','single-card-days'=>'50万','single-days'=>'50万','binkname'=>'中国银行','bankimg'=>'/template/default/public/images/bank/zhongguo_bank.png'),
        'CEB'=>array('single'=>'5万','single-card-days'=>'50万','single-days'=>'50万','binkname'=>'光大银行','bankimg'=>'/template/default/public/images/bank/guangda_bank.png'),
        'CIB'=>array('single'=>'5万','single-card-days'=>'5万','single-days'=>'50万','binkname'=>'兴业银行','bankimg'=>'/template/default/public/images/bank/xingye_bank.png'),
        'CITIC'=>array('single'=>'50万','single-card-days'=>'50万','single-days'=>'50万','binkname'=>'中信银行','bankimg'=>'/template/default/public/images/bank/zhongxin_bank.png'),
        'PINGAN'=>array('single'=>'5000','single-card-days'=>'5000','single-days'=>'50万','binkname'=>'平安银行','bankimg'=>'/template/default/public/images/bank/pingan_bank.png'),
        'BOS'=>array('single'=>'5000','single-card-days'=>'5万','single-days'=>'50万','binkname'=>'上海银行','bankimg'=>'/template/default/public/images/bank/shanghai_bank.png'),
        'CBHB'=>array('single'=>'50万','single-card-days'=>'50万','single-days'=>'50万','binkname'=>'渤海银行','bankimg'=>'/template/default/public/images/bank/bohai_bank.png'),
        'PSBC'=>array('single'=>'5000','single-card-days'=>'5000','single-days'=>'50万','binkname'=>'中国邮政储蓄银行','bankimg'=>'/template/default/public/images/bank/youzheng_bank.png'),
        'SPDB'=>array('single'=>'5000','single-card-days'=>'5000','single-days'=>'50万','binkname'=>'浦发银行','bankimg'=>'/template/default/public/images/bank/pufa_bank.png'),
        'ICBC'=>array('single'=>'5万','single-card-days'=>'5万','single-days'=>'50万','binkname'=>'中国工商银行','bankimg'=>'/template/default/public/images/bank/gongshang_bank.png'),
    );
    public function __construct()
    {
        parent::__construct();
        /*      $ip = get_client_ip();
        if($ip!='115.28.152.140')
        {
            echo '无权访问';
            exit;
        }  */
    }

    public function test()
    {
        //echo(date('Y-m-d H:i:s', 1426398058 ));
        //exit;
        //print_r(json_decode($this->mcrypt->decrypt('ROIQlIS84dNIb+CZJSkpxSM0d16xdfnhMrZdZlZoyrZ5ErTz0RaE8OEU2OCssbIiP6elSG3g9MGdVj/BoH+b4g==')));
        //exit;

        $tokenService = new TokenService();
        $token = array();
        $token['username'] = 'xizhuxi_888';
        $token['uid'] = 6476;
        $token['expired_time'] = $tokenService->getExpiredTime();
        $token['token'] = $this->mcrypt->encrypt(json_encode(array('uid' => $token['uid'], 'username' => $token['username'], 'expiredtime' => $token['expired_time'])));

        echo($token['token']);
        exit;

//        $merPriv = json_decode(base64_decode(urldecode('eyJjb3Vwb24iOiIxNjQifQ%3D%3D')), true);
//        print_r($merPriv);
//        exit;

        echo(strtotime('2015-04-12 20:30:00'));
        echo('</br>');
        echo(strtotime('2015-04-27 23:59:50'));
        exit;

        echo(time());
        echo('</br>');
        echo(strtotime('-10 minute'));
exit;
        echo('</br>');
        echo(date('Y-m-d H:i',strtotime('-10 minute')));

        exit;


        echo(date('Y-m-d H:i', 1425537013));
        exit;

        // 生成生利宝记录
        $ordId = '';
        if (preg_match('/.*\.+?(\d+)?\s*(\d+)$/', microtime(), $microTimeArr)) {
            //$hetongNumber = date('YmdHis', $microTimeArr[2]) . substr($microTimeArr[1], 0, 6);
            $ordId = date('YmdHis', $microTimeArr[2]) . mt_rand(111111,999999);
        }

        $SLBOrderService = new SLBOrderService();
        $rtnId = $SLBOrderService->createSLBOrder($ordId, 3669);

        echo($rtnId);
        exit;

        //echo(strtotime('+10 day'));
        //echo(time());

        echo(strtotime('2015-02-03 10:30:00'));
        exit;

        $str=json_decode($this->mcrypt->decrypt('FmVPAvMk/cAX/FFoaYU3TaZqVOzSrjJGUDxD6jYAVwrNY55gmPJAUylHgxbOtMN6D7acgwZ4glRXDwj9ZnSD0w=='));
        print_r($str);
        exit;

        echo(date('Y-m-d h:m:s', 1404770687));
        echo('</br>');
        echo(date('Y-m-d h:m:s', 1404770826));
        echo('</br>');
        echo(date('Y-m-d h:m:s', 1404777428));
        echo('</br>');
        echo(date('Y-m-d h:m:s', 1411367943));
        echo('</br>');
        echo(date('Y-m-d h:m:s', 1413374999));
        exit;

        echo $this->mcrypt->decrypt('FmVPAvMk/cAX/FFoaYU3TaZqVOzSrjJGUDxD6jYAVwrNY55gmPJAUylHgxbOtMN6D7acgwZ4glRXDwj9ZnSD0w==');
        exit;

        $i=-1;
        echo(!$i);
        echo('</br>');
        if(!$i){
            echo('!$i is true');
            echo('</br>');
        }
        else{
            echo('!$i is false');
            echo('</br>');
        }
        $i=0;
        echo(!$i);
        echo('</br>');
        $i=1;
        echo(!$i);
        echo('</br>');
        exit;

        echo date('Y-m-d h:m:s',1416207600);
        exit;

        echo number_format(120.12,0);
        exit;

        //昨日收益 打败多少股东
        $beginTime = strtotime("-1 day");
        $endTime = time();
        model('RefundRecord')->getUserTotalIncomeByDate(null, $beginTime, $endTime);
        exit;


        $arr1 = array('a','b');
        print_r($arr1);
        $arr2 = $arr1;
        print_r($arr2);
        $arr2[0]='aa';
        print_r($arr2);
        print_r($arr1);

        $arr2[]='c';
        print_r($arr2);
        print_r($arr1);

        exit;

      /*  echo(15000/5000);
        exit;

        $tz = new DateTimeZone('Asia/Shanghai');
        $dt = new DateTime();
        $dt->setTimestamp(1421807400);*/
        //$dt->setTimezone($tz);

       // print_r($dt);
        //echo(date('Y-m-d h:m:s',$dt));
       // echo($dt->date);
        //var_dump($dt['date']);
        //echo(date('Y-m-d h:m:s', 1421807400));
        echo(date('Y-m-d h:m:s', 1409827840));

        //echo(mb_convert_encoding('陈云',"GB2312","UTF-8"));
        exit;

        echo(date('h:m:s', 154243));
        exit;

        echo('__ROOT__='.__ROOT__);
        echo('</br>');
        echo('__ROOTDIR__='.__ROOTDIR__);
        echo('</br>');
        echo('__UPDIR__='.__UPDIR__);
        echo('</br>');
        echo('__TPL__='.__TPL__);
        echo('</br>');
        echo('__UPL__='.__UPL__);
        echo('</br>');
        exit;


        echo(dirname(__FILE__).'</br>');
        echo(realpath(dirname(__FILE__)).'</br>');
        echo(dirname(__FILE__).'/'.'../task/test1.php'.'</br>');
        echo(realpath(dirname(__FILE__).'/'.'../task/test1.php'));
        exit;

        $token = new TokenModel();
        $token->uid = 1;
        $token->username = 'coldbig';
        $token->expired = '1213123121';

        $jsonToken = json_encode($token);
        echo($jsonToken . '</br>');

        echo('</br>');
        echo('</br>');
        echo $this->mcrypt->encrypt('123456') . "<br/>";
        echo('</br>');
        echo('</br>');
        echo $this->mcrypt->decrypt('FmVPAvMk/cAX/FFoaYU3TaZqVOzSrjJGUDxD6jYAVwrNY55gmPJAUylHgxbOtMN6D7acgwZ4glRXDwj9ZnSD0w==');

        //echo $this->MCrypt->encrypt('{"userid":1,"username":"coldpig","expired":"1213123121"}') . "<br/>";
        //echo $this->MCrypt->decrypt('iCmnZUUYomklibCfGuHK8HAWCySBDcQbfuQa1QV3xWZdCfwPVpm1RX8LtuOYSmI7d9u+i9yhYjncJQkp7RyJqg==');
    }


// 以上都是测试方法=======


    //版本更新
    public function get_version(){
        // 返回值
        $returnModel = new ReturnModel();

        // 请求参数
        $currVersionCode = in($_GET['versioncode']);
        //idfa
        $idfa = isset($_GET['adid']) ? in($_GET['adid']) : '';
        if (!empty($idfa) && $this->clientType == 'ios') {
            $uid = $this->userToken->uid;
            try {
                $record = model('IDFA')->getRecord($idfa);
                if (!$record) {
                    model('IDFA')->addRecord($idfa);
                }
            } catch (Exception $e) {
                // write log
                $this->logService->logError('记录IDFA异常', $e->getMessage());
            }
        }
        if (!empty($currVersionCode) && !empty($this->clientType)) {
            try {
                $appVersionService = new AppVersionService();

                // 检查用户名、手机号 是否存在
                $currVersion = $appVersionService->getCurrentVersion($this->clientType);
                if (!empty($currVersion)) {
                    $data = array();
                    $data['version_code'] = $currVersion['curr_version_code'];
                    $data['version_name'] = $currVersion['curr_version_name'];
                    $data['update_content'] = $currVersion['curr_update_content'];
                    $data['update_type'] = 0;  // 默认已经是最新版本

                    $oldVersionArray = json_decode($currVersion['old_version_update_type']);
                    foreach($oldVersionArray as $key=>$val){
                        if($currVersionCode == $val->versioncode){
                            $data['update_type'] = $val->updatetype;
                            break;
                        }
                    }

                    $returnModel->data->setContent($data);
                }
            } catch (CustomException $ex) {
                $returnModel->data->initFail('检查版本异常');
                // write log
                $this->logService->logError('检查版本异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail('当前版本号参数为空');
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //利率
    public function get_bankrate(){
        // 返回值
        $returnModel = new ReturnModel();

        $data = array();
        $data[]= array("period"=>0,"rate"=>0.35);
        $data[]= array("period"=>90,"rate"=>2.15);
        $data[]= array("period"=>180,"rate"=>2.35);
        $data[]= array("period"=>360,"rate"=>2.55);
        $data[]= array("period"=>720,"rate"=>3.00);
        $data[]= array("period"=>1080,"rate"=>3.50);
        $data[]= array("period"=>1800,"rate"=>3.75);

        $returnModel->data->setContent($data);

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //帮助中心
    public function get_help(){
        $this->display('help/index.html');
    }

    //服务协议
    public function get_xieyi(){
        $this->display('help/xieyi.html');
    }

    //快捷充值说明
    public function get_qp_shuoming(){
        $this->display('help/qp_shuoming.html');
    }

    //登录验证码
    public function login_vcode()
    {
        try {
            $loginUuid = in($_GET['loginuuid']);
            if (!empty($loginUuid)) {
                $vCode = "" . rand(1000, 9999);

                $loginVerifyCodeService = new LoginVerifyCodeService();
                $verifyCode = $loginVerifyCodeService->getVerifyCode($loginUuid);
                if (!empty($verifyCode)) {
                    $loginVerifyCodeService->updateVerifyCode($loginUuid, $vCode);
                }

                $image = new Image();
                $image->buildImageVerify(30, 15, $vCode);
            }
        } catch (CustomException $ex) {
            $this->logService->logError('生成验证码异常', $ex->getErrorMessage(), $this->clientType);
        } catch (Exception $e) {
            $this->logService->logError('生成验证码异常', $e->getMessage(), $this->clientType);
        }
    }

    //登陆
    public function login()
    {
        // 返回值
        $returnModel = new ReturnModel();

        // 请求参数
        $username = urldecode(in($_GET['username']));
        $password = base64_decode(in($_GET['password']));
        $device_name = urldecode(in($_GET['devicename']));
        $client_info = urldecode(in($_GET['clientinfo']));
        $client_type = in($_GET['clienttype']);

        $verify_code = intval($_GET['verifycode']);
        $loginUuid = in($_GET['loginuuid']);
        if (empty($loginUuid)) {
            $loginUuid = UuidUtil::createUuid();
        }

        // 登录验证码Service类
        $loginVerifyCodeService = new LoginVerifyCodeService();

        // 参数验证成功标识
        $param_valid_flag = true;

        if (!empty($username) && !empty($password)) {
            $verifyCode = $loginVerifyCodeService->getVerifyCode($loginUuid);
            if (!empty($verifyCode)) {
                if (intval($verifyCode['fail_times']) >= $this->getMaxLoginFailTimes()) {
                    if (empty($verify_code)) {
                        $returnModel->data->initFail('验证码为空');
                        // 参数验证失败
                        $param_valid_flag = false;
                    } else if (intval($verify_code) != intval($verifyCode['code'])) {
                        $returnModel->data->initFail('验证码错误');
                        // 参数验证失败
                        $param_valid_flag = false;

                        // 记录日志
                        $this->logService->logInfo('验证码错误', '$get_code=' . $verify_code . '---code=' . intval($verifyCode['code']) . '---login_uuid=' . $loginUuid, $this->clientType);
                    }
                }
            } else {
                $loginVerifyCodeService->insertVerifyCode($loginUuid, null);
            }

            if ($param_valid_flag) {
                // 密码解密
                $password = $this->mcrypt->decrypt($password);
                // 登录验证
                try {
                    $userService = new UserService();
                    $user = $userService->loginCheck($username, $password);
                    //print_r($user);
                } catch (CustomException $ex) {
                    $returnModel->data->initFail('验证用户发生异常');
                    // write log
                    $this->logService->logError('登录验证', $ex->getErrorMessage(), $this->clientType);
                }

                if (is_array($user)) {
                    // 记录登录Token
                    $tokenService = new TokenService();

                    $token = array();
                    $token['username'] = $user['username'];
                    $token['expired_time'] = $tokenService->getExpiredTime();
                    $token['device_name'] = $device_name;
                    $token['client_info'] = $client_info;
                    $token['client_type'] = $client_type;
                    $token['create_time'] = time();
                    $token['token'] = $this->mcrypt->encrypt(json_encode(array('uid' => $user['id'], 'username' => $user['username'], 'expiredtime' => $token['expired_time'])));
                    try {
                        $id = $tokenService->insert($token);
                        if ($id > 0) {
                            $returnModel->data->setContent(array('token' => $token['token'], 'expiredtime' => $token['expired_time'], 'username' => $user['username']));
                        } else {
                            $returnModel->data->initFail('生成Token失败');
                        }
                    } catch (CustomException $ex) {
                        $returnModel->data->initFail('生成Token发生异常');
                        // write log
                        $this->logService->logError('生成Token', $ex->getErrorMessage());
                    }
                } else {
                    $returnModel->data->initFail('帐号或密码错误');
                }
            }
        } else {
            $returnModel->initFail('用户名或密码为空');
        }

        // 登录失败
        if (!empty($returnModel->data) && $returnModel->data->result == 'fail') {
            $verifyCode = $loginVerifyCodeService->getVerifyCode($loginUuid);
            if (!empty($verifyCode)) {
                $verifyCode['fail_times'] = intval($verifyCode['fail_times']) + 1;
                $loginVerifyCodeService->updateVerifyCodeFailTimes($loginUuid, intval($verifyCode['fail_times']));

                if (intval($verifyCode['fail_times']) >= $this->config['LOGIN_TRY_TIMES_MAX']) {
                    $returnModel->data->setContent(array('needvcode' => 1, 'vcodeurl' => $this->config['URL_HTTP_HOST'] . '/app/login_vcode?clienttype=' . $this->clientType . '&loginuuid=' . $loginUuid));
                } else {
                    $returnModel->data->setContent(array('needvcode' => 0, 'vcodeurl' => ''));
                }
            }
        }

        // 登录成功，登录失败次数 重置 为 0
        if ($returnModel->status == 'success' && !empty($returnModel->data) && $returnModel->data->result == 'success') {
            $loginVerifyCodeService->updateVerifyCodeFailTimes($loginUuid, 0);
        }

        if (!empty($returnModel->data->content)) {
            $returnModel->data->content['loginuuid'] = $loginUuid;
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //退出登录
    public function login_out(){
        // 返回值
        $returnModel = new ReturnModel();

         // 参数验证成功标识
        $param_valid_flag = true;

        // 登录Token
        $tokenService = new TokenService();
        try{
            $tokenService->updateExpiredTime($this->userToken->username);
        }
        catch(CustomException $ex){
            // write log
            $this->logService->logError('退出登录-异常', $ex->getErrorMessage());
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //注册验证码
    public function reg_vcode()
    {
        // 返回值
        $returnModel = new ReturnModel();

        $mobile = intval(in($_GET['mobile']));

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (empty($mobile)) {
            $validResult = '手机号为空';
            $param_valid_flag = false;
        }
        else{
            try{
                $userService = new UserService();
                $checkResult = $userService->regMobielCheck($mobile);
                if (!empty($checkResult)) {
                    $validResult = $checkResult;
                    $param_valid_flag = false;
                }
            }
            catch(CustomException $ex){
                $param_valid_flag = false;
                $validResult = '获取验证码失败';

                // write log
                $this->logService->logError('获取验证码失败', $ex->getErrorMessage());
            }
            catch(Exception $ex){
                $param_valid_flag = false;
                $validResult = '获取验证码失败';

                // write log
                $this->logService->logError('获取验证码失败', $ex->getMessage());
            }
        }

        if ($param_valid_flag) {
            try {
                $userMobileVerifyService = new UserMobileVerifyService();
                $userMobileVerifyService->sendRegVerityCode($mobile);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('发送验证码异常');
                // write log
                $this->logService->logError('发送注册验证码异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //注册第一步
    public function reg_one()
    {
        // 返回值
        $returnModel = new ReturnModel();

        // 请求参数
        $username = in($_GET['username']);
        $mobile = in($_GET['mobile']);

        if (!empty($username) && !empty($mobile)) {
            try {
                $userService = new UserService();

                // 检查用户名、手机号 是否存在
                $result = $userService->regCheck($username, $mobile);
                if (!empty($result)) {
                    $returnModel->data->initFail($result);
                }
            } catch (CustomException $ex) {
                $returnModel->data->initFail('注册发生异常');
                // write log
                $this->logService->logError('注册第一步验证', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail('用户名或手机号为空');
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //注册第二步
    public function reg_two()
    {
        // 返回值
        $returnModel = new ReturnModel();

        // 请求参数
        $username = in($_GET['username']);
        $mobile = in($_GET['mobile']);
        $password = $this->mcrypt->decrypt(base64_decode(in($_GET['password'])));
        $verify_code = intval($_GET['verifycode']);
        $device_name = base64_decode(in($_GET['devicename']));
        $client_info = base64_decode(in($_GET['clientinfo']));

        $userService = new UserService();

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (empty($username)) {
            $validResult = '用户名为空';
            $param_valid_flag = false;
        }
        else{
            // 检查用户名、手机号 是否存在
            $checkResult = $userService->regCheck($username, $mobile);
            if (!empty($checkResult)) {
                $validResult = $checkResult;
                $param_valid_flag = false;
            }
        }
        if (empty($mobile)) {
            $validResult .= ',手机号为空';
            $param_valid_flag = false;
        }
        if (empty($password)) {
            $validResult .= ',密码为空';
            $param_valid_flag = false;
        }
        if (empty($verify_code)) {
            $validResult .= ',验证码为空';
            $param_valid_flag = false;
        } else {
            try {
                $userMobileVerifyService = new UserMobileVerifyService();
                $checkCode = $userMobileVerifyService->regVerityCodeCheck($mobile, $verify_code);
                if (!empty($checkCode)) {
                    $validResult .= ',验证码错误';
                    $param_valid_flag = false;
                }
            } catch (CustomException $ex) {
                $returnModel->data->initFail('注册验证码验证异常');
                // write log
                $this->logService->logError('注册第二步验证验证码', $ex->getErrorMessage());
                $param_valid_flag = false;
            }
        }

        if ($param_valid_flag) {
            try {
                // 密码加密
                $password = md5($password);

                //注册用户信息
                $uid = $userService->regSave($username, $mobile, $password, $this->clientType);
                if ($uid > 0) {
                    try {
                        // 记录登录Token
                        $tokenService = new TokenService();

                        $token = array();
                        $token['username'] = $username;
                        $token['expired_time'] = $tokenService->getExpiredTime();
                        $token['device_name'] = $device_name;
                        $token['client_info'] = $client_info;
                        $token['client_type'] = $this->clientType;
                        $token['create_time'] = time();
                        $token['token'] = $this->mcrypt->encrypt(json_encode(array('uid' => $uid, 'username' => $username, 'expiredtime' => $token['expired_time'])));

                        $id = $tokenService->insert($token);
                        if ($id > 0) {
                            $returnModel->data->setContent(array('token' => $token['token'], 'expiredtime' => $token['expired_time']));
                        } else {
                            //$returnModel->data->initFail('生成Token失败');
                        }
                    } catch (CustomException $ex) {
                        //$returnModel->data->initFail('生成Token发生异常');
                        // write log
                        $this->logService->logError('生成Token', $ex->getErrorMessage());
                    }
                } else {
                    $returnModel->data->initFail('注册用户失败');
                }
            } catch (CustomException $ex) {
                $returnModel->data->initFail('注册发生异常');
                // write log
                $this->logService->logError('注册第二步验证', $ex->getErrorMessage());
            }
        } else {
            if (!empty($validResult) && substr($validResult, 0, 1) == ',') {
                $validResult = substr($validResult, 1, strlen($validResult) - 1);
            }
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //注册第一步 V2.0
    public function reg_one_v2()
    {
        // 返回值
        $returnModel = new ReturnModel();

        // 请求参数
        $mobile = in($_GET['mobile']);
        $verify_code = intval($_GET['verifycode']);

        // 参数验证成功标识
        $param_valid_flag = true;
        $validResult = null;

        if (empty($mobile)) {
            $validResult = '手机号为空';
            $param_valid_flag = false;
        }
        else{
            // 检查手机号 是否存在
            try{
                $userService = new UserService();
                $checkResult = $userService->regMobielCheck($mobile);
                if (!empty($checkResult)) {
                    $validResult = ','.$checkResult;
                    $param_valid_flag = false;
                }
            } catch (CustomException $ex) {
                $validResult .= ',手机验证异常';
                $param_valid_flag = false;
                // write log
                $this->logService->logError('注册第一步手机验证异常', $ex->getErrorMessage());
            }
        }

        if (empty($verify_code)) {
            $validResult .= ',验证码为空';
            $param_valid_flag = false;
        }
        else{
            // 检查验证码是否正确
            try {
                $userMobileVerifyService = new UserMobileVerifyService();
                $checkResult = $userMobileVerifyService->regVerityCodeCheck($mobile, $verify_code);
                if (!empty($checkResult)) {
                    $validResult .= ','.$checkResult;
                    $param_valid_flag = false;
                }
            } catch (CustomException $ex) {
                $validResult .= ',验证码验证异常';
                $param_valid_flag = false;
                // write log
                $this->logService->logError('注册第一步验证码验证异常', $ex->getErrorMessage());
            }
        }

        //参数验证通过
        if (!$param_valid_flag) {
            if (!empty($validResult) && substr($validResult, 0, 1) == ',') {
                $validResult = substr($validResult, 1, strlen($validResult) - 1);
            }
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //注册第二步 V2.0
    public function reg_two_v2()
    {
        // 返回值
        $returnModel = new ReturnModel();

        // 请求参数
        $username = in($_GET['username']);
        $mobile = in($_GET['mobile']);
        $password = in($_GET['password']);
        $device_name = base64_decode(in($_GET['devicename']));
        $client_info = base64_decode(in($_GET['clientinfo']));

        $userService = new UserService();

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (empty($username)) {
            $validResult = '用户名为空';
            $param_valid_flag = false;
        }
        if (empty($mobile)) {
            $validResult .= ',手机号为空';
            $param_valid_flag = false;
        }
        if (empty($password)) {
            $validResult .= ',密码为空';
            $param_valid_flag = false;
        }

        if ($param_valid_flag) {
            // 检查用户名、手机号 是否存在
            $checkResult = $userService->regCheck($username, $mobile);
            if (!empty($checkResult)) {
                $validResult = $checkResult;
                $param_valid_flag = false;
            }
        }

        if ($param_valid_flag) {
            try {
                // 密码加密
                $password = md5($this->mcrypt->decrypt(base64_decode($password)));

                //注册用户信息
                $uid = $userService->regSave($username, $mobile, $password, $this->clientType);
                if ($uid > 0) {
                    try {
                        // 记录登录Token
                        $tokenService = new TokenService();

                        $token = array();
                        $token['username'] = $username;
                        $token['expired_time'] = $tokenService->getExpiredTime();
                        $token['device_name'] = $device_name;
                        $token['client_info'] = $client_info;
                        $token['client_type'] = $this->clientType;
                        $token['create_time'] = time();
                        $token['token'] = $this->mcrypt->encrypt(json_encode(array('uid' => $uid, 'username' => $username, 'expiredtime' => $token['expired_time'])));

                        $id = $tokenService->insert($token);
                        if ($id > 0) {
                            $returnModel->data->setContent(array('token' => $token['token'], 'expiredtime' => $token['expired_time']));
                        } else {
                            //$returnModel->data->initFail('生成Token失败');
                        }
                    } catch (CustomException $ex) {
                        //$returnModel->data->initFail('生成Token发生异常');
                        // write log
                        $this->logService->logError('生成Token', $ex->getErrorMessage());
                    }
                    try{
                        $url = trim($this->config['Wap']['Host'],'/').'/active/coupon/exchangecoupon?uid='.$uid;
                        $synCoupon = Http::doGet($url);
                        if(!$synCoupon){
                            throw new Exception('请求无响应！');
                        }
                    }catch(Exception $e){
                        $this->logService->logError('同步代金券',$e->getMessage());
                    }
                } else {
                    $returnModel->data->initFail('注册用户失败');
                }
            } catch (CustomException $ex) {
                $returnModel->data->initFail('注册发生异常');
                // write log
                $this->logService->logError('注册第二步验证', $ex->getErrorMessage());
            }
        } else {
            if (!empty($validResult) && substr($validResult, 0, 1) == ',') {
                $validResult = substr($validResult, 1, strlen($validResult) - 1);
            }
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }
    //app2.5注册
    public function reg_one_v3(){
        // 返回值
        $returnModel = new ReturnModel();
        // 请求参数
        $username = in($_GET['username']);
        $mobile = in($_GET['mobile']);
        $password = in($_GET['password']);
        $verify_code = intval($_GET['verifycode']);
        $yq_code = in($_GET['yqcode']);//邀请码
        $device_name = base64_decode(in($_GET['devicename']));
        $client_info = base64_decode(in($_GET['clientinfo']));
        $userService = new UserService();
        // 参数验证成功标识
        $param_valid_flag = true;
        $validResult = null;

        if (empty($username)) {
            $validResult = '用户名为空';
            $param_valid_flag = false;
        }
        if (empty($mobile)) {
            $validResult .= ',手机号为空';
            $param_valid_flag = false;
        }
        if (empty($password)) {
            $validResult .= ',密码为空';
            $param_valid_flag = false;
        }

        if ($param_valid_flag) {
            // 检查用户名、手机号 是否存在
            $checkResult = $userService->regCheck($username, $mobile);
            if (!empty($checkResult)) {
                $validResult = $checkResult;
                $param_valid_flag = false;
            }
        }
        if (empty($verify_code)) {
            $validResult .= ',验证码为空';
            $param_valid_flag = false;
        }

        if ($param_valid_flag) {
            // 检查验证码是否正确
            try {
                //有邀请码验证邀请码
                if(!empty($yq_code)){
                    $ishaveyqm = $userService->getUserYqCode($yq_code);
                    if(empty($ishaveyqm)){
                        $validResult .= ',邀请码填写错误';
                        $param_valid_flag = false;
                    }
                }
                $userMobileVerifyService = new UserMobileVerifyService();
                $checkResult = $userMobileVerifyService->regVerityCodeCheck($mobile, $verify_code);
                if (!empty($checkResult)) {
                    $validResult .= ','.$checkResult;
                    $param_valid_flag = false;
                }
            } catch (CustomException $ex) {
                $validResult .= ',验证码验证异常';
                $param_valid_flag = false;
                // write log
                $this->logService->logError('注册验证码验证异常', $ex->getErrorMessage());
            }
        }else {
            if (!empty($validResult) && substr($validResult, 0, 1) == ',') {
                $validResult = substr($validResult, 1, strlen($validResult) - 1);
            }
            $returnModel->initFail($validResult);
        }
        if ($param_valid_flag) {
            try {
                // 密码加密
                $password = md5($this->mcrypt->decrypt(base64_decode($password)));
                //注册用户信息
                $uid = $userService->regSave($username, $mobile, $password, $this->clientType, $yq_code);
                if ($uid > 0) {
                    try {
                        // 记录登录Token
                        $tokenService = new TokenService();
                        $token = array();
                        $token['username'] = $username;
                        $token['expired_time'] = $tokenService->getExpiredTime();
                        $token['device_name'] = $device_name;
                        $token['client_info'] = $client_info;
                        $token['client_type'] = $this->clientType;
                        $token['create_time'] = time();
                        $token['token'] = $this->mcrypt->encrypt(json_encode(array('uid' => $uid, 'username' => $username, 'expiredtime' => $token['expired_time'])));

                        $id = $tokenService->insert($token);
                        if ($id > 0) {
                        //     //注册发放体验金
                        //     try{
                        //         $experience = Http::doPost(rtrim($this->config['Wap']['Host'],'/').'/experiencedeal/experiencedeal/register-send-coupon',array('experiencedeal_uid'=>$uid ));
                        //         $experience_deal = json_decode($experience,true);
                        //         if($experience_deal['code']==0){
                        //             $ret = $experience_deal['data']['content']['coupon_money_img'];
                        //             $active_url = $experience_deal['data']['content']['active_url'];
                        //             $experiencedeal_title = $experience_deal['data']['content']['experiencedeal_title'];
                        //         }
                        //     }catch(Exception $e){
                        //         $this->logService->logError('注册发放体验金',$e->getMessage());
                        //     }
                            $returnModel->data->setContent(array('token' => $token['token'], 'expiredtime' => $token['expired_time'], 'coupon_money_img'=>'','experiencedeal_title'=>'','experience_deal_active_url'=>''));
                        } else {
                            $returnModel->data->initFail('生成Token失败');
                        }
                    } catch (CustomException $ex) {
                        //$returnModel->data->initFail('生成Token发生异常');
                        // write log
                        $this->logService->logError('生成Token', $ex->getErrorMessage());
                    }

                    //2016年1月29日 15:57:38 分裂红包，注册成功后兑换红包
                    try{
                        $url = trim($this->config['Wap']['Host'],'/').'/active/coupon/exchangecoupon?uid='.$uid;
                        $synCoupon = Http::doGet($url);
                        if(!$synCoupon){
                            throw new Exception('请求无响应！');
                        }
                    }catch(Exception $e){
                        $this->logService->logError('同步代金券',$e->getMessage());
                    }

                } else {
                    $returnModel->data->initFail('注册用户失败');
                }
            } catch (CustomException $ex) {
                $returnModel->data->initFail('注册发生异常');
                // write log
                $this->logService->logError('注册验证', $ex->getErrorMessage());
            }
        }else {
            if (!empty($validResult) && substr($validResult, 0, 1) == ',') {
                $validResult = substr($validResult, 1, strlen($validResult) - 1);
            }
            $returnModel->initFail($validResult);
        }
        // 返回json格式
        echo(json_encode($returnModel));

    }


    //找回密码验证码
    public function find_password_vcode()
    {
        // 返回值
        $returnModel = new ReturnModel();
        //接收验证码，uuid,mobile
        $mobile = intval($_GET['mobile']);
        $uuid = in($_GET['uuid']);
        $imgcode = in($_GET['imgcode']);

        try {
            //设置验证码已使用
            if (empty($mobile)) {
                throw new CustomException(new Exception('手机号为空'));
            }
            if (empty($uuid)) {
                throw new CustomException(new Exception('验证码标识为空'));
            }
            if (empty($imgcode)) {
                throw new CustomException(new Exception('图形验证码为空'));
            }
            if (!Validator::isMobile($mobile)) {
                throw new CustomException(new Exception('手机号格式错误'));
            }
            $imgVerifyRecord = $this->model->table('verify_code')->where(['uuid' => $uuid, 'code' => $imgcode])->order('expired_at desc')->find();
            if (empty($imgVerifyRecord)) {
                //图形验证码过期
                throw new CustomException(new Exception('图形验证码过期'));
            }
            if ($imgVerifyRecord['used'] == 1) {
                //图形验证码已失效
                throw new CustomException(new Exception('图形验证码已失效'));
            }
            if ($imgVerifyRecord['expired_at'] < time()) {
                //图形验证码过期
                throw new CustomException(new Exception('图形验证码过期'));
            }
            $this->model->table('verify_code')->data(['used' => 1])->where(['uuid' => $uuid])->update();
            // 检查用户名、手机号 是否存在
            $userService = new UserService();
            $result = $userService->findPasswordCheck($mobile);
            if (empty($result)) {
                throw new CustomException(new Exception('手机号未注册'));
            }
            $userMobileVerifyService = new UserMobileVerifyService();
            $userMobileVerifyService->sendFindPasswordVerityCode($mobile);
        } catch (CustomException $ex) {
            $returnModel->data->initFail($ex->getErrorSubject());
            // write log
            $this->logService->logError('发送找回密码验证码异常', $ex->getErrorMessage());
        } catch (Exception $e) {
            $returnModel->initFail($e->getMessage());
        }
        echo(json_encode($returnModel));
    }

    // 找回密码第一步
    public function find_password_one()
    {
        // 返回值
        $returnModel = new ReturnModel();

        // 请求参数
        $mobile = intval($_GET['mobile']);
        $verify_code = intval($_GET['verifycode']);

        // 参数验证成功标识
        $param_valid_flag = true;
        $validResult = null;

        if (empty($mobile)) {
            $validResult = '手机号为空';
            $param_valid_flag = false;
        } else if (!Validator::isMobile($mobile)) {
            $validResult = '手机号格式错误';
            $param_valid_flag = false;
        }
        if (empty($verify_code)) {
            $validResult .= ',验证码为空';
            $param_valid_flag = false;
        } else {
            try {
                $userMobileVerifyService = new UserMobileVerifyService();
                $checkCode = $userMobileVerifyService->findPasswordVerityCodeCheck($mobile, $verify_code);
                if (!empty($checkCode)) {
                    $validResult .= ',验证码错误';
                    $param_valid_flag = false;
                }
            } catch (CustomException $ex) {
                $returnModel->data->initFail('找回密码验证码验证异常');
                // write log
                $this->logService->logError('找回密码第一步验证码验证', $ex->getErrorMessage());
                $param_valid_flag = false;
            }
        }

        //参数验证通过
        if ($param_valid_flag) {
            try {
                $userService = new UserService();

                // 检查用户名、手机号 是否存在
                $result = $userService->findPasswordCheck($mobile);
                if (!empty($result)) {
                    $returnModel->data->initFail($result);
                }
            } catch (CustomException $ex) {
                $returnModel->data->initFail('验证手机号异常');
                // write log
                $this->logService->logError('找回密码第一步手机号验证', $ex->getErrorMessage());
            }
            //生成token
            $userInfo = $userService->getUserInfoByMobile($mobile);
            $token = Token::generate();
            //写入数据库
            $userSignTokenService = new UserSignTokenService();
            $data['uid'] = $userInfo['uid'];
            $data['token'] = $token;
            $data['token_type'] = UserSignTokenType::FIND_PASSWORD;//找回密码
            $data['client_type'] = ($this->clientType=='ios') ? 4 : 5;
            $data['expire'] = time()+5*60;
            $data['created_at'] = time();
            $ret = $userSignTokenService ->insert($data);
            if($ret){
                $returnModel->data->setContent(array('find_password_token'=>$token));
            }
        } else {
            if (!empty($validResult) && substr($validResult, 0, 1) == ',') {
                $validResult = substr($validResult, 1, strlen($validResult) - 1);
            }
            $this->logService->logError('找回密码第一步，参数验证错误', $validResult);

            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    // 设置新密码
    public function find_password_two()
    {
        // 返回值
        $returnModel = new ReturnModel();

        // 请求参数
        $mobile = intval($_GET['mobile']);
        $password = $this->mcrypt->decrypt(base64_decode(in($_GET['password'])));
        $token = in($_GET['find_password_token']);

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (empty($mobile)) {
            $validResult = ',手机号为空';
            $param_valid_flag = false;
        }
        if (empty($password)) {
            $validResult .= ',密码为空';
            $param_valid_flag = false;
        }
        if (StringHelper::passSecuryLevel($password) == -1) {
            $validResult .= ',存在非法的字符';
            $param_valid_flag = false;
        }
        if (StringHelper::passSecuryLevel($password) < 2) {
            $validResult .= ',您设置的密码有被盗风险，请重新输入';
            $param_valid_flag = false;
        }
        if (empty($token)) {
            $validResult .= ',版本过低，请升级版本';
            $param_valid_flag = false;
        }
        if ($param_valid_flag) {
            try {
                $userSignTokenService = new UserSignTokenService();
                $userService = new UserService();
                $userInfo = $userService->getUserInfoByMobile($mobile);
                $userToken = $userSignTokenService->get_user_sing_token($userInfo['uid'],$token,UserSignTokenType::FIND_PASSWORD);
                if (!empty($userToken)) {
                    $returnModel->data->initFail($userToken);
                    echo(json_encode($returnModel));exit;
                }
            } catch (CustomException $ex) {
                $returnModel->data->initFail('找回密码token验证异常');
                // write log
                $this->logService->logError('找回密码第二步token验证', $ex->getErrorMessage());
                echo(json_encode($returnModel));exit;
            }

            try {
                $userService = new UserService();

                $password = md5($password);
                // 修改密码
                $rtnError = $userService->findPasswordUpdate($mobile, $password);
                if (!empty($rtnError)) {
                    $returnModel->data->initFail($rtnError);
                }
            } catch (CustomException $ex) {
                $returnModel->data->initFail('设置密码发生异常');
                // write log
                $this->logService->logError('找回密码第二步设置密码', $ex->getErrorMessage());
            }
        } else {
            if (!empty($validResult) && substr($validResult, 0, 1) == ',') {
                $validResult = substr($validResult, 1, strlen($validResult) - 1);
            }
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }


    // 修改密码
    public function update_password()
    {
        // 返回值
        $returnModel = new ReturnModel();

        // 请求参数
        $old_password = $this->mcrypt->decrypt(base64_decode(in($_GET['oldpassword'])));
        $new_password = $this->mcrypt->decrypt(base64_decode(in($_GET['newpassword'])));

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (!$this->isLogin()) {
            $validResult = '没有登录，请登录';
            $param_valid_flag = false;
        }

        if (empty($old_password)) {
            $validResult = ',原始密码为空';
            $param_valid_flag = false;
        }
        if (empty($new_password)) {
            $validResult .= ',新密码为空';
            $param_valid_flag = false;
        }
        if (StringHelper::passSecuryLevel($new_password) == -1) {
            $validResult .= ',存在非法的字符';
            $param_valid_flag = false;
        }
        if (StringHelper::passSecuryLevel($new_password) < 2) {
            $validResult .= ',您设置的密码有被盗风险，请重新输入';
            $param_valid_flag = false;
        }

        if ($param_valid_flag) {
            try {
                $userService = new UserService();
                // 密码解密
                $old_password = md5($old_password);
                $new_password = md5($new_password);

                // 核实密码
                $rtnError = $userService->checkPassword($this->userToken->uid, $old_password);
                if (!empty($rtnError)) {
                    $returnModel->data->initFail($rtnError);
                } else {
                    // 修改密码
                    $userService->updatePassword($this->userToken->uid, $new_password);
                    model('UserWeakPass')->setSafe($this->userToken->uid);
                }
            } catch (CustomException $ex) {
                $returnModel->data->initFail('设置密码发生异常');
                // write log
                $this->logService->logError('找回密码第二步设置密码', $ex->getErrorMessage());
            }
        } else {
            if (!empty($validResult) && substr($validResult, 0, 1) == ',') {
                $validResult = substr($validResult, 1, strlen($validResult) - 1);
            }
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }


    //账户中心
    public function get_account_info()
    {
        // 返回值
        $returnModel = new ReturnModel();

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (!$this->isLogin()) {
            $validResult = '没有登录，请登录';
            $param_valid_flag = false;
        }
        $uid = $this->userToken->uid;
        //idfa
        $idfa = isset($_GET['adid']) ? in($_GET['adid']) : '';
        if (!empty($idfa) && $this->clientType == 'ios') {
            $uid = $this->userToken->uid;
            try {
                $record = model('IDFA')->getRecord($idfa);
                if (!$record) {
                    model('IDFA')->addRecordWithUid($uid, $idfa);
                } else if (intval($record['uid']) < 1) {
                    model('IDFA')->updateUid($idfa, $uid);
                }
            } catch (Exception $e) {
                // write log
                $this->logService->logError('记录IDFA异常', $e->getMessage());
            }
        }
        if ($param_valid_flag) {
            try {
                $userService = new UserService();
                $userAccountService = new UserAccountService();
                $userBankService = new UserBankService();

                $user = $userService->getUserById($uid);
                $userInfo = $userService->getUserInfoByUid($uid);
                $userHuifu = $userService->getUserHuifuByUid($uid);
                $userData = $userAccountService->getUserAccountInfo($uid);
                // 绑卡验证
                $userBank = $userBankService->getUserBankById($uid);

               $userYqCode = $userService->getUserYqCodeById($uid);
               if ($this->config['user_vip_level_on'] && ($this->clientType == 'android' || ($this->clientType == 'ios' && intval($this->wcg_vcode) >= 22))) {
                    $data['user_vip_level'] = $user['user_vip_level'];
                    $data['vip_level_url'] = $this->config['vip_level_url'].'?logintoken='.base64_encode($this->loginToke);
                    $data['page_title'] = '会员等级';
                    $data['vip_level_account_url'] = $this->config['vip_level_account_url'];
                } else {
                    $data['user_vip_level'] = '';
                    $data['vip_level_url'] = '';
                    $data['page_title'] = '';
                    $data['vip_level_account_url'] = '';
                }
                $data['logo'] = $this->config['URL_HTTP_HOST_IMG'] . substr($user['logo'], 1);
                $data['username'] = $user['username'];
                $data['mobile'] = '';
                $data['realname'] = '';
                $data['hfusername'] = '';
                $data['idno'] = '';
                $data['yqcode'] = $userYqCode['code'];

                if (!empty($userInfo['phone_encrypt'])) {
                    $phone = Crypto::decryptPhone($userInfo['phone_encrypt']);
                    $data['mobile'] = Formator::starPhone($phone, true);
                }

                $data['to_huifu_url'] = '';
                if (!empty($userHuifu)) {
                    $data['realname'] = $userHuifu['UsrName'];
                    $data['hfusername'] = $userHuifu['UsrId'];
                    if (!empty($userHuifu['idno_encrypt'])) {
                        $idno = Crypto::decriptID($userHuifu['idno_encrypt']);
                        $data['idno'] = substr($idno, 0, 4) . '****' . substr($idno, -4);
                    }
                    //登录汇付url
                    $Chinapnr = new chinapnr();
                    $HuifuUrl = $Chinapnr->actionUserLogin([
                        'Version' => '10',
                        'CmdId' => 'UserLogin',
                        'MerCustId' => $this->config['Huifu_MerCustId'],
                        'UsrCustId' => $userHuifu['UsrCustId'],
                        'PageType' => 1
                    ]);
                    $data['to_huifu_url'] = $HuifuUrl['src'];
                }

                // 没有绑卡，去绑卡
                if(empty($userBank)){
                    $data['bind_card'] = 0;
                }
                else{
                    $data['bind_card'] = 1;
                }

                //账户总额
                $data['acct_total_money'] = 0.00;
                //账户余额
                $data['acct_balance'] = 0.00;
                //可用金额
                $data['acct_avl_money'] = 0.00;
                //冻结金额
                $data['acct_freeze_money'] = 0.00;
                //生利宝金额
                $data['acct_slb_money'] = 0.00;
                //累计收益
                $data['acct_total_income'] = 0.00;
                //理财资产
                $data['acct_licai_benjin'] = 0.00;
                //待收利息
                $data['acct_licai_lixi'] = 0.00;

                if (!empty($userData)) {
                    $data['acct_balance'] = number_format($userData['AcctBal'], 2,'.','');
                    $data['acct_avl_money'] = number_format($userData['AvlBal'], 2,'.','');
                    $data['acct_freeze_money'] = number_format($userData['FrzBal'], 2,'.','');
                    $data['acct_slb_money'] = number_format($userData['SLBBal'], 2,'.','');
                    $data['acct_total_income'] = number_format($userData['licai_total_income'], 2,'.','');
                    $data['acct_licai_benjin'] = number_format($userData['licai_zichan'], 2,'.','');
                    $data['acct_licai_lixi'] = number_format($userData['licai_lixi'], 2,'.','');
                    $data['acct_total_money'] = number_format(($userData['licai_zichan'] + $userData['AcctBal'] + $userData['SLBBal']), 2,'.','');
                }

                //生利宝接口
                $data['slb_url']=$this->host.'/huifu/account_shenglibao?clienttype='.$this->clientType;

                //是否开启自动投标，默认关闭
                $data['auto_tender_plan'] = ZiDongDealOrderStatus::CLOSE;
                $ziDongDealOrderService = new ZiDongDealOrderService();
                $zdDealOrder = $ziDongDealOrderService->getByUid($uid);
                if($zdDealOrder){
                    $data['auto_tender_plan'] = $zdDealOrder['status'];
                }

                //是否开启快捷支付
                $userBank = model('UserBank')->find(['uid' => $uid,  'pay_type' => UserBankPayType::QUICK]);
                if($userBank){
                    $data['quick_pay'] = 1;
                }
                else{
                    $data['quick_pay'] = 0;
                }

                //是否有可用代金券
                $sql = 'select * from cp_coupon where uid=:uid and status=0 and date_end > unix_timestamp() limit 1';
                $coupon = $this->model->query($sql, ['uid' => $uid]);
                //是否有加息券
                $sql = 'select * from cp_rate_coupon where uid=:uid and status=0 and date_end > unix_timestamp() limit 1';
                $rateCoupon = $this->model->query($sql, ['uid' => $uid]);
                if($coupon || $rateCoupon){
                    $data['has_coupon'] = 1;
                }
                else{
                    $data['has_coupon'] = 0;
                }
                //是否为弱密码
                $weak = model('UserWeakPass')->checkWeak($uid);
                if ($weak) {
                    $data['pass_weak_msg'] = '您的密码强度级别较低，有被盗风险，建议修改登录密码';
                } else {
                    $data['pass_weak_msg'] = '';
                }
                // $activeinfo = Http::doPost(rtrim($this->config['Wap']['Host'],'/').'/experiencedeal/experiencedeal/get-active-status',array('experiencedeal_uid'=>$this->userToken->uid));
                // $active_status = json_decode($activeinfo,true);

//                $fp = new Http();
//                $dealInfo = $fp->request(rtrim($this->config['Wap']['Host'],'/').'/experiencedeal/experiencedeal/get-active-status');
//                $active_status = json_decode($dealInfo,true);

                $data['have_experiencedeal'] = 0;
                $returnModel->data->setContent($data);

            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取账户中心数据异常');
                // write log
                $this->logService->logError('获取账户中心数据异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //绑定手机号第一步验证码
    public function bind_mobile_one_vcode()
    {
        // 返回值
        $returnModel = new ReturnModel();

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (!$this->isLogin()) {
            $validResult = '没有登录，请登录';
            $param_valid_flag = false;
        }

        if ($param_valid_flag) {
            try {
                $userService = new UserService();

                $user = $userService->getUserById($this->userToken->uid);
                $userInfo = $userService->getUserInfoByUid($user['id']);
                $phone = Crypto::decryptPhone($userInfo['phone_encrypt']);
                $userMobileVerifyService = new UserMobileVerifyService();
                $userMobileVerifyService->sendBindMobileVerityCode($phone);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('发送验证码异常');
                // write log
                $this->logService->logError('发送绑定手机号第一步验证码异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //绑定手机号第一步
    public function bind_mobile_one()
    {
        // 返回值
        $returnModel = new ReturnModel();

        // 请求参数
        $verify_code = intval($_GET['verifycode']);

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;

        if(strtolower($this->clientType)=='ios' &&  $this->wcg_vcode<=17   ){
            $returnModel->initFail('此功能暂停，请联系客服 400-888-6268');
            echo(json_encode($returnModel));exit;
        }else if(strtolower($this->clientType)=='android' &&  $this->wcg_vcode<=11){
            $returnModel->initFail('版本过低，请升级版本');
            echo(json_encode($returnModel));exit;
        }
        if (!$this->isLogin()) {
            $validResult = '没有登录，请登录';
            $param_valid_flag = false;
        }

        if (empty($verify_code)) {
            $validResult .= ',验证码为空';
            $param_valid_flag = false;
        }

        if ($param_valid_flag) {
            try {
                $userService = new UserService();

                $user = $userService->getUserById($this->userToken->uid);
                $userInfo = $userService->getUserInfoByUid($user['id']);
                $phone = Crypto::decryptPhone($userInfo['phone_encrypt']);
                $userMobileVerifyService = new UserMobileVerifyService();
                $checkCode = $userMobileVerifyService->bindMobileVerityCodeCheck($phone, $verify_code);
                if (!empty($checkCode)) {
                    $returnModel->data->initFail($checkCode);
                    echo(json_encode($returnModel));exit;
                }

                //生成token
                $token = Token::generate();
                //写入数据库
                $userSignTokenService = new UserSignTokenService();
                $data['uid'] = $userInfo['uid'];
                $data['token'] = $token;
                $data['token_type'] = UserSignTokenType::BIND_MOBIEL;//绑定手机号
                $data['client_type'] = ($this->clientType=='ios') ? 4 : 5;
                $data['expire'] = time()+5*60;
                $data['created_at'] = time();
                $ret = $userSignTokenService ->insert($data);
                if($ret){
                    $returnModel->data->setContent(array('bind_phone_token'=>$token));
                }

            } catch (CustomException $ex) {
                $returnModel->data->initFail('验证原手机号发生异常');
                // write log
                $this->logService->logError('修改绑定手机验证原手机号', $ex->getErrorMessage());
            }
        } else {
            if (!empty($validResult) && substr($validResult, 0, 1) == ',') {
                $validResult = substr($validResult, 1, strlen($validResult) - 1);
            }
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //绑定手机号第二步验证码
    public function bind_mobile_two_vcode()
    {
        // 返回值
        $returnModel = new ReturnModel();

        // 请求参数
        $mobile = intval($_GET['mobile']);

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (!$this->isLogin()) {
            $validResult = '没有登录，请登录';
            $param_valid_flag = false;
        }

        if (empty($mobile)) {
            $validResult .= ',手机号为空';
            $param_valid_flag = false;
        } else if (!Validator::isMobile($mobile)) {
            $validResult .= ',手机号格式错误';
            $param_valid_flag = false;
        }

        if ($param_valid_flag) {
            try {
                $loginUid = $this->userToken->uid;

                //验证手机号是否存在
                $userSerice = new UserService();
                $userInfo = $userSerice->getUserInfoByMobile($mobile);
                if($userInfo && $userInfo['uid'] != $loginUid){
                    $returnModel->data->initFail('手机号已存在');
                }
                else{
                    $userMobileVerifyService = new UserMobileVerifyService();
                    $userMobileVerifyService->sendBindMobileVerityCode($mobile);
                }
            } catch (CustomException $ex) {
                $returnModel->data->initFail('发送验证码异常');
                // write log
                $this->logService->logError('发送绑定手机号第二步验证码异常', $ex->getErrorMessage());
            }
        } else {
            if (!empty($validResult) && substr($validResult, 0, 1) == ',') {
                $validResult = substr($validResult, 1, strlen($validResult) - 1);
            }
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //绑定手机号第二步
    public function bind_mobile_two()
    {
        // 返回值
        $returnModel = new ReturnModel();

        // 请求参数
        $mobile = intval($_GET['mobile']);
        $verify_code = intval($_GET['verifycode']);

        $token = in($_GET['bind_phone_token']);
        $prompt_message = ',用户标识缺失！';
        if(strtolower($this->clientType)=='ios' &&  $this->wcg_vcode<=17   ){
            $prompt_message = ',此功能暂停，请联系客服 400-888-6268';
        }else if(strtolower($this->clientType)=='android' &&  $this->wcg_vcode<=11){
            $prompt_message = ',版本过低，请升级版本';
        }
        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (!$this->isLogin()) {
            $validResult = '没有登录，请登录';
            $param_valid_flag = false;
        }

        if (empty($mobile)) {
            $validResult .= ',手机号为空';
            $param_valid_flag = false;
        }
        if (empty($verify_code)) {
            $validResult .= ',验证码为空';
            $param_valid_flag = false;
        }

        if (empty($token)) {
            $validResult .= $prompt_message;
            $param_valid_flag = false;
        }

        if ($param_valid_flag) {
            try {
                $userService = new UserService();
                $userSignTokenService = new UserSignTokenService();
                $userToken = $userSignTokenService->get_user_sing_token($this->userToken->uid,$token,UserSignTokenType::BIND_MOBIEL);
                if (!empty($userToken)) {
                    $returnModel->data->initFail($userToken);
                    echo(json_encode($returnModel));exit;
                }
                //$user = $userService->getUserById($this->userToken->uid);

                $userMobileVerifyService = new UserMobileVerifyService();
                $checkCode = $userMobileVerifyService->bindMobileVerityCodeCheck($mobile, $verify_code);
                if (!empty($checkCode)) {
                    $returnModel->data->initFail($checkCode);
                } else {
                    // 更新绑定手机号
                    //$return = $userService->updateBindMobile($user['id'], $mobile);
                    $return = $userService->updateBindMobile($this->userToken->uid, $mobile);
                    if (!empty($return)) {
                        $returnModel->data->initFail($return);
                    }
                }
            } catch (CustomException $ex) {
                $returnModel->data->initFail('更新绑定手机号发生异常');
                // write log
                $this->logService->logError('更新绑定手机号', $ex->getErrorMessage());
            }
        } else {
            if (!empty($validResult) && substr($validResult, 0, 1) == ',') {
                $validResult = substr($validResult, 1, strlen($validResult) - 1);
            }
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //获取新手标列表（未使用）
    public function get_deallist_xinshou()
    {
        // 返回值
        $returnModel = new ReturnModel();

        $pageIndex = intval($_GET['pageindex']);
        $pageSize = 10;

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (empty($pageIndex)) {
            $pageIndex = 1;
        }

        if ($param_valid_flag) {
            try {
                $dealService = new DealService();

                $totalNum = 0;
                if ($pageIndex == 1) {
                    $totalNum = $dealService->countDealXinShou();
                }

                $data = array();

                $dealList = $dealService->getDealListForXinShou($pageIndex, $pageSize);
                if (!empty($dealList) && is_array($dealList)) {
                    foreach ($dealList as $key => $val) {
                        $dealItem = array();
                        //标Id
                        $dealItem['dealid'] = $val['deal_id'];
                        //收益率
                        //$dealItem['syl'] = sprintf("%.2f", strval($val['syl']));//substr(sprintf("%.2f", strval($val['syl'])),0,-1);
                        $dealItem['syl'] =  DealHelper::getFormateSyl($val['syl']);
                        //期限
                        $period = DateUtil::getDateDiff($val['start_date'], $val['deal_end_date']);
                        $dealItem['qixian'] = $period->days;
                        //借款金额
                       // $dealItem['money'] = number_format(floatval($val['money']) / 10000.00, 2, '.','');
                        $dealItem['money'] = DealHelper::getFormateSyl(floatval($val['money']) / 10000.00);
                        //投标进度
                        $dealItem['schedule'] = empty($val['schedule']) ? 0 : round($val['schedule']);
                        //标的状态
                        $dealItem['dealstatus'] = DealStatus::getDealStatusName($val['deal_status']);
                        //标类型
                        $dealItem['dealcategory'] = '新手标';
                        //标题目
                        $dealItem['title'] = $val['title'];
                        //还款方式
                        $dealItem['refundmethod'] = DealRefundMethod::getRefundMethodName($val['refund_method']);

                        $data[] = $dealItem;
                    }
                }

                $obj = new stdClass();
                $obj->totalnum = $totalNum;
                $obj->deallist = $data;
                $returnModel->data->setContent($obj);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取新手标列表异常');
                // write log
                $this->logService->logError('获取新手标列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //获取标列表
    public function get_deallist ()
    {
        // 返回值
        $returnModel = new ReturnModel();

        $dealOrderNum = intval($_GET['dealordernum']);
        $pageIndex = intval($_GET['pageindex']);
        $pageSize = 15;

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (empty($pageIndex)) {
            $pageIndex = 1;
        }

        if ($param_valid_flag) {
            try {
                $dealService = new DealService();

                $totalNum = 0;
                if ($pageIndex == 1) {
//                    if($this->isLogin()){
//                        $dealOrderNum = $dealService->countDealOrderNum($this->userToken->uid);
//                    }

//                    if($dealOrderNum >= 3){
//                        $totalNum = $dealService->countDeal(DealType::FORMAL);
//                    }
//                    else{
                        $totalNum = $dealService->countDeal(null);
//                    }
                }

                $data = array();

//                if($dealOrderNum >= 3){
//                    $dealList = $dealService->getDealList(DealType::FORMAL, $pageIndex, $pageSize);
//                }
//                else{
                    $dealList = $dealService->getDealList(null, $pageIndex, $pageSize);
//                }

                if (!empty($dealList) && is_array($dealList)) {
                    foreach ($dealList as $key => $val) {
                        if (!empty($val['allow_uids']) && (!$this->isLogin() || !in_array($this->userToken->uid, explode(',', $val['allow_uids'])))) {
                            unset($dealList[$key]);
                            continue;
                        }
                        $dealItem = array();
                        //标Id
                        $dealItem['dealid'] = $val['deal_id'];
                        //收益率
                       //$dealItem['syl'] = sprintf("%.2f", strval($val['syl']));//substr(sprintf("%.2f", strval($val['syl'])),0,-1);
                        $dealItem['syl'] = DealHelper::getFormateSyl($val['syl']);
                        //期限
                        //$period = DateUtil::getDateDiff($val['start_date'], $val['deal_end_date']);
                        //$dealItem['qixian'] = $period->days;
                        $start_date='';
                        if($val['deal_status']==DealStatus::YU_GAO)
                        {
                            $start_date=date('Y-m-d',$val['start_date']);
                        }
                        elseif($val['deal_status']==DealStatus::TOUBIAO_ING)
                        {
                            $start_date=date('Y-m-d');
                        }else{
                            $start_date=date('Y-m-d',$val['full_time']);
                        }
                        $qixian_time = LoanTerms($start_date, null, $val['deal_end_date']);
                        if($val['expires_type']==DealExpiresType::Day)
                        {
                            $dealItem['qixian'] = $qixian_time['days'][1]['period']['days'];
                            $dealItem['qixian_type'] = DealExpiresType::getDealExpiresTypeName(DealExpiresType::Day);
                        }else{
                            $dealItem['qixian'] = $qixian_time['count'];
                            $dealItem['qixian_type'] = DealExpiresType::getDealExpiresTypeName(DealExpiresType::Month);
                        }

                        //借款金额
                        //$dealItem['money'] = number_format(floatval($val['money']) / 10000.00, 2, '.','');
                        $dealItem['money'] = DealHelper::getFormateSyl(floatval($val['money']) / 10000.00);
                        //投标进度
                        //$dealItem['schedule'] = empty($val['schedule']) ? 0 : round($val['schedule']);
                        //进度
                        $dealItem['schedule']=round($val['schedule']);
                        if(intval($dealItem['schedule']) == 100 && $val['balance'] > 0){
                            $dealItem['schedule']=99;
                        }
                        else if($val['balance'] == 0){
                            $dealItem['schedule'] = 100;
                        }

                        //标状态ID
                        $dealItem['dealstatusid'] = $val['deal_status'];
                        //标的状态
                        $dealItem['dealstatus'] = DealStatus::getDealStatusName($val['deal_status']);
                        if($val['deal_status'] == DealStatus::YU_GAO && date('Y-m-d', time()) == date('Y-m-d', $val['start_date'])){
                            $dealItem['dealstatus'] = date('H:i', $val['start_date']);
                        }
                        else if($val['deal_status'] == DealStatus::TOUBIAO_ING){
                            $dealItem['dealstatus'] = intval(round($dealItem['schedule'])).'%';
                        }
                        //标类型
                        if($val['xinshou_status'] == DealType::XIN_SHOU || $val['new_user_deal'] == DealType::NEW_USER_DEAL_YES){
                            $dealItem['dealcategorytype'] = 0;
                            $dealItem['dealcategory'] = DealType::getDealTypeName(DealType::XIN_SHOU);
                        }
                        else{
                            $dealItem['dealcategorytype'] = $val['cid'];
                            $dealItem['dealcategory'] = DealCategory::getDealCategoryName($val['cid']);
                        }
                        //标题目
                        $dealItem['title'] = $val['title_sub'];
                        $dealItem['begin_date'] = $val['start_date'];
                        //还款方式
                        $dealItem['refundmethod'] = DealRefundMethod::getRefundMethodName($val['refund_method']);
                        $data[] = $dealItem;
                    }
                }

                $dealicon = new DealIconService();
                $icons = model('DealIcon')->get_deal_icon();

                if(!empty($icons)){
                    $data = $dealicon->get_deal_icon($data,$icons,'list');
                }

                $obj = new stdClass();
                $obj->dealordernum = $dealOrderNum;
                $obj->totalnum = $totalNum;
                $obj->deallist = $data;
                $returnModel->data->setContent($obj);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取正式标列表异常');
                // write log
                $this->logService->logError('获取正式标列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //获取标列表(新版本)
    public function get_deallist_V25 ()
    {
        // 返回值
        $returnModel = new ReturnModel();

        $dealOrderNum = intval($_GET['dealordernum']);
        $pageIndex = intval($_GET['pageindex']);
        $pageSize = 15;

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (empty($pageIndex)) {
            $pageIndex = 1;
        }

        if ($param_valid_flag) {
            try {
                $dealService = new DealService();
                $totalNum = 0;
                if ($pageIndex == 1) {
                    $totalNum = $dealService->countDeal(null);
                }

                $data = array();
                        if ($this->wcg_vcode >= 32) {
                            $dealList = $dealService->getDealList(null, $pageIndex, $pageSize, 1);
                        } else {
                            $dealList = $dealService->getDealList(null, $pageIndex, $pageSize);
                        }
                if (!empty($dealList) && is_array($dealList)) {
                    foreach ($dealList as $key => $val) {
                        if (!empty($val['allow_uids']) && (!$this->isLogin() || !in_array($this->userToken->uid, explode(',', $val['allow_uids'])))) {
                            unset($dealList[$key]);
                            continue;
                        }
                        if($val['cid'] == 7 && $val['deal_status'] != 2){
                            unset($dealList[$key]);
                            continue;
                        }
                        $dealItem = array();
                        //标Id
                        $dealItem['dealid'] = $val['deal_id'];
                        //收益率
                        $dealItem['syl'] = DealHelper::getFormateSyl($val['syl']);
                        //期限
                        $start_date='';
                        if($val['deal_status']==DealStatus::YU_GAO)
                        {
                            $start_date=date('Y-m-d',$val['start_date']);
                        }
                        elseif($val['deal_status']==DealStatus::TOUBIAO_ING)
                        {
                            $start_date=date('Y-m-d');
                        }else{
                            $start_date=date('Y-m-d',$val['full_time']);
                        }
                        $qixian_time = LoanTerms($start_date, null, $val['deal_end_date']);
                        if($val['expires_type']==DealExpiresType::Day)
                        {
                            $dealItem['qixian'] = $qixian_time['days'][1]['period']['days'];
                            $dealItem['qixian_type'] = DealExpiresType::getDealExpiresTypeName(DealExpiresType::Day);
                        }else{
                            $dealItem['qixian'] = $qixian_time['count'];
                            $dealItem['qixian_type'] = DealExpiresType::getDealExpiresTypeName(DealExpiresType::Month);
                        }

                        //借款金额
                        $dealItem['money'] = DealHelper::getFormateSyl(floatval($val['money']) / 10000.00);
                        //进度
                        $dealItem['schedule']=round($val['schedule']);
                        //周周盈处理
                        if($val['cid'] == 7){
                            $dealItem['money'] = DealHelper::getFormateSyl(floatval($val['day_max_money']) / 10000.00);
                            //获取周周盈当日投资总额
                            $dealDaySum = model('DealRead')->getWeekEarnAmount($val['deal_id']);
                            $dealItem['schedule'] = !empty($val['day_max_money']) ? round($dealDaySum/$val['day_max_money']*100) : 0;
                            $val['balance'] = $val['day_max_money'] > $dealDaySum ? $val['day_max_money'] - $dealDaySum : 0;
                            $qixian_time = LoanTerms(date('Y-m-d',$val['start_date']), null, $val['deal_end_date']);
                            $dealItem['qixian'] = $qixian_time['days'][1]['period']['days'];
                        }

                        if(intval($dealItem['schedule']) == 100 && $val['balance'] > 0){
                            $dealItem['schedule']=99;
                        }
                        else if($val['balance'] == 0 || $dealItem['schedule'] > 100){
                            $dealItem['schedule'] = 100;
                        }

                        //标状态ID
                        $dealItem['dealstatusid'] = $val['deal_status'];
                        //标的状态
                        $dealItem['dealstatus'] = DealStatus::getDealStatusName($val['deal_status']);
                        if($val['deal_status'] == DealStatus::YU_GAO && date('Y-m-d', time()) == date('Y-m-d', $val['start_date'])){
                            $dealItem['dealstatus'] = date('H:i', $val['start_date']);
                        }
                        else if($val['deal_status'] == DealStatus::TOUBIAO_ING){
                            $dealItem['dealstatus'] = intval(round($dealItem['schedule'])).'%';
                        }
                        //标类型
                        if($val['xinshou_status'] == DealType::XIN_SHOU || $val['new_user_deal'] == DealType::NEW_USER_DEAL_YES){
                            if ($val['cid'] == 7) {
                                $dealItem['dealcategorytype'] = 7;
                                $dealItem['dealcategory'] = '周周盈';
                            } else {
                                $dealItem['dealcategorytype'] = 0;
                                $dealItem['dealcategory'] = DealType::getDealTypeName(DealType::XIN_SHOU);
                            }
                        }
                        else{
                            $dealItem['dealcategorytype'] = $val['cid'];
                            $dealItem['dealcategory'] = DealCategory::getDealCategoryName($val['cid']);
                            if($val['cid']==8){
                                $dealItem['dealcategorytype'] = 9;
                            }
                        }
                        //标的类型图片地址
                        $dealItem['deal_category_url'] = $this->config['URL_HTTP_HOST'] . '/template/default/public/images/cid/' . $dealItem['dealcategorytype'] . '.png';
                            //标题目
                        $dealItem['title'] = $val['title_sub'];
                        $dealItem['begin_date'] = $val['start_date'];
                        //还款方式
                        $dealItem['refundmethod'] = DealRefundMethod::getRefundMethodName($val['refund_method']);
                        $data[] = $dealItem;
                    }
                }

                $dealicon = new DealIconService();
                $icons = model('DealIcon')->get_deal_icon();

                if(!empty($icons)){
                    $data = $dealicon->get_deal_icon($data,$icons,'list');
                }

                $obj = new stdClass();
                $obj->dealordernum = $dealOrderNum;
                $obj->totalnum = $totalNum;
                $obj->deallist = $data;
                $returnModel->data->setContent($obj);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取正式标列表异常');
                // write log
                $this->logService->logError('获取正式标列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //首页
    public function get_index()
    {
        // 返回值
        $returnModel = new ReturnModel();

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = '';
        //$this->userToken->uid=2;
        if ($param_valid_flag) {
            try {
                $data = array();
                $picData = array();

                //累计总收益
                $totalIncome = 0;
                //前一天收益
                $yesterDayIncome = 0;
                //前一天收益打败股东比例
                $overcomePercent = 0;

                //是否显示新手标
                $show_xinshou = true;

                $dealService = new DealService();

                if($this->isLogin()){
                    $refundRecordService = new RefundRecordService();

                    $yiShouLiXi = model('UserRead')->getYishouLixi($this->userToken->uid);
                    if(!empty($yiShouLiXi)){
                        $totalIncome = $yiShouLiXi;
                    }
//                    $beginDate = strtotime("-1 day");
//                    $endDate = time();
                    $userYesterDayIncome = $refundRecordService->getUserTotalIncomeByDate($this->userToken->uid, 1);
                    if(!empty($userYesterDayIncome)){
                        $yesterDayIncome = $userYesterDayIncome;
                    }

                    //昨日收益 打败多少股东
                    /*$beginTime = strtotime("-1 day");
                    $endTime = time();*/
                    $overcomePercent = $refundRecordService->getUserTotalInomePercentNew($this->userToken->uid);

                    //投标总次数
//                    $orderCount = $dealService->countDealOrderNum($this->userToken->uid);
//                    if(!empty($orderCount) && $orderCount >= 3){
//                        $show_xinshou = false;
//                    }
                }
                else{
                    //获取首页图片轮播
                    $appIndexPicService = new AppIndexPicService();
                    $picList = $appIndexPicService->getIndexPicList();
                    if(!empty($picList) && is_array($picList)){
                        foreach($picList as $key => $val){
                            $item = array();

                            $item['title']= $val['title'];
                            $item['img_url']= $val['img_url'];
                            $item['page_url']= $val['page_url'];

                            $picData[]  = $item;
                        }
                    }
                }


                //标列表
                $dealList = $dealService->getDealListByDealStatus(array(1,2,3,5), 1, 4);

//                if(!is_array($dealList)){
//                    $dealList = array();
//                }
//                if (count($dealList) < 4) {
//                    // 统计完成的标
//                    $dealList_complete = $dealService->getDealListExcludeDealStatus(array(DealStatus::YU_GAO, DealStatus::TOUBIAO_ING), 1, 4 - count($dealList));
//                    if(!is_array($dealList_complete)){
//                        $dealList_complete = array();
//                    }
//                }

                // 合并数组
//                $dealList_Merge = $dealList;
//                if(is_array($dealList_complete) && is_array($dealList)){
//                    $dealList_Merge = array_merge($dealList, $dealList_complete);
//                }

//                foreach ($dealList_Merge as $key => $val) {
//                    $dealList_Merge[$val['deal_id']] = $val;
//                    unset($dealList_Merge[$key]);
//                }
                //krsort($dealList_Merge);
                //print_r($dealList_Merge);

                if(!empty($dealList) && is_array($dealList)){
                    foreach($dealList as $key=>$val){
                        $dealItem = array();
                        //标Id
                        $dealItem['dealid'] = $val['deal_id'];
                        //收益率
                        //$dealItem['syl'] = sprintf("%.2f", strval($val['syl']));//substr(sprintf("%.2f", strval($val['syl'])),0,-1);
                        $dealItem['syl'] = DealHelper::getFormateSyl($val['syl']);
                        //期限
                        //$period = DateUtil::getDateDiff($val['start_date'], $val['deal_end_date']);
                        //$dealItem['qixian'] = $period->days;
                        $start_date='';
                        if($val['deal_status']==DealStatus::YU_GAO)
                        {
                            $start_date=date('Y-m-d',$val['start_date']);
                        }
                        elseif($val['deal_status']==DealStatus::TOUBIAO_ING)
                        {
                            $start_date=date('Y-m-d');
                        }else{
                            $start_date=date('Y-m-d',$val['full_time']);
                        }
                        $qixian_time = LoanTerms($start_date, null, $val['deal_end_date']);
                        if($val['expires_type']==DealExpiresType::Day)
                        {
                            $dealItem['qixian'] = $qixian_time['days'][1]['period']['days'];
                            $dealItem['qixian_type'] = DealExpiresType::getDealExpiresTypeName(DealExpiresType::Day);
                        }else{
                            $dealItem['qixian'] = $qixian_time['count'];
                            $dealItem['qixian_type'] = DealExpiresType::getDealExpiresTypeName(DealExpiresType::Month);
                        }
                        if ($val['cid'] == 7) {
                            $qixian_time = LoanTerms(date('Y-m-d',$val['start_date']), null, $val['deal_end_date']);
                            $dealItem['qixian'] = $qixian_time['days'][1]['period']['days'];
                        }
                        //借款金额
                       // $dealItem['money'] = number_format(floatval($val['money'])/10000.00, 2, '.','');
                        $dealItem['money'] = DealHelper::getFormateSyl(floatval($val['money'])/10000.00);
                        //投标进度
                        //$dealItem['schedule'] = empty($val['schedule']) ? 0 : round($val['schedule']);
                        //进度
                        $dealItem['schedule']=round($val['schedule']);
                        if(intval($dealItem['schedule']) == 100 && $val['balance'] > 0){
                            $dealItem['schedule']=99;
                        }
                        else if($val['balance'] == 0){
                            $dealItem['schedule'] = 100;
                        }
                        //标状态ID
                        $dealItem['dealstatusid'] = $val['deal_status'];
                        //标的状态
                        $dealItem['dealstatus'] = DealStatus::getDealStatusName($val['deal_status']);
                        if($val['deal_status'] == DealStatus::YU_GAO && date('Y-m-d', time()) == date('Y-m-d', $val['start_date'])){
                            $dealItem['dealstatus'] = date('H:i', $val['start_date']);
                        }
                        else if($val['deal_status'] == DealStatus::TOUBIAO_ING){
                            $dealItem['dealstatus'] = round($dealItem['schedule']).'%';
                        }
                        //标类型
                        if($val['xinshou_status'] == DealType::XIN_SHOU || $val['new_user_deal'] == DealType::NEW_USER_DEAL_YES){
                            $dealItem['dealcategorytype'] = 0;
                            $dealItem['dealcategory'] = '新手标';
//                            if(!$show_xinshou){
//                                continue;
//                            }
                        }
                        else{
                            $dealItem['dealcategorytype'] = $val['cid'];
                            $dealItem['dealcategory'] = DealCategory::getDealCategoryName($val['cid']);
                        }
                        //标题目
                        $dealItem['title'] = $val['title_sub'];
                        //还款方式
                        $dealItem['refundmethod'] = DealRefundMethod::getRefundMethodName($val['refund_method']);

                        $data[] = $dealItem;
                    }
                }
                $obj = new stdClass();
                $obj->totalincome = number_format($totalIncome, 2, '.','');
                $obj->yesterdayincome = number_format($yesterDayIncome, 2, '.','');
                $obj->overcomePercent = $overcomePercent;
                $obj->deallist = $data;
                $obj->picList = $picData;
                $returnModel->data->setContent($obj);

            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取首页数据异常');
                // write log
                //echo($ex->getErrorMessage());
                $this->logService->logError('获取首页数据异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }
    public  function  get_index_deal(){
        // 返回值
        $returnModel = new ReturnModel();
        // 参数验证成功标识
        $param_valid_flag = true;
        $validResult = '';
        if ($param_valid_flag) {
            try {
                $data = array();
                $picData = array();
                //是否显示新手标
                $show_xinshou = true;
                $dealService = new DealService();
                    //获取首页图片轮播
                    $appIndexPicService = new AppIndexPicService();
                    $picList = $appIndexPicService->getIndexPicList();
                    if(!empty($picList) && is_array($picList)){
                        foreach($picList as $key => $val){
                            $item = array();
                            $item['title']= $val['title'];
                            $item['img_url']= $val['img_url'];
                            $item['page_url']= $val['page_url'];
                            //添加轮播图分享信息
                            $item['share_icon'] = $val['share_icon']; //分享小图片
                            $item['share_description'] = $val['share_description']; //分享描述
                            $item['share_url'] = $val['share_url']; //分享地址
                            $picData[]  = $item;
                        }
                    }
                //标列表
                $dealList = $dealService->getDealListByDealStatus(array(1,2,3,5), 1, 4);
                if(!empty($dealList) && is_array($dealList)){
                    foreach($dealList as $key=>$val){
                        $dealItem = array();
                        //标Id
                        $dealItem['dealid'] = $val['deal_id'];
                        //收益率
                        //$dealItem['syl'] = sprintf("%.2f", strval($val['syl']));//substr(sprintf("%.2f", strval($val['syl'])),0,-1);
                        $dealItem['syl'] = DealHelper::getFormateSyl($val['syl']);
                        //期限
                        //$period = DateUtil::getDateDiff($val['start_date'], $val['deal_end_date']);
                        //$dealItem['qixian'] = $period->days;
                        $start_date='';
                        if($val['deal_status']==DealStatus::YU_GAO)
                        {
                            $start_date=date('Y-m-d',$val['start_date']);
                        }
                        elseif($val['deal_status']==DealStatus::TOUBIAO_ING)
                        {
                            $start_date=date('Y-m-d');
                        }else{
                            $start_date=date('Y-m-d',$val['full_time']);
                        }
                        $qixian_time = LoanTerms($start_date, null, $val['deal_end_date']);
                        if($val['expires_type']==DealExpiresType::Day)
                        {
                            $dealItem['qixian'] = $qixian_time['days'][1]['period']['days'];
                            $dealItem['qixian_type'] = DealExpiresType::getDealExpiresTypeName(DealExpiresType::Day);
                        }else{
                            $dealItem['qixian'] = $qixian_time['count'];
                            $dealItem['qixian_type'] = DealExpiresType::getDealExpiresTypeName(DealExpiresType::Month);
                        }
                        if ($val['cid'] == 7) {
                            $qixian_time = LoanTerms(date('Y-m-d',$val['start_date']), null, $val['deal_end_date']);
                            $dealItem['qixian'] = $qixian_time['days'][1]['period']['days'];
                        }
                        //借款金额
                        //$dealItem['money'] = number_format(floatval($val['money'])/10000.00, 2, '.','');
                        $dealItem['money'] =DealHelper::getFormateSyl(floatval($val['money'])/10000.00);
                        //投标进度
                        //$dealItem['schedule'] = empty($val['schedule']) ? 0 : round($val['schedule']);
                        //进度
                        $dealItem['schedule']=round($val['schedule']);
                        if(intval($dealItem['schedule']) == 100 && $val['balance'] > 0){
                            $dealItem['schedule']=99;
                        }
                        else if($val['balance'] == 0){
                            $dealItem['schedule'] = 100;
                        }
                        //标状态ID
                        $dealItem['dealstatusid'] = $val['deal_status'];
                        //标的状态
                        $dealItem['dealstatus'] = DealStatus::getDealStatusName($val['deal_status']);
                        if($val['deal_status'] == DealStatus::YU_GAO && date('Y-m-d', time()) == date('Y-m-d', $val['start_date'])){
                            $dealItem['dealstatus'] = date('H:i', $val['start_date']);
                        }
                        else if($val['deal_status'] == DealStatus::TOUBIAO_ING){
                            $dealItem['dealstatus'] = round($dealItem['schedule']).'%';
                        }
                        //标类型
                        if($val['xinshou_status'] == DealType::XIN_SHOU || $val['new_user_deal'] == DealType::NEW_USER_DEAL_YES){
                            $dealItem['dealcategorytype'] = 0;
                            $dealItem['dealcategory'] = '新手标';
                        }
                        else{
                            $dealItem['dealcategorytype'] = $val['cid'];
                            $dealItem['dealcategory'] = DealCategory::getDealCategoryName($val['cid']);
                        }
                        //标题目
                        $dealItem['title'] = $val['title_sub'];
                        $dealItem['begin_date'] = $val['start_date'];
                        //还款方式
                        $dealItem['refundmethod'] = DealRefundMethod::getRefundMethodName($val['refund_method']);

                        $data[] = $dealItem;
                    }
                    $dealicon = new DealIconService();
                    $icons = model('DealIcon')->get_deal_icon();

                    if(!empty($icons)){
                        $data = $dealicon->get_deal_icon($data,$icons,'list');
                    }
                }
                $signurl = trim($this->config['Wap']['Host'],'/').'/active/sign/';
                $obj = new stdClass();

                // $experiencedeal_uid = null;
                // if($this->isLogin()){
                //     $experiencedeal_uid = $this->userToken->uid;
                // }
                // $activeinfo = Http::doPost(rtrim($this->config['Wap']['Host'],'/').'/experiencedeal/experiencedeal/get-user-noused-coupon',array('experiencedeal_uid'=>$this->userToken->uid));
                // $active_status = json_decode($activeinfo,true);
                $obj->experience_deal_active_url = '';
                $obj->coupon_money_img =  '';
                $obj->experiencedeal_title =  '';
                $obj->signurl = $signurl;
                $obj->deallist = $data;
                $obj->picList = $picData;
                $returnModel->data->setContent($obj);

            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取首页数据异常');
                $this->logService->logError('获取首页数据异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }
    public  function  get_index_deal_V25(){
        // 返回值
        $returnModel = new ReturnModel();
        // 参数验证成功标识
        $param_valid_flag = true;
        $validResult = '';
        if ($param_valid_flag) {
            try {
                $data = array();
                $picData = array();
                //是否显示新手标
                $show_xinshou = true;
                $dealService = new DealService();
                //获取首页图片轮播
                $appIndexPicService = new AppIndexPicService();
                $picList = $appIndexPicService->getIndexPicList();
                if(!empty($picList) && is_array($picList)){
                    foreach($picList as $key => $val){
                        $item = array();
                        $item['title']= $val['title'];
                        $item['img_url']= $val['img_url'];
                        $item['page_url']= $val['page_url'];
                        //添加轮播图分享信息
                        $shareInfo = $dealService->getShareById($val['sid']);
                        if (!empty($shareInfo['title'])) {
                            $item['title']= $shareInfo['title'];
                        }
                        $item['share_icon'] = !empty($shareInfo) ? $shareInfo['share_icon'] : ''; //分享小图片
                        $item['share_description'] = !empty($shareInfo) ? $shareInfo['describe'] : ''; //分享描述
                        $item['share_url'] = !empty($shareInfo) ? $shareInfo['address'] : ''; //分享地址
                        $picData[]  = $item;
                    }
                }
                //标列表
                $dealList = $dealService->getDealListByDealStatus(array(1,2,3,5), 1, 4, $this->wcg_vcode);
                if(!empty($dealList) && is_array($dealList)){
                    foreach($dealList as $key=>$val){
                        if($val['cid'] == 7 && $val['deal_status'] != 2){
                            unset($dealList[$key]);
                            continue;
                        }
                        $dealItem = array();
                        //标Id
                        $dealItem['dealid'] = $val['deal_id'];
                        //收益率
                        $dealItem['syl'] = DealHelper::getFormateSyl($val['syl']);
                        //期限
                        $start_date='';
                        if($val['deal_status']==DealStatus::YU_GAO)
                        {
                            $start_date=date('Y-m-d',$val['start_date']);
                        }
                        elseif($val['deal_status']==DealStatus::TOUBIAO_ING)
                        {
                            $start_date=date('Y-m-d');
                        }else{
                            $start_date=date('Y-m-d',$val['full_time']);
                        }
                        $qixian_time = LoanTerms($start_date, null, $val['deal_end_date']);
                        if($val['expires_type']==DealExpiresType::Day)
                        {
                            $dealItem['qixian'] = $qixian_time['days'][1]['period']['days'];
                            $dealItem['qixian_type'] = DealExpiresType::getDealExpiresTypeName(DealExpiresType::Day);
                        }else{
                            $dealItem['qixian'] = $qixian_time['count'];
                            $dealItem['qixian_type'] = DealExpiresType::getDealExpiresTypeName(DealExpiresType::Month);
                        }

                        //借款金额
                        $dealItem['money'] =DealHelper::getFormateSyl(floatval($val['money'])/10000.00);
                        //进度
                        $dealItem['schedule']=round($val['schedule']);
                        //周周盈处理
                        if($val['cid'] == 7){
                            $dealItem['money'] = DealHelper::getFormateSyl(floatval($val['day_max_money']) / 10000.00);
                            //获取周周盈当日投资总额
                            $dealDaySum = model('DealRead')->getWeekEarnAmount($val['deal_id']);
                            $dealItem['schedule'] = !empty($val['day_max_money']) ? round($dealDaySum/$val['day_max_money']*100) : 0;
                            $val['balance'] = $val['day_max_money'] > $dealDaySum ? $val['day_max_money'] - $dealDaySum : 0;
                            $qixian_time = LoanTerms(date('Y-m-d',$val['start_date']), null, $val['deal_end_date']);
                            $dealItem['qixian'] = $qixian_time['days'][1]['period']['days'];
                        }
                        if(intval($dealItem['schedule']) == 100 && $val['balance'] > 0){
                            $dealItem['schedule']=99;
                        }
                        else if($val['balance'] == 0 || $dealItem['schedule'] > 100){
                            $dealItem['schedule'] = 100;
                        }
                        //标状态ID
                        $dealItem['dealstatusid'] = $val['deal_status'];
                        //标的状态
                        $dealItem['dealstatus'] = DealStatus::getDealStatusName($val['deal_status']);
                        if($val['deal_status'] == DealStatus::YU_GAO && date('Y-m-d', time()) == date('Y-m-d', $val['start_date'])){
                            $dealItem['dealstatus'] = date('H:i', $val['start_date']);
                        }
                        else if($val['deal_status'] == DealStatus::TOUBIAO_ING){
                            $dealItem['dealstatus'] = round($dealItem['schedule']).'%';
                        }
                        //标类型
                        if($val['xinshou_status'] == DealType::XIN_SHOU || $val['new_user_deal'] == DealType::NEW_USER_DEAL_YES){
                            $dealItem['dealcategorytype'] = 0;
                            $dealItem['dealcategory'] = '新手标';
                        }
                        else{
                            $dealItem['dealcategorytype'] = $val['cid'];
                            $dealItem['dealcategory'] = DealCategory::getDealCategoryName($val['cid']);
                        }
                        //标题目
                        $dealItem['title'] = $val['title_sub'];
                        $dealItem['begin_date'] = $val['start_date'];
                        //还款方式
                        $dealItem['refundmethod'] = DealRefundMethod::getRefundMethodName($val['refund_method']);

                        $data[] = $dealItem;
                    }
                    $dealicon = new DealIconService();
                    $icons = model('DealIcon')->get_deal_icon();

                    if(!empty($icons)){
                        $data = $dealicon->get_deal_icon($data,$icons,'list');
                    }
                }
                $signurl = trim($this->config['Wap']['Host'],'/').'/active/sign/';
                $obj = new stdClass();

                // $experiencedeal_uid = null;
                // if($this->isLogin()){
                //     $experiencedeal_uid = $this->userToken->uid;
                // }
                // $activeinfo = Http::doPost(rtrim($this->config['Wap']['Host'],'/').'/experiencedeal/experiencedeal/get-user-noused-coupon',array('experiencedeal_uid'=>$this->userToken->uid));
                // $active_status = json_decode($activeinfo,true);
                $obj->experience_deal_active_url = '';
                $obj->coupon_money_img =  '';
                $obj->experiencedeal_title =  '';
                $obj->signurl = $signurl;
                $obj->deallist = $data;
                $obj->picList = $picData;
                $returnModel->data->setContent($obj);

            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取首页数据异常');
                $this->logService->logError('获取首页数据异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }
    //首页返回 计总收益 前一天收益 前一天收益打败股东比例
    public function get_index_new()
    {
        // 返回值
        $returnModel = new ReturnModel();
        // 参数验证成功标识
        $param_valid_flag = true;
        $validResult = '';
        if ($param_valid_flag) {
            try {
                //累计总收益
                $totalIncome = 0;
                //前一天收益
                $yesterDayIncome = 0;
                //前一天收益打败股东比例
                $overcomePercent = 0;
                if($this->isLogin()){
                    $refundRecordService = new RefundRecordService();
                    $yiShouLiXi = model('UserRead')->getYishouLixi($this->userToken->uid);
                    if(!empty($yiShouLiXi)){
                        $totalIncome = $yiShouLiXi;
                    }
                    $userYesterDayIncome = $refundRecordService->getUserTotalIncomeByDate($this->userToken->uid, 1);
                    if(!empty($userYesterDayIncome)){
                        $yesterDayIncome = $userYesterDayIncome;
                    }
                    $overcomePercent = $refundRecordService->getUserTotalInomePercentNew($this->userToken->uid);
                }
                $obj = new stdClass();
                $obj->totalincome = number_format($totalIncome, 2, '.','');
                $obj->yesterdayincome = number_format($yesterDayIncome, 2, '.','');
                $obj->overcomePercent = $overcomePercent;
                $returnModel->data->setContent($obj);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取首页数据异常');
                $this->logService->logError('获取首页数据异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //持有产品-进行中
    public function get_chiyou_jinxingzhong()
    {

        // 返回值
        $returnModel = new ReturnModel();

        $pageIndex = intval($_GET['pageindex']);
        $pageSize = 10;

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }
        if (empty($pageIndex)) {
            $pageIndex = 1;
        }

        if ($param_valid_flag) {
            try {
                $dealService = new DealService();
                $totalNum = 0;
                if ($pageIndex == 1) {
                    if($this->wcg_vcode >= 25){
                        $totalNum = $dealService->countByUidAndDealStatus($this->userToken->uid, array(DealStatus::TOUBIAO_ING, DealStatus::MAN_BIAO), $this->wcg_vcode);
                    }else{
                        $totalNum = $dealService->countByUidAndDealStatus($this->userToken->uid, array(DealStatus::TOUBIAO_ING, DealStatus::MAN_BIAO));
                    }
                }
                $data = array();
                if($this->wcg_vcode >= 25){
                    $dealList = $dealService->getDealListByUidAndDealStatus($this->userToken->uid, array(DealStatus::TOUBIAO_ING, DealStatus::MAN_BIAO), $pageIndex, $pageSize, $this->wcg_vcode);
                }else{
                    $dealList = $dealService->getDealListByUidAndDealStatus($this->userToken->uid, array(DealStatus::TOUBIAO_ING, DealStatus::MAN_BIAO), $pageIndex, $pageSize);
                }
                if (!empty($dealList) && is_array($dealList)) {
                    $refundRecordService = new RefundRecordService();

                    foreach ($dealList as $key => $val) {
                        $dealItem = array();
                        //标Id
                        $dealItem['dealid'] = $val['deal_id'];
                        //标的分类Id
                        $dealItem['cid'] = ($val['cid'] == 6) ? 0 : $val['cid'];
                        //旺金宝新手标
                        $dealItem['cid'] = ($val['cid'] == 8 && $val['new_user_deal']!=1) ? 9 : $val['cid'];
                        //标的分类图片地址
                        $dealItem['deal_category_url'] = $this->config['URL_HTTP_HOST'] . '/template/default/public/images/cid/' . $dealItem['cid'] . '.png';
                        //标题目
                        $dealItem['title'] = $val['title_sub'];
                        //进度
                        $dealItem['jindu'] = $val['schedule']<=100 ? round($val['schedule']) : '100';
                        //投资金额
                        $dealItem['money'] = DealHelper::getFormateSyl($val['order_money']);
                        //期限
                        $dealItem['qixian'] = $val['deal_end_date'];
                        //投标时间
                        $dealItem['order_time'] = date('Y-m-d H:i', $val['create_time']);
                        //收益率
                        //$dealItem['syl'] = sprintf("%.2f", strval($val['syl']));//substr(sprintf("%.2f", strval($val['syl'])),0,-1);
                        $dealItem['syl'] = DealHelper::getFormateSyl($val['syl']);
                        //利息
                        $lixi = $refundRecordService->getIncomeByDealNumber($val['deal_number'], array(RefundRecordStatus::WEI_HUAN));
                        $dealItem['lixi'] = DealHelper::getFormateSyl($lixi);
                        //还款方式
                        $dealItem['method'] = ($val['refund_method']==1)?'等额本息':(($val['refund_method']==2)?'付息还本':'到期本息');

                        $data[] = $dealItem;
                    }
                }

                $obj = new stdClass();
                $obj->totalnum = $totalNum;
                $obj->deallist = $data;
                $returnModel->data->setContent($obj);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取持有产品-进行中列表异常');
                // write log
                $this->logService->logError('获取持有产品-进行中列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //持有产品-已回款
    public function get_chiyou_yihuikuan(){
        // 返回值
        $returnModel = new ReturnModel();

        $pageIndex = intval($_GET['pageindex']);
        $pageSize = 10;

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }
        if (empty($pageIndex)) {
            $pageIndex = 1;
        }

        if ($param_valid_flag) {
            try {
                $dealService = new DealService();

                $totalNum = 0;
                if ($pageIndex == 1) {
                    if($this->wcg_vcode >= 25){
                        $totalNum = $dealService->countByUidAndDealStatus($this->userToken->uid, array(DealStatus::YI_HUAN_QING), $this->wcg_vcode);
                    }else{
                        $totalNum = $dealService->countByUidAndDealStatus($this->userToken->uid, array(DealStatus::YI_HUAN_QING));
                    }
                }

                $data = array();
                if($this->wcg_vcode >= 25){
                    $dealList = $dealService->getDealListByUidAndDealStatus($this->userToken->uid, array(DealStatus::YI_HUAN_QING), $pageIndex, $pageSize, $this->wcg_vcode);
                }else{
                    $dealList = $dealService->getDealListByUidAndDealStatus($this->userToken->uid, array(DealStatus::YI_HUAN_QING), $pageIndex, $pageSize);
                }
                if (!empty($dealList) && is_array($dealList)) {
                    $refundRecordService = new RefundRecordService();

                    foreach ($dealList as $key => $val) {
                        $bidAmt = $val['order_money'];
                        if($val['refund_method'] == DealRefundMethod::DAO_QI_BEN_XI){
                            //转让后的剩余本金
                            $bidAmt = $refundRecordService->getDealOrderBenJin($val['deal_number']);
                            //已转让金额 = 用原订单金额减去转让后的剩余本金
                            $transferedAmt = $val['order_money']-$bidAmt;
                            if($val['order_money'] == $transferedAmt)
                            {
                                continue;
                            }
                        }

                        $dealItem = array();
                        //标Id
                        $dealItem['dealid'] = $val['deal_id'];
                        //标题目
                        $dealItem['title'] = $val['title_sub'];
                        //投资金额
                        $dealItem['money'] = number_format(floatval($bidAmt), 2, '.','');
                        //收益率
                        //$dealItem['syl'] = sprintf("%.2f", strval($val['syl']));//substr(sprintf("%.2f", strval($val['syl'])),0,-1);
                        $dealItem['syl'] = DealHelper::getFormateSyl($val['syl']);
                        //利息
                        $lixi = $refundRecordService->getIncomeByDealNumber($val['deal_number'], array(RefundRecordStatus::YI_HUAN));
                        $dealItem['lixi'] = number_format(floatval($lixi), 2, '.','');
                        //期限
                        //$refundTime = $dealService->getDealRefundTime($val['deal_id']);
                        $dealItem['qixian'] = $val['refund_time'];

                        $data[] = $dealItem;
                    }
                }

                $obj = new stdClass();
                $obj->totalnum = $totalNum;
                $obj->deallist = $data;
                $returnModel->data->setContent($obj);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取持有产品-已回款列表异常');
                // write log
                $this->logService->logError('获取持有产品-已回款列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //我的资产-已还清
    public function get_zichan_yihuanqing_v3()
    {
        // 返回值
        $returnModel = new ReturnModel();

        $pageIndex = intval($_GET['pageindex']);
        $pageSize = 10;

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }
        $uid = $this->userToken->uid;
        if (empty($pageIndex)) {
            $pageIndex = 1;
        }

        if ($param_valid_flag) {
            try {
                $dealService = new DealService();

                $totalNum = 0;
                if ($pageIndex == 1) {
                    $totalNum = $dealService->countByUidAndDealStatusEnd($uid, array(DealStatus::YI_HUAN_QING));
                }

                $data = array();
                if($this->wcg_vcode >= 25){
                    $dealList = $dealService->getDealListByUidAndDealStatusYihuanqing($uid, $pageIndex, $pageSize, $this->wcg_vcode);
                }else{
                    $dealList = $dealService->getDealListByUidAndDealStatusYihuanqing($uid, $pageIndex, $pageSize);
                }
                if (!empty($dealList) && is_array($dealList)) {
                    $refundRecordService = new RefundRecordService();
                    foreach ($dealList as $key => $val) {
                        $bidAmt = $val['order_money'];
                        if ($val['bid_type'] == 1 && $val['cid'] != 7) {
                            //转让后的剩余本金
                            $bidAmt = $refundRecordService->getDealOrderBenJin($val['deal_number']);
                            //已转让金额 = 用原订单金额减去转让后的剩余本金
                            $transferedAmt = $val['order_money']-$bidAmt;
                            if($val['order_money'] == $transferedAmt)
                            {
                                continue;
                            }
                        }

                        $dealItem = array();
                        //标Id
                        $dealItem['dealid'] = $val['deal_id'];
                        //标的分类Id
                        $dealItem['cid'] = ($val['cid'] == 6) ? 0 : $val['cid'];
                        //标的分类图片地址
                        $dealItem['deal_category_url'] = $this->config['URL_HTTP_HOST'] . '/template/default/public/images/cid/' . $dealItem['cid'] . '.png';
                        //1是投标，2是债权
                        $dealItem['bid_type'] = $val['bid_type'];
                        //标题目
                        $dealItem['title'] = $val['title_sub'];
                        //订单号
                        $dealItem['dealnumber'] = $val['deal_number'];
                        //投资金额
                        $dealItem['money'] = DealHelper::getFormateSyl($bidAmt);
                        //利息
                        if ($val['bid_type'] == 1) {
                            $lixi = $refundRecordService->getIncomeByDealNumber($val['deal_number'], array(RefundRecordStatus::YI_HUAN));
                            $dealItem['lixi'] = DealHelper::getFormateSyl($lixi);
                        } else {
                            $_lixi = $refundRecordService->getBenxiByDealNumber($val['deal_number']);
                            $dealItem['lixi'] = DealHelper::getFormateSyl($_lixi - $bidAmt);
                        }
                        $rateCoupon = model('RateCouponRead')->getUsedCoupon($val['deal_number'], $uid);
                        if ($rateCoupon) {
                            $deal = model('DealRead')->find($rateCoupon['deal_id']);
                            $addDays = DealHelper::addRateDays($rateCoupon['add_rate_days'], $deal['deal_end_date'], $rateCoupon['used_time'], $deal['full_time']);
                            $buxi = $rateCoupon['coupon_rate'] / 100 / 360 * $addDays * $rateCoupon['order_money'];
                            $dealItem['lixi'] = DealHelper::getFormateSyl(floatval($dealItem['lixi']) + floatval($buxi));
                        }
                        //期限
                        //$refundTime = $dealService->getDealRefundTime($val['deal_id']);
                        $dealItem['qixian'] = date('Y-m-d', $val['refund_time']);
                        //还款方式
                        $dealItem['method'] = ($val['refund_method']==1)?'等额本息':(($val['refund_method']==2)?'付息还本':'到期本息');

                        $data[] = $dealItem;
                    }
                }

                $obj = new stdClass();
                $obj->totalnum = $totalNum;
                $obj->deallist = $data;
                $returnModel->data->setContent($obj);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取我的资产-已还清列表异常');
                // write log
                $this->logService->logError('获取我的资产-已还清列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //持有产品-收益中
    public function get_chiyou_shouyizhong(){
        // 返回值
        $returnModel = new ReturnModel();

        $pageIndex = intval($_GET['pageindex']);
        $pageSize = 10;

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }
        if (empty($pageIndex)) {
            $pageIndex = 1;
        }

        if ($param_valid_flag) {
            try {
                $loginUid = $this->userToken->uid;
                $dealService = new DealService();

                $totalNum = 0;
                if ($pageIndex == 1) {
                    if($this->wcg_vcode >= 25){
                        $totalNum = $dealService->countByUidAndDealStatus($loginUid, array(DealStatus::HUAN_KUAN_ING), $this->wcg_vcode);
                    }else{
                        $totalNum = $dealService->countByUidAndDealStatus($loginUid, array(DealStatus::HUAN_KUAN_ING));
                    }
                }

                $data = array();
                if($this->wcg_vcode >= 25){
                    $dealList = $dealService->getDealListByUidAndDealStatus($loginUid, array(DealStatus::HUAN_KUAN_ING), $pageIndex, $pageSize, $this->wcg_vcode);
                }else{
                    $dealList = $dealService->getDealListByUidAndDealStatus($loginUid, array(DealStatus::HUAN_KUAN_ING), $pageIndex, $pageSize);
                }
                if (!empty($dealList) && is_array($dealList)) {
                    $refundRecordService = new RefundRecordService();

                    foreach ($dealList as $key => $val) {
                        $bidAmt = $val['order_money'];
                        if($val['refund_method'] == DealRefundMethod::DAO_QI_BEN_XI){
                            //转让后的剩余本金
                            $bidAmt = $refundRecordService->getDealOrderBenJin($val['deal_number']);
                            //已转让金额 = 用原订单金额减去转让后的剩余本金
                            $transferedAmt = $val['order_money']-$bidAmt;
                            if($val['order_money'] == $transferedAmt)
                            {
                                continue;
                            }
                        }

                        $dealItem = array();
                        //标Id
                        $dealItem['dealid'] = $val['deal_id'];
                        //标题目
                        $dealItem['title'] = $val['title_sub'];
                        //投资金额
                        $dealItem['money'] = number_format(floatval($bidAmt), 2, '.','');
                        //收益率
                        //$dealItem['syl'] = sprintf("%.2f", strval($val['syl']));//substr(sprintf("%.2f", strval($val['syl'])),0,-1);
                        $dealItem['syl'] = DealHelper::getFormateSyl($val['syl']);
                        //利息
                        $lixi = $refundRecordService->getIncomeByDealNumber($val['deal_number'], array(RefundRecordStatus::YI_HUAN, RefundRecordStatus::WEI_HUAN));
                        $dealItem['lixi'] = number_format(floatval($lixi), 2, '.','');
                        //期限
                        $dealItem['qixian'] = $val['deal_end_date'];

                        $data[] = $dealItem;
                    }
                }

                $obj = new stdClass();
                $obj->totalnum = $totalNum;
                $obj->deallist = $data;
                $returnModel->data->setContent($obj);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取持有产品-收益中列表异常');
                // write log
                $this->logService->logError('获取持有产品-收益中列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //我的资产-收益中
    public function get_zichan_shouyizhong_v3()
    {
        // 返回值
        $returnModel = new ReturnModel();

        $pageIndex = intval($_GET['pageindex']);
        $pageSize = 10;

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }
        if (empty($pageIndex)) {
            $pageIndex = 1;
        }

        if ($param_valid_flag) {
            try {
                $loginUid = $this->userToken->uid;
                $dealService = new DealService();

                $totalNum = 0;
                if ($pageIndex == 1) {
                    $totalNum = $dealService->countByUidAndDealStatusIng($loginUid, array(DealStatus::HUAN_KUAN_ING));
                }

                $data = array();

                $dealList = $dealService->getDealListByUidAndDealStatusShouyizhong($loginUid, $pageIndex, $pageSize);
                if (!empty($dealList) && is_array($dealList)) {
                    $refundRecordService = new RefundRecordService();
                    foreach ($dealList as $key => $val) {
                        $bidAmt = $val['order_money'];
                        if ($val['bid_type'] == 1 && $val['cid'] != 7) {
                            //转让后的剩余本金
                            $bidAmt = $refundRecordService->getDealOrderBenJin($val['deal_number']);
                            //已转让金额 = 用原订单金额减去转让后的剩余本金
                            $transferedAmt = $val['order_money'] - $bidAmt;
                            if($val['order_money'] == $transferedAmt)
                            {
                                continue;
                            }
                        }

                        $dealItem = array();
                        //标Id
                        $dealItem['dealid'] = $val['deal_id'];
                        //标的分类Id
                        $dealItem['cid'] = ($val['cid'] == 6) ? 0 : $val['cid'];
                        //标的分类图片地址
                        $dealItem['deal_category_url'] = $this->config['URL_HTTP_HOST'] . '/template/default/public/images/cid/' . $dealItem['cid'] . '.png';
                        //1是投标，2是债权
                        $dealItem['bid_type'] = $val['bid_type'];
                        //标题目
                        $dealItem['title'] = $val['title_sub'];
                        //订单号
                        $dealItem['dealnumber'] = $val['deal_number'];
                        //投资金额
                        $dealItem['money'] = DealHelper::getFormateSyl($bidAmt);
                        //利息
                        if ($val['bid_type'] == 1) {
                            if ($val['cid'] == 7 ) { // 周周盈项目利息和到期日期计算
                                // 计算项目期限
                                $startDate = new DateTime(date('Y-m-d', $val['start_date']));
                                $dealEndDate = new DateTime(date('Y-m-d', $val['deal_end_date']));
                                $dealQiian = $dealEndDate->diff($startDate);

                                //计息天数默认为项目期限
                                $jixiDays = $dealQiian->days;

                                $end = new DateTime(date('Y-m-d', time()));
                                $start = new DateTime(date('Y-m-d', $val['order_time']));
                                $real = $end->diff($start);
                                if ($real->days > $jixiDays ) {
                                    $jixiDays = $real->days;
                                }

                                $lixi = $val['order_money'] * $val['syl'] / 100 / 360 * $jixiDays;
                                $dealItem['lixi'] = DealHelper::getFormateSyl($lixi);
                                $val['deal_end_date'] = strtotime(date('Y-m-d', strtotime(date('Y-m-d', $val['order_time']) . ' +'. $jixiDays .' days')));
                            }
                            else {
                                $lixi = $refundRecordService->getIncomeByDealNumber($val['deal_number'], array(RefundRecordStatus::YI_HUAN, RefundRecordStatus::WEI_HUAN));
                                $dealItem['lixi'] = DealHelper::getFormateSyl($lixi);
                            }
                        } else {
                            $_lixi = $refundRecordService->getBenxiByDealNumber($val['deal_number']);
                            $dealItem['lixi'] = DealHelper::getFormateSyl($_lixi - $bidAmt);
                        }
                        $rateCoupon = model('RateCouponRead')->getUsedCoupon($val['deal_number'], $loginUid);
                        if ($rateCoupon) {
                            $deal = model('DealRead')->find($rateCoupon['deal_id']);
                            $addDays = DealHelper::addRateDays($rateCoupon['add_rate_days'], $deal['deal_end_date'], $rateCoupon['used_time'], $deal['full_time']);
                            $buxi = $rateCoupon['coupon_rate'] / 100 / 360 * $addDays * $rateCoupon['order_money'];
                            $dealItem['lixi'] = DealHelper::getFormateSyl($dealItem['lixi'] + $buxi);
                        }
                        //期限
                        $dealItem['qixian'] = date('Y-m-d', $val['deal_end_date']);
                        //还款方式
                        $dealItem['method'] = ($val['refund_method']==1)?'等额本息':(($val['refund_method']==2)?'付息还本':'到期本息');

                        $data[] = $dealItem;
                    }
                }

                $obj = new stdClass();
                $obj->totalnum = $totalNum;
                $obj->deallist = $data;
                $returnModel->data->setContent($obj);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取我的资产-收益中列表异常');
                // write log
                $this->logService->logError('获取我的资产-收益中列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }
    //交易明细-账户管理
    public function get_user_action_account(){
        // 返回值
        $returnModel = new ReturnModel();

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }

        if ($param_valid_flag) {
            try {
                $data = array();

                $userActionRecordService = new UserActionRecordService();
                $beginTime = strtotime("-31 day");
                $endTime = time();

                $actionList = $userActionRecordService->getUserActionListByTime($this->userToken->uid,$beginTime, $endTime);
                if (!empty($actionList) && is_array($actionList)) {
                    foreach ($actionList as $key => $val) {
                        $dealItem = array();

                        $dealItem['money'] = number_format($val['money'], 2, '.', '');
                        $dealItem['act_type'] = $val['act_type'];
                        $dealItem['act_name'] = $val['act_name'];
                        $dealItem['show_type'] = $val['show_type'];
                        $dealItem['create_date'] = $val['create_time'];
                        $dealItem['create_month'] = date('Y-m', $val['create_time']);

                        $data[] = $dealItem;
                    }
                }

                $returnModel->data->setContent($data);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取账户管理-交易明细异常');
                // write log
                $this->logService->logError('获取账户管理-交易明细异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //交易明细
    public function get_user_action_list(){
        // 返回值
        $returnModel = new ReturnModel();

        // 参数验证成功标识
        $param_valid_flag = true;

        $actType = intval($_GET['acttype']);
        $pageIndex = intval($_GET['pageindex']);
        $pageSize = 15;

        $validResult = null;
        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }
        if (empty($pageIndex)) {
            $pageIndex = 1;
        }
        if(empty($actType)){
            $actType = 0;
        }

        $userId = $this->userToken->uid;

        if ($param_valid_flag) {
            try {
                $data = array();

                $userActionRecordService = new UserActionRecordService();

                $actionList = $userActionRecordService->getUserActionListPage($userId, $actType, $pageIndex, $pageSize);
//                print_r($actionList);
//                exit;
                if (!empty($actionList) && is_array($actionList)) {
                    foreach ($actionList as $key => $val) {
                        $dealItem = array();

                        $dealItem['money'] = number_format($val['money'], 2, '.', '');
                        $dealItem['act_type'] = $val['act_type'];
                        $dealItem['act_name'] = $val['act_name'];
                        $dealItem['show_type'] = $val['show_type'];
                        $dealItem['create_date'] = $val['create_time'];
                        if($val['create_time']){
                            $dealItem['create_month'] = date('Y-m', $val['create_time']);
                        }
                        else{
                            $dealItem['create_month'] = '';
                        }

                        $data[] = $dealItem;
                    }
                }

                $returnModel->data->setContent($data);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取账户管理-交易明细异常');
                // write log
                $this->logService->logError('获取账户管理-交易明细异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //交易明细_V2
    public function get_user_action_list_V2(){
        // 返回值
        $returnModel = new ReturnModel();

        // 参数验证成功标识
        $param_valid_flag = true;

        $actType = intval($_GET['acttype']);
        $pageIndex = intval($_GET['pageindex']);
        $pageSize = 15;

        $validResult = null;
        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }
        if (empty($pageIndex)) {
            $pageIndex = 1;
        }
        if(empty($actType)){
            $actType = 0;
        }

        $userId = $this->userToken->uid;

        if ($param_valid_flag) {
            try {
                $data = array();

                $userActionRecordService = new UserActionRecordService();

                //总金额、总数量
                $totalInfo = ['totalMoney'=>0, 'totalNum'=>0];
                if($pageIndex == 1 && $actType != 5){
                    $actionCount = $userActionRecordService->getUserActionTotalInfo($userId, $actType);
//                    print_r($actionCount);
//                    exit;
                    if($actionCount && $actionCount[0]){
                        $totalInfo = ['totalMoney'=>  number_format(empty($actionCount[0]['totalMoney']) ? 0 : $actionCount[0]['totalMoney'] , 2, '.', ''), 'totalNum'=>$actionCount[0]['totalNum']];
                    }
                }

                $actionList = $userActionRecordService->getUserActionListPage($userId, $actType, $pageIndex, $pageSize);
//                print_r($actionList);
//                exit;
                if (!empty($actionList) && is_array($actionList)) {
                    foreach ($actionList as $key => $val) {
                        $dealItem = array();

                        $dealItem['money'] = number_format($val['money'], 2, '.', '');
                        $dealItem['act_type'] = $val['act_type'];
                        $dealItem['act_name'] = $val['act_name'];
                        $dealItem['show_type'] = $val['show_type'];
                        $dealItem['create_date'] = $val['create_time'];
                        if($val['create_time']){
                            $dealItem['create_month'] = date('Y-m', $val['create_time']);
                        }
                        else{
                            $dealItem['create_month'] = '';
                        }

                        $data[] = $dealItem;
                    }
                }

                $returnModel->data->setContent(['actionlist'=>$data, 'totalMoney'=>$totalInfo['totalMoney'], 'totalNum'=>$totalInfo['totalNum']]);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取账户管理-交易明细异常');
                // write log
                $this->logService->logError('获取账户管理-交易明细异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //交易明细分类
    public function get_user_action_type(){
        // 返回值
        $returnModel = new ReturnModel();

        $data[]=['id'=>0, 'name'=>'全部'];
        $data[]=['id'=>1, 'name'=>'充值'];
        $data[]=['id'=>2, 'name'=>'提现'];
        $data[]=['id'=>12, 'name'=>'手续费'];
        $data[]=['id'=>5, 'name'=>'生利宝'];
        $data[]=['id'=>3, 'name'=>'投标'];
        $data[]=['id'=>4, 'name'=>'回款'];
        $data[]=['id'=>7, 'name'=>'奖励'];
        $data[]=['id'=>9, 'name'=>'转让'];

        $returnModel->data->setContent($data);

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //近期回款
    public function get_recent_refund() {
        // 返回值
        $returnModel = new ReturnModel();

        $end_time = strtotime('+31 day');
        $begin_time = time();
        $begin_time = strtotime(date('Y-m-d', $begin_time));

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }

        if ($param_valid_flag) {
            try {
                $data = array();

                $refundRecordService = new RefundRecordService();

                $refundList = $refundRecordService->getUserRefundRecordList($this->userToken->uid, $begin_time, $end_time);
                if (!empty($refundList) && is_array($refundList)) {

                    foreach ($refundList as $key => $val) {
                        $bidAmt = $val['order_money'];
                        if($val['refund_method'] == DealRefundMethod::DAO_QI_BEN_XI){
                            //转让后的剩余本金
                            $bidAmt = $refundRecordService->getDealOrderBenJin($val['deal_number']);
                            //已转让金额 = 用原订单金额减去转让后的剩余本金
                            $transferedAmt = $val['order_money']-$bidAmt;
                            if($val['order_money'] == $transferedAmt)
                            {
                                continue;
                            }
                        }

                        $dealItem = array();
                        //标Id
                        $dealItem['dealid'] = $val['deal_id'];
                        //标题目
                        $dealItem['title'] = $val['title_sub'];
                        //投资金额
                        $dealItem['money'] = number_format(floatval($bidAmt), 2, '.','');
                        //收益率
                        //$dealItem['syl'] = sprintf("%.2f", strval($val['syl']));//substr(sprintf("%.2f", strval($val['syl'])),0,-1);
                        $dealItem['syl'] = DealHelper::getFormateSyl($val['syl']);
                        //利息
                        $dealItem['lixi'] = number_format(floatval($val['lixi']), 2, '.','');
                        //期限
                        $dealItem['qixian'] = $val['refund_time'];

                        $data[] = $dealItem;
                    }
                }

                $returnModel->data->setContent($data);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取回款计划列表异常');
                // write log
                $this->logService->logError('获取回款计划列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //我的收益
    public function get_my_income(){
        // 返回值
        $returnModel = new ReturnModel();

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (!$this->isLogin()) {
            $validResult = '没有登录，请登录';
            $param_valid_flag = false;
        }

        if ($param_valid_flag) {
            try {
                $loginUid = $this->userToken->uid;

                $data = array();

                $refundRecordService = new RefundRecordService();

                //累计收益
                $totalIncome = $refundRecordService->getUserTotalIncome($loginUid);

                //昨日收益
//                $beginDate = strtotime("-1 day");
//                $endDate = time();
                $yesterDayIncome = $refundRecordService->getUserTotalIncomeByDate($loginUid, 1);

                //近一周收益
//                $beginDate = strtotime("-7 day");
//                $endDate = time();
                $prevWeekIncome = $refundRecordService->getUserTotalIncomeByDate($loginUid, 2);

                //近一个月收益
//                $beginDate = strtotime("-30 day");
//                $endDate = time();
                $prevMonthIncome = $refundRecordService->getUserTotalIncomeByDate($loginUid, 3);

                //理财资产
                $ZiCHan_LiXi = $refundRecordService->getUserLiCaiZiCanLiXi($loginUid);
                $licaiZhiCan =  $ZiCHan_LiXi['licai_zichan'];

                //收益中的投资列表
                $dealService = new DealService();
                if($this->wcg_vcode >= 25){
                    $dealList = $dealService->getDealListByUidAndDealStatus($loginUid, array(DealStatus::HUAN_KUAN_ING), 1, 10000, 'new');
                }else{
                    $dealList = $dealService->getDealListByUidAndDealStatus($loginUid, array(DealStatus::HUAN_KUAN_ING), 1, 10000);
                }
                if (!empty($dealList) && is_array($dealList)) {

                    $refundRecordService = new RefundRecordService();

                    foreach ($dealList as $key => $val) {
                        $bidAmt = $val['order_money'];
                        if($val['refund_method'] == DealRefundMethod::DAO_QI_BEN_XI){
                            //转让后的剩余本金
                            $bidAmt = $refundRecordService->getDealOrderBenJin($val['deal_number']);
                            //已转让金额 = 用原订单金额减去转让后的剩余本金
                            $transferedAmt = $val['order_money']-$bidAmt;
                            if($val['order_money'] == $transferedAmt)
                            {
                                continue;
                            }
                        }

                        $dealItem = array();
                        //标Id
                        $dealItem['dealid'] = $val['deal_id'];
                        //标题目
                        $dealItem['title'] = $val['title_sub'];
                        //投资金额
                        $dealItem['money'] = number_format(floatval($bidAmt), 2, '.','');
                        //收益率
                       // $dealItem['syl'] = sprintf("%.2f", strval($val['syl']));//substr(sprintf("%.2f", strval($val['syl'])),0,-1);
                        $dealItem['syl'] = DealHelper::getFormateSyl($val['syl']);
                        //利息
                        //$lixi = $refundRecordService->getIncomeByDealNumber($val['deal_number'], array(RefundRecordStatus::YI_HUAN, RefundRecordStatus::WEI_HUAN));
                        // 昨日收益
                        $dealItem['lixi'] = number_format(floatval($val['syl']/100/360 * $dealItem['money']), 2, '.','');
                        //期限
                        //$period = DateUtil::getDateDiff($val['start_date'], $val['deal_end_date']);
                        $start_date=date('Y-m-d',$val['full_time']);
                        $qixian_time = LoanTerms($start_date, null, $val['deal_end_date']);
                        if($val['expires_type']==DealExpiresType::Day)
                        {
                            $dealItem['qixian'] = $qixian_time['days'][1]['period']['days'];
                            $dealItem['qixiantype'] = DealExpiresType::getDealExpiresTypeName(DealExpiresType::Day);
                        }else{
                            $dealItem['qixian'] = $qixian_time['count'];
                            $dealItem['qixiantype'] = DealExpiresType::getDealExpiresTypeName(DealExpiresType::Month);
                        }

                        $data[] = $dealItem;
                    }
                }

                $obj = new stdClass();
                $obj->total_income = number_format($totalIncome, 2, '.','');
                $obj->yesterday_income = number_format($yesterDayIncome, 2, '.','');
                $obj->prev_week_income = number_format($prevWeekIncome, 2, '.','');
                $obj->prev_month_income = number_format($prevMonthIncome, 2, '.','');
                $obj->licai_zhican = number_format($licaiZhiCan, 2, '.','');
                $obj->data = $data;

                $returnModel->data->setContent($obj);

            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取我的收益数据异常');
                // write log
                $this->logService->logError('获取我的收益数据异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //项目详情-详情
    public function get_deal_detail(){
        // 返回值
        $returnModel = new ReturnModel();

        $dealId = intval($_GET['dealid']);

        // 参数验证成功标识
        $param_valid_flag = true;


        $validResult = null;
        if (!isset($dealId) || empty($dealId) || $dealId <= 0) {
            $validResult = '参数标ID错误';
            $param_valid_flag = false;
        }

        if ($param_valid_flag) {
            try {
                $data = array();

                $dealService = new DealService();
                if ($this->isLogin()) {
                    $uid = $this->userToken->uid;
                    $isNewBid = ($dealService->isNewBid($uid) == 0) ? 1 : 0;
                } else {
                    $isNewBid = 1;
                }

                $deal = $dealService->getDealById_Read($dealId);

                if(!empty($deal)){
                    //是否投过新手标0未投过 1投过
                    // $data['is_new_bid'] = $isNewBid;
                    //是否设置专享保护时间1设置 0没设置
                    $data['is_end_time'] = !empty($deal['new_user_deal_end_time']) ? 1 : 0;
                    //保护时间是否结束1结束 0未结束
                    // $data['is_end_time_over'] = (time()>$deal['new_user_deal_end_time'])? 1 : 0;
                    $data['deal_id']=$deal['deal_id'];
                    $data['title']=$deal['title'];
                    $data['dealstatusid']=$deal['deal_status'];
                    //标类型
                    if($deal['xinshou_status'] == DealType::XIN_SHOU || $deal['new_user_deal'] == DealType::NEW_USER_DEAL_YES){
                        $data['dealcategorytype'] = 0;
                        $data['dealcategory'] = '新手标';
                        $data['new_user_deal'] = 1;

                        if(time() >= $deal['new_user_deal_begin_time'] && time() <= $deal['new_user_deal_end_time'] && $deal['deal_status'] == DealStatus::TOUBIAO_ING){
                            $data['new_user_deal_leave_time'] = $deal['new_user_deal_end_time'] - time();
                        }
                        else{
                            $data['new_user_deal_leave_time'] = 0;
                        }

                        if($deal['deal_status'] == DealStatus::YU_GAO){
                            $beginDate = date('Y-m-d', $deal['new_user_deal_begin_time']);
                            $endDate = date('Y-m-d', $deal['new_user_deal_end_time']);

                            if($beginDate == $endDate){
                                $data['new_user_deal_period_time'] = date('Y.m.d H:i', $deal['new_user_deal_begin_time']).'～'.date('H:i', $deal['new_user_deal_end_time']);
                            }
                            else{
                                $data['new_user_deal_period_time'] = date('Y.m.d H:i', $deal['new_user_deal_begin_time']).'～'.date('Y.m.d H:i', $deal['new_user_deal_end_time']);
                            }
                        }
                        else{
                            $data['new_user_deal_period_time'] = '';
                        }
                    }
                    else{
                        $data['dealcategorytype'] = $deal['cid'];
                        $data['dealcategory'] = DealCategory::getDealCategoryName($deal['cid']);
                        $data['new_user_deal'] = 0;
                        $data['new_user_deal_leave_time'] = 0;
                        $data['new_user_deal_period_time'] = '';
                    }

                    //收益率
                    //$data['syl'] = sprintf("%.2f", $deal['syl']);//substr(sprintf("%.2f", $deal['syl']),0,-1);
                    $data['syl'] = DealHelper::getFormateSyl($deal['syl']);
                    //$data['syl_butie'] = substr(sprintf("%.2f", $deal['syl_butie']),0,-1); //sprintf("%.2f", $deal['syl_butie']);//
                    $data['syl_butie'] = DealHelper::getFormateSyl($deal['syl_butie']);
                    //$data['syl_origin'] = sprintf("%.2f", $deal['syl'] - $deal['syl_butie']);//substr(sprintf("%.2f", $deal['syl'] - $deal['syl_butie']),0,-1);
                    $data['syl_origin'] =DealHelper::getFormateSyl($deal['syl'] - $deal['syl_butie']);
                    //期限
                    $start_date='';
                    if($deal['deal_status']==DealStatus::YU_GAO)
                    {
                        $start_date=date('Y-m-d',$deal['start_date']);
                    }
                    elseif($deal['deal_status']==DealStatus::TOUBIAO_ING)
                    {
                        $start_date=date('Y-m-d');
                    }else{
                        $start_date=date('Y-m-d',$deal['full_time']);
                    }
                    $qixian_time = LoanTerms($start_date, null, $deal['deal_end_date']);
                    if($deal['expires_type']==DealExpiresType::Day)
                    {
                        $data['qixian'] = $qixian_time['days'][1]['period']['days'];
                        $data['qixian_type'] = DealExpiresType::getDealExpiresTypeName(DealExpiresType::Day);
                    }else{
                        $data['qixian'] = $qixian_time['count'];
                        $data['qixian_type'] = DealExpiresType::getDealExpiresTypeName(DealExpiresType::Month);
                    }
                    //进度
                    $data['schedule']=round($deal['schedule']);
                    //周周盈处理
                    if($deal['cid'] == 7){
                        $deal['money'] = $deal['day_max_money'];
                        //获取周周盈当日投资总额
                        $dealDaySum = model('DealRead')->getWeekEarnAmount($deal['deal_id']);
                        $data['schedule'] = !empty($deal['day_max_money']) ? round($dealDaySum/$deal['day_max_money']*100) : 0;
                        $deal['balance'] = ($deal['day_max_money'] > $dealDaySum) ? ($deal['day_max_money'] - $dealDaySum) : 0;
                        if ($deal['balance'] < 10000 && $deal['balance'] > 0) {
                            $deal['balance'] = 10000;
                        }
                        $data['weekearn_user_num'] = model('DealRead')->getWeekEarnUserNum();
                        $qixian_time = LoanTerms(date('Y-m-d',$deal['start_date']), null, $deal['deal_end_date']);
                        $data['qixian'] = $qixian_time['days'][1]['period']['days'];
                    }
                    if(intval($data['schedule']) == 100 && $deal['balance'] > 0){
                        $data['schedule']=99;
                    }
                    else if($deal['balance'] == 0 || $data['schedule'] > 100){
                        $data['schedule'] = 100;
                    }
                    //项目宽限期
                    $data['kuanxianqi'] = $deal['kuanxianqi'];
                    $data['kuanxianqi_type'] = '天';
                    //项目总额
                    $data['money']= number_format(floatval($deal['money']),2,'.','');

                    //2.5版本用的项目总额
                    $data['formate_money']=  DealHelper::getFormateSyl(floatval($deal['money'])/10000.00);
                    //项目余额
                    $data['balance']=number_format(floatval($deal['balance']),2,'.','');
                    //$data['balance']=DealHelper::getFormateSyl(floatval($deal['balance']));
                    //起息日
                    if($deal['full_time']=='0' || $deal['full_time']=='')
                    {
                        $data['lixi_start'] = $deal['cid'] == 7 ? "投标后次日" : '满标后次日';
                    }else{
                        $data['lixi_start']=date('Y-m-d',strtotime('+1 day',$deal['full_time']));
                    }
                    //项目结束日
                    $data['end_date']=$deal['deal_end_date'];
                    //还款方式
                    $data['refund_method_type']=$deal['refund_method'];
                    $data['refund_method']=DealRefundMethod::getRefundMethodName($deal['refund_method']);
                    if($deal['refund_method']!=DealRefundMethod::DENG_E_BEN_XI)
                    {
                        if($deal['expires_type']==DealExpiresType::Day)
                        {
                            $data['refund_method']='按天计息，'.$data['refund_method'];
                        }
                        else
                        {
                            $data['refund_method']='按月计息，'.$data['refund_method'];
                        }
                    }
                    //起投金额
                    $data['start_money']=number_format(floatval($deal['start_money']),2,'.','');

                    //递增金额
                    $data['dizeng_money']=number_format(floatval($deal['dizeng_money']),2,'.','');
                    //项目开始倒计时 秒
                    if($deal['start_date'] - time() > 0){
                        $data['countdown'] = $deal['start_date'] - time();
                    }else{
                        $data['countdown'] = 0;
                    }

                    //项目开始时间显示
                    if(date('Y-m-d', $deal['start_date']) == date('Y-m-d', time())){
                        $data['start_date'] = date('H:i', $deal['start_date']).'开始';
                    }
                    else if(date('Y-m-d', $deal['start_date']) == date('Y-m-d', strtotime("+1 day", time()))){
                        $data['start_date'] = '明天'.date('H:i', $deal['start_date']).'开始';
                    }
                    else{
                        $data['start_date'] = date('m月d日 H:i', $deal['start_date']).'开始';
                    }

                    $_userId = $this->userToken->uid;
                    //投资次数，小于3次为新用户，大于3次为老用户
                    $data['is_new_user'] = $isNewBid;

                    // if($this->isLogin()){
                    //     $orderCount = $dealService->countDealOrderNum($_userId);
                    //     if($orderCount < 1){
                    //         $data['is_new_user'] = 1;
                    //     }
                    // }
                    //判断是否可以投资周周盈
                    if(empty($_userId) || $_userId < 1){
                        $data['is_weekearn_user'] = 1;
                    }else{
                        $isWeekEarnUser = model('DealRead')->isWeekEarnUser($_userId);
                        $isWeekEarnDeal = model('DealRead')->isWeekEarnDeal($_userId);
                        $data['is_weekearn_user'] = ($isWeekEarnUser && !$isWeekEarnDeal) ? 1 : 0;//1可以投，0不可以
                    }
                    //投资限额
                    $data['max_money'] = floatval($deal['start_max_money']);
                    //$data['order_money'] = floatval(model('DealOrderRead')->getUserTotalMoney($_userId, $dealId));

                    $dealicon = new DealIconService();
                    $icons = model('DealIcon')->get_deal_icon();
                    if(!empty($icons)){
                        $data['begin_date'] = $deal['start_date'];
                        $data = $dealicon->get_deal_icon($data,$icons,'detail');
                    }
                }

                $returnModel->data->setContent($data);

            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取标详细数据异常');
                // write log
                $this->logService->logError('获取标详细数据异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }


    //项目介绍
    public function get_deal_desc(){

        $dealId = intval($_GET['dealid']);

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (!isset($dealId) || empty($dealId) || $dealId <= 0) {
            $validResult = '参数标ID错误';
            $param_valid_flag = false;
        }

        $deal = array();

        if ($param_valid_flag) {
            try {
                $dealService = new DealService();
                $deal = $dealService->getDealById_Read($dealId);

                //保理商资料开始
                $ps_baoli=substr($deal["photo_baoli"],0,-1);
                $photo_baoli=explode(",",$ps_baoli);
                $this->assign('photo_baoli',$photo_baoli);
                //保理商资料结束

                //共管资料开始
                $ps_gongguan=substr($deal["photo_gongguan"],0,-1);
                $photo_gongguan=explode(",",$ps_gongguan);
                $this->assign('photo_gongguan',$photo_gongguan);
                //共管资料结束

                //补充资料开始
                $ps=substr($deal["photo"],0,-1);
                $photo=explode(",",$ps);
                $this->assign('photo',$photo);
                //补充资料结束

                if($dealId >= 333){
                    //风控还款来源新版 start
                    $sql = 'select * from cp_deal_info where deal_id=:dealId  and type in (11,12,13) order by type asc,number asc';
                    $fk_res = $this->model->query($sql, ['dealId'=>$dealId]); //风控数据
                    $fk_deal_res = array();
                    foreach($fk_res as $key=>$val){
                        $fk_deal_res[$val['type']][$key]=$val;
                    }
                    //var_dump($fk_deal_res);exit;
                    $lysql = 'select * from cp_deal_info where deal_id=:dealId and type in (1,2,3,4,5) order by number asc';
                    $hkly_res = $this->model->query($lysql,['dealId'=>$dealId]); //还款来源数据
                    //var_dump($hkly_res);exit;
                    $this->assign('fklist', $fk_deal_res);
                    $this->assign('hklist', $hkly_res);
                    //风控还款来源新版 end
                }

            } catch (CustomException $ex) {
                // write log
                $this->logService->logError('获取标项目介绍数据异常', $ex->getErrorMessage());
            }
        } else {
           //
        }

        $this->assign('deal',$deal);
        $this->assign('imghost', $this->config['URL_HTTP_HOST_IMG']);

        if($dealId >= 333){
            $this->display('deal/detail_new.html');
        }
        else{
            $this->display('deal/detail.html');
        }
    }


    //还款计划
    public function get_deal_refund(){
        // 返回值
        $returnModel = new ReturnModel();

        $dealId = intval($_GET['dealid']);

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (!isset($dealId) || empty($dealId) || $dealId <= 0) {
            $validResult = '参数标ID错误';
            $param_valid_flag = false;
        }

        if ($param_valid_flag) {
            try {
                $data = array();

                $dealService = new DealService();

                //还款计划开始
                $dealRecord = $dealService->getDealRecord($dealId);
                if(!empty($dealRecord)){
                    foreach($dealRecord as $key=>$val){
                        $data_item['deal_id'] = $val['deal_id'];
                        $data_item['qishu'] = $val['deal_qishu'];
                        $data_item['refund_time'] = $val['refund_time'];
                        $data_item['benxi'] = number_format($val['benxi'], 2, '.','');
                        $data_item['status'] = DealRecordStatus::getDealRecordStatusName($val['status']);

                        $data[] = $data_item;
                    }
                }
                //还款计划结束

                $returnModel->data->setContent($data);

            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取还款计划数据异常');
                // write log
                $this->logService->logError('获取还款计划数据异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //投资记录
    public function get_deal_order(){
        // 返回值
        $returnModel = new ReturnModel();

        $dealId = intval($_GET['dealid']);
        $pageIndex = intval($_GET['pageindex']);
        $pageSize = intval($_GET['pagesize']);

        if (empty($pageIndex)) {
            $pageIndex = 1;
        }
        if (empty($pageSize)) {
            $pageSize = 20;
        }

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;

        if (!isset($dealId) || empty($dealId) || $dealId <= 0) {
            $validResult = '参数标ID错误';
            $param_valid_flag = false;
        }


        if ($param_valid_flag) {
            try {
                $data = array();

                $dealService = new DealService();

                $totalNum = 0;
                if ($pageIndex == 1) {
                   $totalNum = $dealService->countByDealId($dealId);
                }

                //先查一马当先是谁
                $one_ma = $this->model->table('deal_jiangli')->where(['deal_id'=>$dealId, 'type'=>1])->find();
                if($one_ma)
                {
                    //$one_deal_order = $this->model->table('deal_order')->where('deal_id="'.$dealId.'" and uid="'.$one_ma['uid'].'" and status=2 and order_money="'.$one_ma['order_money'].'"')->order('id asc')->find();
                    $one_deal_order = model('DealOrderRead')->findByWehre(['deal_id'=>$dealId, 'uid'=>$one_ma['uid'], 'status'=>2, 'order_money'=>$one_ma['order_money']], 'id asc');
                }else{
                    $one_deal_order = null;
                }

                //投资列表开始
                $dealOrder = $dealService->getDealOrder($dealId, $pageIndex, $pageSize);
                if(!empty($dealOrder)){
                    foreach($dealOrder as $key=>$val){
                        $data_item['id'] = $val['id'];
                        $data_item['deal_id'] = $val['deal_id'];
                        $data_item['order_time'] = $val['order_time'];
                        $data_item['username'] = mb_substr($val['username'],0,1,'utf8').'***'.mb_substr($val['username'],-1,1,'utf8');
                        $data_item['order_money'] = number_format($val['order_money'], 2, '.','');

                        $data[] = $data_item;
                    }

                    if($one_deal_order)
                    {
                        $touzi_info = array();
                        foreach($data as $key=>$val)
                        {
                            if($val['id'] != $one_deal_order['id'])
                            {
                                $touzi_info[] = $val;
                            }
                        }
                        $one_deal_order['username'] = mb_substr($one_deal_order['username'],0,1,'utf8').'***'.mb_substr($one_deal_order['username'],-1,1,'utf8');
                        $touzi_info[] = $one_deal_order;
                        $data = $touzi_info;
                    }
                }
                //投资列表结束

                //获取奖励信息
                $dealJiangLi_data = array();
                if($pageIndex == 1){
                    $deal = $dealService->getDealById_Read($dealId);
                    if($deal && $deal['xinshou_status']==DealType::FORMAL && $deal['activity_enable']==1){
                        //初始值
                        $dealJiangLi_data[0]=array('type_id'=>DealJiangLiType::YI_MA_DANG_XIAN, 'type_name'=>DealJiangLiType::getName(DealJiangLiType::YI_MA_DANG_XIAN), 'description'=>'第一个投标的谷东，奖'.DealJiangLiMoney::YI_MA_DANG_XIAN.'元投资金');
                        $dealJiangLi_data[1]=array('type_id'=>DealJiangLiType::YI_CHUI_DING_YIN, 'type_name'=>DealJiangLiType::getName(DealJiangLiType::YI_CHUI_DING_YIN), 'description'=>'满标的谷东将获得，奖'.DealJiangLiMoney::YI_CHUI_DING_YIN.'元投资金');
                        $dealJiangLi_data[2]=array('type_id'=>DealJiangLiType::YI_MING_JING_REN, 'type_name'=>DealJiangLiType::getName(DealJiangLiType::YI_MING_JING_REN), 'description'=>'本次投资最高的谷东，奖'.DealJiangLiMoney::YI_MING_JING_REN.'元投资金');

                        $dealJiangLi = $dealService->getDealJiangLi($dealId);
                        //print_r($dealJiangLi);
                        if($dealJiangLi){
                            foreach($dealJiangLi as $key=>$val){
                                $username = mb_substr($val['username'],0,1,'utf-8').'***'.mb_substr($val['username'],-1, 1,'utf-8');
                                $desc = $username.' '.number_format($val['order_money'], 2).'元 '.date('Y-m-d H:i', $val['created_date']);

                                if($val['type'] == DealJiangLiType::YI_MA_DANG_XIAN){
                                    $dealJiangLi_data[0]['description'] = $desc;
                                }
                                if($val['type'] == DealJiangLiType::YI_CHUI_DING_YIN){
                                    if(floatval($deal['balance']) == 0){
                                        $dealJiangLi_data[1]['description'] = $desc;
                                    }
                                }
                                if($val['type'] == DealJiangLiType::YI_MING_JING_REN){
                                    if(floatval($deal['balance']) == 0){
                                        $dealJiangLi_data[2]['description'] = $desc;
                                    }
                                    else{
                                        $dealJiangLi_data[2]['description'] = '目前最高投资金额'.number_format($val['order_money'], 2).'元';
                                    }
                                }
                            }
                            if(floatval($deal['balance']) > 0){
                                $dealJiangLi_data[1]['description'] = '项目还剩'.number_format($deal['balance'], 2).'元';
                            }
                        }
                    }
                }

                $obj = new stdClass();
                $obj->totalnum = $totalNum;
                $obj->dealorderlist=$data;
                $obj->dealjiangli=$dealJiangLi_data;
                $returnModel->data->setContent($obj);

            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取投资记录数据异常');
                // write log
                $this->logService->logError('获取投资记录数据异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }


    //获取代金券列表
    public function get_user_coupon_list(){
        // 返回值
        $returnModel = new ReturnModel();

        // 参数验证成功标识
        $param_valid_flag = true;

        $pageIndex = intval($_GET['pageindex']);
        $pageSize = 10;

        $validResult = null;
        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }
        if (empty($pageIndex)) {
            $pageIndex = 1;
        }

        $userId = $this->userToken->uid;
        //$userId = 3860;

        if ($param_valid_flag) {
            try {
                $data = array();

                $couponService = new CouponService();
                $couponList = $couponService->getUserCouponListPage($userId, $pageIndex, $pageSize);
                if (!empty($couponList) && is_array($couponList)) {
                    foreach ($couponList as $key => $val) {
                        $dealItem = array();

                        $dealItem['coupon_value'] = number_format($val['coupon_value'], 2, '.', '');
                        $dealItem['date_start'] = $val['date_start'];
                        $dealItem['date_end'] = $val['date_end'];

                        //状态
                        $dealItem['status'] = $val['status'];
                        if($val['status'] == CouponStatus::NO_USED && $val['date_end'] < time() ){
                            continue;
                            //$dealItem['status'] = CouponStatus::EXPIRED;
                        }
                        //状态名称
                        $dealItem['status_name'] = CouponStatus::getName($dealItem['status']);

                        //有效期
                        if($dealItem['status'] == CouponStatus::EXPIRED){
                            $dealItem['date_desc'] = date('Y-m-d', $dealItem['date_end']).' 已过期';
                            continue;
                        }
                        else if($dealItem['status'] == CouponStatus::NO_USED){
                            if(date('Y-m-d', $dealItem['date_start']) > date('Y-m-d', time())){
                                $datetime1 = new DateTime(date('Y-m-d', $dealItem['date_start']));
                                $datetime2 = new DateTime(date('Y-m-d', time()));
                                $interval = $datetime1->diff($datetime2);
                                $dealItem['date_desc'] = $interval->days.'天后可以使用';
                            }
                            else{
                                $dealItem['date_desc'] = '有效期至'.date('Y-m-d', $dealItem['date_end']);
                            }
                        }
                        else{
                            $dealItem['date_desc'] = '有效期至'.date('Y-m-d', $dealItem['date_end']);
                        }

                        //类型
                        $dealItem['group_type'] = $val['group_type'];
                        //类型名称
                        $dealItem['group_type_name'] = CouponGroupType::getName($val['group_type']);

                        $dealItem['group_name'] = $val['group_name'];
                        $dealItem['group_rule'] = "每投资".intval($val['group_qitou'])."元，可使用一张。";

                        //项目期限
                        $dealItem['group_xmqx'] = '';
                        if(!empty($val['xmqx'])){
                            $dealItem['group_xmqx'] = '项目期限为'.$val['xmqx'].'天以上';
                        }

                        $data[] = $dealItem;
                    }
                }

                $returnModel->data->setContent($data);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取账户管理-代金券列表异常');
                // write log
                $this->logService->logError('获取账户管理-代金券列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //获取红包列表
    public function get_user_hongbao_list(){
        // 返回值
        $returnModel = new ReturnModel();

        // 参数验证成功标识
        $param_valid_flag = true;

        $pageIndex = intval($_GET['pageindex']);
        $pageSize = 10;

        $validResult = null;
        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }
        if (empty($pageIndex)) {
            $pageIndex = 1;
        }

        $userId = $this->userToken->uid;
        //$userId = 3668;

        if ($param_valid_flag) {
            try {
                $data = array();

                $couponService = new CouponService();
                $hongbaoList = $couponService->getUserHongBaoListPage($userId, $pageIndex, $pageSize);
                $totalInfo = $couponService->getUserHongBaoTotalInfo($userId);
                if (!empty($hongbaoList) && is_array($hongbaoList)) {
                    foreach ($hongbaoList as $key => $val) {
                        $dealItem = array();

                        $dealItem['act_name'] = $val['act_name'];
                        $dealItem['send_money'] = number_format($val['send_money'], 2, '.', '');
                        $dealItem['send_time'] = date('Y-m-d H:i:s', $val['send_time']);
                        //发放条件
                        $dealItem['send_condition'] = $val['send_condition'];
                        //发放状态
                        $dealItem['send_status'] = $val['send_status'];

                        $data[] = $dealItem;
                    }
                }

                $returnModel->data->setContent($data);
                $returnModel->data->setTotalInfo(array('total_num'=>intval($totalInfo['total_num']),'total_money'=>DealHelper::getFormateSyl(number_format_floor($totalInfo['total_money'], 2))));
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取账户管理-红包奖励列表异常');
                // write log
                $this->logService->logError('获取账户管理-红包奖励列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }



    //兑换代金券数据初始化
    public function exchange_coupon(){
        // 返回值
        $returnModel = new ReturnModel();

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (!$this->isLogin()) {
            $validResult = '没有登录，请登录';
            $param_valid_flag = false;
        }

        if ($param_valid_flag) {
            try {
                $exchangeUuid = UuidUtil::createUuid();
                $returnModel->data->setContent(array('exchangeuuid' => $exchangeUuid, 'vcodeurl' => $this->config['URL_HTTP_HOST'] . '/app/exchange_coupon_vcode?clienttype=' . $this->clientType . '&exchangeuuid=' . $exchangeUuid));
            }
            catch (CustomException $ex) {
                $returnModel->data->initFail('兑换代金券异常');
                // write log
                $this->logService->logError('兑换代金券异常', $ex->getErrorMessage());
            }
        }
        else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //兑换优惠券验证码
    public function exchange_coupon_vcode()
    {
        try {
            $exchangeUuid = in($_GET['exchangeuuid']);
            if (!empty($exchangeUuid)) {
                $vCode = "" . rand(1000, 9999);

                $loginVerifyCodeService = new LoginVerifyCodeService();
                $verifyCode = $loginVerifyCodeService->getVerifyCode($exchangeUuid);
                if (!empty($verifyCode)) {
                    $loginVerifyCodeService->updateVerifyCode($exchangeUuid, $vCode);
                }
                else{
                    $loginVerifyCodeService->insertVerifyCode($exchangeUuid, $vCode);
                }

                $image = new Image();
                $image->buildImageVerify(30, 15, $vCode);
            }
        } catch (CustomException $ex) {
            $this->logService->logError('生成兑换代金券验证码异常', $ex->getErrorMessage(), $this->clientType);
        } catch (Exception $e) {
            $this->logService->logError('生成兑换代金券验证码异常', $e->getMessage(), $this->clientType);
        }
    }

    //兑换代金券
    public function exchange_coupon_do(){
        // 返回值
        $returnModel = new ReturnModel();

        // 请求参数
        $exchange_code = strtoupper(trim(in($_GET['exchangecode'])));
        $verify_code = trim(in($_GET['verifycode']));
        $exchangeUuid = in($_GET['exchangeuuid']);

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (!$this->isLogin()) {
            $validResult = '没有登录，请登录';
            $param_valid_flag = false;
        }

        if(empty($exchange_code)){
            $validResult .= ',兑换码为空';
            $param_valid_flag = false;
        }
        if(empty($verify_code)){
            $validResult .= ',验证码为空';
            $param_valid_flag = false;
        }
        if(empty($exchangeUuid)){
            $validResult .= ',参数uuid丢失';
            $param_valid_flag = false;
        }

        $userId = $this->userToken->uid;
        //$userId = 3668;

        if ($param_valid_flag) {
            try {
                $loginVerifyCodeService = new LoginVerifyCodeService();
                $verifyCodeArr = $loginVerifyCodeService->getVerifyCode($exchangeUuid);
                //print_r($verifyCodeArr);
                if (!empty($verifyCodeArr)) {
                    if (intval($verify_code) != intval($verifyCodeArr['code'])) {
                        $returnModel->data->initFail('验证码错误');
                        // 记录日志
                        $this->logService->logInfo('兑换代金券验证码错误', '$get_code=' . $verify_code . '---code=' . intval($verifyCode['code']) . '---exchange_uuid=' . $exchangeUuid, $this->clientType);
                    }
                    else {
                        //兑换限制
                        $check_couponExchangeCode = true;
                        $couponExchangeCode = $this->model->table('couponexchange_limit')->where(['exchange_code'=>$exchange_code])->find();
                        if(!empty($couponExchangeCode)){
                            $userService = new UserService();
                            $userInfo = $userService->getUserInfoByUid($userId);
                            $couponExchangeCode = $this->model->table('couponexchange_limit')->where(['exchange_code'=>$exchange_code, 'mobile'=>$userInfo['phone']])->find();
                            if(empty($couponExchangeCode)){
                                $check_couponExchangeCode = false;
                                $returnModel->data->initFail('兑换码无效');
                                // 记录日志
                                $this->logService->logInfo('兑换代金券失败', '兑换码无效', $this->clientType);
                            }
                        }

                        if($check_couponExchangeCode){
                            //执行代金券兑换操作
                            $couponService = new CouponService();
                            $coupon = $couponService->createCoupon($userId, $exchange_code);
                            if(!empty($coupon['message'])){
                                $returnModel->data->initFail($coupon['message']);
                                // 记录日志
                                $this->logService->logInfo('兑换代金券失败', $coupon['message'], $this->clientType);
                            }
                        }
                    }
                }
                else{
                    $returnModel->data->initFail('验证码无效');
                }
            }
            catch (CustomException $ex) {
                $returnModel->data->initFail('兑换代金券异常');
                // write log
                $this->logService->logError('兑换代金券异常', $ex->getErrorMessage());
            }
        }
        else {
            if (!empty($validResult) && substr($validResult, 0, 1) == ',') {
                $validResult = substr($validResult, 1, strlen($validResult) - 1);
            }
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }
    //兑换代金券是否显示验证码
    public function is_verify_show_v3()
    {
        // 返回值
        $returnModel = new ReturnModel();
        // 参数验证成功标识
        $param_valid_flag = true;
        if (!$this->isLogin()) {
            $validResult = '没有登录，请登录';
            $param_valid_flag = false;
        }
        if ($param_valid_flag) {
            $userId = $this->userToken->uid;
            $errorNum = model('ActionLog')->recentKeyNum(5, $userId, 600);
            $data['is_show'] = $errorNum>=5 ? 1 : 0;
            $returnModel->data->setContent($data);
        } else {
            $returnModel->initFail($validResult);
        }
        // 返回json格式
        echo(json_encode($returnModel));
    }

    //兑换代金券（new）
    public function exchange_coupon_do_v3()
    {
        // 返回值
        $returnModel = new ReturnModel();

        // 请求参数
        $exchange_code = strtoupper(trim(in($_GET['exchangecode'])));
        $verify_code = trim(in($_GET['verifycode']));
        $exchangeUuid = in($_GET['exchangeuuid']);

        // 参数验证成功标识
        $param_valid_flag = true;
        //兑换错误标志
        $exchange_error_flag = true;

        $validResult = null;
        if (!$this->isLogin()) {
            $validResult = '没有登录，请登录';
            $param_valid_flag = false;
        }

        $userId = $this->userToken->uid;
        $errorNum = model('ActionLog')->recentKeyNum(5, $userId, 600);

        if (empty($exchange_code)) {
            $validResult .= ',兑换码为空';
            $param_valid_flag = false;
            $exchange_error_flag = false;
        }
        $isshow = 0;
        if ($errorNum>=5) {
            $isshow = 1;
            $sql = "update cp_action_log set created_at=".time()." where log_type=5 and log_key=:id order by id desc limit ".$errorNum;
            $this->model->query($sql, ['id'=>$userId]);
        }
        // if ($errorNum>=5 && empty($verify_code)) {
        //     $validResult .= ',验证码为空';
        //     $param_valid_flag = false;
        //     $exchange_error_flag = false;
        // }

        if ($param_valid_flag) {
            try {
                if ($errorNum>=5 && empty($verify_code)) {
                    $data['is_show'] = 1;
                    $returnModel->data->initFail('');
                    $returnModel->data->setContent($data);
                } else {
                    //验证码标志
                    $verify_flag = true;
                    if ($errorNum>=5 && !empty($verify_code)) {
                        $loginVerifyCodeService = new LoginVerifyCodeService();
                        $verifyCodeArr = $loginVerifyCodeService->getVerifyCode($exchangeUuid);
                        if (!empty($verifyCodeArr)) {
                            if (intval($verify_code) != intval($verifyCodeArr['code'])) {
                                $verify_flag = false;
                                $exchange_error_flag = false;
                                $data['is_show'] = 1;
                                $returnModel->data->initFail('验证码错误');
                                $returnModel->data->setContent($data);
                                // 记录日志
                                $this->logService->logInfo('兑换代金券验证码错误', '$get_code=' . $verify_code . '---code=' . intval($verifyCode['code']) . '---exchange_uuid=' . $exchangeUuid, $this->clientType);
                            }
                        } else {
                            $verify_flag = false;
                            $data['is_show'] = 1;
                            $returnModel->data->initFail('验证码无效');
                            $returnModel->data->setContent($data);
                        }
                    }

                    if ($verify_flag) {
                        //兑换限制
                        $check_couponExchangeCode = true;
                        $couponExchangeCode = $this->model->table('couponexchange_limit')->where(['exchange_code'=>$exchange_code])->find();
                        if (!empty($couponExchangeCode)) {
                            $userService = new UserService();
                            $userInfo = $userService->getUserInfoByUid($userId);
                            $couponExchangeCode = $this->model->table('couponexchange_limit')->where(['exchange_code'=>$exchange_code, 'mobile'=>$userInfo['phone']])->find();
                            if (empty($couponExchangeCode)) {
                                $exchange_error_flag = false;
                                $check_couponExchangeCode = false;
                                $data['is_show'] = $isshow;
                                $returnModel->data->initFail('兑换码无效');
                                $returnModel->data->setContent($data);
                                // 记录日志
                                $this->logService->logInfo('兑换代金券失败', '兑换码无效', $this->clientType);
                            }
                        }

                        if ($check_couponExchangeCode) {
                            //执行代金券兑换操作
                            $couponService = new CouponService();
                            $coupon = $couponService->createCoupon($userId, $exchange_code);
                            if (!empty($coupon['message'])) {
                                $exchange_error_flag = false;
                                $data['is_show'] = $isshow;
                                $returnModel->data->initFail($coupon['message']);
                                $returnModel->data->setContent($data);
                                // 记录日志
                                $this->logService->logInfo('兑换代金券失败', $coupon['message'], $this->clientType);
                            }
                        }
                    }
                }
            } catch (CustomException $ex) {
                $exchange_error_flag = false;
                $data['is_show'] = $isshow;
                $returnModel->data->initFail('兑换代金券异常');
                $returnModel->data->setContent($data);
                // write log
                $this->logService->logError('兑换代金券异常', $ex->getErrorMessage());
            }
        } else {
            $data['is_show'] = $isshow;
            if (!empty($validResult) && substr($validResult, 0, 1) == ',') {
                $validResult = substr($validResult, 1, strlen($validResult) - 1);
            }
            $returnModel->data->initFail($validResult);
            $returnModel->data->setContent($data);
        }
        //操作错误，记录数据库
        if (!$exchange_error_flag) {
            model('ActionLog')->addActionLog(5, $userId);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }


    //立即投资-获取可用余额，项目可投余额
    public function get_deal_and_user_info(){
        // 返回值
        $returnModel = new ReturnModel();

        // 请求参数
        $dealId = intval(in($_GET['dealid']));

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }

        if(empty($dealId)){
            $validResult .= ',参数标的Id丢失';
            $param_valid_flag = false;
        }

        $userId = $this->userToken->uid;
        //$userId = 3668;

        if ($param_valid_flag) {
            try {
                $data = array();
                $data['user_avlbal'] = 0.00;
                $data['deal_balance'] = 0;
                $data['coupon_num'] = 0;
                $data['dizeng_money'] = 0.00;
                $data['start_money'] = 0.00;

                $dealService = new DealService();
                $DealHelper = new DealHelper();
                $deal = $dealService->getDealById_Read($dealId);

                //可用余额
                $userService = new UserService();
                $userData = $userService->getUserDataByUid($userId);
                if($userData){
                    $data['user_avlbal'] = number_format($userData['AvlBal'], 2, '.', '');
                }
                //优惠券数量
                $qixian = $DealHelper::LoanPeriod($deal);
                $qixian['num'] = empty($qixian['num']) ? 0 : $qixian['num'];
                $xmqx = ($qixian['unit']=='天') ? $qixian['num'] : $qixian['num']*30;
                $data['qixian'] = $xmqx;
                $data['cid'] = $deal['cid'];
                if ($deal['cid'] == 6 || $deal['cid'] == 8 || $deal['cid'] == 7 || $deal['new_user_deal'] == 1 || $deal['xinshou_status'] == 2) {
                    $data['coupon_num'] = -1;
                } else {
                    $couponService = new CouponService();
                    $couponList = $couponService->getAvlCoupon($userId, $dealId, $xmqx);
                    if (!empty($couponList) && is_array($couponList)) {
                        $data['coupon_num'] += count($couponList);
                        foreach ($couponList as $coupon) {
                            if ($coupon['group_qitou'] > $data['user_avlbal']) {
                                $data['coupon_num'] = intval($data['coupon_num']) - 1;
                            }
                        }
                    }
                    //分期的不显示加息券
                    if ($deal['refund_method'] == 3) {
                        $rateCouponList = $couponService->getAvlRateCoupon($userId, $dealId, $xmqx);
                        if (!empty($rateCouponList) && is_array($rateCouponList)) {
                            $data['coupon_num'] += count($rateCouponList);
                            foreach ($rateCouponList as $rateCoupon) {
                                if ($rateCoupon['group_qitou'] > $data['user_avlbal']) {
                                    $data['coupon_num'] = intval($data['coupon_num']) - 1;
                                }
                            }
                        }
                    }
                }



                //项目可投金额
                $dealService = new DealService();
                $deal = $dealService->getDealById_Read($dealId);
                if($deal){
                    if($deal['cid'] == 7){
                        //获取标的当日投标金额
                        $dealDaySum = model('DealRead')->getWeekEarnAmount($deal['deal_id']);
                        $deal['balance'] = ($dealDaySum < $deal['day_max_money']) ? ($deal['day_max_money'] - $dealDaySum) : 0;
                        if ($deal['balance'] < 10000 && $deal['balance'] > 0) {
                            $deal['balance'] = 10000;
                        }
                    }
                    $data['deal_balance'] = $deal['balance'];
                    $data['dizeng_money'] = DealHelper::getFormateSyl($deal['dizeng_money']);  //递增金额

                    $start_money = $deal['start_money'];
                    if($userId){
                        $is_orl = model('UserRead')->getIsOldUser($userId);
                        if($deal['new_user_deal'] == 0 && $is_orl){
                            $start_money = min(1000,$deal['start_money']);
                        }
                    }

                    $data['start_money'] = DealHelper::getFormateSyl($start_money);  //起投金额
                    if( $data['deal_balance']<=$data['start_money'] ){
                        $data['start_money']  = DealHelper::getFormateSyl($data['deal_balance']);
                    }
                }
                //是否开启快捷支付
                $userBank = model('UserBank')->find(['uid'=>$userId, 'pay_type'=>UserBankPayType::QUICK]);
                if($userBank){
                    $data['quick_pay'] = 1;
                }
                else{
                    $data['quick_pay'] = 0;
                }

                //投资限额
                $data['max_money'] = floatval($deal['start_max_money']);
                $data['order_money'] = floatval(model('DealOrderRead')->getUserTotalMoney($userId, $dealId));
                $data['syl'] = DealHelper::getFormateSyl($deal['syl']);
                $data['refund_method'] = $deal['refund_method'];

                $returnModel->data->setContent($data);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('立即投资-获取可用余额，项目可投余额异常');
                // write log
                $this->logService->logError('立即投资-获取可用余额，项目可投余额异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //获取可使用代金券列表
    public function get_avl_coupon(){
        // 返回值
        $returnModel = new ReturnModel();

        // 请求参数
        $dealId = intval(in($_GET['dealid']));

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }

        if(empty($dealId)){
            $validResult .= ',参数标的Id丢失';
            $param_valid_flag = false;
        }

        $userId = $this->userToken->uid;
        //$userId = 3668;

        if ($param_valid_flag) {
            try {
                $data = array();

                $couponService = new CouponService();
                $dealService = new DealService();
                $DealHelper = new DealHelper();
                $deal = $dealService->getDealById_Read($dealId);
                //新手虚拟标不能是有代金券
                if ($deal['cid'] != 6) {
                    $qixian = $DealHelper::LoanPeriod($deal);
                    $xmqx = ($qixian['unit']=='天') ? $qixian['num'] : $qixian['num']*30;

                    $couponList = $couponService->getAvlCoupon($userId, $dealId,$xmqx);
                    if (!empty($couponList) && is_array($couponList)) {
                        foreach ($couponList as $key => $val) {
                            $dealItem = array();

                            $dealItem['coupon_id'] = $val['id'];
                            $dealItem['date_start'] = $val['date_start'];
                            $dealItem['date_end'] = $val['date_end'];
                            $dealItem['coupon_value'] = number_format($val['coupon_value'], 2, '.', '');

                            //有效期
                            if(date('Y-m-d', $dealItem['date_start']) > date('Y-m-d', time())){
                                $datetime1 = new DateTime(date('Y-m-d', $dealItem['date_start']));
                                $datetime2 = new DateTime(date('Y-m-d', time()));
                                $interval = $datetime1->diff($datetime2);
                                $dealItem['date_desc'] = $interval->days.'天后可以使用';
                            }
                            else{
                                $dealItem['date_desc'] = '有效期至'.date('Y-m-d', $dealItem['date_end']);
                            }

                            $dealItem['group_name'] = $val['group_name'];
                            $dealItem['group_rule'] = "每投资".intval($val['group_qitou'])."元，可使用一张。";
                            $dealItem['group_qitou'] = $val['group_qitou'];

                            $data[] = $dealItem;
                        }
                    }
                }

                $returnModel->data->setContent($data);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('立即投资-获取可用代金券列表异常');
                // write log
                $this->logService->logError('立即投资-获取可用代金券列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }


    //获取债权转让列表
    public function get_creditlist(){
        // 返回值
        $returnModel = new ReturnModel();

        $pageIndex = intval($_GET['pageindex']);
        $pageSize = 10;

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (empty($pageIndex)) {
            $pageIndex = 1;
        }

        if ($param_valid_flag) {
            try {
                $creditService = new CreditService();

                $totalNum = 0;
                if ($pageIndex == 1) {
                    $totalNum = $creditService->countCredit();
                }

                $data = array();

                $creditList = $creditService->getCreditList($pageIndex, $pageSize);
                if (!empty($creditList) && is_array($creditList)) {
                    foreach($creditList as $key => $val) {
                        $creditItem = array();
                        //债权Id
                        $creditItem['id'] = $val['id'];
                        //收益率
                        //$creditItem['syl'] = sprintf("%.2f", strval($val['syl']));//substr(sprintf("%.2f", strval($val['syl'])),0,-1);
                        $creditItem['syl'] = DealHelper::getFormateSyl($val['syl']);
                        //剩余份数
                        //$creditItem['instockshares'] = $val['in_stock_shares'];
                        //预定份数
                        $_avlShares = $creditService->getAvailableShares($val['id']);
                        $creditItem['instockshares'] = round($val['in_stock_shares'] -  $_avlShares);
                        if($creditItem['instockshares'] <0){
                            $creditItem['instockshares'] = 0;
                        }
                        //计划转让份数
                        $creditItem['transfershares'] = round($val['transfer_shares']);
                        //进度
                        $creditItem['schedule']=floor((1-$creditItem['instockshares']/$val['transfer_shares']) * 100);
                        //标的状态Id
                        $creditItem['statusid'] = $val['status'];
                        //标的状态
                        $creditItem['status'] = CreditStatus::getCreditStatusName($val['status']);
                        //标类型ID
                        $creditItem['dealcategoryid'] = $val['cid'];
                        //标类型
                        $creditItem['dealcategory'] = DealCategory::getDealCategoryName($val['cid']);
                        //标题目
                        $creditItem['title'] = $val['title'];
                        //标题目
                        $creditItem['titlesub'] = $val['title_sub'];

                        //剩余期限
                        //$creditItem['qixian'] = $val['leaving_period'];
                        $beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
                        $diff = strtotime($val['deal_end_date']) - $beginToday;
                        if($diff<=0){
                            $creditItem['qixian'] = 0;
                        }else{
                            $creditItem['qixian']=  $diff/(24*3600);
                        }

                        //转出价格
                        //$creditItem['price'] = number_format_floor($val['unit_price'], 2);
                        $creditItem['price'] = DealHelper::getFormateSyl(number_format_floor($val['unit_price'], 2));

                        if($val['status']==CreditStatus::ZHUAN_RANG_ING){
                             $CreditInfo = model('CreditCalc')->getCreditDetail($val['order_id'], $val['transfer_shares'], $val['discount_rate']);
                             if(!empty($CreditInfo)){
                                 //剩余期限
                                $creditItem['qixian'] = $CreditInfo['leaving_period'];
                                //转出价格
                                $creditItem['price'] = (string)$CreditInfo['unit_price'];
                             }
                        }

                        $data[] = $creditItem;
                    }
                }

                $obj = new stdClass();
                $obj->totalnum = $totalNum;
                $obj->creditlist = $data;
                $returnModel->data->setContent($obj);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取债权转让列表异常');
                // write log
                $this->logService->logError('获取债权转让列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //债权详情
    public function get_credit_detail(){
        // 返回值
        $returnModel = new ReturnModel();

        $creditId = intval($_GET['creditid']);

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (!isset($creditId) || empty($creditId) || $creditId <= 0) {
            $validResult = '参数标ID错误';
            $param_valid_flag = false;
        }

        if ($param_valid_flag) {
            try {
                $data = array();

                $creditService = new CreditService();
                $credit = $creditService->getCreditById($creditId);
                if(!empty($credit)){
                    $dealService = new DealService();
                    $deal = $dealService->getDealById_Read($credit['deal_id']);
                    if(empty($deal)){
                        throw new Exception('原始标的不存在', 101);
                    }

                    $data['id']=$credit['id'];
                    //计划转出份数
                    $data['transfershares']=round($credit['transfer_shares']);
                    //剩余份数
                    //$data['instockshares']=$credit['in_stock_shares'];
                    //预定份数
                    $_avlShares = $creditService->getAvailableShares($creditId);
                    $data['instockshares'] = round($credit['in_stock_shares'] -  $_avlShares);
                    if($data['instockshares'] <0){
                        $data['instockshares'] = 0;
                    }
                    //进度
                    $data['schedule']=floor((1-$data['instockshares']/$data['transfershares']) * 100);
                    //折让率
                    //$data['discountrate']=$credit['discount_rate'];
                    $data['discountrate']=DealHelper::getFormateSyl($credit['discount_rate']);
                    //剩余期限
                   // $data['qixian'] = $credit['leaving_period'];
                    $beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
                    $diff = strtotime($credit['deal_end_date']) - $beginToday;
                    if($diff<=0){
                        $data['qixian'] = 0;
                    }else{
                        $data['qixian']=  $diff/(24*3600);
                    }

                    //转出价格
                    //$data['price'] = number_format_floor($credit['unit_price'], 2);
                    $data['price'] = DealHelper::getFormateSyl(number_format_floor($credit['unit_price'], 2));

                    //标的ID
                    $data['deal_id']=$credit['deal_id'];
                    //cid
                    $data['dealcategorytype']=$deal['cid'];
                    //标的title
                    $data['title']=$deal['title'];
                    //收益率
                    //$data['syl'] = sprintf("%.2f", $deal['syl']);//substr(sprintf("%.2f", $deal['syl']),0,-1);
                    $data['syl'] = DealHelper::getFormateSyl($deal['syl']);
                    //到期日期
                    $data['dealenddate']=date('Y-m-d', $deal['deal_end_date']);

                    if($credit['status'] == CreditStatus::ZHUAN_RANG_ING){
                        $CreditInfo = model('CreditCalc')->getCreditDetail($credit['order_id'], $credit['transfer_shares'], $credit['discount_rate']);
                        if(!empty($CreditInfo)){
                            //剩余期限
                           $data['qixian'] = $CreditInfo['leaving_period'];
                           //转出价格
                           $data['price'] = $CreditInfo['unit_price'];
                        }
                    }
                }

                $returnModel->data->setContent($data);

            }
            catch (CustomException $ex) {
                $returnModel->data->initFail('获取债权详情数据异常');
                // write log
                $this->logService->logError('获取债权详情数据异常', $ex->getErrorMessage());
            }
            catch(Exception $ex){
                $returnModel->data->initFail('获取债权详情数据异常');
                // write log
                $this->logService->logError('获取债权详情数据异常', $ex->getMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //转让记录
    public function get_credit_order(){
        // 返回值
        $returnModel = new ReturnModel();

        $creditId = intval($_GET['creditid']);

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (!isset($creditId) || empty($creditId) || $creditId <= 0) {
            $validResult = '参数标ID错误';
            $param_valid_flag = false;
        }

        if ($param_valid_flag) {
            try {
                $data = array();

                $creditService = new CreditService();
                $creditOrderList = $creditService->getCreditOrderList($creditId);
                if (!empty($creditOrderList) && is_array($creditOrderList)) {
                    foreach($creditOrderList as $key => $val) {
                        $dataItem = array();
                        //受让人
                        $dataItem['username'] = mb_substr($val['username'],0,1,'utf8').'***'.mb_substr($val['username'],-1,1,'utf8');
                        //成交时间
                        $dataItem['createdat'] = date('m-d H:i', $val['created_at']);
                        //金额
                        $dataItem['amount'] = number_format($val['amount'],2, '.', '');

                        $data[] = $dataItem;
                    }
                }

                $obj = new stdClass();
                $obj->orderlist = $data;
                $returnModel->data->setContent($obj);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取债权订单列表异常');
                // write log
                $this->logService->logError('获取债权订单列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //立即购买-获取可用余额，剩余份数
    public function get_credit_and_user_info(){
        // 返回值
        $returnModel = new ReturnModel();

        // 请求参数
        $creditId = intval(in($_GET['creditid']));

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }

        if(empty($creditId)){
            $validResult .= ',参数债权Id丢失';
            $param_valid_flag = false;
        }

        $userId = $this->userToken->uid;

        if ($param_valid_flag) {
            try {
                $data = array();
                $data['useravlbal'] = 0.00;
                $data['instockshares'] = 0;
                $data['unitprice'] = 0;
                $data['unitinterestamt'] = 0;

                //可用余额
                $userService = new UserService();
                $userData = $userService->getUserDataByUid($userId);
                if($userData){
                    $data['useravlbal'] = number_format($userData['AvlBal'], 2, '.', '');
                }

                //债权信息
                $creditService = new CreditService();
                $credit = $creditService->getCreditById($creditId);
                if($credit){
                    $data['status'] = $credit['status'];
                    $data['unitprice'] = number_format_floor($credit['unit_price'], 2);
                    $data['unitinterestamt'] = number_format($credit['unit_interest_amt'], 2, '.', '');

                    $data['instockshares'] = $credit['in_stock_shares'];
                    //预定份数
                    $_avlShares = $creditService->getAvailableShares($creditId);
                    $data['instockshares'] = intval($data['instockshares']) -  $_avlShares;
                    if($data['instockshares'] <0){
                        $data['instockshares'] = 0;
                    }

                    if($credit['status'] == CreditStatus::ZHUAN_RANG_ING){
                        $creditInfo = model('CreditCalc')->getCreditDetail($credit['order_id'], $credit['transfer_shares'], $credit['discount_rate']);
                        if($creditInfo){
                            $data['unitprice'] = $creditInfo['unit_price'];
                            $data['unitinterestamt'] = $creditInfo['actual_unit_value'] - $creditInfo['unit_price'];
                        }
                    }
                }
                else{
                    throw new CustomException(new Exception('债权不存在',101));
                }

                //是否开启快捷支付
                $userBank = model('UserBank')->find(['uid'=>$userId, 'pay_type'=>UserBankPayType::QUICK]);
                if($userBank){
                    $data['quickpay'] = 1;
                }
                else{
                    $data['quickpay'] = 0;
                }


                $returnModel->data->setContent($data);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('立即购买-获取可用余额，债权剩余份数异常');
                // write log
                $this->logService->logError('立即购买-获取可用余额，债权剩余份数异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //购买的债权列表
    public function get_credit_buyed(){
        // 返回值
        $returnModel = new ReturnModel();

        $pageIndex = intval($_GET['pageindex']);
        $pageSize = 10;
        if (empty($pageIndex)) {
            $pageIndex = 1;
        }

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;

        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }

        if ($param_valid_flag) {
            try {
                $uid = $this->userToken->uid;

                $creditService = new CreditService();
                $refundRecordService = new RefundRecordService();

                $totalNum = 0;
                if ($pageIndex == 1) {
                    $totalNum = $creditService->countCreditBuyed($uid);
                }

                $data = array();

                $creditList = $creditService->getCreditBuyedList($uid, $pageIndex, $pageSize);
                if (!empty($creditList) && is_array($creditList)) {
                    foreach($creditList as $key => $val) {
                        $creditItem = array();
                        //标的Id
                        $creditItem['dealid'] = $val['deal_id'];
                        //债权Id
                        $creditItem['creditid'] = $val['credit_id'];
                        //标的title
                        $creditItem['dealtitle'] = $val['title'];
                        //份数
                        $creditItem['shares'] = $val['shares'];
                        //成交金额
                        $creditItem['amount'] = number_format($val['amount'], 2, '.', '');
                        //应收利息
//                        if($val['actual_unit_value'] > 0){
//                            $creditItem['lixi'] = number_format(($val['actual_unit_value'] - $val['unit_price']) * $val['shares'], 2, '.','');
//                        }
//                        else{
//                            $creditItem['lixi'] = number_format(($val['credit_actual_unit_value'] - $val['credit_unit_price']) * $val['shares'], 2, '.','');
//                        }
                        // 还款计划表中的 benxi - 债权订单总的 amount
                        $_lixi = $refundRecordService->getBenxiByDealNumber($val['serial']);
                        $creditItem['lixi'] = number_format($_lixi - $creditItem['amount'], 2, '.', '');
                        if($creditItem['lixi'] <= 0){
                            //这里最好预警
                            //continue;
                            $creditItem['lixi'] = '-';
                        }

                        //债权状态
                        $creditItem['dealstatus'] = $val['deal_status'];
                        $creditItem['dealstatusname'] = $val['deal_status'] == DealStatus::YI_HUAN_QING ? '已还' : '未还';

                        //还款时间
                        $creditItem['refundtime'] = '';
                        if($creditItem['dealstatus'] == DealStatus::YI_HUAN_QING){
                            $dealRecord = model('DealRecordRead')->find(['deal_id'=>$val['deal_id'], 'status'=>DealRecordStatus::YI_HUAN], 'deal_qishu desc');
                            if($dealRecord){
                               $creditItem['refundtime'] = date('Y-m-d', $dealRecord['refund_time']);
                            }
                        }

                        $data[] = $creditItem;
                    }
                }

                $obj = new stdClass();
                $obj->totalnum = $totalNum;
                $obj->creditlist = $data;
                $returnModel->data->setContent($obj);
            }
            catch (CustomException $ex) {
                $returnModel->data->initFail('获取购买债权列表异常');
                // write log
                $this->logService->logError('获取购买债权列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //转让债权列表
    public function get_credit_selled()
    {
        // 返回值
        $returnModel = new ReturnModel();

        $pageIndex = intval($_GET['pageindex']);
        $pageSize = 10;
        if (empty($pageIndex)) {
            $pageIndex = 1;
        }

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;

        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }

        if ($param_valid_flag) {
            try {
                $uid = $this->userToken->uid;

                $creditService = new CreditService();

                $totalNum = 0;
                if ($pageIndex == 1) {
                    $totalNum = $creditService->countCreditSelled($uid);
                }

                $data = array();

                $creditList = $creditService->getCreditSelledList($uid, $pageIndex, $pageSize);
                if (!empty($creditList) && is_array($creditList)) {
                    foreach($creditList as $key => $val) {
                        $creditItem = array();
                        //标的Id
                        $creditItem['dealid'] = $val['deal_id'];
                        //标的分类Id
                        $creditItem['cid'] = ($val['cid'] == 6) ? 0 : $val['cid'];
                        //标的分类图片地址
                        $creditItem['deal_category_url'] = $this->config['URL_HTTP_HOST'] . '/template/default/public/images/cid/' . $creditItem['cid'] . '.png';
                        //订单号
                        $creditItem['deal_number'] = $val['serial'];
                        //标的标题
                        $creditItem['title'] = $val['title_sub'];
                        //债权Id
                        $creditItem['creditid'] = $val['credit_id'];
                        //标的title
                        $creditItem['dealtitle'] = $val['title'];
                        //成交金额
                        $creditItem['amount'] = DealHelper::getFormateSyl($val['amount_sum']);
                        //收益
                        $creditItem['incoming'] = DealHelper::getFormateSyl($val['incoming_sum']);
                        //总转让份数
                        $creditItem['transfershares'] = round($val['transfer_shares']);
                        //已转份数
                        $creditItem['selledshares'] = round($val['transfer_shares']) - round($val['in_stock_shares']);
                        //未转份数
                        $creditItem['instockshares'] = round($val['in_stock_shares']);
                        //转让状态
                        $creditItem['sellstatus'] = $val['in_stock_shares']==0?'1':'0';
                        //债权状态
                        $creditItem['status'] = $val['status'];
                        $creditItem['statusname'] = CreditStatus::getCreditStatusName($val['status']);

                        //转让时间
                        $creditItem['enddate'] = '';
                        if($creditItem['status'] == CreditStatus::ZHUAN_RANG_OK){
                            //取最后一个转让订单时间
                            $lastCreditOrder = model('CreditOrderRead')->find(['credit_id'=>$val['credit_id'], 'status'=>CreditOrderStatus::SUCCESS], 'created_at desc');
                            if($lastCreditOrder){
                                if ($this->wcg_vcode < 28) {
                                    $creditItem['enddate'] = date('Y-m-d', $lastCreditOrder['created_at']);
                                } else {
                                    $creditItem['enddate'] = date('Y-m-d H:i', $lastCreditOrder['created_at']);
                                }

                            }
                        } else {
                            if ($this->wcg_vcode < 28) {
                                $creditItem['enddate'] = date('Y-m-d', $val['created_at']);
                            } else {
                                $creditItem['enddate'] = date('Y-m-d H:i', $val['created_at']);
                            }
                        }

                        $data[] = $creditItem;
                    }
                }

                $obj = new stdClass();
                $obj->totalnum = $totalNum;
                $obj->creditlist = $data;
                $returnModel->data->setContent($obj);
            }
            catch (CustomException $ex) {
                $returnModel->data->initFail('获取转让债权列表异常');
                // write log
                $this->logService->logError('获取转让债权列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //转让债权列表()new
    public function get_credit_selled_new()
    {
        // 返回值
        $returnModel = new ReturnModel();

        $pageIndex = intval($_GET['pageindex']);
        $pageSize = 10;
        if (empty($pageIndex)) {
            $pageIndex = 1;
        }

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;

        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }

        if ($param_valid_flag) {
            try {
                $uid = $this->userToken->uid;

                $creditService = new CreditService();

                $totalNum = 0;
                if ($pageIndex == 1) {
                    $totalNum = $creditService->countCreditSelled($uid);
                }

                $data = array();

                $creditList = $creditService->getCreditSelledList($uid, $pageIndex, $pageSize);
                if (!empty($creditList) && is_array($creditList)) {
                    foreach($creditList as $key => $val) {
                        $creditItem = array();
                        //标的Id
                        $creditItem['dealid'] = $val['deal_id'];
                        //标的分类Id
                        $creditItem['cid'] = ($val['cid'] == 6) ? 0 : $val['cid'];
                        //订单号
                        $creditItem['deal_number'] = $val['serial'];
                        //标的标题
                        $creditItem['title'] = $val['title_sub'];
                        //债权Id
                        $creditItem['creditid'] = $val['credit_id'];
                        //标的title
                        $creditItem['dealtitle'] = $val['title'];
                        //成交金额
                        $creditItem['amount'] = DealHelper::getFormateSyl($val['plan_transfer_amount']);
                        //收益
                        $creditItem['incoming'] = DealHelper::getFormateSyl($val['incoming_sum']);
                        //剩余金额 转让中显示剩余金额   转让完成显示已转让金额
                        if ($val['status'] == 0) {
                            $creditItem['transfershares'] = DealHelper::getFormateSyl($val['instock_plan_transfer_amount']);
                        } else {
                            $creditItem['transfershares'] = DealHelper::getFormateSyl($val['plan_transfer_amount'] - $val['instock_plan_transfer_amount']);
                        }
                        //转让状态
                        $creditItem['sellstatus'] = $val['instock_plan_transfer_amount']==0?'1':'0';
                        //债权状态
                        $creditItem['status'] = $val['status'];
                        $creditItem['statusname'] = CreditStatus::getCreditStatusName($val['status']);

                        //转让时间
                        $creditItem['enddate'] = '';
                        if($creditItem['status'] == CreditStatus::ZHUAN_RANG_OK){
                            //取最后一个转让订单时间
                            $lastCreditOrder = model('CreditOrderRead')->find(['credit_id'=>$val['credit_id'], 'status'=>CreditOrderStatus::SUCCESS], 'created_at desc');
                            if($lastCreditOrder){
                                if ($this->wcg_vcode < 28) {
                                    $creditItem['enddate'] = date('Y-m-d', $lastCreditOrder['created_at']);
                                } else {
                                    $creditItem['enddate'] = date('Y-m-d H:i', $lastCreditOrder['created_at']);
                                }

                            }
                        } else {
                            if ($this->wcg_vcode < 28) {
                                $creditItem['enddate'] = date('Y-m-d', $val['created_at']);
                            } else {
                                $creditItem['enddate'] = date('Y-m-d H:i', $val['created_at']);
                            }
                        }

                        $data[] = $creditItem;
                    }
                }

                $obj = new stdClass();
                $obj->totalnum = $totalNum;
                $obj->creditlist = $data;
                $returnModel->data->setContent($obj);
            }
            catch (CustomException $ex) {
                $returnModel->data->initFail('获取转让债权列表异常');
                // write log
                $this->logService->logError('获取转让债权列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }


    //近期回款 - V2.0
    public function get_recent_refund_v2() {
        // 返回值
        $returnModel = new ReturnModel();

        $end_time = strtotime('+31 day');
        $begin_time = time();
        $begin_time = strtotime(date('Y-m-d', $begin_time));

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }

        if ($param_valid_flag) {
            try {
                $uid = $this->userToken->uid;

                $data = array();

                $refundRecordService = new RefundRecordService();

                $refundList = $refundRecordService->getRecentRefundRecordList_V2($uid, $begin_time, $end_time);
                if (!empty($refundList) && is_array($refundList)) {

                    foreach ($refundList as $key => $val) {
                        $dealItem = array();
                        //类型
                        $dealItem['ordertype'] = $val['order_type'];
                        //标Id
                        $dealItem['dealid'] = $val['deal_id'];
                        //标题目
                        $dealItem['title'] = $val['title'];
                        //收益率
                        //$dealItem['syl'] = sprintf("%.2f", strval($val['syl']));//substr(sprintf("%.2f", strval($val['syl'])),0,-1);
                        $dealItem['syl'] = DealHelper::getFormateSyl($val['syl']);
                        //利息
                        $dealItem['lixi'] = number_format(floatval($val['lixi']), 2, '.','');
                        //期限
                        $dealItem['refundtime'] = date('Y-m-d', $val['refund_time']);

                        if($val['order_type'] == 1){
                            //投资金额
                            $dealItem['money'] = number_format(floatval($val['order_money']), 2, '.','');

                            //债券Id
                            $dealItem['creditid'] = 0;
                            //份数
                            $dealItem['sharessum'] = 0;
                        }
                        else if($val['order_type'] == 2){
                            //投资金额
                            $dealItem['money'] = number_format(floatval($val['amount_sum']), 2, '.','');

                            //债券Id
                            $dealItem['creditid'] = $val['credit_id'];
                            //份数
                            $dealItem['sharessum'] = strval($val['shares_sum']);
                        }

                        $data[] = $dealItem;
                    }
                }

                $returnModel->data->setContent($data);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取回款计划列表V2异常');
                // write log
                $this->logService->logError('获取回款计划列表V2异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //近期回款 - V3.0
    public function get_recent_refund_v3() {
        // 返回值
        $returnModel = new ReturnModel();

        $end_time = strtotime('+30 day 23:59:59');
        $begin_time = time();
        $begin_time = strtotime(date('Y-m-d', $begin_time));

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }

        if ($param_valid_flag) {
            try {
                $uid = $this->userToken->uid;

                $data = array();

                $refundRecordService = new RefundRecordService();

                $titleType = 1; //1=最近30天还款计划；2=30天之后有还款计划；3=没有还款计划
                //取最近30天还款计划
                $refundList = $refundRecordService->getRecentRefundRecordList_V2($uid, $begin_time, $end_time);
                if (empty($refundList)) {
                    //取最近还款的日期
                    $latelyRefundTime = $refundRecordService->getLatelyRefundRecord($uid);
                    if($latelyRefundTime > 0){
                        $titleType = 2;
                        $begin_time = strtotime(date('Y-m-d', $latelyRefundTime));
                        $end_time = strtotime(date('Y-m-d 23:59:59', $latelyRefundTime));
                        $refundList = $refundRecordService->getRecentRefundRecordList_V2($uid, $begin_time, $end_time);
                    }
                    else{
                        //没有还款计划
                        $titleType = 3;
                    }
                }

                $diffDays=0;
                if($titleType==1 || $titleType==2){
                    $tz = new DateTimeZone('Asia/Shanghai');
                    $end_time_object = new DateTime(date('Y-m-d',$end_time), $tz);
                    $begin_time_object = new DateTime(date('Y-m-d',time()), $tz);
                    $diffDays = $end_time_object->diff($begin_time_object)->days;
                    if($titleType==2){
                        $diffDays++;
                    }
                }

                $totalMoney = 0;
                $refundTime = '';
                foreach ($refundList as $key => $val) {
                    $dealItem = array();
                    //类型
                    $dealItem['ordertype'] = $val['order_type'];
                    //标Id
                    $dealItem['dealid'] = $val['deal_id'];
                    //标题目
                    $dealItem['title'] = $val['title_sub'];
                    //收益率
                    //$dealItem['syl'] = substr(sprintf("%.2f", strval($val['syl'])),0,-1);
                    //利息
                    $dealItem['lixi'] = number_format(floatval($val['lixi']), 2, '.','');

                    //还款日期
                    //if(empty($refundTime) || $refundTime != date('Y-m-d', $val['refund_time'])){
                        $refundTime = date('Y-m-d', $val['refund_time']);
                        $dealItem['refundtime'] = $refundTime;
//                    }
//                    else{
//                        $dealItem['refundtime'] = '';
//                    }

                    if($val['order_type'] == 1){
                        //投资金额
                        $dealItem['money'] = number_format(floatval($val['order_money']), 2, '.','');

                        //债券Id
                        $dealItem['creditid'] = 0;
                        //份数
                        //$dealItem['sharessum'] = 0;
                        $dealItem['categoryname']=  DealCategory::getDealCategoryName($val['cid']);
                        $dealItem['dealcategorytype'] = $val['cid'];


                        $totalMoney += (floatval($dealItem['money']) + floatval($dealItem['lixi']));

                        $rateCoupon = model('RateCouponRead')->getUsedCoupon($val['deal_number'], $loginUid);
                        if ($rateCoupon) {
                            $deal = model('DealRead')->find($rateCoupon['deal_id']);
                            $addDays = DealHelper::addRateDays($rateCoupon['add_rate_days'], $deal['deal_end_date'], $rateCoupon['used_time'], $deal['full_time']);
                            $buxi = $rateCoupon['coupon_rate'] / 100 / 360 * $addDays * $rateCoupon['order_money'];
                            $dealItem['lixi'] = DealHelper::getFormateSyl($dealItem['lixi'] + $buxi);
                            $totalMoney = floatval($totalMoney) + floatval($buxi);
                        }
                    }
                    else if($val['order_type'] == 2){
                        //投资金额
                        $dealItem['money'] = number_format(floatval($val['amount_sum']), 2, '.','');

                        //债券Id
                        $dealItem['creditid'] = $val['credit_id'];
                        //份数
                        //$dealItem['sharessum'] = strval($val['shares_sum']);
                        $dealItem['categoryname']='债权';
                        $dealItem['dealcategorytype'] = $val['cid'];
                        $totalMoney += (floatval($dealItem['money']) + floatval($dealItem['lixi']));
                    }

                    if ($dealItem['dealcategorytype'] == 6) {
                        $dealItem['categoryname'] = '新手标';
                        $dealItem['dealcategorytype'] = 0;
                    }
                    //标的类型图片地址
                    $dealItem['deal_category_url'] = $this->config['URL_HTTP_HOST'] . '/template/default/public/images/cid/' . $dealItem['dealcategorytype'] . '.png';
                    
                    $data[] = $dealItem;
                }

                $content['titletype']=$titleType;
                $content['diffdays']=$diffDays;
                $content['totalorders'] = count($data);
                $content['totalmoney'] = number_format($totalMoney,2);
                $content['refundlist']=$data;
                $returnModel->data->setContent($content);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取回款计划列表V3异常');
                // write log
                $this->logService->logError('获取回款计划列表V3异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //还款计划（new）
    public function get_repayment_plan_v3()
    {
        // 返回值
        $returnModel = new ReturnModel();

        $dealId = $_GET['dealnumber'];

        // 参数验证成功标识
        $param_valid_flag = true;
        if (!$this->isLogin()) {
            $validResult = '没有登录，请登录';
            $param_valid_flag = false;
        }
        $uid = $this->userToken->uid;

        $validResult = null;
        if (!isset($dealId) || empty($dealId) || $dealId <= 0) {
            $validResult = '参数标ID错误';
            $param_valid_flag = false;
        }

        $data = array();
        if ($param_valid_flag) {
            try {
                $dealService = new DealService();

                //还款计划开始
                $dealRecord = $dealService->getDealRecordByUid($dealId, $uid);
                if(!empty($dealRecord)){
                    foreach($dealRecord as $key=>$val){
                        $data_item['deal_id'] = $val['deal_id'];
                        $data_item['qishu'] = $val['deal_qishu'];
                        $data_item['refund_time'] = date('Y-m-d', $val['refund_time']);
                        $data_item['money'] = DealHelper::getFormateSyl($val['money']);
                        $data_item['status'] = $val['status'];
                        $data_item['money_type'] = $val['money_type'];

                        $data[] = $data_item;
                    }
                }
                $obj = new stdClass();
                $obj->deallist = $data;
                $returnModel->data->setContent($obj);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取新还款计划数据异常');
                // write log
                $this->logService->logError('获取新还款计划数据异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //查看合同
    public function get_hetong()
    {
        $deal_number = $_GET['dealnumber'];
        $is_credit = in($_GET['iscredit']);

        if (!$this->isLogin()) {
            $param_valid_flag = false;
        }

        $userid = $this->userToken->uid;

        // 参数验证成功标识
        $param_valid_flag = true;

        $fp = new Http();

        $validResult = null;
        if (!isset($deal_number) || empty($deal_number) || $deal_number <= 0) {
            $param_valid_flag = false;
        }
        if (!isset($userid) || empty($userid) || $userid <= 0) {
            $param_valid_flag = false;
        }

        $data = array();
        if ($param_valid_flag) {
            try {
                if ($is_credit) {
                    $post_array=array(
                        'creditId'=>$deal_number,
                    );
                    $fp = new Http();
                    $hts = $fp->request(rtrim($this->config['Wap']['Host'],'/').'/hetong/hetong/deal-order-bu-chong-xie-yi', $post_array);
                } else {
                    //查看合同开始
                    $deal = $this->model->table('deal_order')->where(['deal_number'=>$deal_number])->find();
                    if($deal){
                        $uid = $deal['uid'];
                    } else {
                        $credit = $this->model->table('credit_order')->where(['serial'=>$deal_number])->find();
                        if ($credit) {
                            $uid = $credit['user_id'];
                        }
                    }
                    $post_array=array(
                        'number'=>$deal_number,
                        'uid'=>$uid,
                        'userid'=>$userid,
                    );
                    $hts = $fp->request(rtrim($this->config['Wap']['Host'],'/').'/hetong/hetong/add-hetong', $post_array);
                }
                $list = json_decode($hts, true);
                //查看合同结束
            } catch (CustomException $ex) {
                // write log
                $this->logService->logError('获取合同数据异常', $ex->getErrorMessage());
            }
        } else {
            //
        }
        $contents = '';
        if ($list) {
            foreach ($list as $k => $v) {
                if (isset($v['content'])) {
                    $contents .= $v['name'].$v['content'];
                } else {
                    $url = rtrim($this->config['Wap']['Host'],'/').$v['hetong_url'];
                    LogUtil::log($url, 'viewHetong.log');
                    $content = file_get_contents($url);
                    $contents .= $v['hetong_name'].$content; //iconv("GBK", "UTF-8", $content);
                }
            }
        }
        $this->assign('android', $contents);
        $this->display('huifu/android.html');
    }

    //查看合同
    public function get_hetong_v3()
    {
        // 返回值
        $returnModel = new ReturnModel();
        $deal_number = $_GET['dealnumber'];
        $creditId = isset($_GET['creditId']) ? $_GET['creditId'] : 0;
        // 参数验证成功标识
        $param_valid_flag = true;
        $validResult = null;

        if (!isset($deal_number) || empty($deal_number) || $deal_number <= 0) {
            $validResult = '订单号错误';
            $param_valid_flag = false;
        }

        if (!$this->isLogin()) {
            $validResult = '未登录';
            $param_valid_flag = false;
        }

        $userid = $this->userToken->uid;

        //判断此订单是否属于当前登录用户
        if ($creditId == 0) {
            $res = $this->model->table('deal_order')->where(['deal_number'=>$deal_number, 'uid'=>$userid])->find();
            if (!$res) {
                $res = $this->model->table('credit_order')->where(['serial'=>$deal_number, 'user_id'=>$userid])->find();
            }
        } else {
            $res = $this->model->table('credit')->where(['order_id'=>$deal_number, 'user_id'=>$userid])->find();
        }

        if (!$res) {
            $validResult = '当前用户无查看权限';
            $param_valid_flag = false;
        }


        $data = array();
        if ($param_valid_flag) {
            try {
                if ($creditId == 0) {
                    $post_array = array(
                        'number' => $deal_number,
                        'uid' => $userid,
                        'userid' => $userid,
                    );
                    $fp = new Http();
                    $hts = $fp->request(rtrim($this->config['Wap']['Host'], '/') . '/hetong/hetong/add-hetong', $post_array);
                } else {
                    $post_array = array(
                        'creditId' => $creditId,
                        'userid' => $userid,
                    );
                    $fp = new Http();
                    $hts = $fp->request(rtrim($this->config['Wap']['Host'], '/') . '/hetong/hetong/deal-order-bu-chong-xie-yi', $post_array);
                }
                $contents = file_get_contents(rtrim($this->config['Wap']['Host'],'/').'/certificate/certificate/certificate-link?id='.$deal_number.'&creditId='.$creditId);
                $obj = new stdClass();
                $obj->content = $contents;
                $returnModel->data->setContent($obj);
            } catch (CustomException $ex) {
                // write log
                $this->logService->logError('获取合同数据异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }


    //我的收益 - V2.0
    public function get_my_income_v2(){
        // 返回值
        $returnModel = new ReturnModel();

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (!$this->isLogin()) {
            $validResult = '没有登录，请登录';
            $param_valid_flag = false;
        }

        if ($param_valid_flag) {
            try {
                $loginUid = $this->userToken->uid;

                $data = array();

                $refundRecordService = new RefundRecordService();

                //累计收益
                $totalIncome = $refundRecordService->getUserTotalIncome($loginUid);

                //昨日收益
//                $beginDate = strtotime("-1 day", strtotime(date('Y-m-d', time())));
//                $endDate = time();

                $yesterDayIncome = $refundRecordService->getUserTotalIncomeByDate($loginUid, 1);

                //近一周收益
//                $beginDate = strtotime("-7 day", strtotime(date('Y-m-d', time())));
//                $endDate = time();
                $prevWeekIncome = $refundRecordService->getUserTotalIncomeByDate($loginUid, 2);

                //近一个月收益
//                $beginDate = strtotime("-30 day", strtotime(date('Y-m-d', time())));
//                $endDate = time();
                $prevMonthIncome = $refundRecordService->getUserTotalIncomeByDate($loginUid, 3);

                //理财资产
                $ZiCHan_LiXi = $refundRecordService->getUserLiCaiZiCanLiXi($loginUid);
                $licaiZhiCan =  $ZiCHan_LiXi['licai_zichan'];

                $yiShouLiXi = model('UserRead')->getYishouLixi($loginUid);
                $daiShouLiXi = model('UserRead')->getDaishouLixi($loginUid);
                //收益中的投资列表
                $orderList = $refundRecordService->getNoPaymentRefundRecordList_V2($loginUid);
                if (!empty($orderList) && is_array($orderList)) {
                    foreach ($orderList as $key => $val) {
                        $dataItem = array();
                        //类型 1=标的订单；2=债权订单
                        $dataItem['ordertype'] = $val['order_type'];
                        //标Id
                        $dataItem['id'] = $val['id'];
                        //cid
                        $dataItem['dealcategorytype'] = $val['cid'];
                        //标题目
                        $dataItem['title'] = $val['title_sub'];
                        //投资金额
                        $dataItem['money'] = number_format(floatval($val['order_money']), 2, '.','');
                        //收益率
                        //$dataItem['syl'] = sprintf("%.2f", strval($val['syl']));//substr(sprintf("%.2f", strval($val['syl'])),0,-1);
                        $dataItem['syl'] = DealHelper::getFormateSyl($val['syl']);
                        //期限
                        $start_date=date('Y-m-d',$val['start_time']);
                        $qixian_time = LoanTerms($start_date, null, $val['end_time']);
                        if($val['expires_type']==DealExpiresType::Day)
                        {
                            $dataItem['qixian'] = $qixian_time['days'][1]['period']['days'];
                            $dataItem['qixiantype'] = DealExpiresType::getDealExpiresTypeName(DealExpiresType::Day);
                        }else{
                            $dataItem['qixian'] = $qixian_time['count'];
                            $dataItem['qixiantype'] = DealExpiresType::getDealExpiresTypeName(DealExpiresType::Month);
                        }

                        // 昨日收益
                        if($val['order_type'] == 2){ //债权订单
                            $dataItem['lixi'] = number_format(floatval($val['lixi']/$qixian_time['days'][1]['period']['days']), 2, '.','');
                        }
                        else{ //标的订单
                            $dataItem['lixi'] = number_format(floatval($val['syl']/100/360 * $dataItem['money']), 2, '.','');
                        }

                        $data[] = $dataItem;
                    }
                }

                $obj = new stdClass();
                $obj->total_income = number_format($totalIncome, 2, '.','');
                $obj->yesterday_income = number_format($yesterDayIncome, 2, '.','');
                $obj->prev_week_income = number_format($prevWeekIncome, 2, '.','');
                $obj->prev_month_income = number_format($prevMonthIncome, 2, '.','');
                $obj->licai_zhican = number_format($licaiZhiCan, 2, '.','');
                $obj->yi_shou_income = number_format($yiShouLiXi, 2, '.','');
                $obj->dai_shou_income = number_format($daiShouLiXi, 2, '.','');
                $obj->licai_zhican = number_format($licaiZhiCan, 2, '.','');
                $obj->data = $data;

                $returnModel->data->setContent($obj);

            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取我的收益数据异常');
                // write log
                $this->logService->logError('获取我的收益数据异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }


     public function bindtoken(){
        $returnModel = new ReturnModel();
        $userService = new UserService();
        try{
             // 参数验证成功标识
                $flag = true;
                if(!$this->isLogin()){
                    $flag=false;
                }
                if($flag){
                    $uid = $this->userToken->uid;
                    $userInfo = $userService->getUserById($uid);
                    $data = array();
                    $channel = array('ios'=>2,'android'=>1);
                    $bindParms = in($_GET);
                    $data['token'] = isset($bindParms['token']) ? $bindParms['token'] : '';
                    $data['tag'] =   isset($bindParms['tag']) ? $bindParms['tag'] : '';
                    $data['channel'] =  $channel[$this->clientType];
                    $data['username'] =$userInfo['username'];
                    $data['userid']    = $uid;
                    $data['created_at'] = time();
                    $data['updated_at'] = time();
                    // 验证token 是否唯一
                    if($data['token']){
                          $tokeninfo = $userService->getToken( $data['userid'],$data['token']);
                          if(!$tokeninfo){
                            try{
                                // 插入记录
                                $insertid = model('User')->tokenSave($data);
                            }catch(CustomException $ex){
                                $returnModel->data->initFail('添加数据失败');
                            }
                          }else{
                                $returnModel->data->initFail('参数token重复绑定');

                          }
                    }else{
                        $returnModel->initFail('参数token丢失');
                    }
                }else{
                    $returnModel->initFail('没有登录，请登录');
                }

        }catch(CustomException $ex){
             $returnModel->initFail('error');
        }

        echo(json_encode($returnModel));
    }

    //项目详情介绍
    public function get_deal_introduction(){
        $dealId = intval($_GET['dealid']);

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (!isset($dealId) || empty($dealId) || $dealId <= 0) {
            $validResult = '参数标ID错误';
            $param_valid_flag = false;
        }

        $deal = array();

        if ($param_valid_flag) {
            try {
                $dealService = new DealService();
                $deal = $dealService->getDealById_Read($dealId);

                //保理商资料开始
                $ps_baoli=substr($deal["photo_baoli"],0,-1);
                $photo_baoli=explode(",",$ps_baoli);
                $this->assign('photo_baoli',$photo_baoli);
                //保理商资料结束

                //共管资料开始
                $ps_gongguan=substr($deal["photo_gongguan"],0,-1);
                $photo_gongguan=explode(",",$ps_gongguan);
                $this->assign('photo_gongguan',$photo_gongguan);
                //共管资料结束

                //补充资料开始
                $ps=substr($deal["photo"],0,-1);
                $photo=explode(",",$ps);
                $this->assign('photo',$photo);
                //补充资料结束

                if($dealId >= 333){
                    //风控还款来源新版 start
                    $sql = 'select * from cp_deal_info where deal_id=:dealId and type in (11,12,13) order by type asc,number asc';
                    $fk_res = $this->model->query($sql, ['dealId'=>$dealId]); //风控数据
                    $fk_deal_res = array();
                    if(is_array($fk_res)){
                        foreach($fk_res as $key=>$val){
                            $fk_deal_res[$val['type']][$key]=$val;
                        }
                    }
                    //var_dump($fk_deal_res);exit;
                    //$where =
                    $sql = 'select * from cp_deal_info where deal_id=:dealId and type in (1,2,3,4,5) order by number asc';
                    $hkly_res = $this->model->query($sql, ['dealId'=>$dealId]); //还款来源数据
                    //var_dump($hkly_res);exit;
                    $this->assign('fklist', $fk_deal_res);
                    $this->assign('hklist', $hkly_res);
                    //风控还款来源新版 end
                }

            } catch (CustomException $ex) {
                // write log
                $this->logService->logError('获取标项目详情数据异常', $ex->getErrorMessage());
            }
        } else {
           //
        }

        $this->assign('deal',$deal);
        $this->assign('imghost', $this->config['URL_HTTP_HOST_IMG']);

        //if($dealId >= 333){
            $this->display('deal/deal_introduction.html');
//        }
//        else{
//            $this->display('deal/detail.html');
//        }
    }

    public function get_repayment_plan(){
        $dealId = intval($_GET['dealid']);

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if (!isset($dealId) || empty($dealId) || $dealId <= 0) {
            $validResult = '参数标ID错误';
            $param_valid_flag = false;
        }

        $data = array();
        if ($param_valid_flag) {
            try {
                $dealService = new DealService();

                //还款计划开始
                $dealRecord = $dealService->getDealRecord($dealId);
                if(!empty($dealRecord)){
                    foreach($dealRecord as $key=>$val){
                        $data_item['deal_id'] = $val['deal_id'];
                        $data_item['qishu'] = $val['deal_qishu'];
                        $data_item['refund_time'] = $val['refund_time'];
                        $data_item['benxi'] = number_format($val['benxi'], 2, '.','');
                        $data_item['status'] = DealRecordStatus::getDealRecordStatusName($val['status']);

                        $data[] = $data_item;
                    }
                }
                //还款计划结束
            } catch (CustomException $ex) {
                // write log
                $this->logService->logError('获取还款计划数据异常', $ex->getErrorMessage());
            }
        } else {
            //
        }

        $this->assign('records', $data);
        $this->display('deal/deal_repayment.html');
    }

    public function get_bid_record(){
        $dealId = intval($_GET['dealid']);
        if (empty($pageIndex)) {
            $pageIndex = 1;
        }
        if (empty($pageSize)) {
            $pageSize = 1000;
        }

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;

        if (!isset($dealId) || empty($dealId) || $dealId <= 0) {
            $validResult = '参数标ID错误';
            $param_valid_flag = false;
        }

        $data = array();
        if ($param_valid_flag) {
            try {
                $dealService = new DealService();

                //先查一马当先是谁
                $one_ma = $this->model->table('deal_jiangli')->where(['deal_id'=>$dealId, 'type'=>1])->find();
                if($one_ma)
                {
                    //$one_deal_order = $this->model->table('deal_order')->where('deal_id="'.$dealId.'" and uid="'.$one_ma['uid'].'" and status=2 and order_money="'.$one_ma['order_money'].'"')->order('id asc')->find();
                    $one_deal_order = model('DealOrderRead')->findByWehre(['deal_id'=>$dealId, 'uid'=>$one_ma['uid'], 'status'=>2, 'order_money'=>$one_ma['order_money']], 'id asc');
                }else{
                    $one_deal_order = null;
                }
                $cid = in($_GET['cid']);
                //投资列表开始
                $dealOrder = $dealService->getDealOrder($dealId, $pageIndex, $pageSize);
                if(!empty($dealOrder)){
                    foreach($dealOrder as $key=>$val){
                        $data_item['id'] = $val['id'];
                        $data_item['uid'] = $val['uid'];
                        $data_item['phone'] = $val['phone'];
                        $data_item['toubiao_type'] = $val['toubiao_type'];
                        $data_item['deal_id'] = $val['deal_id'];
                        $data_item['order_time'] = date('m-d H:i:s', $val['order_time']);
                        $data_item['username'] = mb_substr($val['username'],0,1,'utf8').'***'.mb_substr($val['username'],-1,1,'utf8');
                        $data_item['order_money'] = number_format($val['order_money'], 2, '.','');

                        $data_item['yima_flag'] = 0;
                        $data_item['yicui_flag'] = 0;
                        $data_item['yiming_flag'] = 0;
                        $data_item['is_old_user'] =  model('UserRead')->getIsOldUser($val['uid']);
                        $data[] = $data_item;
                    }

//                    if($one_deal_order)
//                    {
//                        $touzi_info = array();
//                        foreach($data as $key=>$val)
//                        {
//                            if($val['id'] != $one_deal_order['id'])
//                            {
//                                $touzi_info[] = $val;
//                            }
//                        }
//                        $one_deal_order['username'] = mb_substr($one_deal_order['username'],0,1,'utf8').'***'.mb_substr($one_deal_order['username'],-1,1,'utf8');
//                        $touzi_info[] = [
//                            'id'=>$one_deal_order['id'],
//                            'uid'=>$one_deal_order['uid'],
//                            'deal_id'=>$one_deal_order['deal_id'],
//                            'order_time'=>date('m-d H:i:s', $one_deal_order['order_time']),
//                            'username'=>$one_deal_order['username'],
//                            'order_money'=>$one_deal_order['order_money'],
//                            'yima_flag'=>0,
//                            'yicui_flag'=>0,
//                            'yiming_flag'=>0];
//                        $data = $touzi_info;
//                    }
                }
                //投资列表结束

                //获取奖励信息
                $dealJiangLi_data = array();
                //满标时间
                $dealInfo = $dealService->getDealById_Read($val['deal_id']);
                if(empty($dealInfo['full_time'])){
                    $dealJiangLi = $dealService->getDealJiangLiByUserJiangli($dealId,array(11,12,13));
                }else if( !empty($dealInfo['full_time'])  &&  $dealInfo['full_time'] >= $this->config['ACTIVE']['DEAL_THREE']['FULL_TIME'] ){
                    $dealJiangLi = $dealService->getDealJiangLiByUserJiangli($dealId,array(11,12,13));
                }else{
                    $dealJiangLi = $dealService->getDealJiangLi($dealId);
                }
                if($dealJiangLi){
                    // 反向排序
                    $data = array_reverse($data);
                    foreach($dealJiangLi as $key=>$val){
                        if($val['type'] == DealJiangLiType::YI_MA_DANG_XIAN || $val['type'] == 11){
                                foreach($data as $ordKey => $order){
                                    if($order['uid'] == $val['uid'] && $order['toubiao_type']==1){
                                        $data[$ordKey]['yima_flag'] = 1;
                                        break;
                                    }
                                }

                        }
                        if($val['type'] == DealJiangLiType::YI_CHUI_DING_YIN || $val['type'] == 12){
                                $yichuandingyi = null;
                                foreach($data as $ordKey => $order){
                                    if($order['uid'] == $val['uid']){
                                        //$data[$ordKey]['yicui_flag'] = 1;
                                        //break;
                                        $yichuandingyi = $ordKey;
                                    }
                                }
                                if(isset($yichuandingyi)){
                                    $data[$yichuandingyi]['yicui_flag'] = 1;
                                }
                        }
                        if($val['type'] == DealJiangLiType::YI_MING_JING_REN || $val['type'] == 13){
                            $deal = $dealService->getDealById($dealId);
                            if($deal['deal_status'] >= DealStatus::MAN_BIAO){
                                $money = 0;
                                $yiming = null;
                                foreach($data as $ordKey => $order){
                                    if($order['uid'] == $val['uid']){
                                        //$data[$ordKey]['yiming_flag'] = 1;
                                        //break;
                                       if($order['order_money'] > $money) {
                                           $yiming = $ordKey;
                                           $money  = $order['order_money'];
                                       }

                                    }
                                }
                                if(isset($yiming)){
                                    $data[$yiming]['yiming_flag'] = 1;
                                }

                            }
                        }
                    }
                    // 反向排序
                    $data = array_reverse($data);
                }
            } catch (CustomException $ex) {
                // write log
                $this->logService->logError('获取投资记录数据异常', $ex->getErrorMessage());
            }
        } else {
            //
        }
        $this->assign('records', $data);
        $this->assign('cid', $cid);
        $this->display('deal/deal_bid_record.html');
    }

    //是否是新用户
    public function get_is_newuser(){
        // 返回值
        $returnModel = new ReturnModel();

        //投资次数，小于3次为新用户，大于3次为老用户
        $data['is_new_user'] = 0;
        $data['is_weekearn_user'] = 1;
        if($this->isLogin()){
            $_userId = $this->userToken->uid;
            $dealService = new DealService();
            $orderCount = $dealService->countDealOrderNum($this->userToken->uid);
            if($orderCount < 1){
                $data['is_new_user'] = 1;
            }
            //判断是否可以投资周周盈
            $isWeekEarnUser = model('DealRead')->isWeekEarnUser($_userId);
            $isWeekEarnDeal = model('DealRead')->isWeekEarnDeal($_userId);
            $data['is_weekearn_user'] = ($isWeekEarnUser && !$isWeekEarnDeal) ? 1 : 0;//1可以投，0不可以

            $returnModel->data->setContent($data);
        }
        else{
            $returnModel->initFail('未登录');
        }

        // 返回json格式
        echo(json_encode($returnModel));
    }

    //获取用户是否绑定快捷支付
    public  function  get_user_qp_info(){
        // 返回值
        $returnModel = new ReturnModel();
        $userAccountService = new UserAccountService();
        // 参数验证成功标识
        $param_valid_flag = true;
        $validResult = null;
        if (!$this->isLogin()) {
            $validResult = '没有登录，请登录';
            $param_valid_flag = false;
        }
        else if($this->loginUserIsLock()){
            $validResult = '用户被锁定';
            $param_valid_flag = false;
        }
        $uid = $this->userToken->uid;
        // 参数验证通过
        if ($param_valid_flag) {
            try {
                $data = array('isbindqp'=>0);//未开通快捷支付
                $data['acct_balance'] = 0.00; //账户余额
                // 绑卡验证
                $userBankService = new UserBankService();
                $userService = new UserService();
                $userBank = $userBankService->getUserBankQPById($uid);
                $userData = $userService->getUserDataByUid($uid);
                if (!empty($userData)) {
                    $data['acct_balance'] = number_format($userData['AvlBal'], 2,'.','');
                }
                if(!empty($userBank)){
                    $data['isbindqp'] = 1;
                    $bankQuota = $userBankService->getBankQuota($userBank['bank_name']);
                    $data['bankname'] = $bankQuota['bank_name'];
                    $data['singlecarddays'] = ($bankQuota['single_card_day_limit']/10000).'万';
                    $data['single'] = ($bankQuota['single_limit']/10000).'万';
                    $data['singledays'] = $this->bankname[$userBank['bank_name']]['single-days'];
                    $data['bankimg'] = $bankQuota['bank_img'];
                }
                $returnModel->data->setContent($data);
            } catch (CustomException $ex) {
                $returnModel->data->initFail($ex->getErrorSubject());
                $this->logService->logError('获取用户是否开通快捷支付信息-异常', $this->userToken->username.'-'.$ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }

        // 返回json格式
        echo(json_encode($returnModel));


    }



    // ======= 活动相关 ========

    /**
     * 分裂红包活动
     */
    public function activeShareDealOrder() {
        // 返回值
        $returnModel = new ReturnModel();

        $dealNumber = in($_GET['dealnumber']);

        $hongbaoUrl = trim($this->config['Wap']['Host'],'/').'/active/coupon/sharedealorder?dealnumber=%s';
        try{
            $hongbao = Http::doGet(sprintf($hongbaoUrl,$dealNumber));
            $hongbao = json_decode($hongbao,true);
        }catch(Exception $e){
            LogUtil::log($e->getMessage().$e->getTraceAsString(), 'HongbaoShare-deal_ok.log');
            $hongbao = false;
        }
        if(!$hongbao || !($hongbao['code'] == 0 || $hongbao['code'] == 101)){
            $content = [
                'active_enable' => 0,
                'coupon_num' => 0,
                'share_url' => '',
                'share_title' => '我在旺财谷赚钱啦，送你一个红包！',
                'share_description' => '有坚持，才有收获！躺着也赚钱，最高加送188元~'
            ];
        }else{
            $content = [
                'active_enable' => 1,
                'coupon_num' => $hongbao['content']['coupon_num'],
                'share_url' => trim($this->config['Wap']['Host'],'/').'/active/coupon/index?dealOrderNum='.$dealNumber,
                'share_title' => '我在旺财谷赚钱啦，送你一个红包！',
                'share_description' => '有坚持，才有收获！躺着也赚钱，最高加送188元~'
            ];
        }

        $returnModel->data->setContent($content);

        // 返回json格式
        echo(json_encode($returnModel));
    }
    /***
     *
     *16年签到抽奖活动  抽奖接口
     *
     */
    public function sign16Draw(){
        $returnModel = new ReturnModel();

        if($this->isLogin()){
            $mcrype = new MCrypt('SA23FDASD2.Qz');
            $loginToken = $mcrype->encrypt(json_encode(array('uid'=>$this->userToken->uid)));
            $loginToken = base64_encode($loginToken);
            $url = trim($this->config['Wap']['Host'],'/').'/active/sign16/draw?logintoken='.$loginToken;
            $response = Http::doGet($url);
            if(empty($response) || !is_array(json_decode($response,true))){
                //请求异常
                $returnModel->initFail('网络异常,请重试或联系客服');
            }else{
                //正常返回
                $response = json_decode($response,true);
                $response['rs_type'] = '';
                unset($response['code']);
                $returnModel->data->setContent($response);
            }
        }else{
            $returnModel->initFail('未登录');
        }

        echo(json_encode($returnModel));
    }

    /***
     *
     *16年签到抽奖   填写实物收寄地址
     *
     **/
    public function sign16SaveAddress(){
        $returnModel = new ReturnModel();

        if($this->isLogin()){
            $mcrype = new MCrypt('SA23FDASD2.Qz');
            $loginToken = $mcrype->encrypt(json_encode(array('uid'=>$this->userToken->uid)));
            $loginToken = base64_encode($loginToken);
            $url = trim($this->config['Wap']['Host'],'/').'/active/sign16/save-draw-address?logintoken='.$loginToken;
            $data['draw'] = in($_GET['draw']);
            $data['username'] = in($_GET['username']);
            $data['mobile'] = in($_GET['mobile']);
            $data['address'] = in($_GET['address']);
            $response = Http::doPost($url,$data);
            if(empty($response) || !is_array(json_decode($response,true))){
                //请求异常
                $returnModel->initFail('网络异常,请重试或联系客服');
            }else{
                //正常返回
                $response = json_decode($response,true);
                $response['rs_type'] = $response['code'];
                unset($response['code']);
                $returnModel->data->setContent($response);
            }
        }else{
            $returnModel->initFail('未登录');
        }
        echo(json_encode($returnModel));
    }
    // ======= 活动相关 ========
    //邀请记录
    public  function  userInvite(){
        $loginToken = in($_GET['logintoken']);
        $loginToken = base64_decode( $loginToken );
        $mcrypt = new Mcrypt('SA23FDASD2.Qz');
        $userToken = json_decode($mcrypt->decrypt($loginToken), true);
        $uid =  $userToken['uid'];
        if(empty($uid)){
            $this->display('active/invite/record.html');exit;
        }
        $userService = new UserService();
        $dealOrderService = new DealOrderService();
        $data = $userService->getUserYqCodeById($uid);
        $list =   $userService->getYqList($uid);
        if(!empty($list) && is_array($list)){
            foreach($list as $key=>$val){
                $orderInfo = $dealOrderService->getUserDealOrder($val['uid']);
                if (!empty($orderInfo)) {
                    $list[$key]['is_order'] = $orderInfo['order_time'];
                }
                $Usrname_array = $userService->getUserHuifuByUid($val['uid']);
                $list[$key]['UsrName'] = $Usrname_array['UsrName'];
                if (empty($list[$key]['UsrName'])) {
                    $list[$key]['UsrName'] = $list[$key]['username'];
                }
            }
            foreach ($list as $k => $v) {
                if ($v['is_order'] and $v['friends_money'] == 0) {
                    $Usrname_array = $this->model->table('user_jiangli')->field('send_money, send_status, award_type')->where(['act_category'=>2, 'uid'=>$v['friends'], 'byq_uid'=>$v['uid']])->find();
                    $list[$k]['friends_money'] = $Usrname_array['send_money'];
                    $list[$k]['status'] = $Usrname_array['send_status'];
                    $list[$k]['award_type'] = $Usrname_array['award_type'];
                }

                if ($list[$k]['award_type'] == 2) {
                    $list[$k]['friends_money'] = $list[$k]['friends_money'] . '元代金券';
                } else {
                    $list[$k]['friends_money'] = $list[$k]['friends_money'] . '元';
                }
            }

        }
        $this->assign('yqcode', $data['code']);
        $this->assign('list', $list);
        $this->display('active/invite/record.html');

    }
    //显示分享规则
    public  function userInviteRule(){
        $this->display('active/invite/rule.html');
    }
    //获取ip和端口号
    public  function  get_ip_port(){
        $returnModel = new ReturnModel();
        $setAttr = new \stdClass();
        $setAttr->serverList = array(
            array(
                'ip'=>$this->config['IPADDRESS'],
                'port'=>$this->config['IPPORT']
                ),
        );
        $returnModel->data->setContent($setAttr);
        echo json_encode($returnModel);exit;

    }
    //获取分享数据信息
    public  function  get_share_data(){
        $returnModel = new ReturnModel();
        $setAttr = new \stdClass();
        $signurl = trim($this->config['Wap']['Host'],'/').'/active/invite';
        $setAttr->shareData = array(
            array(
                'title'=>'好友召集令！邀请好友得现金红包！',
                'description'=>'您的好友已为您抢到50元现金＋188元红包，点我领取',
                'signurl'=>$signurl,
                'shareicon' => trim($this->config['Wap']['Host'],'/') . '/static/default/invite/images/source/source-share-icon.jpg'
            ),
        );
        $returnModel->data->setContent($setAttr);
        echo json_encode($returnModel);exit;
    }

    public  function tulip(){
        $biaozhu = '';
        if($this->clientType=='ios'){
            $biaozhu = '* 账户中所有奖励活动，苹果公司不是活动赞助商，也与本次活动无关。';
        }
        $this->assign('biaozhu', $biaozhu);
        $this->display('help/tulip_help.html');
    }

    public function get_waptoapp_config(){
        $returnModel = new ReturnModel();
        $setAttr = new \stdClass();
        $setAttr->deallist = $this->get_client_config(strtolower($this->clientType));
        $returnModel->data->setContent($setAttr);
        echo json_encode($returnModel);exit;
    }

    private  function  get_client_config($clientType){
        $deallist  = null;
        if($clientType == 'ios'){
            $deallist = array(
                array(
                    "viewtype"=> "login",
                    "viewname"=> "WCGLoginViewController",
                    "params"=> "",
                    "paramstype"=> ""
                ),
                array(
                    "viewtype"=> "home",
                    "viewname"=>"WCGHomeViewController",
                    "params"=>"",
                    "paramstype"=> ""
                ),
                array(
                    "viewtype"=>"list",
                    "viewname"=>"WCGFinancialViewController",
                    "params"=>"select_index,inner_index",
                    "paramstype"=> "int,int"
                ),
                array(
                    "viewtype"=> "account",
                    "viewname"=>"WCGAccountManageViewController",
                    "params"=>"",
                    "paramstype"=> ""
                ),
                array(
                    "viewtype"=>"info",
                    "viewname"=>"WCGMemberCenterViewController",
                    "params"=> "",
                    "paramstype"=> ""
                ),
                array(
                    "viewtype"=> "safe",
                    "viewname"=>"WCGSafeCenterViewController",
                    "params"=>"",
                    "paramstype"=> ""
                ),
                array(
                    "viewtype"=>"myshouyi",
                    "viewname"=>"WCGMyShouYiViewController",
                    "params"=>"",
                    "paramstype"=> ""
                ),
                array(
                    "viewtype"=>"mylicai",
                    "viewname"=> "WCGHoldProjectViewController",
                    "params"=> "segIndex",
                    "paramstype"=> "int"
                ),
                array(
                    "viewtype"=>"myrefundplan",
                    "viewname"=>"WCGPayPlanViewController",
                    "params"=>"",
                    "paramstype"=> ""
                ),
                array(
                    "viewtype"=>"myjiaoyi",
                    "viewname"=>"WCGJiaoYiDetailViewController",
                    "params"=>"",
                    "paramstype"=>""
                ),
                array(
                    "viewtype"=>"mycoupon",
                    "viewname"=>"WCGCouponViewController",
                    "params"=>"select_index",
                    "paramstype"=> "int"
                ),
                array(
                    "viewtype"=>"mycredite",
                    "viewname"=>"WCGMyZhaiQuanViewController",
                    "params"=>"",
                    "paramstype"=> ""
                ),
                array(
                    "viewtype"=>"mycalculator",
                    "viewname"=> "WCGShouYiJSQViewController",
                    "params"=>"",
                    "paramstype"=> ""
                ),
                array(
                    "viewtype"=>"myautobid",
                    "viewname"=> "WCGAutoViewController",
                    "params"=>"",
                    "paramstype"=>""
                ),
                array(
                    "viewtype"=> "creditid",
                    "viewname"=> "WCGZhaiQuanDetailViewController",
                    "params"=> "dealId",
                    "paramstype"=> "int"
                ),
                array(
                    "viewtype"=>"dealid",
                    "viewname"=>"WCGBiaoInfoViewController",
                    "params"=>"dealID",
                    "paramstype"=> "int"
                ),
                array(
                    "viewtype"=>"myinvite",
                    "viewname"=>"WCGLinkWebViewController",
                    "params"=>"",
                    "paramstype"=> ""
                ),
                array(
                    "viewtype"=>"discovery",
                    "viewname"=>"WCGFoundViewController",
                    "params"=>"",
                    "paramstype"=> ""
                ),
                array(
                    "viewtype"=>"mymessage",
                    "viewname"=>"WCGMessageViewController",
                    "params"=>"",
                    "paramstype"=> ""
                ),
                array(
                    "viewtype"=>"noticelist",
                    "viewname"=>"WCGOfficialNoticeViewController",
                    "params"=>"",
                    "paramstype"=> ""
                ),
                array(
                    "viewtype"=>"newslist",
                    "viewname"=>"WCGFoundCompanyDynamicViewController",
                    "params"=>"select_index",
                    "paramstype"=> "int"
                ),
            );
        }elseif($clientType == 'android'){
            $deallist = array(
                array(
                     "viewtype"=> "account",
                     "viewname"=>"com.yitoudai.wcg.ui.membercenter.AccountManageActivity",
                     "params"=>"result",
                     "paramstype"=> "string"
                ),
                array(
                    "viewtype"=>"safe",
                     "viewname"=>"com.yitoudai.wcg.ui.membercenter.SafeCenterActivity",
                     "params"=> "",
                     "paramstype"=>""
                ),
                array(
                    "viewtype"=> "myshouyi",
                    "viewname"=> "com.yitoudai.wcg.ui.membercenter.ShouYiActivity",
                    "params"=>"",
                    "paramstype"=>""
                ),
                array(
                    "viewtype"=> "mylicai",
                    "viewname"=> "com.yitoudai.wcg.ui.membercenter.HoldProjectActivity",
                    "params"=>"select_index",
                    "paramstype"=>"string"
                ),
                array(
                    "viewtype"=> "myrefundplan",
                    "viewname"=> "com.yitoudai.wcg.ui.membercenter.JinQiHuiKuanActivity",
                     "params"=>"",
                    "paramstype"=> ""
                ),
                array(
                    "viewtype"=> "myjiaoyi",
                    "viewname"=> "com.yitoudai.wcg.ui.membercenter.JiaoYiDetailActivity",
                    "params"=>"",
                     "paramstype"=>""
                ),
                array(
                    "viewtype"=> "mycoupon",
                    "viewname"=> "com.yitoudai.wcg.ui.membercenter.CouponActivity",
                    "params"=>"select_index",
                    "paramstype"=>"string"
                ),
                array(
                    "viewtype"=> "mycredite",
                    "viewname"=> "com.yitoudai.wcg.ui.membercenter.MyCreditActivity",
                    "params"=> "",
                    "paramstype"=> ""
                ),
                array(
                    "viewtype"=> "mycalculator",
                    "viewname"=> "com.yitoudai.wcg.ui.membercenter.JiSuanQiActivity",
                    "params"=> "",
                    "paramstype"=>""
                ),
                array(
                    "viewtype"=> "myautobid",
                    "viewname"=> "com.yitoudai.wcg.ui.membercenter.AutoInvestActivity",
                    "params"=>"",
                    "paramstype"=> ""
                ),
                array(
                    "viewtype"=> "creditid",
                     "viewname"=> "com.yitoudai.wcg.ui.financial.CreditDetailActivity",
                     "params"=>"credit_id",
                    "paramstype"=>"string"
                ),
                array(
                    "viewtype"=>"dealid",
                    "viewname"=>"com.yitoudai.wcg.ui.financial.NewDealDetailActivity",
                    "params"=>"deal_id",
                    "paramstype"=>"string"
                ),
                array(
                    "viewtype"=>"myinvite",
                    "viewname"=>"com.yitoudai.wcg.ui.membercenter.InviteWebviewActivity",
                    "params"=>"",
                    "paramstype"=>""
                ),
                array(
                    "viewtype"=>"mymessage",
                    "viewname"=>"com.yitoudai.wcg.ui.home.MyMessageActivity",
                    "params"=>"",
                    "paramstype"=> ""
                ),
                array(
                    "viewtype"=>"noticelist",
                    "viewname"=>"com.yitoudai.wcg.ui.home.OfficialReportActivity",
                    "params"=>"",
                    "paramstype"=> ""
                ),
                array(
                    "viewtype"=>"newslist",
                    "viewname"=>"com.yitoudai.wcg.ui.discovery.CompanyDevelopActivity",
                    "params"=>"select_index",
                    "paramstype"=> "string"
                ),

            );
        }


        return $deallist;
    }

    public function reg_show_verify()
    {
        $returnModel = new ReturnModel();
        $phone = isset($_GET['mobile']) ? in($_GET['mobile']) : '';
        if (!Validator::isMobile($phone)) {
            $returnModel->data->initFail('请指定手机号');
        } else {
            $ip = get_client_ip();
            $url = rtrim($this->config['Wap']['Host'], '/') . '/api/v02/reg-show-verify';
            try {
                $res1 = Http::doPost($url, ['phone' => $phone, 'ip' => ip2long($ip)]);
                $res1 = json_decode($res1, true);
                if (!is_array($res1)) {
                    throw new Exception('请求wap站点异常');
                }
                if ($res1['code'] == 1) {
                    $url = rtrim($this->config['Wap']['Host'], '/') . '/api/v02/get-verify-img';
                    $res2 = Http::doGet($url);
                    $res2 = json_decode($res2, true);
                    if (!is_array($res2)) {
                        throw new Exception('请求wap站点异常');
                    }
                    $returnModel->data->setContent(['src' => $res2['src'], 'uuid' => $res2['uuid']]);
                } else {
                    $returnModel->data->setContent(['src' => '', 'uuid' => '']);
                }
            } catch (Exception $e) {
                $returnModel->initFail('请求异常');
                $this->logService->logError('请求是否显示验证码接口异常', $e->getMessage(), $this->clientType);
            }
        }
        echo json_encode($returnModel);
    }

    public function  send_reg_phone_sms()
    {
        $phone = isset($_GET['mobile']) ? in($_GET['mobile']) : '';
        $verify = isset($_GET['imgcode']) ? in($_GET['imgcode']) : '';
        $uuid = isset($_GET['uuid']) ? in($_GET['uuid']) : '';
        $returnModel = new ReturnModel();
        $url = rtrim($this->config['Wap']['Host'], '/') . '/api/v02/send-reg-phone-sms';
        try {
            $res = Http::doPost($url, ['verify' => $verify, 'uuid' => $uuid, 'phone' => $phone]);
            $res = json_decode($res, true);
            if (!is_array($res)) {
                throw new Exception('请求wap站点异常');
            }
            if ($res['code'] == 0) {
                $returnModel->data->setContent("发送成功");
            } else {
                $returnModel->data->initFail($res['msg'].'sdfs');
            }
        } catch (Exception $e) {
            $returnModel->initFail('请求异常');
            $this->logService->logError('请求发送注册短信接口异常', $e->getMessage(), $this->clientType);
        }
        echo json_encode($returnModel);
    }

    public function check_phone_exist()
    {
        $phone = isset($_GET['mobile']) ? in($_GET['mobile']) : '';
        $phoneCode = isset($_GET['phonecode']) ? in($_GET['phonecode']) : '';
        $returnModel = new ReturnModel();
        $url = rtrim($this->config['Wap']['Host'], '/') . '/api/v02/check-phone-exist';
        try {
            $res = Http::doPost($url, ['phoneCode' => $phoneCode, 'phone' => $phone]);
            $res = json_decode($res, true);
            if (!is_array($res)) {
                throw new Exception('请求wap站点异常');
            }
            $returnModel->data->setContent($res);
        } catch (Exception $e) {
            $returnModel->initFail('请求异常');
            $this->logService->logError('请求检查手机号是否存在接口异常', $e->getMessage(), $this->clientType);
        }
        echo json_encode($returnModel);
    }

    public function user_reg()
    {
        $phone = isset($_GET['mobile']) ? in($_GET['mobile']) : '';
        $phoneCode = isset($_GET['phonecode']) ? in($_GET['phonecode']) : '';
        $passWord = isset($_GET['password']) ? $this->mcrypt->decrypt(base64_decode(in($_GET['password']))) : '';
        $inviteCode = isset($_GET['invitecode']) ? in($_GET['invitecode']) : '';
        $device_name = base64_decode(in($_GET['devicename']));
        $client_info = base64_decode(in($_GET['clientinfo']));
        $returnModel = new ReturnModel();
        $url = rtrim($this->config['Wap']['Host'], '/') . '/api/v02/user-reg';
        try {
            $res = Http::doPost($url, [
                'phoneCode' => $phoneCode,
                'phone' => $phone,
                'passWord' => $passWord,
                'inviteCode' => $inviteCode,
                'source' => $this->clientType
            ]);
            $res = json_decode($res, true);
            if (!is_array($res)) {
                throw new Exception('请求wap站点异常');
            }
            if ($res['code'] == 0) {
                $user = model('User')->getUserById($res['uid']);
                if (!is_array($user) || empty($user)) {
                    throw new CustomException('注册异常,找不到用户信息');
                }
                // 记录登录Token
                $tokenService = new TokenService();
                $token = array();
                $token['username'] = $user['username'];
                $token['expired_time'] = $tokenService->getExpiredTime();
                $token['device_name'] = $device_name;
                $token['client_info'] = $client_info;
                $token['client_type'] = $this->clientType;
                $token['create_time'] = time();
                $token['token'] = $this->mcrypt->encrypt(json_encode(array('uid' => $res['uid'], 'username' => $user['username'], 'expiredtime' => $token['expired_time'])));
                $id = $tokenService->insert($token);
                if ($id < 1) {
                    throw new CustomException('生成用户token失败');
                }
                $res['token'] = $token['token'];
                $res['username'] = $user['username'];
                $res['expiredtime'] = $token['expired_time'];
                unset($res['code'], $res['msg']);
                $returnModel->data->setContent($res);
            } else {
                $returnModel->data->initFail($res['msg']);
            }
        } catch (Exception $e) {
            $returnModel->initFail('请求异常');
            $this->logService->logError('请求注册接口异常', $e->getMessage(), $this->clientType);
        }
        echo json_encode($returnModel);
    }

    public function user_reg_text()
    {
        $returnModel = new ReturnModel();
        $returnModel->data->setContent('注册送188元红包');
        echo json_encode($returnModel);
    }

    public function get_user_ratecoupon_list()
    {
        // 返回值
        $returnModel = new ReturnModel();

        // 参数验证成功标识
        $param_valid_flag = true;

        $pageIndex = intval($_GET['pageindex']);
        $pageSize = 10;
        $validResult = null;
        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }
        if (empty($pageIndex)) {
            $pageIndex = 1;
        }
        $userId = $this->userToken->uid;
        if ($param_valid_flag) {
            try {
                $data = array();

                $couponService = new CouponService();
                $couponList = $couponService->getRateCouponListPage($userId, $pageIndex, $pageSize);
                if (!empty($couponList) && is_array($couponList)) {
                    foreach ($couponList as $key => $val) {
                        $item = array();
                        $item['coupon_type'] = 'rate';
                        $item['coupon_id'] = $val['id'];
                        $item['date_start'] = $val['date_begin'];
                        $item['date_end'] = $val['date_end'];
                        $item['coupon_value'] = strval($val['coupon_rate']);

                        //有效期
                        if(date('Y-m-d', $item['date_start']) > date('Y-m-d', time())){
                            $datetime1 = new DateTime(date('Y-m-d', $item['date_start']));
                            $datetime2 = new DateTime(date('Y-m-d', time()));
                            $interval = $datetime1->diff($datetime2);
                            $item['date_desc'] = $interval->days.'天后可以使用';
                        } else {
                            $item['date_desc'] = '有效期至'.date('Y-m-d', $item['date_end']);
                        }

                        $item['group_name'] = $val['group_name'];
                        $item['add_rate_desc'] = '享'.$val['add_rate_days'].'日加息';
                        $item['add_rate_days'] = $val['add_rate_days'];
                        $item['group_rule'] = "投资满".intval($val['group_qitou'])."元使用";
                        $item['group_qitou'] = $val['group_qitou'];
                        $data[] = $item;
                    }
                }
                if (is_array($data) && !empty($data)) {
                    foreach ($data as $key => $value) {
                        $endDate[$key] = $value['date_end'];
                    }
                    array_multisort($endDate, SORT_DESC, $data);
                }
                $returnModel->data->setContent($data);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('获取账户管理-加息券列表异常'.$ex->getErrorMessage());
                // write log
                $this->logService->logError('获取账户管理-加息券列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }
        // 返回json格式
        echo(json_encode($returnModel));
    }

    //获取可使用代金券列表
    public function get_available_coupon(){
        // 返回值
        $returnModel = new ReturnModel();

        // 请求参数
        $dealId = intval(in($_GET['dealid']));

        // 参数验证成功标识
        $param_valid_flag = true;

        $validResult = null;
        if(!$this->isLogin()){
            $validResult='没有登录，请登录';
            $param_valid_flag=false;
        }

        if(empty($dealId)){
            $validResult .= ',参数标的Id丢失';
            $param_valid_flag = false;
        }

        $userId = $this->userToken->uid;
        //$userId = 3668;

        if ($param_valid_flag) {
            try {
                $data = array();

                $couponService = new CouponService();
                $dealService = new DealService();
                $DealHelper = new DealHelper();
                $deal = $dealService->getDealById_Read($dealId);
                //可用余额
                $userService = new UserService();
                $userData = $userService->getUserDataByUid($userId);
                $avlBal = 0;
                if($userData){
                    $avlBal = $userData['AvlBal'];
                }
                //新手虚拟标没有代金券和优惠券
                if ($deal['cid'] != 6) {
                    $qixian = $DealHelper::LoanPeriod($deal);
                    $xmqx = ($qixian['unit']=='天') ? $qixian['num'] : $qixian['num']*30;

                    $couponList = $couponService->getAvlCoupon($userId, $dealId,$xmqx);
                    if (!empty($couponList) && is_array($couponList)) {
                        foreach ($couponList as $key => $val) {
                            if ($avlBal < $val['group_qitou']) {
                                continue;
                            }
                            $item = array();
                            $item['coupon_type'] = 'normal';
                            $item['coupon_id'] = $val['id'];
                            $item['date_start'] = $val['date_start'];
                            $item['date_end'] = $val['date_end'];
                            $item['coupon_value'] = strval(number_format($val['coupon_value'], 2, '.', ''));

                            //有效期
                            if(date('Y-m-d', $item['date_start']) > date('Y-m-d', time())){
                                $datetime1 = new DateTime(date('Y-m-d', $item['date_start']));
                                $datetime2 = new DateTime(date('Y-m-d', time()));
                                $interval = $datetime1->diff($datetime2);
                                $item['date_desc'] = $interval->days.'天后可以使用';
                            } else {
                                $item['date_desc'] = '有效期至'.date('Y-m-d', $item['date_end']);
                            }

                            $item['group_name'] = $val['group_name'];
                            $item['group_rule'] = "投资满".intval($val['group_qitou'])."元使用";
                            $item['group_qitou'] = $val['group_qitou'];

                            $data[] = $item;
                        }
                    }
                    if ($deal['refund_method'] == 3) {
                    $rateCouponList = $couponService->getAvlRateCoupon($userId, $dealId, $xmqx);
                    if (!empty($rateCouponList) && is_array($rateCouponList)) {
                        foreach ($rateCouponList as $key => $val) {
                            if ($avlBal < $val['group_qitou']) {
                                continue;
                            }
                            $item = array();
                            $item['coupon_type'] = 'rate';
                            $item['coupon_id'] = $val['id'];
                            $item['date_start'] = $val['date_begin'];
                            $item['date_end'] = $val['date_end'];
                            $item['coupon_value'] = strval($val['coupon_rate']);

                            //有效期
                            if(date('Y-m-d', $item['date_start']) > date('Y-m-d', time())){
                                $datetime1 = new DateTime(date('Y-m-d', $item['date_start']));
                                $datetime2 = new DateTime(date('Y-m-d', time()));
                                $interval = $datetime1->diff($datetime2);
                                $item['date_desc'] = $interval->days.'天后可以使用';
                            } else {
                                $item['date_desc'] = '有效期至'.date('Y-m-d', $item['date_end']);
                            }

                            $item['group_name'] = $val['group_name'];
                            $item['add_rate_desc'] = '享'.$val['add_rate_days'].'日加息';
                            $item['add_rate_days'] = $val['add_rate_days'];
                            $item['group_rule'] = "投资满".intval($val['group_qitou'])."元可用";
                            $item['group_qitou'] = $val['group_qitou'];
                            $data[] = $item;
                            }
                        }
                    }
                    if (is_array($data) && !empty($data)) {
                        foreach ($data as $key => $value) {
                            $endDate[$key] = $value['date_end'];
                        }
                        array_multisort($endDate, SORT_ASC, $data);
                    }
                }
                $returnModel->data->setContent($data);
            } catch (CustomException $ex) {
                $returnModel->data->initFail('立即投资-获取可用优惠券列表异常');
                // write log
                $this->logService->logError('立即投资-获取可用优惠券列表异常', $ex->getErrorMessage());
            }
        } else {
            $returnModel->initFail($validResult);
        }
        // 返回json格式
        echo(json_encode($returnModel));
    }

    //兑换代金券（2.10）
    public function exchange_coupon_do_v4()
    {
        // 返回值
        $returnModel = new ReturnModel();
        // 请求参数
        $exchange_code = strtoupper(trim(in($_GET['exchangecode'])));
        // 参数验证成功标识
        $param_valid_flag = true;
        $validResult = null;
        if (!$this->isLogin()) {
            $validResult = '没有登录，请登录';
            $param_valid_flag = false;
        }
        $userId = $this->userToken->uid;
        if ($param_valid_flag && empty($exchange_code)) {
            $validResult .= ',兑换码为空';
            $param_valid_flag = false;
        }
        try {
            if ($param_valid_flag) {
                $coupon_type = '';
                //兑换限制
                $cCouponExRecord = model('CouponExchange')->getExRecord($exchange_code);
                $rCouponExRecord = model('RateCouponExchange')->getExRecord($exchange_code);
                if (!$cCouponExRecord && !$rCouponExRecord) {
                    throw new CustomException(new Exception('不存在的兑换码'));
                }
                if ($cCouponExRecord) {
                    $couponService = new CouponService();
                    $coupon = $couponService->createCoupon($userId, $exchange_code);
                    if (!empty($coupon['message'])) {
                        $this->logService->logInfo('兑换代金券失败', $coupon['message'], $this->clientType);
                        throw new CustomException(new Exception($coupon['message']));
                    } else {
                        $coupon_type = 'normal';
                    }
                }
                if ($rCouponExRecord) {
                    $crypt = new ExchangeCrypt();
                    $crypt->setUserRequest(['exCode'=>$exchange_code], $userId);
                    $token = $crypt->encode();
                    $return = Http::curlPost(rtrim($this->config['Wap']['Host'],'/').'/api/exchange/exchange-rate', ['token'=>$token]);
                    $return = json_decode($return,true);
                    if ($return['error'] != 0) {
                        $this->logService->logInfo('兑换加息券失败', $return['msg'], $this->clientType);
                        throw new CustomException(new Exception($return['msg']));
                    } else {
                        $coupon_type = 'rate';
                    }
                }
                $returnModel->data->setContent(['coupon_type' => $coupon_type]);
            } else {
                throw new CustomException(new Exception($validResult));
            }
        } catch (CustomException $ex) {
            $returnModel->data->initFail($ex->getErrorSubject());
        } catch (Exception $ex) {
            $returnModel->data->initFail('兑换代金券异常');
            $this->logService->logError('兑换代金券异常', $ex->getMessage());
        }
        // 返回json格式
        echo(json_encode($returnModel));
    }

    //获取快捷充值银行限额
    public  function  bank_quota()
    {
        // 返回值
        $returnModel = new ReturnModel();
        try {
            $sql = 'select * from cp_bank_quota where type = 1 and status = 1 order by paixu desc';
            $list = $this->model->query($sql);
            foreach ($list as $k => $v) {
                $item['name'] = $v['bank_name'];
                $item['single_limit'] = ($v['single_limit']/10000).'万元';
                $item['single_card_limit'] = ($v['single_card_day_limit']/10000).'万元';
                $data[] = $item;
            }
            $returnModel->data->setContent($data);
        } catch (CustomException $ex) {
            $returnModel->data->initFail($ex->getErrorSubject());
        } catch (Exception $ex) {
            $returnModel->data->initFail('获取银行限额异常');
            $this->logService->logError('获取银行限额异常', $ex->getMessage());
        }
        // 返回json格式
        echo(json_encode($returnModel));
    }

}
