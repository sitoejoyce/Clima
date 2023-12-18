<template>
  <q-page>
    <q-card>
      <q-card-section>
        <q-item>
          <q-item-section>
            <q-item-label header><h5>Dicas Sustentáveis</h5></q-item-label>
          </q-item-section>
        </q-item>
      </q-card-section>

      <div class="sustainable-tips-container q-pa-md">
        <q-card v-for="(tip, index) in tips" :key="index" class="my-card">
          <img :src="tip?.image">
          <q-card-section>
            <q-item-label>{{ tip?.description }}</q-item-label>
          </q-card-section>

          <q-card-actions>
            <!-- Botões para ações relacionadas à dica sustentável (se necessário) -->
          </q-card-actions>
        </q-card>
      </div>
    </q-card>
  </q-page>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import axios from 'axios';
import {useQuasar} from 'quasar';
const {notify} = useQuasar();

const tips = ref({});

onMounted(async () =>{
try {
const http = axios.create({
baseURL: process.env.API_URL,
headers:{
  Accept:'application/json'
}

});
const response = await http.get('/tips');
tips.value =  response.data.data;
console.log(response);
} catch (error) {
  notify({message:'Erro de apllicação.','type':'neagtive'});
console.log(error);

}}
);
</script>
<style scoped>
/* Estilos específicos para o container de dicas sustentáveis */
.sustainable-tips-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

/* Estilos específicos para cada card */
.my-card {
  width: calc(33.33% - 10px); /* Ajuste a largura conforme necessário */
  margin-bottom: 20px; /* Espaçamento entre os cards, ajuste conforme necessário */
}

/* Estilos adicionais conforme necessário */
</style>
