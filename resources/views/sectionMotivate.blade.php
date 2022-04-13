<div id="motivateGrid" class="containerMin minH">
    <div class="grid grid3 w100">
        @foreach(trans()->get('motivate') as $key => $value)
        <div class="bgCover" style="background: url(pictures/test2.jpg) no-repeat 0 0;background-size: cover;">
            <div class="graytransparent7 h100">
                <div class="flex flex-col justifyCenter pdT50 pdB50 pdL10 w100 pdL5-sm">
                    <div>
                        <h2 class="txtMiniTitle MainColor">
                            {{$value['title']}}
                        </h2>
                    </div>
                    <div>
                        <p class="txtNormal mainColor2 w100 maxW300">
                            {{$value['desc']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>