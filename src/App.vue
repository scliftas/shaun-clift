<template>
  <div id="app">
    <fullPage>
      <navbar/>

      <fullSection id="home">
        <transition appear>
          <home/>
        </transition>
      </fullSection>
      
      <fullSection id="about">
        <about/>
      </fullSection>

      <fullSection id="skills">
        <skills/>
      </fullSection>

      <fullSection id="experience">
        <experience/>
      </fullSection>

      <fullSection id="contact">
        <contact/>
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
import skills from './components/sections/skills.vue'
import experience from './components/sections/experience.vue'
import contact from './components/sections/contact.vue'

export default {
  name: 'app',

  components: {
    fullPage,
    fullSection,
    navbar,
    home,
    about,
    skills,
    experience,
    contact
  }
}
</script>

<style>
/* animation */
.v-enter-active, .v-leave-active {
  transition: opacity 2s;
}
.v-enter, .v-leave-to {
  opacity: 0;
}

/* general */
#title, .nav-link, h1, h3, p {
    color: #FFFFFF !important;
}

#subtitle, .nav-link:hover, h2 {
    color: #868686 !important;
}

/* sections */
.section {
    text-align: center;
    padding-top: 5em;
    padding-bottom: 5em;
    padding-left: 2.5em;
    padding-right: 2.5em;
}

.section-child {
    height: 100%;
}

.vertical-align {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
}
</style>
