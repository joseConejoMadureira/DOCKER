<template>
  <span>{{ info }}</span>
</template>

<script>

import axios from "axios";


export default {
  data() {
    return {
      info: null
    }
  },
  mounted () {
    axios
      .get('http://localhost:8425/')
      .then(response => (this.info = response))
  }

  
}
</script>
