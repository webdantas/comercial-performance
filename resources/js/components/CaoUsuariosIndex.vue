<template>
  <div class="container mx-auto px-4">
    <h1 class="text-xl font-bold mb-4">Usuários</h1>
    <div class="flex items-center mb-4">
    <label for="mes" class="mr-2">Mês:</label>
      <select v-model="selectedMonth" name="mes" id="mes" class="mr-4 appearance-none text-black">
        <option value="01">Janeiro</option>
        <option value="02">Fevereiro</option>
        <option value="03">Março</option>
        <option value="04">Abril</option>
        <option value="05">Maio</option>
        <option value="06">Junho</option>
        <option value="07">Julho</option>
        <option value="08">Agosto</option>
        <option value="09">Setembro</option>
        <option value="10">Outubro</option>
        <option value="11">Novembro</option>
        <option value="12">Dezembro</option>
      </select>
      <label for="ano" class="mr-2">Ano:</label>
      <select v-model="selectedYear" name="ano" id="ano" class="appearance-none text-black">
        <option v-for="year in availableYears" :value="year">{{ year }}</option>
      </select>
    </div>
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
          <td class="border-b p-2">{{ user.cao_salario && user.cao_salario.brut_salario ? user.cao_salario.brut_salario : 'Não informado' }}</td>
          <td class="border-b p-2">{{ user.comissao }}</td>
          <!-- Lucro do mês -->
          <td class="border-b p-2">{{ '' }}</td>
          <td class="border-b p-2">
            <input type="checkbox" :value="user" v-model="selectedUsers" />
          </td>
        </tr>
      </tbody>
    </table>
    <button @click="applyFilters" class="bg-blue-500 text-white px-4 py-2 mt-4 mr-2">
      Aplicar filtros
    </button>
    <button @click="clearFilters" class="bg-red-500 text-white px-4 py-2 mt-4">
      Limpar filtros
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
    return {
      users: this.caoUsuarios,
      selectedUsers: [],
      selectedMonth: null,
      selectedYear: null,
      filteredUsers: null,
      availableYears: []
    };
  },

  methods: {
    clearFilters() {
      this.selectedMonth = '';
      this.selectedYear = '';
      this.selectedUsers = [];
    },

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
      if (!this.selectedMonth || !this.selectedYear) {
        this.filteredUsers = null;
        this.users = this.caoUsuarios;
        return;
      }

      const filteredUsers = this.caoUsuarios.filter(user => {
        if (!user.caoOs) return false;
        return user.caoOs.some(os => {
          if (!os.caoFaturas) return false;
          return os.caoFaturas.some(fatura => {
            const faturaDate = new Date(fatura.data_emissao);
            return (
              faturaDate.getFullYear() === Number(this.selectedYear) &&
              faturaDate.getMonth() === Number(this.selectedMonth) - 1
            );
          });
        });
      });

      this.filteredUsers = filteredUsers;
      this.users = filteredUsers;
    },

    clearFilters() {
      this.selectedMonth = null;
      this.selectedYear = null;
      this.filteredUsers = null;
      this.users = this.caoUsuarios;
    },
  },

  mounted() {
    const maxYear = new Date().getFullYear();
    const minYear = 2009;

    for (let i = maxYear; i >= minYear; i--) {
      this.availableYears.push(i.toString());
    }
  },

  filters: {
    salarioFormat(value) {
      return value ? value.brut_salario : 'Não informado';
    }
  }
}
</script>
