@extends('layouts.index')

@section('title', '极客淘@beta')

@section('content')
   @include('products.snippets.header')

    <div class="product-main-container">
        <div class="topic-content">
            <h2 class="topic-title"> 
                <span class="avatar avatar-radius"> <img src="http://semantic-ui.com/images/avatar/small/elliot.jpg" alt=""></span>
                {{$topic->title}}
            </h2>
            <article>
                <p>
                    2012年，索尼发布了黑卡系列产品的开山之作——RX100，开创了一个“大底便携式数码相机”的崭新时代。
                    在此之后，也有多个厂商跟进推出了类似的产品。时隔两年之后，索尼又发布了该系列的第三款产品：RX100 III，
                    在前两作的基础上进一步完善，并且在保持机身尺寸基本不变的前提下加入了更多的配置，并提升了整体性能。
                    今天，我们抢先拿到了索尼RX100 III工程样机，并对其进行了比较详细的测试，就请网友们在本篇文章中一窥究竟。
                </p>
                <p>
                    索尼RX100 III的整体外观沿袭了黑卡系列的家族设计风格。前作机顶处的热靴接口也已经更换为弹出式的内置闪光灯，
                    而左肩处则配备了一个EVF电子取景器。
                </p>

                <table class="param_table" style="WIDTH: 90%; BACKGROUND: #a2c7e1" cellspacing="1" cellpadding="0" align="center" border="0">
                    <tbody>
                    <tr>
                        <td style="FONT-SIZE: 12px; BORDER-TOP-COLOR: #d0d0d0; BACKGROUND: #e1e9ff; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; PADDING-RIGHT: 2.25pt" height="30" colspan="2" align="center"><a href="http://detail.zol.com.cn/digital_camera/index379049.shtml"></a><a href="http://product.fengniao.com/1051_215195/index.html" class="inner-link">索尼 RX1</a>00 III</td></tr>
                    <tr>
                        <td style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt" bgcolor="#f7f9ff" width="30%" align="center">感光元件</td>
                        <td id="param_4706" class="param_value" style="WORD-WRAP: break-word; FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BACKGROUND: white; WORD-BREAK: break-all; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt">约2010万有效像素1英寸Exmor R CMOS 影像传感器</td></tr>
                    <tr>
                        <td style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt" bgcolor="#f7f9ff" width="30%" align="center">影像处理器</td>
                        <td id="param_390" class="param_value" style="WORD-WRAP: break-word; FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BACKGROUND: white; WORD-BREAK: break-all; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt">BIONZ X</td></tr>
                    <tr>
                        <td style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt" bgcolor="#f7f9ff" width="30%" align="center">图像分辨率</td>
                        <td id="param_394" class="param_value" style="WORD-WRAP: break-word; FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BACKGROUND: white; WORD-BREAK: break-all; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt">最大5472×3648</td></tr>
                    <tr>
                        <td style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt" bgcolor="#f7f9ff" width="30%" align="center">镜头类型</td>
                        <td id="param_5092" class="param_value" style="WORD-WRAP: break-word; FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BACKGROUND: white; WORD-BREAK: break-all; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt">蔡司 Vario-Sonnar T* 镜头</td></tr>
                    <tr>
                        <td style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt" bgcolor="#f7f9ff" width="30%" align="center">等效35mm视角</td>
                        <td id="param_148" class="param_value" style="WORD-WRAP: break-word; FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BACKGROUND: white; WORD-BREAK: break-all; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt">等效35mm全画幅相机在24-70mm焦距下视角</td></tr>
                    <tr>
                        <td style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt" bgcolor="#f7f9ff" width="30%" align="center">镜头结构</td>
                        <td id="param_393" class="param_value" style="WORD-WRAP: break-word; FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BACKGROUND: white; WORD-BREAK: break-all; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt">9组10片（9片非球面镜片/其中含AA镜片）</td></tr>
                    <tr>
                        <td style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt" bgcolor="#f7f9ff" width="30%" align="center">镜头说明</td>
                        <td id="param_4708" class="param_value" style="WORD-WRAP: break-word; FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BACKGROUND: white; WORD-BREAK: break-all; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt">卡尔·蔡司（Vario-Sonnar）镜头，实际焦距：f=8.8-25.7mm</td></tr>
                    <tr>
                        <td style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt" bgcolor="#f7f9ff" width="30%" align="center">最大光圈</td>
                        <td id="param_151" class="param_value" style="WORD-WRAP: break-word; FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BACKGROUND: white; WORD-BREAK: break-all; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt">F1.8-F2.8</td></tr>
                    <tr>
                        <td style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt" bgcolor="#f7f9ff" width="30%" align="center">显示屏描述</td>
                        <td id="param_4720" class="param_value" style="WORD-WRAP: break-word; FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BACKGROUND: white; WORD-BREAK: break-all; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt">3.0英寸约123万像素可翻转液晶屏</td></tr>
                    <tr>
                        <td style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt" bgcolor="#f7f9ff" width="30%" align="center">电子取景器描述（像素数、视野率、放大倍率）</td>
                        <td id="param_3937" class="param_value" style="WORD-WRAP: break-word; FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BACKGROUND: white; WORD-BREAK: break-all; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt">约144万像素、100%、约0.59倍（换算为35mm全画幅相机规格）</td></tr>
                    <tr>
                        <td style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt" bgcolor="#f7f9ff" width="30%" align="center">快门系统</td>
                        <td id="param_150" class="param_value" style="WORD-WRAP: break-word; FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BACKGROUND: white; WORD-BREAK: break-all; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt">30-1/2000秒、B门</td></tr>
                    <tr>
                        <td style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt" bgcolor="#f7f9ff" width="30%" align="center">短片拍摄</td>
                        <td id="param_4723" class="param_value" style="WORD-WRAP: break-word; FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BACKGROUND: white; WORD-BREAK: break-all; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt">1920×1080，50p</td></tr>
                    <tr>
                        <td style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt" bgcolor="#f7f9ff" width="30%" align="center">连拍功能</td>
                        <td id="param_4017" class="param_value" style="WORD-WRAP: break-word; FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BACKGROUND: white; WORD-BREAK: break-all; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt">支持（最高约10张/秒）</td></tr>
                    <tr>
                        <td style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt" bgcolor="#f7f9ff" width="30%" align="center">续航能力</td>
                        <td id="param_4730" class="param_value" style="WORD-WRAP: break-word; FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BACKGROUND: white; WORD-BREAK: break-all; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt">约320张照片或1小时25分钟视频（根据CIPA标准）</td></tr>
                    <tr>
                        <td style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt" bgcolor="#f7f9ff" width="30%" align="center">外形尺寸</td>
                        <td id="param_142" class="param_value" style="WORD-WRAP: break-word; FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BACKGROUND: white; WORD-BREAK: break-all; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt">101.6×58.1×41mm（不包括凸出部分）</td></tr>
                    <tr>
                        <td style="FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt" bgcolor="#f7f9ff" width="30%" align="center">产品重量</td>
                        <td id="param_143" class="param_value" style="WORD-WRAP: break-word; FONT-SIZE: 9pt; FONT-FAMILY: Verdana; BORDER-TOP-COLOR: #d0d0d0; BACKGROUND: white; WORD-BREAK: break-all; BORDER-LEFT-COLOR: #d0d0d0; PADDING-BOTTOM: 2.25pt; BORDER-BOTTOM-COLOR: #d0d0d0; PADDING-TOP: 2.25pt; PADDING-LEFT: 2.25pt; BORDER-RIGHT-COLOR: #d0d0d0; LINE-HEIGHT: 150%; PADDING-RIGHT: 2.25pt">约263g（仅机身），290g（包含电池和存储卡）</td></tr>
                    </tbody>
                </table>

                <p>
                    索尼RX100 III采用了一块有效像素约为2010万的1英寸Exmor R感光元件，像素数与前作相比基本持平，
                    而在影像处理器上则升级为BIONZ X。这款产品具备较多的亮点，其中之一就是全新设计的蔡司 Vario-Sonnar T* 镜头。
                    这支镜头的实际焦距为8.8-25.7mm，等效35mm全画幅相机在24-70mm焦距下视角，与前作相比广角端进一步拓展。
                    此外，F1.8-2.8的大光圈设计也能够在长焦端营造更好的虚化效果。索尼RX100 III内置了一块有效像素约为144万的EVF电子取景器，
                    视野率约为100%，而放大倍率则为0.59（等效35mm全画幅相机规格）。总的来说，这款产品在前作基础上有了较大幅度的提升，
                    具体的性能我们也会在后面的篇幅进行测试。
                </p>
            </article>

            <section id="ember2676" class="ember-view post-menu-area clearfix">
                <nav class="post-controls">
                    <div class="actions">
                        <button aria-label="赞本帖" title="赞本帖" class="like" data-action="like"><i class="fa fa-heart"></i></button>
                        <button aria-label="分享一个到本帖的链接" title="分享一个到本帖的链接" data-share-url="/t/react/3883?u=6174" data-post-number="1" data-action="share"><i class="fa fa-link"></i></button>
                        <button aria-label="私下报告本帖以提醒管理人员关注或发送私信通知" title="私下报告本帖以提醒管理人员关注或发送私信通知" data-action="flag"><i class="fa fa-flag"></i></button>
                        <button aria-label="你已经阅读过此帖；点此为其添加书签" title="你已经阅读过此帖；点此为其添加书签" class="bookmark" data-action="bookmark"><div class="read-icon"></div></button>
                        <button aria-label="开始给本帖撰写回复" title="开始给本帖撰写回复" class="create fade-out" data-action="reply"><i class="fa fa-reply"></i>回复</button>
                    </div>
                </nav>
            </section>

            <section id="ember2679" class="ember-view topic-map">
                <div id="ember2680" class="ember-view">
                    <nav class="buttons">
                        <button id="ember2683" class="ember-view btn no-text" title="切换主题详细"><i class="fa fa-chevron-up"></i> </button>
                    </nav>

                    <section class="map ">
                        <ul class="clearfix">
                            <li>
                                <a href="/t/react/3883">
                                    <h4>创建时间</h4>
                                    <img alt="" width="20" height="20" src="https://avatars.discourse.org/v2/letter/p/8dc957/40.png" class="avatar" title="Poordeveloper">
                                    <span class="relative-date date" title="2016年1月20日下午4点01" data-time="1453276868254" data-format="medium">20小时</span>
                                </a>
                            </li>
                            <li>
                                <a href="/t/react/3883/3">
                                    <h4>最后回复</h4>
                                    <img alt="" width="20" height="20" src="//7xjtzg.com1.z0.glb.clouddn.com/user_avatar/react-china.org/jiyinyiyong/40/2_1.png" class="avatar" title="jiyinyiyong">
                                    <span class="relative-date date" title="2016年1月21日上午10点29" data-time="1453343356427" data-format="medium">1小时</span>
                                </a>
                            </li>
                            <li>
                                <span class="number" title="2">2</span>
                                <h4>回复</h4>
                            </li>
                            <li class="secondary">
                                <span class="number" title="110">110</span>
                                <h4>浏览</h4>
                            </li>
                            <li class="secondary">
                                <span class="number" title="3">3</span>
                                <h4>用户</h4>
                            </li>
                            <!---->      <li class="secondary">
                                <span class="number" title="1">1</span>
                                <h4>链接</h4>
                            </li>
                            <li class="avatars hidden">
                                <div id="ember2684" class="ember-view"><a href="" data-ember-action="2685" title="Poordeveloper" class="poster ">
                                        <!---->  <img alt="" width="32" height="32" src="https://avatars.discourse.org/v2/letter/p/8dc957/64.png" class="avatar" title="Poordeveloper">
                                    </a>
                                </div>
                                <div id="ember2686" class="ember-view"><a href="" data-ember-action="2687" title="6174" class="poster ">
                                        <!---->  <img alt="" width="32" height="32" src="//7xjtzg.com1.z0.glb.clouddn.com/user_avatar/react-china.org/6174/64/4200_1.png" class="avatar" title="6174">
                                    </a>
                                </div>
                                <div id="ember2688" class="ember-view"><a href="" data-ember-action="2689" title="jiyinyiyong" class="poster ">
                                        <!---->  <img alt="" width="32" height="32" src="//7xjtzg.com1.z0.glb.clouddn.com/user_avatar/react-china.org/jiyinyiyong/64/2_1.png" class="avatar" title="jiyinyiyong">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </section>

                    <section class="avatars clearfix">
                        <h3>频繁发帖者</h3>
                        <div id="ember2745" class="ember-view"><a href="" data-ember-action="2746" title="Poordeveloper" class="poster ">
                                <!---->  <img alt="" width="32" height="32" src="https://avatars.discourse.org/v2/letter/p/8dc957/64.png" class="avatar" title="Poordeveloper">
                            </a>
                        </div>
                        <div id="ember2747" class="ember-view"><a href="" data-ember-action="2748" title="6174" class="poster ">
                                <!---->  <img alt="" width="32" height="32" src="//7xjtzg.com1.z0.glb.clouddn.com/user_avatar/react-china.org/6174/64/4200_1.png" class="avatar" title="6174">
                            </a>
                        </div>
                        <div id="ember2749" class="ember-view"><a href="" data-ember-action="2750" title="jiyinyiyong" class="poster ">
                                <!---->  <img alt="" width="32" height="32" src="//7xjtzg.com1.z0.glb.clouddn.com/user_avatar/react-china.org/jiyinyiyong/64/2_1.png" class="avatar" title="jiyinyiyong">
                            </a>
                        </div>
                    </section>

                    <section class="links">
                        <h3>热门链接</h3>
                        <table class="topic-links">
                            <tr>
                                <td>
                                    <span class="badge badge-notification clicks" title="33 次点击">33</span>
                                </td>
                                <td>
                                    <a target="_blank" data-ignore-post-id="true" href="http://buyw.com.cn/v2" class="topic-link track-link " data-user-id="2541" title="http://buyw.com.cn/v2">
                                        买车旺
                                    </a>
                                    <span class="domain">com.cn</span>
                                </td>
                            </tr>
                        </table>

                        <!---->
                    </section>
                </div>
            </section>
        </div>

        <div class="topic-replys">
            <div class="topic-content block">
                <div class="topic-avatar block shrink content">
                    <a href="/users/react1" classnames="trigger-user-card main-avatar" data-user-card="react1">
                        <img alt="" width="45" height="45" src="//7xjtzg.com1.z0.glb.clouddn.com/user_avatar/react-china.org/react1/90/207_1.png" class="avatar" title="react1">
                    </a>
                </div>
                <div class="topic-body block content">
                    <div>
                        <div id="ember2138" class="ember-view names trigger-user-card">
                            <span class="username"><a href="/users/react1" data-auto-route="true" data-user-card="react1">react1</a></span>
                        </div>
                        <div class="post-info">
                            <a class="post-date" href="/t/modal-stack-modal/3870/2?u=6174" data-share-url="/t/modal-stack-modal/3870/2?u=6174" data-post-number="2"><span class="relative-date" title="2016年1月19日晚上9点39" data-time="1453210774172" data-format="tiny">1日前</span></a>
                        </div>
                    </div>

                    <div class="select-posts hidden">
                        <button data-ember-action="2139" class="">选择以及回复其的帖子</button>
                        <button class="select-post" data-ember-action="2140">选择</button>
                    </div>

                    <!-- keep the classes here in sync with composer.hbs -->
                    <div class=" contents regular ">
                        <div class="cooked">
                            <p>这是做了多少版本啊</p>
                        </div>
                        <section id="ember2143" class="ember-view post-menu-area clearfix">
                            <nav class="post-controls"><div class="actions"><button aria-label="赞本帖" title="赞本帖" class="like" data-action="like"><i class="fa fa-heart"></i></button><button aria-label="分享一个到本帖的链接" title="分享一个到本帖的链接" data-share-url="/t/modal-stack-modal/3870/2?u=6174" data-post-number="2" data-action="share"><i class="fa fa-link"></i></button><button aria-label="私下报告本帖以提醒管理人员关注或发送私信通知" title="私下报告本帖以提醒管理人员关注或发送私信通知" data-action="flag"><i class="fa fa-flag"></i></button><button aria-label="你已经阅读过此帖；点此为其添加书签" title="你已经阅读过此帖；点此为其添加书签" class="bookmark" data-action="bookmark"><div class="read-icon"></div></button><button aria-label="开始给本帖撰写回复" title="开始给本帖撰写回复" class="create fade-out" data-action="reply"><i class="fa fa-reply"></i>回复</button></div></nav>
                        </section>
                    </div>

                </div>
                <div id="ember2154" class="ember-view gutter"><a href="" class="reply-new"><i class="fa fa-plus"></i>回复为联结主题</a></div>
            </div>
        </div>
    </div>
@endsection