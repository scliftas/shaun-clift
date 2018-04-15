<template>
  <div id="app">
    <fullPage>
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
import fullPage from './components/fullPage.vue'
import fullSection from './components/fullSection.vue'

export default {
  name: 'app',

  components: {
    fullPage,
    fullSection
  }
}
</script>
