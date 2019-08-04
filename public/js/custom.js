$(document).ready(function () {
    'use strict'

    switch (pageName) {
        case 'formInput':
            $("#side-index").addClass("active");
            break;
        case 'listData':
            $("#list-index").addClass("active");
            break;
    }

    $('#dataTable').DataTable();
});
