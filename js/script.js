new Vue({
  el: "#app",
  data: {
    show: false
  }
})

function myfunc() {
  $("aside").is(":visible") ?
           $('article').css('margin-left', '0px') : $('article').css('margin-left', '250px') 

}