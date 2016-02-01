<div class="nav-bar">
    <div class="row-wrap" >
        <div class="brand-logo-container" >
            <a href="/" >极客淘<small style="font-size: 14px;">@beta</small> </a>
        </div>
        <ul class="nav nav-pills">
            <li role="presentation" class="@if ($active_menu === 'news') active @endif"><a href="/">淘动态</a></li>
            <li role="presentation" class="@if ($active_menu === 'categories') active @endif"><a href="/categories">产品分类大全</a></li>
            <li role="presentation" class="@if ($active_menu === 'article') active @endif"><a href="#">专题文章</a></li>
            <li role="presentation" class="@if ($active_menu === 'help') active @endif"><a href="#">帮助</a></li>
        </ul>
        <div class="menu pull-right" >
            <div class="search" >
                <input type="text" placeholder="搜索产品、二手、文章" >
                <span class="search-icon center" ><i class="fa fa-search" ></i></span>
            </div>
        </div>
    </div>
</div>