<template>
  <div class="bg-slate-700 py-8">
    <div class="container">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 ">
        <div class="rounded bg-zinc-400 overflow-hidden" v-for="post in posts" :key="post.id">

          <img class="" src="https://picsum.photos/300/200" alt="">
          <div class="card-body p-4">
            <h4 class="card_title text-2xl py-2">{{post.title}}</h4>
            <p class="card_category text-amber-400 py-2" v-if="post.category">{{post.category.name}}</p>
            <ul class="flex flex-wrap gap-4 py-2">
              <li class="tag bg-green-400 rounded-full text-slate-100 px-3 py-1" v-for="tag in post.tags" :key="tag.id">{{tag.name}}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      posts : []
    }
  },
  methods: {
    fetchPosts(){
      axios.get('/api/posts')
      .then( res=> {
        console.log(res.data.posts)
        this.posts=res.data.posts;
      })
      .catch(err=>{
        console.warn(err)
      })
    }
  },
  mounted(){
    this.fetchPosts();
  }
  
}
</script>

<style lang="scss" scoped>

</style>