<?php require "partials/header.php" ?>
<?php require "partials/navbar.php" ?>

<main>
  <h1 class="p-2 text-2xl text-center bg-stone-700">Музыка</h1>
  <form method="GET" class="flex justify-center max-w-screen-lg p-2 mx-auto my-3">
    <input name="q" class="w-full p-1 outline-none bg-stone-400" type="text">
    <button type="submit" class="px-2 bg-stone-700"><i class="fa-solid fa-magnifying-glass"></i></button>
  </form>

  <section class="flex flex-wrap items-center justify-center m-auto my-5">
    <article class="m-3 rounded-2xl bg-stone-900 w-72" x-data="musicPlayer">
      <p class="mb-2 font-bold text-center text-stone-950 bg-stone-500">2.5$</p>
      <div class="relative w-64 h-64 m-auto player-point">
        <img x-bind:class="isPlaying && 'rotate'" class="w-full h-full rounded-full player-point" src="/img/1.png">
      </div>
      <p x-ref="duration" class="text-center"></p>
      <progress x-ref="progress" class="w-full h-2 bg-stone-600" x-ref="progress" max="100" value="0"></progress>
      <h2 class="text-center">Good Beat</h2>
      <audio x-ref="audio" src="/files/1.mp3"></audio>
      <div class="flex hover:*:bg-stone-500 bg-stone-400 text-stone-800">
        <button @click="toggleMusic" class="flex-grow border-r-2 border-stone-900">
          <i x-bind:class="isPlaying ? 'fa-pause' : 'fa-play'" class="fas"></i>
        </button>
        <button class="flex-grow music-buy">
          <i class="fa-solid fa-cart-shopping"></i>
        </button>
      </div>
    </article>
    <article class="m-3 rounded-2xl bg-stone-900 w-72" x-data="musicPlayer">
      <p class="mb-2 font-bold text-center text-stone-950 bg-stone-500">2.5$</p>
      <div class="relative w-64 h-64 m-auto player-point">
        <img x-bind:class="isPlaying && 'rotate'" class="w-full h-full rounded-full player-point" src="/img/2.jpg">
      </div>
      <p x-ref="duration" class="text-center"></p>
      <progress x-ref="progress" class="w-full h-2 bg-stone-600" x-ref="progress" max="100" value="0"></progress>
      <h2 class="text-center">Another Beat</h2>
      <audio x-ref="audio" src="/files/2.mp3"></audio>
      <div class="flex hover:*:bg-stone-500 bg-stone-400 text-stone-800">
        <button @click="toggleMusic" class="flex-grow border-r-2 border-stone-900">
          <i x-bind:class="isPlaying ? 'fa-pause' : 'fa-play'" class="fas"></i>
        </button>
        <button class="flex-grow music-buy">
          <i class="fa-solid fa-cart-shopping"></i>
        </button>
      </div>
    </article>
  </section>
</main>

<script src="scripts/player.js"></script>
<?php require "partials/footer.php" ?>