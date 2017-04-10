<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('public/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/home_model.css')}}" rel="stylesheet">
    <title>@yield('title','首页')</title>
</head>
<body>
<!--  **************************** 第一行nav ***************************  -->
<nav class="navbar navbar-inverse navbar-fixed-top" id="nav">
    <div class="container">
            <form class="navbar-form" id="homeindex_searchf">
                <input type="text"  id="homeindex_search" placeholder="请搜索你的内容" >
                <a href=""><img src="{{asset('picture/icon/search.png')}}" id="search_pic"></a>
            </form>
    </div>
    <ul id="search_info">
        <a href=""><li><img src="{{asset('picture/icon/8.png')}}">可能认识的人</li></a>
        <a href=""><li><img src="{{asset('picture/icon/5.png')}}">我的好友</li></a>
        <a href=""><li><img src="{{asset('picture/icon/3.png')}}">个人主页</li></a>
    </ul>
</nav>
<!-- ***************************** 第一行nav结束 ********************************** -->
<!-- ***************************** 左边的列开始 ********************************** -->
<div id="model_left">
    <ul>
        <a href=""><li><img src="{{asset('picture/icon/1.png')}}">首页</li></a>
        <a href=""><li><img src="{{asset('picture/icon/2.png')}}">首页</li></a>
        <a href=""><li><img src="{{asset('picture/icon/3.png')}}">首页</li></a>
        <a href=""><li><img src="{{asset('picture/icon/4.png')}}">首页</li></a>
        <a href=""><li><img src="{{asset('picture/icon/5.png')}}">首页</li></a>
        <a href=""><li><img src="{{asset('picture/icon/6.png')}}">首页</li></a>
    </ul>
</div>
<!-- ***************************** 左边的列结束 ********************************** -->
<!-- ***************************** 搜索框下的一行开始 ********************************** -->
<div id="change_infof">
    <div id="change_info">
        <ul>
             <a href=""><li>新鲜事</li></a>
             <a href=""><li>原创内容</li></a>
             <a href=""><li>关注内容</li></a>
        </ul>
    </div>
</div>
<!-- ***************************** 搜索框下的一行结束 ********************************** -->
<div style="width:100%;height:1000px;"></div>
<!-- ****************************** jquery开始到最后 ************************************** -->
<script src="{{asset('public/js/jquery-1.8.3.min.js')}}"></script>
<script>
        //点击搜索框触发背景色
        $(function(){
            $('#change_info li:first').css({
                'border-bottom':'3px solid blue'
            });
            $('#homeindex_search').click(function(){
                $('#homeindex_search').css({
                    'border':'2px solid #ace',
                    'outline':'none'
                });
                $('#search_info').css({
                    'display':'block',
                    'box-shadow':'0 2px 3px 0 #ccc',
                })
            });
            //失去失去搜索框焦点时失去边框色
            $('#homeindex_search').blur(function(){
                $('#homeindex_search').css({'border-color':'#1C68A4'});
                $('#search_info').css({
                    'display':'none'
                })
            });
            //移入搜索框下面的字显示背景色
            $('#search_info li').mousemove(function(){
                $(this).css({'background-color':'#ccc'});
            });
            //移出搜索框下面的字移除背景色
            $('#search_info li').mouseout(function(){
                $(this).css({'background-color':''});
            });
//           阿贾克斯方法用后才click
//            $('#change_info li').click(function(){
//               $(this).css({
//                    'border-bottom':'3px solid blue',
//                })
//            });
            $(window).scroll(function(){
                if(document.body.scrollTop>200){
                    $('#change_infof').slideUp();
                }
            });
            $(window).scroll(function(){
                if(document.body.scrollTop<200){
                    $('#change_infof').slideDown();
                }
            })
        })
</script>
</body>
</html>