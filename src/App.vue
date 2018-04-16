<template>
  <div id="app">
    <fullPage>
      <navbar/>

      <fullSection id="section-1">
        <home/>
      </fullSection>
      
      <fullSection id="section-2">
      </fullSection>

      <fullSection id="section-3">
      </fullSection>

      <fullSection id="section-4">
      </fullSection>

      <fullSection id="section-5">
      </fullSection>
    </fullPage>
  </div>
</template>

<script>
import fullPage from './components/fullPage/fullPage.vue'
import fullSection from './components/fullPage/fullSection.vue'
import navbar from './components/elements/navbar.vue'
import home from './components/sections/home.vue'

export default {
  name: 'app',

  components: {
    fullPage,
    fullSection,
    navbar,
    home
  }
}
</script>

<style>
@import 'assets/css/styles.css';
</style>
