



$('.slider-for').slick({
 slidesToShow: 1,
 slidesToScroll: 1,
 arrows: false,
 fade: true,
 asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
 slidesToShow: 3,
 slidesToScroll: 1,
 asNavFor: '.slider-for',
 dots: true,
 focusOnSelect: true
});

$('a[data-slide]').click(function(e) {
 e.preventDefault();
 var slideno = $(this).data('slide');
 $('.slider-nav').slick('slickGoTo', slideno - 1);
});






function isEmail(email) {
  var EmailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return EmailRegex.test(email);
}




$('#bultenBtn').click(function(e) {
  var bultenInput = $('#bultenInput').val();

  console.log();

  if (isEmail(bultenInput)) {
    //Ajax Kodları buraya
    alert('Bültene başarıyla kayıt olundu. Teşekkür ederiz.')
  }else {

    $('#bultenInput').val('');
    $('#bultenInput').attr("placeholder","GEÇERSİZ E-POSTA ADRESİ");
  }


 e.preventDefault();

});







$('#onerBtn').click(function(e) {
  var onerInput = $('#onerInput').val();

  console.log();

  if (isEmail(onerInput)) {
    //Ajax Kodları buraya
    alert('Bültene başarıyla kayıt olundu. Teşekkür ederiz.')
  }else {

    $('#onerInput').val('');
    $('#onerInput').attr("placeholder","GEÇERSİZ E-POSTA ADRESİ");
  }


 e.preventDefault();

});
