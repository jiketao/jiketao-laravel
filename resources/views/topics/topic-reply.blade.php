<div class="topic-reply clearfix">
    <div class="topic-avatar">
        <a href="/users/react1" classnames="trigger-user-card main-avatar" data-user-card="react1">
            <img alt="" width="45" height="45" src="{{$reply->user->avatar}}" class="avatar" title="react1">
        </a>
    </div>
    <div class="topic-body">
        <div>
            <div id="ember2138" class="ember-view names trigger-user-card">
                <span class="username"><a href="/users/react1" data-auto-route="true" data-user-card="react1">{{$reply->user->name}}</a></span>
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
                <p>{{$reply->content}}</p>
            </div>
            <section class="post-menu-area clearfix">
                @include('topics.topic-control')
            </section>
        </div>
    </div>
    <div  class="gutter"><a href="" class="reply-new"><i class="fa fa-plus"></i>branch</a></div>
</div>