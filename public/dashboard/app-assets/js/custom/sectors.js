$(document).ready(function() {
  var last_input;
    // Setup - add a text input to each footer cell
    $('#userlist thead tr').clone(true).appendTo( '#userlist thead' );
    $('#userlist thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        last_input = i;

        $(this).html( '<input type="text" class="input'+i+'" placeholder="Search '+title+'" />' );

        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ){
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        });
    });
    var last_before = last_input-1;

    $('.input'+last_input).hide();
    $('.input'+last_before).hide();

   
    var table = $('#userlist').DataTable( {
        orderCellsTop: true,
        fixedHeader: true
    });

    $(document).on('click', '.updateStatus', function() {
        swal({
            title: "Are you sure?",
            text: "Do you want to update status for this user",
            icon: "warning",
            buttons: true,
            warningMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                $('.ajaxloader').show();
                    var user_id = $(this).attr('data-id');
                    if($('.updatechecked'+user_id).prop('checked')){
                        var index = $(this).attr('data-index');
                        var data = {"user_id":user_id, "status": 'deactive'};
                        $.ajaxSetup({
                            headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: 'updateuserstatus',
                            type:'POST',
                            data: data,
                            datatype: 'JSON',
                            success:function(data){
                                if(data.status == 'success'){
                                    $.ajax({
                                        url: '/admin/getuser',
                                        type:'GET',
                                        success: function () {
                                            var table = $('#userlist').DataTable();
                                            var statusId = $(".status"+user_id).parent('td');
                                            var updatestatusId = $(".updatechecked"+user_id).parent('td');
                                            table.cell( statusId ).data('<span class="badge badge-danger status'+user_id+'">deactive</span>').draw();
                                            table.cell( updatestatusId ).data('<input type="checkbox" class="form-check-input-switchery-primary updatechecked'+user_id+'" data-fouc="" data-switchery="true" style="display: none;"><span data-index="'+index+'" data-id="'+user_id+'" data-color="warning" class="updateStatus switchery switchery-default" style="background-color: rgb(255, 255, 255); border-color: rgb(223, 223, 223); box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>').draw();
                                            $('.ajaxloader').hide();  
                                        }
                                    });
                                }
                            },		
                            error: function() {
                                $('.ajaxloader').hide();
                            }
                        }) ;	

                    }
                    else{
                        var index = $(this).attr('data-index');
                        var data = {"user_id":user_id, "status": 'active'};
                        $.ajaxSetup({
                            headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: 'updateuserstatus',
                            type:'POST',
                            data: data,
                            datatype: 'JSON',
                            success:function(data){
                                if(data.status == 'success'){
                                    $.ajax({
                                        url: '/admin/getuser',
                                        type:'GET',
                                        success: function () {
                                            var table = $('#userlist').DataTable();
                                            var statusId = $(".status"+user_id).parent('td');
                                            var updatestatusId = $(".updatechecked"+user_id).parent('td');
                                            table.cell( statusId ).data('<span class="badge badge-success status'+user_id+'">active</span>').draw();
                                            table.cell( updatestatusId ).data('<input type="checkbox" class="form-check-input-switchery-primary updatechecked'+user_id+'" checked="" data-fouc="" data-switchery="true" style="display: none;"><span data-index="'+index+'" data-id="'+user_id+'" data-color="warning" class="updateStatus switchery switchery-default" style="background-color: rgb(252 207 23); border-color: rgb(252 207 23); box-shadow: rgb(252 207 23) 0px 0px 0px 10px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 18px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>').draw();
                                            $('.ajaxloader').hide();
                                        }
                                    })
                                }
                            },
                            error: function() {
                                $('.ajaxloader').hide();
                            }
                        }) ;
                    }
            }
          });
    });


} );