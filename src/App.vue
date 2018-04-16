<template>
  <div id="app">
    <fullPage>
      <navbar/>

      <fullSection id="section-1">
        Test
      </fullSection>
      
      <fullSection id="section-2">
        Test 2
      </fullSection>

      <fullSection id="section-3">
        Test 3
      </fullSection>

      <fullSection id="section-4">
        Test 4
      </fullSection>

      <fullSection id="section-5">
        Test 5
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
