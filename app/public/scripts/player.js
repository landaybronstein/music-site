document.addEventListener("alpine:init", () => {
  Alpine.data("musicPlayer", () => ({
    duration: 0,
    currentTime: 0,
    isPlaying: false,
    audio: null,
    progress: null,
    updateInterval: null,
    init() {
      setTimeout(
        () =>
          (() => {
            this.audio = this.$refs.audio;
            this.progress = this.$refs.progress;
            this.duration = parseInt(this.audio.duration);
            this.currentTime = parseInt(this.audio.currentTime);
            this.progress.max = this.duration;
            this.$refs.duration.innerText = `${Math.floor(
              this.duration / 60
            )}:${this.duration % 60}`;
          })(),
        500
      );
    },
    toggleMusic() {
      const musicProgressInterval = () => {
        this.currentTime += 1;
        this.progress.value = this.currentTime;
        if (this.currentTime >= this.duration) {
          clearInterval(this.updateInterval);
          this.audio.pause();
          this.isPlaying = false;
          this.progress.value = 0;
          this.currentTime = 0;
        }
      };

      if (this.isPlaying) {
        this.audio.pause();
        clearInterval(this.updateInterval);
      } else {
        this.audio.play();
        this.updateInterval = setInterval(musicProgressInterval, 1000);
      }

      this.isPlaying = !this.isPlaying;
    },
  }));
});
