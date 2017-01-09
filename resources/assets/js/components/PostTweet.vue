<template lang="html">
  <form action="#" @submit.prevent="post">
    <div class="form-group">
      <textarea rows="2" cols="8" class="form-control" v-model="body"></textarea>
      <button type="submit" class="btn btn-default">Post</button>
    </div>
  </form>
</template>

<script>
export default {

  props: ['tweets'],

  data() {
    return {
      body: null
    };
  },
  methods: {
    post(){
      this.$http.post('/tweets', {body: this.body}).then(response => {
        this.tweets.unshift(response.body);
        this.body = null;
      });
    }
  }

}
</script>

<style lang="css">
</style>
