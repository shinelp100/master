// pages/licai/licai.js
Page({
  data:{
    indicatorDots: true,
    autoplay: true,
    interval: 3000,
    duration: 100,
    text:"我是页面的消息"
  },
  onLoad:function(options){
    // 页面初始化 options为页面跳转所带来的参数
    let that = this;
    wx.request({
      url:"https://app.wangcaigu.com/api/v35/index/get-init-data?clienttype=ios",
      header: {
          'content-type': 'application/json'
      },
      success: function(res) {
        if(res.data.code === 0){
          that.setData({
            imgUrls:res.data.data.content.carousel,
            totalAmount:res.data.data.content.txTotalAmount,
            profitTotalAmount:res.data.data.content.profitTotalAmount,
            newUserDeal:res.data.data.content.newUserDeal[0],
            recomandDeal:res.data.data.content.recomandDeal[0]
          });
        } else {
          // console.log(res.data.code)
        }
      }
    });
  },
  onReady:function(){
    // 页面渲染完成
  },
  onShow:function(){
    // 页面显示
  },
  onHide:function(){
    // 页面隐藏
  },
  onUnload:function(){
    // 页面关闭
  }
})