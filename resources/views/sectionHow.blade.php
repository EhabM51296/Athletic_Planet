<div id="howSection" class="w100 relative containerMin"
    style="background: url(pictures/tt.jpg) no-repeat 0 0;background-size: cover;">
    <div class="flex alignMiddleItem justifyCenter flex-col w50 w100-sm pdT100 pdB100 blueTransparent5 elemRight">
        <div id="howTitle" class="w70 elemCenter">
            <h1 class="txtMiniTitle mainColor2">
                {{__('home.howItWorks.title')}}
            </h1>
        </div>
        <div id="howDescription" class="w70 elemCenter pdT30 pdT15-sm mainColor2">
            @foreach(trans()->get('home.howItWorks.howList') as $key => $value)
            <div>
                <h3 class="txtMedium w100">
                    {{$value['title']}}
                </h3>
                <p class="w100 txtNormal pdT10 pdB10">
                    {{$value['desc']}}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</div>