jQuery(document).ready(function () {
  var closeBtn = document.getElementById("close-side-form");
  var openBtn = document.querySelector(".sidebar-arrow");

  closeBtn.addEventListener("click", function () {
    var sidebar = document.querySelector(".sidebar");
    var collapse = document.querySelector(".collapse-form");
    // console.log(collapsable);
    sidebar.style.width = "119px";
    collapse.style.display = "none";
    openBtn.src =
      "http://sneaker-tracker.test/wp-content/themes/cssgrid/images/arrow_icon_open.png";
  });

  openBtn.addEventListener("click", function () {
    var sidebar = document.querySelector(".sidebar");
    var collapse = document.querySelector(".collapse-form");

    if (collapse.style.display !== "block") {
      sidebar.style.width = "832px";
      collapse.style.display = "block";
      openBtn.src =
        "http://sneaker-tracker.test/wp-content/themes/cssgrid/images/arrow_icon_close.png";
    } else if (collapse.style.display === "block") {
      sidebar.style.width = "119px";
      collapse.style.display = "none";
      openBtn.src =
        "http://sneaker-tracker.test/wp-content/themes/cssgrid/images/arrow_icon_open.png";
    }
  });
});
