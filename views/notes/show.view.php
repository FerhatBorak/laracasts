<?php 
view("partials/header.php");
view("partials/nav.php");
view("partials/banner.php",[
  'heading' => 'show notes'
]);
?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <a href="/notes" class="text-blue-500 hover:underline">Go Back</a>
      
         <h2> <?= $note['body'] ?></h2>
          <form action="#"  method="post" class="mt-6"> 
            <input type="hidden" name="_method"  value="DELETE">
            <input type="hidden" name="id"  value="<?=$note['id'] ?>">
         <button type="submit"  class="text-sm text-red-500">Delete</button>
     
         </form>

      
    </div>
  </main>

<?php view("partials/footer.php") ?>