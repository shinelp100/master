/**
 * Created by lw on 2017/5/22.
 */
require("../less/index.less");
require("../css/index.css");
import mobile from "../../libs/commonJs/check_mobile";

var phoneNum = "18355552070";
if (mobile(phoneNum)) {
    alert("yes!");
} else {
    alert("no");
}