<template>
  <q-page>
    <q-card>
      <q-card-section>
        <q-item>
          <q-item-section>
            <q-item-label header><h6>Notícias e Atualizações</h6></q-item-label>
          </q-item-section>
        </q-item>
      </q-card-section>

      <!-- Lista de Notícias -->
      <q-list>
        <q-item v-for="(news, index) in newsUpdates" :key="index">
          <q-item-section>
            <q-item-label>
              <div class="text-h6">{{ news.title }}</div>
              <div class="text-subtitle2">{{ news.date }}</div>
              <div>{{ news.content }}</div>
            </q-item-label>
          </q-item-section>
        </q-item>
      </q-list>
    </q-card>
  </q-page>
</template>

<script>
export default {
  data() {
    return {
      newsUpdates: [
        {
          title: 'Estudo revela aumento nas temperaturas globais',
          date: '2023-03-15',
          content: 'Um novo estudo destaca o aumento contínuo nas temperaturas globais...',
        },
        {
          title: 'Impacto das mudanças climáticas nos ecossistemas costeiros',
          date: '2023-03-10',
          content: 'Pesquisadores analisam o impacto das mudanças climáticas nos ecossistemas costeiros...',
        },
        // Adicione mais notícias conforme necessário
      ],
    };
  },
};
</script>
