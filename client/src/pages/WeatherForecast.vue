<template>
  <q-page>
    <q-card>
      <q-card-section>
        <q-item>
          <q-item-section>
            <q-item-label header>Previsão do Tempo</q-item-label>
          </q-item-section>
        </q-item>
      </q-card-section>

      <q-card-section>
        <q-item>
          <q-item-section>
            <q-item-label>Selecione a cidade:</q-item-label>
          </q-item-section>
          <q-item-section>
            <q-select
              v-model="selectedCity"
              :options="cityOptions"
              emit-value
              map-options
              label="Cidade"
              dense
            />
          </q-item-section>
        </q-item>
      </q-card-section>

      <q-card-section>
        <q-btn @click="getWeatherForecast" label="Obter Previsão" />
      </q-card-section>

      <q-card-section v-if="weatherForecast">
        <q-item>
          <q-item-section>
            <q-item-label header>Resultado da Previsão:</q-item-label>
          </q-item-section>
        </q-item>
        <q-item>
          <q-item-section>
            <q-item-label>{{ weatherForecast }}</q-item-label>
          </q-item-section>
        </q-item>
      </q-card-section>
    </q-card>
  </q-page>
</template>

<script>
export default {
  data() {
    return {
      selectedCity: null,
      cityOptions: ['City A', 'City B', 'City C'], // Substitua com suas cidades reais
      weatherForecast: null,
    };
  },
  methods: {
    getWeatherForecast() {
      // Lógica para obter a previsão do tempo com base na cidade selecionada
      // Substitua este exemplo com chamadas reais à API de previsão do tempo
      this.weatherForecast = `A previsão do tempo para ${this.selectedCity} é ensolarada.`;
    },
  },
};
</script>
