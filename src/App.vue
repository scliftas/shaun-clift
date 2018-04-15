<template>
  <div id="app">
    <fullPage>
      <navbar/>

      <fullSection>
        Test
      </fullSection>
      
      <fullSection>
        Test 2
      </fullSection>
    </fullPage>
  </div>
</template>

<script>
import fullPage from './components/fullPage/fullPage.vue'
import fullSection from './components/fullPage/fullSection.vue'
import navbar from './components/elements/navbar.vue'

export default {
  name: 'app',

  components: {
    fullPage,
    fullSection,
    navbar
  }
}
</script>

<style>
@import 'assets/css/styles.css';
</style>
