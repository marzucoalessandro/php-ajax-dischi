let app = new Vue({
  el:"#root",

  data: {
    newList: []
  },

  mounted() {
    axios.get("https://cors-anywhere.herokuapp.com/database.php")
    .then(response => {
      let array = response.data;
      this.newList = array

    })
  }

})
