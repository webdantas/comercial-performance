<!-- resources/js/components/CaoUsuariosIndex.vue -->
<template>
  <div class="container mx-auto px-4">
    <h1 class="text-xl font-bold mb-4">Usuários</h1>
    <table class="w-full text-left">
      <thead>
        <tr>
          <th class="border-b-2 p-2">Código do usuário</th>
          <th class="border-b-2 p-2">Nome do usuário</th>
          <th class="border-b-2 p-2">Email</th>
          <th class="border-b-2 p-2">Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="user in users" :key="user.co_usuario">
          <td class="border-b p-2">{{ user.co_usuario }}</td>
          <td class="border-b p-2">{{ user.no_usuario }}</td>
          <td class="border-b p-2">{{ user.no_email }}</td>
          <td class="border-b p-2">
            <button @click="editUser(user)" class="bg-blue-500 text-white px-4 py-2">Editar</button>
            <button @click="deleteUser(user)" class="bg-red-500 text-white px-4 py-2">Excluir</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: {
    caoUsuarios: {
      type: Array,
      default: () => [],
    },
  },
  data() {
    return {
      users: this.caoUsuarios,
    };
  },
  methods: {
    // Remove the fetchUsers() method
    editUser(user) {
      // Implemente a lógica para editar o usuário
    },
    deleteUser(user) {
      // Implemente a lógica para excluir o usuário
    },
  },
};
</script>