<template>
  <div>
    <header class="p-4 bg-slate-800 text-white">
      <nav>
        <ul class="flex gap-4">
          <li><a href="">Home</a></li>
          <li><a href="">Posts</a></li>
        </ul>
      </nav>
    </header>
    <main>
    <PostsGrid/>
   
    </main>
    <footer class="p-4 bg-slate-800 text-white">
      Footer
    </footer>
  </div>
</template>

<script>

import PostsGrid from './Posts.index.vue'

export default {
  components : {
    PostsGrid,
  }
}
</script>

<style lang="scss" scoped>

</style>
