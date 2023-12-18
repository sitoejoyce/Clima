<!-- src/pages/CarbonCalculator.vue -->
<template>
  <q-page class="q-pa-md">
    <div class="calculator">
      <h6>Calculadora de Pegada de Carbono</h6>

      <q-input outlined v-model="electricity" label="Consumo de Eletricidade (kWh)" type="number" />
      <q-input outlined v-model="gas" label="Consumo de Gás (metros cúbicos)" type="number" />
      <q-input outlined v-model="transport" label="Consumo de Transporte (quilômetros)" type="number" />

      <div class="spacer"></div> <!-- Adicionando espaço entre os campos e o botão -->

      <q-btn color="primary" @click="calculateCarbonFootprint">Calcular Pegada de Carbono</q-btn>

      <h5>Resultado:</h5>
      <q-card>
        <q-card-section>
          <p class="result">{{ result }} toneladas de CO2</p>
        </q-card-section>
      </q-card>
    </div>
  </q-page>
</template>

<script>
export default {
  data() {
    return {
      electricity: 0,
      gas: 0,
      transport: 0,
      result: 0,
    };
  },
  methods: {
    calculateCarbonFootprint() {
      const electricityEmissionFactor = 0.5; // Substitua pelo seu fator de emissão real
      const gasEmissionFactor = 2.0; // Substitua pelo seu fator de emissão real
      const transportEmissionFactor = 0.1; // Substitua pelo seu fator de emissão real

      const electricityEmission = this.electricity * electricityEmissionFactor;
      const gasEmission = this.gas * gasEmissionFactor;
      const transportEmission = this.transport * transportEmissionFactor;

      const totalEmission = electricityEmission + gasEmission + transportEmission;

      this.result = totalEmission.toFixed(2);
    },
  },
};
</script>

<style scoped>
.calculator {
  text-align: center;
  max-width: 400px;
  margin: 0 auto;
}

.spacer {
  margin-bottom: 10px; /* Adicionando espaço entre os campos e o botão */
}

.result {
  font-size: 1.5em;
  font-weight: bold;
  color: #4caf50; /* ou sua cor preferida */
}
</style>
