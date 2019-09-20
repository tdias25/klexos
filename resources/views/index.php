
<!DOCTYPE html>


    <html itemscope itemtype="http://schema.org/QAPage" class="html__responsive">

    <head>

        <title>php - When should I use static methods? - Stack Overflow</title>
        <link rel="shortcut icon" href="https://cdn.sstatic.net/Sites/stackoverflow/img/favicon.ico?v=4f32ecc8f43d">
        <link rel="apple-touch-icon image_src" href="https://cdn.sstatic.net/Sites/stackoverflow/img/apple-touch-icon.png?v=c78bd457575a">
        <link rel="search" type="application/opensearchdescription+xml" title="Stack Overflow" href="/opensearch.xml">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">


        <meta property="og:type" content= "website" />
        <meta property="og:url" content="https://stackoverflow.com/questions/33705976/when-should-i-use-static-methods"/>
        <meta property="og:site_name" content="Stack Overflow" />
        <meta property="og:image" itemprop="image primaryImageOfPage" content="https://cdn.sstatic.net/Sites/stackoverflow/img/apple-touch-icon@2.png?v=73d79a89bded" />
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:domain" content="stackoverflow.com"/>
        <meta name="twitter:title" property="og:title" itemprop="name" content="When should I use static methods?" />
        <meta name="twitter:description" property="og:description" itemprop="description" content="I have a class that is containing 10 methods. I always need to use one of those methods. Now I want to know, which approach is better? 

class cls{
    public function func1(){}
    public function..." />
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdn.sstatic.net/Js/stub.en.js?v=55d37d39e45b"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.sstatic.net/Shared/stacks.css?v=baa63b2b0ac4" >
    <link rel="stylesheet" type="text/css" href="https://cdn.sstatic.net/Sites/stackoverflow/primary.css?v=dd1e9f9ce22a" >

    
            <link rel="alternate" type="application/atom+xml" title="Feed for question &#39;When should I use static methods?&#39;" href="/feeds/question/33705976">
            <meta name="twitter:app:country" content="US" />
            <meta name="twitter:app:name:iphone" content="Stack Exchange iOS" />
            <meta name="twitter:app:id:iphone" content="871299723" />
            <meta name="twitter:app:url:iphone" content="se-zaphod://stackoverflow.com/questions/33705976/when-should-i-use-static-methods" />
            <meta name="twitter:app:name:ipad" content="Stack Exchange iOS" />
            <meta name="twitter:app:id:ipad" content="871299723" />
            <meta name="twitter:app:url:ipad" content="se-zaphod://stackoverflow.com/questions/33705976/when-should-i-use-static-methods" />
            <meta name="twitter:app:name:googleplay" content="Stack Exchange Android">
            <meta name="twitter:app:url:googleplay" content="http://stackoverflow.com/questions/33705976/when-should-i-use-static-methods">
            <meta name="twitter:app:id:googleplay" content="com.stackexchange.marvin">
        <script>
            StackExchange.ready(function () {
                    
                    StackExchange.using("snippets", function () {
                        StackExchange.snippets.initSnippetRenderer();
                    });
                    

                StackExchange.using("postValidation", function () {
                    StackExchange.postValidation.initOnBlurAndSubmit($('#post-form'), 2, 'answer');
                });

                
                StackExchange.question.init({canOpenBounty:true,votesCast:[{"PostId":33705976,"VoteTypeId":5},{"PostId":33705976,"VoteTypeId":2}],totalCommentCount:1,shownCommentCount:1,highlightColor:'#F4A83D',backgroundColor:'#FFF',questionId:33705976});

                styleCode();

                    StackExchange.realtime.subscribeToQuestion('1', '33705976');
                                                    StackExchange.using("gps", function () { StackExchange.gps.trackOutboundClicks('#content', '.post-text'); });

            });
        </script>

        
        
        
        
        
        
        


        <script>
        StackExchange.ready(function () {
            StackExchange.realtime.init('wss://qa.sockets.stackexchange.com');
                StackExchange.realtime.subscribeToReputationNotifications('1');
        StackExchange.realtime.subscribeToTopBarNotifications('1');
        });
    </script>
    <script>
        StackExchange.init({"locale":"en","serverTime":1566602959,"routeName":"Questions/Show","stackAuthUrl":"https://stackauth.com","networkMetaHostname":"meta.stackexchange.com","site":{"name":"Stack Overflow","description":"Q&A for professional and enthusiast programmers","isNoticesTabEnabled":true,"enableNewTagCreationWarning":true,"insertSpaceAfterNameTabCompletion":false,"id":1,"childUrl":"https://meta.stackoverflow.com","enableSocialMediaInSharePopup":true,"protocol":"https"},"user":{"fkey":"a7ebc7f5561be1e0ed1eb49164847088ba476b8558b4a1c70b050ba4c6ffbe07","tid":"f15c0ef4-7b73-c3b2-e267-339273e9b806","rep":105,"isRegistered":true,"userType":3,"userId":3386417,"accountId":4127764,"gravatar":"<div class=\"gravatar-wrapper-32\"><img src=\"https://i.stack.imgur.com/n4scT.jpg?s=32&amp;g=1\" alt=\"\" width=\"32\" height=\"32\"></div>","profileUrl":"https://stackoverflow.com/users/3386417/nba-youngcode","canSeeDeletedPosts":false,"ab":{"header_jobs_label":{"v":"c","g":7}}},"realtime":{"newest":false,"active":false,"tagged":true,"staleDisconnectIntervalInHours":0},"events":{"postType":{"question":1},"postEditionSection":{"title":1,"body":2,"tags":3}},"story":{"minCompleteBodyLength":75,"likedTagsMaxLength":300,"dislikedTagsMaxLength":300},"jobPreferences":{"maxNumDeveloperRoles":2,"maxNumIndustries":4},"svgIconPath":"https://cdn.sstatic.net/Img/svg-icons","svgIconHash":"6fec064b67e4"}, {"userProfile":{"openGraphAPIKey":"4a307e43-b625-49bb-af15-ffadf2bda017"},"userMessaging":{},"tags":{},"snippets":{"snippetsEnabled":true,"renderDomain":"stacksnippets.net"},"slack":{"sidebarAdDismissCookie":"slack-sidebar-ad"},"site":{"allowImageUploads":true,"enableUserHovercards":true,"styleCode":true,"enableImgurHttps":true,"forceHttpsImages":true},"paths":{},"monitoring":{"clientTimingsAbsoluteTimeout":30000,"clientTimingsDebounceTimeout":1000},"mentions":{"maxNumUsersInDropdown":50},"markdown":{"asteriskIntraWordEmphasis":true},"flags":{"allowRetractingFlags":true,"allowRetractingCommentFlags":true},"comments":{},"accounts":{"currentPasswordRequiredForChangingStackIdPassword":true}});
        StackExchange.using.setCacheBreakers({"js/prettify-full.en.js":"73e8c38f66e3","js/moderator.en.js":"29ae36737c3d","js/full-anon.en.js":"f15fd741184c","js/full.en.js":"e05c62e26111","js/wmd.en.js":"c6fec792b72c","js/mobile.en.js":"73f37a4884c4","js/help.en.js":"4f59354de800","js/tageditor.en.js":"371602f7b8a0","js/tageditornew.en.js":"1f837aa0f225","js/inline-tag-editing.en.js":"7d1297099f19","js/revisions.en.js":"db7c23e85c0c","js/review.en.js":"9963ecb7bcd8","js/tagsuggestions.en.js":"e5ffcd5ef1a6","js/post-validation.en.js":"631ef81c1baf","js/explore-qlist.en.js":"66e52888786d","js/events.en.js":"36289374cf98","js/keyboard-shortcuts.en.js":"d4bc93273eda","js/adops.en.js":"22a9bd59b1e9","js/begin-edit-event.en.js":"3238dd301e69","js/stacks-polyfills.en.js":"baba11341f6a","js/snippet-javascript-codemirror.en.js":"02efb9093fdd"});
        StackExchange.using("gps", function() {
             StackExchange.gps.init(true);
        });
    </script>
    <noscript id="noscript-css"><style>body,.top-bar{margin-top:1.9em}</style></noscript>
    </head>
        <body class="question-page unified-theme">
    <div id="notify-container"></div>
    <div id="custom-header"></div>




<header class="top-bar js-top-bar top-bar__network _fixed">
    <div class="-container" role="menubar">
        <div class="-main">
                <a href="#" class="left-sidebar-toggle p0 ai-center jc-center js-left-sidebar-toggle" role="menuitem" aria-haspopup="true" aria-controls="left-sidebar" aria-expanded="false"><span class="ps-relative"></span></a>
                <div class="topbar-dialog leftnav-dialog js-leftnav-dialog dno">
                    <div class="left-sidebar js-unpinned-left-sidebar" data-can-be="left-sidebar" data-is-here-when="sm"></div>
                </div>
                                <a href="https://stackoverflow.com" class="-logo js-gps-track"
                        data-gps-track="top_nav.click({is_current:false, location:2, destination:8})">
                        <span class="-img _glyph">Stack Overflow</span>
                    </a>



        </div>

            <ol class="list-reset grid gs4" role="presentation">
                <li class="grid--cell">
                    <a href="#"
                        class="-marketing-link js-gps-track js-products-menu"
                        aria-controls="products-popover"
                        data-controller="s-popover"
                        data-action="s-popover#toggle"
                        data-s-popover-placement="bottom"
                        data-gps-track="top_nav.products.click({location:2, destination:1})"
                        data-ga="[&quot;top navigation&quot;,&quot;products menu click&quot;,null,null,null]">
                        Products
                    </a>
                </li>

            </ol>
            <div class="s-popover ws2 p6"
                    id="products-popover"
                    role="menu"
                    aria-hidden="true">
                <div class="s-popover--arrow"></div>
                <ol class="list-reset s-anchors s-anchors__inherit">
                    <li>
                        <a href="/" class="d-block py6 px6 bar-sm h:bg-orange-500 h:fc-white js-gps-track"
                           data-gps-track="top_nav.products.click({location:2, destination:2})"
                           data-ga="[&quot;top navigation&quot;,&quot;public qa submenu click&quot;,null,null,null]">
                            <span class="fs-body1 d-block">Stack Overflow</span>
                            <span class="fs-caption d-block o70">Public questions and answers</span>
                        </a>
                    </li>
                    <li>
                        <a href="/teams" class="d-block py6 px6 bar-sm h:bg-orange-500 h:fc-white js-gps-track"
                           data-gps-track="top_nav.products.click({location:2, destination:3})"
                           data-ga="[&quot;top navigation&quot;,&quot;teams submenu click&quot;,null,null,null]">
                            <span class="fs-body1 d-block">Teams</span>
                            <span class="fs-caption d-block o70">Private questions and answers for your team</span>
                        </a>
                    </li>
                    <li>
                        <a href="/enterprise" class="d-block py6 px6 bar-sm h:bg-orange-500 h:fc-white js-gps-track"
                           data-gps-track="top_nav.products.click({location:2, destination:4})"
                           data-ga="[&quot;top navigation&quot;,&quot;enterprise submenu click&quot;,null,null,null]">
                            <span class="fs-body1 d-block">Enterprise</span>
                            <span class="fs-caption d-block o70">Private self-hosted questions and answers for your enterprise</span>
                        </a>
                    </li>
                    <li class="bt bc-black-3 mln6 mrn6 mt6 pt6 px6">
                        <a href="https://www.stackoverflowbusiness.com/talent" class="d-block py6 px6 bar-sm h:bg-orange-500 h:fc-white js-gps-track"
                           data-gps-track="top_nav.products.click({location:2, destination:5})"
                           data-ga="[&quot;top navigation&quot;,&quot;talent submenu click&quot;,null,null,null]">
                            <span class="fs-body1 d-block">Talent</span>
                            <span class="fs-caption d-block o70">Hire technical talent</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.stackoverflowbusiness.com/advertising" class="d-block py6 px6 bar-sm h:bg-orange-500 h:fc-white js-gps-track"
                           data-gps-track="top_nav.products.click({location:2, destination:6})"
                           data-ga="[&quot;top navigation&quot;,&quot;advertising submenu click&quot;,null,null,null]">
                            <span class="fs-body1 d-block">Advertising</span>
                            <span class="fs-caption d-block o70">Reach developers worldwide</span>
                        </a>
                    </li>

                        <li class="bt bc-black-3 mln6 mrn6 mt6 pt6 px6">
                            <a href="/teams/customers" class="fc-light d-block py6 px6 h:fc-orange-500 js-gps-track"
                               data-gps-track="top_nav.products.click({location:2, destination:7})"
                               data-ga="[&quot;top navigation&quot;,&quot;customers submenu click&quot;,null,null,null]">Customers</a>
                        </li>
                        <li class="">
                            <a href="/teams/use-cases" class="fc-light d-block py6 px6 h:fc-orange-500 js-gps-track"
                               data-gps-track="top_nav.products.click({location:2, destination:8})"
                               data-ga="[&quot;top navigation&quot;,&quot;use cases submenu click&quot;,null,null,null]">Use cases</a>
                        </li>
                </ol>
            </div>

            <form id="search" action=/search method="get" class="searchbar js-searchbar " autocomplete="off">
                    <div class="ps-relative">
                        <input name="q"
                               type="text"
                               placeholder="Search…"
                               value=""
                               autocomplete="off"
                               maxlength="240"
                               class="s-input s-input__search js-search-field "
                               aria-label="Search" />
                        <svg aria-hidden="true" class="svg-icon s-input-icon s-input-icon__search iconSearch" width="18" height="18" viewBox="0 0 18 18"><path d="M18 16.5l-5.14-5.18h-.35a7 7 0 1 0-1.19 1.19v.35L16.5 18l1.5-1.5zM12 7A5 5 0 1 1 2 7a5 5 0 0 1 10 0z"/></svg>
                    </div>
            </form>

        





<ol class="-secondary js-secondary-topbar-links drop-icons-responsively user-logged-in" role="presentation">
        <li class="-item searchbar-trigger js-searchbar-trigger"><a href="#" class="-link" role="button" aria-label="Search" aria-haspopup="true" aria-controls="search" title="Click to show search"><svg aria-hidden="true" class="svg-icon iconSearch" width="18" height="18" viewBox="0 0 18 18"><path d="M18 16.5l-5.14-5.18h-.35a7 7 0 1 0-1.19 1.19v.35L16.5 18l1.5-1.5zM12 7A5 5 0 1 1 2 7a5 5 0 0 1 10 0z"/></svg></a></li>
                <li class="-item">
                <a href="/users/3386417/nba-youngcode" class="my-profile js-gps-track" data-gps-track="profile_summary.click()">
<div class="gravatar-wrapper-24" title="NBA YoungCode"><img src="https://i.stack.imgur.com/n4scT.jpg?s=48&amp;g=1" alt="" width="24" height="24" class="-avatar js-avatar-me"></div>                    <span class="v-visible-sr">NBA YoungCode</span>

                    <div class="-rep js-header-rep" title="your reputation: 105" aria-hidden="true">105</div>
                    <span class="v-visible-sr">, 105 reputation</span>
                        <div class="-badges">
<span title="3 silver badges" aria-hidden="true"><span class="badge2">&#9679;</span><span class="badgecount">3</span></span><span class="v-visible-sr">3 silver badges</span><span title="9 bronze badges" aria-hidden="true"><span class="badge3">&#9679;</span><span class="badgecount">9</span></span><span class="v-visible-sr">9 bronze badges</span>                        </div>
                </a>
            </li>
        <li class="-item inbox-button-item" >
        <a href="https://stackexchange.com/users/4127764?tab=inbox" class="-link js-inbox-button"
           aria-label="Inbox" title="Recent inbox messages" role="menuitem" aria-haspopup="true" aria-expanded="false" data-unread-count="0">
            <svg aria-hidden="true" class="svg-icon iconInbox" width="20" height="18" viewBox="0 0 20 18"><path d="M4.63 1h10.56a2 2 0 0 1 1.94 1.35L20 10.79V15a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-4.21l2.78-8.44c.25-.8 1-1.36 1.85-1.35zm8.28 12l2-2h2.95l-2.44-7.32a1 1 0 0 0-.95-.68H5.35a1 1 0 0 0-.95.68L1.96 11h2.95l2 2h6z"/></svg>
            <span class="indicator-badge js-unread-count _important d-none">0</span>
        </a>
    </li>
    <li class="-item achievements-button-item" >
        <a href="https://stackexchange.com/users/4127764?tab=reputation" class="-link js-achievements-button" data-unread-class="_highlighted-positive"
           aria-label="Achievements" title="Recent achievements: reputation, badges, and privileges earned" role="menuitem" aria-haspopup="true" aria-expanded="false" data-unread-count="-6" data-lit-up="false">
            <svg aria-hidden="true" class="svg-icon iconAchievements" width="18" height="18" viewBox="0 0 18 18"><path d="M15 2V1H3v1H0v4c0 1.6 1.4 3 3 3v1c.4 1.5 3 2.6 5 3v2H5s-1 1.5-1 2h10c0-.4-1-2-1-2h-3v-2c2-.4 4.6-1.5 5-3V9c1.6-.2 3-1.4 3-3V2h-3zM3 7c-.5 0-1-.5-1-1V4h1v3zm8.4 2.5L9 8 6.6 9.4l1-2.7L5 5h3l1-2.7L10 5h2.8l-2.3 1.8 1 2.7h-.1zM16 6c0 .5-.5 1-1 1V4h1v2z"/></svg>
            <span class="indicator-badge js-unread-count _positive d-none">+-6</span>
        </a>
    </li>
    <li class="-item help-button-item" data-remove-order=1>
        <a href="#" class="-link js-help-button" title="Help Center and other resources" role="menuitem" aria-haspopup="true" aria-controls="topbar-help-dialog"
           data-ga="[&quot;top navigation&quot;,&quot;help menu click&quot;,null,null,null]"><svg aria-hidden="true" class="svg-icon iconHelp" width="18" height="18" viewBox="0 0 18 18"><path d="M9 1a8 8 0 1 0 0 16A8 8 0 0 0 9 1zm.81 12.13c-.02.71-.55 1.15-1.24 1.13-.66-.02-1.17-.49-1.15-1.2.02-.72.56-1.18 1.22-1.16.7.03 1.2.51 1.17 1.23zM11.77 8c-.3.34-.65.65-1.02.91l-.53.37c-.26.2-.42.43-.5.69a4 4 0 0 0-.09.75c0 .05-.03.16-.18.16H7.88c-.16 0-.18-.1-.18-.15.03-.66.12-1.21.4-1.66.4-.49.88-.9 1.43-1.22.16-.12.28-.25.38-.39a1.34 1.34 0 0 0 .02-1.71c-.24-.31-.51-.46-1.03-.46-.51 0-.8.26-1.02.6-.21.33-.18.73-.18 1.1H5.75c0-1.38.35-2.25 1.1-2.76.52-.35 1.17-.5 1.93-.5 1 0 1.79.18 2.49.71.64.5.98 1.18.98 2.12 0 .57-.2 1.05-.48 1.44z"/></svg></a>
    </li>
    <div class="topbar-dialog help-dialog js-help-dialog dno" id="topbar-help-dialog" role="menu">
        <div class="modal-content">
            <ul>
                                    <li>
                        <a href="/tour" class="js-gps-track" data-gps-track="help_popup.click({ item_type:1 })"
                           data-ga="[&quot;top navigation&quot;,&quot;tour submenu click&quot;,null,null,null]">
                            Tour
                            <span class="item-summary">
                                Start here for a quick overview of the site
                            </span>
                        </a>
                    </li>
                <li>
                    <a href="/help" class="js-gps-track"
                       data-gps-track="help_popup.click({ item_type:4 })"
                       data-ga="[&quot;top navigation&quot;,&quot;help center&quot;,null,null,null]">
                        Help Center
                        <span class="item-summary">
                            Detailed answers to any questions you might have
                        </span>
                    </a>
                </li>
                        <li>
                            <a href="https://meta.stackoverflow.com" class="js-gps-track" data-gps-track="help_popup.click({ item_type:2 })"
                               data-ga="[&quot;top navigation&quot;,&quot;meta submenu click&quot;,null,null,null]">
                                Meta
                                <span class="item-summary">
                                    Discuss the workings and policies of this site
                                </span>
                            </a>
                        </li>
                        <li>    
                            <a href="https://stackoverflow.com/company/about" class="js-gps-track" data-gps-track="help_popup.click({ item_type:6 })"
                               data-ga="[&quot;top navigation&quot;,&quot;about us submenu click&quot;,null,null,null]">    
                                About Us    
                                <span class="item-summary"> 
                                    Learn more about Stack Overflow the company 
                                </span> 
                            </a>    
                        </li>   
                        <li>    
                            <a href="https://www.stackoverflowbusiness.com/?ref=topbar_help" class="js-gps-track" data-gps-track="help_popup.click({ item_type:7 })"
                               data-ga="[&quot;top navigation&quot;,&quot;business submenu click&quot;,null,null,null]">
                                Business
                                <span class="item-summary">
                                    Learn more about hiring developers or posting ads with us
                                </span>
                            </a>
                        </li>
            </ul>
        </div>
    </div>
    <li class="-item site-switcher-item">
        <a href="https://stackexchange.com" class="-link js-site-switcher-button js-gps-track" data-gps-track="site_switcher.show"
           aria-label="Site switcher"
           title="A list of all 175 Stack Exchange sites"
           role="menuitem" aria-haspopup="true" aria-expanded="false"
           data-ga="[&quot;top navigation&quot;,&quot;stack exchange click&quot;,null,null,null]">
            <svg aria-hidden="true" class="svg-icon iconStackExchange" width="18" height="18" viewBox="0 0 18 18"><path d="M15 1H3a2 2 0 0 0-2 2v2h16V3a2 2 0 0 0-2-2zM1 13c0 1.1.9 2 2 2h8v3l3-3h1a2 2 0 0 0 2-2v-2H1v2zm16-7H1v4h16V6z"/></svg>
        </a>
    </li>


    <li class="js-topbar-dialog-corral" role="presentation">


    <div class="topbar-dialog siteSwitcher-dialog dno" role="menu">
        <div class="header">
            <h3><a href="https://stackoverflow.com">current community</a>
            </h3>
        </div>
        <div class="modal-content current-site-container">
            <ul class="current-site">
                    <li class="grid">
                            <div class="fl1">
            <a href="https://stackoverflow.com"
       class="current-site-link site-link js-gps-track grid gs8 gsx"
       data-id="1"
       data-gps-track="site_switcher.click({ item_type:3 })">
        <div class="favicon favicon-stackoverflow site-icon grid--cell" title="Stack Overflow"></div>
        <span class="grid--cell fl1">
            Stack Overflow
        </span>
    </a>

    </div>
    <div class="related-links">
            <a href="https://stackoverflow.com/help" class="js-gps-track"     data-gps-track="site_switcher.click({ item_type:14 })"
>help</a>
                    <a href="https://chat.stackoverflow.com" class="js-gps-track"     data-gps-track="site_switcher.click({ item_type:6 })"
>chat</a>
                    <a href="https://stackoverflow.com/users/logout" class="js-gps-track"     data-gps-track="site_switcher.click({ item_type:8 })"
>log out</a>
    </div>

                    </li>
                    <li class="related-site grid">
                            <div class="L-shaped-icon-container">
        <span class="L-shaped-icon"></span>
    </div>

                            <a href="https://meta.stackoverflow.com"
       class="site-link js-gps-track grid gs8 gsx"
       data-id="552"
       data-gps-track="site.switch({ target_site:552, item_type:3 }),site_switcher.click({ item_type:4 })">
        <div class="favicon favicon-stackoverflowmeta site-icon grid--cell" title="Meta Stack Overflow"></div>
        <span class="grid--cell fl1">
            Meta Stack Overflow
        </span>
    </a>

                    </li>
            </ul>
        </div>

        <div class="header" id="your-communities-header">
            <h3>
                    <a href="https://stackexchange.com/users/4127764/?tab=accounts">your communities</a>
            </h3>

                <a href="#" id="edit-pinned-sites">edit</a>
                <a href="#" id="cancel-pinned-sites" style="display: none;">cancel</a>
        </div>
        <div class="modal-content" id="your-communities-section">

                <ul class="my-sites">
                        <li>
                                <a href="https://pt.stackoverflow.com"
       class="site-link js-gps-track grid gs8 gsx"
       data-id="526"
       data-gps-track="site.switch({ target_site:526, item_type:3 }),site_switcher.click({ item_type:1 })">
        <div class="favicon favicon-br site-icon grid--cell" title="Stack Overflow em Português"></div>
        <span class="grid--cell fl1">
            Stack Overflow em Portugu&#234;s
        </span>
            <span class="rep-score grid--cell">1,355</span>
    </a>

                        </li>
                        <li>
                                <a href="https://security.stackexchange.com"
       class="site-link js-gps-track grid gs8 gsx"
       data-id="162"
       data-gps-track="site.switch({ target_site:162, item_type:3 }),site_switcher.click({ item_type:1 })">
        <div class="favicon favicon-security site-icon grid--cell" title="Information Security"></div>
        <span class="grid--cell fl1">
            Information Security
        </span>
            <span class="rep-score grid--cell">131</span>
    </a>

                        </li>
                        <li>
                                <a href="https://codereview.stackexchange.com"
       class="site-link js-gps-track grid gs8 gsx"
       data-id="196"
       data-gps-track="site.switch({ target_site:196, item_type:3 }),site_switcher.click({ item_type:1 })">
        <div class="favicon favicon-codereview site-icon grid--cell" title="Code Review"></div>
        <span class="grid--cell fl1">
            Code Review
        </span>
            <span class="rep-score grid--cell">106</span>
    </a>

                        </li>
                        <li>
                                <a href="https://stackoverflow.com"
       class="site-link js-gps-track grid gs8 gsx"
       data-id="1"
       data-gps-track="site.switch({ target_site:1, item_type:3 }),site_switcher.click({ item_type:1 })">
        <div class="favicon favicon-stackoverflow site-icon grid--cell" title="Stack Overflow"></div>
        <span class="grid--cell fl1">
            Stack Overflow
        </span>
            <span class="rep-score grid--cell">105</span>
    </a>

                        </li>
                        <li>
                                <a href="https://askubuntu.com"
       class="site-link js-gps-track grid gs8 gsx"
       data-id="89"
       data-gps-track="site.switch({ target_site:89, item_type:3 }),site_switcher.click({ item_type:1 })">
        <div class="favicon favicon-askubuntu site-icon grid--cell" title="Ask Ubuntu"></div>
        <span class="grid--cell fl1">
            Ask Ubuntu
        </span>
            <span class="rep-score grid--cell">101</span>
    </a>

                        </li>
                </ul>
                    <div class="pinned-site-editor-container" style="display: none;">
                        <input type="hidden" name="fkey" value="a7ebc7f5561be1e0ed1eb49164847088ba476b8558b4a1c70b050ba4c6ffbe07">
                        <input id="js-site-search-txt"
                                type="text"
                                class="site-filter-input"
                                value=""
                                placeholder="Add a Stack Exchange community"/>
                        <input type="submit" id="pin-site-btn" value="Add" disabled="disabled"/>
                        <ul class="js-found-sites found-sites"></ul>
                        <ul class="pinned-site-list sortable" data-custom-list="False">
                        </ul>
                        <input type="submit" value="Save" id="save-pinned-sites-btn" disabled="disabled"/>
                        <a href="#" id="reset-pinned-sites">reset to default list</a>
                    </div>
        </div>

        <div class="header">
            <h3><a href="https://stackexchange.com/sites">more stack exchange communities</a>
            </h3>
            <a href="https://stackoverflow.blog" class="fr">company blog</a>
        </div>
        <div class="modal-content">
                <div class="child-content"></div>
        </div>        
    </div>
    </li>
</ol>

    </div>
</header>

    <script>
        StackExchange.ready(function () { StackExchange.topbar.init({ observeSize: true }); });
        StackExchange.scrollPadding.setPaddingTop(50, 10);     </script>






    <div class="container">






<div id="left-sidebar" data-is-here-when="md lg" class="left-sidebar js-pinned-left-sidebar">
    <div class="left-sidebar--sticky-container js-sticky-leftnav">
            <nav role="navigation">
                <ol class="nav-links">
                        <li>
        <a
            href="/"
            class="pl8 js-gps-track nav-links--link"
            
            data-gps-track="top_nav.click({is_current:false, location:2, destination:8})">
Home        </a>
    </li>

                    <li>
                        <ol class="nav-links">
                                <li class="fs-fine tt-uppercase ml8 mt16 mb4 fc-light">Public</li>
                                <li class=" youarehere">
        <a id="nav-questions"
            href="/questions"
            class="pl8 js-gps-track nav-links--link -link__with-icon"
            
            data-gps-track="top_nav.click({is_current:true, location:2, destination:1})">
<svg aria-hidden="true" class="svg-icon iconGlobe" width="18" height="18" viewBox="0 0 18 18"><path d="M9 1a8 8 0 1 0 0 16A8 8 0 0 0 9 1zM8 15.32a6.4 6.4 0 0 1-5.23-7.75L7 11.68v.8c0 .88.12 1.32 1 1.32v1.52zm5.72-2c-.2-.66-1-1.32-1.72-1.32h-1v-2c0-.44-.56-1-1-1H6V7h1c.44 0 1-.56 1-1V5h2c.88 0 1.4-.72 1.4-1.6v-.33a6.4 6.4 0 0 1 2.32 10.24v.01z"/></svg>                <span class="-link--channel-name">Stack Overflow</span>
        </a>
    </li>

    <li>
        <a id="nav-tags"
            href="/tags"
            class=" js-gps-track nav-links--link"
            
            data-gps-track="top_nav.click({is_current:false, location:2, destination:2})">
Tags        </a>
    </li>
    <li>
        <a id="nav-users"
            href="/users"
            class=" js-gps-track nav-links--link"
            
            data-gps-track="top_nav.click({is_current:false, location:2, destination:3})">
Users        </a>
    </li>
    <li>
        <a id="nav-jobs"
            href="/jobs?med=site-ui&amp;ref=jobs-tab"
            class=" js-gps-track nav-links--link"
            
            data-gps-track="top_nav.click({is_current:false, location:2, destination:6})">
Programming Jobs        </a>
    </li>
                                                    </ol>
                    </li>
                        <li>
                            <ol class="nav-links">
                                    <li class="grid ai-center jc-space-between ml8 mt24 mb4">
                                        <div class="grid--cell tt-uppercase fs-fine fc-light">Teams</div>
                                        <div class="grid--cell fs-fine fc-light mr4">
                                            <a href="javascript:void(0)" class="s-link s-link__inherit js-gps-track"
                                                role="button"
                                                aria-controls="popover-teams-create-cta"
                                                data-controller="s-popover"
                                                data-action="s-popover#toggle"
                                                data-s-popover-placement="bottom-start"
                                                data-s-popover-toggle-class="is-selected"
                                                data-gps-track="teams.create.left-sidenav.click({ Action: ShowInfo })"
                                                data-ga="[&quot;teams left navigation&quot;,&quot;left nav show teams info&quot;,null,null,null]">
                                                What’s this?
                                            </a>

                                            <div class="s-popover w-auto p16"
                                                id="popover-teams-create-cta"
                                                role="menu"
                                                aria-hidden="true">
                                                <div class="s-popover--arrow"></div>

                                                <div class="ps-relative overflow-hidden">
                                                    <p class="mb2"><strong>Teams</strong></p>
                                                    <p class="mb16 fs-caption fc-medium">Q&amp;A for Work</p>
                                                    <p class="mb8 fs-caption fc-medium">
                                                        Setup a private space for you and your coworkers to ask questions and share information.
                                                    </p>
                                                    <a href="https://stackoverflow.com/teams"
                                                    class="js-gps-track ws-nowrap d-block"
                                                    data-gps-track="teams.create.left-sidenav.click({ Action: CtaClick })"
                                                    data-ga="[&quot;teams left navigation&quot;,&quot;left nav cta&quot;,&quot;stackoverflow.com/teams&quot;,null,null]">
                                                        Learn more about Teams
                                                    </a>
                                                </div>

                                                <div class="ps-absolute t8 r8">
                                                    <svg width="53" height="49" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M49 11l.2 31H18.9L9 49v-7H4V8h31" fill="#CCEAFF" /><path d="M44.5 19v-.3l-.2-.1-18-13-.1-.1H.5v33h4V46l.8-.6 9.9-6.9h29.3V19z" stroke="#1060E1" stroke-miterlimit="10" /><path d="M31 2l6-1.5 7 2V38H14.9L5 45v-7H1V6h25l5-4z" fill="#fff" /><path d="M7 16.5h13m-13 6h14m-14 6h18" stroke="#1060E1" stroke-miterlimit="10" /><path d="M39 30a14 14 0 1 0 0-28 14 14 0 0 0 0 28z" fill="#FFB935" /><path d="M50.5 14a13.5 13.5 0 1 1-27 0 13.5 13.5 0 0 1 27 0z" stroke="#F48024" stroke-miterlimit="10" /><path d="M32.5 21.5v-8h9v8h-9zm2-9.5V9.3A2.5 2.5 0 0 1 37 6.8a2.5 2.5 0 0 1 2.5 2.5V12h-5zm2 3v2m1-2v2" stroke="#fff" stroke-miterlimit="10" /></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ps-relative">
                                        <a href="https://stackoverflow.com/teams"
                                            class="pl8 js-gps-track nav-links--link"
                                            title="A private, secure home for your team&#39;s questions and answers. Starts at $10/month"
                                            data-gps-track="teams.create.left-sidenav.click({ Action: TeamsClick })"
                                            data-ga="[&quot;teams left navigation&quot;,&quot;left nav team click&quot;,&quot;stackoverflow.com/teams&quot;,null,null]">
                                            <div class="grid ai-center">
                                                <div class="grid--cell s-avatar va-middle bg-orange-400">
                                                    <div class="s-avatar--letter mtn1">
                                                        <svg aria-hidden="true" class="svg-icon iconBriefcaseSm" width="14" height="14" viewBox="0 0 14 14"><path d="M4 3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h1a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h1V3zm5 0H5v1h4V3z"/></svg>
                                                    </div>
                                                    <svg aria-hidden="true" class="svg-icon native s-avatar--badge iconShieldXSm" width="9" height="10" viewBox="0 0 9 10"><path d="M0 1.84L4.5 0 9 1.84v3.17C9 7.53 6.3 10 4.5 10 2.7 10 0 7.53 0 5.01V1.84z" fill="#fff"/><path d="M1 2.5L4.5 1 8 2.5v2.51C8 7.34 5.34 9 4.5 9 3.65 9 1 7.34 1 5.01V2.5zm2.98 3.02L3.2 7h2.6l-.78-1.48a.4.4 0 0 1 .15-.38c.34-.24.73-.7.73-1.14 0-.71-.5-1.23-1.41-1.23-.92 0-1.39.52-1.39 1.23 0 .44.4.9.73 1.14.12.08.18.23.15.38z" fill="#6A7E7C"/></svg>
                                                </div>
                                                <div class="grid--cell pl6 js-create-team-btn-with-tooltip">
                                                    Q&amp;A for Work
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                            </ol>
                        </li>
                </ol>
            </nav>
    </div>

</div>


        <div id="content" class="snippet-hidden">


            


<div itemprop="mainEntity" itemscope itemtype="http://schema.org/Question">
    <link itemprop="image" href="https://cdn.sstatic.net/Sites/stackoverflow/img/apple-touch-icon.png?v=c78bd457575a">

    <div class="inner-content clearfix">
    
    

            <div id="question-header" class="grid sm:fd-column">
                    <h1 itemprop="name" class="grid--cell fs-headline1 fl1 ow-break-word mb8"><a href="/questions/33705976/when-should-i-use-static-methods" class="question-hyperlink">When should I use static methods?</a></h1>

            
<div class="pl8 aside-cta grid--cell print:d-none">
        <a href="/questions/ask" class="ws-nowrap s-btn s-btn__primary" >
            Ask Question
        </a>
</div>

        </div>
        <div class="grid fw-wrap pb8 mb16 bb bc-black-2">
                <div class="grid--cell ws-nowrap mr16 mb8" title="2015-11-14 06:57:08Z">
                    <span class="fc-light mr2">Asked</span>
                    <time itemprop="dateCreated" datetime="2015-11-14T06:57:08">3 years, 9 months ago</time>
                </div>
                    <div class="grid--cell ws-nowrap mr16 mb8">
                        <span class="fc-light mr2">Active</span>
                        <a href="?lastactivity" class="s-link s-link__inherit" title="2018-11-01 18:41:00Z">9 months ago</a>
                    </div>
                <div class="grid--cell ws-nowrap mb8" title="Viewed 15,693 times">
                    <span class="fc-light mr2">Viewed</span>
                    16k times
                </div>
        </div>
            <div id="mainbar" role="main" aria-label="question and answers">

            

<div class="question" data-questionid="33705976"  id="question">

    <style>.everyoneloves__top-leaderboard:empty,.everyoneloves__mid-leaderboard:empty,.everyoneloves__bot-mid-leaderboard:empty{                margin-bottom:0;
}</style>
        <div id="dfp-tlb" class="everyonelovesstackoverflow everyoneloves__top-leaderboard"></div>
    <div class="post-layout">
        <div class="votecell post-layout--left">
            

<div class="js-voting-container grid fd-column ai-stretch gs4 fc-black-200" data-post-id="33705976">
        <button class="js-vote-up-btn grid--cell s-btn s-btn__unset c-pointer" title="This question shows research effort; it is useful and clear (click again to undo)" aria-pressed="false" aria-label="up vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="svg-icon m0 iconArrowUpLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 26h32L18 10 2 26z"/></svg></button>
        <div class="js-vote-count grid--cell fc-black-500 fs-title grid fd-column ai-center" itemprop="upvoteCount" data-value="31">31</div>
        <button class="js-vote-down-btn grid--cell s-btn s-btn__unset c-pointer" title="This question does not show any research effort; it is unclear or not useful (click again to undo)" aria-pressed="false" aria-label="down vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="svg-icon m0 iconArrowDownLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 10h32L18 26 2 10z"/></svg></button>

        <button class="js-favorite-btn s-btn s-btn__unset c-pointer py8" aria-pressed="false" aria-label="favorite (13)" data-selected-classes="fc-yellow-600">
            <svg aria-hidden="true" class="svg-icon iconStar" width="18" height="18" viewBox="0 0 18 18"><path d="M9 12.65l-5.29 3.63 1.82-6.15L.44 6.22l6.42-.17L9 0l2.14 6.05 6.42.17-5.1 3.9 1.83 6.16L9 12.65z"/></svg>
            <div class="js-favorite-count mt8" data-value="13">13</div>
        </button>


</div>

        </div>

        
<div class="postcell post-layout--right">
    
    <div class="post-text" itemprop="text">

<p>I have a class that is containing 10 methods. <strong>I always need to use one of those methods</strong>. Now I want to know, which approach is better? </p>

<pre><code>class cls{
    public function func1(){}
    public function func2(){}
    .
    .
    public function func10(){}
}

$obj  = new cls;
$data = $obj-&gt;func3(); // it is random, it can be anything (func1, or func9 or ...)
</code></pre>

<p>OR</p>

<pre><code>class cls{
    public static function func1(){}
    public static function func2(){}
    .
    .
    public static function func10(){}
}

cls::func3(); // it is random, it can be anything (func1, or func9 or ...)
</code></pre>
    </div>

        <div class="post-taglist grid gs4 gsy fd-column">
            <div class="grid ps-relative d-block">
                <a href="/questions/tagged/php" class="post-tag" title="show questions tagged &#39;php&#39;" rel="tag">php</a> <a href="/questions/tagged/oop" class="post-tag" title="show questions tagged &#39;oop&#39;" rel="tag">oop</a> 
            </div>
        </div>

    <div class="mb0 ">
        <div class="mt16 pt4 grid gs8 gsy fw-wrap jc-end ai-start">
            <div class="grid--cell mr16" style="flex: 1 1 100px;">
<div class="post-menu"><a href="/q/33705976/3386417" title="short permalink to this question" class="short-link" itemprop="url" id="link-post-33705976">share</a><span class="lsep">|</span><a href="/posts/33705976/edit" class="suggest-edit-post" title="revise and improve this post">edit</a><span class="lsep">|</span><a href="#"
       class="flag-post-link"
       title="flag this post for serious problems or moderator attention"
       data-postid="33705976">flag</a></div>
            </div>

                <div class="post-signature grid--cell">
<div class="user-info ">
    <div class="user-action-time">
        <a href="/posts/33705976/revisions" title="show all edits to this post">edited <span title="2017-11-30 13:43:46Z" class="relativetime">Nov 30 '17 at 13:43</span></a>
    </div>
    <div class="user-gravatar32">
        <a href="/users/2428025/silverdr"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/62ff3bdb5a09da1fc00ab3037ed1cac3?s=32&amp;d=identicon&amp;r=PG&amp;f=1" alt="" width="32" height="32"></div></a>
    </div>
    <div class="user-details">
        <a href="/users/2428025/silverdr">silverdr</a>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">934</span><span title="1 gold badge" aria-hidden="true"><span class="badge1"></span><span class="badgecount">1</span></span><span class="v-visible-sr">1 gold badge</span><span title="14 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">14</span></span><span class="v-visible-sr">14 silver badges</span><span title="21 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">21</span></span><span class="v-visible-sr">21 bronze badges</span>
        </div>
    </div>
</div>                </div>
            <div class="post-signature owner grid--cell">
<div class="user-info ">
    <div class="user-action-time">
        asked <span title="2015-11-14 06:57:08Z" class="relativetime">Nov 14 '15 at 6:57</span>
    </div>
    <div class="user-gravatar32">
        <a href="/users/5259594/stack"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/2d23d59c69b6c2d0a950c57c83174673?s=32&amp;d=identicon&amp;r=PG&amp;f=1" alt="" width="32" height="32"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/5259594/stack">stack</a><span class="d-none" itemprop="name">stack</span>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">3,727</span><span title="6 gold badges" aria-hidden="true"><span class="badge1"></span><span class="badgecount">6</span></span><span class="v-visible-sr">6 gold badges</span><span title="26 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">26</span></span><span class="v-visible-sr">26 silver badges</span><span title="63 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">63</span></span><span class="v-visible-sr">63 bronze badges</span>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>
    
</div>
        <div class="js-post-notices post-layout--full">
                                            </div>

    <div class="post-layout--right">
        <div id="comments-33705976" class="comments js-comments-container " data-post-id="33705976" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="true"
                    data-cansee="false"
                    data-comments-unavailable="false"
                    data-addlink-disabled="false">


    <li id="comment-86575728" class="comment js-comment " data-comment-id="86575728">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
                    <span title="number of &#39;useful comment&#39; votes received"
                            class="cool">4</span>
            </div>
                <div class="comment-voting mtn2 js-comment-edit-hide">
                        <a tabindex="0" role="button" href="#" class="comment-up comment-up-off" aria-label="Upvote Comment" title="This comment adds something useful to the post">
                            <svg aria-hidden="true" class="svg-icon iconArrowUp" width="18" height="18" viewBox="0 0 18 18"><path d="M1 13h16L9 5l-8 8z"/></svg>
                        </a>
                </div>
                            <div class="comment-flagging js-comment-edit-hide">
                    <button class="js-comment-flag s-btn s-btn__unset bg-transparent fc-black-100 c-pointer"
                            aria-label="Flag Comment"
                            aria-pressed="false"
                            title="Flag this comment for serious problems or moderator attention">
                        <svg aria-hidden="true" class="svg-icon iconFlag" width="18" height="18" viewBox="0 0 18 18"><path d="M3 2v14h2v-6h3.6l.4 1h6V3H9.5L9 2H3z"/></svg>
                    </button>
                </div>
        </div>
        <div class="comment-text js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">It&#39;s generally a bad idea to depend on static methods because they make substitution (and therefore specialising or testing) difficult.</span>
                
                    &ndash;&nbsp;<a href="/users/477127/gordonm"
                       title="23,099 reputation"
                       class="comment-user">GordonM</a>
                <span class="comment-date" dir="ltr"><span title="2018-04-11 16:27:03Z" class="relativetime-clean">Apr 11 '18 at 16:27</span></span>
                                                            </div>
        </div>
    </li>
            </ul>
                <div class="comment-form">
                    <form id="add-comment-33705976" 
                            class="" 
                            data-placeholdertext="Use comments to ask for more information or suggest improvements. Avoid answering questions in comments."></form>
                </div>
        </div>

        <div id="comments-link-33705976" >

                <a class="js-add-link comments-link "
                   title="Use comments to ask for more information or suggest improvements. Avoid answering questions in comments."
                   href=#>add a comment</a><span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="expand to show all comments on this post" href=# onclick=""></a>
        </div>         
    </div>                      <div class="bounty-notification post-layout--right">
              <div style="margin-top:20px">
                <a class="bounty-link bounty" title="offer some of your reputation for better answers">
                    start a bounty
                </a>
              </div>
              </div>
    </div>
</div>


<div id="dfp-isb" class="everyonelovesstackoverflow everyoneloves__inline-sidebar"></div>
            <div id="answers">

                <a name="tab-top"></a>
                <div id="answers-header">
                    <div class="subheader answers-subheader">
                        <h2 data-answercount="5">
                                5 Answers
                            <span style="display:none;" itemprop="answerCount">5</span>
                        </h2>
                        <div>
                            
<div id="tabs">
        <a href="/questions/33705976/when-should-i-use-static-methods?answertab=active#tab-top" data-nav-xhref="" title="Answers with the latest activity first" data-value="active" data-shortcut="A">
            active</a>
        <a href="/questions/33705976/when-should-i-use-static-methods?answertab=oldest#tab-top" data-nav-xhref="" title="Answers in the order they were provided" data-value="oldest" data-shortcut="O">
            oldest</a>
        <a class="youarehere is-selected " href="/questions/33705976/when-should-i-use-static-methods?answertab=votes#tab-top" data-nav-xhref="" title="Answers with the highest score first" data-value="votes" data-shortcut="V">
            votes</a>
    </div>

                        </div>
                    </div>
                </div>




  
<a name="33706245"></a>
<div id="answer-33706245" class="answer accepted-answer" data-answerid="33706245"  itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            

<div class="js-voting-container grid fd-column ai-stretch gs4 fc-black-200" data-post-id="33706245">
        <button class="js-vote-up-btn grid--cell s-btn s-btn__unset c-pointer" title="This answer is useful (click again to undo)" aria-pressed="false" aria-label="up vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="svg-icon m0 iconArrowUpLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 26h32L18 10 2 26z"/></svg></button>
        <div class="js-vote-count grid--cell fc-black-500 fs-title grid fd-column ai-center" itemprop="upvoteCount" data-value="56">56</div>
        <button class="js-vote-down-btn grid--cell s-btn s-btn__unset c-pointer" title="This answer is not useful (click again to undo)" aria-pressed="false" aria-label="down vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="svg-icon m0 iconArrowDownLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 10h32L18 26 2 10z"/></svg></button>


            <div class="js-accepted-answer-indicator grid--item fc-green-500 ta-center p4" title="loading when this answer was accepted..." tabindex="0" role="note" aria-label="accepted">
                <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36" viewBox="0 0 36 36"><path d="M6 14l8 8L30 6v8L14 30l-8-8v-8z"/></svg>
            </div>

</div>

        </div>
        
<div class="answercell post-layout--right">
    
    <div class="post-text" itemprop="text">
<p>It is an interesting subject. I'm gonna give you a design oriented answer.</p>

<p>In my opinion, you should never use a static class/function in a good OOP architecture.</p>

<p>When you use static, this is to call a function without an instance of the class. The main reason is often to represent a service class which should not be instantiated many times.</p>

<p>I will give you 3 solutions (from the worst to the best) to achieve that:</p>

<p><strong>Static</strong></p>

<p>A static class (with only static functions) prevent you from using many OOP features like inheritance, interface implementation. If you really think of what is a static function, it is a function namespaced by the name of its class. You already have namespaces in PHP, so why add another layer?</p>

<p>Another big disadvantage is that you cannot define clear dependencies with your static class and the classes using it which is a bad thing for maintenability and scalability of your application.</p>

<p><strong>Singleton</strong></p>

<p>A singleton is a way to force a class to have only one instance:</p>

<pre><code>&lt;?php

class Singleton {
    // Unique instance.
    private static $instance = null;

    // Private constructor prevent you from instancing the class with "new".
    private function __construct() {  
    }

    // Method to get the unique instance.
    public static function getInstance() {
        // Create the instance if it does not exist.
        if (!isset(self::$instance)) {
            self::$instance = new Singleton();  
        }

        // Return the unique instance.
        return self::$instance;
    }
}
</code></pre>

<p>It is a better way because you can use inheritance, interfaces and your method will be called on an instanciated object. This means you can define contracts and use <a href="https://en.wikipedia.org/wiki/Coupling_(computer_programming)" rel="noreferrer">low coupling</a> with the classes using it. However some people consider the <a href="https://stackoverflow.com/questions/12755539/why-is-singleton-considered-an-anti-pattern">singleton as an anti pattern</a> especially because if you want to have 2 or more instances of your class with different input properties (like the classic example of the connection to 2 different databases) you cannot without a big refactoring of all your code using the singleton.</p>

<p><strong>Service</strong></p>

<p>A service is an instance of a standard class. It is a way to rationalize your code. This kind of architecture is called SOA (service oriented architecture). I give you an example:</p>

<p>If you want to add a method to sell a product in a store to a consumer and you have classes <code>Product</code>, <code>Store</code> and <code>Consumer</code>. Where should you instantiate this method? I can guarantee that if you think it is more logical in one of these three class today it could be anything else tomorrow. This leads to lots of duplications and a difficulty to find where is the code you are looking for. Instead, you can use a service class like a <code>SaleHandler</code> for example which will know how to manipulate your data classes.</p>

<p>It is a good idea to use a framework helping you to inject them into each others (<a href="https://en.wikipedia.org/wiki/Dependency_injection" rel="noreferrer">dependency injection</a>) in order to use them at their full potential. In the PHP community, you have a nice example of implementation of this in <a href="http://symfony.com/doc/current/components/dependency_injection/index.html" rel="noreferrer">Symfony2</a> for instance.</p>

<hr>

<p>To sum up:</p>

<ul>
<li><p>If you do not have a framework, singletons are certainly an option even if I personally prefer a simple file where I make manual dependency injection.</p></li>
<li><p>If you have a framework, use its dependency injection feature to do that kind of thing.</p></li>
<li><p>You should not use static method (in OOP). If you need a static method in one of your class, this means you can create a new singleton/service containing this method and inject it to the instance of classes needing it.</p></li>
</ul>
    </div>
    <div class="grid mb0 fw-wrap ai-start jc-end gs8 gsy">
        <time itemprop="dateCreated" datetime="2015-11-14T07:37:36"></time>
    <div class="grid--cell mr16" style="flex: 1 1 100px;">
<div class="post-menu"><a href="/a/33706245/3386417" title="short permalink to this answer" class="short-link" itemprop="url" id="link-post-33706245">share</a><span class="lsep">|</span><a href="/posts/33706245/edit" class="suggest-edit-post" title="revise and improve this post">edit</a><span class="lsep">|</span><a href="#"
       class="flag-post-link"
       title="flag this post for serious problems or moderator attention"
       data-postid="33706245">flag</a></div>                    </div>
    <div class="post-signature grid--cell fl0">
<div class="user-info ">
    <div class="user-action-time">
        <a href="/posts/33706245/revisions" title="show all edits to this post">edited <span title="2018-04-11 16:10:28Z" class="relativetime">Apr 11 '18 at 16:10</span></a>
    </div>
    <div class="user-gravatar32">
        
    </div>
    <div class="user-details">
        
        <div class="-flair">
            
        </div>
    </div>
</div>    </div>
            


    <div class="post-signature grid--cell fl0">
<div class="user-info user-hover">
    <div class="user-action-time">
        answered <span title="2015-11-14 07:37:36Z" class="relativetime">Nov 14 '15 at 7:37</span>
    </div>
    <div class="user-gravatar32">
        <a href="/users/4292519/gnucki"><div class="gravatar-wrapper-32"><img src="https://i.stack.imgur.com/7AsBb.png?s=32&amp;g=1" alt="" width="32" height="32"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/4292519/gnucki">Gnucki</a><span class="d-none" itemprop="name">Gnucki</span>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">3,873</span><span title="2 gold badges" aria-hidden="true"><span class="badge1"></span><span class="badgecount">2</span></span><span class="v-visible-sr">2 gold badges</span><span title="20 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">20</span></span><span class="v-visible-sr">20 silver badges</span><span title="37 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">37</span></span><span class="v-visible-sr">37 bronze badges</span>
        </div>
    </div>
</div>

    </div>
    </div>
    
</div>

        <div class="js-post-notices post-layout--full">
        </div>

    <div class="post-layout--right">
        <div id="comments-33706245" class="comments js-comments-container " data-post-id="33706245" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="true"
                    data-cansee="false"
                    data-comments-unavailable="false"
                    data-addlink-disabled="false">


    <li id="comment-81171878" class="comment js-comment " data-comment-id="81171878">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
                    <span title="number of &#39;useful comment&#39; votes received"
                            class="warm">7</span>
            </div>
                <div class="comment-voting mtn2 js-comment-edit-hide">
                        <a tabindex="0" role="button" href="#" class="comment-up comment-up-off" aria-label="Upvote Comment" title="This comment adds something useful to the post">
                            <svg aria-hidden="true" class="svg-icon iconArrowUp" width="18" height="18" viewBox="0 0 18 18"><path d="M1 13h16L9 5l-8 8z"/></svg>
                        </a>
                </div>
                            <div class="comment-flagging js-comment-edit-hide">
                    <button class="js-comment-flag s-btn s-btn__unset bg-transparent fc-black-100 c-pointer"
                            aria-label="Flag Comment"
                            aria-pressed="false"
                            title="Flag this comment for serious problems or moderator attention">
                        <svg aria-hidden="true" class="svg-icon iconFlag" width="18" height="18" viewBox="0 0 18 18"><path d="M3 2v14h2v-6h3.6l.4 1h6V3H9.5L9 2H3z"/></svg>
                    </button>
                </div>
        </div>
        <div class="comment-text js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">So instead of using a feature that is native and simple of use, we should use singleton that its more complex, verbose and prone of error?.  I disagree.</span>
                
                    &ndash;&nbsp;<a href="/users/202705/magallanes"
                       title="3,780 reputation"
                       class="comment-user">magallanes</a>
                <span class="comment-date" dir="ltr"><span title="2017-11-04 12:55:42Z" class="relativetime-clean">Nov 4 '17 at 12:55</span></span>
                                                            </div>
        </div>
    </li>
            </ul>
                <div class="comment-form">
                    <form id="add-comment-33706245" 
                            class="" 
                            data-placeholdertext="Use comments to ask for more information or suggest improvements. Avoid comments like “+1” or “thanks”."></form>
                </div>
        </div>

        <div id="comments-link-33706245" >

                <a class="js-add-link comments-link "
                   title="Use comments to ask for more information or suggest improvements. Avoid comments like “+1” or “thanks”."
                   href=#>add a comment</a><span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="expand to show all comments on this post" href=# onclick=""></a>
        </div>         
    </div>    </div>
</div>
<div id="dfp-mlb" class="everyonelovesstackoverflow everyoneloves__mid-leaderboard"></div>
  
<a name="33706033"></a>
<div id="answer-33706033" class="answer" data-answerid="33706033"  itemprop="suggestedAnswer" itemscope itemtype="http://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            

<div class="js-voting-container grid fd-column ai-stretch gs4 fc-black-200" data-post-id="33706033">
        <button class="js-vote-up-btn grid--cell s-btn s-btn__unset c-pointer" title="This answer is useful (click again to undo)" aria-pressed="false" aria-label="up vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="svg-icon m0 iconArrowUpLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 26h32L18 10 2 26z"/></svg></button>
        <div class="js-vote-count grid--cell fc-black-500 fs-title grid fd-column ai-center" itemprop="upvoteCount" data-value="4">4</div>
        <button class="js-vote-down-btn grid--cell s-btn s-btn__unset c-pointer" title="This answer is not useful (click again to undo)" aria-pressed="false" aria-label="down vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="svg-icon m0 iconArrowDownLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 10h32L18 26 2 10z"/></svg></button>


            <div class="js-accepted-answer-indicator grid--item fc-green-500 ta-center p4 d-none" title="loading when this answer was accepted..." tabindex="0" role="note" aria-label="accepted">
                <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36" viewBox="0 0 36 36"><path d="M6 14l8 8L30 6v8L14 30l-8-8v-8z"/></svg>
            </div>

</div>

        </div>
        
<div class="answercell post-layout--right">
    
    <div class="post-text" itemprop="text">
<p>The answer depends on what those methods do. If you're using them to mutate the state of the object at hand, you need to use the instance method calls. If they're independent functionality, then you can use the static versions, but then I'd question why they're part of a class at all.</p>
    </div>
    <div class="grid mb0 fw-wrap ai-start jc-end gs8 gsy">
        <time itemprop="dateCreated" datetime="2015-11-14T07:06:03"></time>
    <div class="grid--cell mr16" style="flex: 1 1 100px;">
<div class="post-menu"><a href="/a/33706033/3386417" title="short permalink to this answer" class="short-link" itemprop="url" id="link-post-33706033">share</a><span class="lsep">|</span><a href="/posts/33706033/edit" class="suggest-edit-post" title="revise and improve this post">edit</a><span class="lsep">|</span><a href="#"
       class="flag-post-link"
       title="flag this post for serious problems or moderator attention"
       data-postid="33706033">flag</a></div>                    </div>
            


    <div class="post-signature grid--cell fl0">
<div class="user-info ">
    <div class="user-action-time">
        answered <span title="2015-11-14 07:06:03Z" class="relativetime">Nov 14 '15 at 7:06</span>
    </div>
    <div class="user-gravatar32">
        <a href="/users/92602/scott-m"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/7fe2f5afe25b1ad852b44ccfcae4b157?s=32&amp;d=identicon&amp;r=PG" alt="" width="32" height="32"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/92602/scott-m">Scott M.</a><span class="d-none" itemprop="name">Scott M.</span>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">6,601</span><span title="22 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">22</span></span><span class="v-visible-sr">22 silver badges</span><span title="37 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">37</span></span><span class="v-visible-sr">37 bronze badges</span>
        </div>
    </div>
</div>

    </div>
    </div>
    
</div>

        <div class="js-post-notices post-layout--full">
        </div>

    <div class="post-layout--right">
        <div id="comments-33706033" class="comments js-comments-container " data-post-id="33706033" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="true"
                    data-cansee="false"
                    data-comments-unavailable="false"
                    data-addlink-disabled="false">


    <li id="comment-55184160" class="comment js-comment " data-comment-id="55184160">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
            </div>
                <div class="comment-voting mtn2 js-comment-edit-hide">
                        <a tabindex="0" role="button" href="#" class="comment-up comment-up-off" aria-label="Upvote Comment" title="This comment adds something useful to the post">
                            <svg aria-hidden="true" class="svg-icon iconArrowUp" width="18" height="18" viewBox="0 0 18 18"><path d="M1 13h16L9 5l-8 8z"/></svg>
                        </a>
                </div>
                            <div class="comment-flagging js-comment-edit-hide">
                    <button class="js-comment-flag s-btn s-btn__unset bg-transparent fc-black-100 c-pointer"
                            aria-label="Flag Comment"
                            aria-pressed="false"
                            title="Flag this comment for serious problems or moderator attention">
                        <svg aria-hidden="true" class="svg-icon iconFlag" width="18" height="18" viewBox="0 0 18 18"><path d="M3 2v14h2v-6h3.6l.4 1h6V3H9.5L9 2H3z"/></svg>
                    </button>
                </div>
        </div>
        <div class="comment-text js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">alright, thanks, but I did not get this: <i>but then I&#39;d question why they&#39;re part of a class at all.</i></span>
                
                    &ndash;&nbsp;<a href="/users/5259594/stack"
                       title="3,727 reputation"
                       class="comment-user owner">stack</a>
                <span class="comment-date" dir="ltr"><span title="2015-11-14 07:11:01Z" class="relativetime-clean">Nov 14 '15 at 7:11</span></span>
                                                            </div>
        </div>
    </li>
    <li id="comment-55184350" class="comment js-comment " data-comment-id="55184350">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
                    <span title="number of &#39;useful comment&#39; votes received"
                            class="cool">1</span>
            </div>
                <div class="comment-voting mtn2 js-comment-edit-hide">
                        <a tabindex="0" role="button" href="#" class="comment-up comment-up-off" aria-label="Upvote Comment" title="This comment adds something useful to the post">
                            <svg aria-hidden="true" class="svg-icon iconArrowUp" width="18" height="18" viewBox="0 0 18 18"><path d="M1 13h16L9 5l-8 8z"/></svg>
                        </a>
                </div>
                            <div class="comment-flagging js-comment-edit-hide">
                    <button class="js-comment-flag s-btn s-btn__unset bg-transparent fc-black-100 c-pointer"
                            aria-label="Flag Comment"
                            aria-pressed="false"
                            title="Flag this comment for serious problems or moderator attention">
                        <svg aria-hidden="true" class="svg-icon iconFlag" width="18" height="18" viewBox="0 0 18 18"><path d="M3 2v14h2v-6h3.6l.4 1h6V3H9.5L9 2H3z"/></svg>
                    </button>
                </div>
        </div>
        <div class="comment-text js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">methods / functions don&#39;t need to be a part of a class at all in PHP. It&#39;s hard to determine from the simplified example, but if they&#39;re all related to the class and what it represents then it&#39;s good to have the methods in the class. If they are separate concerns, then splitting them out would be better.</span>
                
                    &ndash;&nbsp;<a href="/users/92602/scott-m"
                       title="6,601 reputation"
                       class="comment-user">Scott M.</a>
                <span class="comment-date" dir="ltr"><span title="2015-11-14 07:27:28Z" class="relativetime-clean">Nov 14 '15 at 7:27</span></span>
                                                            </div>
        </div>
    </li>
    <li id="comment-55187396" class="comment js-comment " data-comment-id="55187396">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
            </div>
                <div class="comment-voting mtn2 js-comment-edit-hide">
                        <a tabindex="0" role="button" href="#" class="comment-up comment-up-off" aria-label="Upvote Comment" title="This comment adds something useful to the post">
                            <svg aria-hidden="true" class="svg-icon iconArrowUp" width="18" height="18" viewBox="0 0 18 18"><path d="M1 13h16L9 5l-8 8z"/></svg>
                        </a>
                </div>
                            <div class="comment-flagging js-comment-edit-hide">
                    <button class="js-comment-flag s-btn s-btn__unset bg-transparent fc-black-100 c-pointer"
                            aria-label="Flag Comment"
                            aria-pressed="false"
                            title="Flag this comment for serious problems or moderator attention">
                        <svg aria-hidden="true" class="svg-icon iconFlag" width="18" height="18" viewBox="0 0 18 18"><path d="M3 2v14h2v-6h3.6l.4 1h6V3H9.5L9 2H3z"/></svg>
                    </button>
                </div>
        </div>
        <div class="comment-text js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">ah I see, thanks, +1</span>
                
                    &ndash;&nbsp;<a href="/users/5259594/stack"
                       title="3,727 reputation"
                       class="comment-user owner">stack</a>
                <span class="comment-date" dir="ltr"><span title="2015-11-14 11:18:38Z" class="relativetime-clean">Nov 14 '15 at 11:18</span></span>
                        <span title="this comment was edited 1 time">
                            <svg aria-hidden="true" class="svg-icon va-text-bottom o50 iconPencilSm" width="14" height="14" viewBox="0 0 14 14"><path d="M11.1 1.71l1.13 1.12c.2.2.2.51 0 .71L11.1 4.7 9.21 2.86l1.17-1.15c.2-.2.51-.2.71 0zM2 10.12l6.37-6.43 1.88 1.88L3.88 12H2v-1.88z"/></svg>
                        </span>
                                                            </div>
        </div>
    </li>
            </ul>
                <div class="comment-form">
                    <form id="add-comment-33706033" 
                            class="" 
                            data-placeholdertext="Use comments to ask for more information or suggest improvements. Avoid comments like “+1” or “thanks”."></form>
                </div>
        </div>

        <div id="comments-link-33706033" >

                <a class="js-add-link comments-link "
                   title="Use comments to ask for more information or suggest improvements. Avoid comments like “+1” or “thanks”."
                   href=#>add a comment</a><span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="expand to show all comments on this post" href=# onclick=""></a>
        </div>         
    </div>    </div>
</div>

  
<a name="33706003"></a>
<div id="answer-33706003" class="answer" data-answerid="33706003"  itemprop="suggestedAnswer" itemscope itemtype="http://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            

<div class="js-voting-container grid fd-column ai-stretch gs4 fc-black-200" data-post-id="33706003">
        <button class="js-vote-up-btn grid--cell s-btn s-btn__unset c-pointer" title="This answer is useful (click again to undo)" aria-pressed="false" aria-label="up vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="svg-icon m0 iconArrowUpLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 26h32L18 10 2 26z"/></svg></button>
        <div class="js-vote-count grid--cell fc-black-500 fs-title grid fd-column ai-center" itemprop="upvoteCount" data-value="3">3</div>
        <button class="js-vote-down-btn grid--cell s-btn s-btn__unset c-pointer" title="This answer is not useful (click again to undo)" aria-pressed="false" aria-label="down vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="svg-icon m0 iconArrowDownLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 10h32L18 26 2 10z"/></svg></button>


            <div class="js-accepted-answer-indicator grid--item fc-green-500 ta-center p4 d-none" title="loading when this answer was accepted..." tabindex="0" role="note" aria-label="accepted">
                <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36" viewBox="0 0 36 36"><path d="M6 14l8 8L30 6v8L14 30l-8-8v-8z"/></svg>
            </div>

</div>

        </div>
        
<div class="answercell post-layout--right">
    
    <div class="post-text" itemprop="text">
<p>So, there is a very basic difference in <code>static</code> methods.</p>

<p>To use static functions, you don't need to initialise the class as an object. For example, <code>Math.pow()</code>, here <code>.pow()</code> (in Java; but the explanation still holds) is a static method.</p>

<p>The general rule is to make the helper methods <code>static</code>.</p>

<p>So, for example, if you have a Math class, you wouldn't want to fill the garbage collector with classes which just help other, more important, classes.</p>

<p>You can use it as dynamic initializers, if you please! </p>

<p>Let's say you have a class <code>RSAEncryptionHelper</code>, now you can generally initialize it without any parameters and this will generate an object with a key size of (say) <code>512</code> bits; but you also have an overloaded <strong>object constructor</strong> which gets all of the properties from other classes:</p>

<pre><code>$a = new RSAEncryptionHelper::fromPrimeSet(...);
</code></pre>
    </div>
    <div class="grid mb0 fw-wrap ai-start jc-end gs8 gsy">
        <time itemprop="dateCreated" datetime="2015-11-14T07:02:01"></time>
    <div class="grid--cell mr16" style="flex: 1 1 100px;">
<div class="post-menu"><a href="/a/33706003/3386417" title="short permalink to this answer" class="short-link" itemprop="url" id="link-post-33706003">share</a><span class="lsep">|</span><a href="/posts/33706003/edit" class="suggest-edit-post" title="revise and improve this post">edit</a><span class="lsep">|</span><a href="#"
       class="flag-post-link"
       title="flag this post for serious problems or moderator attention"
       data-postid="33706003">flag</a></div>                    </div>
    <div class="post-signature grid--cell fl0">
<div class="user-info ">
    <div class="user-action-time">
        <a href="/posts/33706003/revisions" title="show all edits to this post">edited <span title="2015-11-14 07:05:35Z" class="relativetime">Nov 14 '15 at 7:05</span></a>
    </div>
    <div class="user-gravatar32">
        
    </div>
    <div class="user-details">
        
        <div class="-flair">
            
        </div>
    </div>
</div>    </div>
            


    <div class="post-signature grid--cell fl0">
<div class="user-info user-hover">
    <div class="user-action-time">
        answered <span title="2015-11-14 07:02:01Z" class="relativetime">Nov 14 '15 at 7:02</span>
    </div>
    <div class="user-gravatar32">
        <a href="/users/3102854/weirdpanda"><div class="gravatar-wrapper-32"><img src="https://i.stack.imgur.com/bjwYe.png?s=32&amp;g=1" alt="" width="32" height="32"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/3102854/weirdpanda">weirdpanda</a><span class="d-none" itemprop="name">weirdpanda</span>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">1,884</span><span title="1 gold badge" aria-hidden="true"><span class="badge1"></span><span class="badgecount">1</span></span><span class="v-visible-sr">1 gold badge</span><span title="10 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">10</span></span><span class="v-visible-sr">10 silver badges</span><span title="22 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">22</span></span><span class="v-visible-sr">22 bronze badges</span>
        </div>
    </div>
</div>

    </div>
    </div>
    
</div>

        <div class="js-post-notices post-layout--full">
        </div>

    <div class="post-layout--right">
        <div id="comments-33706003" class="comments js-comments-container " data-post-id="33706003" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="true"
                    data-cansee="false"
                    data-comments-unavailable="false"
                    data-addlink-disabled="false">


    <li id="comment-55184066" class="comment js-comment " data-comment-id="55184066">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
            </div>
                <div class="comment-voting mtn2 js-comment-edit-hide">
                        <a tabindex="0" role="button" href="#" class="comment-up comment-up-off" aria-label="Upvote Comment" title="This comment adds something useful to the post">
                            <svg aria-hidden="true" class="svg-icon iconArrowUp" width="18" height="18" viewBox="0 0 18 18"><path d="M1 13h16L9 5l-8 8z"/></svg>
                        </a>
                </div>
                            <div class="comment-flagging js-comment-edit-hide">
                    <button class="js-comment-flag s-btn s-btn__unset bg-transparent fc-black-100 c-pointer"
                            aria-label="Flag Comment"
                            aria-pressed="false"
                            title="Flag this comment for serious problems or moderator attention">
                        <svg aria-hidden="true" class="svg-icon iconFlag" width="18" height="18" viewBox="0 0 18 18"><path d="M3 2v14h2v-6h3.6l.4 1h6V3H9.5L9 2H3z"/></svg>
                    </button>
                </div>
        </div>
        <div class="comment-text js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">Yeah I knew it, My question is, I have an class that is containing 10 methods. And the point is: I always need to one of those methods. So, which approach is more appropriate for me? using <code>static</code> methods or writing those method normally?</span>
                
                    &ndash;&nbsp;<a href="/users/5259594/stack"
                       title="3,727 reputation"
                       class="comment-user owner">stack</a>
                <span class="comment-date" dir="ltr"><span title="2015-11-14 07:04:30Z" class="relativetime-clean">Nov 14 '15 at 7:04</span></span>
                                                            </div>
        </div>
    </li>
    <li id="comment-55184092" class="comment js-comment " data-comment-id="55184092">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
                    <span title="number of &#39;useful comment&#39; votes received"
                            class="cool">2</span>
            </div>
                <div class="comment-voting mtn2 js-comment-edit-hide">
                        <a tabindex="0" role="button" href="#" class="comment-up comment-up-off" aria-label="Upvote Comment" title="This comment adds something useful to the post">
                            <svg aria-hidden="true" class="svg-icon iconArrowUp" width="18" height="18" viewBox="0 0 18 18"><path d="M1 13h16L9 5l-8 8z"/></svg>
                        </a>
                </div>
                            <div class="comment-flagging js-comment-edit-hide">
                    <button class="js-comment-flag s-btn s-btn__unset bg-transparent fc-black-100 c-pointer"
                            aria-label="Flag Comment"
                            aria-pressed="false"
                            title="Flag this comment for serious problems or moderator attention">
                        <svg aria-hidden="true" class="svg-icon iconFlag" width="18" height="18" viewBox="0 0 18 18"><path d="M3 2v14h2v-6h3.6l.4 1h6V3H9.5L9 2H3z"/></svg>
                    </button>
                </div>
        </div>
        <div class="comment-text js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">Using the static method will be better; you&#39;ll get easier access to those methods, less garbage collection, a little performance boost. :)</span>
                
                    &ndash;&nbsp;<a href="/users/3102854/weirdpanda"
                       title="1,884 reputation"
                       class="comment-user">weirdpanda</a>
                <span class="comment-date" dir="ltr"><span title="2015-11-14 07:06:09Z" class="relativetime-clean">Nov 14 '15 at 7:06</span></span>
                                                            </div>
        </div>
    </li>
            </ul>
                <div class="comment-form">
                    <form id="add-comment-33706003" 
                            class="" 
                            data-placeholdertext="Use comments to ask for more information or suggest improvements. Avoid comments like “+1” or “thanks”."></form>
                </div>
        </div>

        <div id="comments-link-33706003" >

                <a class="js-add-link comments-link "
                   title="Use comments to ask for more information or suggest improvements. Avoid comments like “+1” or “thanks”."
                   href=#>add a comment</a><span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="expand to show all comments on this post" href=# onclick=""></a>
        </div>         
    </div>    </div>
</div>

  
<a name="50431951"></a>
<div id="answer-50431951" class="answer" data-answerid="50431951"  itemprop="suggestedAnswer" itemscope itemtype="http://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            

<div class="js-voting-container grid fd-column ai-stretch gs4 fc-black-200" data-post-id="50431951">
        <button class="js-vote-up-btn grid--cell s-btn s-btn__unset c-pointer" title="This answer is useful (click again to undo)" aria-pressed="false" aria-label="up vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="svg-icon m0 iconArrowUpLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 26h32L18 10 2 26z"/></svg></button>
        <div class="js-vote-count grid--cell fc-black-500 fs-title grid fd-column ai-center" itemprop="upvoteCount" data-value="0">0</div>
        <button class="js-vote-down-btn grid--cell s-btn s-btn__unset c-pointer" title="This answer is not useful (click again to undo)" aria-pressed="false" aria-label="down vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="svg-icon m0 iconArrowDownLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 10h32L18 26 2 10z"/></svg></button>


            <div class="js-accepted-answer-indicator grid--item fc-green-500 ta-center p4 d-none" title="loading when this answer was accepted..." tabindex="0" role="note" aria-label="accepted">
                <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36" viewBox="0 0 36 36"><path d="M6 14l8 8L30 6v8L14 30l-8-8v-8z"/></svg>
            </div>

</div>

        </div>
        
<div class="answercell post-layout--right">
    
    <div class="post-text" itemprop="text">
<p>Within a PHP class you can use <em>class/methods/attributes</em>: Abstract, <code>Static</code>, Private, Public, etc ...
The best way is to know how to mix them all within a class depending on the need, I will give you a basic example:</p>

<p>Within the <code>Person</code> class, you have <em>private</em> and <em>public</em> methods, but you have a method called "<strong>get_nationality</strong>" so this is a function that you need somewhere else but you do not have the <code>Person</code> class installed yet, so this method you put it as <strong>STATIC</strong> in this way you can invoke the "<strong>get_nationality</strong>" method without installing any <code>Person</code> class, this makes your business model more optimal and in turn now resources in the CPU.</p>
    </div>
    <div class="grid mb0 fw-wrap ai-start jc-end gs8 gsy">
        <time itemprop="dateCreated" datetime="2018-05-20T05:28:23"></time>
    <div class="grid--cell mr16" style="flex: 1 1 100px;">
<div class="post-menu"><a href="/a/50431951/3386417" title="short permalink to this answer" class="short-link" itemprop="url" id="link-post-50431951">share</a><span class="lsep">|</span><a href="/posts/50431951/edit" class="suggest-edit-post" title="revise and improve this post">edit</a><span class="lsep">|</span><a href="#"
       class="flag-post-link"
       title="flag this post for serious problems or moderator attention"
       data-postid="50431951">flag</a></div>                    </div>
            


    <div class="post-signature grid--cell fl0">
<div class="user-info ">
    <div class="user-action-time">
        answered <span title="2018-05-20 05:28:23Z" class="relativetime">May 20 '18 at 5:28</span>
    </div>
    <div class="user-gravatar32">
        <a href="/users/3557834/lenin-zapata"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/e7551c20c8adc4d98f45b5f644ad1b2b?s=32&amp;d=identicon&amp;r=PG" alt="" width="32" height="32"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/3557834/lenin-zapata">Lenin Zapata</a><span class="d-none" itemprop="name">Lenin Zapata</span>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">876</span><span title="7 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">7</span></span><span class="v-visible-sr">7 silver badges</span><span title="11 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">11</span></span><span class="v-visible-sr">11 bronze badges</span>
        </div>
    </div>
</div>

    </div>
    </div>
    
</div>

        <div class="js-post-notices post-layout--full">
        </div>

    <div class="post-layout--right">
        <div id="comments-50431951" class="comments js-comments-container  dno" data-post-id="50431951" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="true"
                    data-cansee="false"
                    data-comments-unavailable="false"
                    data-addlink-disabled="false">

            </ul>
                <div class="comment-form">
                    <form id="add-comment-50431951" 
                            class="" 
                            data-placeholdertext="Use comments to ask for more information or suggest improvements. Avoid comments like “+1” or “thanks”."></form>
                </div>
        </div>

        <div id="comments-link-50431951" >

                <a class="js-add-link comments-link "
                   title="Use comments to ask for more information or suggest improvements. Avoid comments like “+1” or “thanks”."
                   href=#>add a comment</a><span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="expand to show all comments on this post" href=# onclick=""></a>
        </div>         
    </div>    </div>
</div>

  
<a name="53107434"></a>
<div id="answer-53107434" class="answer" data-answerid="53107434"  itemprop="suggestedAnswer" itemscope itemtype="http://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            

<div class="js-voting-container grid fd-column ai-stretch gs4 fc-black-200" data-post-id="53107434">
        <button class="js-vote-up-btn grid--cell s-btn s-btn__unset c-pointer" title="This answer is useful (click again to undo)" aria-pressed="false" aria-label="up vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="svg-icon m0 iconArrowUpLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 26h32L18 10 2 26z"/></svg></button>
        <div class="js-vote-count grid--cell fc-black-500 fs-title grid fd-column ai-center" itemprop="upvoteCount" data-value="0">0</div>
        <button class="js-vote-down-btn grid--cell s-btn s-btn__unset c-pointer" title="This answer is not useful (click again to undo)" aria-pressed="false" aria-label="down vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="svg-icon m0 iconArrowDownLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 10h32L18 26 2 10z"/></svg></button>


            <div class="js-accepted-answer-indicator grid--item fc-green-500 ta-center p4 d-none" title="loading when this answer was accepted..." tabindex="0" role="note" aria-label="accepted">
                <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36" viewBox="0 0 36 36"><path d="M6 14l8 8L30 6v8L14 30l-8-8v-8z"/></svg>
            </div>

</div>

        </div>
        
<div class="answercell post-layout--right">
    
    <div class="post-text" itemprop="text">
<p><strong>Static functions</strong> are also very useful but 
I usually make <strong>traits</strong> when I have to create functions that are independently related to a class. </p>

<p>I don't know if this approach is better or not but most times I found it useful.  </p>

<p>Just sharing my approach here so that I can learn more about its pros and cons.</p>
    </div>
    <div class="grid mb0 fw-wrap ai-start jc-end gs8 gsy">
        <time itemprop="dateCreated" datetime="2018-11-01T18:41:00"></time>
    <div class="grid--cell mr16" style="flex: 1 1 100px;">
<div class="post-menu"><a href="/a/53107434/3386417" title="short permalink to this answer" class="short-link" itemprop="url" id="link-post-53107434">share</a><span class="lsep">|</span><a href="/posts/53107434/edit" class="suggest-edit-post" title="revise and improve this post">edit</a><span class="lsep">|</span><a href="#"
       class="flag-post-link"
       title="flag this post for serious problems or moderator attention"
       data-postid="53107434">flag</a></div>                    </div>
            


    <div class="post-signature grid--cell fl0">
<div class="user-info user-hover">
    <div class="user-action-time">
        answered <span title="2018-11-01 18:41:00Z" class="relativetime">Nov 1 '18 at 18:41</span>
    </div>
    <div class="user-gravatar32">
        <a href="/users/7235774/afraz-ahmad"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/84c39320c6ff26f0915a565da8f0ce1a?s=32&amp;d=identicon&amp;r=PG&amp;f=1" alt="" width="32" height="32"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/7235774/afraz-ahmad">Afraz Ahmad</a><span class="d-none" itemprop="name">Afraz Ahmad</span>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">2,175</span><span title="9 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">9</span></span><span class="v-visible-sr">9 silver badges</span><span title="28 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">28</span></span><span class="v-visible-sr">28 bronze badges</span>
        </div>
    </div>
</div>

    </div>
    </div>
    
</div>

        <div class="js-post-notices post-layout--full">
        </div>

    <div class="post-layout--right">
        <div id="comments-53107434" class="comments js-comments-container " data-post-id="53107434" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="true"
                    data-cansee="false"
                    data-comments-unavailable="false"
                    data-addlink-disabled="false">


    <li id="comment-95081133" class="comment js-comment " data-comment-id="95081133">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
            </div>
                <div class="comment-voting mtn2 js-comment-edit-hide">
                        <a tabindex="0" role="button" href="#" class="comment-up comment-up-off" aria-label="Upvote Comment" title="This comment adds something useful to the post">
                            <svg aria-hidden="true" class="svg-icon iconArrowUp" width="18" height="18" viewBox="0 0 18 18"><path d="M1 13h16L9 5l-8 8z"/></svg>
                        </a>
                </div>
                            <div class="comment-flagging js-comment-edit-hide">
                    <button class="js-comment-flag s-btn s-btn__unset bg-transparent fc-black-100 c-pointer"
                            aria-label="Flag Comment"
                            aria-pressed="false"
                            title="Flag this comment for serious problems or moderator attention">
                        <svg aria-hidden="true" class="svg-icon iconFlag" width="18" height="18" viewBox="0 0 18 18"><path d="M3 2v14h2v-6h3.6l.4 1h6V3H9.5L9 2H3z"/></svg>
                    </button>
                </div>
        </div>
        <div class="comment-text js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">As you asked for it, here is a point of view. I don&#39;t think using traits to achieve a pseudo multiple inheritance in PHP is a good thing. This breaks <a href="https://en.wikipedia.org/wiki/Single_responsibility_principle" rel="nofollow noreferrer">SRP</a> which is a fundamental basis of strong OOP architecture.</span>
                
                    &ndash;&nbsp;<a href="/users/4292519/gnucki"
                       title="3,873 reputation"
                       class="comment-user">Gnucki</a>
                <span class="comment-date" dir="ltr"><span title="2019-01-10 08:50:02Z" class="relativetime-clean">Jan 10 at 8:50</span></span>
                        <span title="this comment was edited 1 time">
                            <svg aria-hidden="true" class="svg-icon va-text-bottom o50 iconPencilSm" width="14" height="14" viewBox="0 0 14 14"><path d="M11.1 1.71l1.13 1.12c.2.2.2.51 0 .71L11.1 4.7 9.21 2.86l1.17-1.15c.2-.2.51-.2.71 0zM2 10.12l6.37-6.43 1.88 1.88L3.88 12H2v-1.88z"/></svg>
                        </span>
                                                            </div>
        </div>
    </li>
            </ul>
                <div class="comment-form">
                    <form id="add-comment-53107434" 
                            class="" 
                            data-placeholdertext="Use comments to ask for more information or suggest improvements. Avoid comments like “+1” or “thanks”."></form>
                </div>
        </div>

        <div id="comments-link-53107434" >

                <a class="js-add-link comments-link "
                   title="Use comments to ask for more information or suggest improvements. Avoid comments like “+1” or “thanks”."
                   href=#>add a comment</a><span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="expand to show all comments on this post" href=# onclick=""></a>
        </div>         
    </div>    </div>
</div>


                    <a name='new-answer'></a>
                        <form id="post-form" action="/questions/33705976/answer/submit" method="post" class="js-add-answer-component post-form">
                            <input type="hidden" id="post-id" value="33705976" />
                            <input type="hidden" id="qualityBanWarningShown" name="qualityBanWarningShown" value="false" />
                            <input type="hidden" name="referrer" value="https://www.google.com/" />
                            <h2 class="space">
                                Your Answer
                            </h2>



            <script>
            StackExchange.ifUsing("editor", function () {
                StackExchange.using("externalEditor", function () {
                    StackExchange.using("snippets", function () {
                        StackExchange.snippets.init();
                    });
                });
            }, "code-snippets");
        </script>
    

<script>
    StackExchange.ready(function() {
        var channelOptions = {
            tags: "".split(" "),
            id: "1"
        };
        initTagRenderer("".split(" "), "".split(" "), channelOptions);
       
        StackExchange.using("externalEditor", function() {
            // Have to fire editor after snippets, if snippets enabled
            if (StackExchange.settings.snippets.snippetsEnabled) {
                StackExchange.using("snippets", function() {
                    createEditor();
                });
            }
            else {
                createEditor();
            }
        });

        function createEditor() {
            StackExchange.prepareEditor({
                heartbeatType: 'answer',
                autoActivateHeartbeat: false,
                convertImagesToLinks: false,
                noModals: true,
                showLowRepImageUploadWarning: false,
                reputationToPostImages: null,
                bindNavPrevention: true,
                postfix: "",
                imageUploader: {
                brandingHtml: "Powered by \u003ca class=\"icon-imgur-white\" href=\"https://imgur.com/\"\u003e\u003c/a\u003e",
                    contentPolicyHtml: "User contributions licensed under \u003ca href=\"https://creativecommons.org/licenses/by-sa/3.0/\"\u003ecc by-sa 3.0 with attribution required\u003c/a\u003e \u003ca href=\"https://stackoverflow.com/legal/content-policy\"\u003e(content policy)\u003c/a\u003e",
                    allowUrls: true
                },
                onDemand: false,
                discardSelector: ".discard-answer"
                ,userId:3386417
            });
            

        }
    });
</script>


<div id="post-editor" class="post-editor js-post-editor js-wz-element" data-wz-state = "8,16,32,64,128,256">

    <div class="ps-relative"> 
        <div class="wmd-container mb8">
            <div id="wmd-button-bar" class="wmd-button-bar btr-sm"></div>
                        <div class="js-stacks-validation">
                <div class="ps-relative">
                    <textarea id="wmd-input" class="wmd-input js-wz-element s-input bar0" name="post-text" cols="92" rows="15" tabindex="101" data-wz-state = "256" data-min-length=""></textarea>
                </div>
                <div class="s-input-message mt4 d-none js-stacks-validation-message"></div>
            </div>
        </div>
    </div>

    <aside class="grid ai-start jc-space-between js-answer-help s-notice s-notice__warning pb0 pr4 pt4 mb8 d-none" role="status" aria-hidden="true">
    <div class="grid--cell pt8">
        <p>Thanks for contributing an answer to Stack Overflow!</p><ul><li>Please be sure to <em>answer the question</em>. Provide details and share your research!</li></ul><p>But <em>avoid</em> …</p><ul><li>Asking for help, clarification, or responding to other answers.</li><li>Making statements based on opinion; back them up with references or personal experience.</li></ul><p>To learn more, see our <a href="/help/how-to-answer">tips on writing great answers</a>.</p>
    </div>
    <button class="grid--cell js-answer-help-close-btn s-btn s-btn__muted fc-dark">
        <svg aria-hidden="true" class="svg-icon iconClear" width="18" height="18" viewBox="0 0 18 18"><path d="M15 4.41L13.59 3 9 7.59 4.41 3 3 4.41 7.59 9 3 13.59 4.41 15 9 10.41 13.59 15 15 13.59 10.41 9 15 4.41z"/></svg>
    </button>
</aside>


    <div id="draft-saved" class="draft-saved community-option fl" style="height:24px; display:none;">draft saved</div>
    <div id="draft-discarded" class="draft-discarded community-option fl" style="height:24px; display:none;">draft discarded</div>

    <div class="community-option g-row ai-center f-checkbox">
        <div class="g-col -input">
            <input id="communitymode" name="communitymode" type="checkbox" >
        </div>
        <div class="g-col">
            <label for="communitymode" class="f-label _small" title="Marking an answer community wiki encourages others to edit it by lowering the reputation barrier required to edit. However, you will not gain any upvote reputation from it. This cannot be undone.">community wiki</label>
        </div>
    </div>


    <div id="wmd-preview" class="wmd-preview"></div>
    <div></div>
    <div class="edit-block">
        <input id="fkey" name="fkey" type="hidden" value="a7ebc7f5561be1e0ed1eb49164847088ba476b8558b4a1c70b050ba4c6ffbe07">
        <input id="author" name="author" type="text">
    </div>



</div>

                            <div class="ps-relative">
                                
                                
                            </div>

                                                            <div class="form-submit cbt grid gsx gs4">
                                    <button id="submit-button" class="grid--cell s-btn s-btn__primary s-btn__icon" type="submit" tabindex="120" autocomplete="off">
Post Your Answer                                    </button>
                                    <button class="grid--cell s-btn s-btn__danger discard-answer dno">
                                        Discard
                                    </button>
                                </div>
                        </form>



                        <h2 class="bottom-notice" data-loc="1">
Not the answer you&#39;re looking for?                            Browse other questions tagged <a href="/questions/tagged/php" class="post-tag" title="show questions tagged &#39;php&#39;" rel="tag">php</a> <a href="/questions/tagged/oop" class="post-tag" title="show questions tagged &#39;oop&#39;" rel="tag">oop</a>  or <a href="/questions/ask">ask your own question</a>.                        </h2>
            </div>
        </div>
                <div id="sidebar" class="show-votes" role="complementary" aria-label="sidebar">
            <div class="s-sidebarwidget s-sidebarwidget__yellow s-anchors s-anchors__default mb16" data-tracker="cb=1">
                <div class="s-sidebarwidget--header s-sidebarwidget__small-bold-text">
                    Blog
                </div>
            <ul class="s-sidebarwidget--content s-sidebarwidget__items pt0 pr16 pb0 pl16">
    <li class="s-sidebarwidget--item grid">
        <div class="grid--cell1 fl-shrink0">
                <a href="https://stackoverflow.blog/2019/08/20/upcoming-on-stack-overflow/" data-ga="[&quot;community bulletin board&quot;,&quot;Blog&quot;,&quot;https://stackoverflow.blog/2019/08/20/upcoming-on-stack-overflow/&quot;,null,null]">
<div class="favicon favicon-stackexchangemeta" title="Meta Stack Exchange"></div>                </a>
        </div>
        <div class="grid--cell">
            <a href="https://stackoverflow.blog/2019/08/20/upcoming-on-stack-overflow/" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;Blog&quot;,&quot;https://stackoverflow.blog/2019/08/20/upcoming-on-stack-overflow/&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 1, position: 0 })">What’s in the Works: Improving Feedback for All Users</a>
        </div>
    </li>
            </ul>
            <ul class="s-sidebarwidget--content s-sidebarwidget__items pt0 pr16 pb0 pl16">
    <li class="s-sidebarwidget--item grid">
        <div class="grid--cell1 fl-shrink0">
                <a href="https://stackoverflow.blog/2019/08/22/impact-of-ask-question-wizard/" data-ga="[&quot;community bulletin board&quot;,&quot;Blog&quot;,&quot;https://stackoverflow.blog/2019/08/22/impact-of-ask-question-wizard/&quot;,null,null]">
<div class="favicon favicon-stackexchangemeta" title="Meta Stack Exchange"></div>                </a>
        </div>
        <div class="grid--cell">
            <a href="https://stackoverflow.blog/2019/08/22/impact-of-ask-question-wizard/" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;Blog&quot;,&quot;https://stackoverflow.blog/2019/08/22/impact-of-ask-question-wizard/&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 1, position: 1 })">Research Update: Impact of the Ask Question Wizard</a>
        </div>
    </li>
            </ul>
                <div class="s-sidebarwidget--header s-sidebarwidget__small-bold-text">
                    Featured on Meta
                </div>
            <ul class="s-sidebarwidget--content s-sidebarwidget__items pt0 pr16 pb0 pl16">
    <li class="s-sidebarwidget--item grid">
        <div class="grid--cell1 fl-shrink0">
                <a href="https://meta.stackexchange.com/questions/331708/congratulations-to-our-29-oldest-beta-sites-theyre-now-no-longer-beta" data-ga="[&quot;community bulletin board&quot;,&quot;Featured on Meta&quot;,&quot;https://meta.stackexchange.com/questions/331708/congratulations-to-our-29-oldest-beta-sites-theyre-now-no-longer-beta&quot;,null,null]">
<div class="favicon favicon-stackexchangemeta" title="Meta Stack Exchange"></div>                </a>
        </div>
        <div class="grid--cell">
            <a href="https://meta.stackexchange.com/questions/331708/congratulations-to-our-29-oldest-beta-sites-theyre-now-no-longer-beta" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;Featured on Meta&quot;,&quot;https://meta.stackexchange.com/questions/331708/congratulations-to-our-29-oldest-beta-sites-theyre-now-no-longer-beta&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 3, position: 2 })">Congratulations to our 29 oldest beta sites - They&#39;re now no longer beta!</a>
        </div>
    </li>
            </ul>
            <ul class="s-sidebarwidget--content s-sidebarwidget__items pt0 pr16 pb0 pl16">
    <li class="s-sidebarwidget--item grid">
        <div class="grid--cell1 fl-shrink0">
                <a href="https://meta.stackexchange.com/questions/332176/unicorn-meta-zoo-7-interview-with-nicolas" data-ga="[&quot;community bulletin board&quot;,&quot;Featured on Meta&quot;,&quot;https://meta.stackexchange.com/questions/332176/unicorn-meta-zoo-7-interview-with-nicolas&quot;,null,null]">
<div class="favicon favicon-stackexchangemeta" title="Meta Stack Exchange"></div>                </a>
        </div>
        <div class="grid--cell">
            <a href="https://meta.stackexchange.com/questions/332176/unicorn-meta-zoo-7-interview-with-nicolas" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;Featured on Meta&quot;,&quot;https://meta.stackexchange.com/questions/332176/unicorn-meta-zoo-7-interview-with-nicolas&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 3, position: 3 })">Unicorn Meta Zoo #7: Interview with Nicolas</a>
        </div>
    </li>
            </ul>
            <ul class="s-sidebarwidget--content s-sidebarwidget__items pt0 pr16 pb0 pl16">
    <li class="s-sidebarwidget--item grid">
        <div class="grid--cell1 fl-shrink0">
                <a href="https://meta.stackoverflow.com/questions/388740/a-proposal-to-reduce-the-number-of-closed-questions-needing-reopen-review" data-ga="[&quot;community bulletin board&quot;,&quot;Featured on Meta&quot;,&quot;https://meta.stackoverflow.com/questions/388740/a-proposal-to-reduce-the-number-of-closed-questions-needing-reopen-review&quot;,null,null]">
<div class="favicon favicon-stackoverflowmeta" title="Meta Stack Overflow"></div>                </a>
        </div>
        <div class="grid--cell">
            <a href="https://meta.stackoverflow.com/questions/388740/a-proposal-to-reduce-the-number-of-closed-questions-needing-reopen-review" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;Featured on Meta&quot;,&quot;https://meta.stackoverflow.com/questions/388740/a-proposal-to-reduce-the-number-of-closed-questions-needing-reopen-review&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 6, position: 4 })">A proposal to reduce the number of closed questions needing reopen review</a>
        </div>
    </li>
            </ul>
            <ul class="s-sidebarwidget--content s-sidebarwidget__items pt0 pr16 pb0 pl16">
    <li class="s-sidebarwidget--item grid">
        <div class="grid--cell1 fl-shrink0">
                <a href="https://meta.stackoverflow.com/questions/388313/experiment-closing-and-reopening-happens-at-3-votes-for-the-next-30-days-until" data-ga="[&quot;community bulletin board&quot;,&quot;Featured on Meta&quot;,&quot;https://meta.stackoverflow.com/questions/388313/experiment-closing-and-reopening-happens-at-3-votes-for-the-next-30-days-until&quot;,null,null]">
<div class="favicon favicon-stackoverflowmeta" title="Meta Stack Overflow"></div>                </a>
        </div>
        <div class="grid--cell">
            <a href="https://meta.stackoverflow.com/questions/388313/experiment-closing-and-reopening-happens-at-3-votes-for-the-next-30-days-until" class="js-gps-track" title="Experiment: closing and reopening happens at 3 votes for the next 30 days (until 2019-09-07)" data-ga="[&quot;community bulletin board&quot;,&quot;Featured on Meta&quot;,&quot;https://meta.stackoverflow.com/questions/388313/experiment-closing-and-reopening-happens-at-3-votes-for-the-next-30-days-until&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 6, position: 5 })">Experiment: closing and reopening happens at 3 votes for the next 30 days&hellip;</a>
        </div>
    </li>
            </ul>

</div>
<div id="dfp-tsb" class="everyonelovesstackoverflow everyoneloves__top-sidebar"></div>
            <div id="hireme"></div>
<script>;try{(function(a){function b(a){return'string'==typeof a?document.getElementById(a):a}function c(a){return a=b(a),!!a&&'none'===getComputedStyle(a).display}function d(a){return!c(a)}function e(a){return!!a}function f(a){return /^\s*$/.test(b(a).innerHTML)}function g(a){var b=a.style;b.height=b.maxHeight=b.minHeight='auto',b.display='none',[].forEach.call(a.children,g)}function h(a,b){var c;return function(){return a&&(c=a.call(b||this,arguments),a=null),c}}function i(a){var b=document.createElement('script');b.src=a,document.body.appendChild(b)}function j(a){return k([],a)}function k(a,b){return a.push=function(a){return b(),delete this.push,this.push(a)},a}function l(){try{return!new Function('return async()=>{};')}catch(a){return!0}}function m(){return'undefined'!=typeof googletag&&!!googletag.apiReady}function n(){m()||(googletag={cmd:j(A)})}function o(){var a=document.createElement('div');a.className='adsbox',a.id='clc-abd',a.style.position='absolute',a.style.pointerEvents='none',a.innerHTML='&nbsp;',document.body.appendChild(a)}function p(a){var b=a.serviceName,c=a.slot,d=a.lineItemId;try{var e=c.getSlotElementId(),f=[];e||f.push('id=0');var h=document.getElementById(e);if(!e||h?h.hasAttribute('data-clc-stalled')&&f.push('st=1'):f.push('el=0'),0!==f.length)return void B(f.join('&'));-1===x.dh.indexOf(d)?h.setAttribute('data-clc-prefilled','true'):g(h),h.setAttribute('data-clc-ready','true')}catch(a){var i=document.querySelector('#dfp-tsb, #dfp-isb, #clc-tsb');i&&i.setAttribute('data-clc-ready','true'),B('e=1')}}function q(){return Object.keys(F.ids)}function r(a){var b=F.ids[a],c=F.slots[b];'function'==typeof c&&(c=c(a));return{path:'/'+C+'/'+E+'/'+b+'/'+D,sizes:c,zone:b}}function s(a){return!(clc.collapse&&void 0!==clc.collapse[a])||!!clc.collapse[a]}function t(a,b){'dfp-isb'===a&&b.setTargeting('Sidebar',['Inline']),'dfp-tsb'===a&&b.setTargeting('Sidebar',['Right']);var c=r(a),d=c.path,e=c.sizes,f=c.zone,g=googletag.defineSlot(d,e,a);s(f)&&g.setCollapseEmptyDiv(!0,!0),g.addService(b),!1}function u(b){var c=a.dfp&&a.dfp.targeting||{};Object.keys(c).forEach(function(a){b.setTargeting(a,c[a])})}function v(a){var g=a.map(b).filter(e);return{eligible:g.filter(f).filter(d).map(function(a){return a.id}),ineligible:g.filter(c)}}function w(b){if(void 0===b&&(b=q()),!m())return n(),void googletag.cmd.push(function(){return w(b)});var c=v(b),d=c.eligible,e=c.ineligible;if(e.forEach(g),0!==d.length){o(),googletag.destroySlots();var f=googletag.pubads();x.sf&&(f.setForceSafeFrame(!0),f.setSafeFrameConfig({allowOverlayExpansion:!0,allowPushExpansion:!0,sandbox:!0})),f.enableSingleRequest(),a.sreEvent||(f.addEventListener('slotRenderEnded',p),a.sreEvent=!0),u(f),d.forEach(function(a){return t(a,f)}),googletag.enableServices(),d.forEach(function(a){googletag.display(a)})}}var x=function(a){for(var b=[],c=1;c<arguments.length;c++)b[c-1]=arguments[c];for(var d,e=0,f=b;e<f.length;e++)for(var g in d=f[e],d)a[g]=d[g];return a}({"lib":"https://cdn.sstatic.net/clc/clc.min.js?v=40b76bc9bf33","style":"https://cdn.sstatic.net/clc/styles/clc.min.css?v=e5974d694dae","u":"https://clc.stackoverflow.com/markup.js","wa":true,"kt":2000,"tto":true,"h":"clc.stackoverflow.com","allowed":"^(((talent\\.)?stackoverflow)|(blog\\.codinghorror)|(serverfault|askubuntu)|([^\\.]+\\.stackexchange))\\.com$","wv":true,"al":false,"dh":[4385506061,4386578282,4386579572]},a.options||{}),y=h(function(){var a=x.lib;l()&&(a=a.replace(/(\.min)?\.js(\?v=[0-9a-fA-F]+)?$/,'.ie$1.js$2')),i(a)}),z=a.cmd||[];Array.isArray(z)&&(0<z.length?y():k(z,y));var A=h(function(){i('https://www.googletagservices.com/tag/js/gpt.js')}),B=function(a){new Image().src='https://'+x.h+'/stalled.gif?'+a},C='248424177',D=/^\/tags\//.test(location.pathname)||/^\/questions\/tagged\//.test(location.pathname)?'tag-pages':/^\/$/.test(location.pathname)||/^\/home/.test(location.pathname)?'home-page':'question-pages',E=location.hostname;var F={slots:{lb:[[728,90]],mlb:[[728,90]],smlb:[[728,90]],bmlb:[[728,90]],sb:function(a){return'dfp-tsb'===a?[[300,250],[300,600]]:[[300,250]]},"tag-sponsorship":[[730,135]],"mobile-below-question":[[320,50],[300,250]]},ids:{"dfp-tlb":'lb',"dfp-mlb":'mlb',"dfp-smlb":'smlb',"dfp-bmlb":'bmlb',"dfp-tsb":'sb',"dfp-isb":'sb',"dfp-tag":'tag-sponsorship',"dfp-m-aq":'mobile-below-question',"clc-tlb":'lb',"clc-mlb":'mlb',"clc-tsb":'sb'}};(function(){var b=x.al;b&&z.push(function(){return a.load()})})(),n(),a.dfp={load:w},a.options=x,a.cmd=z})(this.clc=this.clc||{})}catch(a){window.console.error(a)}</script>            <script>
                var clc = clc || {};
                clc.collapse = { sb: !0, 'tag-sponsorship': !0, lb:!0, mlb:!0, smlb:!0, bmlb:!0, 'mobile-below-question':!0};
                clc.options = clc.options || {};
                clc.options.sf = !0;
                clc.cmd = clc.cmd || [];
                clc.cmd.push(function () { window.clc_request='Aoe6obghKNcIFPw-APhPAgICAAAAAgAAAAMJAAAAfHBocHxvb3B8AEpGl-IiUmBAc8U'; clc.load(); });
                                clc.dfp = clc.dfp || {};
                clc.dfp.targeting = {Registered:['true'],'so-tag':['php','oop'],Persona:['FrontEnd']};
                
                var googletag = googletag || {};
                googletag.cmd = googletag.cmd || [];
                googletag.cmd.push(function () { clc.dfp.load(); });
            </script>
            <div class="module sidebar-linked">
    <h4 id="h-linked">Linked</h4>
    <div class="linked" data-tracker="lq=1">

<div class="spacer js-gps-track" data-gps-track="linkedquestion.click({ source_post_id: 33705976, target_question_id: 12755539, position: 0 })">
    <a href="/q/12755539" title="Vote score (upvotes - downvotes)">
        <div class="answer-votes answered-accepted default">69</div>
    </a>
    <a href="/questions/12755539/why-is-singleton-considered-an-anti-pattern?noredirect=1" class="question-hyperlink">Why is Singleton considered an anti-pattern?</a>
</div>
<div class="spacer js-gps-track" data-gps-track="linkedquestion.click({ source_post_id: 33705976, target_question_id: 46374524, position: 1 })">
    <a href="/q/46374524" title="Vote score (upvotes - downvotes)">
        <div class="answer-votes answered-accepted default">0</div>
    </a>
    <a href="/questions/46374524/i-what-cases-do-i-declare-static-methods-variables-in-php?noredirect=1" class="question-hyperlink">I what cases do I declare static methods/variables in PHP?</a>
</div>          </div>
</div>

                <div class="module sidebar-related">
                    <h4 id="h-related">Related</h4>
                    <div class="related js-gps-related-questions" data-tracker="rq=1">
                        <div class="spacer"><a href="/q/56867" title="Vote score (upvotes - downvotes)"><div class="answer-votes answered-accepted large">746</div></a><a href="/questions/56867/interface-vs-base-class" class="question-hyperlink">Interface vs Base class</a></div><div class="spacer"><a href="/q/151969" title="Vote score (upvotes - downvotes)"><div class="answer-votes answered-accepted extra-large">1920</div></a><a href="/questions/151969/when-to-use-self-over-this" class="question-hyperlink">When to use self over $this?</a></div><div class="spacer"><a href="/q/155609" title="Vote score (upvotes - downvotes)"><div class="answer-votes answered-accepted extra-large">1627</div></a><a href="/questions/155609/whats-the-difference-between-a-method-and-a-function" class="question-hyperlink">What&#39;s the difference between a method and a function?</a></div><div class="spacer"><a href="/q/249664" title="Vote score (upvotes - downvotes)"><div class="answer-votes answered-accepted large">268</div></a><a href="/questions/249664/best-practices-to-test-protected-methods-with-phpunit" class="question-hyperlink">Best practices to test protected methods with PHPUnit</a></div><div class="spacer"><a href="/q/533631" title="Vote score (upvotes - downvotes)"><div class="answer-votes answered-accepted large">848</div></a><a href="/questions/533631/what-is-a-mixin-and-why-are-they-useful" class="question-hyperlink">What is a mixin, and why are they useful?</a></div><div class="spacer"><a href="/q/576169" title="Vote score (upvotes - downvotes)"><div class="answer-votes answered-accepted extra-large">2307</div></a><a href="/questions/576169/understanding-python-super-with-init-methods" class="question-hyperlink">Understanding Python super() with __init__() methods</a></div><div class="spacer"><a href="/q/1866794" title="Vote score (upvotes - downvotes)"><div class="answer-votes answered-accepted extra-large">1115</div></a><a href="/questions/1866794/naming-classes-how-to-avoid-calling-everything-a-whatevermanager" class="question-hyperlink">Naming Classes - How to avoid calling everything a &ldquo;&lt;WhatEver&gt;Manager&rdquo;?</a></div><div class="spacer"><a href="/q/3737139" title="Vote score (upvotes - downvotes)"><div class="answer-votes answered-accepted extra-large">4231</div></a><a href="/questions/3737139/reference-what-does-this-symbol-mean-in-php" class="question-hyperlink">Reference — What does this symbol mean in PHP?</a></div><div class="spacer"><a href="/q/12769982" title="Vote score (upvotes - downvotes)"><div class="answer-votes extra-large">1056</div></a><a href="/questions/12769982/reference-what-does-this-error-mean-in-php" class="question-hyperlink">Reference - What does this error mean in PHP?</a></div><div class="spacer"><a href="/q/21692193" title="Vote score (upvotes - downvotes)"><div class="answer-votes answered-accepted extra-large">1242</div></a><a href="/questions/21692193/why-not-inherit-from-listt" class="question-hyperlink">Why not inherit from List&lt;T&gt;?</a></div>
                    </div>
                </div>

<div id="hot-network-questions" class="module tex2jax_ignore">
    <h4>
        <a href="https://stackexchange.com/questions?tab=hot"
           class="js-gps-track s-link s-link__inherit" 
           data-gps-track="posts_hot_network.click({ item_type:1, location:11 })">
            Hot Network Questions
        </a>
    </h4>
    <ul>
            <li >
                <div class="favicon favicon-chess" title="Chess Stack Exchange"></div><a href="https://chess.stackexchange.com/questions/25194/identify-a-problem-where-a-potentially-winning-move-draws-because-of-the-50-move" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:435 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Identify a problem where a potentially winning move draws because of the 50 move rule
                </a>

            </li>
            <li >
                <div class="favicon favicon-scifi" title="Science Fiction &amp; Fantasy Stack Exchange"></div><a href="https://scifi.stackexchange.com/questions/217892/sci-fi-film-similar-to-village-of-the-damned" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:186 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Sci fi film similar to Village of the Damned
                </a>

            </li>
            <li >
                <div class="favicon favicon-linguistics" title="Linguistics Stack Exchange"></div><a href="https://linguistics.stackexchange.com/questions/32220/what-are-some-interesting-features-that-are-common-cross-linguistically-but-don" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:312 }); posts_hot_network.click({ item_type:2, location:11 })">
                    What are some interesting features that are common cross-linguistically but don&#39;t exist in English?
                </a>

            </li>
            <li >
                <div class="favicon favicon-rpg" title="Role-playing Games Stack Exchange"></div><a href="https://rpg.stackexchange.com/questions/154023/can-a-rogue-pc-teach-an-npc-to-perform-sneak-attack" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:122 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Can a Rogue PC teach an NPC to perform Sneak Attack?
                </a>

            </li>
            <li >
                <div class="favicon favicon-workplace" title="The Workplace Stack Exchange"></div><a href="https://workplace.stackexchange.com/questions/142681/how-to-respectfully-refuse-to-assist-co-workers-with-it-issues" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:423 }); posts_hot_network.click({ item_type:2, location:11 })">
                    How to respectfully refuse to assist co-workers with IT issues?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-workplace" title="The Workplace Stack Exchange"></div><a href="https://workplace.stackexchange.com/questions/142654/dealing-with-an-extrovert-co-worker" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:423 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Dealing with an extrovert co-worker
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-worldbuilding" title="Worldbuilding Stack Exchange"></div><a href="https://worldbuilding.stackexchange.com/questions/153478/justifying-the-use-of-directed-energy-weapons" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:579 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Justifying the use of directed energy weapons
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-codegolf" title="Code Golf Stack Exchange"></div><a href="https://codegolf.stackexchange.com/questions/190732/nothing-like-a-good-ol-game-of-modten" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:200 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Nothing like a good ol&#39; game of ModTen
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-space" title="Space Exploration Stack Exchange"></div><a href="https://space.stackexchange.com/questions/38263/why-is-my-earth-simulation-slower-than-the-reality" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:508 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Why is my Earth simulation slower than the reality?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-german" title="German Language Stack Exchange"></div><a href="https://german.stackexchange.com/questions/53979/how-is-the-idea-of-two-people-having-a-heated-argument-idiomatically-expressed" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:253 }); posts_hot_network.click({ item_type:2, location:11 })">
                    How is the idea of &quot;two people having a heated argument&quot; idiomatically expressed in German?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-security" title="Information Security Stack Exchange"></div><a href="https://security.stackexchange.com/questions/215827/ensuring-all-network-services-on-a-device-use-strong-tls-cipher-suites" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:162 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Ensuring all network services on a device use strong TLS cipher suites
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-scifi" title="Science Fiction &amp; Fantasy Stack Exchange"></div><a href="https://scifi.stackexchange.com/questions/217880/why-did-khan-ask-admiral-james-t-kirk-about-project-genesis" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:186 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Why did Khan ask Admiral James T. Kirk about Project Genesis?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-money" title="Personal Finance &amp; Money Stack Exchange"></div><a href="https://money.stackexchange.com/questions/112874/why-do-banks-park-their-money-at-the-european-central-bank" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:93 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Why do banks “park” their money at the European Central Bank?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-english" title="English Language &amp; Usage Stack Exchange"></div><a href="https://english.stackexchange.com/questions/509295/thank-god-its-friday-tomorrow-is-the-weekend-why-the-definite-article" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:97 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Thank God it&#39;s Friday, tomorrow is THE weekend. Why the definite article?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-gaming" title="Arqade"></div><a href="https://gaming.stackexchange.com/questions/356546/how-do-you-harvest-carrots-in-creative-mode" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:41 }); posts_hot_network.click({ item_type:2, location:11 })">
                    How do you harvest carrots in creative mode?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-askubuntu" title="Ask Ubuntu"></div><a href="https://askubuntu.com/questions/1167934/how-to-make-ubuntu-support-single-display-5120x1440-resolution" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:89 }); posts_hot_network.click({ item_type:2, location:11 })">
                    How to make Ubuntu support single display 5120x1440 resolution?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-ux" title="User Experience Stack Exchange"></div><a href="https://ux.stackexchange.com/questions/127649/how-can-i-unambiguously-ask-for-a-new-users-display-name" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:102 }); posts_hot_network.click({ item_type:2, location:11 })">
                    How can I unambiguously ask for a new user&#39;s &quot;Display Name&quot;?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-physics" title="Physics Stack Exchange"></div><a href="https://physics.stackexchange.com/questions/497904/if-the-first-law-of-thermodynamics-ensures-conservation-of-energy-why-does-it-a" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:151 }); posts_hot_network.click({ item_type:2, location:11 })">
                    If the first law of thermodynamics ensures conservation of energy, why does it allow systems to lose energy?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-astronomy" title="Astronomy Stack Exchange"></div><a href="https://astronomy.stackexchange.com/questions/33111/if-all-stars-rotate-why-was-there-a-theory-developed-that-requires-non-rotating" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:514 }); posts_hot_network.click({ item_type:2, location:11 })">
                    If all stars rotate, why was there a theory developed that requires non-rotating stars?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-unix" title="Unix &amp; Linux Stack Exchange"></div><a href="https://unix.stackexchange.com/questions/536944/is-for-a-valid-shell-syntax-in-which-shells" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:106 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Is for(( ... )){ ... ;} a valid shell syntax? In which shells?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-electronics" title="Electrical Engineering Stack Exchange"></div><a href="https://electronics.stackexchange.com/questions/453950/what-is-this-symbol-semicircles-facing-each-other" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:135 }); posts_hot_network.click({ item_type:2, location:11 })">
                    What is this symbol: semicircles facing each other?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-codegolf" title="Code Golf Stack Exchange"></div><a href="https://codegolf.stackexchange.com/questions/190592/who-was-president-of-the-usa" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:200 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Who was president of the USA?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-politics" title="Politics Stack Exchange"></div><a href="https://politics.stackexchange.com/questions/43933/would-the-republic-of-ireland-and-northern-ireland-be-interested-in-joining-toge" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:475 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Would the Republic of Ireland and Northern Ireland be interested in joining together?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-parenting" title="Parenting Stack Exchange"></div><a href="https://parenting.stackexchange.com/questions/37703/how-do-i-get-toddlers-to-stop-asking-for-food-every-hour" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:228 }); posts_hot_network.click({ item_type:2, location:11 })">
                    How do I get toddlers to stop asking for food every hour?
                </a>

            </li>
    </ul>

        <a href="#" 
           class="show-more js-show-more js-gps-track" 
           data-gps-track="posts_hot_network.click({ item_type:3, location:11 })">
            more hot questions
        </a>
</div>

    <div id="feed-link" class="js-feed-link">
        <a href="/feeds/question/33705976" title="Feed of this question and its answers">
            <svg aria-hidden="true" class="svg-icon fc-orange-400 iconRss" width="18" height="18" viewBox="0 0 18 18"><path d="M1 3c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3zm14.5 12C15.5 8.1 9.9 2.5 3 2.5V5a10 10 0 0 1 10 10h2.5zm-5 0A7.5 7.5 0 0 0 3 7.5V10a5 5 0 0 1 5 5h2.5zm-5 0A2.5 2.5 0 0 0 3 12.5V15h2.5z"/></svg>
            Question feed
        </a>
    </div>
    <aside class="s-modal js-feed-link-modal" tabindex="-1" role="dialog" aria-labelledby="feed-modal-title" aria-describedby="feed-modal-description" aria-hidden="true">
        <div class="s-modal--dialog js-modal-dialog wmx4" role="document"  data-controller="se-draggable">
            <h1 class="s-modal--header fw-bold js-first-tabbable" id="feed-modal-title" data-target="se-draggable.handle" tabindex="0">
                Subscribe to RSS
            </h1>
            <div class="grid gs4 gsy fd-column">
                <div class="grid--cell">
                    <label class="d-block s-label c-default" for="feed-url">
                        Question feed
                        <p class="s-description mt2" id="feed-modal-description">To subscribe to this RSS feed, copy and paste this URL into your RSS reader.</p>
                    </label>
                </div>
                <div class="grid ps-relative">
                    <input class="s-input" type="text" name="feed-url" id="feed-url" readonly="readonly" value="https://stackoverflow.com/feeds/question/33705976" />
                    <svg aria-hidden="true" class="svg-icon s-input-icon fc-orange-400 iconRss" width="18" height="18" viewBox="0 0 18 18"><path d="M1 3c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3zm14.5 12C15.5 8.1 9.9 2.5 3 2.5V5a10 10 0 0 1 10 10h2.5zm-5 0A7.5 7.5 0 0 0 3 7.5V10a5 5 0 0 1 5 5h2.5zm-5 0A2.5 2.5 0 0 0 3 12.5V15h2.5z"/></svg>
                </div>
            </div>
            <a class="s-modal--close s-btn s-btn__muted js-modal-close js-last-tabbable" href="#" aria-label="Close">
                <svg aria-hidden="true" class="svg-icon iconClearSm" width="14" height="14" viewBox="0 0 14 14"><path d="M12 3.41L10.59 2 7 5.59 3.41 2 2 3.41 5.59 7 2 10.59 3.41 12 7 8.41 10.59 12 12 10.59 8.41 7 12 3.41z"/></svg>
            </a>
        </div>
    </aside>
        </div>
    </div>
<script>StackExchange.ready(function(){$.get('/posts/33705976/ivc/4200');});</script>
<noscript><div><img src="/posts/33705976/ivc/4200" class="dno" alt="" width="0" height="0"></div></noscript><div style="display:none" id="prettify-lang">lang-php</div></div>

    <script>
        $('#wmd-input').one("keypress", function() {
            $.ajax({
                url: '/accounts/email-settings-form',
                cache: false,
                success: function(data) {
                    $('#submit-button').parent().prepend(data);
                }
            });
        });

    </script>

        </div>
    </div>

    <footer id="footer" class="site-footer js-footer" role="contentinfo">
        <div class="site-footer--container">
                <div class="site-footer--logo">

                    
                    <a href="https://stackoverflow.com"><svg aria-hidden="true" class="svg-icon native iconLogoGlyphMd" width="32" height="37" viewBox="0 0 32 37"><path d="M26 33v-9h4v13H0V24h4v9h22z" fill="#BCBBBB"/><path d="M21.5 0l-2.7 2 9.9 13.3 2.7-2L21.5 0zM26 18.4L13.3 7.8l2.1-2.5 12.7 10.6-2.1 2.5zM9.1 15.2l15 7 1.4-3-15-7-1.4 3zm14 10.79l.68-2.95-16.1-3.35L7 23l16.1 2.99zM23 30H7v-3h16v3z" fill="#F48024"/></svg></a>
                </div>
            
            <nav class="site-footer--nav">
                    <div class="site-footer--col site-footer--col__visible js-footer-col" data-name="default">
                        <h5 class="-title"><a href="https://stackoverflow.com" class="js-gps-track" data-gps-track="footer.click({ location: 2, link: 15})">Stack Overflow</a></h5>
                        <ul class="-list js-primary-footer-links">
                            <li class="-item"><a href="/questions" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 16})">Questions</a></li>
                                <li class="-item"><a href="https://stackoverflow.com/jobs" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 17})">Jobs</a></li>
                                <li class="-item"><a href="https://stackoverflow.com/jobs/directory/developer-jobs" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 11})">Developer Jobs Directory</a></li>
                                     <li class="-item"><a href="https://stackoverflow.com/jobs/salary" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 28})">Salary Calculator</a></li>
                                                            <li class="-item"><a href="/help" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 3 })">Help</a></li>
                                <li class="-item"><a onclick='StackExchange.switchMobile("on")' class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 12 })">Mobile</a></li>
                        </ul>
                    </div>
                    <div class="site-footer--col site-footer--col__visible js-footer-col" data-name="default">
                        <h5 class="-title"><a href="https://www.stackoverflowbusiness.com" class="js-gps-track" data-gps-track="footer.click({ location: 2, link: 19 })">Products</a></h5>
                        <ul class="-list">
                            <li class="-item"><a href="https://stackoverflow.com/teams" class="js-gps-track -link" 
                                                 data-ga="[&quot;teams traffic&quot;,&quot;footer - site nav&quot;,&quot;stackoverflow.com/teams&quot;,null,{&quot;dimension4&quot;:&quot;teams&quot;}]"
                                                 data-gps-track="footer.click({ location: 2, link: 29 })">Teams</a></li>
                            <li class="-item"><a href="https://www.stackoverflowbusiness.com/talent" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 20 })">Talent</a></li>
                            <li class="-item"><a href="https://www.stackoverflowbusiness.com/advertising" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 21 })">Advertising</a></li>
                            <li class="-item"><a href="https://stackoverflow.com/enterprise" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 22 })">Enterprise</a></li>
                        </ul>
                    </div>
                <div class="site-footer--col site-footer--col__visible js-footer-col" data-name="default">
                    <h5 class="-title"><a class="js-gps-track" data-gps-track="footer.click({ location: 2, link: 1 })" href="https://stackoverflow.com/company/about">Company</a></h5>
                    <ul class="-list">
                            <li class="-item"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 1 })" href="https://stackoverflow.com/company/about">About</a></li>
                                                <li class="-item"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 27 })" href="https://stackoverflow.com/company/press">Press</a></li>
                            <li class="-item"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 9 })" href="https://stackoverflow.com/company/work-here">Work Here</a></li>
                        <li class="-item"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 7 })" href="https://stackoverflow.com/legal">Legal</a></li>
                        <li class="-item"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 8 })" href="https://stackoverflow.com/legal/privacy-policy">Privacy Policy</a></li>
                            <li class="-item"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 13 })" href="https://stackoverflow.com/company/contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="site-footer--col site-footer--categories-nav site-footer--col__visible">
                    <a href="#" class="site-footer--back js-footer-back"><svg aria-hidden="true" class="svg-icon iconArrowLeftAlt" width="18" height="18" viewBox="0 0 18 18"><path d="M10.58 16L12 14.59 6.4 9 12 3.41 10.57 2l-7 7 7 7z"/></svg></a>
                    <div>
                        <h5 class="-title"><a href="https://stackexchange.com" data-gps-track="footer.click({ location: 2, link: 30 })">Stack Exchange<br> Network</a></h5>
                        <ul class="-list">
                            <li class="-item"><a href="#" class="-link _expandable js-footer-category-trigger js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })" data-target="Technology">Technology</a></li>
                            <li class="-item"><a href="#" class="-link _expandable js-footer-category-trigger js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })" data-target="Life / Arts">Life / Arts</a></li>
                            <li class="-item"><a href="#" class="-link _expandable js-footer-category-trigger js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })" data-target="Culture / Recreation">Culture / Recreation</a></li>
                            <li class="-item"><a href="#" class="-link _expandable js-footer-category-trigger js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })" data-target="Science">Science</a></li>
                            <li class="-item"><a href="#" class="-link _expandable js-footer-category-trigger js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })" data-target="Other">Other</a></li>

                        </ul>
                    </div>
                </div>
                <div class="site-footer--categories">
                    <div class="site-footer--col site-footer--category js-footer-col" data-name="Technology">
        <ul class="-list">
                <li class="-item"><a href="https://stackoverflow.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="professional and enthusiast programmers">Stack Overflow</a></li>
                <li class="-item"><a href="https://serverfault.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="system and network administrators">Server Fault</a></li>
                <li class="-item"><a href="https://superuser.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="computer enthusiasts and power users">Super User</a></li>
                <li class="-item"><a href="https://webapps.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="power users of web applications">Web Applications</a></li>
                <li class="-item"><a href="https://askubuntu.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="Ubuntu users and developers">Ask Ubuntu</a></li>
                <li class="-item"><a href="https://webmasters.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="pro webmasters">Webmasters</a></li>
                <li class="-item"><a href="https://gamedev.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="professional and independent game developers">Game Development</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Technology"><ul class="-list">
                <li class="-item"><a href="https://tex.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="users of TeX, LaTeX, ConTeXt, and related typesetting systems">TeX - LaTeX</a></li>
                <li class="-item"><a href="https://softwareengineering.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="professionals, academics, and students working within the systems development life cycle">Software Engineering</a></li>
                <li class="-item"><a href="https://unix.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="users of Linux, FreeBSD and other Un*x-like operating systems">Unix &amp; Linux</a></li>
                <li class="-item"><a href="https://apple.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="power users of Apple hardware and software">Ask Different (Apple)</a></li>
                <li class="-item"><a href="https://wordpress.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="WordPress developers and administrators">WordPress Development</a></li>
                <li class="-item"><a href="https://gis.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="cartographers, geographers and GIS professionals">Geographic Information Systems</a></li>
                <li class="-item"><a href="https://electronics.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="electronics and electrical engineering professionals, students, and enthusiasts">Electrical Engineering</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Technology"><ul class="-list">
                <li class="-item"><a href="https://android.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="enthusiasts and power users of the Android operating system">Android Enthusiasts</a></li>
                <li class="-item"><a href="https://security.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="information security professionals">Information Security</a></li>
                <li class="-item"><a href="https://dba.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="database professionals who wish to improve their database skills and learn from others in the community">Database Administrators</a></li>
                <li class="-item"><a href="https://drupal.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="Drupal developers and administrators">Drupal Answers</a></li>
                <li class="-item"><a href="https://sharepoint.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="SharePoint enthusiasts">SharePoint</a></li>
                <li class="-item"><a href="https://ux.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="user experience researchers and experts">User Experience</a></li>
                <li class="-item"><a href="https://mathematica.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="users of Wolfram Mathematica">Mathematica</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Technology"><ul class="-list">
                <li class="-item"><a href="https://salesforce.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="Salesforce administrators, implementation experts, developers and anybody in-between">Salesforce</a></li>
                <li class="-item"><a href="https://expressionengine.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="administrators, end users, developers and designers for ExpressionEngine&#174; CMS">ExpressionEngine&#174; Answers</a></li>
                <li class="-item"><a href="https://pt.stackoverflow.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="programadores profissionais e entusiastas">Stack Overflow em Portugu&#234;s</a></li>
                <li class="-item"><a href="https://blender.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="people who use Blender to create 3D graphics, animations, or games">Blender</a></li>
                <li class="-item"><a href="https://networkengineering.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="network engineers">Network Engineering</a></li>
                <li class="-item"><a href="https://crypto.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="software developers, mathematicians and others interested in cryptography">Cryptography</a></li>
                <li class="-item"><a href="https://codereview.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="peer programmer code reviews">Code Review</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Technology"><ul class="-list">
                <li class="-item"><a href="https://magento.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="users of the Magento e-Commerce platform">Magento</a></li>
                <li class="-item"><a href="https://softwarerecs.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="people seeking specific software recommendations">Software Recommendations</a></li>
                <li class="-item"><a href="https://dsp.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="practitioners of the art and science of signal, image and video processing">Signal Processing</a></li>
                <li class="-item"><a href="https://emacs.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="those using, extending or developing Emacs">Emacs</a></li>
                <li class="-item"><a href="https://raspberrypi.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="users and developers of hardware and software for Raspberry Pi">Raspberry Pi</a></li>
                <li class="-item"><a href="https://ru.stackoverflow.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="программистов">Stack Overflow на русском</a></li>
                <li class="-item"><a href="https://codegolf.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="programming puzzle enthusiasts and code golfers">Code Golf</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Technology"><ul class="-list">
                <li class="-item"><a href="https://es.stackoverflow.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="programadores y profesionales de la inform&#225;tica">Stack Overflow en espa&#241;ol</a></li>
                <li class="-item"><a href="https://ethereum.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="users of Ethereum, the decentralized application platform and smart contract enabled blockchain">Ethereum</a></li>
                <li class="-item"><a href="https://datascience.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="Data science professionals, Machine Learning specialists, and those interested in learning more about the field">Data Science</a></li>
                <li class="-item"><a href="https://arduino.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="developers of open-source hardware and software that is compatible with Arduino">Arduino</a></li>
                <li class="-item"><a href="https://bitcoin.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="Bitcoin crypto-currency enthusiasts">Bitcoin</a></li>
                <li class="-item"><a href="https://sqa.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="software quality control experts, automation engineers, and software testers">Software Quality Assurance &amp; Testing</a></li>
                <li class="-item"><a href="https://sound.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="sound engineers, producers, editors, and enthusiasts">Sound Design</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Technology"><ul class="-list">
                <li class="-item"><a href="https://windowsphone.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="enthusiasts and power users of Windows Phone OS">Windows Phone</a></li>
                            <li class="-item">
                    <a href="https://stackexchange.com/sites#technology" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 26 })">
                        <strong>
                            more (27)
                        </strong>
                    </a>
                </li>
        </ul>
    </div>
    <div class="site-footer--col site-footer--category js-footer-col" data-name="Life / Arts">
        <ul class="-list">
                <li class="-item"><a href="https://photo.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="professional, enthusiast and amateur photographers">Photography</a></li>
                <li class="-item"><a href="https://scifi.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="science fiction and fantasy enthusiasts">Science Fiction &amp; Fantasy</a></li>
                <li class="-item"><a href="https://graphicdesign.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="Graphic Design professionals, students, and enthusiasts">Graphic Design</a></li>
                <li class="-item"><a href="https://movies.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="movie and tv enthusiasts">Movies &amp; TV</a></li>
                <li class="-item"><a href="https://music.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="musicians, students, and enthusiasts">Music: Practice &amp; Theory</a></li>
                <li class="-item"><a href="https://worldbuilding.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="writers/artists using science, geography and culture to construct imaginary worlds and settings">Worldbuilding</a></li>
                <li class="-item"><a href="https://video.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="engineers, producers, editors, and enthusiasts spanning the fields of video, and media creation">Video Production</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Life / Arts"><ul class="-list">
                <li class="-item"><a href="https://cooking.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="professional and amateur chefs">Seasoned Advice (cooking)</a></li>
                <li class="-item"><a href="https://diy.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="contractors and serious DIYers">Home Improvement</a></li>
                <li class="-item"><a href="https://money.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="people who want to be financially literate">Personal Finance &amp; Money</a></li>
                <li class="-item"><a href="https://academia.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="academics and those enrolled in higher education">Academia</a></li>
                <li class="-item"><a href="https://law.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="legal professionals, students, and others with experience or interest in law">Law</a></li>
                <li class="-item"><a href="https://fitness.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="physical fitness professionals, athletes, trainers, and those providing health-related needs">Physical Fitness</a></li>
                <li class="-item"><a href="https://gardening.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="gardeners and landscapers">Gardening &amp; Landscaping</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Life / Arts"><ul class="-list">
                <li class="-item"><a href="https://parenting.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="parents, grandparents, nannies and others with a parenting role">Parenting</a></li>
                            <li class="-item">
                    <a href="https://stackexchange.com/sites#lifearts" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 26 })">
                        <strong>
                            more (11)
                        </strong>
                    </a>
                </li>
        </ul>
    </div>
    <div class="site-footer--col site-footer--category js-footer-col" data-name="Culture / Recreation">
        <ul class="-list">
                <li class="-item"><a href="https://english.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="linguists, etymologists, and serious English language enthusiasts">English Language &amp; Usage</a></li>
                <li class="-item"><a href="https://skeptics.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="scientific skepticism">Skeptics</a></li>
                <li class="-item"><a href="https://judaism.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="those who base their lives on Jewish law and tradition and anyone interested in learning more">Mi Yodeya (Judaism)</a></li>
                <li class="-item"><a href="https://travel.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="road warriors and seasoned travelers">Travel</a></li>
                <li class="-item"><a href="https://christianity.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="committed Christians, experts in Christianity and those interested in learning more">Christianity</a></li>
                <li class="-item"><a href="https://ell.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="speakers of other languages learning English">English Language Learners</a></li>
                <li class="-item"><a href="https://japanese.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="students, teachers, and linguists wanting to discuss the finer points of the Japanese language">Japanese Language</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Culture / Recreation"><ul class="-list">
                <li class="-item"><a href="https://chinese.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="students, teachers, and linguists wanting to discuss the finer points of the Chinese language">Chinese Language</a></li>
                <li class="-item"><a href="https://french.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="students, teachers, and linguists wanting to discuss the finer points of the French language">French Language</a></li>
                <li class="-item"><a href="https://german.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="speakers of German wanting to discuss the finer points of the language and translation">German Language</a></li>
                <li class="-item"><a href="https://hermeneutics.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="professors, theologians, and those interested in exegetical analysis of biblical texts">Biblical Hermeneutics</a></li>
                <li class="-item"><a href="https://history.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="historians and history buffs">History</a></li>
                <li class="-item"><a href="https://spanish.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="linguists, teachers, students and Spanish language enthusiasts in general wanting to discuss the finer points of the language">Spanish Language</a></li>
                <li class="-item"><a href="https://islam.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="Muslims, experts in Islam, and those interested in learning more about Islam">Islam</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Culture / Recreation"><ul class="-list">
                <li class="-item"><a href="https://rus.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="лингвистов и энтузиастов русского языка">Русский язык</a></li>
                <li class="-item"><a href="https://russian.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="students, teachers, and linguists wanting to discuss the finer points of the Russian language">Russian Language</a></li>
                <li class="-item"><a href="https://gaming.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="passionate videogamers on all platforms">Arqade (gaming)</a></li>
                <li class="-item"><a href="https://bicycles.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="people who build and repair bicycles, people who train cycling, or commute on bicycles">Bicycles</a></li>
                <li class="-item"><a href="https://rpg.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="gamemasters and players of tabletop, paper-and-pencil role-playing games">Role-playing Games</a></li>
                <li class="-item"><a href="https://anime.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="anime and manga fans">Anime &amp; Manga</a></li>
                <li class="-item"><a href="https://puzzling.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="those who create, solve, and study puzzles">Puzzling</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Culture / Recreation"><ul class="-list">
                <li class="-item"><a href="https://mechanics.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="mechanics and DIY enthusiast owners of cars, trucks, and motorcycles">Motor Vehicle Maintenance &amp; Repair</a></li>
                <li class="-item"><a href="https://boardgames.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="people who like playing board games, designing board games or modifying the rules of existing board games">Board &amp; Card Games</a></li>
                <li class="-item"><a href="https://bricks.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="LEGO&#174; and building block enthusiasts">Bricks</a></li>
                <li class="-item"><a href="https://homebrew.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="dedicated home brewers and serious enthusiasts">Homebrewing</a></li>
                <li class="-item"><a href="https://martialarts.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="students and teachers of all martial arts">Martial Arts</a></li>
                <li class="-item"><a href="https://outdoors.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="people who love being outdoors enjoying nature and wilderness, and learning about the required skills and equipment">The Great Outdoors</a></li>
                <li class="-item"><a href="https://poker.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="serious players and enthusiasts of poker">Poker</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Culture / Recreation"><ul class="-list">
                <li class="-item"><a href="https://chess.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="serious players and enthusiasts of chess">Chess</a></li>
                <li class="-item"><a href="https://sports.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="participants in team and individual sport activities">Sports</a></li>
                            <li class="-item">
                    <a href="https://stackexchange.com/sites#culturerecreation" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 26 })">
                        <strong>
                            more (16)
                        </strong>
                    </a>
                </li>
        </ul>
    </div>
    <div class="site-footer--col site-footer--category js-footer-col" data-name="Science">
        <ul class="-list">
                <li class="-item"><a href="https://mathoverflow.net" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="professional mathematicians">MathOverflow</a></li>
                <li class="-item"><a href="https://math.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="people studying math at any level and professionals in related fields">Mathematics</a></li>
                <li class="-item"><a href="https://stats.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="people interested in statistics, machine learning, data analysis, data mining, and data visualization">Cross Validated (stats)</a></li>
                <li class="-item"><a href="https://cstheory.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="theoretical computer scientists and researchers in related fields">Theoretical Computer Science</a></li>
                <li class="-item"><a href="https://physics.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="active researchers, academics and students of physics">Physics</a></li>
                <li class="-item"><a href="https://chemistry.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="scientists, academics, teachers, and students in the field of chemistry">Chemistry</a></li>
                <li class="-item"><a href="https://biology.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="biology researchers, academics, and students">Biology</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Science"><ul class="-list">
                <li class="-item"><a href="https://cs.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="students, researchers and practitioners of computer science">Computer Science</a></li>
                <li class="-item"><a href="https://philosophy.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="those interested in the study of the fundamental nature of knowledge, reality, and existence">Philosophy</a></li>
                <li class="-item"><a href="https://linguistics.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="professional linguists and others with an interest in linguistic research and theory">Linguistics</a></li>
                <li class="-item"><a href="https://psychology.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="practitioners, researchers, and students in cognitive science, psychology, neuroscience, and psychiatry">Psychology &amp; Neuroscience</a></li>
                <li class="-item"><a href="https://scicomp.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="scientists using computers to solve scientific problems">Computational Science</a></li>
                            <li class="-item">
                    <a href="https://stackexchange.com/sites#science" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 26 })">
                        <strong>
                            more (8)
                        </strong>
                    </a>
                </li>
        </ul>
    </div>
    <div class="site-footer--col site-footer--category js-footer-col" data-name="Other">
        <ul class="-list">
                <li class="-item"><a href="https://meta.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="meta-discussion of the Stack Exchange family of Q&amp;A websites">Meta Stack Exchange</a></li>
                <li class="-item"><a href="https://stackapps.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="apps, scripts, and development with the Stack Exchange API">Stack Apps</a></li>
                <li class="-item"><a href="https://api.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="programmatic interaction with Stack Exchange sites">API</a></li>
                <li class="-item"><a href="https://data.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 1, link: 25 })" title="querying Stack Exchange data using SQL">Data</a></li>
                    </ul>
    </div>
                </div>
            </nav>
            <div class="site-footer--copyright fs-fine">
                <ul class="-list">
                    <li class="-item"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link:4 })" href="https://stackoverflow.blog?blb=1">Blog</a></li>
                    <li class="-item"><a href="https://www.facebook.com/officialstackoverflow/" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 31 })">Facebook</a></li>
                    <li class="-item"><a href="https://twitter.com/stackoverflow" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 32 })">Twitter</a></li>
                    <li class="-item"><a href="https://linkedin.com/company/stack-overflow" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 33 })">LinkedIn</a></li>
                </ul>

                <p class="mt-auto mb24">
site design / logo &#169; 2019 Stack Exchange Inc; user contributions licensed under <a href="https://creativecommons.org/licenses/by-sa/3.0/" class="js-gps-track" data-gps-track="footer.click({ location: 2, link: 34 })" rel="license">cc by-sa 3.0</a>
                            with <a href="https://stackoverflow.blog/2009/06/25/attribution-required/"  class="js-gps-track" data-gps-track="footer.click({ location: 2, link:35 })" rel="license">attribution required</a>.
                    <span id="svnrev">rev&nbsp;2019.8.23.34694</span>
                </p>
            </div>
        </div>

            </footer>
            <script>StackExchange.ready(function () { StackExchange.responsiveness.addSwitcher(); })</script>
    <noscript>
        <div id="noscript-warning">Stack Overflow works best with JavaScript enabled
            <img src="https://pixel.quantserve.com/pixel/p-c1rF4kxgLUzNc.gif" alt="" class="dno">
        </div>
    </noscript>

<script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function() { (i[r].q = i[r].q || []).push(arguments) }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m);
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            StackExchange.ready(function () {

                StackExchange.ga.init({
                    sendTitles: true,
                    tracker: window.ga,
                    trackingCodes: [
                        'UA-108242619-1'
                    ]
                });

                    StackExchange.ga.setDimension('dimension1', '4127764');


                    StackExchange.ga.setDimension('dimension2', '|php|oop|');

                    StackExchange.ga.setDimension('dimension3', 'Questions/Show');


                StackExchange.ga.trackPageView();
            });
            
/**/
            
            var _qevents = _qevents || [],
            _comscore = _comscore || [];
            (function() {
                var ssl = 'https:' == document.location.protocol,
                    s = document.getElementsByTagName('script')[0],
                    qc = document.createElement('script');
                 qc.async = true;
                    qc.src = (ssl ? 'https://secure' : 'http://edge') + '.quantserve.com/quant.js';
                    s.parentNode.insertBefore(qc, s);
                    _qevents.push({ qacct: "p-c1rF4kxgLUzNc" });
/**/
                 var sc = document.createElement('script');
                    sc.async = true;
                    sc.src = (ssl ? 'https://sb' : 'http://b') + '.scorecardresearch.com/beacon.js';
                    s.parentNode.insertBefore(sc, s);
                    _comscore.push({ c1: "2", c2: "17440561" });
            })();
            

</script>
            
    </body>
    </html>
