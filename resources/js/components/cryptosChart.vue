<script>
  import { PolarArea } from 'vue-chartjs'

  export default {
    extends: PolarArea,
    data () {
      return {
        chartData: {
          labels: ['Bitcoin(420k)', 'Ethereum(2k)', 'Ripple(1€)', 'Bitcoin cash(500€)', 'Cardano(2€)','Litecoin(160€)','Nem(-1€)','Stellar(-1€)','Lota(-1€)','Dash (200€)'],
          datasets: [
            {
              label: 'Polar Area Chart',
              borderWidth: 1,
              backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(130, 72, 25, 0.2)',
              'rgba(153, 17, 35, 0.2)', 
              'rgba(15, 102, 25, 0.2)', 
              'rgba(13, 26, 50, 0.2)', 
              'rgba(300, 12, 235, 0.2)', 
              'rgba(5, 102, 255, 0.2)',                 
              ],
              data: [40,20,10,30,20,16,5,3,2,20]
            }
          ]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false
        }
      }
    },
    mounted () {
      this.renderChart(this.chartData, this.options)
    }
  }
</script>