     <div class="contentRow">
        <div id="pictureSearchArea">
            <div id="pictureSearchAreaTitle">图片搜索</div>
            <div id="pictureSearchAreaContentWrapper">
                <input id="pictureSearchInput" onkeydown="if (event.keyCode == 13) { doSubmit() }" class="inputText" placeholder="输入关键词或图片编号" />
                <a id="pictureSearchSubmit" href="javascript:"></a>
                <a id="pictureSearchLink" href="/Pics/Search">高级搜索</a>
            </div>
        </div>
    </div>
    <div class="contentRow">
        <!-- banner开始 -->
        <div id="slidePicArea">
            <div id="slidePicWrapper">
                <a href="javascript:void(0)">
                    <img class="slidePicItem" src="srctemp/QQ截图20140512094825.png" />
                </a>
                <a href="javascript:void(0)">
                    <img class="slidePicItem" src="srctemp/QQ截图20140512094825.png" />
                </a>
                <a href="javascript:void(0)">
                    <img class="slidePicItem" src="srctemp/QQ截图20140512094825.png" />
                </a>
                <a href="javascript:void(0)">
                    <img class="slidePicItem" src="srctemp/QQ截图20140512094825.png" />
                </a>
                <a href="javascript:void(0)">
                    <img class="slidePicItem" src="srctemp/QQ截图20140512094825.png" />
                </a>
            </div>
            <div id="slidePicInfoArea">
                <!--<div class="slidePicItemMark"></div>-->
            </div>
        </div>
        <!-- banner结束 -->
        <!-- 新闻与活动开始 -->
        <div id="newsArea">
            <div class="titleArea">
                <div class="titleText">新闻与活动</div>
                <a class="moreLink" href="javascript:void(0)">更多&gt;</a>
            </div>
            <div class="contentArea">
                <?php foreach($news_list as $row): ?>
                <a href="javascript:void(0)" class="newsTitle"><?=$row->title ?></a>
                <?php endforeach;?>
            </div>
        </div>
        <!-- 新闻与活动结束 -->
    </div>

<!-- 专题开始 -->
    <div class="contentRow">
        <div id="topicArea">
            <div class="titleArea">
                <div class="titleText">专题</div>
                <a class="moreLink" href="javascript:void(0)javascript:void(0)">更多&gt;</a>
            </div>
            <div class="contentArea">
                <? foreach($topic_list as $topic): ?>
                     <a class="topicItem" href="javascript:void(0)">
                        <img class="topicImage" src="/srctemp/QQ截图20140512094825.png" />
                        <div class="textTitle"><?=$topic->title ?></div>
                        <div class="textBrief"><?=$topic->summary ?></div>
                    </a>               
                <? endforeach;?>

            </div>
        </div>
        <div id="rightSideAdArea">
            <a class="adWrapper" href="javascript:void(0)"><img class="adImage" src="/srctemp/QQ截图20140512094825.png"></a>
            <a class="adWrapper" href="javascript:void(0)"><img class="adImage" src="/srctemp/QQ截图20140512094825.png"></a>
        </div>
    </div>
    <!-- 专题结束 -->


    <!-- <link rel="stylesheet" type="text/css" href="content/src/css/home.css"> -->

    <!--<script src="/content/src/js/home.js"></script>-->