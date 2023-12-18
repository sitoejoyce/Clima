<template>
  <q-page>
    <q-container class="q-mb-md">
      <q-row>
        <q-col>
          <q-item>
            <q-item-section>
              <q-item-label class="text-h6">Educação Ambiental</q-item-label>
            </q-item-section>
          </q-item>
        </q-col>
      </q-row>

      <q-row>
        <q-col>
          <q-card>
            <q-card-section>
              <div class="q-display-1 text-primary">Preservação Ambiental</div>
              <q-item>
                <q-item-section>
                  <q-item-label>
                    A preservação ambiental é crucial para garantir um futuro sustentável. Devemos
                    adotar práticas ecológicas e conservar nossos recursos naturais.
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
                  <q-item-label class="text-h6">Dicas para Contribuir</q-item-label>
                </q-item-section>
              </q-item>

              <q-item>
                <q-item-section>
                  <q-item-label>1. Reduza, Reutilize, Recicle</q-item-label>
                </q-item-section>
              </q-item>

              <q-item>
                <q-item-section>
                  <q-item-label>2. Economize Energia</q-item-label>
                </q-item-section>
              </q-item>

              <q-item>
                <q-item-section>
                  <q-item-label>3. Plante Árvores</q-item-label>
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
            label="Saiba Mais"
            @click="openMoreInfoModal"
          />
        </q-col>
      </q-row>

      <q-dialog v-model="showMoreInfoModal" persistent>
        <q-card>
          <q-card-section>
            <q-item>
              <q-item-section>
                <q-item-label class="text-h6">Mais Informações</q-item-label>
              </q-item-section>
            </q-item>
          </q-card-section>

          <q-card-section>
            <q-item>
              <q-item-section>
                <q-item-label>
                  A educação ambiental desempenha um papel fundamental na conscientização e na
                  promoção de práticas sustentáveis. Saiba mais sobre como você pode contribuir
                  para um ambiente saudável e equilibrado.
                </q-item-label>
              </q-item-section>
            </q-item>
          </q-card-section>

          <q-card-actions align="right">
            <q-btn label="Fechar" color="primary" @click="closeMoreInfoModal" />
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
      showMoreInfoModal: false,
    };
  },
  methods: {
    openMoreInfoModal() {
      this.showMoreInfoModal = true;
    },
    closeMoreInfoModal() {
      this.showMoreInfoModal = false;
    },
  },
};
</script>

<style scoped>
/* Adicione estilos CSS conforme necessário */
</style>
