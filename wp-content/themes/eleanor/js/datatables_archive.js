/**
*
* Let's make the strategies archive look like a sortable table
*
* https://datatables.net/
*
 */

 jQuery(document).ready( function () {
    jQuery('#strategy-archive-table').DataTable( {
      'order': [[1, 'asc']] 
    });
} );
