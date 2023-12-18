<template>
  <q-page>
    <q-container class="q-mb-md">
      <q-row>
        <q-col>
          <q-item>
            <q-item-section>
              <q-item-label class="text-h6">Tendências Climáticas</q-item-label>
            </q-item-section>
          </q-item>
        </q-col>
      </q-row>

      <q-row>
        <q-col>
          <q-card>
            <q-card-section>
              <div class="q-display-1 text-primary">Análise Climática</div>
              <q-item>
                <q-item-section>
                  <q-item-label>
                    Explore as tendências climáticas atuais e futuras para entender melhor as mudanças
                    no clima e tomar medidas preventivas.
                  </q-item-label>
                </q-item-section>
              </q-item>
            </q-card-section>
          </q-card>
        </q-col>
      </q-row>

      <q-row>
        <q-col>
          <q-card>
            <q-card-section>
              <q-item>
                <q-item-section>
                  <q-item-label class="text-h6">Tendências Recentes</q-item-label>
                </q-item-section>
              </q-item>

              <q-item>
                <q-item-section>
                  <q-item-label>1. Aumento da Temperatura Global</q-item-label>
                </q-item-section>
              </q-item>

              <q-item>
                <q-item-section>
                  <q-item-label>2. Mudanças nos Padrões de Precipitação</q-item-label>
                </q-item-section>
              </q-item>

              <q-item>
                <q-item-section>
                  <q-item-label>3. Eventos Climáticos Extremos</q-item-label>
                </q-item-section>
              </q-item>
            </q-card-section>
          </q-card>
        </q-col>
      </q-row>

      <q-row>
        <q-col>
          <q-btn
            color="primary"
            label="Detalhes da Tendência"
            @click="openTrendDetailsModal"
          />
        </q-col>
      </q-row>

      <q-dialog v-model="showTrendDetailsModal" persistent>
        <q-card>
          <q-card-section>
            <q-item>
              <q-item-section>
                <q-item-label class="text-h6">Detalhes da Tendência</q-item-label>
              </q-item-section>
            </q-item>
          </q-card-section>

          <q-card-section>
            <q-item>
              <q-item-section>
                <q-item-label>
                  Explore mais detalhes sobre as tendências climáticas recentes e as projeções para o
                  futuro.
                </q-item-label>
              </q-item-section>
            </q-item>
          </q-card-section>

          <q-card-actions align="right">
            <q-btn label="Fechar" color="primary" @click="closeTrendDetailsModal" />
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
      showTrendDetailsModal: false,
    };
  },
  methods: {
    openTrendDetailsModal() {
      this.showTrendDetailsModal = true;
    },
    closeTrendDetailsModal() {
      this.showTrendDetailsModal = false;
    },
  },
};
</script>

<style scoped>
/* Adicione estilos CSS conforme necessário */
</style>
