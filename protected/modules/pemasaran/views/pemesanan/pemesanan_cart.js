$(document).on('click', ".addCart", function () {
  var part_atr = $('#part');
  var qty_atr = $('#qty');
  if((part_atr.val()) && (qty_atr.val())){
    var id_part = part_atr.val();
    var qty = qty_atr.val();
    //
    $.ajax({
        type: 'POST',
        dataType: 'JSON',
        data: {
            id_part: id_part,
            qty: qty,
        },
        url: window.location.origin + '/pemasaran/pemesanan/addCart',
        complete:  function(response){
          console.log(response);
    //         // btnAdd.prop('disabled', true);//komen dulu karena pengen bisa add tindakan lebih dari satu kalii
    //         // setTimeout(function(){}, 1000);
    //         // total += parseFloat(tarif);// * qty;
    //         // $('.sum-total').text(total);
              $.fn.yiiGridView.update('cart-grid', {
                    complete: function(jqXHR, status) {
                        console.log(status);
                    }
                });
              // $('#cart-grid').yiiGridView('update');
        }
    });
    // alert("oke");
  }else{
    alert("Produk harus dipilih & Quantity tidak boleh kosong");
  }
});

function removecartitem(id,id_part)
{
    $.ajax({
        type: 'POST',
        dataType: 'JSON',
        data: {
            id: id,
            id_part: id_part
        },
        url: window.location.origin + '/pemasaran/pemesanan/removeCart',
        success:  function(response){
            $.fn.yiiGridView.update('cart-grid', {
                    complete: function(jqXHR, status) {
                        console.log(status);
                    }
            });
        }
    });
}
