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
