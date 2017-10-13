//为window绑定滚动事件为function(){}
window.onscroll=function(){
  var li=document.getElementById("article_bg3");
  li.style.visibility=document.body.scrollTop>=800?"visible":"hidden";
}
$("#article_bg3>a").click(
  function(){
    $("body").animate({scrollTop:0}, 500);
  }
);

$(".go").on("click","a",function(){
  $(".gundong>ul").toggleClass('tog');
});



/*页面加载完成后，异步请求产品列表*/
$(function(){
  loadProductByPage(1);
});

/*用户点击分页条中的页号时，实现数据的异步加载*/
$('.pager').on('click','a',function(e){
  e.preventDefault(); //阻止跳转行为
  //获取要跳转的页号
  var pageNum = $(this).attr('href');
  loadProductByPage(pageNum);
});
// console.log(loadProductByPage(1));
//分页加载商品数据，并动态创建分页条
function loadProductByPage(pageNum){
  $.ajax({
    url: 'php/buycar_select.php?pageNum='+pageNum,
    success: function(pager){
      //遍历读取到分页器对象，拼接HTML，追加到DOM树
      var html = ''; 
      $.each(pager.data,function(i,p){
        html += `
          <li>
              <img src="${p.pic}">
              <h4>${p.pname}</h4>
              <h3>￥${p.price}</h3>
              <a href="${p.pid}" class="addcart"><img src="images/pinkcar.png"/></a>
          </li>
        `;
      });
      $('#plist ul').html(html);
      //根据返回的分页数据，动态创建分页条内容
      var html = '';
      if(pager.pageNum-2>0){
        html += `<li><a href="${pager.pageNum-2}">${pager.pageNum-2}</a></li> `;
      }
      if(pager.pageNum-1>0){
        html += `<li><a href="${pager.pageNum-1}">${pager.pageNum-1}</a></li> `;
      }
      html += `<li class="active"><a href="#">${pager.pageNum}</a></li> `;
      if(pager.pageNum+1<=pager.pageCount){
        html += `<li><a href="${pager.pageNum+1}">${pager.pageNum+1}</a></li> `;
      }
      if(pager.pageNum+2<=pager.pageCount){
        html += `<li><a href="${pager.pageNum+2}">${pager.pageNum+2}</a></li> `;
      }
      $('.pager').html(html);
    }
  });
}
var count=0;
/*用户点击“添加到购物车”则实现商品的购物车添加*/
//“添加到购物车”按钮是后来动态添加的，必需使用事件代理
$('#plist').on('click','.addcart',function(e){
  e.preventDefault();
  if(loginName!=null){
    var cloneImg=$(this).parent().find('img').eq(0).clone();
    cloneImg.css({'zIndex':'99','opacity':'.5','borderRadius':'50%','width':'80px','height':'80px','position':'absolute','top':$(this).find('img').eq(0).offset().top,'left':$(this).find('img').eq(0).offset().left}).appendTo($('body')).animate({
      'top':$('.shopping').offset().top,
      'left':$('.shopping').offset().left,
    },2000,function(){
      cloneImg.animate({
        'width':0,
        'height':0
      },function(){
        $('.shopping>a>span').html(++count);
        $(this).detach();  
        $(function(){
          $.ajax({
            url: 'php/buycar_chaxun.php',
            data: {uname: sessionStorage['loginName']||localStorage['loginName']},
            success: function(detailList){
              //遍历购物车详情列表，拼接HTML片段
              var html = '';
              $.each(detailList, function(i, d){
                html += `
                <li>
                  <img src="${d.pic}">
                  <span>${d.pname.slice(0,2)}</span>
                  <span>${d.count}</span>
                  <b>￥${d.price*d.count}</b>
                  <a href='${d.did}'>&times;</a>
                </li>  
                `;
              });
              $('.nopro').css('display','none');
              $('.hpro').css('display','block').html(html);
            }
          });
        });
      }) 
    });
    var pid = $(this).attr('href');
    //发起异步请求
    $.ajax({
      type: 'POST',
      url: 'php/buycar_add.php',
      data: {uname:sessionStorage['loginName']||localStorage['loginName'],pid:pid},
      success: function(obj){
        //console.log(obj.pid);
        //alert('添加成功！该商品已购买的数量：'+obj.count);
      }
    });
  }else{
    $('.zhe').css('display','block').children().children('h2').html('请您先登录');
  }
});


///**功能点7：点击“查看购物车”跳转到购物车详情页，传递当前登录的用户名**/
//$('div#header').on('click','#settle_up',function(){
  ////JS跳转到购物车详情页
  //location.href='shoppingcart.html';
//});




$(".zhe>div:last-child>span").click(
  function(){
    $(".zhe").css("display","none");  
  }
);