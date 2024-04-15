<?php 
view("partials/header.php");
view("partials/nav.php");
view("partials/banner.php",[
  'heading' => 'Anasayfa'
]);
?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <p>Hello Welcome To Home Screen</p>
    </div>
  </main>

<?php view("partials/footer.php") ?>