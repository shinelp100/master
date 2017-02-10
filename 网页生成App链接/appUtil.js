/**
 * Created by yabusai on 1/21/16.
 * 网页与App 交互,生成特定规则的URL参数
 */




/**
 * 在js中if条件为null/undefined/0/NaN/""表达式时，统统被解释为false,此外均为true .
 */
function isNull(arg1)
{
    return !arg1 && arg1!==0 && typeof arg1!=="boolean"?true:false;
}



/**
 * 生成APP 登录 规则
 * <a href=".cn?viewtype=login&needlogin=yes&successurl=xxxxx"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateLogin(successurl){
    if(isNull(successurl)){
        successurl='';
    }else{
        successurl = encodeURIComponent(successurl);
    }

    return Base64.encode('viewtype=login&needlogin=yes&successurl='+successurl);
}

/**
 * 生成APP 首页 规则
 * <a href=".cn?viewtype=home"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateHome(){
    return Base64.encode('viewtype=home');
}

/**
 * 生成APP 理财列表 规则
 * <a href=".cn?viewtype=list"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateList(select_index){
    return Base64.encode('viewtype=list&select_index='+select_index);
}

/**
 * 生成APP 标详情 规则 (有参数)
 * <a href=".cn?viewtype=dealid"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateDealDtail(dealId){
    return Base64.encode('viewtype=dealid&dealID='+dealId+'&deal_id='+dealId);
}

/**
 * 生成APP 债权详情 规则 (有参数)
 * <a href=".cn?viewtype=creditid"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateCreditDtail(dealId){
    return Base64.encode('viewtype=creditid&dealId='+dealId+'&credit_id='+dealId);
}

/**
 * 生成APP 账户中心 规则
 * <a href=".cn?viewtype=info&needlogin=yes"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateMemberInfo(){
    return Base64.encode('viewtype=info&needlogin=yes');
}

/**
 * 生成APP 安全中心 规则
 * <a href=".cn?viewtype=safe&needlogin=yes"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateSafeCenter(){
    return Base64.encode('viewtype=safe&needlogin=yes');
}

/**
 * 生成APP 充值 规则
 * <a href=".cn?viewtype=recharge&needlogin=yes"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateRecharge(){
    return Base64.encode('viewtype=recharge&needlogin=yes');
}

/**
 * 生成APP 提现 规则
 * <a href=".cn?viewtype=tixian&needlogin=yes"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateTiXian(){
    return Base64.encode('viewtype=tixian&needlogin=yes');
}

/**
 * 生成APP 账户管理 规则
 * <a href=".cn?viewtype=safe&needlogin=yes"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateAccount(){
    return Base64.encode('viewtype=account&needlogin=yes');
}

/**
 * 生成APP 累计收益 规则
 * <a href=".cn?viewtype=myshouyi&needlogin=yes"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateMyShouYi(){
    return Base64.encode('viewtype=myshouyi&needlogin=yes');
}

/**
 * 生成APP 我的理财 规则 (有参数)
 * <a href=".cn?viewtype=mylicai&needlogin=yes"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateMyLiCai(segIndex){
    return Base64.encode('viewtype=mylicai&needlogin=yes&segIndex='+segIndex+'&select_index='+segIndex);
}

/**
 * 生成APP 交易明细 规则
 * <a href=".cn?viewtype=myjiaoyi&needlogin=yes"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateMyJiaoYi(){
    return Base64.encode('viewtype=myjiaoyi&needlogin=yes');
}

/**
 * 生成APP 我的代金券 规则
 * <a href=".cn?viewtype=mycoupon&needlogin=yes"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateMyCoupon(){
    return Base64.encode('viewtype=mycoupon&needlogin=yes');
}

/**
 * 生成APP 我的债券 规则
 * <a href=".cn?viewtype=mycredite&needlogin=yes"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateMyCredit(){
    return Base64.encode('viewtype=mycredite&needlogin=yes');
}

/**
 * 生成APP 回款计划 规则
 * <a href=".cn?viewtype=myrefundplan&needlogin=yes"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateMyRefoundPlan(){
    return Base64.encode('viewtype=myrefundplan&needlogin=yes');
}

/**
 * 生成APP 理财计算器 规则
 * <a href=".cn?viewtype=mycalculator&needlogin=yes"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateMyCalculator(){
    return Base64.encode('viewtype=mycalculator&needlogin=yes');
}

/**
 * 生成APP 自动投标 规则
 * <a href=".cn?viewtype=myautobid&needlogin=yes"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateMyAutoBid(){
    return Base64.encode('viewtype=myautobid&needlogin=yes');
}

/**
 * 生成APP 测试不匹配 规则
 * <a href=".cn?viewtype=myautobid&needlogin=yes"></a>
 * <a href=".cn?appparams=base64string"></a>
 */
function generateTest(){
    return Base64.encode('viewtype=myautobid111&needlogin=yes');
}