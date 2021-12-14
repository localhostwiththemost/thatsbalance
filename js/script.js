// MAIN PAGE NAV
$(document).ready(function () {
  /////* For the Sticky Nav*/////

  $(".js--section-yourtrainer").waypoint(
    function (direction) {
      if (direction == "down") {
        $("nav").addClass("sticky");
      } else {
        $("nav").removeClass("sticky");
      }
    },
    {
      offset: "60px;" /*Sticky nav pops up 60px before the next section*/,
    }
  );
});

// MAIN PAGE TRAINER SECTION COLUMNS/ROWS
/*
if ($(window).width() < 600) {
  $("#trainer-col").removeClass("col-1-of-2");
}

if ($(window).width() < 600) {
  $("#trainer-row").removeClass("row");
}
*/

// CONTACT PAGE NAV
$(document).ready(function () {
  /////* For the Sticky Nav*/////

  $(".js--h1-formintro").waypoint(
    function (direction) {
      if (direction == "down") {
        $("nav").addClass("sticky");
      } else {
        $("nav").removeClass("sticky");
      }
    },
    {
      offset: "15px;" /*Sticky nav pops up 60px before the h1*/,
    }
  );
});

// FAQ PAGE NAV
$(document).ready(function () {
  /////* For the Sticky Nav*/////

  $(".js--h1-faq").waypoint(
    function (direction) {
      if (direction == "down") {
        $("nav").addClass("sticky");
      } else {
        $("nav").removeClass("sticky");
      }
    },
    {
      offset: "15px;" /*Sticky nav pops up 60px before the h1*/,
    }
  );
});
