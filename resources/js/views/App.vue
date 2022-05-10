<template>
  <div>
    <header class="p-4 bg-slate-800 text-white">
      <nav>
        <ul class="flex gap-4">
          <router-link to="/posts">Posts</router-link>
          <router-link to="/contact">Contact</router-link>
        </ul>
      </nav>
    </header>
    <main>

    <router-view></router-view>

    </main>
    <footer class="p-4 bg-slate-800 text-white">
      Footer
    </footer>
  </div>
</template>

<script>



export default {
  components : {
    
  }
}
</script>

<style lang="scss" scoped>

</style>
