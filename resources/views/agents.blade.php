@include('partials.header')

<header id="banner">
        <div id="banner_container" class="container">
            <h3 class="banner-title">Agents</h3>
            <p class="banner-subtitle"></p>
        </div>
    </header>
    <div class="content-wrapper clearfix">
        <div class="container"><!-- container via hooks -->
            <div id="main" class="row-fluid">
                <section  id="content" class="span9" role="main">
                    <div id="archive-wrapper">
                        <div class="agent-container clearfix">
                            <div class="div-row agent-thumbnail">
                                <a href="{{route('agent-single')}}">
                                    <img width="300" height="200" src="uploads/agent1.jpg" class="attachment-agent-archive wp-post-image" alt="agent-john-due" />
                                </a>
                                <div class="agent-info">
                                    <div class="info-name">
                                        <a href="{{route('agent-single')}}">Julianne Hough</a>
                                    </div>
                                    <div class="info-number">Ph. +215 (800) 4567</div>
                                    <div class="info-social">
                                        <a href="#">
												<span class="icon-stack">
													<i class="icon-circle icon-stack-base twitter"></i>
													<i class="icon-twitter"></i><!-- twitter -->
												</span>
                                        </a>
                                        <a href="#">
												<span class="icon-stack">
													<i class="icon-circle icon-stack-base rss"></i>
													<i class="icon-rss"></i><!-- rss -->
												</span>
                                        </a>
                                        <a href="#">
												<span class="icon-stack">
													<i class="icon-circle icon-stack-base facebook"></i>
													<i class="icon-facebook"></i><!-- facebook -->
												</span>
                                        </a>
                                        <a href="#">
												<span class="icon-stack">
													<i class="icon-circle icon-stack-base gplus"></i>
													<i class="icon-google-plus"></i><!-- google plus -->
												</span>
                                        </a>
                                        <a href="#">
												<span class="icon-stack">
													<i class="icon-circle icon-stack-base linkedin"></i>
													<i class="icon-linkedin"></i><!-- linkedin -->
												</span>
                                        </a>
                                    </div><!-- /.info-social -->
                                </div>
                            </div>
                            <div class="div-row agent-desc">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.<br /><br />
                                    Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraveru...</p>
                                <div class="send-message">
                                    <a class="button button-search-widget" href="{{route('agent-single')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="agent-container clearfix">
                            <div class="div-row agent-thumbnail">
                                <a href="{{route('agent-single')}}">
                                    <img width="300" height="200" src="uploads/agent2.jpg" class="attachment-agent-archive wp-post-image" alt="agent-john-due" />
                                </a>
                                <div class="agent-info">
                                    <div class="info-name"><a href="{{route('agent-single')}}">Ben Dover</a></div>
                                    <div class="info-number">Ph. +215 (800) 4567 </div>
                                    <div class="info-social">
                                        <a href="#">
												<span class="icon-stack">
													<i class="icon-circle icon-stack-base twitter"></i>
													<i class="icon-twitter"></i><!-- twitter -->
												</span>
                                        </a>
                                        <a href="#">
												<span class="icon-stack">
													<i class="icon-circle icon-stack-base rss"></i>
													<i class="icon-rss"></i><!-- rss -->
												</span>
                                        </a>
                                        <a href="#">
												<span class="icon-stack">
													<i class="icon-circle icon-stack-base facebook"></i>
													<i class="icon-facebook"></i><!-- facebook -->
												</span>
                                        </a>
                                        <a href="#">
												<span class="icon-stack">
													<i class="icon-circle icon-stack-base gplus"></i>
													<i class="icon-google-plus"></i><!-- google plus -->
												</span>
                                        </a>
                                        <a href="#">
												<span class="icon-stack">
													<i class="icon-circle icon-stack-base linkedin"></i>
													<i class="icon-linkedin"></i><!-- linkedin -->
												</span>
                                        </a>
                                    </div><!-- /.info-social -->
                                </div>
                            </div>
                            <div class="div-row agent-desc">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.<br /><br />
                                    Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraveru...</p>
                                <div class="send-message">
                                    <a class="button button-search-widget" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /#archive-wrapper -->
                </section><!-- #content -->
                <section id="sidebar" class="span3" role="complementary">
                {{--    <aside id="property-search-widget-2" class="widget widget-property-search">
                        <h3 class="widget-title">Property Search</h3>
                        <div class="content-widget">
                            <form class="advance-search-form" action="#property_search" method="get">
                                <div class="option-bar location">
                                    <input class="input-location" type="text" name="real_location" placeholder="e.g. 21 street, Many Hill, New York" />
                                </div>
                                <div class="option-bar type">
										<span class="selectwrap">
											<select name="real_type" id="select-type" class="search-select">
												<option value="apartments">Apartments</option>
												<option value="bungalows">Bungalows</option>
												<option value="condominium">Condominium</option>
												<option value="villas">Villas</option>
												<option value="any" selected="selected">Type - Any</option>
											</select>
										</span>
                                </div>
                                <div class="option-bar status">
										<span class="selectwrap">
											<select name="real_status" id="select-status" class="search-select">
												<option value="for-rent">For Rent</option>
												<option value="for-sale">For Sale</option>
												<option value="any" selected>Status</option>
											</select>
										</span>
                                </div>
                                <div class="option-bar bedroom">
										<span class="selectwrap">
											<select name="real_bedroom" id="select-bedroom" class="search-select">
												<option value="1">1</option><option value="2">2</option>
												<option value="3">3</option><option value="4">4</option>
												<option value="5">5</option><option value="6">6</option>
												<option value="7">7</option><option value="8">8</option>
												<option value="9">9</option><option value="10">10</option>
												<option value="any" selected="selected">Bedroom</option>
											</select>
										</span>
                                </div>
                                <div class="option-bar bathroom">
										<span class="selectwrap">
											<select name="real_bathroom" id="select-bathroom" class="search-select">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="any" selected="selected">Bathroom</option>
											</select>
										</span>
                                </div>
                                <div class="option-bar min-price">
										<span class="selectwrap">
											<select name="min_price" id="select-min-price" class="search-select">
												<option value="1000">$1,000</option>
												<option value="5000">$5,000</option>
												<option value="10000">$10,000</option>
												<option value="50000">$50,000</option>
												<option value="100000">$100,000</option>
												<option value="200000">$200,000</option>
												<option value="300000">$300,000</option>
												<option value="400000">$400,000</option>
												<option value="500000">$500,000</option>
												<option value="600000">$600,000</option>
												<option value="700000">$700,000</option>
												<option value="800000">$800,000</option>
												<option value="900000">$900,000</option>
												<option value="1000000">$1,000,000</option>
												<option value="1500000">$1,500,000</option>
												<option value="2000000">$2,000,000</option>
												<option value="2500000">$2,500,000</option>
												<option value="5000000">$5,000,000</option>
												<option value="any" selected="selected">Min. Price</option>
											</select>
										</span>
                                </div>
                                <div class="option-bar max-price">
										<span class="selectwrap">
											<select name="max_price" id="select-max-price" class="search-select">
												<option value="5000">$5,000</option>
												<option value="10000">$10,000</option>
												<option value="50000">$50,000</option>
												<option value="100000">$100,000</option>
												<option value="200000">$200,000</option>
												<option value="300000">$300,000</option>
												<option value="400000">$400,000</option>
												<option value="500000">$500,000</option>
												<option value="600000">$600,000</option>
												<option value="700000">$700,000</option>
												<option value="800000">$800,000</option>
												<option value="900000">$900,000</option>
												<option value="1000000">$1,000,000</option>
												<option value="1500000">$1,500,000</option>
												<option value="2000000">$2,000,000</option>
												<option value="2500000">$2,500,000</option>
												<option value="5000000">$5,000,000</option>
												<option value="10000000">$10,000,000</option>
												<option value="any" selected="selected">Max. Price</option>
											</select>
										</span>
                                </div>
                                <input type="submit" name="submit" class="button button-search-widget" value="Search" />
                            </form>
                        </div><!-- /.content-widget -->
                    </aside>--}}
                    <aside id="wolf-twitter-widget-3" class="widget wolf-twitter-widget">
                        <h3 class="widget-title">Twitter Feed</h3>
                        <div class="content-widget">
                            <ul class="wolf-tweet-list">
                                <li>
                                    <span class="wolf-tweet-time"><a href="#" target="_blank">about 7 hours  ago</a></span><span class="wolf-tweet-text">One of the best parts of <a href="#" target="_blank">#Movember</a>: seeing Bricey from <a href="#" target="_blank">#Envato</a> HQ dressed as Magnum P.I. @ Envato <a href="#" target="_blank">http://t.co/rkQK2JXaj7</a></span>
                                </li>
                                <li>
                                    <span class="wolf-tweet-time"><a href="#" target="_blank">about 3 days  ago</a></span><span class="wolf-tweet-text">RT <a href="#" target="_blank">@justinfrench</a>: Envato is looking for a Front End Developer. Help us make all the things awesome. <a href="h#" target="_blank">http://t.co/XSvEjwFSDb</a></span>
                                </li>
                                <li>
                                    <span class="wolf-tweet-time"><a href="#" target="_blank">about 3 days  ago</a></span><span class="wolf-tweet-text">RT <a href="#" target="_blank">@tutsplus</a>: We've just launched our brand new Tuts+ Blog! Read on for insight into the thoughts and people behind Tuts+ - <a href="#" target="_blank">http://t.co/vM6…</a></span>
                                </li>
                            </ul>
                        </div><!-- /.content-widget -->
                    </aside>
                </section><!-- #sidebar -->
            </div><!-- /#main -->
        </div><!-- /.container-->
    </div><!-- /.content-wrapper -->
    @include('partials.footer')