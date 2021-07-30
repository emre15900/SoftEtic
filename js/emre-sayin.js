/* Fiyat Tablosu */

$( "ul" ).on( "click", "li", function() {
    var pos = $(this).index()+2;
    $("tr").find('td:not(:eq(0))').hide();
    $('td:nth-child('+pos+')').css('display','table-cell');
    $("tr").find('th:not(:eq(0))').hide();
    $('li').removeClass('active');
    $(this).addClass('active');
  });
  
  // Mobil Görünüm
    var mediaQuery = window.matchMedia('(min-width: 1000px)');

    mediaQuery.addListener(doSomething);

    function doSomething(mediaQuery) {    
      if (mediaQuery.matches) {
        $('.sep').attr('colspan',5);
      } else {
        $('.sep').attr('colspan',2);
      }
    }
    
    doSomething(mediaQuery);


/* Collapse Menu */
$('.accordion-toggle').click(function(e) {
  e.preventDefault();  
  $("a:first-of-type").removeClass('chev');
  
  var $this = $(this);
  if ($this.next().hasClass('show')) {
      $this.next().removeClass('show');
      $this.next().slideUp(350);
  } else {
      $this.parent().parent().find('li .accordion-inner').removeClass('show');
      $this.parent().parent().find('li .accordion-inner').slideUp(350);
      $this.toggleClass('chev');
      $this.next().toggleClass('show');
      $this.next().slideToggle(350);
  }
});


/* Ekstra Menü Özellikleri */ 
/* Ekstra 1 */
$("#btn2").click(function(){
   $("#p2").toggle(1000);
});
/* Ekstra 2 */
$("#btn3").click(function(){
  $("#p3").toggle(1000);
});
/* Ekstra 4 */
$("#btn4").click(function(){
  $("#p4").toggle(1000);
});
/* Ekstra 5 */
$("#btn5").click(function(){
  $("#p5").toggle(1000);
});
/* Ekstra 6 */
$("#btn6").click(function(){
  $("#p6").toggle(1000);
});
/* Ekstra 7 */
$("#btn7").click(function(){
  $("#p7").toggle(1000);
});
/* Ekstra 8 */
$("#btn8").click(function(){
  $("#p8").toggle(1000);
});
/* Ekstra 9 */
$("#btn9").click(function(){
  $("#p9").toggle(1000);
});
/* Ekstra 10 */
$("#btn10").click(function(){
  $("#p10").toggle(1000);
});
/* Ekstra 11 */
$("#btn11").click(function(){
  $("#p11").toggle(1000);
});
/* Ekstra 12 */
$("#btn12").click(function(){
  $("#p12").toggle(1000);
});
/* Ekstra 13 */
$("#btn13").click(function(){
  $("#p13").toggle(1000);
});


/* Plus Minus */
$(function() {
  $('.plus-minus-toggle').on('click', function() {
    $(this).toggleClass('collapsed');
  });
});