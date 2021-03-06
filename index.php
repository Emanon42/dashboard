<?php
@$topic = $_GET["topic"];
if(empty($topic)){
  $message = "Choose a section!";
}
else{
  $json_data = file_get_contents('data/'.$topic.'.json');
  $array = json_decode(stripslashes($json_data));
}
?>
<!DOCTYPE html>
<html lang="en" id="facebook" class=" sidebarMode">
  <head>
    <meta charset="utf-8">
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
    <link type="text/css" rel="stylesheet" href="https://www.facebook.com/rsrc.php/v3/yA/r/EV5tAtCBogR.css">
    <link type="text/css" rel="stylesheet" href="https://www.facebook.com/rsrc.php/v3/yu/r/iNDmNoPYSX9.css">
    <link type="text/css" rel="stylesheet" href="https://www.facebook.com/rsrc.php/v3/yY/r/h2f-CDTlqb9.css">
    <link type="text/css" rel="stylesheet" href="https://www.facebook.com/rsrc.php/v3/yB/r/Wh6l2nwzkm5.css">
    <link type="text/css" rel="stylesheet" href="https://www.facebook.com/rsrc.php/v3/yL/r/i-t-ROK2Uat.css">
    <link type="text/css" rel="stylesheet" href="https://www.facebook.com/rsrc.php/v3/y9/r/z7wBnMMAcAd.css">
    <link type="text/css" rel="stylesheet" href="https://www.facebook.com/rsrc.php/v3/y-/r/Gqca1raWXAL.css">
    <link type="text/css" rel="stylesheet" href="https://www.facebook.com/rsrc.php/v3/yw/r/t2OqUUdnU4n.css">
    <link type="text/css" rel="stylesheet" href="https://www.facebook.com/rsrc.php/v3/yo/r/WV2g0SHXu44.css">
    <link type="text/css" rel="stylesheet" href="https://www.facebook.com/rsrc.php/v3/y1/r/WkzsXkEV9l9.css">
    <link type="text/css" rel="stylesheet" href="https://www.facebook.com/rsrc.php/v3/y-/r/jiCAMIA4NIR.css">
    <link type="text/css" rel="stylesheet" href="https://www.facebook.com/rsrc.php/v3/yE/r/Sryw-Ob_5s-.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <title id="pageTitle">[ dashboard ]</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/osd.xml" title="Facebook">
  </head>
  <body class="hasLeftCol _2xk0 home composerExpanded _5vb_ fbx _-kb sf _59l chrome webkit mac x2 Locale_en_US" dir="ltr">
    <div class="_li">
      <div id="globalContainer" class="uiContextualLayerParent">
        <div class="fb_content clearfix " id="content" role="">
          <div>
            <div id="toolbarContainer" class=""></div>
            <div id="mainContainer">
              <div id="leftCol">
                <div id="pagelet_navigation" data-referrer="pagelet_navigation">
                  <div class="_55y4" data-testid="left_nav">
                    <div id="sideNav" class="uiFutureSideNav" role="navigation" aria-label="Apps" data-gt="{;ref;:;bookmarks;}" data-ft="{;tn;:;+H;}">
                      <div id="u_ps_0_1_0">
                        <div id="appsNav" class="homeSideNav" data-ft="{;tn;:;+X;}" data-testid="left_nav_section_APPS">
                          <br>
                          <ul class="_bui _3-96" data-ft="{;tn;:;+X;}">
                            <li class="clearfix sideNavItem stat_elem">
                              <a class="_5afe" href="index.php?topic=music" style="font-size:14px;">
                                <div class="linkWrap noCount"><i class="fa fa-music"></i>&nbsp;<span>Music</span></div>
                              </a>
                            </li>
                            <li class="clearfix sideNavItem stat_elem">
                              <a class="_5afe" href="index.php?topic=entertain" style="font-size:14px;">
                                <div class="linkWrap noCount"><i class="fa fa-video-camera"></i>&nbsp;<span>Entertainment</span></div>
                              </a>
                            </li>
                            <li class="clearfix sideNavItem stat_elem">
                              <a class="_5afe" href="index.php?topic=science" style="font-size:14px;">
                                <div class="linkWrap noCount"><i class="fa fa-bolt"></i>&nbsp;<span>Science</span></div>
                              </a>
                            </li>
                            <li class="clearfix sideNavItem stat_elem">
                              <a class="_5afe" href="index.php?topic=technology" style="font-size:14px;">
                                <div class="linkWrap noCount"><i class="fa fa-rocket"></i>&nbsp;<span>Technology</span></div>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="contentCol" class="clearfix hasRightCol _5r-_ homeWiderContent homeFixedLayout hasExpandedComposer newsFeedComposer">
                <div id="rightCol" role="complementary" aria-label="Reminders, people you may know, and ads">
                  <div class="_5rzs _5v6d">
                    <div class="pagelet-group" id="pagelet_advertiser_panel" data-referrer="pagelet_advertiser_panel" data-display-group="rhc"></div>
                    <div class="_64a">
                      <div class="_64b" id="u_0_s">
                        <div class="_4-u2 _5v6e cardRightCol _4-u8" id="u_0_0">
                          <div class="home_right_column">
                            <div class="pagelet-group pagelet" id="pagelet_next_match" data-referrer="pagelet_next_match" data-display-group="rhc">
                              <div id="live_games_rhc" class="_2pin _9vk">
                                <div class="uiHeader mbs uiHeaderSection">
                                  <div class="clearfix uiHeaderTop">
                                    <div>
                                      <h6 class="uiHeaderTitle">Sports</h6>
                                    </div>
                                  </div>
                                </div>
                                <div class="_4gj9">
                                  <div id="u_ps_0_6_1">
                                    <div data-reactroot="">
                                      <table cols="2" spacing="_2pih _2pim" class="uiGrid _51mz" cellspacing="0" cellpadding="0">
                                        <tbody>
                                          <tr class="_51mx">
                                            <td class="_2pih _2pim _51m-">
                                              <div>
                                                <div class="_5p7c _4-u2  _4-u8" aria-controls="js_f" aria-haspopup="true" role="null" id="js_1w" aria-describedby="js_3y">
                                                  <a href="/sports/1063785073664508/?ref=home_rhs_schedule_game">
                                                    <div class="_5p7f">
                                                      <div class="_5p7g clearfix">
                                                        <div class="_ohe lfloat">
                                                          <div class="_3-94"><img class="_5p7h img" src="https://fbcdn-photos-d-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-0/p50x50/14095822_10155219472203508_8988055790268702575_n.png?oh=5381337078e3a712ef288dc9a75408d3&amp;oe=583DB3D0&amp;__gda__=1484791520_7685c5f326f7714d83ea61a354007411" alt=""><span class="_5p7e  _50f7" display="inline">LAD</span></div>
                                                        </div>
                                                        <div class="_ohf rfloat"></div>
                                                      </div>
                                                      <div class="_5p7g clearfix">
                                                        <div class="_ohe lfloat">
                                                          <div class="_3-94"><img class="_5p7h img" src="https://fbcdn-photos-d-a.akamaihd.net/hphotos-ak-xlf1/v/t1.0-0/p50x50/14102668_10153892732247781_2148160233879061188_n.png?oh=79eb49855c1f27fc2ac28d996da5cdf2&amp;oe=58461D33&amp;__gda__=1480806580_3892de3ecabb6561e8625d15146fc0ce" alt=""><span class="_5p7e  _50f7" display="inline">NYY</span></div>
                                                        </div>
                                                        <div class="_ohf rfloat"></div>
                                                      </div>
                                                    </div>
                                                    <div class="_5p7d"></div>
                                                    <span class="_50f8" display="inline">
                                                      <div class="_5p7i clearfix">
                                                        <div class="_ohe lfloat">4:35am</div>
                                                        <div class="_ohf rfloat"></div>
                                                      </div>
                                                    </span>
                                                  </a>
                                                </div>
                                                <!-- react-empty: 125 -->
                                              </div>
                                            </td>
                                            <td class="_2pih _2pim _51mw _51m-">
                                              <div>
                                                <div class="_5p7c _4-u2  _4-u8" aria-controls="js_d" aria-haspopup="true" role="null">
                                                  <a href="/sports/158387211215615/?ref=home_rhs_schedule_game">
                                                    <div class="_5p7f">
                                                      <div class="_5p7g clearfix">
                                                        <div class="_ohe lfloat">
                                                          <div class="_3-94"><img class="_5p7h img" src="https://fbcdn-photos-b-a.akamaihd.net/hphotos-ak-xlf1/v/t1.0-0/p50x50/14088433_10154498596098979_6274166705985521826_n.png?oh=304e0b6f3cc4c964b54b2365fd78272c&amp;oe=5838925D&amp;__gda__=1484322010_531eb157f240151b4a618cb9cb32f28e" alt=""><span class="_5p7e  _50f7" display="inline">SEA</span></div>
                                                        </div>
                                                        <div class="_ohf rfloat"></div>
                                                      </div>
                                                      <div class="_5p7g clearfix">
                                                        <div class="_ohe lfloat">
                                                          <div class="_3-94"><img class="_5p7h img" src="https://fbcdn-photos-a-a.akamaihd.net/hphotos-ak-xaf1/v/t1.0-0/p50x50/14141762_10150700742604984_5884937144713504722_n.png?oh=3fb90de17d1db1f3a644728f08e679ab&amp;oe=587B09AF&amp;__gda__=1483997256_0797065d606a1b09a9fd5cf0f4a478be" alt=""><span class="_5p7e  _50f7" display="inline">LAA</span></div>
                                                        </div>
                                                        <div class="_ohf rfloat"></div>
                                                      </div>
                                                    </div>
                                                    <div class="_5p7d"></div>
                                                    <span class="_50f8" display="inline">
                                                      <div class="_5p7i clearfix">
                                                        <div class="_ohe lfloat">7:35am</div>
                                                        <div class="_ohf rfloat"></div>
                                                      </div>
                                                    </span>
                                                  </a>
                                                </div>
                                                <!-- react-empty: 85 -->
                                              </div>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="pagelet-group pagelet" id="pagelet_trending_tags_and_topics" data-referrer="pagelet_trending_tags_and_topics" data-display-group="rhc">
                              <div class="_5mym">
                                <div class="clearfix _52s7">
                                  <ul class="uiList _1pq1 _3pr9 _5rap rfloat _ohf _509- _4ki">
                                    <li><a data-hover="tooltip" data-tooltip-content="Top Trends" class="_tes _5nns _3pra" href="#" id="u_ps_0_4_0" role="button"><span class="_1aay"><img class="_1aa- _45zg img" alt="" src="https://www.facebook.com/rsrc.php/v3/y4/r/-PAXP-deijE.gif" id="u_ps_0_4_a"><img class="  img" alt="" src="https://www.facebook.com/rsrc.php/v3/y4/r/-PAXP-deijE.gif" id="u_ps_0_4_b"></span></a></li>
                                  </ul>
                                  <div class="uiHeader uiHeaderTopBorder _1pp_ _3pr8">
                                    <div class="clearfix uiHeaderTop">
                                      <div>
                                        <h6 class="uiHeaderTitle">person of interest</h6>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="_2sns _5spf">
                                  <div class="_5my7 _2snq" id="u_ps_0_4_5">
                                    <ul class="_5myl">
                                      <li data-topicid="259258474114887" class="_5my2 _3uz4" data-position="1" data-categories="[302,3]">
                                        <div class="clearfix _uhk _4_nm">
                                          <img class="_3uz0 _5r-z _8o lfloat _ohe img" alt="" src="https://www.facebook.com/rsrc.php/v3/y4/r/-PAXP-deijE.gif">
                                          <div class="clearfix _42ef">
                                            <a class="_4qzh _5v0t _7ge" href="/topic/DevilL/259258474114887?source=whfrt&amp;position=1&amp;trqid=6329527411008802168" id="u_ps_0_4_f" data-hovercard="/pubcontent/trending/hovercard/?topic_id=259258474114887&amp;topic_link_id=u_ps_0_4_f&amp;position=1&amp;source=whfrt&amp;trqid=6329527411008802168" data-hovercard-position="left" data-hovercard-offset-x="-15" data-hovercard-offset-y="10" aria-controls="js_40" aria-haspopup="true" role="null" aria-describedby="js_41">
                                              <div>
                                                <span class="_5v0s _5my8">Devil(L)</span>
                                                <div class="_5v9v">3K people talking about this</div>
                                              </div>
                                            </a>
                                          </div>
                                        </div>
                                      </li>
                                      <li data-topicid="259258474114887" class="_5my2 _3uz4" data-position="1" data-categories="[302,3]">
                                        <div class="clearfix _uhk _4_nm">
                                          <img class="_3uz0 _5r-z _8o lfloat _ohe img" alt="" src="https://www.facebook.com/rsrc.php/v3/y4/r/-PAXP-deijE.gif">
                                          <div class="clearfix _42ef">
                                            <a class="_4qzh _5v0t _7ge" href="/topic/DevilL/259258474114887?source=whfrt&amp;position=1&amp;trqid=6329527411008802168" id="u_ps_0_4_f" data-hovercard="/pubcontent/trending/hovercard/?topic_id=259258474114887&amp;topic_link_id=u_ps_0_4_f&amp;position=1&amp;source=whfrt&amp;trqid=6329527411008802168" data-hovercard-position="left" data-hovercard-offset-x="-15" data-hovercard-offset-y="10" aria-controls="js_40" aria-haspopup="true" role="null" aria-describedby="js_41">
                                              <div>
                                                <span class="_5v0s _5my8">Devil(L)</span>
                                                <div class="_5v9v">3K people talking about this</div>
                                              </div>
                                            </a>
                                          </div>
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="pagelet_rhc_footer" data-referrer="pagelet_rhc_footer">
                          <div>
                            <div class="rhcFooterWrap" role="contentinfo">
                              <div class="fsm fwn fcg">[ dashboard ] - Omkar Prabhu's Production.</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div style="height: 700px;" class=""></div>
                    </div>
                  </div>
                  &nbsp; 
                </div>
                <div id="contentArea" role="main">
                  <div id="stream_pagelet" data-referrer="stream_pagelet" data-at-shortcutkeys="{;j;:;focus on next story;,;k;:;focus on previous story;,;p;:;post a new status;,;l;:;like\/unlike selected story;,;c;:;comment on selected story;,;s;:;share selected story;,;o;:;open selected story's attachment;,;\/;:;search;,;q;:;search chat contacts;,;?;:;show keyboard shortcuts help dialog;}">
                    <div id="topnews_main_stream_408239535924329" data-referrer="topnews_main_stream_408239535924329" data-gt="{;ref;:;nf_generic;}">
                      <div class="_5pcb" id="feed_stream_57d704e8374600d93791699">
                        <div id="more_pager_pagelet_57d704e83763d7c24026981" data-referrer="more_pager_pagelet_57d704e83763d7c24026981">
                          <div id="u_ps_0_0_j" data-referrer="u_ps_0_0_j" style="min-height: 100px;">
                            <div class="_4ikz" id="substream_0_57d706a770b6d8e58852506" data-referrer="substream_0_57d706a770b6d8e58852506">
                              <div>

                              <?php 
                              if($topic == "science"){
                                foreach($array as $item){
                                  echo'<div id="u_jsonp_3_0">
                                  <div>
                                    <div data-fte="1" class="_5jmm _5pat _3lb4 _59m _x72">
                                      <div class="_4-u2 mbm _5v3q _4-u8" id="u_jsonp_3_2c">
                                        <div class="_3ccb" id="u_jsonp_3_2d">
                                          <div class="userContentWrapper _5pcr" role="article" aria-label="Story">
                                            <div class="_1dwg _1w_m">
                                              <div class="_5x46">
                                                <div class="clearfix _5va3">
                                                  <!--<a class="_5pb8 _8o _8s lfloat _ohe" aria-hidden="true" tabindex="-1" target="">
                                                    <div class="_38vo"><img class="_s0 _5xib _5sq7 _44ma _rw img" src=""></div>
                                                  </a>!-->
                                                  <div class="clearfix _42ef">
                                                    <div class="_5va4">
                                                      <div>
                                                        <div class="_6a _5u5j">
                                                          <div class="_6a _5u5j _6b">
                                                            <h5 class="_5pbw _5vra" id="js_2u"><span class="fwn fcg"><span class="fwb fcg"><a href="'.$item->url.'">'.$item->title.'</a></span></span></h5>
                                                            <div class="_5pcp"><span><span class="fsm fwn fcg"><abbr class="_5ptz timestamp livetimestamp"><span class="timestampContent" id="js_2v">'.$item->timestamp.'</span></abbr></span></span></div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <p align="center"><img src=""></p>
                                                </div>
                                              </div>
                                              <div class="_5pbx userContent" id="js_2w">
                                                <p style="font-size:13px;"><a href="'.$item->url.'">Read More Here.</a></p>
                                              </div>
                                            </div>
                                            <div>
                                              <form rel="async" class="commentable_item collapsed_comments" method="post">
                                                <div class="_sa_ _5vsi _ca7 _192z">
                                                  <div class="_37uu">
                                                    <div data-reactroot="">
                                                      <div class="_3399 _1f6t _4_dr">
                                                        <div class="_524d">
                                                          <div class="_ipn">
                                                            <div class="_ipo">
                                                              <div class="_36_q">Kuch toh, time and data</div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>';
                                }
                              }
                              else if($topic == "tech" || $topic == "music" || $topic == "entertain"){
                                foreach($array as $item){
                                  echo'<div id="u_jsonp_3_0">
                                  <div>
                                    <div data-fte="1" class="_5jmm _5pat _3lb4 _59m _x72">
                                      <div class="_4-u2 mbm _5v3q _4-u8" id="u_jsonp_3_2c">
                                        <div class="_3ccb" id="u_jsonp_3_2d">
                                          <div class="userContentWrapper _5pcr" role="article" aria-label="Story">
                                            <div class="_1dwg _1w_m">
                                              <div class="_5x46">
                                                <div class="clearfix _5va3">
                                                  <!--<a class="_5pb8 _8o _8s lfloat _ohe" aria-hidden="true" tabindex="-1" target="">
                                                    <div class="_38vo"><img class="_s0 _5xib _5sq7 _44ma _rw img" src=""></div>
                                                  </a>!-->
                                                  <div class="clearfix _42ef">
                                                    <div class="_5va4">
                                                      <div>
                                                        <div class="_6a _5u5j">
                                                          <div class="_6a _5u5j _6b">
                                                            <h5 class="_5pbw _5vra" id="js_2u"><span class="fwn fcg"><span class="fwb fcg"><a href="'.$item->url.'">'.$item->title.'</a></span></span></h5>
                                                            <div class="_5pcp"><span><span class="fsm fwn fcg"><abbr class="_5ptz timestamp livetimestamp"><span class="timestampContent" id="js_2v">'.$item->timestamp.'</span></abbr></span></span></div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <p align="center"><img src="'.$item->image.'"></p>
                                                </div>
                                              </div>
                                              <div class="_5pbx userContent" id="js_2w">
                                                <p>'.$item->description.'</p>
                                              </div>
                                            </div>
                                            <div>
                                              <form rel="async" class="commentable_item collapsed_comments" method="post">
                                                <div class="_sa_ _5vsi _ca7 _192z">
                                                  <div class="_37uu">
                                                    <div data-reactroot="">
                                                      <div class="_3399 _1f6t _4_dr">
                                                        <div class="_524d">
                                                          <div class="_ipn">
                                                            <div class="_ipo">
                                                              <div class="_36_q">Kuch toh, time and data</div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>';
                                }
                              }
                              ?>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>