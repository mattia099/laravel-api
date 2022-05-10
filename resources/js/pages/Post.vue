<template>
  <div class="bg-slate-700">
    <img v-if="post" src="https://picsum.photos/1920/500" alt="">
    <div class="container">
      
      <h1 class="title text-3xl text-white py-8" v-if="post">{{post.title}}</h1>
      <p class="content text-slate-300 pb-4" v-if="post">{{post.content}}</p>
      <p class="card_category text-amber-400 py-2" v-if="post.category">{{post.category.name}}</p>
      <ul class="flex flex-wrap gap-4 py-2" v-if="post">
        <li class="tag bg-green-400 rounded-full text-slate-100 px-3 py-1" v-for="tag in post.tags" :key="tag.id">{{tag.name}}</li>
      </ul>
    </div>
  </div>  
</template>

<script>
export default {
  data(){
    return{
      post: null,
    }
  },
  mounted(){
    console.log(this.$route)
  },
  beforeMount(){
    axios.get(`/api/posts/${ this.$route.params.slug }`)
    .then ( res=>{
      const {post}  = res.data
      this.post = post;
    })
    .catch( err=>{
      console.warn(err)
    })
  }
}
</script>

<style>

</style>