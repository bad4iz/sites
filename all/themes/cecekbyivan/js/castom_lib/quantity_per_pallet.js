/**
 * Created by User on 18.08.2016.
 */

jQuery(document).ready(function() {
    //            $(function() {
    //
    //                var text = $('input[type="text"]').val();
    //                alert(text);
    //
    //            });
    $('input[type="text"]').focusout(function() {
       var this_id = $(this).parents().parents().parents().parents().parents().parents().parents().parents().attr('id');
        var quantity =  $(' #'+this_id+' input[type="text"]').val();

            // console.log("количество первое: " + quantity + " id: " + this_id );

            var quantity_per_pallet = parseInt($('#'+this_id+' .field.field-name-field-brick-pallet .field-items .field-item.even').text());
        // console.log("quantity_per_pallet: " + !!quantity_per_pallet);
        if (!!quantity_per_pallet){
            quantity = quantity / quantity_per_pallet;
            quantity = Math.ceil(quantity) * quantity_per_pallet;
            var quantity = $(' #'+this_id+' input[type="text"]').val(quantity);
            // console.log("ади поля: " + this_id +",  количество: " + quantity  +",  количество кирпича в поллете: " + quantity_per_pallet);
            // console.log($(this).parents().parents().parents().parents().parents().parents().parents().parents().attr('id'));

        }
    });

    $('.form-item.form-type-textfield.form-item-quantity').mouseleave(function(){
        var this_id = $(this).parents().parents().parents().parents().parents().parents().parents().attr('id');
        var quantity =  $(' #'+this_id+' input[type="text"]').val();

        // console.log("количество первое: " + quantity + " id: " + this_id );

        var quantity_per_pallet = parseInt($('#'+this_id+' .field.field-name-field-brick-pallet .field-items .field-item.even').text());
        // console.log("quantity_per_pallet: " + !!quantity_per_pallet);
        if (!!quantity_per_pallet){
            quantity = quantity / quantity_per_pallet;
            quantity = Math.ceil(quantity) * quantity_per_pallet;
            var quantity = $(' #'+this_id+' input[type="text"]').val(quantity);
            // console.log("ади поля: " + this_id +",  количество: " + quantity  +",  количество кирпича в поллете: " + quantity_per_pallet);
            // console.log($(this).parents().parents().parents().parents().parents().parents().parents().parents().attr('id'));

        }
    });











});

