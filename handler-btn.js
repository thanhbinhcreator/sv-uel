var $ = document.querySelector.bind(document);
var $$ = document.querySelectorAll.bind(document);
var ViewInfo = $$(".btn-view");
ViewInfo.forEach(function (value, index, array) {
  ViewInfo[index].onclick = function () {
    $(".info-nolist").classList.remove("active");
    $(".info-list").classList.add("active");
  };
});
