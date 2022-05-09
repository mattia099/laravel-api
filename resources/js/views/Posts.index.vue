<template>
  <div class="bg-slate-700 py-8">
    <div class="container">
      <div class="grid  grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 ">
        <div class="rounded bg-zinc-400 overflow-hidden" v-for="post in posts" :key="post.id">
          <div class="card-header">
            <img class="" src="https://picsum.photos/400/200" alt="">
          </div>
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
     <div class="container py-4">
      <ul class="flex justify-center gap-6">
        <li @click="fetchPosts(n)" :class="[ currentPage == n ? 'bg-green-300' : 'bg-white/30' , 'dot cursor-pointer rounded-full h-10 w-10 flex items-center flex items-center justify-center text-white']" v-for="n in lastPage" :key="n">{{n}}</li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      posts : [],
      lastPage: 0,
      currentPage: 1,
    }
  },
  methods: {
    fetchPosts(page=1){
      axios.get('/api/posts',{
        params: {
          page
        }
      })
      .then( res=> {
        console.log(res.data.posts.data);
        this.currentPage = res.data.posts.current_page;
        this.lastPage = res.data.posts.last_page;
        console.log( this.currentPage ,this.lastPage);
        this.posts = res.data.posts.data;
      })
      .catch(err=>{
        console.warn(err);
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