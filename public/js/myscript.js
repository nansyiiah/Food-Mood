$(document).on('click', '#btn-edit', function(){
    $('.modal-body #id_menuedit').val($(this).data('id'));
    $('.modal-body #nama_edit').val($(this).data('nama'));
    $('.modal-body #deskripsi_edit').val($(this).data('deskripsi'));
})

// $(document).on('click', '#btn-detail', function(){
//     $('.modal-header #exampleModalLongTitle').val($(this).data('id'));
//     $('.modal-header #exampleModalLongTitle').val($(this).data('nama'));
//     $('.modal-header #exampleModalLongTitle').val($(this).data('deskripsi'));
// })

// $('#btn-detail').on('click', function(){
//     $('#modalDetail').show();
// })

$(document).on('click', '.btn-detail', function(){
    $('.modal-header #namamenuu').val($(this).data('nama'));
    $('.modal-body #exampleModalLongTitle').val($(this).data('nama'));
    $('.modal-header #exampleModalLongTitle').val($(this).data('deskripsi'));
})