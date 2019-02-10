
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Checkboxes and Radios</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Moltran</a></li>
                    <li><a href="#">Elements</a></li>
                    <li class="active">Checkboxes and Radios</li>
                </ol>
            </div>
        </div>

        <!-- CHECKBOX -->

        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-border panel-primary">
                    <div class="panel-heading"> 
                        <h3 class="panel-title">Basic</h3> 
                    </div> 
                    <div class="panel-body"> 
                        <p>
                            Supports bootstrap brand colors: <code>.checkbox-primary</code>, <code>.checkbox-info</code> etc.
                        </p>
                        <div class="checkbox">
                            <input id="checkbox1" type="checkbox">
                            <label for="checkbox1">
                                Default
                            </label>
                        </div>
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox2" type="checkbox" checked>
                            <label for="checkbox2">
                                Primary
                            </label>
                        </div>
                        <div class="checkbox checkbox-success">
                            <input id="checkbox3" type="checkbox">
                            <label for="checkbox3">
                                Success
                            </label>
                        </div>
                        <div class="checkbox checkbox-info">
                            <input id="checkbox4" type="checkbox">
                            <label for="checkbox4">
                                Info
                            </label>
                        </div>
                        <div class="checkbox checkbox-warning">
                            <input id="checkbox5" type="checkbox" checked>
                            <label for="checkbox5">
                                Warning
                            </label>
                        </div>
                        <div class="checkbox checkbox-danger">
                            <input id="checkbox6" type="checkbox" checked>
                            <label for="checkbox6">
                                Check me out
                            </label>
                        </div>
                        <p>Checkboxes without label text <code>.checkbox-single</code></p>
                        <div class="checkbox checkbox-single">
                            <input type="checkbox" id="singleCheckbox1" value="option1" aria-label="Single checkbox One">
                            <label></label>
                        </div>
                        <div class="checkbox checkbox-primary checkbox-single">
                            <input type="checkbox" id="singleCheckbox2" value="option2" checked aria-label="Single checkbox Two">
                            <label></label>
                        </div>
                        <p>Inline checkboxes</p>
                        <div class="checkbox checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1">
                            <label for="inlineCheckbox1"> Inline One </label>
                        </div>
                        <div class="checkbox checkbox-success checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                            <label for="inlineCheckbox2"> Inline Two </label>
                        </div>
                        <div class="checkbox checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option1">
                            <label for="inlineCheckbox3"> Inline Three </label>
                        </div>

                    </div> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-border panel-primary">
                    <div class="panel-heading"> 
                        <h3 class="panel-title">Circled</h3> 
                    </div> 
                    <div class="panel-body"> 
                        <p>
                            <code>.checkbox-circle</code> for roundness.
                        </p>
                        <div class="checkbox checkbox-circle">
                            <input id="checkbox7" type="checkbox">
                            <label for="checkbox7">
                                Simply Rounded
                            </label>
                        </div>
                        <div class="checkbox checkbox-info checkbox-circle">
                            <input id="checkbox8" type="checkbox" checked>
                            <label for="checkbox8">
                                Info
                            </label>
                        </div>
                        <div class="checkbox checkbox-primary checkbox-circle">
                            <input id="checkbox-9" type="checkbox">
                            <label for="checkbox-9">
                                Primary
                            </label>
                        </div>
                        <div class="checkbox checkbox-success checkbox-circle">
                            <input id="checkbox-10" type="checkbox" checked>
                            <label for="checkbox-10">
                                Success
                            </label>
                        </div>
                        <div class="checkbox checkbox-warning checkbox-circle">
                            <input id="checkbox-11" type="checkbox">
                            <label for="checkbox-11">
                                Warning
                            </label>
                        </div>
                        <div class="checkbox checkbox-danger checkbox-circle">
                            <input id="checkbox-12" type="checkbox" checked>
                            <label for="checkbox-12">
                                Danger
                            </label>
                        </div>
                    </div> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-border panel-primary">
                    <div class="panel-heading"> 
                        <h3 class="panel-title">Disabled</h3> 
                    </div> 
                    <div class="panel-body"> 
                        <p>
                            Disabled state also supported.
                        </p>
                        <div class="checkbox">
                            <input id="checkbox9" type="checkbox" disabled>
                            <label for="checkbox9">
                                Can't check this
                            </label>
                        </div>
                        <div class="checkbox checkbox-success">
                            <input id="checkbox10" type="checkbox" disabled checked>
                            <label for="checkbox10">
                                This too
                            </label>
                        </div>
                        <div class="checkbox checkbox-warning checkbox-circle">
                            <input id="checkbox11" type="checkbox" disabled checked>
                            <label for="checkbox11">
                                And this
                            </label>
                        </div>
                        
                    </div> 
                </div>
            </div>
        </div> <!-- end row -->


        <!-- RADIOS -->


        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-border panel-primary">
                    <div class="panel-heading"> 
                        <h3 class="panel-title">Basic</h3> 
                    </div> 
                    <div class="panel-body"> 
                        <p>
                            Supports bootstrap brand colors: <code>.radio-primary</code>, <code>.radio-danger</code> etc.
                        </p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="radio">
                                    <input type="radio" name="radio1" id="radio1" value="option1" checked>
                                    <label for="radio1">
                                        Small
                                    </label>
                                </div>
                                <div class="radio">
                                    <input type="radio" name="radio1" id="radio2" value="option2">
                                    <label for="radio2">
                                        Big
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="radio radio-danger">
                                    <input type="radio" name="radio2" id="radio3" value="option1">
                                    <label for="radio3">
                                        Next
                                    </label>
                                </div>
                                <div class="radio radio-danger">
                                    <input type="radio" name="radio2" id="radio4" value="option2" checked>
                                    <label for="radio4">
                                        One
                                    </label>
                                </div>
                            </div>
                        </div>
                        <p>Radios without label text <code>.radio-single</code></p>
                        <div class="radio radio-single">
                            <input type="radio" id="singleRadio1" value="option1" name="radioSingle1" aria-label="Single radio One">
                            <label></label>
                        </div>
                        <div class="radio radio-success radio-single">
                            <input type="radio" id="singleRadio2" value="option2" name="radioSingle1" checked aria-label="Single radio Two">
                            <label></label>
                        </div>
                        <p>Inline radios</p>
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked>
                            <label for="inlineRadio1"> Inline One </label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                            <label for="inlineRadio2"> Inline Two </label>
                        </div>
                    </div> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-border panel-primary">
                    <div class="panel-heading"> 
                        <h3 class="panel-title">Disabled</h3> 
                    </div> 
                    <div class="panel-body"> 
                        <p>
                            Disabled state also supported.
                        </p>
                        <div class="radio radio-danger">
                            <input type="radio" name="radio3" id="radio5" value="option1" disabled>
                            <label for="radio5">
                                Next
                            </label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="radio3" id="radio6" value="option2" checked disabled>
                            <label for="radio6">
                                One
                            </label>
                        </div>

                    </div> 
                </div>
            </div>

        </div> <!-- end row -->

    </div> <!-- container -->
    