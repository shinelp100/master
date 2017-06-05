/**
 * Created by lw on 2017/5/22.
 */
require("../less/index.less");
require("../css/index.css");
import mobile from "../../libs/commonJs/check_mobile";
import toObject from "../../libs/commonJs/toObject";

var phoneNum = "18355552070",arr=["lw","yangjie","baby"];
if (mobile(phoneNum)) {
    console.log(toObject(arr));
    alert("yes!");
} else {
    alert("no");
}