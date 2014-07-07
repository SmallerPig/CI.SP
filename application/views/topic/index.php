<?php
// vim: set expandtab cindent tabstop=4 shiftwidth=4 fdm=marker:
// +----------------------------------------------------------------------+
// | WUXI.SourceCode.Smallerpig                                           |
// +----------------------------------------------------------------------+
// | Copyright (c) 2014, WUXI.SOURCECODE Inc. All rights reserved.        |
// +----------------------------------------------------------------------+
// | Authors: smallerpig. www.smallerpig.com                              |
// |                                                                      |
// +----------------------------------------------------------------------+
 
/**
 * @version  1.0
 * @author   smallerpig
 * @date     
 */
 
 ?>
<link rel="stylesheet" type="text/css" href="/Content/src/css/topicList.css">
<div id="contentArea">
	<? foreach ($topic_list as $key => $value):?>

    <a class="topicUnit" href="/Topic/Content/<?=$value->id ?>" target="_blank">
                <img class="topicImage" src="<?=$value->cover ?>" />
                <div class="topicBrief">
                    <?=$value->summary ?>
                </div>
                <div class="topicTitle"><?=$value->title ?></div>
    </a>    
    <? endforeach;?>
</div>

<!-- 分页开始 -->
<div id="pageInfoArea">
    <a id="gotoFirstPage" href="/news/index">第一页</a>
    <a id="gotoPrevPage" href="@ViewData["perPage"]">&lt;上一页</a>
    <input id="currentPageInput" value="@ViewData["pageIndex"]" onkeydown="if (event.keyCode == 13) { jumpPage() }" />
    <span id="totalPage">/ @ViewData["pageCount"]</span>
    <a id="gotoNextPage" href="@ViewData["nextPage"]">下一页&gt;</a>
    <a id="gotoLastPage" href="/news/index?pageIndex=@ViewData["pageCount"]">尾页</a>
</div>
<!-- 分页结束 -->