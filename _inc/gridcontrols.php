<div id="wine-filters" class="controls-wrap collapse navbar-collapse">
   
    <div class="controls container">
        <form class="controls" id="Filters">
            

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                
                <!-- PANEL 1 ------------------------------------------------------------------------>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Style:</a></h4>
                    </div><!-- end panel-heading 1-->
                    
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
                        </div><!-- end panel 1 body-->
                    </div><!-- end collapse 1-->
                </div><!-- end panel 1 -->
                
                <!-- PANEL 2 ------------------------------------------------------------------------>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Brand:</a></h4>
                    </div><!-- end panel-heading 2-->
                    
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <fieldset class="brand filter-group checkboxes">
                                <div class="checkbox">
                                    <input type="checkbox" value=".dev" />
                                    <label>Devonian Coast Wineries</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" value=".jost" />
                                    <label>Jost Vineyards</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" value=".gasp" />
                                    <label>Gaspereau Vineyards</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" value=".merc" />
                                    <label>Mercator Vineyards</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" value=".dcw" />
                                    <label>DCW International Wines</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" value=".banker" />
                                    <label>Grand Banker Wine Cellars</label>
                                </div>
                            </fieldset>
                        </div><!-- end panel 2 body-->
                    </div><!-- end collapse 2-->
                </div><!-- end panel 2 -->

                 <!-- PANEL 3 ------------------------------------------------------------------------>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Region:</a></h4>
                    </div><!-- end panel-heading 3 -->
                    
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <fieldset class="region filter-group radio">
                                <button class="filter" data-filter=".int" /><span>International</span>
                                <label>International</label>
                                </button>
                                <button class="filter" data-filter=".can" /><span>Canadian</span>
                                <label>Canadian</label>
                                </button>
                                <button class="filter" data-filter=".ns" /><span>Nova Scotia Only</span>
                                <label>Nova Scotia Only</label>
                                </button>
                            </fieldset>
                        </div><!-- end panel 3 body -->
                    </div><!-- end collapse 3-->
                </div><!-- end panel 3 -->
            
            <!-- PANEL 4 ------------------------------------------------------------------------>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Show:</a></h4>
                </div><!-- end panel-heading 4-->
                
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                        <fieldset class="show filter-group">
                            <button class="filter" data-filter="all" />All</button>
                            <button class="filter" data-filter=".feat" />Featured</button>
                            <button class="filter" data-filter=".award" />Award Winning</button>
                        </fieldset>
                    </div><!-- end panel-body 4-->
                </div><!-- end collapse 4-->
            </div><!-- end panel 4-->

            <!-- PANEL 4 ------------------------------------------------------------------------>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Sort:</a></h4>
                </div><!-- end panel-heading 5-->
                
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="panel-body">
                        <fieldset class="sort-name filter-group">
                            <button class="sort-btn" data-sort="myorder:asc" />A-Z</button>
                            <button class="sort-btn" data-sort="myorder:desc" />Z-A</button>
                        </fieldset><!-- end sort by name-->
                <fieldset class="sort-price filter-group">
                        <button class="sort" data-sort="price:asc" />$-$$$</button>
                            <button class="sort" data-sort="price:desc" />$$$-$</button>
</fieldset><!-- end sort by price-->
                    </div><!-- end panel-body 5-->
                </div><!-- end collapse 5-->
            </div><!-- end panel 5-->
</div><!-- end panel-group-->


            <button id="Reset" class="btn-show-all"><h4>RESET</h4></button>
        </form>
    </div>
    <!--end container-->
</div>
<!-- end controls wrapper-->