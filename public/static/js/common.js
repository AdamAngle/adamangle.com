/* Navbar */
var first = true;
var transparent_class = 'navbar-light';
var visible_class = 'navbar-light';
var nav = $('#navbar-main');
var navToggle = $('#navbar-main .navbar-toggler');

function setBg(a, className) {
  nav
    .removeClass('bg-transparent')
    .removeClass('bg-light')
    .removeClass(transparent_class)
    .removeClass(visible_class)
    .addClass('bg-' + a)
    .addClass(className);
}

function handleScroll(e, hidden=null) {
  if (first) {
    if (nav.hasClass('navbar-dark')) {
      transparent_class = 'navbar-dark';
    }
    first = false;
  }
  var collapsed = hidden === null ? navToggle.hasClass('collapsed') : hidden;
  if (!collapsed || window.pageYOffset > 56) {
    setBg('light', visible_class);
  } else if (collapsed && window.pageYOffset <= 56) {
    setBg('transparent', transparent_class);
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