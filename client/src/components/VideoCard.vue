<!-- Página que usa o componente VideoCard.vue (por exemplo, EducationalVideos.vue) -->

<template>
  <q-page>
    <q-card v-for="(video, index) in educationalVideos" :key="index">
      <!-- Utilizando o componente VideoCard -->
      <video-card :video="video" />
    </q-card>
  </q-page>
</template>

<script>
import VideoCard from 'src/components/VideoCard.vue';

export default {
  components: {
    VideoCard,
  },
  data() {
    return {
      educationalVideos: [
        {
          title: 'Título do Vídeo 1',
          description: 'Descrição do Vídeo 1...',
          thumbnail: 'caminho/para/thumbnail1.jpg',
          url: 'https://www.youtube.com/watch?v=video-id-1',
        },
        {
          title: 'Título do Vídeo 2',
          description: 'Descrição do Vídeo 2...',
          thumbnail: 'caminho/para/thumbnail2.jpg',
          url: 'https://www.youtube.com/watch?v=video-id-2',
        },
        {
          title: 'Título do Vídeo 1',
          description: 'Descrição do Vídeo 1...',
          thumbnail: 'caminho/para/thumbnail1.jpg',
          url: 'https://www.youtube.com/watch?v=video-id-1',
        },
        {
          title: 'Título do Vídeo 2',
          description: 'Descrição do Vídeo 2...',
          thumbnail: 'caminho/para/thumbnail2.jpg',
          url: 'https://www.youtube.com/watch?v=video-id-2',
        },
      ],
    };
  },
};
</script>
