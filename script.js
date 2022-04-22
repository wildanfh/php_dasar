const search = document.querySelector(".search");
const btn = document.querySelector(".cari");
const container = document.querySelector(".tablecon");

search.addEventListener("keyup", function () {
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  }

  xhr.open('GET', 'video_23/buku.php?search=' + search.value, true);
  xhr.send();
});
btn.style.display = 'none';


