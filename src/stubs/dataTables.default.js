/* Set the defaults for DataTables initialisation */
$.extend(true, $.fn.dataTable.defaults, {
    dom:
        "<'row'<'col-md-12'B>>" +
        "<'row mt-2'<'col-sm-12 col-md-6'i><'col-sm-12 col-md-6'f>>" +
        "<'row'<'col-sm-12'tr>>" +
        "<'row mt-2'<'col-sm-12 col-md-5'l><'col-sm-12 col-md-7'p>>",
    searchDelay: 1500,
    deferRender: true,
    autoWidth: false, // disable fixed width and enable fluid table
    pageLength: 25, // default records per page
    buttons: [],
    pagingType: 'full_numbers'
});

$.fn.dataTable.ext.errMode = 'none';
