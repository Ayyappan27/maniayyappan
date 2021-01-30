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
    } );
} );