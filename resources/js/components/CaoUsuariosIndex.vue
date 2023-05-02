<template>
  <div class="container mx-auto px-4">
    <h1 class="text-xl font-bold mb-4">Usuários</h1>
    <table class="w-full text-left">
      <thead>
        <tr>
          <th class="border-b-2 p-2">Nome do usuário</th>
          <th class="border-b-2 p-2">Receita Líquida</th>
          <th class="border-b-2 p-2">Custo Fixo</th>
          <th class="border-b-2 p-2">Comissão</th>
          <th class="border-b-2 p-2">Lucro do mês</th>
          <th class="border-b-2 p-2">Selecionar</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="user in users" :key="user.co_usuario">
          <td class="border-b p-2">{{ user.no_usuario }}</td>
          <td class="border-b p-2">{{ getReceitaLiquida(user) }}</td>

          <!-- Custo Fixo -->
          <td class="border-b p-2">{{ '' }}</td>
          <!-- Comissão -->
          <td class="border-b p-2">{{ '' }}</td>
          <!-- Lucro do mês -->
          <td class="border-b p-2">{{ '' }}</td>
          <td class="border-b p-2">
            <input type="checkbox" :value="user" v-model="selectedUsers" />
          </td>
        </tr>
      </tbody>
    </table>
    <button @click="applyFilters" class="bg-blue-500 text-white px-4 py-2 mt-4">
      Aplicar filtros
    </button>
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
    console.log(this.caoUsuarios); // Adicione esta linha
    return {
      users: this.caoUsuarios,
      selectedUsers: [],
    };
  },
  methods: {
    getReceitaLiquida(user) {
    if (!user.caoOs || user.caoOs.length === 0) { // Verifica se o usuário tem ordens de serviço
        console.log('caoOs is not available for user:', user);
        return 0;
    }

    return user.caoOs.reduce((sum, os) => {
        if (!os.caoFaturas || os.caoFaturas.length === 0) { // Verifica se a ordem de serviço tem faturas
            console.log('caoFaturas is not available for os:', os);
            return sum;
        }

        const osSum = os.caoFaturas.reduce((faturaSum, fatura) => {
            console.log('fatura:', fatura);
            return faturaSum + (fatura.valor_liquido || 0);
        }, 0);

        console.log('osSum:', osSum);
        return sum + osSum;
    }, 0);
},



    applyFilters() {
        // Aqui você pode aplicar os filtros usando os usuários selecionados em "selectedUsers"
        console.log(this.selectedUsers);
    },
  },
};
</script>