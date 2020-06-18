;jQuery(document).ready(function () {
  var closeBtn = document.getElementById('close-side-form');
  console.log(closeBtn);
  closeBtn.addEventListener("click", function () {
    var collapsable = document.querySelector('.collapse-form');
    // console.log(collapsable);

    collapsable.style.display = 'none';
  });

  var openBtn = document.querySelector('.sidebar-arrow');
  openBtn.addEventListener("click", function () {
    var collapsable = document.querySelector('.collapse-form');
    // console.log(collapsable);
    collapsable.style.display = 'block';
    collapsable.style.right = "-832px";
  });

  
});