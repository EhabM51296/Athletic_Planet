<head>
    <style>
    .flexB {
        border-right: 1px solid white;
    }

    .pdR1 {
        padding-right: 1%;
        text-align: right;
    }

    .pdL1 {
        padding-left: 1%;
    }

    #pagesHeader div {
        float: left;
        padding: 0 15px;
        cursor: pointer;
    }
    </style>
</head>
<div id="header" class="containerMin">
    <div id="upperHeader" class="w100 mainColor2 bgColor pdT5 pdB5 txtNormal">
        <div class="flex w80 elemCenter alignMiddleItem alignMiddleContent justifyCenter">
            <div class="flex20 flexB pdR1">
                Ehabmaatouk@outlook.com
            </div>
            <div class="flex20 pdL1">
                +96176090294
            </div>
            <div class="flex10">
                Facebook
            </div>
            <div class="flex10">
                Youtube
            </div>
        </div>
    </div>
    <div class="bgCover" style=" background: url(pictures/test.jpg) no-repeat 0 0;background-size:cover">
        <div id="lowerHeader" class="w100 mainColor2 pdT25 pdB25 grayTransparent7 txtRegular">
            <div class="flex w80 elemCenter justifySpaceBetween alignMiddleItem">
                <div id="logoHeader" class="flex25">
                    <img src="pictures/logowhite.png" width=150px />
                </div>
                <div id="pagesHeader">
                    @foreach(trans()->get('content.pages') as $key => $value)
                    <div>{{$value}}</div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="mainColor2 flex flex-col alignMiddleItem justifyCenter w100 h100 upper blackTransparent5">
            <div class="">
                <h1 class="txtTitle txtCenter">
                    {{__('content.home.sectionOne.bigTitle')}}
                    <span class="mainColor">{{__('content.home.sectionOne.specialTitle')}}</span>
                </h1>
            </div>
            <div class="">
                <h2 class="txtSubtitle txtCenter">
                    {{__('content.home.sectionOne.bigSubTitle')}}
                    <span class="mainColor"> {{__('content.home.sectionOne.specialSubTitle')}}</span>
                </h2>
            </div>
            <div class="pdT150">
                <button class="btn txtMedium">
                    {{__('content.home.sectionOne.joinBtn')}}
                </button>
            </div>
        </div>
    </div>
</div>