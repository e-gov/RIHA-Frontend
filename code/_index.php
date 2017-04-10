<?php include('_header.php') ?>
    <header class="pagehead welcome" style="background-image:url(images/data/intro-bg.png)">
        <div class="row">
            <div class="col-md-8 col-12">
                <h1>Riigi infosüsteemi haldussüsteem RIHA</h1>
                <p class="lead">RIHA on ühtne keskkond riigi infosüsteemi nõuete kaardistamiseks ja haldamiseks</p>
                <div class="btn-group">
                    <a class="btn btn-success btn-lg" href="#" role="button"><span class="fa fa-play"></span><span>Vaata videot</span></a>
                </div>
            </div>
            <div class="col-md-4 col-12 hidden-xs-down">
                <div class="stats-block mt-md-0 mt-3">
                    <div class="item-single">
                        <p class="h1">45</p>
                        <p class="text">Nulla vitae elit libero, a pharetra</p>
                    </div>
                    <div class="item-single">
                        <p class="h1">502</p>
                        <p class="text">Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                    </div>
                    <div class="item-single">
                        <p class="h1">182</p>
                        <p class="text">Duis mollis, est non commodo luctus</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        
    <div class="row">
        <div class="col-12">
            <div class="card-deck">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">RIHA-st saate esmast teavet teise asutuse süsteemi kohta</h4>
                        <p class="card-text">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Praesent commodo.</p>
                    </div>
                </div>
                <div class="card hidden-xs-down">
                    <div class="card-block">
                        <h4 class="card-title">RIHA pakub infot töödeldavate andmete, pakutavate teenuste kohta</h4>
                        <p class="card-text">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Praesent commodo.</p>
                    </div>
                </div>
                <div class="card hidden-xs-down">
                    <div class="card-block">
                        <h4 class="card-title">RIHA kaudu saate muuta oma süsteemi teistele asutustele kasutatavaks</h4>
                        <p class="card-text">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Praesent commodo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-0 mt-sm-3">
        <div class="col-12">
            <div class="card-deck charts-col-2">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Ipsum Cursus</h4>
                        <div class="card-chart">
                            <div class="chart-container">
                                <canvas id="chart1" width="470" height="160"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer chart-bottom-legend" id="chart1-legend">
                    </div>
                </div>
                <div class="card hidden-xs-down">
                    <div class="card-block">
                        <h4 class="card-title">Elit Ullamcorper Consectetur</h4>
                        <div class="card-chart">
                            <div class="chart-container">
                                <canvas id="chart2" width="470" height="160"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer chart-bottom-legend" id="chart2-legend">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3 hidden-xs-down">
        <div class="col-12">
            <div class="card-deck charts-col-3">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Quam Fusce Nibh</h4>
                        <div class="card-chart side-legend">
                            <div class="chart-container">
                                <canvas id="chart3" width="160" height="160"></canvas>
                            </div>
                            <div class="chart-side-legend" id="chart3-legend"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Dapibus Condimentum Parturient</h4>
                        <ul class="links-list list-unstyled">
                            <li><a href="#">Fusce Ultricies</a></li>
                            <li><a href="#">Vulputate Pellentesque Mattis</a></li>
                            <li><a href="#">Tortor Parturient</a></li>
                            <li><a href="#">Ipsum Nibh</a></li>
                            <li><a href="#">Ridiculus Amet</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Porta Lorem</h4>
                        <div class="card-chart">
                            <div class="chart-container">
                                <canvas id="chart4" width="280" height="110"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer chart-bottom-legend" id="chart4-legend"></div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <?php include('_footer.php') ?>