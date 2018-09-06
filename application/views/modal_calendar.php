
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-title"></h4>
              </div>
                <div class="modal-body">
                  <table class="table">
                    <tr>
                      <td width="20%">Judul </td>
                      <td>:&nbsp;</td>
                      <td id="modalTitle"></td>
                    </tr>
                    <tr>
                      <td width="20%">Waktu </td>
                      <td>:&nbsp;</td>
                      <td id="modalWaktu"></td>
                    </tr>
                    <tr>
                      <td width="20%">Deskripsi </td>
                      <td>:&nbsp;</td>
                      <td><textarea id="modalBody" class="form-control" readonly=""></textarea></td>
                    </tr>
                    
                  </table>
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
                    document.getElementById("modalTitle").value = event.title;
                    $('#modalTitle').html(event.title);
                    $('#modal-title').html(event.tanggal);
                    $('#modalBody').html(event.description);
                    $('#modalWaktu').html(event.waktu);
                    $('#eventUrl').attr('href',event.url);
                    $('#fullCalModal').modal();
                    return false;
                },
                events: <?php echo $calendar;?>
            });
        });
    </script>