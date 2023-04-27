<template>
    <div class="container mx-auto px-4">
      <h1 class="text-xl font-bold mb-4">Criar Usuário</h1>
      <form @submit.prevent="createUser">
        <label for="no_usuario" class="block mb-2">Nome do usuário:</label>
        <input
          type="text"
          id="no_usuario"
          v-model="user.no_usuario"
          class="border w-full px-3 py-2 mb-4"
        />

        <label for="no_email" class="block mb-2">Email:</label>
        <input
          type="email"
          id="no_email"
          v-model="user.no_email"
          class="border w-full px-3 py-2 mb-4"
        />

        <!-- Adicione outros campos conforme necessário -->

        <button type="submit" class="bg-green-500 text-white px-4 py-2">
          Salvar
        </button>
      </form>
    </div>
  </template>


  <script>
  export default {
    data() {
      return {
        user: {
          no_usuario: "",
          no_email: ""

        }
      };
    },
    methods: {
      async createUser() {
        await axios.post("/api/cao_usuarios", this.user);
        this.$router.push({ name: "cao_usuarios_index" });
    }
  }
};
</script>