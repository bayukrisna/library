   <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.css" type="text/css" rel="stylesheet" />
<div class="row">
  <a href="" id="modal-default2" class="btn btn-default" data-toggle="modal" data-target="#modal-default">modal</a>
<div id="eventContent" title="Event Details" style="display:none;">
    Start: <span id="startTime"></span><br>
    End: <span id="endTime"></span><br><br>
    <p id="eventInfo"></p>
    <p><strong><a id="eventLink" href="" target="_blank">Read More</a></strong></p>
</div>
       
	<div class="col-md-6" style="display: none">
	<div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Tambah Event</h3>
            </div>
            <div class="box-body">
              <!-- Color Picker -->
              <div class="form-group">
                <label>Title:</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>Start:</label>
                <input type="datetime-local" class="form-control">
              </div>
              <div class="form-group">
                <label>End:</label>
                <input type="datetime-local" class="form-control">
              </div>
              <!-- /.form group -->

              <!-- Color Picker -->
              <div class="form-group">
                <label>Color</label>

                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control" value="#3da1cc">

                  <div class="input-group-addon">
                    <i></i>
                  </div>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- time Picker -->
            </div>
            <div class="box-footer">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        
              </div>
<div class="col-md-12">
          <div class="box box-primary">
          	
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        
</div>
<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
