$(document).ready(function(){
    //AGREGAR CLASE ACTIVE AL PRIMER ENLACE
    $('.marca_lista .marca_item[marca="all"]').addClass('ct_item-active');
    //FILTRAR PRODUCTOS//
    $('.marca_item').click(function(){
        var marProducto=$(this).attr('marca');
        console.log(marProducto);

        //AGREGAR CLASE ACTIVE AL ENLACE SELEECIONADO//
        $('.marca_item').removeClass('ct._item-active');
        $(this).addClass('ct._item-active');

        //OCULTAR PRODUCTOS//
        $('.producto-item').css('trasform','scale(0)');
        function hideProducto(){
            $('.producto-item').hide();
        } setTimeout(hideProducto,400);

        //MOSTRAR PRODUCTOS//
        function showProducto(){
            $('.producto-item[marca="'+marProducto+'"]').show();
            $('.producto-item[marca="'+marProducto+'"]').css('transform','scale(1)');
        } setTimeout(showProducto,400);
    });
    //MOSTRAR TODOS LOS PRODUCTOS//
    $('.marca_item[marca="all"]').click(function(){
        function showAll(){
            $('.producto-item').show()
            $('.producto-item')-css('transform','scale(1)');
        } setTimeout(showAll,400);
    });
})