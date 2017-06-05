import mobile from "../../../module/check_mobile.js"

// function check_webpack(){
    var phone = 18355552070;
    var isPhone = mobile(phone);
    if(isPhone){
        alert("是正确的手机号（添加了webpack --watch 实时编译4）");
    } else {
        alert("不是正确的手机号");
    }
// }

// export default check_webpack;
