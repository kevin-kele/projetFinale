<template>
  <div>
    <h3>Valeur des cryptos sur le marche</h3>
    <polar-area-chart></polar-area-chart>
  </div>
</template>

<script>
import PolarAreaChart from './components/cryptosChart.vue'

export default {
  components: {
    PolarAreaChart
  }
}
</script>