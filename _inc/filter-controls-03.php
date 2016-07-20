<div class="desktop-filter-bar-wrap">
    <div class="container">
        <h1>Jost <span class="desktop-only">Vineyards</span> Wines</h1>
        <button class="filter-toggle collapsed" data-toggle="collapse" data-target="#wine-filters" aria-expanded="false">FILTER</button>
    </div>
    <!-- end container-->
</div>
<!--end filter bar wrap-->

<!-- FILTER CONTROLS ------------------------------>
<div id="wine-filters" class="controls-wrap collapse navbar-collapse">
    <div class="container">
        <form class="controls" id="Filters">
            <button id="Reset" class="btn-show-all">
                <h4>RESET</h4></button>
            <fieldset class="filter-group search">
                <input type="text" placeholder="SEARCH PRODUCTS ..." />
            </fieldset>

            <div class="panel-group accordion" id="accordion">


                <!-- STYLE PANEL ------------------------------------------------------------------------>
                <div class="panel style-panel">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-target="#collapseOne" href="#">Style:</a></h4>
                    </div>
                    <!-- end panel-heading 1-->

                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <fieldset class="style filter-group checkboxes">
                                <div class="checkbox">
                                    <input type="checkbox" value=".red" />
                                    <label>Red</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" value=".white" />
                                    <label>White</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" value=".rose" />
                                    <label>Rosé</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" value=".specialty" />
                                    <label>Specialty</label>
                                </div>
                            </fieldset>
                        </div>
                        <!-- end panel 1 body-->
                    </div>
                    <!-- end collapse 1-->
                </div>
                <!-- end STYLE panel -->


                <!-- SORT panel ------------------------------------------------------------------------>
                <div class="panel sort-panel">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title"><a href="#" class="collapsed" role="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Sort:</a></h4>
                    </div>
                    <!-- end panel-heading 4-->

                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">

                            <fieldset class="filter-group radio">
                                <ul>
                                    <li>
                                        <input type="radio" class="sort" data-sort="myorder:asc" />
                                        <label>Featured</label>
                                        <div class="circle"></div>
                                    </li>
                                    <li>
                                        <input type="radio" class="sort" data-sort="price:desc" />
                                        <label>Price: High - Low</label>
                                        <div class="circle"></div>
                                    </li>
                                    <li>
                                        <input type="radio" class="sort" data-sort="price:asc" />
                                        <label>Price: Low - High</label>
                                        <div class="circle"></div>
                                    </li>
                                    <li>
                                        <input type="radio" class="sort" data-sort="name:asc" />
                                        <label>A-Z</label>
                                        <div class="circle"></div>
                                    </li>
                                    <li>
                                        <input type="radio" class="sort" data-sort="name:desc" />
                                        <label>Z-A</label>
                                        <div class="circle"></div>
                                    </li>
                                </ul>
                            </fieldset>
                        </div>
                        <!-- end panel-body 4-->
                    </div>
                    <!-- end collapse 4-->
                </div>
                <!-- end SORT panel -->
            </div>
            <!-- end panel-group-->
        </form>
        <!--end 'form'/div container-->
    </div>
    <!--end container-->
</div>
<!-- end controls wrapper-->