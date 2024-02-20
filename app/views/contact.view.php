<?php require "partials/header.php" ?>
<?php require "partials/navbar.php" ?>

<main>
  <h1 class="p-2 text-2xl text-center bg-stone-700">Контакты</h1>
  <section class="flex flex-col justify-center max-w-screen-md p-2 mx-auto">
    <form class="flex flex-col" method="POST">
      <div>
        <label for="first-name">Имя</label>
        <input class="w-full p-1 outline-none text-stone-700 rounded-xl" placeholder="Имя" name="first-name" id="first-name" type="text" />
      </div>
    </form>
    <ul class="flex flex-wrap justify-center p-2 space-x-4 text-2xl">
      <li>
        <i class="fa-brands fa-telegram"></i>
        <a href="https://t.me/landayvolk">Telegram</a>
      </li>
      <li>
        <i class="fa-brands fa-square-whatsapp"></i>
        <a href="https://api.whatsapp.com/send?phone=79233714100&text=I'm%20a%20software%20developer">WhatsUp</a>
      </li>
      <li>
        <i class="fa-brands fa-vk"></i>
        <a href="https://vk.com/volkssss">Vkontakte</a>
      </li>
    </ul>
  </section>
</main>

<?php require "partials/footer.php" ?>