// JavaScript Document
// new Vue({
//       el: '#app',
//       data: function(){
//         return { visible: false }
//       }
//     })
var Main = {
    methods: {
      handleSizeChange(val) {
        console.log(`每页 ${val} 条`);
      },
      handleCurrentChange(val) {
        this.currentPage = val;
        console.log(`当前页: ${val}`);
      }
    },
    data() {
      return {
        currentPage1: 5,
        currentPage2: 5,
        currentPage3: 5,
        currentPage4: 4
      };
    }
  }
var Ctor = Vue.extend(Main)
new Ctor().$mount('#app')
$(function(){
    var min_height = 153;
    $(window).scroll(function() {
        //获取窗口的滚动条的垂直位置      
        var s = $(window).scrollTop();
        //当窗口的滚动条的垂直位置大于页面的最小高度时 
        if (s > min_height) {
           $("#daohangbiao").addClass("fi");
       $("#daohangshouye").addClass("tu");
        } else {
       $("#daohangbiao").removeClass("fi");
           $("#daohangshouye").removeClass("tu");
    };
    });
})