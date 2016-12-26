var WDJF = {};

/**
 * 为金额添加千分位显示
 * @param double|string amount 金额的数字或字符串
 * @param boolean stripTrailingZeros 末尾是否保留0标志位,为真时,去掉小数点右边多余的零,否则保留两位小数
 * @returns string 金额的千分位显示字符串
 */
WDJF.numberFormat = function (amount, stripTrailingZeros) {
    if (stripTrailingZeros) {
        return (new Number(amount) + '').replace(/\d{1,3}(?=(\d{3})+(\.\d*)?$)/g, '$&,');
    } else {
        return (new Number(amount).toFixed(2) + '').replace(/\d{1,3}(?=(\d{3})+(\.\d*)?$)/g, '$&,');
    }
};

/**
 * 除法运算.
 */
function accDiv(arg1, arg2)
{
    var t1 = 0, t2 = 0, r1, r2;
    try {
        t1 = arg1.toString().split(".")[1].length
    } catch (e) {
    }
    try {
        t2 = arg2.toString().split(".")[1].length
    } catch (e) {
    }
    with (Math) {
        r1 = Number(arg1.toString().replace(".", ""))
        r2 = Number(arg2.toString().replace(".", ""))
        return (r1 / r2) * pow(10, t2 - t1);
    }
}

/**
 * 乘法运算.
 */
function accMul(arg1, arg2)
{
    var m = 0, s1 = arg1.toString(), s2 = arg2.toString();
    try {
        m += s1.split(".")[1].length
    } catch (e) {
    }
    try {
        m += s2.split(".")[1].length
    } catch (e) {
    }
    return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)
}

/**
 * 加法运算.
 */
function accAdd(arg1, arg2)
{
    var r1, r2, m;
    try {
        r1 = arg1.toString().split(".")[1].length
    } catch (e) {
        r1 = 0
    }
    try {
        r2 = arg2.toString().split(".")[1].length
    } catch (e) {
        r2 = 0
    }
    m = Math.pow(10, Math.max(r1, r2))
    return (arg1 * m + arg2 * m) / m
}

/**
 * 减法函数.
 */
function accSub(arg1, arg2)
{
    var r1, r2, m, n;
    try {
        r1 = arg1.toString().split(".")[1].length;
    } catch (e) {
        r1 = 0;
    }
    try {
        r2 = arg2.toString().split(".")[1].length;
    } catch (e) {
        r2 = 0;
    }
    m = Math.pow(10, Math.max(r1, r2));
    n = (r1 >= r2) ? r1 : r2;
    return ((arg1 * m - arg2 * m) / m).toFixed(n);
}

/**
 * 取模运算.
 */
function accMod(arg1, arg2)
{
    var r1, r2, m, n;
    try {
        r1 = arg1.toString().split(".")[1].length;
    } catch (e) {
        r1 = 0;
    }
    try {
        r2 = arg2.toString().split(".")[1].length;
    } catch (e) {
        r2 = 0;
    }
    m = Math.pow(10, Math.max(r1, r2));
    n = (r1 >= r2) ? r1 : r2;
    var r = (((arg1 * m) % (arg2 * m)) / m).toFixed(n);
    return r > 0 ? r : "0";
}

function mianmi(url)
{
    var message = '将为您开通免密支付功能，之后进行投资时，无需输入资金托管账户支付密码。但是，当您需要提现时，为确保您的资金安全，仍需输入支付密码。';
    if (!url) {
        var url = '/user/qpay/binding/umpmianmi';
    }
    alertMessage(message, url, false);
}

function alertMessage(message, url, reload)
{
    var html = '<div class="mask" style="display: block"></div><div class="result-pop pop-open mianmi_message" style="display: block"><p class="result-pop-hender">提示<img class="close" id = "box_close" src="/images/login/close.png" alt="" style = "float: right;margin-top: 15px;margin-right: 15px;cursor: pointer;"></p> <p class="result-pop-content">' + message + '</p> ';
    html = html + '<p class="result-pop-phone">如遇到问题请拨打我们的客服热线：400-101-5151(8:30~20:00)</p>';
    html = html + ' <p><span class="link-confirm" id="mianmi_confirm">确定</span></p></div>';
    var mask = $('body .mask');
    var mianmi_message = $('body .mianmi_message');

    if (mask.length == 0 && mianmi_message.length == 0) {
        $('body').append(html);
    } else {
        mask.show();
        mianmi_message.show();
    }

    $('#mianmi_confirm').click(function() {
        if (url && url != '') {
            window.location.href= url;
        } else {
            window.location.reload();
        }

        document.documentElement.style.overflow = 'auto';
    });

    $('#box_close').click(function() {
        if(reload == false) {
            $('body .mask').hide();
            $('body .mianmi_message').hide();
        } else {
            if (url && url != '') {
                window.location.href= url;
            } else {
                window.location.reload();
            }
        }

        document.documentElement.style.overflow = 'auto';   //解除页面上下滚动效果
    });

    document.documentElement.style.overflow = 'hidden';   //禁用页面上下滚动效果

    //键盘按下ESC时关闭窗口!
    $(document).keydown(function(e) {
        if (e.keyCode === 27) {
            if (reload == false) {
                $('body .mask').hide();
                $('body .mianmi_message').hide();
            } else {
                if (url && url !== '') {
                    window.location.href = url;
                } else {
                    window.location.reload();
                }
            }

            document.documentElement.style.overflow = 'auto';
        }
    });
}