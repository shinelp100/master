function isNull(arg1){return !arg1&&arg1!==0&&typeof arg1!=="boolean"?true:false}function generateLogin(successurl){if(isNull(successurl)){successurl=""}else{successurl=encodeURIComponent(successurl)}return Base64.encode("viewtype=login&needlogin=yes&successurl="+successurl)}function generateHome(){return Base64.encode("viewtype=home")}function generateList(select_index){return Base64.encode("viewtype=list&select_index="+select_index)}function generateListWithSub(select_index,inner_index){return Base64.encode("viewtype=list&select_index="+select_index+"&inner_index="+inner_index)}function generateDealDtail(dealId){return Base64.encode("viewtype=dealid&dealID="+dealId+"&deal_id="+dealId)}function generateCreditDtail(dealId){return Base64.encode("viewtype=creditid&dealId="+dealId+"&credit_id="+dealId)}function generateMemberInfo(){return Base64.encode("viewtype=info&needlogin=yes")}function generateSafeCenter(){return Base64.encode("viewtype=safe&needlogin=yes")}function generateRecharge(){return Base64.encode("viewtype=recharge&needlogin=yes")}function generateTiXian(){return Base64.encode("viewtype=tixian&needlogin=yes")}function generateAccount(){return Base64.encode("viewtype=account&needlogin=yes")}function generateMyShouYi(){return Base64.encode("viewtype=myshouyi&needlogin=yes")}function generateMyLiCai(segIndex){return Base64.encode("viewtype=mylicai&needlogin=yes&segIndex="+segIndex+"&select_index="+segIndex)}function generateMyJiaoYi(){return Base64.encode("viewtype=myjiaoyi&needlogin=yes")}function generateMyCoupon(){return Base64.encode("viewtype=mycoupon&needlogin=yes")}function generateMyCredit(){return Base64.encode("viewtype=mycredite&needlogin=yes")}function generateMyRefoundPlan(){return Base64.encode("viewtype=myrefundplan&needlogin=yes")}function generateMyCalculator(){return Base64.encode("viewtype=mycalculator&needlogin=yes")}function generateMyAutoBid(){return Base64.encode("viewtype=myautobid&needlogin=yes")}function generateTest(){return Base64.encode("viewtype=myautobid111&needlogin=yes")};