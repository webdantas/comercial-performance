export function numberFormat(number, decimals = 2, decPoint = ',', thousandsSep = '.') {
  if (!number) {
      return '';
  }
  return number.toLocaleString('pt-BR', {
      minimumFractionDigits: decimals,
      maximumFractionDigits: decimals,
      useGrouping: true,
      decimalSeparator: decPoint,
      thousandsSeparator: thousandsSep,
  });
}
