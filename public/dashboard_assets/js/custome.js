// Datatable
if ($('#admin-table').length > 0) {

    $('#admin-table').DataTable({
        responsive: true,
        ordering: false
    });

}


//slug create

$('.item-name').on('keyup', function () {

    let $this = $(this);

    let str = $this.val().replace(/[0-9`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '-').replace(/ /g, '-');

    $('#slug').val(str);

});


// Tagify
if ($('.tags').length > 0) {
    $('.tags').tagify();
}
