const content = document.querySelector(".about_artist");
const contentFull = document.querySelector(".text-full");
const more = document.querySelector(".read-more");
let open = false;

if (`${contentFull.clientHeight}` < 80) {
  more.style.display = "none";
}

if (more) {
  more.addEventListener("click", (e) => {
    if (open) {
      content.removeAttribute("style");
      e.target.innerHTML = 'Xem đầy đủ <i class="fal fa-angle-down"></i>';

      open = false;
    } else {
      content.style.maxHeight = `${contentFull.clientHeight}px`;
      e.target.innerHTML = 'Rút gọn <i class="fal fa-angle-up"></i>';

      open = true;
    }
  });
}

function getTrack($qty) {
  $(document).ready(function () {
    var id = $("#track_list").attr('idartist');
    $("#track_list").load('artist/' + id + '/tracks/' + $qty);
    $('#track_list').attr('quantity', $qty);
  });
}
getTrack(5);
$(function () {
  $('#load_more').click(function (e) {
    e.preventDefault();
    $qty = $('#track_list').attr('quantity');
    $qty = $qty * 2;
    getTrack($qty);
  });
});