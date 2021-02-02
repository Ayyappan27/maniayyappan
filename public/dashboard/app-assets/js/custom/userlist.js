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
    $('.input'+last_input).hide();

   
    var table = $('#userlist').DataTable( {
        orderCellsTop: true,
        fixedHeader: true
    });

    $('.updateStatus').on('click', function() {
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
                    if($(".updateStatus").prop('checked') == true){

                        var user_id = $(this).attr('data-id');
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
                                    $('.ajaxloader').hide();
                                    // location.reload();
                                    $.ajax({
                                        url: '/admin/getuser',
                                        type:'GET',
                                        success: function (data) {
                                            $('.ajaxloader').hide();
                                            location.reload();
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
                        var user_id = $(this).attr('data-id');
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
                                    // location.reload();
                                    $.ajax({
                                        url: '/admin/getuser',
                                        type:'GET',
                                        success: function (data) {
                                            $('.ajaxloader').hide();
                                            location.reload();
                                        }
                                    });
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