@include('partials.header')

    <header id="banner">
        <div id="banner_container" class="container">
            <h3 class="banner-title">Properties Listing</h3>
            <p class="banner-subtitle"></p>
        </div>
    </header>
    <div class="content-wrapper clearfix">
        <div class="container"><!-- container via hooks -->
            <div id="main" class="row-fluid">
                <section  id="content" class="span9" role="main">
                    <article class="post-56 property type-property status-publish hentry clearfix" id="property-56">
                        <div id="property_slider_wrapper">
                            <div id="myCarousel" class="carousel slide">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class='item active'><img src="uploads/dummy-870x350.png" width='870' height='350' alt='' /></div>
                                    <div class='item '><img src="uploads/dummy-870x350.png" width='870' height='350' alt='' /></div>
                                    <div class='item '><img src="uploads/dummy-870x350.png" width='870' height='350' alt='' /></div>
                                    <div class='item '><img src="uploads/dummy-870x350.png" width='870' height='350' alt='' /></div>
                                    <div class='item '><img src="uploads/dummy-870x350.png" width='870' height='350' alt='' /></div>
                                </div>
                                <div class="carousel-thumbnail">
                                    <!-- Carousel nav -->
                                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                                    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                                    <ol class="carousel-indicators hidden-phone">
                                        <li data-target='#myCarousel' data-slide-to='0' class='active'><img src="uploads/dummy-80x80.png" width='80' height='80' alt='' /></li>
                                        <li data-target='#myCarousel' data-slide-to='1' class=''><img src="uploads/dummy-80x80.png" width='80' height='80' alt='' /></li>
                                        <li data-target='#myCarousel' data-slide-to='2' class=''><img src="uploads/dummy-80x80.png" width='80' height='80' alt='' /></li>
                                        <li data-target='#myCarousel' data-slide-to='3' class=''><img src="uploads/dummy-80x80.png" width='80' height='80' alt='' /></li>
                                        <li data-target='#myCarousel' data-slide-to='4' class=''><img src="uploads/dummy-80x80.png" width='80' height='80' alt='' /></li>
                                    </ol>
                                </div>
                            </div>
                        </div><!-- /#property_slider_wrapper -->
                        <div id="single_property_meta_wrapper">
                            <div class="single-property-meta clearfix status-35-text">
                                <!---------------#Property Details#------------------------->
                                <span class="meta-size"><i class="ico-size"></i>240M</span>
                                <span class="meta-bedroom"><i class="ico-bedroom"></i>3<span class="meta-hidden"> Bedrooms</span></span>
                                <span class="meta-bathroom"><i class="ico-bathroom"></i>5<span class="meta-hidden"> Bathrooms</span></span>
                                <span class="meta-garage"><i class="ico-garage"></i>1<span class="meta-hidden"> Garages</span></span>
                                <span class="meta-print visible-desktop"><i class="ico-print"></i>
										<span class="print-hidden"><a href="javascript:window.print()">Print this page</a></span>
									</span>
                                <span class="meta-status">For Sale</span>
                            </div>
                        </div>
                        <div class="single-property-content-wrapper">
                            <header class="single-property-header">
                                <!---------------#Property Title#--------------------->
                                <h3 class="single-property-title">Florida 5, Pinecrest, FL</h3>
                                <!---------------#Property Address#----------------------->
                                <p class="single-property-address">Pinecrest, FL, USA</p>
                            </header>
                            <div class="single-property-price">
                                <!--------------#Property Price#------------->
                                <p><h3><sup class="price-curr">$</sup>16,000&nbsp;<span class="price-postfix"></span></h3></p>
                            </div>
                            <div class="single-property-content">
                                <!------------------#Property Descroption#----------------->
                                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                <p>&nbsp;</p>
                            </div>
                            <div class="single-property-map">
                                <!----------#This is Property map section, Scroll down to bottom to change the coordinate#---------->
                                <div id="the_map" class="map-wrap clearfix">
                                    <span class="map-label">Property Map</span>
                                    <div id="property_map"></div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div id="contactAgent" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="contactAgentLabel" aria-hidden="true">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h3>
                                        Send message to Agent Julianne Hough
                                    </h3>
                                </div>
                                <div class="modal-body">
                                    <form id="contact-agent-form" action="#" method="post">
                                        <div class="controls controls-row">
                                            <input class="span6" name="name" type="text" placeholder="*Name " required />
                                            <input class="span6" name="email" type="email" placeholder="*Email" required />
                                        </div>
                                        <div class="controls">
                                            <textarea name="message" class="span12" rows="10" placeholder="*Message" required></textarea>
                                        </div>
                                        <div class="controls">
                                            <input id="submit" class="btn btn-contact" type="submit" name="submit" value="Send" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </article>
                </section><!-- #content -->
                <section id="sidebar" class="span3" role="complementary">
                    <aside id="property_agent-2" class="widget property-agent">
                        <h3 class="widget-title">Agent Info</h3>
                        <div class="content-widget"><img width="150" height="150" src="uploads/dummy-150x150.png" class="alignleft agent-widget wp-post-image" alt="agent-john-due" />
                            <div class="agent-widget-name">Julianne Hough</div>
                            <div class="agent-widget-phone"><i class="icon-phone"></i>+215 (800) 4567</div>
                            <div class="agent-widget-email"><i class="icon-envelope"></i>agent@envato.com</div>
                            <div class="clear"></div>
                            <div class="agent-widget-excerpt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidu</div><p>&nbsp;</p>
                            <div class="agent-desc"><a role="button" data-toggle="modal" class="button button-search-widget" href="#contactAgent">Contact Agent</a></div></div><!-- /.content-widget -->
                    </aside>
               {{--     <aside id="property-search-widget-2" class="widget widget-property-search">
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
            <div class="single-property-related ">
                <span class="map-label">Related Property</span>
                <div class="row-fluid">
                    <div class="span3">
                        <article class="property-item">
                            <div class="property-images">
                                <a href="property-single.html" title="60 Merrick Way, Miami"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="60 Merrick Way, Miami" title="60 Merrick Way, Miami" /></a>
                                <div class="property-status status-28-text">For Rent</div>
                            </div><!-- /.property-images -->
                            <div class="property-attribute">
                                <h3 class="attribute-title"><a href="property-single.html" title="60 Merrick Way, Miami" >60 Merrick Way, Miami</a><i class="icon-heart"></i></h3>
                                <span class="attribute-city">Miami</span>
                                <div class="attribute-price">
                                    <span class="attr-pricing"><sup class="price-curr">$</sup>5,000</span>
                                </div>
                            </div>
                            <div class="property-meta clearfix">
                                <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">280M</span></div>
                                <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">4</span></div>
                                <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">6</span></div>
                            </div>
                        </article>
                    </div>
                    <div class="span3">
                        <article class="property-item">
                            <div class="property-images">
                                <a href="property-single.html" title="401 Biscayne Boulevard, Miami"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="401 Biscayne Boulevard, Miami" title="401 Biscayne Boulevard, Miami" /></a>
                                <div class="property-status status-28-text">For Rent</div>
                            </div><!-- /.property-images -->
                            <div class="property-attribute">
                                <h3 class="attribute-title"><a href="property-single.html" title="401 Biscayne Boulevard, Miami" >401 Biscayne Boulevard, Miami</a><i class="icon-heart"></i></h3>
                                <span class="attribute-city">Miami</span>
                                <div class="attribute-price">
                                    <span class="attr-pricing"><sup class="price-curr">$</sup>45,000</span>
                                </div>
                            </div>
                            <div class="property-meta clearfix">
                                <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">300M</span></div>
                                <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">5</span></div>
                                <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">7</span></div>
                            </div>
                        </article>
                    </div>
                    <div class="span3">
                        <article class="property-item">
                            <div class="property-images">
                                <a href="property-single.html" title="15421 Southwest 39th Terrace"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="15421 Southwest 39th Terrace" title="15421 Southwest 39th Terrace" /></a>
                                <div class="property-status status-28-text">For Rent</div>
                            </div><!-- /.property-images -->
                            <div class="property-attribute">
                                <h3 class="attribute-title"><a href="property-single.html" title="15421 Southwest 39th Terrace" >15421 Southwest 39th Terrace</a><i class="icon-heart"></i></h3>
                                <span class="attribute-city">Miami</span>
                                <div class="attribute-price">
                                    <span class="attr-pricing"><sup class="price-curr">$</sup>3,850</span>
                                </div>
                            </div>
                            <div class="property-meta clearfix">
                                <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">240 M</span></div>
                                <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
                                <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">2</span></div>
                            </div>
                        </article>
                    </div>
                    <div class="span3">
                        <article class="property-item">
                            <div class="property-images">
                                <a href="property-single.html" title="1200 Anastasia Avenue, Coral Gables"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-35 wp-post-image" alt="1200 Anastasia Avenue, Coral Gables" title="1200 Anastasia Avenue, Coral Gables" /></a>
                                <div class="property-status status-35-text">For Sale</div>
                            </div><!-- /.property-images -->
                            <div class="property-attribute">
                                <h3 class="attribute-title"><a href="http://demo.puriwp.com/realexpert/property/1200-anastasia-avenue-coral-gables/" title="1200 Anastasia Avenue, Coral Gables" >1200 Anastasia Avenue, Coral G...</a><i class="icon-heart"></i></h3>
                                <span class="attribute-city">Miami</span>
                                <div class="attribute-price">
                                    <span class="attr-pricing"><sup class="price-curr">$</sup>5,600</span>
                                </div>
                            </div>
                            <div class="property-meta clearfix">
                                <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">200M</span></div>
                                <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
                                <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">4</span></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div><!-- /.single-propety-related -->

        </div><!-- /.container-->
    </div><!-- /.content-wrapper -->
@include('partials.footer')