
<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Compose Mail</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">Moltran</a></li>
                <li><a href="#">Mail</a></li>
                <li class="active">Compose Mail</li>
            </ol>
        </div>
    </div>

    <div class="row">

        <!-- Left sidebar -->
        <div class="col-md-4 col-lg-3">
            <a href="#inbox" onClick="load('content','inbox.php');" type="button" class="btn btn-danger waves-effect waves-light btn-block">Back to Inbox</a>
            <div class="panel panel-default p-0 m-t-20">
                <div class="panel-body p-0">
                    <div class="list-group mail-list">
                      <a href="#" class="list-group-item no-border active"><i class="fa fa-download m-r-5"></i>Inbox <b>(8)</b></a>
                      <a href="#" class="list-group-item no-border"><i class="fa fa-star-o m-r-5"></i>Starred</a>
                      <a href="#" class="list-group-item no-border"><i class="fa fa-file-text-o m-r-5"></i>Draft <b>(20)</b></a>
                      <a href="#" class="list-group-item no-border"><i class="fa fa-paper-plane-o m-r-5"></i>Sent Mail</a>
                      <a href="#" class="list-group-item no-border"><i class="fa fa-trash-o m-r-5"></i>Trash <b>(354)</b></a>
                  </div>
              </div>
          </div>
          <h3 class="panel-title m-t-40">Labels</h3>
          <div class="panel panel-default p-0 p-t-20 m-t-20">
            <div class="panel-body p-0">
                <div class="list-group no-border">
                  <a href="#" class="list-group-item no-border"><span class="fa fa-circle text-info pull-right"></span>Web App</a>
                  <a href="#" class="list-group-item no-border"><span class="fa fa-circle text-warning pull-right"></span>Project 1</a>
                  <a href="#" class="list-group-item no-border"><span class="fa fa-circle text-purple pull-right"></span>Project 2</a>
                  <a href="#" class="list-group-item no-border"><span class="fa fa-circle text-pink pull-right"></span>Friends</a>
                  <a href="#" class="list-group-item no-border"><span class="fa fa-circle text-success pull-right"></span>Family</a>
              </div>
          </div>
      </div>

  </div>
  <!-- End Left sidebar -->   

  <!-- Right Sidebar -->
  <div class="col-md-8 col-lg-9">
    <div class="row">
        <div class="col-lg-12">
            <div class="btn-toolbar" role="toolbar">
                <div class="pull-right">
                    <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="fa fa-floppy-o"></i></button>
                    <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="fa fa-trash-o"></i></button>
                    <button class="btn btn-purple waves-effect waves-light"> <span>Send</span> <i class="fa fa-send m-l-10"></i> </button>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default m-t-20">
        <div class="panel-body p-t-30">

            <form role="form">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="To">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Cc">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Bcc">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                    <textarea class="wysihtml5 form-control" placeholder="Message body" style="height: 200px"></textarea>
                </div>
            </form>
        </div> <!-- panel -body -->
    </div> <!-- panel -->
</div> <!-- End Rightsidebar -->

</div><!-- End row -->
</div> <!-- container -->
