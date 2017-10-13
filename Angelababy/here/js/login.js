var uname_value=null;
var upwd_value=null;

/*注册验证*/
$('#uname').blur(function(){//失去焦点
  if(/^1[3-9]\d{9}$/.test($(this)[0].value)){
    $(this).siblings('b').css('display','none');//显示隐藏
    uname_value=true;
    return uname_value;
  }else if($(this)[0].value===""){
    $(this).siblings('b').css('display','inline-block').html("手机号不能为空");
  }else{
    $(this).siblings('b').css('display','inline-block').html("手机号格式错误");
  }
});
$('#upwd').blur(function(){
  if(/^[0-9a-zA-Z]{6,12}$/.test($(this)[0].value)){
    $(this).siblings('b').css('display','none');
    upwd_value=true;
    return upwd_value;
  }else if($(this)[0].value===""){
    $(this).siblings('b').css('display','inline-block').html("密码不能为空");
  }else{
    $(this).siblings('b').css('display','inline-block').html("密码格式错误");
  }
});
$('#btn').click(function(){//点击登录按钮
  //表单序列化，获得所有的用户输入
  var data = $('#login_form').serialize();
  //表单序列化的结果：'uname=xxx&upwd=xxx&age=xxx'
  console.log(data);
  //异步提交请求数据
  if(uname_value&&upwd_value){//&&$('#agree')[0].checked
    $.ajax({ //异步的javascript 和 xml
      type: 'POST',
      url: 'php/login.php',
      data: data,
      success: function(txt, msg, xhr){
        if(txt=='ok'){  //登录成功
          var loginName = $('[name="uname"]').val();
          if($('#agree')[0].checked){
            localStorage.setItem('loginName',loginName);
          }else{
            sessionStorage.setItem('loginName',loginName);
          }
          alert('登录成功');//弹框登陆成功
          location.href="index.html";
        }else { //登录失败
          alert('登录失败');
        }
      }
    });
  }
});


