/**
 * Created by lw on 2016/12/1.
 */
$(function () {
    var datas ={"status":true,"message":"成功","data":{"totalAmount":"10000","totalIncome":"10.3","totalDays":"768","monthsTotalAmount":{"title":["8月","9月","10月","11月","12月","17年1月"],"amount":["0.75","0.85","0.75","1.15","1.75","0.75"]},"monthsReorderAmount":{"title":["8月","9月","10月","11月","12月","17年5月"],"amount":["0.15","0.85","0.25","1.55","1.75","0.75"]},"sexDetail":{"boy":{"title":"男","countRate":0.45,"amountRate":0.66},"girl":{"title":"女","countRate":0.55,"amountRate":0.34}},"ageDetail":{"title":["90后","80后","70后","60后","其他"],"countRate":["15","20","25","55","5"],"amountRate":["2","20","25","15","5"]},"addressDetail":[{"name":"北京","amountRate":"0.23"},{"name":"上海","amountRate":"0.23"},{"name":"深圳","amountRate":"0.23"},{"name":"天津","amountRate":"0.23"},{"name":"河北","amountRate":"0.23"},{"name":"广东","amountRate":"0.23"},{"name":"大连","amountRate":"0.23"},{"name":"大连","amountRate":"0.23"},{"name":"大连","amountRate":"0.23"},{"name":"大连","amountRate":"0.23"},{"name":"大连","amountRate":"0.23"}]}};
    // var queryDate = '2016-02-10';
    // $.ajax({
    //     type: 'GET',
    //     url: 'http://ljk.m.wangcaigu.cn/content/report/detail?month=2016-02-10',
    //     dataType: 'json',
    //     success: function(data){
    //         datas=data.data;
            initPage(datas.data);
            var pageslide = new PageSlider({
                pages: $('.page-wrap .page'),
                gestureFollowing: false,  //开启手势跟随
                // hasDot: false,
                preventDefault: true,  //可选，是否阻止默认行为
                rememberLastVisited: true,
                animationPlayOnce: true, //可选，切换页面时，动画只执行一次
                dev: false, //0|1|2|3|...
                onbeforechange: function () {
                    var flag = this.index;
                    console.log(flag);
                    switch (flag){
                        case 2:
                            animateLine(datas.data);
                            break;
                        case 3:
                            paintTable1(datas.data);
                            break;
                        case 4:
                            paintTable2(datas.data);
                            break;
                        case 5:
                            paintTable3(datas.data);
                            break;
                    }
                }
            });
        // },
        // error: function(data){
        //     var datas = eval('('+data+')');
        //     alert(data);
        //     // history.go(-1);
        // }
    // });
});

function initPage(data){
    $('#totalAmount').html(data.totalAmount);
    $('#totalIncome').html(data.totalIncome);
    $('#totalDays').html(data.totalDays);
    $('#totalAmountShort').html(parseFloat(data.totalAmount/100000000).toFixed(2)+'亿');
    var addressDetail = data.addressDetail;
    $('#area li').each(function () {
        $(this).find('.lf').html(addressDetail[$(this).index()].name);
        $(this).find('.rg').html(addressDetail[$(this).index()].amountRate+'%');
    })
    var month =data.monthsTotalAmount.title;
    $('.month li').each(function(){
        $(this).html(month[$(this).index()]);
    });
};

function animateLine(data){
    var amount = data.monthsTotalAmount.amount,
    f = 0;
    var timer = setInterval(function () {
        if (f < amount.length - 1) {
            $('.special li').eq(f).animate({
                'height': amount[f] * 2 + 0.46 + 'rem',
            }, 500, 'ease-out', function () {
                $(this).find('p').html(amount[f - 1]);
            });
        } else {
            $('.special li').eq(f).animate({
                'height': amount[f] * 2 + 1.17 + 'rem',
            }, 500, 'ease-out', function () {
                $(this).find('p').html(amount[f - 1]);
                if (f == amount.length) {
                    $(this).find('p').css('backgroundImage', 'url("../images/mark.png")');
                    clearInterval(timer);
                }
            });
        }
        f++;
    }, 800)
};

function paintTable1(data){
    //    table1
    var month = data.monthsReorderAmount.title,
        amount = data.monthsReorderAmount.amount;
    var myChart1 = echarts.init(document.getElementById('table1'));
    var option1 = {
        grid: {
            x: 55,
            x2: 60,
            y2: 20,
        },
        textStyle:{
            color:'#798796',
            fontSize:11,
        },
        xAxis: [
            {
                type: 'value',
                splitNumber: 4,
                name: '单位（万）',
                nameGap: 5,
                boundaryGap: [0, 0.1],
                splitLine: {
                    lineStyle: {
                        color: '#434a50',
                        type: 'dashed',
                    }
                },
                axisTick: {
                    inside: true,
                    length: 5,
                    lineStyle: {color: '#FFF'}

                },
            }
        ],
        yAxis: [
            {
                type: 'category',
                axisLine: {
                    onZero: true,
                    lineStyle: {
                        width: 2
                    },
                },
                axisTick: {
                    show: false,
                },
                data: [month[0], month[1], month[2], month[3], month[4], {
                    value: month[5],
                    // 突出
                    textStyle: {
                        color: '#e84b4b'
                    }
                }],
            }
        ],
        animationEasing: 'quartich',
        series: [
            {
                name: '数据对比-股东追加投资',
                type: 'bar',
                itemStyle: {
                    normal: {
                        color: '#259bf5',
                    },
                },
                label: {
                    normal: {
                        position: 'right',
                        show: true,
                        textStyle: {
                            color: '#259bf5',
                            fontSize:15,
                        },
                    }
                },
                data: [amount[0], amount[1], amount[2], amount[3], amount[4], {
                    value: amount[5],
                    itemStyle: {
                        normal: {
                            color: '#e84b4b',
                        },
                    },
                    label: {
                        normal: {
                            show: true,
                            textStyle: {
                                color: '#e84b4b',
                                fontSize:18,
                            },
                        }
                    },
                }],
                barCategoryGap: '50%',
            }
        ]
    };
    // 使用刚指定的配置项和数据显示图表。
    myChart1.setOption(option1);
}

function paintTable2(data){
    //    table2
    var boy = data.sexDetail.boy,
        girl = data.sexDetail.girl;
    var myChart2 = echarts.init(document.getElementById('table2'));
    var myChart3 = echarts.init(document.getElementById('table3'));
    var option2 = {
        title : {
            x:'center',
            y:'center',
            text: '投资人数占比',
            textStyle:{
                color:'#fff',
                fontSize:12,
            },
        },
        animationEasing:'linear',
        series : [
            {
                name:'投资人数占比',
                type:'pie',
                legendHoverLink:false,
                hoverAnimation:false,
                radius : ['85%', '100%'],
                label:{
                    normal:{
                        show : true,
                        position : 'outside',
                        textStyle : {
                            fontSize : '15',
                            fontWeight : 'bold'
                        }
                    },
                },
                labelLine:{
                    normal:{
                        length:10,
                        length2:5
                    }
                },
                data:[
                    {
                        value:girl.countRate,
                        name:girl.countRate+'%',
                        itemStyle:{
                            normal:{
                                color:'#e84b4b',
                            },
                        },
                    },
                    {
                        value:boy.countRate,
                        name:boy.countRate+'%',
                        itemStyle:{
                            normal:{
                                color:'#259bf5',
                            },
                        },
                    },
                ]
            },
        ]
    };
    var  option3 = {
        title : {
            x:'center',
            y:'center',
            text: '投资金额占比',
            textStyle:{
                color:'#fff',
                fontSize:12,
            },
        },
        animationEasing:'linear',
        series : [
            {
                name:'投资金额占比',
                type:'pie',
                legendHoverLink:false,
                hoverAnimation:false,
                radius : ['85%', '100%'],
                label:{
                    normal:{
                        show : true,
                        position : 'outside',
                        textStyle : {
                            fontSize : '15',
                            fontWeight : 'bold'
                        }
                    },
                },
                labelLine:{
                    normal:{
                        length:10,
                        length2:5
                    }
                },
                data:[
                    {
                        value:girl.amountRate,
                        name:girl.amountRate+'%',
                        itemStyle:{
                            normal:{
                                color:'#e84b4b',
                            },
                        },
                    },
                    {
                        value:boy.amountRate,
                        name:boy.amountRate+'%',
                        itemStyle:{
                            normal:{
                                color:'#259bf5',
                            },
                        },
                    },
                ]
            },
        ]
    };
    myChart2.setOption(option2);
    myChart3.setOption(option3);
}
function paintTable3(data){
    //    table4

    var title = data.ageDetail.title,
        countRate = data.ageDetail.countRate,
        amountRate = data.ageDetail.amountRate;
    var myChart4 = echarts.init(document.getElementById('table4'));
    // 指定图表的配置项和数据
    var option4 = {
        textStyle:{
            color:'#798796',
            fontSize:11,
        },
        legend: {
            show:true,
            data:['年龄','投资'],
            top:'bottom',
        },
        animationEasing: 'quartich',
        xAxis: {
            type:'category',
            nameGap:5,
            data: title,
            axisTick:{
                show:false,
                interval:0,
            },
            axisLine:{
                lineStyle:{
                    color:'#949697'
                }
            },
        },
        yAxis: {
            splitNumber:2,
            max:100,
            name:'单位（%）',
            splitLine:{
                lineStyle:{
                    type:'dotted',
                    color:'#3e464d',
                }
            },
            axisLine:{
                lineStyle:{
                    color:'#949697'
                }
            },
            axisTick:
            {
                inside:'inside',
                length:10
            },
            axisLabel:{
                show:true,
                formatter:'{value}%',
            },
        },
        grid: { // 控制图的大小，调整下面这些值就可以，
            x: 40,
        },
        series: [
            {
                name: '年龄',
                type: 'bar',
                label:{
                    normal:{
                        show: true,
                        position:'top',
                        textStyle:{
                            color:'#fff',
                            fontSize:11,
                        },
                    }
                },
                itemStyle:{
                    normal:{
                        color:'rgba(255,255,255,1)',
                    },

                },
                data: countRate,
                zlevel:10000,
                barCategoryGap: '40%',
            },
            {
                name: '投资',
                type: 'bar',
                itemStyle:{
                    normal:{
                        color:'rgba(37,155,245,1)',
                        label : {
                            show: true,
                            position: 'top',
                            textStyle:{
                                color:'rgba(37,155,245,1)',
                                fontSize:11,
                            },
                        },
                    },

                },
                data: amountRate,
            }
        ],
        barGap: '0%',
    };
    // 使用刚指定的配置项和数据显示图表。
    myChart4.setOption(option4);
}
// https://ljk.m.wangcaigu.cn/content/report/detail