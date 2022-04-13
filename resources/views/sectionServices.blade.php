<div id="servicesSection" class="w100 bgColor2 pdT150 pdB150 pdT75-sm pdB75-sm">
    <div class="contianer">
        <div id="servicesSectionTitleDesc" class="w100 txtCenter txtMiniTitle">
            <div id="servicesSectionTitle" class="txtMiniTitle">
                <h2>
                    {{__('services.title')}}
                </h2>
            </div>
            <div id="servicesSectionDesc" class="txtNormal">
                <p>
                    {{__('services.desc')}}
                </p>
            </div>
        </div>
        <div class="w80 elemCenter pdT30">
            <div class="grid grid3 gridGap container">
                @foreach(trans()->get('services.serviceList') as $key => $value)
                <div>
                    <div class="w100">
                        <img src="pictures/c.jpg" class="w100" />
                    </div>
                    <div class="servicesTitle pdT20">
                        <h2 class="txtMiniTitle">
                            {{$value['title']}}
                        </h2>
                    </div>
                    <div class="servicesDesc pdT20 txtNormal">
                        <p class="txtNormal">
                            {{$value['desc']}}
                        </p>
                    </div>
                    <div class="txtMedium pdT20">
                        {{$value['learn']}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>