<?php

use Core\Router;

?>

<nav class="sticky flex flex-col items-center justify-between px-10 py-3 border-b-2 md:flex-row">
  <div>
    <img class="w-48" src="img/logo.png" alt="Almighti Production" />
  </div>
  <ul class="hover:*:text-stone-400 flex my-2 space-x-4 text-xl md:my-0">
    <li>
      <a class="<?= Router::urlIs("/") ? "p-2 rounded-md bg-stone-700" : "" ?>" href="/">Личность</a>
    </li>
    <li>
      <a class="<?= Router::urlIs("/content") ? "p-2 rounded-md bg-stone-700" : "" ?>" href="/content">Музыка</a>
    </li>
    <li>
      <a class="<?= Router::urlIs("/contact") ? "p-2 rounded-md bg-stone-700" : "" ?>" href="/contact">Контакты</a>
    </li>
    <li>
      <a class="<?= Router::urlIs("/account") ? "p-2 rounded-md bg-stone-700" : "" ?>" href="/account">Аккаунт</a>
    </li>
  </ul>
</nav>