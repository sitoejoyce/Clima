<template>
  <q-page>
    <q-container class="q-mb-md">
      <q-row class="q-mb-md">
        <q-col>
          <q-item>
            <q-item-section>
              <q-item-label class="text-h6">Previsão do Tempo</q-item-label>
            </q-item-section>
          </q-item>
        </q-col>
      </q-row>

      <!-- Seção para exibir a condição climática atual -->
      <q-row class="q-mb-md">
        <q-col>
          <q-card>
            <q-card-section>
              <div class="q-display-1 text-primary">25°C</div>
              <q-item>
                <q-item-section>
                  <q-item-label>Ensolarado</q-item-label>
                </q-item-section>
              </q-item>
            </q-card-section>
          </q-card>
        </q-col>
      </q-row>

      <!-- Seção para a previsão do tempo nos próximos dias -->
      <q-row class="q-mb-md">
        <q-col>
          <q-item>
            <q-item-section>
              <q-item-label class="text-h6">Próximos Dias</q-item-label>
            </q-item-section>
          </q-item>

          <q-card>
            <q-card-section>
              <q-item>
                <q-item-section>
                  <q-item-label>Domingo</q-item-label>
                </q-item-section>
                <q-item-section side>
                  <q-item-label>28°C</q-item-label>
                </q-item-section>
              </q-item>
            </q-card-section>

            <q-card-section>
              <q-item>
                <q-item-section>
                  <q-item-label>Segunda-feira</q-item-label>
                </q-item-section>
                <q-item-section side>
                  <q-item-label>26°C</q-item-label>
                </q-item-section>
              </q-item>
            </q-card-section>

            <!-- Adicione mais dias conforme necessário -->
          </q-card>
        </q-col>
      </q-row>

      <!-- Seção para botões de navegação ou funcionalidades adicionais -->
      <q-row class="q-mt-md">
        <q-col>
          <q-btn
            color="primary"
            label="Detalhes da Previsão"
            @click="openForecastDetailsModal"
          />
          <!-- Adicione mais botões ou funcionalidades conforme necessário -->
        </q-col>
      </q-row>

      <!-- Modal de Detalhes da Previsão -->
      <q-dialog v-model="showForecastDetailsModal" persistent>
        <q-card>
          <q-card-section>
            <q-item>
              <q-item-section>
                <q-item-label class="text-h6">Detalhes da Previsão</q-item-label>
              </q-item-section>
            </q-item>
          </q-card-section>

          <!-- Conteúdo do Modal (Adapte conforme necessário) -->
          <q-card-section>
            <!-- Adicione aqui os detalhes da previsão do tempo -->
            <q-item>
              <q-item-section>
                <q-item-label>Domingo: 28°C</q-item-label>
              </q-item-section>
            </q-item>
            <q-item>
              <q-item-section>
                <q-item-label>Segunda-feira: 26°C</q-item-label>
              </q-item-section>
            </q-item>
            <!-- Adicione mais detalhes conforme necessário -->
          </q-card-section>

          <!-- Botão para fechar o modal -->
          <q-card-actions align="right">
            <q-btn label="Fechar" color="primary" @click="closeForecastDetailsModal" />
          </q-card-actions>
        </q-card>
      </q-dialog>
    </q-container>
  </q-page>
</template>

<script>
export default {
  data() {
    return {
      showForecastDetailsModal: false,
    };
  },
  methods: {
    openForecastDetailsModal() {
      this.showForecastDetailsModal = true;
    },
    closeForecastDetailsModal() {
      this.showForecastDetailsModal = false;
    },
  },
};
</script>

<style scoped>
/* Adicione estilos CSS conforme necessário */
</style>
