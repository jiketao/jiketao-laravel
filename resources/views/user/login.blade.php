@extends('layouts.index')

@section('title', '注册/登录')

@section('content')
<div class="container">
    <div class="header text-center">
        <h1>
            <a href="/" class="logo">
                <img src="http://static.segmentfault.com/v-56a05f82/global/img/logo-b.svg" alt="SegmentFault">
            </a>
        </h1>
        <p class="description text-muted">欢迎加入社区</p>
    </div>
    <div class="row bg-white login">
        <div class="col-md-4 col-sm-12 col-md-push-7 login-wrap">
            <h1 class="h4 text-muted login-title mb30">用户登录</h1>

            <form action="/auth/login" method="POST" role="form" class="mt30">
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" class="form-control" name="email" required="" placeholder="hello@geeektao.com">
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">密码</label>
                    <input type="password" class="form-control" name="password" required="" placeholder="密码">
                </div>
                <div class="form-group clearfix">
                    <div class="checkbox pull-left">
                        <label><input name="remember_token" type="checkbox" value="1" checked=""> 记住登录状态</label>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right pl20 pr20">登录</button>
                </div>
            </form>
            <p class="h4 text-muted visible-xs-block mb30 hidden-xs">快速登录</p>
            <div class="widget-login mt30">
                <p class="text-muted mt5 mr10 pull-left hidden-xs">快速登录</p>
                <a href="/user/oauth/weixin" class="btn pl5 pr5 mb5 btn-default btn-sm btn-sn-wechat visible-xs hidden"><span class="icon-sn-wechat"></span><strong class="visible-xs-inline">微信账号</strong></a>
                <a href="/user/oauth/google" class="btn pl5 pr5 mb5 btn-default btn-sm btn-sn-google visible-xs"><span class="icon-sn-google"></span><strong class="visible-xs-inline">Google 账号</strong></a>
                <a href="/user/oauth/google" class="btn pl5 pr5 mb5 btn-default btn-sm btn-sn-google hidden-xs"><span class="icon-sn-google"></span><strong class="visible-xs-inline">Google 账号</strong></a>
                <a href="/user/oauth/github" class="btn pl5 pr5 mb5 btn-default btn-sm btn-sn-github hidden-xs"><span class="icon-sn-github"></span><strong class="visible-xs-inline">Github 账号</strong></a>
                <a href="/user/oauth/github" class="btn pl5 pr5 mb5 btn-default btn-sm btn-sn-github visible-xs"><span class="icon-sn-github"></span><strong class="visible-xs-inline">Github 账号</strong></a>
                <a href="/user/oauth/weibo" class="btn pl5 pr5 mb5 btn-default btn-sm btn-sn-weibo hidden-xs"><span class="icon-sn-weibo"></span><strong class="visible-xs-inline">新浪微博账号</strong></a>
                <a href="/user/oauth/qq" class="btn pl5 pr5 mb5 btn-default btn-sm btn-sn-qq visible-xs"><span class="icon-sn-qq"></span><strong class="visible-xs-inline">QQ 账号</strong></a>
                <a href="/user/oauth/qq" class="btn pl5 pr5 mb5 btn-default btn-sm btn-sn-qq hidden-xs"><span class="icon-sn-qq"></span><strong class="visible-xs-inline">QQ 账号</strong></a>
                <a href="/user/oauth/weixin" class="btn pl5 pr5 mb5 btn-default btn-sm btn-sn-wechat hidden-xs"><span class="icon-sn-wechat"></span><strong class="visible-xs-inline">微信账号</strong></a>
                <button type="button" class="btn btn-default btn-sm btn-sn-more" id="showMore">...</button>
                <a href="/user/oauth/twitter" class="btn pl5 pr5 mb5 btn-default btn-sn-twitter btn-sm hidden"><span class="icon-sn-twitter"></span></a>
                <a href="/user/oauth/facebook" class="btn pl5 pr5 mb5 btn-default btn-sn-facebook btn-sm hidden"><span class="icon-sn-facebook"></span></a>
                <a href="/user/oauth/douban" class="btn pl5 pr5 mb5 btn-default btn-sn-douban btn-sm hidden"><span class="icon-sn-douban"></span></a>
            </div>
        </div>
        <div class="login-vline hidden-sm hidden-xs"></div>
        <div class="col-md-4 col-md-pull-3 col-sm-12 login-wrap">
            <h1 class="h4 text-muted login-title mb30">创建新账号</h1>
            <form id="FormRegister" role="form" class="mt30">
                <div class="form-group">
                    <label for="name" class="control-label">用户名</label>
                    <input type="text" class="form-control name" name="name" required="" placeholder="字母、数字等，用户名唯一">
                </div>
                <div class="form-group">
                    <label for="mail" class="control-label">Email</label>
                    <input type="email" class="form-control email" name="email" required="" placeholder="hello@segmentfault.com">
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">密码</label>
                    <input type="password" class="form-control password" name="password" required="" placeholder="不少于 6 位" aria-autocomplete="list">
                </div>
                <div class="form-group" style="display:none;">
                    <label class="required control-label" for="captcha">验证码</label>
                    <input type="text" class="form-control" id="loginCaptcha" name="captcha" placeholder="请输入下方的验证码">
                    <div class="mt10"><a id="reloadCaptcha" href="javascript:void(0)"><img class="captcha" src="/user/captcha?w=240&amp;h=50" width="240" height="50"></a></div>
                </div>
                <div class="form-group clearfix">
                    <div class="checkbox pull-left">
                        同意并接受<a href="/tos" target="_blank">《服务条款》</a>
                    </div>
                    <button type="submit" class="btn-submit btn btn-primary pl20 pr20 pull-right">注册</button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center col-md-12 login-link">
        <a href="/user/forgot">找回密码</a>
        |
        <a href="/">首页</a>
        |
        <a href="/user/register">创建新账号</a>
    </div>
</div>
<script>
    $(function() {
        register();
        function register() {

            var $formRegister = $('#FormRegister');
            var $name = $formRegister.find('input.name');
            var $password = $formRegister.find('input.password');
            var $email = $formRegister.find('input.email');
            var $submit = $formRegister.find('.btn-submit');

            $submit.on('click', function(ev) {
                ev.preventDefault();
//                $formRegister.validator();
//                var validatorInstance = $formRegister.data('bs.validator');
//                var err = validatorInstance.hasErrors && validatorInstance.hasErrors();
//                if (!err) {
                $.ajax({
                    method: 'POST',
                    url: '/auth/register',
                    data: {
                        name: $name.val(),
                        password: $password.val(),
                        email: $email.val()
                    }
                }).done(function(data) {
                    console.log(data);
                }).error(function(data) {
                    var errors = data.responseJSON;
                    console.log('server errors', errors);
                });
//                }
                return false;
            })

        }
    });
</script>
@endsection