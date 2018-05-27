
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./bootstrap-select');

//var select = require('bootstrap-select');
var dataTables = require('datatables');
//require('./datatables/js/jquery.dataTables.js');

//window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));

//const app = new Vue({
//    el: '#app'
//});

//var sidebar = document.getElementById("#menu-toggle").click(alert("oi"));

$("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$(".table").dataTable({
    columnDefs: [
        {targets: 0, orderable: false, searchable: false}
    ],
    "language": {
            "lengthMenu": "Mostrando _MENU_ registros por página",
            "zeroRecords": "Nada foi encontrado :(",
            "info": "Página _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhum registro encontrado :(",
            "infoFiltered": "(Filtrados de _MAX_ registros)",
            "sSearch":        "<i class='fa fa-search'></i>",
            "sLoadingRecords": "Carregando...",
            "oPaginate": {
            "sFirst":    "<i class='fa fa-angle-double-left'></i>",
            "sLast":    "<i class='fa fa-angle-double-right'></i>",
            "sNext":    "<i class='fa fa-angle-right'></i>",
            "sPrevious": "<i class='fa fa-angle-left'></i>"
        },
        }
});

/**
 * ajax
 */

$(document).on("click", ".select-add", function(){
//    alert($(this).siblings(".value").text().replace(/"/g,""));
    $.ajax({
        url: '/categoria-produtos',
        data: {
           name: $(this).siblings(".value").text().replace(/"/g,"")
//           _token: $('meta[name="csrf-token"]').attr('content')
        },
        error: function(response, ajaxOptions, thrownError) {
            console.log( 'StringError: ' + ajaxOptions + '\n\nthrownError: ' + JSON.stringify(thrownError) + '\n\nResponse: ' + JSON.stringify(response));
        },
        success: function(data) {
            $("#category").append('<option value="'+data.id+'" selected="">'+data.name+'</option>');
            $("#category").selectpicker("refresh");
        },
        type: 'POST'
     });
});