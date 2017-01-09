<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Timeline</div>

                    <div class="panel-body">

                      <post-tweet :tweets="tweets"></post-tweet>

                      <hr>
                      
                        <div class="media" v-for="tweet in tweets">
                            <div class="media-left">

                            </div>
                            <div class="media-body">
                                <strong>{{ tweet.user.name }}</strong>
                                <p>{{ tweet.body }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

  import PostTweet from "./PostTweet.vue"

    export default {
      data(){
        return {
          tweets: []
        };
      },
      components: {
          'post-tweet': PostTweet
      },
      mounted() {
          this.$http.get('/tweets').then(response => {
             this.tweets = response.body
          });
      }
    }
</script>
