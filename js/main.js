$(document).ready(function() {
  $("nav").affix({
    offset: $("nav").position()
  });

  $(".navbar-nav li a").click(function() {
    var attr, position;

    attr = $(this).attr("href");
    position = $(attr).offset().top + 20;

    $("body, html").animate({
      scrollTop: position + 50
    }, 700 );
  });

  $("a[data-toggle='tooltip']").tooltip();

  $("a[href='#show-more']").click(function() {
    var parent = $(this).parent("div");

    parent.removeClass("col-sm-3").addClass("col-sm-12");
    parent.children("img").wrap("<div class='col-sm-3'></div>");
    parent.children(".more").hide();
    parent.children("div").removeClass("hide");
    parent.parent().children().not(parent).hide();
  });

  $("a[href='#meet-team']").click(function() {
    var parent = $(this).parent().parent("div");

    parent.removeClass("col-sm-12").addClass("col-sm-3");
    parent.children().children("img").unwrap("<div class='col-sm-3'></div>");
    parent.children(".more").show();
    parent.children("div").addClass("hide");
    parent.parent().children().not(parent).show();
  });
});
