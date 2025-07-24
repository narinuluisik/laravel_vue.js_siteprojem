<template>
  <div>
    <AboutHero :about="about" />
    <VisionMission :vision="about.visyon" :mission="about.misyon" />
    <Projects :projects="projects" />
    <Team :team="team" />
  </div>
</template>

<script>
import AboutHero from '../sections/About/AboutHero.vue'
import VisionMission from '../sections/About/VisionMission.vue'
import Projects from '../sections/About/Projects.vue'
import Team from '../sections/About/Team.vue'

export default {
  components: { AboutHero, VisionMission, Projects, Team },
  data() {
    return {
      about: {},
      projects: [],
      team: [],
    }
  },
  mounted() {
    fetch('/api/about')
      .then(res => res.json())
      .then(data => {
        this.about = data.about
        this.projects = data.projects
        this.team = data.team.map(member => ({
          ...member,
          position: member.role // API'den gelen 'role' => 'position' olarak eşle
        }))
      })
      .catch(err => console.error(err))
  }
}
</script>
