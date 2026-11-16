// Memanggil jQuery untuk menahan agar js jangan dulu dijalankan sebelum halaman dirender
$(document).ready(function () {
  // Menggunakan fungsi toggle() persis seperti Lesson 3
  $("#showCheckbox").click(function () {
    $("#inputSandi").toggle();
    $("#inputTeks").toggle();
  });
});
