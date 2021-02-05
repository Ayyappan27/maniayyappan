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

   


} );