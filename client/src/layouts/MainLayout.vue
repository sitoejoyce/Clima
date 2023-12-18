<template>
  <q-layout view="lHh Lpr lff" container style="min-height: 100vh" class="shadow-2 rounded-borders">
    <q-header elevated class="bg-cyan-8">
      <q-toolbar>
        <q-btn flat @click="drawer = !drawer" round dense icon="menu" />
        <q-space />
        <q-toolbar-title>
          <!-- Título da barra de ferramentas -->
        </q-toolbar-title>
        <div class="q-px-lg q-pt-xl q-mb-md" >
          <div class="text-h7">ClimaApp</div>
          <!-- <div class="text-subtitle1">{{ dataFormatada }}</div> -->
          <div>
            <div class="column items-center">
              <!-- <q-btn
                color="primary"
                label="Sair"
                push
                size="sm"
                @click="confirmLogout"
              /> -->
            </div>
          </div>

   <q-img src="src/img/legal.jpg"  class="header-image absolute-top"></q-img>
        </div>
      </q-toolbar>
    </q-header>

    <q-drawer
      v-model="drawer"
      show-if-above
      :width="300"
      :breakpoint="600"
      @hide="drawer = false"
    >
      <q-scroll-area style="height: calc(100% - 250px); margin-top: 130px; border-right: 1px solid #ddd">
        <q-list padding>
          <!-- <q-item
            to="/user"
            exact
            clickable
            v-ripple
          >
            <q-item-section avatar>
              <q-icon name="list" />
            </q-item-section>
            <q-item-section>
              Usuários
            </q-item-section>
          </q-item> -->

          <q-item to="/"
            exactclickable v-ripple>
            <q-item-section avatar>
              <q-icon name="home" />
            </q-item-section>
            <q-item-section>
              Página Inicial
            </q-item-section>
          </q-item>

          <q-item to="/carbon-calculator">
            <q-item-section avatar>
              <q-icon name="eco" />
            </q-item-section>
            <q-item-section>
              Calculadora de Carbono
            </q-item-section>
          </q-item>

          <q-item to="/sustainable-tips">
            <q-item-section avatar>
              <q-icon name="eco" />
            </q-item-section>
            <q-item-section>
              Dicas Sustentáveis
            </q-item-section>
          </q-item>

          <q-item to="/educational-videos">
            <q-item-section avatar>
              <q-icon name="ondemand_video" />
            </q-item-section>
            <q-item-section>
              Vídeos Educativos
            </q-item-section>
          </q-item>

          <q-item to="/educational">
            <q-item-section avatar>
              <q-icon name="school" />
            </q-item-section>
            <q-item-section>
              Educação Ambiental
            </q-item-section>
          </q-item>

          <q-item to="/climate-overview">
            <q-item-section avatar>
              <q-icon name="wb_sunny" />
            </q-item-section>
            <q-item-section>
              Tendências Climáticas
            </q-item-section>
          </q-item>

          <q-item to="/news-updates">
            <q-item-section avatar>
              <q-icon name="new_releases" />
            </q-item-section>
            <q-item-section>
              Notícias e Atualizações
            </q-item-section>
          </q-item>





          <q-item
            to="/Ajuda"
            exact
            clickable
            v-ripple
          >
            <q-item-section avatar>
              <q-icon name="help" />
            </q-item-section>
            <q-item-section>
              Ajuda
            </q-item-section>
          </q-item>
        </q-list>
      </q-scroll-area>

      <q-img class="absolute-top" src="https://cdn.quasar.dev/img/material.png" style="height: 150px">
        <div class="absolute-bottom bg-transparent">
          <q-avatar size="56px" class="q-mb-sm">
            <img src="https://cdn.quasar.dev/img/boy-avatar.png">
          </q-avatar>
          <div class="text-weight-bold">Jossefina Sitoe</div>
          <div>Jossefina14@gmail.com</div>
        </div>
      </q-img>
    </q-drawer>

    <q-page-container>
      <router-view v-slot="{ Component }">
  <keep-alive>
    <component :is="Component" />
  </keep-alive>
</router-view>
    </q-page-container>

    <!-- <q-dialog v-model="showLogoutConfirmation">
      <q-card>
        <q-card-section>
          <q-card-title class="text-h6">Confirmação de Saída</q-card-title>
        </q-card-section>
        <q-card-section>
          Tem certeza de que deseja sair do sistema?
        </q-card-section>
        <q-card-actions align="right">
          <q-btn label="Cancelar" color="primary" @click="cancelLogout" />
          <q-btn label="Sair" color="negative" to="/login" />
        </q-card-actions>
      </q-card>
    </q-dialog> -->
  </q-layout>
</template>

<script>
import { ref } from 'vue';

export default {
  data() {
    return {
      dataFormatada: '',
      drawer: false,
      showLogoutConfirmation: false,
    };
  },
  mounted() {
    this.atualizarData();
  },
  methods: {
    atualizarData() {
      const hoje = new Date();
      const options = {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: 'numeric',
        minute: 'numeric',
        second: 'numeric',
      };
      this.dataFormatada = hoje.toLocaleDateString('pt-BR', options);
      setTimeout(this.atualizarData, 1000); // Atualiza a cada segundo
    },

    confirmLogout() {
      this.showLogoutConfirmation = true;
    },

    cancelLogout() {
      this.showLogoutConfirmation = false;
    },

// No seu componente Vue
methods: {
  performLogout() {
    // Simular a lógica de logout
    // Lembre-se de ajustar isso com a lógica real da sua aplicação

    // Limpar tokens de autenticação (exemplo: se estiver usando JWT)
    localStorage.removeItem('token');

    // Redirecionar para a página de login
    this.$router.push({ name: 'login' });
  },
},



  },
};
</script>

<style lang="scss">
.header-image{
  height: 90%;
  z-index: -1;
  opacity: 0.8;
}
</style>
