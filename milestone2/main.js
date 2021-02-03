let app = new Vue({
  el:"#root",

  data: {
    newList: []
  },

  mounted() {
    axios.get("../database/api_database.php")
    .then(response => {
      // console.log(response);
      let array = response.data;
      this.newList = array

    })
  }

})
