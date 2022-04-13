<head>
    <style>

    #pagesHeader div {
        padding: 0 15px;
        cursor: pointer;
    }
    </style>
</head>
<div id="header" class="containerMin">
    <div id="upperHeader" class="w100 mainColor2 bgColor pdT5 pdB5 txtNormal upperheader">
        <div class="flex w80 elemCenter alignMiddleItem alignMiddleContent justifyCenter">
            <div class="flex20 borderR1 pdR1 txtRight">
                Ehabmaatouk@outlook.com
            </div>
            <div class="flex20 pdL1">
                +96176090294
            </div>
            <div class="flex10">
                {{__('other.webFacebook')}}
            </div>
            <div class="flex10">
                {{__('other.webYoutube')}}
            </div>
        </div>
    </div>
    <div class="bgCover" style=" background: url(pictures/test.jpg) no-repeat 0 0;background-size:cover">
        <div id="lowerHeader" class="w100 mainColor2 pdT25 pdB25 grayTransparent7 txtRegular relative">
            <div class="absolute mainColor2 bgColor3" style="left:1%;top:0;">
                <form method="get">
                    <button type="submit" value="en" name="lang" class="pointer border0 txtNormal mainColor2 transparent">
                        {{__('other.webEnglish')}}
                    </button>
                    <button type="submit" value="ar" name="lang" class="pointer border0 txtNormal mainColor2 transparent">
                        {{__('other.webArabic')}}
                    </button>
                </form>
            </div>
            <div class="flex w80 elemCenter justifySpaceBetween alignMiddleItem">
                <div id="logoHeader" class="flex25">
                    <img src="pictures/logowhite.png" width=150px />
                </div>
                <div id="pagesHeader" class="pagesHeader">
                    @foreach(trans()->get('pagesName') as $key => $value)
                    <div class="floatL">{{$value}}</div>
                    @endforeach
                </div>
                <div class="menuBtnContainer">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                </div>
            </div>
        </div>
        <div class="mainColor2 flex flex-col alignMiddleItem justifyCenter w100 h100 upper blackTransparent5">
            <div class="">
                <h1 class="txtTitle txtCenter">
                    {{__('firstSection.home.bigTitle')}}
                    <span class="mainColor">{{__('other.webChallenges')}}</span>
                </h1>
            </div>
            <div class="">
                <h2 class="txtSubtitle txtCenter">
                    {{__('firstSection.home.bigSubTitle')}}
                    <span class="mainColor"> {{__('other.webAthletes')}}</span>
                </h2>
            </div>
            <div class="pdT150">
                <button class="btn txtMedium">
                    {{__('firstSection.home.joinBtn')}}
                </button>
            </div>
        </div>
    </div>
</div>