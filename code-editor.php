
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Code Editors</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">Moltran</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">Code Editors</li>
            </ol>
        </div>
    </div>

    <div class="row">
        
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">XML/HTML Mode</h3>
                    <small>The XML mode supports two configuration parameters <code>htmlMode</code> and <code>alignCDATA</code>. To learn more visit <a target="_blank" href="http://codemirror.net/mode/xml/index.html">here</a>. To view more languages visit <a href="http://codemirror.net/mode/index.html" target="_blank">here</a></small>
                </div>
                <div class="panel-body code-edit-wrap">
                 
                    <textarea id="code" name="code">
                        &lt;html style="color: green"&gt;
                        &lt;!-- this is a comment --&gt;
                        &lt;head&gt;
                        &lt;title&gt;HTML Example&lt;/title&gt;
                        &lt;/head&gt;
                        &lt;body&gt;
                        The indentation tries to be &lt;em&gt;somewhat &amp;quot;do what
                        I mean&amp;quot;&lt;/em&gt;... but might not match your style.
                        &lt;/body&gt;
                        &lt;/html&gt;
                    </textarea>   
                    

                </div>
            </div>
        </div>
        
        

    </div> <!-- End row -->


    <div class="row">
        
        <div class="col-sm-12">
            <div class="panel panel-inverse panel-color">
                <div class="panel-heading">
                    <h3 class="panel-title">Code Editor Theme</h3>
                    <small class="text-white">The code editor comes with different themes such as below. You can view more theme demos from the CodeMirror site by going here</small>
                </div>
                <div class="panel-body code-edit-wrap">
                    <textarea id="code2" name="code">
                        function findSequence(goal) {
                        function find(start, history) {
                        if (start == goal)
                        return history;
                        else if (start > goal)
                        return null;
                        else
                        return find(start + 5, "(" + history + " + 5)") ||
                        find(start * 3, "(" + history + " * 3)");
                    }
                    return find(1, "1");
                }
            </textarea>    

        </div>
    </div>
</div>



</div> <!-- End row -->

<div class="row">
    
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">AutoFormatting Of Code</h3>
                <small>Select a piece of code and click one of the links below to apply automatic formatting to the selected text or comment/uncomment the selected text. Note that the formatting behavior depends on the current block's mode. </small>
                <div class="m-t-10"></div>
                <button class="btn btn-primary waves-effect waves-light btn-sm m-r-5 autoformat">Autoformat Selected</button>
                <button class="btn btn-primary waves-effect waves-light btn-sm m-r-5 comment">Comment Selected</button>
                <button class="btn btn-primary waves-effect waves-light btn-sm uncomment">Uncommment Selected</button>
            </div><!-- panel-heading -->
            <div class="panel-body code-edit-wrap">
                <textarea id="code3" name="code"><script> function (s,e){ for(var i=0; i < 1; i++) test("test();a=1");} </script>
                    <script>
                        function test(c){  for (var i = 0; i < 10; i++){              process("a.b();c = null;", 300);}
                    }
                </script>
                <table><tr><td>test 1</td></tr><tr><td>test 2</td></tr></table>
                <script> function test() { return 1;} </script>
                <style> .test { font-size: medium; font-family: monospace; }
            </style></textarea>    
        </div><!-- panel-body -->
    </div><!-- panel -->
</div>



</div> <!-- End row -->


</div> <!-- container -->
