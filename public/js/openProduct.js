$(document).ready(function(){
    $(document).on('click', '.card__title',function(event){
        var productId = event.target.dataset.id;

        var url = 'product?id_product=' + productId;

        window.location.href = url;
    });
});
