<template>
  <div>
    <h3>Bitcoin valeur sur les 3 dernier mois</h3>
    <btc-chart></btc-chart>
  </div>
</template>

<script>
import BtcChart from './components/bitcoinChart'

export default {
  components: {
    BtcChart
  }
}
</script>