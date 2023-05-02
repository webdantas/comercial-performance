## Rodar aplicação
* ./vendor/bin/sail up -d
* npx vite

## Análise realizada
* Necessário construir interface para consultas diversas, como segue abaixo, e portanto a solução foi criar uma listagem com os resultados relacionados aos usuários, podendo gerar gráficos através da seleção de registros.

* funcionalidades:

= aba consultores
- listagem de consultores (2 tabelas: CAO_USUARIO e PERMISSAO_SISTEMA)
- relatório por consultor dos resultados de receita gerada
- relatório de receita liquida por mes de referencia por consultor
= então deve-se pegar o campo do valor da fatura (VALOR) e
subtrair o valor do campo de total de impostos (TOTAL_IMP_INC), que é um percentual relacionando o consultor à uma OS na tabela CAO_OS

- relatório de custo fixo do mes de referencia por consultor
- relatório de comissão do mes de referencia por consultor
- relatório de lucro do mes de referencia
- gerar gráfico de desempenho de cada consultor em comparativo lado a lado, com linha de custo médio, indicando o desempenho acima ou abaixo desta linha de custo medio
- gerar gráfico de custo fixo medio por consultor
- gerar gráfico de pizza com o percentual de receita liquida por consultor, relacionado ao total de receita liquida gerada


= aba clientes
- listagem de clientes
- relatório de receita total por cliente para cada mes
- relatório de receita liquida por cliente para cada mes
- gerar gráfico de desempenho em receita por cliente
- gerar gr´pafico de pizza com o percentual de receita liquida por cliente, relacionando ao total de receita liquida por cliente


## Querys construidas para montagem dos Eloquent
* SELECT u.co_usuario, u.no_usuario, s.brut_salario
FROM cao_usuario u
INNER JOIN cao_salario s ON u.co_usuario = s.co_usuario

* SELECT SUM(cao_fatura.valor - (cao_fatura.valor * (cao_fatura.total_imp_inc / 100))) AS receita_liquida
FROM cao_fatura
INNER JOIN cao_os ON cao_fatura.co_os = cao_os.co_os
WHERE cao_os.co_usuario = 'carlos.arruda'
AND MONTH(cao_fatura.data_emissao) = '04'
AND YEAR(cao_fatura.data_emissao) = '2007'

* SELECT cao_usuario.*,
       cao_os.*,
       cao_fatura.*,
       ROUND((cao_fatura.valor - ((cao_fatura.total_imp_inc / 100) * cao_fatura.valor)), 2) AS valor_liquido
FROM cao_usuario
JOIN permissao_sistema ON permissao_sistema.co_usuario = cao_usuario.co_usuario
JOIN cao_os ON cao_os.co_usuario = cao_usuario.co_usuario
JOIN cao_fatura ON cao_fatura.co_os = cao_os.co_os
WHERE permissao_sistema.co_sistema = 1
  AND permissao_sistema.co_tipo_usuario IN (0, 1, 2)
  AND permissao_sistema.in_ativo = 'S';

  ## Instalados bibliotecas para:
  * testes;
  * gráficos em Vue.js
