<head>
</head>
<div id="footer" class="w100 bgColor3 mainColor2 pdT50 pdB50">
    <div class="flex w90 elemCenter alignMiddleItem txtCenter">
        <div id="footerLogoContainer" class="flex100">
            <div id="footerLogo">
                <img src="pictures/logoWhite.png" class="w50 elemCenter" />
            </div>
            <div id="footerDesc">
                <p class="w80 elemCenter txtNormal pdT20">
                    {{__('content.footer.desc')}}
                </p>
            </div>
        </div>
        <div id="footerServices" class="flex100">
            <div>
                <h2 class="txtMiniTitle">
                    {{__('content.home.serviceTitles.title')}}
                </h2>
            </div>
            @foreach(trans()->get('content.home.services') as $key => $value)
            <div class="pdT10">
                <h2 class="txtNormal">
                    {{$value['title']}}
                </h2>
            </div>
            @endforeach
        </div>
        <div id="footerSocialMedia" class="flex100">
            <div>
                <h2 class="txtMiniTitle">
                    {{__('content.footer.follow')}}
                </h2>
            </div>
            <div class="pdT10">
                <h2 class="txtNormal">
                    facebook
                </h2>
            </div>
            <div class="pdT10">
                <h2 class="txtNormal">
                    Youtube
                </h2>
            </div>
        </div>
        <div id="quickLinks" class="flex100">
            <div>
                <h2 class="txtMiniTitle">
                    {{__('content.footer.quick')}}
                </h2>
            </div>
            @foreach(trans()->get('content.pages') as $key => $value)
            <div class="pdT10">
                <h2 class="txtNormal">
                    {{$value}}
                </h2>
            </div>
            @endforeach
        </div>
    </div>
</div>