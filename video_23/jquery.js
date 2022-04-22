$(".cari").hide();

$(".search").on("keyup", function () {
  // munculkan loader
  $(".loader").show();

  // ajax pake laod
  // $('.tablecon').load('video_23/buku.php?search=' + $('.search').val());

  // ajax dengan get
  $.get("video_23/buku.php?search=" + $(".search").val(), function (data) {
    $(".tablecon").html(data);
    $(".loader").hide();
  });
});
