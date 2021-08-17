/* Navbar */
var nav = $('#navbar-main');
var navToggle = $('#navbar-main .navbar-toggler');

function setBg(a) {
  nav
    .removeClass('bg-transparent')
    .removeClass('bg-light')
    .addClass('bg-' + a);
}

function handleScroll(e, hidden=null) {
  var collapsed = hidden === null ? navToggle.hasClass('collapsed') : hidden;
  if (!collapsed || window.pageYOffset > 56) {
    setBg('light');
  } else if (collapsed && window.pageYOffset <= 56) {
    setBg('transparent');
  }
}

window.addEventListener('scroll', handleScroll, { passive: true });
$(function(){
  handleScroll();
  
})
$('#navbar-nav').on('show.bs.collapse', function() {
  handleScroll(null, false);
}).on('hide.bs.collapse', function() {
  handleScroll(null, true);
});