// alert('tes');
$(function () {
  $('.jenjang4').css('display', 'none');
  $('.jenjang5').hide();
  $('.jenjang6').hide();
  $('.jenjang4-pengalaman').hide();
  $('.jenjang5-pengalaman').hide();
  $('.jenjang6-pengalaman').hide();

  $('input:radio[name="jenjang"]').change(function () {
    if (this.checked && this.value === 'Jenjang 4') {
      $('.jenjang4').css('display', 'block');
      $('.jenjang5').hide();
      $('.jenjang6').hide();
      $('.default').hide();

      $('.jenjang4-pengalaman').show();
      $('.jenjang5-pengalaman').hide();
      $('.jenjang6-pengalaman').hide();
    } else if (this.checked && this.value === 'Jenjang 5') {
      $('.jenjang5').show();
      $('.jenjang4').hide();
      $('.jenjang6').hide();
      $('.default').hide();

      $('.jenjang5-pengalaman').show();
      $('.jenjang4-pengalaman').hide();
      $('.jenjang6-pengalaman').hide();
    } else if (this.checked && this.value === 'Jenjang 6') {
      $('.jenjang6').show();
      $('.jenjang5').hide();
      $('.jenjang4').hide();
      $('.default').hide();

      $('.jenjang6-pengalaman').show();
      $('.jenjang5-pengalaman').hide();
      $('.jenjang4-pengalaman').hide();
    }
  });

  $;

  $('input:radio[name="jenjang4"]').change(function () {
    if (this.checked && this.value === 'sma') {
      $('.jenjang4-pengalaman').show();
    }
  });
});
