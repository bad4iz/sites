/**
 * Created by bad4iz on 12.09.2016.
 */

jQuery(document).ready(function() {

    var status_new = false;
    // если уходит из фокуса
    $('input[type="text"]').focusout(function() {
        // берем соседний элемент количество кирпичей в поддоне
         var  quantity_per_pallet = parseInt( $(this).parents().siblings(".views-field.views-field-field-brick-pallet").text());
        // берем количество
        var this_quantity =  parseInt($(this).val());
        console.log("this: " + this_quantity + "количество в полете: " + quantity_per_pallet);
        // если есть колво в поддоне то
        var quantity;
        if (!!quantity_per_pallet){
            quantity = this_quantity / quantity_per_pallet;
            quantity = Math.ceil(quantity) * quantity_per_pallet;
            console.log("итого: " + quantity + "количество в полете: " + quantity_per_pallet);
             var qua = $(this).val(quantity);
        }
        //если изменилось количество то делаем кнопку моргающей
        if (this_quantity!=quantity){
            status_new = true;
            window.setInterval(function()
            {
                $("#edit-submit").toggleClass("btn-orange");
            },1000);

        }
        console.log("status_new: " + status_new );



    });


   /* //при уходе мышки из поля
    $('.views-field.views-field-edit-quantity').mouseleave(function(){
        console.log("проводим мышкой: ");
        // берем соседний элемент количество кирпичей в поддоне
         var  quantity_per_pallet = parseInt( $(this).siblings(".views-field.views-field-field-brick-pallet").text());
         // берем количество
         var quantity =  parseInt( $(this).children().children('input[type="text"]').val());
         // если есть колво в поддоне то
        if (!!quantity_per_pallet){
            quantity = quantity / quantity_per_pallet;
            quantity = Math.ceil(quantity) * quantity_per_pallet;
             var inp = $(this).children().children('input[type="text"]').val(quantity);
        }
    });*/

});

