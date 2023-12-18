<template>
  <q-page>
    <q-card>
      <q-card-section>
        <q-item>
          <q-item-section>
            <q-item-label header><h6>Vídeos Educativos</h6></q-item-label>
          </q-item-section>
        </q-item>
      </q-card-section>

      <div class="video-card-container q-pa-md">
        <q-card v-for="(video, index) in videos" :key="index" class="my-card">
          <div class="video-container">
            <iframe
              v-if="activeVideoIndex === index"
              width="100%"
              height="315"
              :src="video.url"
              frameborder="0"
              allowfullscreen
            ></iframe>
          </div>

          <q-card-section class="q-pt-none">
            {{ video.description }}
          </q-card-section>

          <q-card-actions>
            <q-btn
              label="Play"
              @click="playVideo(index)"
            />
          </q-card-actions>
        </q-card>
      </div>
    </q-card>
  </q-page>
</template>

<script>
export default {
  data() {
    return {
      videos: [
        {
          url: "https://www.youtube.com/embed/rjRUPizJXXI",
          description: "Video 1: Clima africano.",
        },
        {
          url: "https://www.youtube.com/embed/KYxm7AOxQb8",
          description: "Video 2: Mudancas climaticas e suas consequencias.",
        },
        {
          url: "https://www.youtube.com/embed/Mf2cxR9BWa4",
          description: "Video 3: Quem e responsavel pelas mudancas climaticas.",
        },
        // Add more videos as needed
      ],
      activeVideoIndex: null,
    };
  },
  methods: {
    playVideo(index) {
      this.activeVideoIndex = index;
    },
  },
};
</script>

<style scoped>
/* Estilos específicos do componente VideoCard */

/* Estilos específicos para o container de cards */
.video-card-container {
  display: flex;
  flex-wrap: wrap; /* Permite que os cards quebrem para a próxima linha conforme necessário */
  justify-content: space-between; /* Distribui os cards igualmente no espaço disponível, ajuste conforme necessário */
}

.my-card {
  width: 300px; /* Ajuste a largura conforme necessário */
  margin-bottom: 20px; /* Espaçamento entre os cards, ajuste conforme necessário */
}

/* Estilos para o vídeo incorporado */
.video-container {
  position: relative;
  padding-bottom: 56.25%; /* Proporção de aspecto do vídeo (16:9) */
  height: 0;
  overflow: hidden;
}

.video-container iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
/* Estilos adicionais conforme necessário */
</style>
