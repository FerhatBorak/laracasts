<?php 
view("partials/header.php");
view("partials/nav.php");
view("partials/banner.php",[
  'heading' => 'About Us'
]);
?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <p>Hello Welcome To About Screen</p>
    </div>
  </main>

<?php view("partials/footer.php");?>