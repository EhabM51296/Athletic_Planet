<head>
    <style>
    </style>
</head>
@extends('layout')
@section('content')
<div id="servicesGrid" class="containerMin minH">
    <div class="grid grid3 w100">
        @foreach(trans()->get('content.home.sectionTwo') as $key => $value)
        <div class="bgCover" style="background: url(pictures/test2.jpg) no-repeat 0 0;background-size: cover;">
            <div class="graytransparent7 h100">
                <div class="flex flex-col justifyCenter pdT50 pdB50 pdL10 w100">
                    <div>
                        <h2 class="txtMiniTitle MainColor">
                            {{$value['title']}}
                        </h2>
                    </div>
                    <div>
                        <p class="txtNormal mainColor2 w100" style="max-width:300px;">
                            {{$value['desc']}}
                        </p>
                    </div>
                    <div class="btnContainer pdT20">
                        <button class="btn txtMedium">Click</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div id="aboutUsSection" class="w100 relative containerMin"
    style="background: url(pictures/tes.jpg) no-repeat 0 0;background-size: cover;">
    <div class="flex alignMiddleItem justifyCenter flex-col w50 w100-sm pdT100 pdB100 blueTransparent5">
        <div id="aboutUsTitle" class="w70 elemCenter">
            <h1 class="txtMiniTitle mainColor2">
                {{__('content.home.about.title')}}
            </h1>
        </div>
        <div id="aboutUsDescription" class="w70 elemCenter pdT30">
            <p class="w100 txtNormal mainColor2">
                {{__('content.home.about.desc')}}
            </p>
        </div>
        <div id="aboutusBtn" class="w70 elemCenter pdT50">
            <button class="btn2 txtMedium">
                {{__('content.home.about.aboutBtn')}}
            </button>
        </div>
    </div>
</div>
<div id="servicesSection" class="w100 bgColor2 pdT150 pdB150">
    <div class="contianer">
        <div id="servicesSectionTitleDesc" class="w100 txtCenter txtMiniTitle">
            <div id="servicesSectionTitle" class="txtMiniTitle">
                <h2>
                    {{__('content.home.serviceTitles.title')}}
                </h2>
            </div>
            <div id="servicesSectionDesc" class="txtNormal">
                <p>
                    {{__('content.home.serviceTitles.desc')}}
                </p>
            </div>
        </div>
        <div class="w90 elemCenter pdT30">
            <div class="grid grid3 gridGap container">
                @foreach(trans()->get('content.home.services') as $key => $value)
                <div>
                    <div class="w100">
                        <img src="pictures/c.jpg" class="w100" />
                    </div>
                    <div class="servicesTitle pdT20">
                        <h2 class="txtMiniTitle">
                            {{$value['title']}}
                        </h2>
                    </div>
                    <div class="servicesDesc pdT20">
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
<!-- how it works  -->
<div id="howSection" class="w100 relative containerMin"
    style="background: url(pictures/tt.jpg) no-repeat 0 0;background-size: cover;">
    <div class="flex alignMiddleItem justifyCenter flex-col w50 w100-sm pdT100 pdB100 blueTransparent5 elemRight">
        <div id="howTitle" class="w70 elemCenter">
            <h1 class="txtMiniTitle mainColor2">
                {{__('content.home.howTitle')}}
            </h1>
        </div>
        <div id="howDescription" class="w70 elemCenter pdT30 mainColor2">
            @foreach(trans()->get('content.home.how') as $key => $value)
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
<!-- Events -->
<div id="eventSection" class="w100 bgColor2 pdT150 pdB150">
    <div class="contianer">
        <div id="eventSectionTitleDesc" class="w100 txtCenter txtMiniTitle">
            <div id="servicesSectionTitle" class="txtMiniTitle">
                <h2>
                    {{__('content.home.eventsTitle.title')}}
                </h2>
            </div>
            <div id="eventSectionDesc" class="txtNormal">
                <p>
                    {{__('content.home.eventsTitle.desc')}}
                </p>
            </div>
        </div>
        <div class="w90 elemCenter pdT30">
            <div class="grid grid3 gridGap container">
                @foreach(trans()->get('content.home.events') as $key => $value)
                <div>
                    <div class="w100">
                        <img src="pictures/c.jpg" class="w100" />
                    </div>
                    <div class="servicesTitle pdT20">
                        <h2 class="txtMiniTitle">
                            {{$value['title']}}
                        </h2>
                    </div>
                    <div class="servicesDesc pdT20">
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
<div id="contactUsSection" class="w100 bgColor3 mainColor2 pdT80 pdB80 containerMin">
    <div class="w80 elemCenter flex justifySpaceBetween alignMiddleItem">
        <div>
            <h4 class="txtMedium">
                {{__('content.home.contact.title')}}
            </h4>
            <p class="txtNormal">
                {{__('content.home.contact.desc')}}
            </p>
        </div>
        <div>
            <button class="btn2 txtMedium">
                {{__('content.home.contact.contactBtn')}}
            </button>
        </div>
    </div>
</div>
<!-- Founder -->
<div id="FounderSection" class="w100 relative containerMin bgColor">
    <div class="grid grid2 w100">
        <div class="flex alignMiddleItem justifyCenter flex-col w100 pdT100 pdB100">
            <div id="founderTitle" class="w70 elemCenter">
                <h1 class="txtMiniTitle mainColor2">
                    {{__('content.home.founder.title')}}
                </h1>
            </div>
            <div id="founderDescription" class="w70 elemCenter pdT30">
                <p class="w100 txtNormal mainColor2">
                    {{__('content.home.founder.desc')}}
                </p>
            </div>
        </div>
        <div id="founderImg" class="flex alignMiddleItem justifyCenter">
            <img src="pictures/founder.png" class="w60" />
        </div>
    </div>
</div>
@endsection