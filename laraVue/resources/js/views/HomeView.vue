<template>
     <span>{{ info }}</span>
</template>

<script>
// @ is an alias to /src
import axios from "axios";
export default {
  data() {
    return {
      info: null,
    };
  },
  mounted() {
    axios
      .get("http://localhost:8000/api/test")
      .then((response) => (this.info = response));
  },
};
</script>
