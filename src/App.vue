<template>
  <div id="app">
    <fullPage>
      <navbar/>

      <fullSection id="home">
        <home/>
      </fullSection>
      
      <fullSection id="about">
        <about/>
      </fullSection>

      <fullSection id="skills">
      </fullSection>

      <fullSection id="experience">
      </fullSection>

      <fullSection id="contact">
      </fullSection>
    </fullPage>
  </div>
</template>

<script>
import fullPage from './components/fullPage/fullPage.vue'
import fullSection from './components/fullPage/fullSection.vue'
import navbar from './components/elements/navbar.vue'
import home from './components/sections/home.vue'
import about from './components/sections/about.vue'

export default {
  name: 'app',

  components: {
    fullPage,
    fullSection,
    navbar,
    home,
    about
  }
}
</script>

<style>
@import 'assets/css/styles.css';
</style>
