
<body>
    
        <div class="row">
          
            <div class="col-md-12">
              <div class="box">
                
                <div id="bootstrapModalFullCalendar"></div>
            </div>
          </div>
        </div>

    <div id="fullCalModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                    <h4 id="modalTitle" class="modal-title"></h4>
                </div>
                <div class="modal-body">
                <!-- <div class="form-group">
                  <label>Text</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div> -->
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea id="modalBody" class="form-control" readonly=""></textarea>
                </div>
              </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!-- <a class="btn btn-primary" id="eventUrl" target="_blank">Event Page</a> -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    
    

    <script>
        $(document).ready(function() {
            $('#bootstrapModalFullCalendar').fullCalendar({
                 header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week: 'week',
        day: 'day'
      },
                eventClick:  function(event, jsEvent, view) {
                    $('#modalTitle').html(event.title);
                    $('#modalBody').html(event.description);
                    $('#eventUrl').attr('href',event.url);
                    $('#fullCalModal').modal();
                    return false;
                },
                events: <?php echo $calendar;?>
            });
        });
    </script>