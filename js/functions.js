function activateTheme(themeName) {
  $('#themeLink').attr('href', `css/themes/${themeName}.css`);
}

$(document).ready(function() {
  activateTheme(localStorage.getItem('theme') || 'default');
  $(".loader").fadeOut(800);
});

// Sweet alerts toast mixin
const toast = Swal.mixin({
  toast: true,
  position: 'bottom-end',
  customClass: 'swal-custom',
  showConfirmButton: false,
  timer: 2000,
  timerProgressBar: true
});

// Theme button
$('.btn-theme').click( async function() {
  const { value: theme } = await Swal.fire({
      title: 'Select a Theme',
      input: 'select',
      customClass: 'swal-custom',
      inputOptions: {
          default: 'Default',
          red: 'Red',
          green: 'Green',
          purple: 'Purple',
          orange: 'Orange',
          yellow: 'Yellow',
          pink: 'Pink'
      },
      inputPlaceholder: 'Select a Theme',
      showCancelButton: true,
      confirmButtonColor: '#38b000',
      cancelButtonColor: '#d62828'
  });
  if (theme) {
      activateTheme(theme);
      localStorage.setItem('theme', theme);
  }
});

// Copy IP button
$('.btn-ip').click(function(e) {
  var text = $(this).text();
  if (navigator.clipboard) {
      navigator.clipboard.writeText(text).then(() => {
          toast.fire({
              icon: 'success',
              title: 'Copied to Clipboard!'
          });
          var icon = $(this).find('.arrow');
          icon.removeClass('fa-solid fa-arrow-right').addClass('fa-solid fa-check');
          setTimeout(() => {
              icon.removeClass('fa-solid fa-check').addClass('fa-solid fa-arrow-right'); 
          }, 800);
      });
  } else {
      toast.fire({
          icon: 'error',
          title: 'Browser not compatible'
      });
  }
});

// Rotator
var tickers = $('.ticker');
var index = 1, delay = $('.ticker').data('speed');

setInterval(function () {
    $('.count').each(function () {
      $(this).prop('Counter',0).animate({
          Counter: $(this).text()
      }, {
          duration: 2000,
          easing: 'swing',
          step: function (now) {
              $(this).text(Math.ceil(now));
          }
      });
  });
  for (var i=0; i<tickers.length; i++) {
    var ticker = tickers[i];
    ticker.children[0].style.marginTop = -ticker.clientHeight*(index%ticker.children.length) + 'px';
  }
  index++;
}, delay);

